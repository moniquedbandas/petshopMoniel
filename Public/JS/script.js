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

// script para a telaEscolherCadastro, identificando qual input radio esta selecionado e redirecionando para a pagina de cadastro escolhida.
function redirecionarCadastro() {
  var selecionado = "";

  if (document.getElementById("cachorro").checked) {
    selecionado = "Cachorro";
  } else if (document.getElementById("gato").checked) {
    selecionado = "Gato";
  } else if (document.getElementById("tutor").checked) {
    selecionado = "Tutor";
  }

  if (selecionado === "") {
    alert("Por favor, selecione uma opção.");
    return false;
  }

  var url = "";
  if (selecionado === "Cachorro") {
    url = "../../view/telasCadastros/telaCadastroCachorro.php";
  } else if (selecionado === "Gato") {
    url = "../../view/telasCadastros/telaCadastroGato.php";
  } else if (selecionado === "Tutor") {
    url = "../../view/telasCadastros/telaCadastroCliente.php";
  }

  window.location.href = url;
  return true;
}

//funcoes para identificar se é cachorro, gato e cliente

function setOcValue(value) {
  document.getElementById("oc").value = value;
}
function setOgValue(value) {
  document.getElementById("og").value = value;
}
function setOpValue(value) {
  document.getElementById("op").value = value;
}

function listarClientes(event) {
  event.preventDefault();
  // document.getElementById("clienteForm").action =
  //   "../../view/telasCRUD/listarCachorro.php";
  document.getElementById("clienteForm").submit();
}
function cadastrarClientes(event) {
  event.preventDefault();
  document.getElementById("clienteForm").submit();
}
function listarCachorros(event) {
  event.preventDefault();
  document.getElementById("cachorroForm").submit();
}
function listarGatos(event) {
  event.preventDefault();
  document.getElementById("gatoForm").submit();
}

const alertPlaceholder = document.getElementById("liveAlertPlaceholder");
const appendAlert = (message, type) => {
  const wrapper = document.createElement("div");
  wrapper.innerHTML = [
    `<div class="alert alert-${type} alert-dismissible" role="alert">`,
    `   <div>${message}</div>`,
    '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
    "</div>",
  ].join("");

  alertPlaceholder.append(wrapper);
};

const alertTrigger = document.getElementById("liveAlertBtn");
if (alertTrigger) {
  alertTrigger.addEventListener("click", () => {
    appendAlert("Mensagem enviada com sucesso!", "success");
  });
}
