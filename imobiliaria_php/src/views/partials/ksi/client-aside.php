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
                    <button id="button-client-alt" type="button">Alterar meus dados</button>
                </div>
            </div>
        </div>
        <div class="user-button-option-group">
            <div class="group-accordion">
                <button class="accordion" id="start">
                    <i class="fa-solid fa-power-off"></i>
                    <p>Início</p>
                </button>
            </div>
            <div class="group-accordion">
                <button class="accordion" id="favorite">
                    <i class="fa-solid fa-heart"></i>
                    <p>Meus favoritos</p>
                </button>
            </div>
            <div class="group-accordion">
                <button class="accordion" id="button-1">
                    <i class="fa-solid fa-user"></i>
                    <p>Proprietário</p>
                </button>
                <div class="animation-accordion">
                    <div class="panel" id="panel-1">
                        <div class="user-i-option" id="contract">
                            <i class="fa-solid fa-user"></i>
                            <p>Meus contratos</p>
                        </div>

                        <div class="user-i-option" id="imovel">
                            <i class="fa-solid fa-user"></i>
                            <p>Meus Imóveis</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="group-accordion">
                <button class="accordion" id="button-2">
                    <i class="fa-solid fa-user"></i>
                    <p>Locatário</p>
                </button>
                <div class="animation-accordion">
                    <div class="panel" id="panel-2">
                        <div class="user-i-option" id="contract-2">
                            <i class="fa-solid fa-user"></i>
                            <p>Meus contratos</p>
                        </div>

                        <div class="user-i-option">
                            <i class="fa-solid fa-user" id="ir"></i>
                            <a target="_blank"
                                href="https://www.gov.br/receitafederal/pt-br/assuntos/meu-imposto-de-renda">
                                <p>Informe (IR)</p>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="group-accordion">
                <button class="accordion" id="button-3">
                    <i class="fa-solid fa-user"></i>
                    <p>Beneficiario</p>
                </button>
                <div class="animation-accordion">
                    <div class="panel" id="panel-3">
                        <div class="user-i-option" id="contract-3">
                            <i class="fa-solid fa-user"></i>
                            <p>Meus contratos</p>
                        </div>
                        <div class="user-i-option">
                            <i class="fa-solid fa-user" id="cont"></i>
                            <p>Prestação de contas</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="group-accordion">
                <button class="accordion" id="button-4">
                    <i class="fa-solid fa-user"></i>
                    <p>Fiador</p>
                </button>
                <div class="animation-accordion">
                    <div class="panel" id="panel-4">
                        <div class="user-i-option" id="fiador">
                            <i class="fa-solid fa-user"></i>
                            <p>Meus contratos</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</aside>