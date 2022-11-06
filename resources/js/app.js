import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Modal
function openUserDeleteModal(name, action) {
    const modalElement = document.getElementById('delete-user-modal');
    if (!modalElement) {
        return;
    }

    modalElement.classList.remove('hidden');
    modalElement.querySelector('#modal-title span').textContent = name;
    modalElement.querySelector('form').setAttribute('action', action);
}

function closeUserDeleteModal() {
    const modalElement = document.getElementById('delete-user-modal');
    if (!modalElement) {
        return;
    }

    modalElement.classList.add('hidden');
}

function attachDeleteUserModalHandlers() {
    const modalElement = document.getElementById('delete-user-modal');
    if (!modalElement) {
        return;
    }

    const cancelButton = modalElement.querySelector('#delete-user-cancel');
    if (cancelButton) {
        cancelButton.addEventListener('click', function() {
            closeUserDeleteModal();
        })
    }
}

function attachDeleteUserHandlers() {
    const deleteButtonElements = document.querySelectorAll('.delete-user');
    if (!deleteButtonElements.length) {
        return;
    }

    deleteButtonElements.forEach(element => {
        element.addEventListener('click', function() {
            openUserDeleteModal(this.dataset.name, this.dataset.action);
        });
    });
}

window.addEventListener('DOMContentLoaded', function() {
    attachDeleteUserModalHandlers();
    attachDeleteUserHandlers();    
});
