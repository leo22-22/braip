function toggleMenu() {
    var menu = document.getElementById("menu");
    if (menu.style.display === "block") {
        menu.style.display = "none";  
    } else {
        menu.style.display = "block";
    }
}

function toggleMenu() {
    const menu = document.getElementById('menu');
    const hamburger = document.querySelector('.hamburguer');

    // Alterna a classe "show" para exibir/ocultar o menu
    menu.classList.toggle('show');
    
    // Alterna a classe "active" para animar o botão hambúrguer
    hamburger.classList.toggle('active');
}