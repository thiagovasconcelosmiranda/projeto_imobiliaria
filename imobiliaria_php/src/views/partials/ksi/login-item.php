<?php
$flash = '';
if (!empty($_SESSION['flash-i'])) {
  $flash = $_SESSION['flash-i'];
  $_SESSION['flash-i'] = '';
}
?>
<div class="container-login" style="display: <?=($flash ? 'flex' : 'none') ?>">
  <div class="modal-login">
    <h3>Bem vindo à Imobiliaria Estilo</h3>
    <div class="text-i">
      <div class="close">
        <i class="fa-solid fa-xmark"></i>
      </div>
      <p>Preencha os campos abaixo com as informações recebidas via e-mail e
        clique em "Acessar área do cliente" para visualizar seus extratos ou boletos</p>
    </div>
    <form method="POST" action="<?=$base; ?>/ksi/login">
      <!---->
      <?php if ($flash != ''): ?>
        <div class="flash-login" style="color: green;">
          <?= $flash; ?>
        </div>
      <?php endif; ?>

      <div class="group-input">
        <div class="input">
          <label>CPF/CNPJ*</label>
          <input id="error-input-1" type="text" name="cpf" />
          <strong class="msg-error-1" id="msg-error-1"></strong>
          <a href="<?=$base;?>/ksi/env-email">
            <p>Esqueceu sua senha?</p>
          </a>
        </div>
      </div>
      <div class="group-input">
        <div class="group-input">
          <div class="input">
            <label>Senha*</label>
            <input id="error-input-2"  type="password" name="password" />
            <strong class="msg-error-2" id="msg-error-2"></strong>
          </div>
        </div>
      </div>
      <div class="group-input">
        <div class="input">
          <div class="group-i-contract">
            <p id="contract"><input type="checkbox" name="contrato_politica"  value="Concordo com os termos da política"/> Ao clicar no botão "Acessar a área do cliente",
              afirmo que li e
              concordo com os TERMOS DE USO (atualizados dia 11/08/2021) e POLITICA DE PRIVACIDADE
              (atualizados dia 11/08/2021).</p>
          </div>
        </div>
        <div class="group-input">
          <div class="input">
            <h3></h3>
            <p></p>
          </div>
        </div>
      </div>
      <div class="group-input">
        <div class="input">
          <input class="input_active" type="button" value="Acessar área do cliente" />
        </div>
      </div>
    </form>
    <div class="align-l">
      <div class="linha-i"></div>
      <h3>Caso não tenha as informações de acesso</h3>
      <a href="#">
        <p>Entre em contato conosco</p>
      </a>
    </div>
  </div>
</div>
