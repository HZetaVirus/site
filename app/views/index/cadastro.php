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
        <select id="inputState" class="form-select py-3">
          <option>Estado</option>
          <option>Rio de janeiro</option>
        </select>
      </div>

      <div class="col-md-12">
        <label for="inputState" class="form-label">cidade</label>
        <select id="inputState" class="form-select py-3">
          <option value="1">RIO DE JANEIRO</option>
          <option value="2">SÃO GONÇALO</option>
          <option value="3">NITERÓI</option>
          <option value="4">BELFORD ROXO</option>
          <option value="5">NOVA IGUAÇÚ</option>
          <option value="6">DUQUE DE CAXIAS</option>
          <option value="7">CAMPOS DOS GOYTACAZES</option>
          <option value="8">SÃO JOÃO DE MERITI</option>
          <option value="9">PETRÓPOLIS</option>
          <option value="10">VOLTA REDONDA</option>
          <option value="11">MACAÉ</option>
          <option value="12">MAGÉ</option>
          <option value="13">ITABORAÍ</option>
          <option value="14">CABO FRIO</option>
          <option value="15">ANGRA DOS REIS</option>
          <option value="16">NOVA FRIBURGO</option>
          <option value="17">BARRA MANSA</option>
          <option value="18">TERESÓPOLIS</option>
          <option value="19">MESQUITA</option>
          <option value="20">NILÓPOLIS</option>
          <option value="21">MARICÁ</option>
          <option value="22">RIO DAS OSTRAS</option>
          <option value="23">QUEIMADOS</option>
          <option value="24">ITAGUAÍ</option>
          <option value="25">ARARUAMA</option>
          <option value="26">RESENDE</option>
          <option value="27">JAPERI</option>
          <option value="28">SÃO PEDRO DA ALDEIA</option>
          <option value="29">ITAPERUNA</option>
          <option value="30">BARRA DO PIRAÍ</option>
        </select>
      </div>

      <div class="d-grid gap-2">
        <button type="submit" class="btn btn-warning py-3 text-light text-uppercase fs-4 w-bold">Cadastrar</button>
      </div>

    </form>

  