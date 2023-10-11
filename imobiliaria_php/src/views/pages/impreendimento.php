<?php $render('header', [$aboutFlex=>$aboutFlex]); ?>
<?php $render('login-item');?>
<div class="page">
   <h1>Confira nossos emprendedorismos</h1>
   <div class="inputs-row">
     <form action="" class="form">
        <div class="group-i">
         <div class="align-i-10" >
            <label>Nome Lançamento</label>
            <input type="text" name="lancamento" placeholder="Ex: edicifio Esmeralda">
         </div>
        </div>
        <div class="group-i">
          <div class="align-i-10" >
             <label>Qual cidade?</label>
             <select type="text" name="cidade">
               <option value="">selecione</option>
               <option value="Marília">Marilia-SP</option>
               <option value="Bauru">Bauru-SP</option>
           </select>
         </div>
        </div>
        <div class="group-i">
          <div class="align-i-10" >
            <label>Qual o tipo?</label>
            <select type="text" name="tipo">
              <option value="">selecione</option>
              <option value="residencial/Apartamento">Edificio de Apartamento</option>
              <option value="residencial/Casa">Casa</option>
            </select>
           </div>
        </div>
        <div class="group-i">
          <div class="align-i-10">
            <label>Qual status?</label>
            <select type="text" name="status">
              <option value="s">Selecione</option>
              <option value="Pronto para Morar">Pronto para Morar</option>
              <option value="Em construção">Em construção</option>
            </select>
           </div>
          </div>
        <div class="group-i">
        <div class="align-i-10">
          <label>Qual a construtora?</label>
          <select type="text" name="construtora">
            <option value="">Selecione</option>
            <option value="Grupo Paecambu">Grupo Paecambu</option>
          </select>
         </div>
        </div>
     </form>
    <div class="line"></div>
      <div class="search-cards"> <div>
   </div>
</div>

<?php $render('footer'); ?>

