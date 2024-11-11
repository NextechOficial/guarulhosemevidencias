 <?php 

$email = "";
$senha = "";

if(isset($_REQUEST['email']) && isset($_REQUEST['senha'])){  
    $email = $_REQUEST['email'];
    $senha = $_REQUEST['senha'];
}

// consultar o banco e dados para saber se o email e senha batem

$respostaJson = array();

if($email == "admin@localhost" && $senha == "123"){

    session_start();
    $_SESSION['email'] = $email;
    $_SESSION['nome']  =  'Cleber Oliveira';
    
    $respostaJson["login"]  = "true";
    $respostaJson["msg"]    = "Autenticação realizada com sucesso!";
    $respostaJson["nome"]   = $_SESSION['nome'];
    $respostaJson["erro"]   = "0";
    

    echo json_encode($respostaJson, JSON_UNESCAPED_UNICODE);
}else{
    
    session_start();
    unset( $_SESSION['email'] );
    unset( $_SESSION['nome'] );
	session_destroy();
    
    $respostaJson["login"]  = "false";
    $respostaJson["msg"]    = "Usuário ou Senha inválidos!";
    $respostaJson["erro"]   = "1";
    echo json_encode($respostaJson, JSON_UNESCAPED_UNICODE);
}
?>-->