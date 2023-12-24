<aside>
    <div class="aside-group">
        <div class="col-user">
            <div class="content-user">
                <div class="logo-image">
                    <img src="<?= $base; ?>/assets/images/logo.png" alt="Logotipo">
                </div>
                <div class="info-user">
                    <div class="image-user">
                        <?php if (!empty($infUser->photo)): ?>
                            <img src="<?= $base; ?>/assets/media/user/<?= $infUser->id ?>/<?= $infUser->photo ?>">
                        <?php else: ?>
                            <img src="<?= $base; ?>/assets/images/user.png">
                        <?php endif; ?>
                    </div>
                    <button id="button-adm-alt-user" type="button">Alterar meus dados</button>
                </div>
            </div>
        </div>
        <div class="user-button-option-group adm">
            <div class="group-accordion">
                <button class="accordion" id="start-adm">
                    <i class="fa-solid fa-power-off"></i>
                    <p>Início</p>
                </button>
            </div>
            <div class="group-accordion">
                <button class="accordion" id="button-1">
                    <i class="fa-solid fa-user"></i>
                    <p>Adicionar Usuario</p>
                </button>
                <div class="animation-accordion">
                    <div class="panel adm" id="painel_adm-1">
                        <div class="user-i-option" id="novo_usuario">
                            <i class="fa-solid fa-user"></i>
                            <p>Novo Usuário</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="group-accordion">
                <button class="accordion" id="button-2">
                    <i class="fa-solid fa-house"></i>
                    <p>Adicionar Imóvel</p>
                </button>
                <div class="animation-accordion">
                    <div class="panel adm" id="painel_adm-2">
                        <div class="user-i-option" id="novo_imovel-2">
                            <i class="fa-solid fa-house"></i>
                            <p>Novo Imóvel</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="group-accordion">
                <button class="accordion" id="button-4">
                    <i class="fa-solid fa-file-contract"></i>
                    <p>Contrato proprietário</p>
                </button>
                <div class="animation-accordion">
                    <div class="panel adm" id="painel_adm-3">
                        <div class="user-i-option" id="contrato_prop-3">
                            <i class="fa-solid fa-file-contract"></i>
                            <p>Novo Contrato Proprietário</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="group-accordion">
                <button class="accordion" id="button-5">
                    <i class="fa-solid fa-file-contract"></i>
                    <p>Contrato Inquilino </p>
                </button>
                <div class="animation-accordion">
                    <div class="panel adm" id="painel_adm-5">
                        <div class="user-i-option" id="novo_contrato_Inq">
                            <i class="fa-solid fa-file-contract"></i>
                            <p>Novo Contrato Inquilino</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="group-accordion">
                <button class="accordion" id="button-4">
                    <i class="fa-solid fa-file-contract"></i>
                    <p>Contrato Beneficiario </p>
                </button>
                <div class="animation-accordion">
                    <div class="panel adm" id="painel_adm-4">
                        <div class="user-i-option" id="novo_contrato_benef">
                            <i class="fa-solid fa-file-contract"></i>
                            <p>Novo Contrato Beneficiario</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="group-accordion">
                <button class="accordion" id="button-5">
                    <i class="fa-solid fa-file-contract"></i>
                    <p>Contrato Fiador </p>
                </button>
                <div class="animation-accordion">
                    <div class="panel adm" id="painel_adm-5">
                        <div class="user-i-option" id="novo_contrato_fiad">
                            <i class="fa-solid fa-file-contract"></i>
                            <p>Novo Contrato Fiador</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="group-accordion">
                <button class="accordion" id="button-6">
                    <i class="fa-solid fa-phone"></i>
                    <p>Contato</p>
                </button>
                <div class="animation-accordion">
                    <div class="panel adm" id="painel_adm-6">
                        <div class="user-i-option" id="contato">
                            <i class="fa-solid fa-phone"></i>
                            <p>Reclamações ou sugestões</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</aside>