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
        ModalText.innerText = `Sei sicuro di volere cancellare ${comicTitle}`;

        buttonDelete.addEventListener('click', function () {
            button.parentElement.submit();
        })
    }
    );
})