

// INÍCIO DO REGEX DA TELA DE CADASTRO DO CLIENTE
const nomeCliente = document.getElementById('nome');
const telefone = document.getElementById('tel');
const endereco = document.getElementById('endereco');
const cpf = document.getElementById('cpf');
const email = document.getElementById('email');
const btCadastro = document.getElementById("criar");
const btListar = document.getElementById("listar");
const form = document.querySelector('.formularioCadUsuario');
const opInput = document.getElementById('op');

telefone.addEventListener('keyup', formatarTelefone);
cpf.addEventListener('keyup', formatarCpf);
nomeCliente.addEventListener('keyup', formatarNome);

btCadastro.addEventListener('click', function (event) {
    event.preventDefault();
    opInput.value = 'cadastrarUsuario';
    if (validarCampos() && validarEmail() && validarTelefone() && validarCpf() && validarNome()) {
        form.submit();
    } else {
        alert("Preencha os campos corretamente.");
    }
});

btListar.addEventListener('click', function (event) {
    event.preventDefault();
    opInput.value = 'listarTela';
    form.submit();
});

function validarCampos() {
    const camposObrigatorios = document.querySelectorAll('input[required]');
    let todosPreenchidos = true;

    camposObrigatorios.forEach((campo) => {
        if (!campo.value.trim()) {
            todosPreenchidos = false;
        }
    });
    return todosPreenchidos;
}

function validarEmail() {
    const emailValidado = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/gi;
    if (!emailValidado.test(email.value)) {
        alert("Formato de e-mail inválido");
        return false;
    }
    return true;
}


function validarTelefone() {
    const telefoneValidado = /^\([0-9]{2}\)\s[0-9]{5}-[0-9]{4}$/;
    if (!telefoneValidado.test(telefone.value)) {
        alert("Formato de telefone inválido");
        return false;
    }
    return true;
}

function formatarTelefone(e) {
    var v = e.target.value.replace(/\D/g, "");
    v = v.replace(/^(\d\d)(\d)/g, "($1) $2");
    v = v.replace(/(\d{5})(\d)/, "$1-$2");
    e.target.value = v;
}

function validarCpf() {
    const cpfValidado = /^\d{3}\.?\d{3}\.?\d{3}-?\d{2}$/;
    if (!cpfValidado.test(cpf.value)) {
        alert("Formato de CPF inválido");
        return false;
    }
    return true;
}

function formatarCpf(e) {
    var v = e.target.value.replace(/\D/g, "");
    v = v.replace(/(\d{3})(\d)/, "$1.$2");
    v = v.replace(/(\d{3})(\d)/, "$1.$2");
    v = v.replace(/(\d{3})(\d{1,2})$/, "$1-$2");
    e.target.value = v;
}

function validarNome(){
    const nomeValidado = /^(?![ ])(?!.*[ ]{2})((?:e|da|do|das|dos|de|d'|D'|la|las|el|los)\s*?|(?:[A-Z][^\s]*\s*?)(?!.*[ ]$))+$/;
    if(!nomeValidado.test(nomeCliente.value)){
        alert("Formato de Nome inválido");
        return false;
    }
    return true;
}
function formatarNome(e){
    e.target.value = e.target.value.replace(/\b\w/g, function(letra){

            return letra.toUpperCase();
        
    });


}
// FIM DO REGEX DE TELA DE CADASTRO DO CLIENTE