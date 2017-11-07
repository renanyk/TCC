
<!DOCTYPE html>
<html>
<title>Início</title>

<link rel="stylesheet" type="text/css" href="index.css" media="screen" />
<head>
    <?php
	 header('Content-Type: text/html; charset=iso-8859-1');
    ?>
    </head>
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
  <li><a class="itembar"href="adic_rem.html">Adic/Rem Disciplinas</a></li>
  <li><a class="itembar"href="requisicoes.php">Requisições</a></li>
    <li><a class="titlebar"><b>Minha Conta</b></a></li>
  <li><a class="itembar"href="perfil.html">Perfil</a></li>
  <li><a class="itembar"href="mudarsenha.html">Mudar senha</a></li>
  
</ul>


<main> 
    <h3 style="text-align:center">Gerenciamento de disciplinas</h3>
  
    <form>
    
    <mesmalinha><text>Código da disciplina</text><br>
    <input type="text" name="code" value=""><br>
    <input type="button" name="inserir" value="inserir">
    <input type="button" name="inserir" value="remover">
    </mesmalinha>
            
    </form>
  
    <br>
    <mesmalinha>  
    <button class="especialButton">Adicionar Automaticamente <br/>Todas as Disciplinas</button>
    <button class="especialButton">Remover Todas <br/>as Disciplinas</button>
    <button class="especialButton">Limpar Histórico<br/>de Disciplinas adicionadas</button>
    <button class="especialButton">Limpar Histórico<br/>de Disciplinas removidas</button>
    </mesmalinha>
    
    
</main>
</body>
</html>