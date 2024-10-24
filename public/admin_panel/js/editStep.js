document.addEventListener('DOMContentLoaded', function () {
    var editModal = document.getElementById('editStep');
    if (editModal) {
        editModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget;
            var id = button.getAttribute('data-id');
            var title = button.getAttribute('data-title');
            var description = button.getAttribute('data-description');

            var modalTitle = editModal.querySelector('.modal-title');
            var modalBodyTitle = editModal.querySelector('.modal-body #title');
            var modalBodyDescription = editModal.querySelector('.modal-body #description');
            var form = editModal.querySelector('form');

            modalTitle.textContent = 'Edit Step: ' + title;
            modalBodyTitle.value = title;
            modalBodyDescription.value = description;
            form.action = '/step/' + id;
        });
    }
});
