document.addEventListener('DOMContentLoaded', function() {
    var typed = new Typed(".auto-type", {
        strings: ["Student", "Unity Engineer", "Junior DevOps"],
        typeSpeed: 50,
        backSpeed: 50,
        loop: true
    });
});

function showSidebar() {
    const sidebar = document.querySelector('.sidebar');
    sidebar.style.display = 'flex'; // Mengatur tampilan sidebar menjadi flex
}

function hideSidebar() {
    const sidebar = document.querySelector('.sidebar');
    sidebar.style.display = 'none'; // Mengatur tampilan sidebar menjadi none
}
