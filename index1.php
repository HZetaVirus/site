<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pais e filhos lanches</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
  <h1>Bem vindo!</h1>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <form action="index.php" class="" method="POST">
    <div class="mb-3 mt-3">
      <label>Usuário:</label><br>
      <input type="text" class="form-control" id="name" placeholder="Seu nome" name="name" required="" value="jhe">
      <br><br>
      <div class="mb-3">
        <label>Telefone:</label><br>
        <input type="text" class="form-control" id="telefone" placeholder="Seu whatsapp com DDD" name="telefone" required="">
        <br><br>
        <div class="mb-3">
          <label>Cidade:</label><br>
          <input type="text" class="form-control" id="cidade" placeholder="Sua cidade" name="cidade" required="">
          <br><br>
          <div class="mb-3">
            <label>Estado:</label><br>
            <input type="text" class="form-control" id="estado" placeholder="Seu estado" name="estado" required="">
              <br><br>
              <div class="mb-3">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                <div>
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
              </body>
              </html>

