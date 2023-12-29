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
     <h3>Anexar contrato</h3>
    <form method="post" id="form" action="<?=$base;?>/ksi/adm/create-contract-owner" enctype="multipart/form-data">
        <div class="select-user">
            <p>Pra quem você quer anexar?</p>
            <select name="arquivo">
                <option value="">Selecione o proprietário</option>
                <?php foreach ($users as $item): ?>
                    <option value="<?= $item['id']; ?>">
                        <?= $item['id']; ?> -
                        <?= $item['nome']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <span id="msg-42" >Campos obrigatório*</span>
        </div>
        <div class="upload-row upload">
            <div class="upload-col">
                <label for="contract-pdf">
                    <img src="<?= $base; ?>/assets/images/pdf.webp" alt="pdf">
                </label>
                <input id="contract-pdf" type="file" name="arquivo" onchange="previewPdf()">
                <span id="msg-43">Campos obrigatórios*</span>
            </div>
            <div class="upload-col">
                <button id="button-upload-owner" type="button">Adicionar</button>
            </div>
        </div>
    </form>
    <div class="container-contract pdf-owner" style="height: 300px;">
    <div>Visualizar arquivo</div>
    <iframe width="100%" id="preview-pdf" src="" width="100%" height="100%">
    </iframe>
</div>
</div>

<script src="<?= $base; ?>/assets/js/ksi-adm-auto-contract.js"></script>