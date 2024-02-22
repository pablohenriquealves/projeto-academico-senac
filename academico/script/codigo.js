function funcao1() {
    alert("Usando Função");
}


function calc_media(n1,n2) {
    var m = (n1+n2)/2
    return m;
}


function resultado(form) {
    var media = calc_media (parseFloat (form.nota1.value), parseFloat (form.nota2.value));

    if (media >=7)
        alert ("Aprovado com nota: "+ media);
    if (6 < media < 5)
        alert ("Recuperação");
    else 
        alert ("Reprovado com nota: "+ media);

}


function justifica_falta(form){
    var jf = confirm("Justifica Falta "+form.nome_aluno.value+"?");

    if (jf == true){
         var texto_jf = prompt("Digite a justificativa apresentada:");
        alert("Justificativa enviada!");
    }
    else {
    var texto_jf = prompt("Por que não irá justificar?");
     alert("Falta não justificada!");
    }
}

function testa_form() {

    var n = document.forms["formalunos"] ["nome_aluno"].value;

    var m = document.forms["formalunos"] ["matricula"].value;

    if (n==null || n=="") {
        alert("Nome do aluno precisa ser informado");

        return false;
        
    } else {
        alert("Nome do aluno cadastrado com sucesso");
    }
    
    if (m==null || m=="") {
        alert("Número de matrícula precisa ser informado");

        return false;       
    } 

    else {
    alert("Número da matrícula informado corretamente");
 
}

}


function testa_senha() {
    var p1 = document.forms["formsenha"]["senha"].value;
    var p2 = document.forms["formsenha"]["confirmasenha"].value;

    if (p1.length < 6) {

        alert("Senha muito pequena. Digite pelo menos 6 caracteres.");
        return false;
    }
    

    if (p1 != p2) {
        alert("Senhas diferentes, tente novamente.");
    }
  
    if (p1 == p2){
        alert("senha alterada")
    }
}




function dados_aluno (form){
    var da = confirm("Confirmar o cadastro do aluno "+form.nome.value+ " " +form.sobrenome.value+"?");

    if (da == true) {
        var nasc = confirm("A data de nascimento "+form.nasc.value+" está correta?");
        var cpf = confirm("O CPF "+form.cpf.value+" está correto?");
        var email = confirm("Confira o E-mail inserido "+form.email.value);
        prompt("Deseja acrescentar alguma informação?");
        alert("Cadastro do aluno realizado com sucesso!");
    }
    else 
    alert("Cadastro não atualizado.");
}



