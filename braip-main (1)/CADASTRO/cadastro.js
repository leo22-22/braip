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


function validateForm() {
    var email = document.getElementById("email").value;
    var cpfCnpj = document.getElementById("cpf_cnpj").value;

    // Validação de email
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        alert("Por favor, insira um email válido.");
        return false;
    }

    // Validação de CPF ou CNPJ
    if (!validateCpfCnpj(cpfCnpj)) {
        alert("Por favor, insira um CPF ou CNPJ válido.");
        return false;
    }

    return true;
}

function validateCpfCnpj(value) {
    // Remove caracteres não numéricos
    value = value.replace(/[^\d]+/g, '');

    if (value.length === 11) {
        return validateCpf(value);
    } else if (value.length === 14) {
        return validateCnpj(value);
    } else {
        return false;
    }
}

function validateCpf(cpf) {
    var sum = 0;
    var remainder;

    if (cpf == "00000000000") return false;

    for (var i = 1; i <= 9; i++) sum += parseInt(cpf.substring(i - 1, i)) * (11 - i);
    remainder = (sum * 10) % 11;

    if ((remainder == 10) || (remainder == 11)) remainder = 0;
    if (remainder != parseInt(cpf.substring(9, 10))) return false;

    sum = 0;
    for (var i = 1; i <= 10; i++) sum += parseInt(cpf.substring(i - 1, i)) * (12 - i);
    remainder = (sum * 10) % 11;

    if ((remainder == 10) || (remainder == 11)) remainder = 0;
    if (remainder != parseInt(cpf.substring(10, 11))) return false;

    return true;
}

function validateCnpj(cnpj) {
    var length = cnpj.length - 2;
    var numbers = cnpj.substring(0, length);
    var digits = cnpj.substring(length);
    var sum = 0;
    var pos = length - 7;

    for (var i = length; i >= 1; i--) {
        sum += numbers.charAt(length - i) * pos--;
        if (pos < 2) pos = 9;
    }

    var result = sum % 11 < 2 ? 0 : 11 - sum % 11;
    if (result != digits.charAt(0)) return false;

    length = length + 1;
    numbers = cnpj.substring(0, length);
    sum = 0;
    pos = length - 7;

    for (var i = length; i >= 1; i--) {
        sum += numbers.charAt(length - i) * pos--;
        if (pos < 2) pos = 9;
    }

    result = sum % 11 < 2 ? 0 : 11 - sum % 11;
    if (result != digits.charAt(1)) return false;

    return true;
}
