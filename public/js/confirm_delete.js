document.addEventListener('DOMContentLoaded', () => {
    const deleteButtons = document.querySelectorAll('.delete-button');

    deleteButtons.forEach(button => {
        button.addEventListener('click', function (event) {
            const confirmed = window.confirm('本当に削除しますか？');
            if (!confirmed) {
                event.preventDefault();
            }
        });
    });
});
