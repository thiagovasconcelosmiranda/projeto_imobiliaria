<?php $url = "/ksi/adm/create-contract-benefit";?>
<div class="group-title">
    <h1>Anexar contrato para benificiario</h1>
    <p>Anexar contrato para benificiario</p>
</div>
<?php $render('ksi/contract-upload', ['url'=> $url, 'users' => $users]);?>
<script src="<?=$base;?>/assets/js/ksi-adm-auto-contract.js"></script>