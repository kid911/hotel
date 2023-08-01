document.getElementById('header-toggle').addEventListener('click', function() {
    document.getElementById('sidebar').classList.toggle('active');
    document.querySelector('.main-content').classList.toggle('active');
});
