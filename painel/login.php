<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MGR NOTICIAS EDUCACIONAIS</title>
    <link rel="stylesheet" href="css.css">
</head>

<body>
    <!--CABEÇALHO-->
    <header>
        <div id="mgr-container">
            <!--img src="logo.svg" alt="MGRMETA"-->

            <h1>MGRODRIGUES NOTICIAS EDUCACIONAIS</h1>
            <p>Desenvolvido por<a href="https://github.com/MarivaldoGualberto">@marivaldogualberto</a></p>
            <div>
                <table class="menu">
                    <thead>
                        <tr>
                            <th><a class="navbar-brand" href="index.html">Home</a></th>
                            <th><a class="dropdown-item" href="login.html">Login</a></th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>

    </header>
<body>
    <div id="geral">
        <div id="topo">
            <div id="logo">
                <img src="../img/logo_php.png">
            </div>
            <div id="titulo_topo">
                
                <h4>FORMAÇÃO FULLSTACK PHP</h4>
            </div>
        </div>
        <div id="menu">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="../index.html">Principal</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../painel/login.html">Intranet</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Categorias
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item" href="#">Jornalismo</a></li>
                          <li><a class="dropdown-item" href="#">Esporte</a></li>
                          <li><a class="dropdown-item" href="#">Tecnologia</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </div>
        <div id="conteudo">
          <div id="login_tela">
    <div class="container" >
        <a class="links" id="paracadastro"></a>
        <a class="links" id="paralogin"></a>
        
        <div class="content">      
          <!--FORMULÁRIO DE LOGIN-->
          <div id="login">
            <form method="get" action="inserir.php"> 
              <h1>Login</h1> 
              <p> 
                <label for="email_login">Seu e-mail</label>
                <input id="email_login" name="email_login" required="required" type="email" placeholder="contato@htmlecsspro.com"/>
              </p>
              
              <p> 
                <label for="senha_login">Sua senha</label>
                <input id="senha_login" name="senha_login" required="required" type="password" placeholder="1234" /> 
              </p>
              
              <p> 
                <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
                <label for="manterlogado">Manter-me logado</label>
              </p>
              
              <p> 
                <input type="submit" value="Logar" /> 
              </p>
              
              <p class="link">
                Ainda não tem conta?
                <a href="#paracadastro">Cadastre-se</a>
              </p>
            </form>
          </div>
    
          <!--FORMULÁRIO DE CADASTRO-->
          <div id="cadastro">
            <form method="post" action=""> 
              <h1>Cadastro</h1> 
              
              <p> 
                <label for="nome_cad">Seu nome</label>
                <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="Aula de PHP" />
              </p>
              
              <p> 
                <label for="email_cad">Seu e-mail</label>
                <input id="email_cad" name="email_cad" required="required" type="email" placeholder="contato@htmlecsspro.com"/> 
              </p>
              
              <p> 
                <label for="senha_cad">Sua senha</label>
                <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="1234"/>
              </p>
              
              <p> 
                <input type="submit" value="Cadastrar"/> 
              </p>
              
              <p class="link">  
                Já tem conta?
                <a href="#paralogin"> Ir para Login </a>
              </p>
            </form>
          </div>
        </div>
      </div> 
        </div> 
      </div>   
      <div id="rodape">
        <div id="logo_rodape">
           <img src="../img/logo_php.png">
        </div>
          
        <div id="redes">
            <h4 class="redes">Conheça nossas redes sociais</h4> 
            <ul>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>

</div>
</body>

</html>