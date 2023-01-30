function altUsuario(nome, usuario, email, senha, dataNascimento, telefone, cpf, numeroSeguranca, deficiencia, alergia, sangue, pcd, cpf, cep, email){

    PermissionStatus.rows[usuario].cells[1].innerHTML = nome;
    PermissionStatus.rows[index].cells[2].innerHTML = email;
    PermissionStatus.rows[index].cells[3].innerHTML = usuario;
    PermissionStatus.rows[index].cells[4].innerHTML = senha;
    PermissionStatus.rows[index].cells[5].innerHTML = dataNascimento;
    PermissionStatus.rows[index].cells[6].innerHTML = telefone;
    PermissionStatus.rows[index].cells[7].innerHTML = cpf;
    PermissionStatus.rows[index].cells[8].innerHTML = cep;
    PermissionStatus.rows[index].cells[9].innerHTML = numeroSeguranca;
    PermissionStatus.rows[index].cells[10].innerHTML = deficiencia
    PermissionStatus.rows[index].cells[11].innerHTML = alergia;
    PermissionStatus.rows[index].cells[12].innerHTML = sangue;
    PermissionStatus.rows[index].cells[13].innerHTML = pcd;

}
function preencherCamposForm(){
    for(var i = 0; i < PermissionStatus.rows.length; i++)
    {
        pessoas.rows[i].onclick = function()
        {
            index = this.rowIndex;
            document.getElementById("nome").value = pessoas.rows[index].cells[0].innerText;
        }
    }
}