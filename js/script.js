//Todo esse JS descoberto na Internet com algumas alterações
let prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  let currentScrollPos = window.pageYOffset;
  let distanceFromTop = currentScrollPos;
  if (distanceFromTop < 100) { //quando ele estiver a baixo de 100 pixels retonará ao seu lugar
    document.getElementById("menu_flutuante").style.top = "0";// ele ajusta o navbar para retorna ao seu lugar quando descer a tela 
  } else {
    document.getElementById("menu_flutuante").style.top = "-20px"; // ele ajusta o navbar para subir quando a tela sobe
  }
  prevScrollpos = currentScrollPos;
}


window.addEventListener('scroll', function() {
  var navbar = document.getElementById('menu_flutuante');
  if (window.scrollY > 50) {
    navbar.style.marginLeft = '0';
    navbar.style.marginRight = '0'; 
    navbar.style.borderRadius = '0';
  } else {
    navbar.style.marginLeft = '28px';
    navbar.style.marginTop = '20px';
    navbar.style.marginRight = '28px'; 
    navbar.style.borderRadius = '16px';
  }
});

