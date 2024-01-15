<?php $render('header', [
  'aboutFlex'=>$aboutFlex,
  'activeLink' => $activeLink,
  'favorites' => $favorites
   ]
  ); ?>
<?php $render('ksi/login-item');?>
<div class="page">
   <h1>Confira nossos emprendedorismos</h1>
   <div class="inputs-row">
     <form class="form">
        <div class="group-i">
         <div class="align-i-10" >
            <label>Endereço</label>
            <input type="text" name="end" placeholder="Ex: edicifio Esmeralda">
         </div>
        </div>
        <div class="group-i">
          <div class="align-i-10">
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
              <option value="">Selecione</option>
              <option value="residencial/Apartamento">Edificio de Apartamento</option>
              <option value="residencial/Casa">Casa</option>
            </select>
           </div>
        </div>
        <div class="group-i">
          <div class="align-i-10">
            <label>Quala condicão?</label>
            <select type="text" name="condicao">
              <option value="">Selecione</option>
              <option value="Pronto pra morar">Pronto para Morar</option>
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
   </div>
    <div class="line"></div>
      <div class="search-cards"> <div>
   </div>
</div>

<?php $render('footer'); ?>

