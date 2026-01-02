console.log('Speech Manager (Local Google Voices) loaded');

const SpeechManager = {
    synth: window.speechSynthesis,
    speaking: false,
    currentUtterance: null,
    voices: [],
    activeButton: null, // Keep this for button state management

    init: function () {
        // Hide buttons by default until we confirm voices are available
        this.hideButtons();

        if (!this.isSupported()) {
            console.warn('Speech Synthesis not supported');
            return;
        }

        // Load voices immediately
        this.loadVoices();

        // Wait for voices to change (needed for Chrome/Android)
        if (this.synth.onvoiceschanged !== undefined) {
            this.synth.onvoiceschanged = () => {
                console.log('Voices changed event fired');
                this.loadVoices();
            };
        }

        // Retry loading voices after a short delay if empty
        if (this.voices.length === 0) {
            setTimeout(() => this.loadVoices(), 500);
            setTimeout(() => this.loadVoices(), 2000);
        }
    },

    isSupported: function () {
        return 'speechSynthesis' in window;
    },

    loadVoices: function () {
        this.voices = this.synth.getVoices();
        console.log(`Loaded ${this.voices.length} voices.`);

        if (this.voices.length > 0) {
            this.showButtons();
        }
    },

    hideButtons: function () {
        document.querySelectorAll('.btn-read-aloud').forEach(btn => {
            btn.style.display = 'none';
        });
    },

    showButtons: function () {
        document.querySelectorAll('.btn-read-aloud').forEach(btn => {
            btn.style.display = 'inline-flex';
            btn.classList.remove('disabled');
            btn.disabled = false;
        });
    },

    getVoice: function (lang) {
        if (this.voices.length === 0) this.loadVoices();

        const targetLang = lang === 'id' ? 'id-ID' : 'en-US';
        let voice = null;

        // 1. Priority: Look for specific "Google" voices
        if (lang === 'id') {
            voice = this.voices.find(v => v.name.includes('Google Bahasa Indonesia') && v.lang === 'id-ID');
            if (!voice) voice = this.voices.find(v => v.name.includes('Google') && v.lang === 'id-ID');
        } else {
            voice = this.voices.find(v => v.name.includes('Google US English') && v.lang === 'en-US');
            if (!voice) voice = this.voices.find(v => v.name.includes('Google') && v.lang === 'en-US');
        }

        // 2. Fallback: Exact language match
        if (!voice) {
            voice = this.voices.find(v => v.lang === targetLang);
        }

        // 3. Fallback: Any voice starting with the language code
        if (!voice) {
            const shortLang = targetLang.split('-')[0];
            voice = this.voices.find(v => v.lang.startsWith(shortLang));
        }

        console.log(`Selected voice for ${lang}:`, voice ? `${voice.name} (${voice.lang})` : 'Default Browser Voice');
        return voice;
    },

    speak: function (text, lang) {
        if (!this.isSupported()) return;

        this.stop(); // Stop current speech

        const utterance = new SpeechSynthesisUtterance(text);

        // Set language
        utterance.lang = lang === 'id' ? 'id-ID' : 'en-US';

        // Set voice
        const voice = this.getVoice(lang);
        if (voice) {
            utterance.voice = voice;
        }

        // Events
        utterance.onstart = () => {
            console.log('Speech started');
            this.speaking = true;
            this.updateButtonState(true);
        };

        utterance.onend = () => {
            console.log('Speech ended');
            this.speaking = false;
            this.updateButtonState(false);
            this.currentUtterance = null;
        };

        utterance.onerror = (e) => {
            console.error('Speech error:', e);
            this.speaking = false;
            this.updateButtonState(false);

            if (e.error === 'interrupted') return;
            console.warn('Speech synthesis error occurred.');
        };

        this.currentUtterance = utterance;
        this.synth.speak(utterance);
    },

    stop: function () {
        if (this.synth.speaking || this.speaking) {
            this.synth.cancel();
        }
        this.speaking = false;
        this.updateButtonState(false);
    },

    toggle: function (text, lang, buttonElement) {
        const selectedLang = lang || (typeof currentLang !== 'undefined' ? currentLang : 'id');

        if (this.speaking && this.activeButton === buttonElement) {
            this.stop();
            return;
        }

        this.activeButton = buttonElement;
        this.speak(text, selectedLang);
    },

    updateButtonState: function (isPlaying) {
        document.querySelectorAll('.btn-read-aloud i').forEach(icon => {
            icon.className = 'bi bi-volume-up-fill';
        });
        document.querySelectorAll('.btn-read-aloud').forEach(btn => {
            btn.classList.remove('btn-primary', 'text-white');
            btn.classList.add('btn-outline-primary');
        });

        if (isPlaying && this.activeButton) {
            const icon = this.activeButton.querySelector('i');
            if (icon) icon.className = 'bi bi-stop-fill';

            this.activeButton.classList.remove('btn-outline-primary');
            this.activeButton.classList.add('btn-primary', 'text-white');
        }
    }
};

document.addEventListener('DOMContentLoaded', function () {
    SpeechManager.init();

    document.body.addEventListener('click', function (e) {
        const btn = e.target.closest('.btn-read-aloud');
        if (btn) {
            const targetId = btn.getAttribute('data-target');
            const targetEl = document.querySelector(targetId);

            if (targetEl) {
                const text = targetEl.innerText.replace(/\s+/g, ' ').trim();
                const lang = typeof currentLang !== 'undefined' ? currentLang : 'id';
                SpeechManager.toggle(text, lang, btn);
            }
        }
    });
});
