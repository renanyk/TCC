
<html>
<head>
<title>
Documentos
</title>
</head>
<meta charset="UTF-8">
<body>
       
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
  <li><a class="itembar" href="matricula.php">Matrícula</a></li>
  <li><a class="itembar"href="acompanhamento.php">Acompanhamento</a></li>
  <li><a class="itembar"href="ajuda.html">Ajuda</a></li>
    <li><a class="titlebar"><b>Minha conta</b></a></li>
  <li><a class="itembar"href="perfil.html">Perfil</a></li>
  <li><a class="itembar"href="mudarsenha.html">Mudar senha</a></li>
  <li><a class="itembar"href="documentos.html">Documentos</a></li>
</ul>

<main style="padding: 0px 0px 150px 250px"> 
    <mainTitle><h3>Inserir Documentos</h3></mainTitle>
    <div class="acompanhamentomatricula">
    <mesmalinha><div class="RG">RG</div></mesmalinha>
    

        <form action="uploadDocumentos.php" method="post" enctype="multipart/form-data">
           <mesmalinha> 
               
               <input type="file" name="rg" id="fileToUpload" accept=".pdf" value="rg">
               <input type="submit" value="enviar" name="buttonrg">
               
            </mesmalinha>
            <mesmalinha><aceito><img style="margin-left: 95px" class="legenda" src="statusAceito.png"></aceito></mesmalinha>
        </form>
        <div class="RG">Cópia simples do conclusão do segundo grau</div>
        <form action="uploadDocumentos.php" method="post"enctype="multipart/form-data">
            <mesmalinha>
                
                <input type="file" name="copia_simples" value="copia_simples" accept=".pdf">
                <input type="submit" value="enviar" name="buttonsg">
            
            </mesmalinha>
            <mesmalinha><aceito><img style="margin-left: 95px" class="legenda" src="statusPendente.png"></aceito></mesmalinha>
        </form>
        <div class="foto">Foto 3x4</div>
        <form action="uploadDocumentos.php" method="post"enctype="multipart/form-data">
            <mesmalinha>
                
                <input type="file" name="foto" value="foto" accept=".pdf,.png">
                <input type="submit" value="enviar" name="buttonfoto">
                
            </mesmalinha>
            <mesmalinha><aceito><img style="margin-left: 95px" class="legenda" src="statusRecusado.png"></aceito></mesmalinha>
        
        </form>
        
            

    </div>
    </main>
    
</body>
</html>


