<?php $render('ksi/header', ['page' => $page]);?>
<div class="env-email-container">
    <?php if($flash): ?>
        <div class="alert" style="background-color: 
            <?=($flash == 'Foi enviado um link no E-mail!'? 'green' : 'red');?>;">
          <p><?=$flash;?></p>
        </div>
        <?php endif;?>
    <form method="POST" action="<?=$base;?>/ksi/env-email">
        <div class="login-title">
            <h1>Acesse o KSI - Kurole Sistema Imobiliario</h1>
        </div>
       <div class="logo-image">
        <a href="<?= $base; ?>/">
          <img src="<?=$base;?>/assets/images/logo.png">
          </a>
       </div>
       <div class="group-i">
          <input type="text" name="cpf" id="env-cpf" placeholder="Digite seu CPF">
          <button>Enviar</button>
          <a href="<?=$base;?>/">Lembrei minha senha, voltar e fazer login</a>
       </div>
    </form> 
</div>
<?php $render('ksi/footer'); ?>
<script> $("#env-cpf").mask("999.999.999-99");</script>


