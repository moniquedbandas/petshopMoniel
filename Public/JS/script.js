function validarFormulario() {
  var username = document.getElementById("email").value;
  var password = document.getElementById("password").value;

  if (document.activeElement.value == "Entrar") {
    if (username == "" || password == "") {
      alert("Preencha todos os campos");
      return false;
    }
    document.getElementById("form").action =
      "./App/controller/Processamento/ProcessarUsuario.php?op=autenticar";
  } else if (document.activeElement.value == "Criar") {
    document.getElementById("form").action =
      "./App/controller/Processamento/ProcessarUsuario.php?op=criarTela";
  }
  return true;
}

//Abaixo: script para fixar o footer na parte de baixo do navegador
$(function () {
  $("#js-heightControl").css(
    "height",
    $(window).height() - $("html").height() + "px"
  );
});
