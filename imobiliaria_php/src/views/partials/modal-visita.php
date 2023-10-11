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
                   <input type="text" name="nome" placeholder="Nome">
                   <span id="alert-error">Espaço em branco</span>
               </div>
               <div class="input-i">
                 <select name="option">
                   <option value="">Selecione...</option>
                   <option value="Quero alugar">Quero alugar</option>
                   <option value="Quero alugar">Quero comprar</option>
                   <option value="Quero alugar">Quero alugar e comprar</option>
                 </select>
                 <span>Espaço em branco</span>
               </div>
             </div>
             <div class="group-input margin-i-x-top">
                <div class="input-i">
                    <input type="email" name="email" placeholder="Email">
                    <span>Espaço em branco</span>
                 </div>
                 <div class="input-i">
                    <input type="text" name="cel" placeholder="Celular">
                    <span>Espaço em branco</span>
                 </div>
             </div>
             <div class="group-input margin-i-x-top">
                <div class="input-i">
                  <label >Data</label>
                   <input type="date" name="date">
                   <span>Espaço em branco</span>
                 </div>
                 <div class="input-i">
                   <label >Hora</label>
                   <input type="time" name="time">
                   <span>Espaço em branco</span>
                 </div>
             </div>
             <div class="group-i-5-row">
               <div class="contact-i">
                 <input type="checkbox" value="aceito" name="contract">
                 <label >Ao clicar no botão "Agendar visita",
                   afirmo que li e concordo com os <a href="">TERMOS DE USO</a> 
                   (atualizados dia 11/08/2021) e <a href="">POLITICA DE PRIVACIDADE </a>
                   (atualizados dia 11/08/2021).
                  </label>
               </div>
               <button class="button-i-schedule" type="submit">Agende Visita</button> 
               <div class="group-whatzap">
                   <i class="fa-brands fa-whatsapp"></i>
                   <a href="">Agende pelo whatzap</a>
               </div>
             </div>
        </form>
    </div>
</div>