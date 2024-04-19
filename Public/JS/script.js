function validarFormulario() {
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;

  if (document.activeElement.value == "Entrar") {
    if (email == "" || password == "") {
      alert("Preencha todos os campos");
      return false;
    }
    document.getElementById("formularioLogin").action =
      "./App/controller/Processamento/ProcessarCliente.php?op=autenticar";
  } else if (document.activeElement.value == "Criar") {
    document.getElementById("form").action =
      "./App/controller/Processamento/ProcessarCliente.php?op=criarTela";
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
