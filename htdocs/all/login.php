<?php require("..\connect.php");

    function invalidInput($invName,$errorType=1){
        static $oneTime;
        if($oneTime==null){
            switch($errorType){
                case 1:
                    echo '<script language="javascript">';
                    echo 'alert("Erro ao logar, '.$invName.' inválido");';
                    echo 'history.back()';
                    echo '</script>'; 
                    break;
            }

            $oneTime = true;
        }
    }

if($_SERVER['REQUEST_METHOD'] =="POST"){ 
    $login = (isset($_POST['login']))&&!empty($_POST["login"])? $_POST["login"] : $login=0;
    $senha = (isset($_POST['senha']))&&!empty($_POST["senha"])? $_POST["senha"] : $senha=0;
    $categoria = (isset($_POST['categoria']))&&!empty($_POST["categoria"])? $_POST["categoria"] : invalidInput("categoria");
        
    $result = mysqli_query($conn,"SELECT name FROM $categoria WHERE login = '$login' and password = '$senha' ");
    if($result->num_rows==0){
              
        echo '<script language="javascript">';
        echo 'alert("usuário ou senha errada");';
        echo 'history.back()';
        echo '</script>'; 
    }else{
        $resultvector = $result->fetch_assoc();  
        session_start();
        $_SESSION = array();
        $_SESSION['login']=$login;
        $_SESSION['categoria']=$categoria;
        $_SESSION['nome']=$resultvector['nome'];
       
        
        header('Location: http://localhost/aluno/matricula.php');
    }
}else{
    
}

?>