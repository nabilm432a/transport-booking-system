import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Get the modal
const modal = document.getElementById('floating-window');

// Get the button that opens the modal
const btn = document.getElementById('open-modal-btn');

// Get the <span> element that closes the modal
const span = document.getElementsByClassName('close-btn')[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = 'block';
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = 'none';
}

window.onclick = function(event) {
    if (event.target === modal) {
        modal.style.display = 'none';
    }
}
