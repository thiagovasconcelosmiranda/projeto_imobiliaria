<div class="group-contract">
    <div class="group-title">
        <h1>Contrato do Fiador</h1>
        <p>Contrato do Fiador</p>
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
    <div class="button-contract">
        <button id="auto-fill-contract-guarantor">Auto preencher</button>
    </div>
    <div class="container-contract guarantor"></div>
</div>

<script src="<?= $base; ?>/assets/js/ksi-adm-auto-contract.js"></script>