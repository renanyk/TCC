<html>
<head>
<title>
Cadastrar
</title>
<meta charset="UTF-8">

</head>
    <body class="inicio">
        <link rel="stylesheet" type="text/css" href="index.css" media="screen" />
        <div class="topnav" id="myTopnav">
            <a><img src="..\img\logo.png" alt="Mountain View" width="150" height="75" style="margin:10px"></a> 
            <teste><a href="inicio.html">Início</a></teste>
            <teste><a href="contatos.html">Contatos</a></teste>
            <teste><a href="calendario.html">Calendário</a></teste>

            <div class = "logina"><a class="loginMargin" href="login.html">logar</a>
                <a href="cadastrar.html">Cadastrar</a>
            </div>
        </div>

        <form action="cadastro.php" method="post"> 
            <div class="caixaCadastro">
                <div class="titulocadastro">
                    <br>
                    <br>
                    <h3>Informações de login</h3>
                    <br>
                    <br>
                </div>

 
                <div class="cadastrotexto"style="padding-right:135px;">Login: </div>
                <input type="text" name="login" value="">
                    
                    <br><br>
                <div class="cadastrotexto"style="padding-right:135px;">Senha: </div>
                <input type="password" name="senha" value="" id="password1">
                <br><br>
                <div class="cadastrotexto"style="padding-right:83px;">Repetir Senha: </div>
                <input type="password" name="repetirSenha" value="" id="password2">
                <div class="registrationFormAlert" id="divCheckPasswordMatch">
                </div>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                <script>
                    var $password1 = $("#password1"),
                        $password2 = $("#password2"),
                        $statusMessage = $("#validate-status"),
                        $submitButton = $('#submit-button');

                    function validate() {

                        if($password1.val() == $password2.val()) {
                            $("#divCheckPasswordMatch").html("Passwords match!");
                            $submitButton.prop('disabled', false);
                        }
                        else {
                            $("#divCheckPasswordMatch").html("Passwords do not match!");
                            $submitButton.prop('disabled', true);
                        }
                    }
                    $(document).ready(function () {
                        $("#password2,#password1").keyup(validate);
                    });
                </script> </div>
            <br><br>
            
        
            <div class="caixaCadastro">
                <div class="titulocadastro">
                    <br>
                    <br>
                    <h3>Informações pessoais</h3>
                    <br>
                    <br>
                </div>

        
                <mesmalinha><div class="cadastrotexto" style="margin-right:135px;" >Nome: </div></mesmalinha><br>
                
                <input type="text" name="nome" value=""> 
      
   
                <br><br>
                
                <mesmalinha><div class="cadastrotexto"style="padding-right: 149px">RG: </div></mesmalinha><br>
                 <input type="text" name="rg" value="">
                <br><br>
                
                <mesmalinha><div class="cadastrotexto"style="padding-right:140px;">Sexo</div></mesmalinha>
                <br>
     
                <select name="sexo"style="margin-right:100px;">
                    
                    <option value="nothing">...</option>
                    <option value="female">Feminino</option>
                    <option value="male">Masculino</option>
					</select>
              
                    <div class="cadastrotexto"style="padding-left:23px;" >Número USP: </div>
                    <input type="text" name="nuspAluno" value="">
                    <br><br>
                 
                
                <mesmalinha>
                <div class="cadastrotexto"style="padding-left:23px;" >Curso de origem: </div>
                </mesmalinha>                        
                <mesmalinha><div class="cadastrotexto"style="padding-left:23px;" >Instituição: </div>
                </mesmalinha>  
                    <br>
                <mesmalinha>
                    <input type="text" name="curso_de_origem" value="">
                </mesmalinha>
                <mesmalinha>
                    <input type="text" name="instituicao_de_origem" value="">
                </mesmalinha>
                                        <br><br>
                <mesmalinha>
                <div class="cadastrotexto"style="padding-left:23px;" >Empresa ou instituição Vinculada: </div>
                </mesmalinha>                        
                <mesmalinha><div class="cadastrotexto"style="padding-left:23px;" >Ramo de atividade: </div>
                </mesmalinha>  
                    <br>
                <mesmalinha>
                    <input type="text" name="empresa_ou_instituicao_de_vinculo" value="">
                </mesmalinha>
                <mesmalinha>
                    <input type="text" name="ramo_atividade" value="">
                </mesmalinha>
                    <div class="cadastrotexto"style="padding-left:23px;" >Funcao do vinculo: </div><br>
					<input type="text" name="funcao_no_vinculo" value="">
                
				
			</div>
            <div class="caixaCadastro">
                <div class="titulocadastro">
                    <br>
                    <br>
                    <h3>Informações para comunicação</h3>
                    <br>
                    <br>
                </div>

    
                <div class="cadastrotexto"style="padding-right:130px;">E-mail: </div>
                <input type="text" name="e_mail" value="">  
   
                <br><br>
                <mesmalinha><div class="cadastrotexto"style="padding-right:22px;">Número telefone:     </div></mesmalinha>
              <br>
                <input type="text" name="telefone" value="">
                <br><br>

            </div>     
				
        
            <div class="caixaCadastro">
                <div class="titulocadastro">
                    <br>
                    <br>
                    <h3>Endereço</h3>
                    <br>
                    <br>
                </div>

 
                <mesmalinha><div class="cadastrotexto"style="padding-right:140px;">Endereço: </div></mesmalinha>
                <mesmalinha><div class="cadastrotexto"style="padding-right:120px;">Cidade: </div>  </mesmalinha><br>
                <input type="text" name="endereco" value="">  <input type="text" name="cidade" value="">
   
                <br><br>
                <mesmalinha><div class="cadastrotexto"style="padding-right:125px;">Estado: </div></mesmalinha>
                <mesmalinha><div class="cadastrotexto"style="padding-right:145px;">CEP: </div></mesmalinha><br>
                <input type="text" name="estado" value="">  <input type="text" name="cep" value="">
                <br><br>

        
                <div class="buttonLoginCadastro">
       
                    <br>
                    <input class="mybutton" type="submit" name="cadastrarbutton" value="Cadastrar" id="submit-button">
                    <br>
                    <br>
                </div>

            </div>
        </form> 

    </body>
</html>