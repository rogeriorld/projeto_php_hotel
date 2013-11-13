function validacaoEmail(field) 
	{ usuario = field.value.substring(0, field.value.indexOf("@"));
	dominio = field.value.substring(field.value.indexOf("@")+ 1, field.value.length); 
	
	if ((usuario.length >=1) && 
	(dominio.length >=3) && 
	(usuario.search("@")==-1) && 
	(dominio.search("@")==-1) && 
	(usuario.search(" ")==-1) && 
	(dominio.search(" ")==-1) && 
	(dominio.search(".")!=-1) && 
	(dominio.indexOf(".") >=1)&& 
	(dominio.lastIndexOf(".") < dominio.length - 1)) { 
	document.getElementById("msgemail").innerHTML="<img src='imgs/ticado.gif'><font color='green'>E-mail válido</font>"; 
    document.getElementById("btn_submit").innerHTML='<input type="submit" name="loginbtn" id="loginbtn" class="btn btn-primary enabled" value="Cadastrar" tabindex="3">';
	
	} else{
	document.getElementById("msgemail").innerHTML="<img src='imgs/xizinho.gif'><font color='red'>E-mail inválido </font>";  
	document.getElementById("btn_submit").innerHTML='<input type="submit" name="loginbtn" id="loginbtn" class="btn btn-primary disabled" value="Cadastrar" tabindex="3">';
	document.getElementById("errors_notice").innerHTML='<font color="red">Verifique o Formulário</font>';
	} }
	
function validarSenha(){
	senha = document.cadastroform.password.value;
	senha_conf = document.cadastroform.password_confirmation.value;
	
	if(senha != senha_conf){
	document.getElementById("msgpass").innerHTML="<img src='imgs/xizinho.gif'><font color='red'>Senhas não conferem </font>";
	document.getElementById("btn_submit").innerHTML='<input type="submit" name="loginbtn" id="loginbtn" class="btn btn-primary disabled" value="Cadastrar" tabindex="3">';
	document.getElementById("errors_notice").innerHTML='<font color="red">Verifique o Formulário</font>';
	
	
	
	}else{
	document.getElementById("msgpass").innerHTML="<img src='imgs/ticado.gif'><font color='green'>Senhas conferem </font>";
	document.getElementById("btn_submit").innerHTML='<input type="submit" name="loginbtn" id="loginbtn" class="btn btn-primary enabled" value="Cadastrar" tabindex="3">';
	
	}

}