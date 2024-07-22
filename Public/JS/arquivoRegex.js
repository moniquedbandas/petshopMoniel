document.addEventListener("DOMContentLoaded", function () {
  const telefone = document.getElementById("tel");
  const cpf = document.getElementById("cpf");
  const email = document.getElementById("email");
  const formCliente = document.querySelector(".formularioCadCliente");

  telefone.addEventListener("input", function () {
    let telValue = telefone.value.replace(/\D/g, "");
    telValue = telValue.replace(/^(\d{2})(\d)/g, "($1) $2");
    telValue = telValue.replace(/(\d)(\d{4})$/, "$1-$2");
    telefone.value = telValue;
  });

  cpf.addEventListener("input", function () {
    let cpfValue = cpf.value.replace(/\D/g, "");
    cpfValue = cpfValue.replace(/(\d{3})(\d)/, "$1.$2");
    cpfValue = cpfValue.replace(/(\d{3})(\d)/, "$1.$2");
    cpfValue = cpfValue.replace(/(\d{3})(\d{1,2})$/, "$1-$2");
    cpf.value = cpfValue;
  });
  email.addEventListener("input", function () {
    email.setCustomValidity("");
    // essa função aqui limpa a mensagem de erro ao digitar um email incorreto
    // add um evento input ao campo de e-mail para limpar a mensagem de email invalido
    // assim que o usuário começasse a digitar novamente o email correto
  });

  // Função para validar o formulário
  formCliente.addEventListener("submit", function (event) {
    if (!validateForm()) {
      event.preventDefault();
    }
  });

  function validateForm() {
    // Validação do telefone
    const validarTelefone = /^\([0-9]{2}\)\s[0-9]{5}-[0-9]{4}$/;
    if (!validarTelefone.test(telefone.value)) {
      //   alert("Por favor, insira um telefone válido.");
      return false;
    }

    // Validação do CPF
    const validarCpf = /^\d{3}\.?\d{3}\.?\d{3}-?\d{2}$/;
    if (!validarCpf.test(cpf.value)) {
      //   alert("Por favor, insira um CPF válido.");
      return false;
    }

    // Validação do e-mail
    const validarEmail =
      /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(gmail\.com|hotmail\.com|yahoo\.com\.br)$/;
    if (!validarEmail.test(email.value)) {
      //   alert("Por favor, insira um e-mail válido.");
      console.log("E-mail inválido:", email.value);
      email.setCustomValidity("Por favor, insira um e-mail válido.");
      return false;
    }

    return true;
  }
});
