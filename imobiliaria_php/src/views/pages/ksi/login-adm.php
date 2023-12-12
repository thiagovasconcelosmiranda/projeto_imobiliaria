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
            <input type="text" name="cpf" placeholder="Digite seu CPF">
            <div class="link-password-i">
                <a href="<?= $base; ?>/">Esqueceu sua senha?</a>
            </div>
            <input type="password" name="password" placeholder="Digite sua senha">
            <button>Acessar</button>
        </div>
    </form>
</div>

<?php $render('ksi/footer'); ?>