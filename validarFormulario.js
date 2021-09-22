

function validar() {
    let nome = document.getElementById("endereco");
    let endereco = document.getElementById("endereco");
    let cpf = document.getElementById("cpf");
    let cidade = document.getElementById("cidade");

    if (nome.value == "") {
        alert("Nome não informado");
        nome.focus();
        return;
    }
    if (endereco.value == "") {
        alert("Endereço não informado");
        endereco.focus();
        return;
    }
    if (cpf.value == "") {
        alert("CPF não informado");
        cpf.focus();
        return;
    }
    if (cidade.value == "") {
        alert("Cidade não informado");
        cidade.focus();
        return;
    }

}