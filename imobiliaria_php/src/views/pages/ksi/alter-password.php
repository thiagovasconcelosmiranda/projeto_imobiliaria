<?php $render('ksi/header', ['page' => $page]); ?>
<div class="env-email-container">
    <?php if (!empty($newToken)): ?>
        <?php if ($flash): ?>
            <div class="alert">
                <p>
                    <?= $flash; ?>
                </p>
            </div>
        <?php endif; ?>
        <form method="POST" action="<?= $base; ?>/ksi/alter_password/<?= $newToken; ?>">
            <div class="login-title">
                <h1>Acesse o KSI - Kurole Sistema Imobiliario</h1>
            </div>
            <div class="logo-image">
                <img src="<?= $base; ?>/assets/images/logo.png" alt="">
            </div>
            <div class="group-i">
                <input type="password" name="password" placeholder="Digite a nova senha">
                <input type="password" name="check-password" placeholder="Confirme sua senha">
                <button>Enviar</button>
            </div>
        </form>
    <?php else: ?>
        <div class="alert-error-token">
            <p>Token incorreto ou ultrapassado</p>
        </div>
    <?php endif; ?>
</div>