<?php
$nome = (explode(' ', $infUser->nome));
?>
   <?php $render('ksi/header', [
    'nome'=> $nome,
    'page'=> $page
    ]);
    ?>

    <div class="align-i-row">
    <?php $render('ksi/client-aside', ['infUser' => $infUser]);?>
        <main id="refreshClient" data-url="<?= $base;?>"></main>
    </div>
   <?php $render('ksi/footer');?>
