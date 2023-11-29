<div class="panel-row container">
   <div class="panel-title">
      <h1>Meus contratos</h1>
      <p>-
         <?= ucfirst($title); ?> /
         <?= ucfirst($descrition); ?>
      </p>
   </div>
   <div class="panel-description">
      <i class="fa-solid fa-address-book"></i>
      <h2>Você não é
         <?= $title ?> /
         <?= ucfirst($descrition); ?>
          <?php if(!empty($contratos)):?>
            há <?= count($contratos);?> contrato
          <?php else:?>
            em nenhum contrato
          <?php endif;?>
      </h2>
   </div>
   <?php if (!empty($contratos)): ?>
      <?php foreach ($contratos as $item): ?>
         <div id="pdf">
            <iframe width="100%"
               src="<?= $base; ?>/assets/media/contract_<?= $descrition; ?>/<?= $infoUser->id; ?>/<?= $item['arquivo']; ?>"
               width="600" height="780" style="border: none;"></iframe>
         </div>
      <?php endforeach; ?>
   <?php endif; ?>
</div>