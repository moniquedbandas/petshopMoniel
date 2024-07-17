document.addEventListener('DOMContentLoaded', function() {
    // Elementos form Cliente
    const nomeCliente = document.getElementById('nome');
    const telefone = document.getElementById('tel');
    const endereco = document.getElementById('endereco');
    const cpf = document.getElementById('cpf');
    const email = document.getElementById('email');
    const btCadastroCliente = document.getElementById("criarCliente");
    const btListarCliente = document.getElementById("listarCliente");
    const formCliente = document.querySelector('.formularioCadCliente');
    const opInput = document.getElementById('op');

    if (formCliente) {
        telefone.addEventListener('keyup', formatarTelefone);
        cpf.addEventListener('keyup', formatarCpf);
        nomeCliente.addEventListener('keyup', formatarNome);

        btCadastroCliente.addEventListener('click', function (event) {
            event.preventDefault();
            opInput.value = 'cadastrarUsuario';
            if (validarEmail(email) /*&& validarTelefone(telefone)*/ /*&& validarCpf(cpf)*/ /*&& validarNome(nomeCliente)*/) {
                formCliente.submit();
            } else {
                alert("Preencha os campos corretamente.");
            }
        });

        btListarCliente.addEventListener('click', function (event) {
            event.preventDefault();
            opInput.value = 'listarTela';
            formCliente.submit();
        });
    }

    // Elementos form Cachorro

    // const nomeCach = document.getElementById('nomePet');
    // const idade = document.getElementById('idade');
    // const peso = document.getElementById('peso');
     const sexo = document.getElementById('sexo');
    // const raca = document.getElementById('raca');
     const castrado = document.getElementById('castrado');
    // const porte = document.getElementById('porte');
    // const idCliente = document.getElementById('idCliente');
     const btCadastroCachorro = document.getElementById("criarCachorro");
     const btListarCachorro = document.getElementById("listarCachorro");
     const formCachorro = document.querySelector('.formularioCadCachorro');
     const ocInput = document.getElementById('oc');

    if (formCachorro) {
        nomeCach.addEventListener('keyup', formatarNomePet);
        sexo.addEventListener('keyup', formatarSexoCach);

        btCadastroCachorro.addEventListener('click', function (event) {
            event.preventDefault();
            ocInput.value = 'cadastrarCachorro';
            if (validarSexoCach(sexo) &&  validarCastrado(castrado) /* && validarCampos(formCachorro) &&validarNomePet(nomeCach) && validarIdade(idade) && validarPeso(peso) && validarRaca(raca) &&  validarIdCliente(idCliente) && validarPorte(porte)*/  ) {
                formCachorro.submit();
            } else {
                alert("Preencha os campos corretamente.");
            }
        });

        btListarCachorro.addEventListener('click', function (event) {
            event.preventDefault();
            ocInput.value = 'listarTelaCachorro';
            formCachorro.submit();

        });
    }

    // // Validation and Formatting Functions
    // function validarCampos(form) {
    //     const camposObrigatorios = form.querySelectorAll('input[required]');
    //     let todosPreenchidos = true;
    //     camposObrigatorios.forEach((campo) => {
    //         if (!campo.value.trim()) {
    //             todosPreenchidos = false;
    //         }
    //     });
    //     return todosPreenchidos;
    // }

    function validarEmail(email) {
        const emailValidado = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(gmail\.com|hotmail\.com|yahoo\.com\.br)$/;
        if (!emailValidado.test(email.value)) {
            alert("E-mail inválido");
            return false;
        }
        return true;
    }

    // function validarTelefone(telefone) {
    //     const telefoneValidado = /^\([0-9]{2}\)\s[0-9]{5}-[0-9]{4}$/;
    //     if (!telefoneValidado.test(telefone.value)) {
    //         alert("Formato de telefone inválido");
    //         return false;
    //     }
    //     return true;
    // }

    function formatarTelefone(e) {
        var v = e.target.value.replace(/\D/g, "");
        v = v.replace(/^(\d\d)(\d)/g, "($1) $2");
        v = v.replace(/(\d{5})(\d)/, "$1-$2");
        e.target.value = v;
    }

    // function validarCpf(cpf) {
    //     const cpfValidado = /^\d{3}\.?\d{3}\.?\d{3}-?\d{2}$/;
    //     if (!cpfValidado.test(cpf.value)) {
    //         alert("Formato de CPF inválido");
    //         return false;
    //     }
    //     return true;
    // }

    function formatarCpf(e) {
        var v = e.target.value.replace(/\D/g, "");
        v = v.replace(/(\d{3})(\d)/, "$1.$2");
        v = v.replace(/(\d{3})(\d)/, "$1.$2");
        v = v.replace(/(\d{3})(\d{1,2})$/, "$1-$2");
        e.target.value = v;
    }

    // function validarNome(nomeCliente) {
    //     const nomeValidado = /^(?![ ])(?!.*[ ]{2})((?:e|da|do|das|dos|de|d'|D'|la|las|el|los)\s*?|(?:[A-Z][^\s]*\s*?)(?!.*[ ]$))+$/;
    //     if (!nomeValidado.test(nomeCliente.value)) {
    //         alert("Formato de Nome inválido");
    //         return false;
    //     }
    //     return true;
    // }

    function formatarNome(e) {
        e.target.value = e.target.value.replace(/\b\w/g, function(letra) {
            return letra.toUpperCase();
        });
    }

    // // Cachorro specific validations
    // function validarNomePet(nomeCach) {
    //     const nomeValidado = /^[A-Za-z\s]{3,}$/;
    //     if (!nomeValidado.test(nomeCach.value)) {
    //         alert("Formato de Nome do Cachorro inválido");
    //         return false;
    //     }
    //     return true;
    // }

    // function validarIdade(idade) {
    //     const idadeValidada = /^\d+$/;
    //     if (!idadeValidada.test(idade.value) || idade.value <= 0) {
    //         alert("Idade inválida");
    //         return false;
    //     }
    //     return true;
    // }

    // function validarPeso(peso) {
    //     const pesoValidado = /^\d+(\.\d{1,2})?$/;
    //     if (!pesoValidado.test(peso.value) || peso.value <= 0) {
    //         alert("Peso inválido");
    //         return false;
    //     }
    //     return true;
    // }

    function validarSexoCach(sexo) {
        const sexoValidado = /^(Macho|Fêmea)$/i;
        if (!sexoValidado.test(sexo.value)) {
            alert("Sexo inválido");
            return false;
        }
        return true;
    }

    function formatarSexoCach(e) {
        e.target.value = e.target.value.charAt(0).toUpperCase() + e.target.value.slice(1).toLowerCase();
    }

    // function validarRaca(raca) {
    //     const racaValidada = /^[A-Za-z\s]{3,}$/;
    //     if (!racaValidada.test(raca.value)) {
    //         alert("Raça inválida");
    //         return false;
    //     }
    //     return true;
    // }

    function validarCastrado(castrado) {
        const castradoValidado = /^(Sim|Não)$/i;
        if (!castradoValidado.test(castrado.value)) {
            alert("Valor para Castrado inválido, responde com Sim ou Não");
            return false;
        }
        return true;
    }

    // function validarPorte(porte) {
    //     const porteValidado = /^(Pequeno|Médio|Grande)$/i;
    //     if (!porteValidado.test(porte.value)) {
    //         alert("Porte inválido");
    //         return false;
    //     }
    //     return true;
    // }

    // function validarIdCliente(idCliente) {
    //     const idValidado = /^\d+$/;
    //     if (!idValidado.test(idCliente.value)) {
    //         alert("ID Cliente inválido");
    //         return false;
    //     }
    //     return true;
    // }
});