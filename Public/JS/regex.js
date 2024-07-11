function validateCachForm() {
    const nomePet = document.getElementById('nomePet').value;
    const idade = document.getElementById('idade').value;
    const peso = document.getElementById('peso').value;
    const sexo = document.getElementById('sexo').value;
    const raca = document.getElementById('raca').value;
    const castrado = document.getElementById('castrado').value;
    const porte = document.getElementById('porte').value;
    const idcliente = document.getElementById('idcliente').value;

    const nomeRegex = /^[A-Za-z\s]+$/;
    const idadeRegex = /^[0-9]+$/;
    const pesoRegex = /^[0-9]+(\.[0-9]+)?$/;
    const sexoRegex = /^(Macho|Fêmea)$/i;
    const textoRegex = /^[A-Za-z\s]+$/;
    const castradoRegex = /^(Sim|Não)$/i;
    const porteRegex = /^(Pequeno|Médio|Grande)$/i;
    const idclienteRegex = /^[0-9]+$/;

    if (!nomeRegex.test(nomePet)) {
        alert("Por favor, insira um nome válido.");
    }
    if (!idadeRegex.test(idade)) {
        alert("Por favor, insira uma idade válida.");
        return false;
    }

    if (!pesoRegex.test(peso)) {
        alert("Por favor, insira um peso válido.");
        return false;
    }

    if (!sexoRegex.test(sexo)) {
        alert("Por favor, insira um sexo válido (Macho ou Fêmea).");
        return false;
    }

    if (!textoRegex.test(raca)) {
        alert("Por favor, insira uma raça válida.");
        return false;
    }

    if (!castradoRegex.test(castrado)) {
        alert("Por favor, insira 'Sim' ou 'Não' para castrado.");
        return false;
    }

    if (!porteRegex.test(porte)) {
        alert("Por favor, insira um porte válido (Pequeno, Médio ou Grande).");
        return false;
    }

    if (!idclienteRegex.test(idcliente)) {
        alert("Por favor, insira um ID do Tutor válido.");
        return false;
    }

    return true;
}

function validateGatoForm() {

    const nomePet = document.getElementById('nomePet').value;
    const idade = document.getElementById('idade').value;
    const peso = document.getElementById('peso').value;
    const sexo = document.getElementById('sexo').value;
    const raca = document.getElementById('raca').value;
    const porte = document.getElementById('porte').value;
    const temperamento = document.getElementById('temperamento').value;
    const idcliente = document.getElementById('idcliente').value;

    const nomeRegex = /^[A-Za-z\s]+$/;
    const idadeRegex = /^[0-9]+$/;
    const pesoRegex = /^[0-9]+(\.[0-9]+)?$/;
    const sexoRegex = /^(Macho|Fêmea)$/i;
    const textoRegex = /^[A-Za-z\s]+$/;
    const porteRegex = /^(Pequeno|Médio|Grande)$/i;
    const temperamentoRegex = /^[A-Za-z\s]+$/;
    const idclienteRegex = /^[0-9]+$/;

    if (!nomeRegex.test(nomePet)) {
        alert("Por favor, insira um nome válido.");
    }

    if (!idadeRegex.test(idade)) {
        alert("Por favor, insira uma idade válida.");
        return false;
    }

    if (!pesoRegex.test(peso)) {
        alert("Por favor, insira um peso válido.");
        return false;
    }

    if (!sexoRegex.test(sexo)) {
        alert("Por favor, insira um sexo válido (Macho ou Fêmea).");
        return false;
    }

    if (!textoRegex.test(raca)) {
        alert("Por favor, insira uma raça válida.");
        return false;
    }

    if (!porteRegex.test(porte)) {
        alert("Por favor, insira um porte válido (Pequeno, Médio ou Grande).");
        return false;
    }

    if (!temperamentoRegex.test(temperamento)) {
        alert("Por favor, insira um temperamento válido.");
        return false;
    }

    if (!idclienteRegex.test(idcliente)) {
        alert("Por favor, insira um ID do Tutor válido.");
        return false;
    }

    return true;
}

function validateClienteForm(){
    $idCliente, $nomeCliente, $telefone, $endereco, $cpf, $email

    const nomeCliente = document.getElementById('nome').value;
    const telefone = document.getElementById('tel').value;
    const endereco = document.getElementById('endereco').value;
    const cpf = document.getElementById('cpf').value;
    const email = document.getElementById('email').value;

    const nomeRegex = /^[A-Za-z\s]+$/;
    const telefoneRegex = /^\(\d{2}\) \d{4,5}-\d{4}$/;
    const enderecoRegex = /^[A-Za-z0-9\s,.ºª-]+$/;
    const cpfRegex = /^\d{3}\.?\d{3}\.?\d{3}-?\d{2}$/;
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    if(!nomeRegex.test(nomeCliente)){
        alert("Por favor, insira um nome válido.");
        return false;
    }
    if(!telefoneRegex.test(telefone)){
        alert("Por favor, insira um telefone válido");
        return false;
    }

    if(!enderecoRegex.test(endereco)){
        alert("Por favor, insira um endereço válido");
        return false;
    }
    if(!cpfRegex.test(cpf)){
        alert("Por favor, insira um cpf válido");
        return false;
    }
    if(!emailRegex.test(email)){
        alert("Por favor, insira um e-mail válido");
        return false;
    }
    
    return true;
}
