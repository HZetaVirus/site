
<div name="user" class="alert alert-primary fs-4 mt-1" role="alert">
  <a href="/logoff"><?=  $_SESSION['nome'] ?></a> 
    
</div>

<div class="alert alert-success fs-5" role="alert">
    R$ <?= isset($_SESSION['resultado']) ? str_replace('.', ',', $_SESSION['resultado']) : '0,00'?>
</div>       
<div class="alert alert-secondary fs-5" role="alert">
  Simulador de ganhos
</div>

<form action="/calcular" method="post" class="row g-3"> 

<div class="col-md-12">
  <label for="nome" class="form-label text-white">Qual será sua meta de Indicados por dia para sua rede?</label>
  <input type="text" name="meta" class="form-control py-3" id="inputEmail4" placeholder="Quantidade de indicados">
</div>
<div class="col-md-12">
  <label for="numWhatsApp" class="form-label text-white">Quantos dias no mês você pretende trabalhar fazendo indicações?</label>
  <input type="text" name="qtdDias" class="form-control py-3" id="numWhatsApp" placeholder="Dias que pretende indicar">
</div>

<div class="col-md-12">
  <label for="inputState" class="form-label">Estado</label>
  <select name="viagem" id="inputState" class="form-select py-3">
    <option></option>
    <option value="1" selected>1 viagem por dia</option>
    <option value="2">2 viagem por dia</option>
  </select>
</div>



<div class="d-grid gap-2">
  <button type="submit" class="btn btn-warning py-3 text-light text-uppercase fs-4 w-bold">Simular Agora</button>
</div>

</form>



