import './bootstrap';
import '~resources/scss/app.scss';
import '~icons/bootstrap-icons.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const delete_buttons = document.querySelectorAll('.delete');

delete_buttons.forEach((button) => {
    button.addEventListener('click', (event) => {
        event.preventDefault();

        const modal = document.getElementById('deleteModal');

        const bootstrap_modal = new bootstrap.Modal(modal);
        bootstrap_modal.show();

        const buttonDelete = modal.querySelector('.confirm-delete');

        const comicTitle = button.getAttribute('data-comictitle');

        const ModalText = modal.querySelector('#modal_text');
        ModalText.innerHTML = `Sei sicuro di volere cancellare <strong>${comicTitle}</strong>`;

        buttonDelete.addEventListener('click', function () {
            button.parentElement.submit();
        })
    }
    );
})