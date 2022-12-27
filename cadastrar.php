<html><head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"></head><body>
    <form action="index.php" class="" method="POST">
      <input type="hidden" name="acao" value="cadastrar">
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
            <div class="form-check mb-3">
              <input class="form-check-input" type="checkbox" id="myCheck" name="remember" required="" checked="checked">
              <label class="form-check-label" for="myCheck">Lembre de mim!.</label>
              <br><br>
              <div class="mb-3">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</body>
</html>