
<div class="group-upload-contract">
    <h3>Anexar contrato</h3>
    <form method="post" id="form" action="<?=$base;?><?=$url?>" enctype="multipart/form-data">
    <div class="select-user">
            <p>Pra quem você quer anexar?</p>
            <select name="id-user">
                <option value="">Selecione o proprietário</option>
                <?php foreach ($users as $item): ?>
                    <option value="<?= $item['id']; ?>">
                        <?= $item['id']; ?> -
                        <?= $item['nome']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <span id="msg-42">Campos obrigatório*</span>
        </div>
        <div class="upload-row upload">
            <div class="upload-col">
                <label for="contract-pdf">
                    <i class="fa-solid fa-file-pdf"></i>
                    <p id="descrition-pdf">Clique aqui!</p>
                </label>
                <input id="contract-pdf" type="file" name="arquivo" onchange="previewPdf()">
                <span id="msg-43">Campos obrigatórios*</span>
            </div>
            <div class="upload-col">
                <button id="button-upload" type="button">Adicionar</button>
            </div>
        </div>
   </form>
   <div class="container-contract pdf-owner" style="height: 300px;">
        <div>Visualizar arquivo</div>
        <iframe width="100%" id="preview-pdf-contract" src="" width="100%" height="100%">teste</iframe>
    </div>
</div>