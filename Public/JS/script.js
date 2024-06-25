function validarFormulario() {
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;

  if (document.activeElement.value == "Entrar") {
    if (email == "" || password == "") {
      alert("Preencha todos os campos");
      return false;
    }
    document.getElementById("formularioLogin").action =
      "../../App/controller/Processamento/ProcessarUsuario.php?ou=autenticar";
  }
  return true;
}
//Abaixo: script para fixar o footer na parte de baixo do navegador
// $(function () {
//   $("#js-heightControl").css(
//     "height",
//     $(window).height() - $("html").height() + "px"
//   );
// });

//Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
