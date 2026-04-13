<?php			
	$loginCadastrado = "zeze@gmail.com";
	$senhaCadastrada = "Zeze1234!";
	$senhaCadCriptografada = sha1($senhaCadastrada);
	$privilegioAcesso = 1;
    
    $loginFornecido = "zeze@gmail.com";
    $senhaFornecida = "Zeze1234!";
    $senhaFornCriptografada = sha1($senhaFornecida);	
	

	if($loginFornecido == "" or $senhaFornecida == "" || $privilegioAcesso < 1 or $privilegioAcesso > 4){
    	echo "Digite valor válidos!!!";
    }elseif($loginFornecido == $loginCadastrado and $senhaFornCriptografada == $senhaCadCriptografada){
		echo "Login efetuado com sucesso!";
        
        if($privilegioAcesso == 1){
    		echo "<br> Cliente";
    	}elseif($privilegioAcesso == 2){
			echo "<br> Usuário padrão";
		}elseif($privilegioAcesso == 3){
			echo "<br> Administrador";          
        }else{
        	echo "<br> Desenvolvedor";     
        }
        
	}else{
		echo "Login ou senha inválidos!";
	}				
?>
