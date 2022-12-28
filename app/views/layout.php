<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <title>PROJECT</title>

<body class="bg-dark">

  <div class="container">

    <form class="row g-3 mt-1">

      <div class="col-6 col-md-3">
        <a href="#" class="btn btn-light py-3 px-5">Cadastrar</a>
      </div>

      <div class="col-6 col-md-9">
        <a href="#" class="btn btn-light py-3 px-5">Já sou cadastrar</a>
      </div>

      <div class="col-md-6">
        <label for="nome" class="form-label text-white">Informe o seu nome</label>
        <input type="email" class="form-control py-3" id="inputEmail4">
      </div>
      <div class="col-md-6">
        <label for="numWhatsApp" class="form-label text-white">Número do whats app com DDD</label>
        <input type="text" class="form-control py-3" id="numWhatsApp">
      </div>

      <div class="col-md-12">
        <label for="inputState" class="form-label">Estado</label>
        <select id="inputState" class="form-select py-3">
          <option selected>Estado</option>
          <option>Rio de janeiro</option>
        </select>
      </div>

      <div class="col-md-12">
        <label for="inputState" class="form-label">cidade</label>
        <select id="inputState" class="form-select py-3">
          <option selected>Cidades</option>
          <option value="cidade">RIO DE JANEIRO</option>
          <option value="cidade">SÃO GONÇALO</option>
          <option value="cidade">NITERÓI</option>
          <option value="cidade">BELFORD ROXO</option>
          <option value="cidade">NOVA IGUAÇÚ</option>
          <option value="cidade">DUQUE DE CAXIAS</option>
          <option value="cidade">CAMPOS DOS GOYTACAZES</option>
          <option value="cidade">SÃO JOÃO DE MERITI</option>
          <option value="cidade">PETRÓPOLIS</option>
          <option value="cidade">VOLTA REDONDA</option>
          <option value="cidade">MACAÉ</option>
          <option value="cidade">MAGÉ</option>
          <option value="cidade">ITABORAÍ</option>
          <option value="cidade">CABO FRIO</option>
          <option value="cidade">ANGRA DOS REIS</option>
          <option value="cidade">NOVA FRIBURGO</option>
          <option value="cidade">BARRA MANSA</option>
          <option value="cidade">TERESÓPOLIS</option>
          <option value="cidade">MESQUITA</option>
          <option value="cidade">NILÓPOLIS</option>
          <option value="cidade">MARICÁ</option>
          <option value="cidade">RIO DAS OSTRAS</option>
          <option value="cidade">QUEIMADOS</option>
          <option value="cidade">ITAGUAÍ</option>
          <option value="cidade">ARARUAMA</option>
          <option value="cidade">RESENDE</option>
          <option value="cidade">JAPERI</option>
          <option value="cidade">SÃO PEDRO DA ALDEIA</option>
          <option value="cidade">ITAPERUNA</option>
          <option value="cidade">BARRA DO PIRAÍ</option>
        </select>
      </div>

      <div class="d-grid gap-2">
        <button type="submit" class="btn btn-warning py-3 text-light text-uppercase fs-4 w-bold">Acessar</button>
      </div>

    </form>

  </div>



  <?= $this->content() ?>


</body>

</html>