<?php  
    require("..\connect.php");
    
   
    
    function invalidInput($invName,$errorType=1){
        static $oneTime;
        if($oneTime==null){
            switch($errorType){
                case 1:
                    echo '<script language="javascript">';
                    echo 'alert("Erro ao criar conta, '.$invName.' inválido");';
                    echo 'history.back()';
                    echo '</script>'; 
                    break;
            }

            $oneTime = true;
        }
    }

    if($_SERVER['REQUEST_METHOD'] =="POST"){ 
        $login = (isset($_POST['login']))&&!empty($_POST["login"])? $_POST["login"] : invalidInput("login");
        $senha = (isset($_POST['senha']))&&!empty($_POST["senha"])? $_POST["senha"] : invalidInput("senha");
        $nome = (isset($_POST['nome']))&&!empty($_POST["nome"])? $_POST["nome"] : invalidInput("nome");
     
       
        $rg = (isset($_POST['rg']))&&!empty($_POST["rg"])? $_POST["rg"] : invalidInput("RG");
        
        $e_mail = (isset($_POST['e_mail']))&&!empty($_POST["e_mail"])? $_POST["e_mail"] : invalidInput("E-mail");
        $telefone = (isset($_POST['telefone']))&&!empty($_POST["telefone"])? $_POST["telefone"] : invalidInput("Telefone");
        
        $endereco = (isset($_POST['endereco']))&&!empty($_POST["endereco"])? $_POST["endereco"] : invalidInput("Endereço");
        $cidade = (isset($_POST['cidade']))&&!empty($_POST["cidade"])? $_POST["cidade"] : invalidInput("Cidade");
        $estado = (isset($_POST['estado']))&&!empty($_POST["estado"])? $_POST["estado"] : invalidInput("estado");
        $cep = (isset($_POST['cep']))&&!empty($_POST["cep"])? $_POST["cep"] : invalidInput("CEP");
        
        
        $sexo = (isset($_POST['sexo']))&&!empty($_POST["sexo"])? $_POST["sexo"] : invalidInput("Sexo");
		$ramo_atividade = (isset($_POST['ramo_atividade']))&&!empty($_POST["ramo_atividade"])? $_POST["ramo_atividade"] : invalidInput("Ramo de Atividade");
        if(!empty($sexo))
        switch($sexo){
            case "male":
                break;
            case "female":
                break;
            default:
            invalidInput("Sexo");
        }

                $nusp = (isset($_POST['nuspAluno'])&&!empty($_POST["nuspAluno"]))? $_POST["nuspAluno"] : invalidInput("Nusp");
                $curso_de_origem = (isset($_POST['curso_de_origem'])&&!empty($_POST["curso_de_origem"]))? $_POST["curso_de_origem"] : invalidInput("Curso de origem");
                $instituicao_de_origem = (isset($_POST['instituicao_de_origem'])&&!empty($_POST["instituicao_de_origem"]))? $_POST["instituicao_de_origem"] : invalidInput("Instituicao de origem");
                $empresa_ou_instituicao_de_vinculo = (isset($_POST['empresa_ou_instituicao_de_vinculo'])&&!empty($_POST["empresa_ou_instituicao_de_vinculo"]))? $_POST["empresa_ou_instituicao_de_vinculo"] : invalidInput("empresa ou instituicao de vinculo");
                $funcao_no_vinculo = (isset($_POST['funcao_no_vinculo'])&&!empty($_POST["funcao_no_vinculo"]))? $_POST["funcao_no_vinculo"] : invalidInput("Funcao no vinculo");
                $result = mysqli_query($conn,"SELECT count(*) as count FROM `student` WHERE `login` = '$login'");
                
                
                $countbuff = $result->fetch_assoc();               
                $count = $countbuff['count'] ;
                
                if($count!=0){
                    echo '<script language="javascript">';
                    echo 'alert("usuário já existente");';
                    echo 'history.back()';
                    echo '</script>'; 
                    
                }else{
                    $sql = mysqli_query($conn,"INSERT INTO 
student (login,password,name,rg,email,phone,address,city,state,postal_code,gender,nusp,course,institution,company,title,branch) 
VALUES('$login','$senha','$nome','$rg','$e_mail','$telefone','$endereco','$cidade','$estado','$cep','$sexo','$nusp','$curso_de_origem','$instituicao_de_origem','$empresa_ou_instituicao_de_vinculo','$funcao_no_vinculo','$ramo_atividade') "); 
                   if(mysqli_error($conn)){
                    echo '<script language="javascript">';
                    echo 'alert("Erro ao criar conta");';
                    echo 'history.back()';
                    echo '</script>'; 
                     
                   }else{
                        session_start();
                       $_SESSION = array();
                       $_SESSION['login']=$login;
                       $_SESSION['categoria']="aluno";
                       $_SESSION['nome']=$nome;
                     
                       header('Location: http://localhost/aluno/matricula.php');
                   }
                }
               
                
        
        
        
    }else{
        header("location: cadastrar.php");
    }
    
mysqli_close($con);
?>