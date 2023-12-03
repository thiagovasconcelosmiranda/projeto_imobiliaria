<?php $render('ksi/header', ['page' => $page]);?>
<div class="env-email-container">
    <?php if($flash): ?>
        <div class="alert">
          <p><?=$flash;?></p>
        </div>
        <?php endif;?>
    <form method="POST" action="<?=$base;?>/ksi/env-email">
        <div class="login-title">
            <h1>Acesse o KSI - Kurole Sistema Imobiliario</h1>
        </div>
       <div class="logo-image">
          <img src="<?=$base;?>/assets/images/logo.png" alt="">
       </div>
       <div class="group-i">
          <input type="text" name="cpf" placeholder="Digite seu CPF">
          <button>Enviar</button>
          <a href="<?=$base;?>/">Lembrei minha senha, voltar e fazer login</a>
       </div>
    </form> 

</div>