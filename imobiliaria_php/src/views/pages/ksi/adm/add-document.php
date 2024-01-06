<div class="group-title">
    <h1>Adicionar Documento</h1>
    <p>Adicionar Documento</p>
</div>

<div class="container-document">
    <form method="post" action="<?=$base;?>/ksi/adm/add-document" enctype="multipart/form-data">
        <div class="document-row">
            <input type="hidden" value="<?=$imovel_id?>" name="imovel_id">
            <div class="document-group-input">
                <label>Categoria</label>
                <input type="text" name="categoria" id="60" >
                <span id="msg-60">Campos obrigatório*</span>
            </div>
            <div class="document-group-input">
                <label>tamanho</label>
                <input type="text" name="tamanho" id="61" >
                <span id="msg-61">Campos obrigatório*</span>
            </div>
        </div>
        <div class="document-row">
            <div class="document-group-input">
                <label>Descricao</label>
                <textarea name="descricao" id="62" cols="10" rows="10"></textarea>
                <span id="msg-62" >Campos obrigatório*</span>
            </div>
        </div>
        <div class="document-upload" >
            <div class="document-button">
                <label for="63">
                    <i class="fa-solid fa-file"></i>
                </label>
            </div>
            <input id="63" type="file" name="document" onchange="preloadDocument()">
            <p>Upload de documento</p>
        </div>
        <span id="msg-63" >Campos obrigatório*</span>

        <div class="document-preview">
            <p>visualizar Documento</p>
            <iframe width="100%" id="preview-document" src="" width="100%" height="100%">teste</iframe>
        </div>
        <div class="document-row">
            <div class="document-group-input">
                <button id="button-document" type="button">Enviar</button>
            </div>
        </div>
    </form>
</div>
<script src="<?= $base; ?>/assets/js/ksi-adm-document-preview.js"></script>
<script src="<?= $base; ?>/assets/js/ksi-adm-document-error.js"></script>