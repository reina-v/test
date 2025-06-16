document.addEventListener('DOMContentLoaded', function () {
    const registerBtn = document.querySelector('.js-goto-register');
    if (registerBtn) {
        registerBtn.addEventListener('click', function () {
            window.location.href = registerBtn.dataset.href;
        });
    }
});
