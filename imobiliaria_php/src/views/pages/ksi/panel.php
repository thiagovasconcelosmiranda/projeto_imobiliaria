<div class="panel-row container">
   <?php if ($flash): ?>
      <div class="panel-alert">
         <p style="background: <?=($flash == 'Alterado com sucesso'? 'rgb(116, 168, 116)': ' rgb(238, 109, 109)')?>;"><?= $flash; ?></p>
      </div>
   <?php endif; ?>
   <div class="panel-title">
      <h1>Início</h1>
   </div>
   <div class="panel-description ">
      <h3>Seja bem vindo ao painel da Imobiliaria Estilo</h3>
   </div>
</div>