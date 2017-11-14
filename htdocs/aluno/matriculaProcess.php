
<?php
require("..\connect.php");
session_start();
 $login = $_SESSION['login'];
 $nome = $_SESSION['nome'];

foreach($_POST as $code => $content) { 
		echo $code." ".$content;
		
	 	if($content=="Inserir"){
			$result = mysqli_query($conn,"SELECT * FROM student WHERE login = '$login'");
			$resultvector = $result->fetch_assoc();  
			if($resultvector["regist_id"]==null){
				
				$date = date('Y-m-d H:i:s');
				$query="insert into regist(state,date,discipline_code) values('pendente','$date','$code')";
				mysqli_query($conn,$query);
				$lastId = mysqli_insert_id($conn);
				$query = "update student set regist_id = '$lastId'  WHERE login = '$login'";
				mysqli_query($conn,$query);
				echo '<script language="javascript">';
				echo 'alert("disciplina adicionada");';
				header("Location: http://localhost/aluno/matricula.php");
				echo '</script>'; 
			
			}else if($resultvector["regist_id1"]==null){
			
				$date = date('Y-m-d H:i:s');
				$query="insert into regist(state,date,discipline_code) values('pendente','$date','$code')";
				mysqli_query($conn,$query);
				$lastId = mysqli_insert_id($conn);
				$query = "update student set regist_id1 = '$lastId'  WHERE login = '$login'";
				mysqli_query($conn,$query);
				echo '<script language="javascript">';
				echo 'alert("disciplina adicionada");';
				header("Location: http://localhost/aluno/matricula.php");
				echo '</script>'; 
			
			}else{
				echo '<script language="javascript">';
				echo 'alert("não é possível adicionar mais de duas disciplinas");';
				echo 'history.back()';
				echo '</script>'; 
			}
		}else{
			
			$query="SELECT id FROM regist where discipline_code='$code'";
			$result = mysqli_query($conn,$query);
			$resultvector = $result->fetch_assoc();
			$registID = $resultvector["id"];
			$query = "update student set regist_id = if(regist_id=$registID,NULL,regist_id), regist_id1 = if(regist_id1=$registID,NULL,regist_id1) WHERE login = '$login'";
			echo $query;
			mysqli_query($conn,$query);
			$query = "delete from regist where id=$registID";
			mysqli_query($conn,$query);
			echo $query;
				echo '<script language="javascript">';
				
				header("Location: http://localhost/aluno/matricula.php");
				echo '</script>'; 
			}
}
?>