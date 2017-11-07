<?php
require("..\connect.php");
session_start();
 $login = $_SESSION['login'];
 $nome = $_SESSION['nome'];

			$query = "update regist join studant on  regist.id = studant.regist_id1 set regist.state = 'graduacao' where studant.login = '$login' ";
			mysqli_query($conn,$query);
			$query = "update regist join studant on regist.id = studant.regist_id 
set regist.state = 'graduacao' where studant.login='$login' ";
			mysqli_query($conn,$query);
				echo '<script language="javascript">';
				echo 'alert("disciplina adicionada");';
				header("Location: http://localhost/aluno/matricula.php");
				echo '</script>'; 
 ?>