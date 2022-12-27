<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <title>Pais e filhos lanches</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <title>Cadastro</title>
</head>
<body>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
      </li>  
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="?page=cadastrar">Cadastrar</a>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?page=login">Acessar</a>
        </li>
      </ul>
    </div>
    <div class="container">
      <div class="row">
        <div class="col mt-4">
          <?php
          include("config.php");
          switch (@$_REQUEST["page"]) {
            case "cadastrar":
            include("cadastrar.php");
            break;
            case "login":
            include("login.php");
            break;              
            case "resgistrados":
            include("resgistrados.php");
            break;
            default:
              print "Bem vindos!";
          }

          ?>      
        </div>
      </div>
    </div>
  </body>
</head>
</html>