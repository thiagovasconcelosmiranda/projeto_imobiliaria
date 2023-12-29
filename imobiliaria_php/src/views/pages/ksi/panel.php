
<div class="panel-row container">
   <?php if ($flash): ?>
      <div class="panel-alert">
         <p style="background: <?= ($flash == 'Alterado com sucesso' ? 'rgb(116, 168, 116)' : ' rgb(238, 109, 109)') ?>;">
            <?= $flash; ?>
         </p>
      </div>
   <?php endif; ?>
   <div class="panel-title">
      <h1>Início</h1>
   </div>
    
   <?php if ($infoUser->administrador): ?>
      <div class="button-replacement-panel-client">
         <a href="<?= $base; ?>/ksi/adm/area-adm">
            Modo colaborador
            <i class="fa-solid fa-right-to-bracket"></i>
         </a>
      </div>
   <?php endif; ?>

   <div class="panel-description ">
      <h3>Seja bem vindo ao painel da Imobiliaria Estilo</h3>
   </div>
</div>