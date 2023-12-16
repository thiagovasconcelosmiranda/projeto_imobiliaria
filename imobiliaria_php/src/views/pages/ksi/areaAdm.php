<?php $nome = (explode(' ', $infUser->nome)); ?>
<?php $render('ksi/header', [
   'nome' => $nome,
   'page' => $page
]);
?>

<div class="align-i-row">
   <?php $render('ksi/adm-aside', ['infUser' => $infUser]); ?>
   <main id="refresh-adm"></main>
</div>
<?php $render('ksi/footer'); ?>