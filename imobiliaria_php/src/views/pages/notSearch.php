
<?php $render('header', ['activeLink' => $activeLink]);?>
<div class="page">
    <h1>Não encontrou o que procura?</h1>
    <?php if($flashNoSerach): ?>
          <div class="flash-alert">
              <p><?=$flashNoSerach;?> <p>
          </div>
      <?php endif;?>
   <div class="row-i-search">
     <form method="POST" action="">
      <div class="i-form-x">
        <div class="col-group">
          <h3>Seus dados</h3>
           <div class='input-i-x'>
              <input  type="text" name="nome" id="0" placeholder="Nome">
              <span id="msg-0" class="msg-error">Campos obrigatório*</span>
           </div>
           <div class='input-i-x'>
             <input type="text" name="cidade" id="1" placeholder="Cidade">
             <span id="msg-1" class="msg-error">Campos obrigatório*</span>
          </div>
          <div class='input-i-x'>
            <input type="email" name="email" id="2" placeholder="Email">
            <span class="msg-error" id="msg-2">Campos obrigatório*</span>
         </div>
         <div class='input-i-x'>
            <input type="email" name="conf_email" id="3" placeholder="Confirmar Email">
            <span class="msg-error" id='msg-3'>Campos obrigatório*</span>
         </div>
         <div class='input-i-x'>
            <input type="text" name="telefone" id="4" placeholder="Telefone">
            <span class="msg-error" id="msg-4">Campos obrigatório*</span>
         </div>
         <div class='input-i-x'>
            <textarea name="descricao" id="5" cols="10" rows="10"> </textarea>
            <span class="msg-error" id="msg-5">Campos obrigatório*</span>
         </div>
        </div>
        <div class="col-group">
           <h3>Dados do imovel</h3>
           <p>Operação</p>
           <span class="msg-error" id="msg" >Campos obrigatório*</span>
           <div class="align-i-x">
              <div class="group-radio">
                <input type="radio"  value="locacao" name="operacao">
                <label>Locação</label>
              </div>
              <div class="group-radio">
                <input type="radio"  value="venda" name="operacao">
                <label>Venda</label>
             </div>
           </div>
           <p>Selecione os tipos de imóveis desejados</p>
           <div class="align-i-x">
             <div class='input-i-x'>
                <select name="residencial">
                  <option value="">Residêncial</option>
                  <option value="Casa">Casa</option>
                  <option value="Casa em Condomínio">Casa em Condomínio</option>
                  <option value="Chacará">Chacará</option>
                  <option value="Chacará Condomínio">Chacará Condomínio</option>
                </select>
             </div>
           </div>
           <div class="align-i-x">
             <div class='input-i-x'>
                <select name="comercial">
                  <option value="">Comercial</option>
                  <option value="Casa">Casa</option>
                  <option value="Galpão/Barracão">Galpão/Barracão</option>
                  <option value="Loja em Shopping">Loja em Shopping</option>
                  <option value="Loja/Salão">Loja/Salão</option>
                  <option value="Sala">Sala</option>
                  <option value="Sala Condomínio">Sala Condomínio</option>
                  <option value="Sobreloja">Sobreloja</option>
                  <option value="Predio de Apartamento">Predio de Apartamento</option>
                </select>
             </div>
           </div>
           <div class="align-i-x">
             <div class='input-i-x'>
                <select name="terreno">
                  <option value="">Terreno</option>
                  <option value="Área">Área</option>
                  <option value="Dentro do Condomínio">Dentro do Condomínio</option>
                  <option value="Fora do Condominio">Fora do Condominio</option>
                </select>
             </div>
           </div>
         </div>
        </div>
        <h3>Selecione as cidade(as) desejada(s)</h3>
        <div class="row-i-x">
            <div class="col-i-button">
                <label class="button-x" for="Marília">
                   <div class="active-button">Marília</div>
                </label>
                <input id="Marília" value="Marília" type="checkbox" name="cidade1">

                <label class="button-x" for="Lupercio">
                   <div class="active-button">Lupercio</div>
                </label>
                <input id="Lupercio" value="Lupercio" type="checkbox" name="cidade2">
                
                <label class="button-x" for="Bauru">
                   <div class="active-button">Bauru</div>
                </label>
                <input id="Bauru" value="Bauru" type="checkbox" name="cidade3">

                <label class="button-x" for="Garça">
                   <div class="active-button">Garça</div>
                </label>
                <input id="Garça" value="Garça" type="checkbox" name="cidade4">

                <label class="button-x" for="Adamantina">
                  <div class="active-button">Adamantina</div>
                  </label>
                <input id="Adamantina" value="Adamantina" type="checkbox" name="cidade5">

                <label class="button-x" for="São Paulo">
                  <div class="active-button">São Paulo</div>
                  </label>
                <input id="São Paulo" type="checkbox" name="cidade_6">

                <label class="button-x" for="Sorocaba">
                  <div class="active-button">Sorocaba</div>
                </label>
                <input id="Sorocaba" value="Sorocaba" type="checkbox" name="cidade7">
                
            </div>
            <div class="col-i-button">
                <label class="button-x" for="Lacio">
                  <div class="active-button">Lacio</div>
                </label>
                <input id="Lacio" value="Lacio" type="checkbox" name="cidade8">

               <label class="button-x" for="Padre_Nobrega">
                  <div class="active-button">Padre Nobrega</div>
                </label>
                <input id="Padre_Nobrega" value="Padre Nobrega" type="checkbox" name="cidade9">

                <label class="button-x" for="Jau">
                  <div class="active-button">Jaú</div>
                </label>
                <input id="Jau" value="Jaú" type="checkbox" name="cidade10">

                <label class="button-x" for="Santos">
                  <div class="active-button">Santos</div>
                </label>
                <input id="Santos" value="Santos" type="checkbox" name="cidade11">

                <label class="button-x" for="Americanas">
                  <div class="active-button">Americanas</div>
                </label>
                <input id="Americanas" value="Americanas" type="checkbox" name="cidade12">
                
                <label class="button-x" for="Panorama">
                  <div class="active-button">Panorama</div>
                </label>
                <input id="Panorama" value="Panorama" type="checkbox" name="cidade13">

                <label class="button-x" for="Presidente_Prudente">
                  <div class="active-button">Presidente Prudente</div>
                </label>
                <input id="Presidente_Prudente" value="Presidente Prudente" type="checkbox" name="cidade14">
            </div>
        </div>
        <div class="row-i-x" >
          <div class="col-input">
            <div class="group-i-x-1">
              <label for="">Valor</label>
              <input type="text" name="valor">
            </div>

            <div class="group-i-x-1">
              <label for="">Garagem</label>
              <input type="number" name="garagem">
            </div>

            <div class="group-i-x-1">
              <label for="">Quartos</label>
              <select type="text" name="quarto">
                <option value="">selecinar...</option>
                <option value="1+">1+</option>
                <option value="2+">2+</option>
                <option value="3+">3+</option>
                <option value="4+">4+</option>
              </select>
              <div class="i-button-2">
                <button class="button" type="button">Enviar</button>
               </div>
            </div>
          </div>
        </duv>
      </form>
    </div>
</div>
<?php $render('login-item');?>
<?php $render('footer');?>