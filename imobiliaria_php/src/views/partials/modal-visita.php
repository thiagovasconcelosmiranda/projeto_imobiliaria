<?php 
   $none = 'flex';
?>
<div class="modal-container" style="display:<?=($flash != ''? 'flex': 'none');?>">
    <div class="modal-row">
      <div class="close-model">
        <i class="fa-solid fa-xmark"></i>
      </div>
        <div class="title-top">
             <h5>Agende sua visita </h5>
        </div>
        <form  class="form" method="POST" action="<?=$base;?>/detalhe-imovel">
        <?php if($flash !=''): ?>
          <div class="info-flash">
             <h3><?=$flash?></h3>
          </div>
         <?php endif; ?>
        <input type="hidden" value="<?=$id;?>" name="id">
             <div class="group-input">
               <div class="input-i">
                   <input  type="text" id="0" name="nome" placeholder="Nome">
                   <span class="alert-error" id="msg-0">Campos obrigatório*</span>
               </div>
               <div class="input-i">
                 <select name="option" id="1">
                   <option value="">Selecione...</option>
                   <option value="Quero alugar">Quero alugar</option>
                   <option value="Quero alugar">Quero comprar</option>
                   <option value="Quero alugar">Quero alugar e comprar</option>
                 </select>
                 <span class="alert-error" id="msg-1">Campos obrigatório*</span>
               </div>
             </div>
             <div class="group-input margin-i-x-top">
                <div class="input-i">
                    <input type="email" name="email" id="2" placeholder="Email">
                    <span class="alert-error" id="msg-2">Campos obrigatório*</span>
                 </div>
                 <div class="input-i">
                    <input type="text" name="cel" id="3" placeholder="Celular">
                    <span class="alert-error" id="msg-3">Campos obrigatório*</span>
                 </div>
             </div>
             <div class="group-input margin-i-x-top">
                <div class="input-i">
                  <label >Data</label>
                   <input type="date" name="date" id="4">
                   <span class="alert-error" id="msg-4">Campos obrigatório*</span>
                 </div>
                 <div class="input-i">
                   <label >Hora</label>
                   <input type="time" name="time" id="5">
                   <span class="alert-error" id="msg-5">Campos obrigatório*</span>
                 </div>
             </div>
             <div class="group-i-5-row">
               <div class="contact-i">
                 <input type="checkbox" value="aceito" name="contract">
                 <label id="contract-error">Ao clicar no botão "Agendar visita",
                   afirmo que li e concordo com os <a href="">TERMOS DE USO</a> 
                   (atualizados dia 11/08/2021) e <a href="">POLITICA DE PRIVACIDADE </a>
                   (atualizados dia 11/08/2021).
                  </label>
               </div>
              <div class="group-i-button-whatzap">
                  <button class="button-i-schedule" type="button">Agende Visita</button> 
                  <div class="group-whatzap">
                    <i class="fa-brands fa-whatsapp"></i>
                    <a href="">Agende pelo whatzap</a>
                  </div>
              </div>
             </div>
        </form>
    </div>
</div>