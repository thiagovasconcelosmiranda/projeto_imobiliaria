<?php $render('header', [
  'aboutFlex'=>$aboutFlex, 
  'activeLink' => $activeLink
  ]);?>

<div class="page-form">
    <div class="title-form">
        <h1>Quer anunciar o seu imóvel com o Estilo?</h1>
        <br/>
        <?php if($flash):?>
          <div class="info-flash">
           <h3><?=$flash;?></h3>
        </div>
        <?php endif; ?>
        
    </div>
    <div class="text-form-p">
        <p>Coloque seu imóvel para alugar ou vender. E comece já a atrair interessados.</p>
        <p>É muito importante que os dados estejam todos corretos e atualizados, nossos 
            consultores vão agendar com você uma visita ao imóvel e lembre-se de deixar 
            tudo arrumadinho para novas fotos, faremos uma avaliação criteriosa para que seu
            imóvel seja anunciado com o melhor preço.</p>
    </div>
    <form class="form-i" method="POST" action="<?=$base;?>/anuncio">
        <h1>Meus dados</h1>
        <div class="group-input">
           <div class="input-alert">
             <input  type="text" id="0"  name="name" placeholder="Nome">
             <span id="msg-0" >Campos obrigatório*</span>
           </div>
           <div class="input-alert">
             <input type="email" id="1"  name="email" placeholder="Email">
             <span id="msg-1">Campos obrigatório*</span>
           </div>
        </div>
        <div class="group-input">
          <div class="input-alert">
            <input type="text" name="telefone"  id="2"  placeholder="Telefone">
            <span id="msg-2">Campos obrigatório*</span>
          </div>
          <div class="input-alert">
            <input type="text" id="3" name="celular" placeholder="Celular">
            <span id= "msg-3" >Campos obrigatório*</span>
          </div>
        </div>

        <h1>Dados do Imóvel</h1>
        <div class="group-input">
          <div class="input-alert">
             <select class="select-i" id="4" name="preferencia" value="preferencia">
                <option value="">Selecione...</option>
                <option value="Locacão">Locação</option>
                <option value="Venda">Venda</option>
             </select>
             <span id="msg-4">Campos obrigatório*</span>
            </div>
            <div class="input-alert">
              <input type="text" name="tipo_imovel" id="5" placeholder="Tipo de imóvel ex:(Casa, Apt, Terreno)">
              <span id="msg-5">Campos obrigatório*</span>
            </div>
        </div>
        <div class="group-input">
            <div class="input-alert">
               <input type="text"id="6" name="cep" placeholder="Cep">
               <span id="msg-6">Campos obrigatório*</span>
            </div>
            <div class="input-alert">
               <input type="text" id="7" name="end" placeholder="Endereço">
               <span id="msg-7">Campos obrigatório*</span>
            </div>
        </div>

        <div class="group-input">
           <div class="input-alert">
              <input type="number" id="8" name="num" placeholder="Num">
              <span id="msg-8">Campos obrigatório*</span>
           </div>
           <div class="input-alert">
              <input type="text" id="9" name="bairro" placeholder="Bairro">
              <span id="msg-9">Campos obrigatório*</span>
            </div>
        </div>
        <div class="group-input">
           <div class="input-alert">
               <input type="text" id="10" name="cidade" placeholder="Cidade">
               <span id="msg-10">Campos obrigatório*</span>
            </div>
            <div class="input-alert">
              <input type="text" id="11" name="estado" placeholder="Estado">
              <span id="msg-11">Campos obrigatório*</span>
            </div>
        </div>
        <div class="group-input">
            <div class="align-i-5">
            <p>* Todos os campos são de preenchimento obrigatório</p>
            <div class="align-button-text-input input-alert">
              <div class="text-input-group">
                  <input type="checkbox" name="norma" value="Contrato aceito">
                  <label class="msg-error-ann">
                    Ao clicar no botão "Enviar", afirmo que li e concordo
                    com os<a href=""> TERMOS DE USO</a> (atualizados dia 13/08/2021) e <a href=""> POLITICA
                    DE PRIVACIDADE</a> (atualizados dia 13/08/2021).</p>
                  </label>
                </div>
                 <button class="button_announcement" type="button"  id="button">Enviar</button>
             </div>
             
           </div>
        </div>
    </form>
    </div>
<?php $render('login-item');?>
<?php $render('footer');?>



