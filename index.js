function toggleMenu() {
    var menu = document.getElementById("menu");
    if (menu.style.display === "block") {
        menu.style.display = "none";  // Corrigido de 'dusplay' para 'display'
    } else {
        menu.style.display = "block";
    }
}

function toggleMenu() {
    const menu = document.getElementById('menu');
    const hamburger = document.querySelector('.hamburguer');
    menu.classList.toggle('show');
    hamburger.classList.toggle('active');
}
