    <form action="/cadastro" method="POST" class="row g-3 mt-1">      

      <div class="col-md-6">
        <label for="nome" class="form-label text-white">Informe o seu nome</label>
        <input name="nome" type="text" class="form-control py-3" id="inputEmail4">
      </div>
      <div class="col-md-6">
        <label for="numWhatsApp" class="form-label text-white">Número do whats app com DDD</label>
        <input name="cel" type="text" class="form-control py-3" id="numWhatsApp">
      </div>

      <div class="col-md-12">
        <label for="inputState" class="form-label">Estado</label>
        <select name="estado" id="inputState" class="form-select py-3">
          <option selected>Estado</option>
          <option>Rio de janeiro</option>
        </select>
      </div>

      <div class="col-md-12">
        <label for="inputState" class="form-label">cidade</label>
        <select name="cidade" id="inputState" class="form-select py-3">
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
        <button type="submit" class="btn btn-warning py-3 text-light text-uppercase fs-4 w-bold">Cadastrar</button>
      </div>

    </form>

  