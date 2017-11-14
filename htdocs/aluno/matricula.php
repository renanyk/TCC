
<html>
<head>
<title>
Matrícula
</title>
</head>

	
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="index.css" media="screen" />
  <div class="topnav" id="myTopnav">
  <a><img src="../img/logo.png" alt="Mountain View" ></a> 
  <teste><a href="inicio.html">Início</a></teste>
  <teste><a href="inicio.html">Contatos</a></teste>
  <teste><a href="inicio.html">Calendário</a></teste>

  <div class = "logina"><a class="loginMargin" href="../all/logar.php">logar</a>
  <a href="../all/cadastrar.php">Cadastrar</a>
  </div>
</div>

<ul class="leftbar">
    <li><a class="titlebar"><b>Alunos especiais</b></a></li>
  <li><a class="itembar" href="matricula.html">Matrícula</a></li>
  <li><a class="itembar"href="acompanhamento.html">Acompanhamento</a></li>
  <li><a class="itembar"href="ajuda.html">Ajuda</a></li>
    <li><a class="titlebar"><b>Minha conta</b></a></li>
  <li><a class="itembar"href="perfil.html">Perfil</a></li>
  <li><a class="itembar"href="mudarsenha.html">Mudar senha</a></li>
  <li><a class="itembar"href="documentos.html">Documentos</a></li>
</ul>

<main> 
   
    <mainTitle><h3>Matrícula de alunos especiais</h3>
    </mainTitle>
    <p style="text-align: justify; " ><tab> </tab> Para poder se matricular em disciplinas é necessário enviar os documentos necessários, caso não tenha enviado os documentos, acesse o sub item documentos que se encontra à direita, para mais informações entre na central de ajuda.
    </p>
    <br>
     <hr>
    <br>
     Escolha um departamento
<select style="width:50px; margin: 5px;margin-left: 0px" id="departamentoSelector">
  <option value="">Todos</option>
  <option value="scc">SCC</option>
  <option value="sma">SMA</option>
  <option value="sme">SME</option>
  <option value="ssc">SSC</option>
   
</select>
	
	<br>
	Buscar por disciplina
   <input type="text" name="text" value="" id="textbox" style="width:250px">
  
   <br><br>
   
   <div class="buttonLoginCadastro">
     
	  
      
   </div>

	
	
	
       <form > 

   <div class="buttonLoginCadastro">
	   <button class="mybutton" onclick="myFunction();return false;" id="21">filtrar</button>
     
   </div>
 </form>
   <br>
        <div class="tablecenter">
            <hr>
            <mainTitle style ="text-align: center"><h3>Disciplinas</h3></mainTitle>
         <form action='matriculaProcess.php' method='Post'>   
 <table border="1" style="height: 400px">  
              
<tr style="overflow: hidden;">
<th>Nome</th>
<th>Código</th>
<th>Professor</th>
<th>Alunos especiáis<br>matriculados</th>
<th>Inserir</th>
</tr>

   

<?php  
     error_reporting(0);
     ini_set('display_errors', FALSE);
	 header('Content-Type: text/html; charset=iso-8859-1');

        
        require("../connect.php");
        $result = mysqli_query($conn,"SELECT discipline.name,discipline.code,teacher.name as teacher_name,discipline.student_count FROM discipline 
		JOIN teacher ON discipline.teacher_nusp = teacher.nusp");
       
        while($row = mysqli_fetch_array($result)){
        
        echo '<tr name = "'.$row["code"].'">';
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["code"]."</td>";
		
        echo "<td>".$row["teacher_name"]."</td>";
        echo "<td>".$row["student_count"]."</td>";
        
        echo "<td>
				<input type='submit' value ='Inserir' name='".$row["code"]."'>
				</td>";
        
        }
        ?>

</table>
  	 </form>                </div>
   
    <div class="obs">
        Obs: É possível se matricular no máximo em duas disciplinas.
    </div>
    <div class="tableSpace">
        Insira o código da disciplina

   <form > 

   <input type="text" name="text" value="" id="textbox">
  
   <br><br>
   
   <div class="buttonLoginCadastro">
     
	  <script>
 		var disciplinas = [];
	   function myFunction2(){
		 
		 var codigo = $("#textbox").val();
		   disciplinas.push(codigo);
	 		$("#"+codigo).show();
		 	return false;
		   
	   }</script>
      <button class="mybutton" onclick="myFunction2();return false;" id="123456">Inserir</button>
   </div>
 </form>
    </div>
    
    <hr>
        <mainTitle><h3>Minhas requisições</h3>
    </mainTitle>
        
        <div class="tablecenter">
   <form action="matriculaProcess.php" method="post">         
            <table border="1">
            
<tr>
<th>Nome</th>
<th>Código</th>
<th>Professor</th>
<th>Estado da <br>matriculados</th>
	<th>Remover</th>
</tr>
<?php
		
		session_start();
        $login = $_SESSION['login'];
        $nome = $_SESSION['nome'];
				
		require("../connect.php");
        $result = mysqli_query($conn,"Select discipline.name,discipline.code,teacher.name as teacher_name,regist.state  from regist 
	join student on student.regist_id = regist.id or student.regist_id1 = regist.id
	join discipline on regist.discipline_code=discipline.code
    join teacher on teacher.nusp = discipline.teacher_nusp
	where student.login='$login'");
        
        while($row = mysqli_fetch_array($result)){
          
        echo '<tr id="'.$row["code"].'">';
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["code"]."</td>";
        echo "<td>".$row["teacher_name"]."</td>";
        
		echo "<td>".$row["state"]."</td>";
       
         echo "<td>
				<input type='submit' value ='Remover' name='".$row["code"]."'>
				</td>";
			 echo "</tr>";
        }
                
                ?>



</table>
			</form>

    </div>    
    
    

   <br><br>
		 	

   <mesmalinha> <form action="matriculaSave.php" method="post"> 
   <div class="buttonLoginCadastro">
      <input class="mybutton" type="submit" name="enviar" value="Enviar" id="enviar_disciplina" >
	   
		 </div>
 </form></mesmalinha>

    
</main>
</body>
</html>


