<?php $render('header', ['aboutFlex'=>$aboutFlex]); ?>

<div class="page-form">
    <div class="title-form">
        <h1>Quer anunciar o seu imóvel com o Estilo?</h1>
        <?php if(!empty($msg)):?>
        <div class="msg-alert">
           <span>Enviado com sucesso!</span>
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
    <form method="POST" action="<?=$base;?>/anuncio">
        <h1>Meus dados</h1>
        <div class="group-input">
           <div class="input-alert">
             <input type="text"  name="name" placeholder="Nome">
             <span id="0">Preencha os dados</span>
           </div>
           <div class="input-alert">
             <input type="email"  name="email" placeholder="Email">
             <span id="1">Preencha os dados</span>
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
             <select type="text" name="preferencia" value="preferencia" >
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

              <div class="text-input-group">
                  <input type="checkbox" name="norma" value="Contrato aceito">
                  <label>
                    Ao clicar no botão "Enviar", afirmo que li e concordo
                    com os<a href=""> TERMOS DE USO</a> (atualizados dia 13/08/2021) e <a href=""> POLITICA
                    DE PRIVACIDADE</a> (atualizados dia 13/08/2021).</p>
                  </label>
                </div>
                 <button type="button"  id="button">Enviar</button>
             </div>
             
           </div>
        </div>
    </form>
</div>
<?php $render('footer');
   echo $msg;
?>


