<?php $url = "/ksi/adm/create-contract-tenant";?>

<div class="group-title">
    <h1>Anexar contrato para inquilino</h1>
    <p>Anexar contrato para inquilino </p>
</div>
<?php $render('ksi/contract-upload', ['url'=> $url, 'users' => $users]);?>
<script src="<?= $base; ?>/assets/js/ksi-adm-auto-contract.js"></script>