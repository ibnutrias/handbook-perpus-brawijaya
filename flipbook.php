<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Advanced PDF Flipbook</title>
    <style>
        body {
            background: #2d2d2d;
            margin: 0;
            padding: 0;
            overflow: hidden;
            /* Prevent scrolling in normal mode */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
        }

        /* --- STAGE & ZOOM CONTAINER --- */
        #zoom-viewport {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            /* Hidden by default, 'auto' when zoomed */
            transition: all 0.3s ease;
            padding-bottom: 80px;
            /* Space for controls */
            box-sizing: border-box;
        }

        #flipbook {
            transition: transform 0.3s ease;
            /* Smooth zoom transition */
        }

        #flipbook .page {
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        canvas {
            width: 100% !important;
            height: 100% !important;
            object-fit: contain;
        }

        /* --- CONTROLS --- */
        .controls {
            position: fixed;
            bottom: 30px;
            background: rgba(43, 61, 43, 0.4);
            /* Transparent Army Green */
            backdrop-filter: blur(15px);
            /* Glassmorphism Effect */
            -webkit-backdrop-filter: blur(15px);
            /* Safari support */
            padding: 10px 30px;
            border-radius: 50px;
            display: flex;
            gap: 25px;
            align-items: center;
            color: white;
            z-index: 999;
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.3);
            /* Glass shadow */
            border: 1px solid rgba(255, 255, 255, 0.2);
            /* Subtle white border */
            transition: all 0.3s ease;
        }

        .btn {
            background: #ffffff;
            /* White background for max contrast */
            border: 2px solid #8B8000;
            color: #2b3d2b;
            /* Dark Green Icon */
            width: 50px;
            /* Larger touch target */
            height: 50px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            /* Larger icon */
            transition: all 0.2s;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .btn:hover {
            background: #ffd700;
            /* Gold on hover */
            color: #000;
            transform: scale(1.1);
        }

        .btn:active {
            transform: scale(0.95);
        }

        .page-info {
            font-size: 18px;
            /* Larger font */
            font-weight: 700;
            letter-spacing: 1px;
            min-width: 100px;
            text-align: center;
            color: #fff;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.5);
        }

        /* Loading Spinner */
        #loader {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 24px;
            font-weight: bold;
            z-index: 1000;
            background: rgba(0, 0, 0, 0.7);
            padding: 20px 40px;
            border-radius: 10px;
        }

        /* --- MOBILE RESPONSIVENESS --- */
        @media (max-width: 768px) {
            .controls {
                bottom: 15px;
                padding: 8px 15px;
                gap: 10px;
                width: 90%;
                justify-content: space-between;
                flex-wrap: wrap;
            }

            .btn {
                width: 35px;
                height: 35px;
                font-size: 16px;
                border-width: 1.5px;
            }

            #page-flip-sound,
            #zoom-btn,
            #sound-btn {
                /* Keep essential buttons, maybe hide less important ones if crowded? 
                  For now keeping all but smaller */
            }

            .page-info {
                font-size: 14px;
                min-width: 60px;
            }
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/turn.js/3/turn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.4.120/pdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
</head>

