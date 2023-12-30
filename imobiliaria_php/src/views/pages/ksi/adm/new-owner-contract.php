<?php $url = "/ksi/adm/create-contract-owner";  ?>
<div class="group-contract">
    <div class="group-title">
        <h1>Gerar contrato do proprietário</h1>
        <p>Gerar contrato do proprietário</p>

        <div class="group-button-contract">
            <button class="activeButton" id="view-contract-rent">Gerar Contrato de Aluguel</button>
            <button id="view-contract-sale">Gerar Contrato de Venda</button>
        </div>

        <div class="select-i-user">
            <div class="select-x">
                <p>Proprietário:</p>
                <select name="rent" id="40">
                    <option value="">Selecione o proprietario</option>
                    <?php foreach ($users as $item): ?>
                        <option value="<?= $item['id']; ?>">
                            <?= $item['id']; ?> -
                            <?= $item['nome']; ?>
                        </option>
                    <?php endforeach; ?>
                    <span id="msg-40">Campos obrigatório*</span>
                </select>
                <span id="msg-40">Campos obrigatório*</span>
            </div>
            <div class="select-x">
                <p>Inquilino:</p>
                <select name="sale" id="41">
                    <option value="">Selecione o Inquilino</option>
                    <?php foreach ($users as $item): ?>
                        <option value="<?= $item['id']; ?>">
                            <?= $item['id']; ?> -
                            <?= $item['nome']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <span id="msg-41">Campos obrigatório*</span>
            </div>
        </div>
    </div>
    <?php $render('/ksi/contract-rent-owner'); ?>
    <?php $render('/ksi/contract-sale-owner'); ?>
</div>
<?php $render('ksi/contract-upload', ['url' => $url, 'users' => $users]);?>
<script src="<?= $base; ?>/assets/js/ksi-adm-auto-contract.js"></script>