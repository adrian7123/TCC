function valida(){
		
    var nome = document.getElementById('userNome'),
		email = document.getElementById('userEmail'),
		senha = document.getElementById('userSenha'),
		confirmSenha = document.getElementById('userConfirmSenha'),
		termo = document.getElementById('userTermo');
		
	var nomes  = document.getElementById('nomes'),
		emails = document.getElementById('emails'),
		senhas = document.getElementById('senhas'),
		termos = document.getElementById('termos');
		
		if(nome.value == "" || nome.value == null){
			nomes.style.visibility = 'visible';
		}else {
			nomes.style.visibility = 'hidden';
		}
		
		if(email.value == ""){
			emails.style.visibility = 'visible';
		}else {
			emails.style.visibility = 'hidden';
		}
		
		if(senha.value == "" || confirmSenha.value == ""){
	    	senhas.style.visibility = 'visible';
		}else {
		    senhas.style.visibility = 'hidden';
		}
		
		if(!termo.checked){
	    	termos.style.visibility = 'visible';
		}else {
	     	termos.style.visibility = 'hidden';
		}
		
		
		return false;
}