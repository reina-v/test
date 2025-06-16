document.addEventListener('DOMContentLoaded', () => {
    const backBtn = document.getElementById('back-button');
    if (backBtn) {
        backBtn.addEventListener('click', () => {
            const href = backBtn.dataset.href;
            if (href) {
                window.location.href = href;
            }
        });
    }
});
