// Pop Ups

/* ------------------- Adm Condomínios -------------- */
document.addEventListener("DOMContentLoaded", function() {
    var openPopupAdmCondominios = document.getElementById("admCondominios-servicos");
    var popupAdmCondominios = document.getElementById("popup-admCondominios");
    var closePopupAdmCondominios = document.getElementById("closePopupAdmCondominios");

    // Evento para abrir o pop-up
    openPopupAdmCondominios.addEventListener("click", function(event) {
        event.preventDefault(); // Prevenir o comportamento padrão do link
        popupAdmCondominios.style.display = "flex"; // Mostrar o pop-up
    });

    // Evento para fechar o pop-up
    closePopupAdmCondominios.addEventListener("click", function() {
        popupAdmCondominios.style.display = "none"; // Esconder o pop-up
    });

    // Fechar o pop-up se o usuário clicar fora do conteúdo do pop-up
    window.addEventListener("click", function(event) {
        if (event.target === popupAdmCondominios) {
            popupAdmCondominios.style.display = "none"; // Esconder o pop-up
        }
    });


    var openPopupAssessoriaContabil = document.getElementById("assessoria-contabil");
    var popupAssessoriaContabil = document.getElementById("popup-assessoriacontabil");
    var closePopupAssessoriaContabil = document.getElementById("closePopupAssessoriaContabil");

    // Evento para abrir o pop-up
    openPopupAssessoriaContabil.addEventListener("click", function(event) {
        event.preventDefault(); // Prevenir o comportamento padrão do link
        popupAssessoriaContabil.style.display = "flex"; // Mostrar o pop-up
    });

    // Evento para fechar o pop-up
    closePopupAssessoriaContabil.addEventListener("click", function() {
        popupAssessoriaContabil.style.display = "none"; // Esconder o pop-up
    });

    // Fechar o pop-up se o usuário clicar fora do conteúdo do pop-up
    window.addEventListener("click", function(event) {
        if (event.target === popupAssessoriaJuridica) {
            popupAssessoriaJuridica.style.display = "none"; // Esconder o pop-up
        }
    });


    var openPopupAssessoriaJuridica = document.getElementById("assessoria-juridica");
    var popupAssessoriaJuridica = document.getElementById("popup-assessoriajuridica");
    var closePopupAssessoriaJuridica = document.getElementById("closePopupAssessoriaJuridica");

    // Evento para abrir o pop-up
    openPopupAssessoriaJuridica.addEventListener("click", function(event) {
        event.preventDefault(); // Prevenir o comportamento padrão do link
        popupAssessoriaJuridica.style.display = "flex"; // Mostrar o pop-up
    });

    // Evento para fechar o pop-up
    closePopupAssessoriaJuridica.addEventListener("click", function() {
        popupAssessoriaJuridica.style.display = "none"; // Esconder o pop-up
    });

    // Fechar o pop-up se o usuário clicar fora do conteúdo do pop-up
    window.addEventListener("click", function(event) {
        if (event.target === popupAssessoriaJuridica) {
            popupAssessoriaJuridica.style.display = "none"; // Esconder o pop-up
        }
    });


    var openPopupSindicoProfissional = document.getElementById("sindico-profissional");
    var popupSindicoProfissional = document.getElementById("popup-sindicoProfissional");
    var closePopupSindicoProfissional = document.getElementById("closePopupSindicoProfissional");

    // Evento para abrir o pop-up
    openPopupSindicoProfissional.addEventListener("click", function(event) {
        event.preventDefault(); // Prevenir o comportamento padrão do link
        popupSindicoProfissional.style.display = "flex"; // Mostrar o pop-up
    });

    // Evento para fechar o pop-up
    closePopupSindicoProfissional.addEventListener("click", function() {
        popupSindicoProfissional.style.display = "none"; // Esconder o pop-up
    });

    // Fechar o pop-up se o usuário clicar fora do conteúdo do pop-up
    window.addEventListener("click", function(event) {
        if (event.target === popupSindicoProfissional) {
            popupSindicoProfissional.style.display = "none"; // Esconder o pop-up
        }
    });


    var openPopupRecursosHumanos = document.getElementById("recursos-humanos");
    var popupRecursosHumanos = document.getElementById("popup-recursosHumanos");
    var closePopupRecursosHumanos = document.getElementById("closePopupRecursosHumanos");

    // Evento para abrir o pop-up
    openPopupRecursosHumanos.addEventListener("click", function(event) {
        event.preventDefault(); // Prevenir o comportamento padrão do link
        popupRecursosHumanos.style.display = "flex"; // Mostrar o pop-up
    });

    // Evento para fechar o pop-up
    closePopupRecursosHumanos.addEventListener("click", function() {
        popupRecursosHumanos.style.display = "none"; // Esconder o pop-up
    });

    // Fechar o pop-up se o usuário clicar fora do conteúdo do pop-up
    window.addEventListener("click", function(event) {
        if (event.target === popupRecursosHumanos) {
            popupRecursosHumanos.style.display = "none"; // Esconder o pop-up
        }
    });


    var openPopupCobranca = document.getElementById("cobranca");
    var popupCobranca = document.getElementById("popup-cobranca");
    var closePopupCobranca = document.getElementById("closePopupCobranca");

    // Evento para abrir o pop-up
    openPopupCobranca.addEventListener("click", function(event) {
        event.preventDefault(); // Prevenir o comportamento padrão do link
        popupCobranca.style.display = "flex"; // Mostrar o pop-up
    });

    // Evento para fechar o pop-up
    closePopupCobranca.addEventListener("click", function() {
        popupCobranca.style.display = "none"; // Esconder o pop-up
    });

    // Fechar o pop-up se o usuário clicar fora do conteúdo do pop-up
    window.addEventListener("click", function(event) {
        if (event.target === popupCobranca) {
            popupCobranca.style.display = "none"; // Esconder o pop-up
        }
    });

});