<body>

    <div id="loader">Loading PDF...</div>

    <div id="zoom-viewport">
        <div id="flipbook"></div>
    </div>

    <div class="controls">
        <button class="btn" id="first-btn" title="First Page">⏮</button>
        <button class="btn" id="prev-btn" title="Previous">❮</button>

        <span class="page-info">
            <span id="page-current">1</span> / <span id="page-total">--</span>
        </span>

        <button class="btn" id="next-btn" title="Next">❯</button>
        <button class="btn" id="last-btn" title="Last Page">⏭</button>

        <div style="width:1px; height:20px; background:rgba(255,255,255,0.3);"></div>

        <button class="btn" id="zoom-btn" title="Toggle Zoom">🔍</button>
        <button class="btn" id="sound-btn" title="Toggle Sound">🔊</button>
    </div>

    <audio id="page-flip-sound" src="assets/other/page-flip-01a.mp3" preload="auto"></audio>

    <script>
        // --- CONFIGURATION ---
        const pdfUrl = 'assets/pdf/Handbook.pdf'; // REPLACE THIS
        let isZoomed = false;
        let isSoundOn = true;
        let book = null;

        // --- PDF LOADER ---
        const pdfjsLib = window['pdfjs-dist/build/pdf'];
        pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.4.120/pdf.worker.min.js';

        pdfjsLib.getDocument(pdfUrl).promise.then(async pdf => {
            const numPages = pdf.numPages;
            document.getElementById('page-total').textContent = numPages;
            const flipbookEl = document.getElementById('flipbook');

            // Render Pages
            const renderPromises = [];
            for (let i = 1; i <= numPages; i++) {
                const pageDiv = document.createElement('div');
                pageDiv.className = 'page';
                flipbookEl.appendChild(pageDiv);

                const promise = pdf.getPage(i).then(page => {
                    const canvas = document.createElement('canvas');
                    const ctx = canvas.getContext('2d');
                    pageDiv.appendChild(canvas);

                    // High Quality Scale
                    const viewport = page.getViewport({ scale: 2.0 });
                    canvas.width = viewport.width;
                    canvas.height = viewport.height;

                    return page.render({ canvasContext: ctx, viewport: viewport }).promise;
                });
                renderPromises.push(promise);
            }

            await Promise.all(renderPromises);
            document.getElementById('loader').style.display = 'none';

            // --- INITIALIZE TURN.JS ---
            book = $(flipbookEl);

            // Initial size placeholder, will be resized immediately
            book.turn({
                width: 1000,
                height: 600,
                autoCenter: true,
                duration: 1000,
                acceleration: true,
                gradients: true,
                elevation: 50,
                display: 'double', // Default
                when: {
                    turning: function (e, page, view) {
                        playSound();
                        updateControls(page);
                    }
                }
            });

            // --- ADD HAMMER.JS GESTURES ---
            initGestures();

            // --- RESPONSIVE LOGIC ---
            resizeFlipbook(); // Call once on start
            $(window).resize(resizeFlipbook); // Bind to resizing

        }).catch(err => {
            console.error(err);
            document.getElementById('loader').textContent = 'Error loading PDF';
        });

        // --- RESIZE FUNCTION ---
        function resizeFlipbook() {
            if (!book) return;

            const winW = $(window).width();
            const winH = $(window).height();

            // Breakpoint for Mobile (Single Page Mode)
            const isMobile = winW < 768;

            let targetWidth, targetHeight;
            let displayMode = isMobile ? 'single' : 'double';

            // Calculate max available space
            // Reserve space for controls (bottom) + comfortable margin
            // Since we added padding-bottom 80px to viewport, the "flex" height is effectively reduced.
            // But let's be explicit with max dimensions to be safe.
            const horizontalMargin = isMobile ? 20 : 100;
            const verticalMargin = isMobile ? 120 : 160; // Top + Bottom clearance

            const availW = winW - horizontalMargin;
            const availH = winH - verticalMargin;

            if (isMobile) {
                // SINGLE PAGE MODE
                const pageAspect = 0.707; // Approx A4 width/height

                // Try fitting height first
                targetHeight = availH;
                targetWidth = targetHeight * pageAspect;

                // If too wide, fit width
                if (targetWidth > availW) {
                    targetWidth = availW;
                    targetHeight = targetWidth / pageAspect;
                }
            } else {
                // DOUBLE PAGE MODE
                const bookAspect = 0.707 * 2; // ~1.414 

                // Try fitting available width
                targetWidth = availW;
                targetHeight = targetWidth / bookAspect;

                // If too tall, fit height
                if (targetHeight > availH) {
                    targetHeight = availH;
                    targetWidth = targetHeight * bookAspect;
                }
            }

            // Apply Changes
            book.turn('display', displayMode);
            book.turn('size', targetWidth, targetHeight);

            // Removed manual CSS .css({left, top}) because Flexbox (#zoom-viewport) handles centering now.
            // The padding-bottom on the viewport ensures it looks centered in the *visual* space above controls.
        }


        // --- ADVANCED FEATURES IMPLEMENTATION ---

        // 1. Gesture Support (Hammer.js)
        function initGestures() {
            const hammer = new Hammer(document.getElementById('zoom-viewport'));

            // Allow swipe in any direction
            hammer.get('swipe').set({ direction: Hammer.DIRECTION_HORIZONTAL });

            hammer.on("swipeleft", function () {
                if (!isZoomed) book.turn('next');
            });

            hammer.on("swiperight", function () {
                if (!isZoomed) book.turn('previous');
            });
        }

        // 2. Zoom Logic
        $('#zoom-btn').click(function () {
            isZoomed = !isZoomed;
            const viewport = $('#zoom-viewport');
            const bookEl = $('#flipbook');
            const icon = $(this);

            if (isZoomed) {
                // Zoom IN
                icon.text('❌'); // Change icon to "Close"

                // Allow scrolling
                viewport.css('overflow', 'auto');
                viewport.css('display', 'block'); // Change from flex to block to allow scroll

                // Scale up the book
                bookEl.turn('disable', true); // Disable turning while zoomed to prevent bugs
                bookEl.css('transform', 'scale(1.5)');
                // bookEl.css('margin', '50px auto'); // Margin might conflict with absolute positioning from resizing?
                // Let's just rely on transform-origin or basic scaling
                bookEl.css('transform-origin', 'top left');

            } else {
                // Zoom OUT (Reset)
                icon.text('🔍');

                viewport.css('overflow', 'hidden');
                viewport.css('display', 'flex'); // Back to flex centering
                viewport.scrollTop(0);

                bookEl.turn('disable', false); // Re-enable turning
                bookEl.css('transform', 'scale(1)');

                // Re-trigger resize to ensure correct position
                resizeFlipbook();
            }
        });

        // 3. Sound Logic
        $('#sound-btn').click(function () {
            isSoundOn = !isSoundOn;
            $(this).text(isSoundOn ? '🔊' : '🔇');
            $(this).css('opacity', isSoundOn ? '1' : '0.5');
        });

        function playSound() {
            if (isSoundOn) {
                const audio = document.getElementById('page-flip-sound');
                audio.currentTime = 0;
                audio.play().catch(e => console.log('Audio autoplay blocked')); // Handle browser policies
            }
        }

        // 4. Standard Controls
        $('#prev-btn').click(() => book.turn('previous'));
        $('#next-btn').click(() => book.turn('next'));

        // Jump to Start/End
        $('#first-btn').click(() => book.turn('page', 1));
        $('#last-btn').click(() => book.turn('page', $('#flipbook').turn('pages')));

        function updateControls(page) {
            $('#page-current').text(page);
        }

        // Keyboard support
        $(document).keydown(function (e) {
            if (isZoomed) return; // Disable keyboard nav when zoomed
            if (e.keyCode == 37) book.turn('previous');
            if (e.keyCode == 39) book.turn('next');
        });

    </script>

</body>

</html>