document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('login-form').addEventListener('submit', function (e) {
        const email = document.getElementById('email').value.trim();
        const password = document.getElementById('password').value.trim();

        if (!email || !password) {
            e.preventDefault();
            alert('メールアドレスとパスワードを入力してください。');
        }
    });

    const registerBtn = document.getElementById('register-button');
    if (registerBtn) {
        const href = registerBtn.dataset.href;
        registerBtn.addEventListener('click', function () {
            if (href) {
                window.location.href = href;
            }
        });
    }
});
