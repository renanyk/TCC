<html>
<head>
<title>
logar
</title>
<meta charset="UTF-8">
</head>
<body class="inicio">
<link rel="stylesheet" type="text/css" href="index.css" media="screen" />
  <div class="topnav" id="myTopnav">
  <a><img src="../img/logo.png" alt="Mountain View" ></a> 
  <teste><a href="inicio.html">Início</a></teste>
  <teste><a href="inicio.html">Contatos</a></teste>
  <teste><a href="inicio.html">Calendário</a></teste>

  <div class = "logina"><a class="loginMargin" href="inicio.html">logar</a>
  <a href="cadastrar.html">Cadastrar</a>
  </div>
</div>

   
   
<div class="loginCadastro">
   <div class="textWelcome">
      <br>
       <br>
       <h3>Bem vindo a plataforma online</h3>
         <br>
       <br>
    </div>
    <form action="login.php" method="post"> 
        <div class="login">Logar como: </div>
    <select name="categoria" id="selectorUser" >
                 
                    <option value="studant">Aluno</option>
                    <option value="teacher">Professor</option>
                    <option value="graduacao">Funcionário da Graduação</option>
                    <option value="departamento">Funcionário do Departamento</option>
                    </select>
    
   <br><br>
 
       <div class="login">Login: </div><br>
   <input type="text" name="login" value="">
   
   <br>
   <br>
   
       <div class="login">Senha: </div><br>
   <input type="password" name="senha" value="">
  
   <br><br>
   
   <div class="buttonLoginCadastro">
      <input class="mybutton" type="submit" name="logar" value="Logar" >
      <br>
       <br></div>
       </form>
       <form action="cadastro.html" method="post"> 
        <div class="buttonLoginCadastro">
      <input class="mybutton" type="submit" name="cadastrar" value="Cadastrar">
 
      <br>
      <br>
   </div>
 </form> 
</div>

</body>
</html>