
<div class=" user-alter">
    <h1>Novo Usuário</h1>
    <form method="POST" action="<?=$base;?>/ksi/adm/add-immobile" enctype="multipart/form-data">
        <div class="user-group-title">
            <i class="fa-solid fa-pencil"></i>
            <p>Alteração do cadastro</p>
        </div>
        <div class="row-upload">
            <div class="col-group-upload">
                <h1>Foto</h1>
                <span id="error-0">Campos obrigatórios*</span>
                <img class="preview"src="<?= $base; ?>/assets/images/user.png" alt="user">
            </div>
            <div class="col-group-upload">
                <input id="upload" name="photo" type="file" onchange="preview()">
                <label for="upload">
                    <div class="button">
                        Selecionar
                    </div>
                </label>
            </div>
        </div>
        <div class="group-row-input">
            <div class="col-input-x">
                <h1>Dados Pessoais:</h1>
                <div class="group-input">
                    <label>Nome Completo:</label>
                    <input type="text" name="nome" id="error-1">
                    <span id="msg-1">Campos Obrigatórios*</span>

                    <label>CPF</label>
                    <input type="text" name="cpf"  autocomplete="off" id="error-2">
                    <span id="msg-2">Campos Obrigatórios*</span>
                </div>
            </div>
            <div class="col-input-x">
                <h1>Contato E-mail:</h1>
                <div class="group-input">
                    <label>Novo E-mail:</label>
                    <input type="text" name="new_email" id="error-3">
                    <span id="msg-3" n>Campos Obrigatórios*</span>

                    <label>Confirmar E-mail:</label>
                    <input type="email" name="check_email" id="error-4">
                    <span id="msg-4">Campos Obrigatórios*</span>
                </div>
            </div>
        </div>
        <div class="group-row-input" style="align-items: center;">
            <div class="col-input-x">
                <h1>Nova senha Senha:</h1>
                <div class="group-input">
                    <label>Nova Senha:</label>
                    <input type="password" name="new_password" id="error-5">
                    <span id="msg-5">Campos Obrigatórios*</span>

                    <label>Confirmação de senha:</label>
                    <input type="password" name="check_password" autocomplete="off" id="error-6">
                    <span id="msg-6">Campos Obrigatórios*</span>
                </div>
            </div>
            <div class="col-input-x">
                <h1>Telefones</h1>
                <div class="group-input">
                    <label>Comercial:</label>
                    <input type="text" name="tel_comercial"id="tel_comercial">

                    <label>Residencial:</label>
                    <input type="text" name="tel_residencial" id="tel_residencial">

                    <label>Celular:</label>
                    <input type="text" name="celular" id="error-9">
                    <span id="msg-9">Campos Obrigatórios*</span>
                </div>
            </div>
        </div>
        <div class="group-row-input">
            <div class="col-input-x">
                <h1>Endereço:</h1>
                <div class="group-input ">
                    <label>Cep:</label>
                    <input type="text" name="cep" id="error-10">
                    <span id="msg-10">Campos Obrigatórios*</span>

                    <label>Cidade:</label>
                    <input type="text" name="cidade" id="error-11">
                    <span id="msg-11">Campos Obrigatórios*</span>

                    <label>Estado:</label>
                    <input type="test" name="uf" id="error-12">
                    <span id="msg-12">Campos Obrigatórios*</span>

                    <label>Bairro:</label>
                    <input type="test" name="bairro" id="error-13">
                    <span id="msg-13">Campos Obrigatórios*</span>

                    <label>Endereço:</label>
                    <input type="text" name="end" id="error-14">
                    <span id="msg-14">Campos Obrigatórios*</span>

                    <label>Numero:</label>
                    <input type="number" name="num" id="error-15">
                    <span id="msg-15">Campos Obrigatórios*</span>
                </div>
            </div>
            <div class="col-input-x">
                <h1>Endereço Comercial</h1>
                <div class="group-input ">
                    <label>Cep:</label>
                    <input type="text" name="cep_comercial" id="cep_comercial">

                    <label>Cidade:</label>
                    <input type="text" name="cidade_comercial">

                    <label>Estado:</label>
                    <input type="test" name="bairro_comercial">

                    <label>Bairro:</label>
                    <input type="test" name="uf_comercial">

                    <label>Endereço:</label>
                    <input type="text" name="end_comercial">

                    <label>Numero:</label>
                    <input type="number" name="num_comercial">
                </div>
            </div>
        </div>
        <div class="group-row-input">
            <div class="col-input-x">
                <button id="button-add-user" type="button">Cadastrar</button>
            </div>
        </div>
    </form>
</div>
<script src="<?=$base;?>/assets/js/ksi-input-mask.js"></script>
<script src="<?=$base;?>/assets/js/ksi-add-user-error.js"></script>
<script src="<?= $base;?>/assets/js/ksi-user-alt.js" type="text/javascript"></script>
<script src="<?= $base;?>/assets/js/api-cep.js" type="text/javascript"></script>