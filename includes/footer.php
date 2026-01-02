    <footer class="bg-dark text-white text-center py-4 mt-5">
        <div class="container">
            <p class="mb-0">&copy; <?php echo date("Y"); ?> <span data-i18n="footer_copyright">Perpustakaan Museum Brawijaya. Hak Cipta Dilindungi.</span></p>
            <small class="text-muted" data-i18n="footer_dedication">Didedikasikan untuk Pendidikan dan Pelestarian Sejarah.</small>
        </div>
    </footer>

    <!-- Global Image Modal -->
    <div class="modal fade" id="globalImageModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content bg-transparent border-0 position-relative">
                <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3 z-3" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body text-center p-0">
                    <img src="" id="globalModalImage" class="img-fluid rounded shadow-lg" alt="Preview">
                    <div id="globalModalCaption" class="text-white mt-2 text-center fst-italic"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Custom Scripts -->
    <script src="assets/js/translations.js"></script>
    <script src="assets/js/speech_manager.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var imageModal = new bootstrap.Modal(document.getElementById('globalImageModal'));
            var modalImage = document.getElementById('globalModalImage');
            var modalCaption = document.getElementById('globalModalCaption');

            // Select all images except those inside the modal itself
            var images = document.querySelectorAll('img:not(#globalModalImage)');

            images.forEach(function(img) {
                img.style.cursor = 'pointer'; 
                
                img.addEventListener('click', function(e) {
                    modalImage.src = this.src;
                    modalImage.alt = this.alt;
                    modalCaption.textContent = this.alt || ''; // Set caption from alt text
                    
                    // Reset zoom
                    modalImage.classList.remove('zoomed');
                    
                    imageModal.show();
                });
            });

            // Zoom functionality
            modalImage.addEventListener('click', function() {
                this.classList.toggle('zoomed');
            });
        });
    </script>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
