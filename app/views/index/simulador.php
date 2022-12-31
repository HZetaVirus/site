<div class="alert alert-primary fs-4 mt-2" role="alert">
    <?=  $_SESSION['nome'] ?>
</div>

<div class="alert alert-secondary fs-5" role="alert">
  Simulador de ganhos
</div>

<form class="row g-3">      

<div class="col-md-12">
  <label for="nome" class="form-label text-white">Qual será sua meta de Indicados por dia para sua rede?</label>
  <input type="email" class="form-control py-3" id="inputEmail4">
</div>
<div class="col-md-12">
  <label for="numWhatsApp" class="form-label text-white">Quantos dias no mês você pretende trabalhar fazendo indicações?</label>
  <input type="text" class="form-control py-3" id="numWhatsApp">
</div>

<div class="col-md-12">
  <label for="inputState" class="form-label">Estado</label>
  <select id="inputState" class="form-select py-3">
    <option selected>Viajar</option>
    <option>1 viagem por dia</option>
    <option>2 viagem por dia</option>
  </select>
</div>



<!-- <div class="d-grid gap-2">
  <button type="submit" class="btn btn-warning py-3 text-light text-uppercase fs-4 w-bold">Acessar</button>
</div> -->

</form>



