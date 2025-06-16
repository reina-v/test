document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('register-form');
    const password = document.getElementById('password');
    const confirm = document.getElementById('password_confirmation');

    form.addEventListener('submit', function (e) {
        if (password.value !== confirm.value) {
            e.preventDefault();
            alert('パスワードと確認用パスワードが一致しません。');
            confirm.focus();
            return false;
        }
    });
});
