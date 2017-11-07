
<!DOCTYPE html>
<html>
<title>Início</title>


<link rel="stylesheet" type="text/css" href="index.css" media="screen" />
<body>
  <div class="topnav" id="myTopnav">
  <a><img src="../img/logo.png" alt="Mountain View" ></a> 
  <teste><a href="index.php">Início</a></teste>
  <teste><a href="contatos.php">Contatos</a></teste>
  <teste><a href="calendario.php">Calendário</a></teste>

  <div class = "logina"><a class="loginMargin" href="login.php">logar</a>
  <a href="cadastrar.php">Cadastrar</a>
  </div>
</div>

<ul class="leftbar">
    <li><a class="titlebar"><b>Alunos Especiais</b></a></li>
  <li><a class="itembar" href="BuscarAluno.html">Buscar Aluno</a></li>
  <li><a class="itembar"href="gerenciarDisciplina.php">Adic/Rem Disciplinas</a></li>
  <li><a class="itembar"href="requisicoes.html">Requisições</a></li>
    <li><a class="titlebar"><b>Minha Conta</b></a></li>
  <li><a class="itembar"href="perfil.html">Perfil</a></li>
  <li><a class="itembar"href="mudarsenha.html">Mudar senha</a></li>
  
</ul>


<main> 
    <mainTitle style="margin-left: 400px;"><h3>Requisições ativas</h3>
    </mainTitle>

 <table border="1" style="width: 950px;">


	 
	 
<tr>
<th>Data</th>    
<th>Disciplina</th>
<th>Aluno</th>

