function validou(v1, v2, v3, v4){
    mensagem = "";
    if(v1 == ""){
        mensagem += "informe o nome \n";
    }else{
        mensagem += "Seu nome: '"+v1+"' \n";
    }
    if(v2 == ""){
        mensagem += "informe o email \n";
    }else{
        mensagem += "Seu email: '"+v2+"' \n";
    }
    if(v3 == ""){
        mensagem += "informe o sexo \n";
    }else{
        mensagem += "Seu sexo: '"+v3+"' \n";
    }
    if(v4 == ""){
        mensagem += "informe a data de nascimento \n";
    }else{
        mensagem += "Sua data de nascimento: '"+v4+"' \n";
    }
    alert(mensagem);
}
