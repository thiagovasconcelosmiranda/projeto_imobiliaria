<?php $render('ksi/header', ['page' => $page]); ?>
<div class="env-email-container">

    <?php if (!empty($newToken['token'])): ?>
        <?php if ($flash): ?>
            <div class="alert">
                <p>
                    <?= $flash; ?>
                </p>
            </div>
        <?php endif; ?>
        <form method="POST" action="<?= $base; ?>/ksi/alter_password">
            <div class="login-title">
                <h1>Acesse o KSI - Kurole Sistema Imobiliario</h1>
            </div>
            <div class="logo-image">
                <a href="<?=$base; ?>/">
                    <img src="<?=$base; ?>/assets/images/logo.png">
                </a>  
            </div>
            <div class="group-i">
                <input type="hidden" name="token" value="<?= $newToken['token'] ?>" />
                <input type="password" name="password" placeholder="Digite a nova senha" id="32" />
                <span id="msg-32">Campos obrigatório*</span>

                <input type="password" name="check-password" placeholder="Confirme sua senha" id="33" />
                <span id="msg-33">Campos obrigatório*</span>

                <button id="button-password" type="button">Enviar</button>
            </div>
        </form>
    <?php else: ?>
        <div class="alert-error-token">
            <p>Token incorreto ou ultrapassado</p>
        </div>
    <?php endif; ?>
</div>
<script src="<?= $base;?>/assets/js/ksi-adm-password-error.js"></script>
<script>
    var url = window.location.href;
    var parametrosDaUrl = url.split("?")[1];
    if (!parametrosDaUrl) {
        window.location = url + "?stop=yes";
    }
</script>