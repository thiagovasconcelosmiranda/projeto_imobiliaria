<?php $render('ksi/header', ['page' => $page]); ?>
<div class="env-email-container">
    <?php if ($flash): ?>
        <div class="alert">
            <p>
                <?= $flash; ?>
            </p>
        </div>
    <?php endif; ?>
    <form method="POST" action="<?= $base; ?>/ksi/adm/login-adm-access">
        <div class="login-title">
            <h1>Acesse o KSI - Kurole Sistema Imobiliario</h1>
        </div>
        <div class="logo-image">
            <a href="<?=$base;?>">
                <img src="<?= $base; ?>/assets/images/logo.png" alt="">
            </a>
            <p> Área do Colaborador</p>
        </div>
        <div class="group-i">
            <input type="text" name="cpf" placeholder="Digite seu CPF" id="30">
            <span id="msg-30">Campos obrigatório*</span>
            <div class="link-password-i">
                <a href="<?=$base;?>/ksi/env-email">Esqueceu sua senha?</a>
            </div>
            <input type="password" name="password" placeholder="Digite sua senha" id="31">
            <span id="msg-31">Campos obrigatório*</span>
            <button id="button-login-adm" type="button">Acessar</button>
        </div>
    </form>
</div>
<script src="<?=$base;?>/assets/js/ksi-adm-login-error.js"></script>
<?php $render('ksi/footer');?>
<script> $("#30").mask("999.999.999-99");</script>

