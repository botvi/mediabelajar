// Loading Page Logic
const links = document.querySelectorAll('.link-page');
links.forEach(link => {
    link.addEventListener('click', function (event) {
        event.preventDefault();
        showLoadingPage();
        const href = this.href;
        setTimeout(function () {
            window.location.href = href;
        }, 1000); // Adjust time as needed
    });
});

function showLoadingPage() {
    const loadingPage = `
    <div style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: #26355d; display: flex; justify-content: center; align-items: center; z-index: 9999;">
    <div style="display: flex; flex-direction: column; align-items: center;">
        <div class="spinner" style="position: relative; width: 120px; height: 120px;">
            <div style="position: absolute; top: 0; left: 50%; transform: translateX(-50%); width: 0; height: 0; border-left: 8px solid transparent; border-right: 8px solid transparent; border-bottom: 16px solid #3498db;"></div>
            <div style="border: 16px solid #26355d; border-top: 16px solid #3498db; border-radius: 50%; width: 120px; height: 120px; animation: spin 2s linear infinite;"></div>
        </div>
        <div style="color: #fff; font-size: 1.5em; margin-top: 20px;">Loading...</div>
    </div>
</div>
    `;
    document.body.insertAdjacentHTML('beforeend', loadingPage);
}

