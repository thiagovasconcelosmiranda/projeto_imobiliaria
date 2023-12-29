<div class="group-contract">
    <form method="Post" action="<?=$base;?>/ksi/adm/create-contract-benefit" enctype="multipart/form-data">
        <div class="group-title">
            <h1>Upload Contrato do Beneficiario</h1>
            <p>Enviar o contrado pdf para o usuario</p>
            <div class="select-i-user">
                <div class="select-x">
                    <p>Proprietário:</p>
                    <select name="rent" id="40">
                        <option value="">Selecione o Beneficiario</option>
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
            </div>
        </div>
        <div class="upload-row upload">
            <div class="upload-col">
                <label for="contract-pdf">
                    <img src="<?= $base; ?>/assets/images/pdf.webp" alt="pdf">
                </label>
                <input id="contract-pdf" type="file" name="arquivo" onchange="previewPdf()">
                <span id="msg-45">Campos obrigatórios*</span>
            </div>
            <div class="upload-col">
                <button id="button-benefit" type="button">Adicionar</button>
            </div>
        </div>
    </form>
</div>
<div class="container-contract pdf" style="height: 300px;">
    <iframe width="100%" id="preview-pdf" src="" width="100%" height="100%">
    </iframe>

    <div>Visualizar arquivo</div>
</div>

<script src="<?= $base; ?>/assets/js/ksi-adm-auto-contract.js"></script>