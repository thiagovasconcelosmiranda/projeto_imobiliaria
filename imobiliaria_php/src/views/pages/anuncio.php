<?php $render('header', ['aboutFlex'=>$aboutFlex]); ?>

<div class="page-form">
    <div class="title-form">
        <h1>Quer anunciar o seu imóvel com o Estilo?</h1>
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
             <input type="text" data ="0"  name="name" placeholder="Nome">
             <span data ="0" >Preencha os dados</span>
           </div>
           <div class="input-alert">
             <input type="email" data="1"  name="email" placeholder="Email">
             <span data="1">Preencha os dados</span>
           </div>
        </div>
        <div class="group-input">
          <div class="input-alert">
            <input type="text" name="telefone" placeholder="Telefone">
            <span id="2">Preencha os dados</span>
          </div>
          <div class="input-alert">
            <input type="text" name="celular" placeholder="Celular">
            <span id="3">Preencha os dados</span>
          </div>
        </div>

        <h1>Dados do Imóvel</h1>
        <div class="group-input">
          <div class="input-alert">
             <select class="select-i" name="preferencia" value="preferencia">
                <option value="">Selecione...</option>
                <option value="Locacão">Locação</option>
                <option value="Venda">Venda</option>
             </select>
             <span id="4">Preencha os dados</span>
            </div>
            <div class="input-alert">
              <input type="text" name="tipo_imovel" placeholder="Tipo de imóvel ex:(Casa, Apt, Terreno)">
              <span id="5">Preencha os dados</span>
            </div>
        </div>
        <div class="group-input">
            <div class="input-alert">
               <input type="text" name="cep" placeholder="Cep">
               <span id="6">Preencha os dados</span>
            </div>
            <div class="input-alert">
               <input type="text" name="end" placeholder="Endereço">
               <span id="7">Preencha os dados</span>
            </div>
        </div>

        <div class="group-input">
           <div class="input-alert">
              <input type="number" name="num" placeholder="Num">
              <span id="8">Preencha os dados</span>
           </div>
           <div class="input-alert">
              <input type="text" name="bairro" placeholder="Bairro">
              <span id="9">Preencha os dados</span>
            </div>
        </div>
        <div class="group-input">
           <div class="input-alert">
               <input type="text" name="cidade" placeholder="Cidade">
               <span id="10">Preencha os dados</span>
            </div>
            <div class="input-alert">
              <input type="text" name="estado" placeholder="Estado">
              <span id="11">Preencha os dados</span>
            </div>
        </div>
        <div class="group-input">
            <div class="align-i-5">
            <p>* Todos os campos são de preenchimento obrigatório</p>
            <span id="12">Aceite o contrato</span> 
            <div class="align-button-text-input">

              <div class="text-input-group group-input">
                  <input type="checkbox" name="norma" value="Contrato aceito">
                  <label>
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
<script src="<?= $base;?>/assets/js/alert-error-an.js"> </script>

<?php $render('footer');?>