<th>RG</th>
<th>Documentos</th>
<th>Matrícula</th>
<th>Estado</th>
</tr>
	 
	 
	 <?php  
	   header('Content-Type: text/html; charset=iso-8859-1');
        require("../connect.php");
        $result = mysqli_query($conn,"SELECT regist.date,discipline.code,discipline.name as discipline_name,studant.name as studant_name,studant.rg,studant.login,regist.state,regist.id FROM regist 
		JOIN discipline ON discipline.code = regist.discipline_code
		JOIN studant on studant.regist_id = regist.id or studant.regist_id1 = regist.id
		where regist.state='graduacao'");
       
        while($row = mysqli_fetch_array($result)){
        
        echo '<tr name = "'.$row["code"].'">';
        echo "<td>".$row["date"]."</td>";
            echo "<td>".$row["discipline_name"]."";
		echo "<br>[".$row["code"]."]</td>";
        echo "<td>".$row["studant_name"]."</td>";

        echo "<td>".$row["rg"]."</td>";
					echo '<td>
    <input type="submit" login="'.$row["login"].'" value="RG" name="RG" id="myBtnRG">
    <input type="submit" login="'.$row["login"].'" value="Foto" name="Foto" id="myBtnFoto">
    <input type="submit" login="'.$row["login"].'" value="SG" name="SG" id="muBtnSG">
    <input type="submit" login="'.$row["login"].'" value="Perfil" name="Perfil" id="myBtnPerfil">
    </td>';
		echo '<td>
    <input type="submit" login="'.$row["login"].'" value="Validar" name="Validar" registId="'.$row["id"].'">
    <input type="submit" login="'.$row["login"].'" value="Recusar" name="Recusar" id="myBtnRecusar" '.$row["id"].'>
    </td>';
        echo "<td>".$row["state"]."</td></tr>";
        
       
        
        }
        ?> 
	 
	 

</table>

</main>
<script type="text/javascript">
    var login;
</script>
<!-- The Modal RG [0]-->
<div id="myModalRG" class="modal">

  <!-- Modal content -->
  <div class="modal-content"  >
    <span1 class="close">&times;</span1>
	 <iframe id="iframeRG"src="../documento/renan/rg.pdf" title="your_title" align="left" height="100%" width="60%" frameborder="0" scrolling="auto" target="Message">
<!-- Alternate content for non supporting browsers -->
<p align="center">Please click <a href="window.location.href='your_script.php'">here </a> to continue.</p>
	  </iframe>
<div  style="margin-left:62%;";>
    <div style="margin-bottom:10px;">Documento: RG<br></div>
     <div style="margin-bottom:10px;">Nome: Renan Yochiro Kawamura<br></div>
		  
		  
			 <div style="margin-bottom:10px;"><input type="submit" name="validar" value="validar" id="validarRG">
    </div>
                 <br>
			  Motivos para recusar<br>
			  <input type="textbox" name=" " value = "">
			  <input type="submit" name="recusar" value="recusar" id="recusarRG">
		  
	  </div>
    
  </div>
	
</div>
<!-- The Modal Foto [1]-->
<div id="myModalFoto" class="modal">

  <!-- Modal content -->
  <div class="modal-content" >
    <span class="close">&times;</span>
	 <iframe id = "iframeFoto" src="../documento/renan/rg.pdf" title="your_title" align="left" height="100%" width="60%" frameborder="0" scrolling="auto" target="Message">
<!-- Alternate content for non supporting browsers -->
<p align="center">Please click <a href="window.location.href='your_script.php'">here </a> to continue.</p>
	  </iframe>
<div  style="margin-left:62%;";>
    <div style="margin-bottom:10px;">Documento: Foto<br></div>
     <div style="margin-bottom:10px;">Nome: Renan Yochiro Kawamura<br></div>
		  
		  
			 <div style="margin-bottom:10px;"><input type="submit" name="validar" value="validar" id="validarFoto">
    </div>
                 <br>
			  Motivos para recusar<br>
			  <input type="textbox" name=" " value = "">
			  <input type="submit" name="recusar" value="recusar" id="recusarFoto">
		  
	  </div>
    
  </div>
	
</div>
<!-- The Modal SG [2]-->
<div id="myModalSG" class="modal">

  <!-- Modal content -->
  <div class="modal-content" >
    <span class="close">&times;</span>
	 <iframe id = "iframeSG" src="../documento/renan/rg.pdf" title="your_title" align="left" height="100%" width="60%" frameborder="0" scrolling="auto" target="Message">
<!-- Alternate content for non supporting browsers -->
<p align="center">Please click <a href="window.location.href='your_script.php'">here </a> to continue.</p>
	  </iframe>
	  
      
      <div  style="margin-left:62%;";>
    <div style="margin-bottom:10px;">Documento: SG<br></div>
     <div style="margin-bottom:10px;">Nome: Renan Yochiro Kawamura<br></div>
		  
		  
			 <div style="margin-bottom:10px;"><input type="submit" name="validar" value="validar" id="validarSG">
    </div>
                 <br>
			  Motivos para recusar<br>
			  <input type="textbox" name=" " value = "">
			  <input type="submit" name="recusar" value="recusar" id="recusarSG">
		  
	  </div>
      
      
    
  </div>
	
</div>
        <!-- The Modal Perfil [3]-->
<div id="myModalPerfil" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
	  <h2>Aceitar</h2>
	  

		  <p>Descrição<p>
      <input type="submit"  value="aceitar" name="aceitar" id="validarPerfil">
		  <input type="text" name ="descricao" value=""><br>
		  <input type="submit"  value="recusar" name="recusar" id="recusarPerfil">

		 	 
			 
    
  </div>
</div>
  
    
    
    
    <!-- The Modal RECUSAR [4]-->
<div id="myModalRecusar" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
	  <h2>Porque deseja recusar?</h2>
	  <form action="">
		  <p>Descrição<p>
		  <input type="text" name ="descricao" value=""><br>
		  <input type="submit"  value="recusar" name="recusar" >

		 	 
			  </form>
    
  </div>
</div>
    
<script >
// Get the modal
	var modal = document.getElementById('myModalRG');
	var modal1 = document.getElementById('myModalFoto');
	var modal2 = document.getElementById('myModalSG');
	var modal3 = document.getElementById('myModalPerfil');
	var modal4 = document.getElementById('myModalRecusar');

// Get the button that opens the modal
	var btn = document.getElementsByName("RG");
	var btn1 = document.getElementsByName("Foto");
	var btn2 = document.getElementsByName("SG");
	var btn3 = document.getElementsByName("Perfil");
	var btn4 = document.getElementsByName("Recusar");
	
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close");

// validate
    var validateRG = document.getElementById("validarRG");
    var validateFoto = document.getElementById("validarFoto");
    var validateSG = document.getElementById("validarSG");
    var validatePerfil = document.getElementById("validarPerfil");
//refuse
    
    var refuseRG = document.getElementById("recusarRG");
    var refuseFoto = document.getElementById("recusarFoto");
    var refuseSG = document.getElementById("recusarSG");
    var refusePerfil = document.getElementById("recusarPerfil");
    
// When the user clicks the button, open the modal 
  var i;  
for(i=0;i<btn.length;i++){
    btn[i].onclick = (function(){
        var current_i = i;
        return function(){
            login = btn[current_i].getAttribute("login");
    var iframe = document.getElementById("iframeRG");
        iframe.setAttribute('src', '../documento/'+login+'/rg.pdf');
        modal.style.display = "block";
}})();
    
}    
for(i=0;i<btn1.length;i++){
    btn1[i].onclick = (function(){
        var current_i = i;
        return function(){
            login = btn1[current_i].getAttribute("login");
    var iframe = document.getElementById("iframeFoto");
        iframe.setAttribute('src', '../documento/'+login+'/foto.pdf');
        modal1.style.display = "block";
}})();
    
} 
for(i=0;i<btn2.length;i++){
    btn2[i].onclick = (function(){
        var current_i = i;
        return function(){
            login = btn2[current_i].getAttribute("login");
    var iframe = document.getElementById("iframeSG");
        iframe.setAttribute('src', '../documento/'+login+'/copia_simples.pdf');
        modal2.style.display = "block";
}})();
    
} 
    

for(i=0;i<btn3.length;i++){
    btn3[i].onclick = (function(){
        var current_i = i;
        return function(){
             login = btn3[current_i].getAttribute("login");
        modal3.style.display = "block";
}})();
    
} 
for(i=0;i<btn4.length;i++){
    btn4[i].onclick = (function(){
        var current_i = i;
        return function(){
            login = btn4[current_i].getAttribute("login");
        modal4.style.display = "block";
}})();
    
} 
    
function closeAllModel(){
        modal.style.display = "none";
      modal1.style.display = "none";
      modal2.style.display = "none";
      modal3.style.display = "none";
      modal4.style.display = "none";
}
// When the user clicks on <span> (x), close the modal
for(i=0;i<span.length;i++){
 span[i].onclick = function(){
    closeAllModel();
}
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
	    if (event.target == modal1) {
        modal1.style.display = "none";
    }
		    if (event.target == modal2) {
        modal2.style.display = "none";
    }
		    if (event.target == modal3) {
        modal3.style.display = "none";
    }
		    if (event.target == modal4) {
        modal4.style.display = "none";
    }
}
//validate
validateRG.onclick = function(){
     closeAllModel();
    for(i=0;i<btn.length;i++){
        if(btn[i].getAttribute("login")==login){
           
            btn[i].style.backgroundColor = "green"
        }
    }
}

validateFoto.onclick = function(){
     closeAllModel();
    for(i=0;i<btn1.length;i++){
        if(btn1[i].getAttribute("login")==login){
           
            btn1[i].style.backgroundColor = "green"
        }
    }
}
validateSG.onclick = function(){
     closeAllModel();
    for(i=0;i<btn2.length;i++){
        if(btn2[i].getAttribute("login")==login){
           
            btn2[i].style.backgroundColor = "green"
        }
    }
}
validatePerfil.onclick = function(){ 
    closeAllModel();
    for(i=0;i<btn3.length;i++){
        if(btn3[i].getAttribute("login")==login){
           
            btn3[i].style.backgroundColor = "green"
        }
    }
}

//refuse

refuseRG.onclick = function(){
     closeAllModel();
    for(i=0;i<btn.length;i++){
        if(btn[i].getAttribute("login")==login){
           
            btn[i].style.backgroundColor = "red"
        }
    }
}

refuseFoto.onclick = function(){
     closeAllModel();
    for(i=0;i<btn1.length;i++){
        if(btn1[i].getAttribute("login")==login){
           
            btn1[i].style.backgroundColor = "red"
        }
    }
}
refuseSG.onclick = function(){
     closeAllModel();
    for(i=0;i<btn2.length;i++){
        if(btn2[i].getAttribute("login")==login){
           
            btn2[i].style.backgroundColor = "red"
        }
    }
}
refusePerfil.onclick = function(){
     closeAllModel();
    for(i=0;i<btn3.length;i++){
        if(btn3[i].getAttribute("login")==login){
           
            btn3[i].style.backgroundColor = "red"
        }
    }
}

</script>
</body>
</html>