// Animação Imagem do Above The Fold
window.addEventListener('scroll', function() {
    let scrolled = window.pageYOffset;
    let parallax = document.querySelector('.containerImagem-above-the-fold');
    parallax.style.backgroundPositionY = -(scrolled * 0.6) + 'px';
});

// Inicialização do Swiper com o efeito de coverflow
var swiper = new Swiper('.swiper-container', {
    loop: true,
    autoplay: {
    delay: 10000,
    },
    navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
    },
    pagination: {
    el: '.swiper-pagination',
    clickable: true,
    },
    effect: 'coverflow',
    coverflowEffect: {
    rotate: 50,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: true,
    },
    slidesPerView: 'auto',
    centeredSlides: true,
});

// Função para pausar o autoplay
function pauseAutoplay() {
    swiper.autoplay.stop();
}

// Função para retomar o autoplay
function resumeAutoplay() {
    swiper.autoplay.start();
}

// Adicionar eventos de mouse e toque aos slides
var slides = document.querySelectorAll('.swiper-slide');
slides.forEach(function(slide) {
    slide.addEventListener('mousedown', pauseAutoplay);
    slide.addEventListener('mouseup', resumeAutoplay);
    slide.addEventListener('touchstart', pauseAutoplay);
    slide.addEventListener('touchend', resumeAutoplay);
});



// Animação de pesquisa no google

const textElement = document.getElementById('text');
const textArray = ['Ômega Administradora Uberlândia'];
const typingSpeed = 150;
const erasingSpeed = 100;
const newTextDelay = 2000; // Delay between current and next text

let textArrayIndex = 0;
let charIndex = 0;

function type() {
if (charIndex < textArray[textArrayIndex].length) {
    textElement.textContent += textArray[textArrayIndex].charAt(charIndex);
    charIndex++;
    setTimeout(type, typingSpeed);
} else {
    setTimeout(erase, newTextDelay);
}
}

function erase() {
if (charIndex > 0) {
    textElement.textContent = textArray[textArrayIndex].substring(0, charIndex - 1);
    charIndex--;
    setTimeout(erase, erasingSpeed);
} else {
    textArrayIndex++;
    if (textArrayIndex >= textArray.length) {
    textArrayIndex = 0;
    }
    setTimeout(type, typingSpeed + 500);
}
}

document.addEventListener('DOMContentLoaded', function() {
setTimeout(type, newTextDelay + 250);
});