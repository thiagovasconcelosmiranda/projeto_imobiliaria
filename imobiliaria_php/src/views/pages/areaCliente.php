<?php
$nome = (explode(' ', $infUser->nome));
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $base; ?>/assets/css/styles-ksis.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>KSI - Kurole Sitema imobiliario</title>
</head>

<body>
    <header>
        <nav class="nav-user">
            <ul>
                <li><a>Ola,
                        <?= $nome[0]; ?>
                    </a></li>
                <li>
                    <div class="nav-icon">
                        <i class="fa-solid fa-user"></i>
                        <i class="fa-solid fa-caret-down"></i>
                        <div class="modal-option">
                            <p id="user"><a>Dados do usuário</a></p>
                            <p id="information"><a>Informações</a></p>
                            <a href="<?= $base; ?>/logout">Sair</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="menuMobile">
                        <div class="line_mobile"></div>
                        <div class="line_mobile"></div>
                        <div class="line_mobile"></div>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
    <div class="align-i-row">
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
                            <button id="button-alter" type="button">Alterar meus dados</button>
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
                                    <p>Informe (IR)</p>
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
        <main id="refresh" data-url="<?= $base; ?>"></main>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" type="text/javascript"></script>
    <script src="<?= $base; ?>/assets/js/ksi-user.js"></script>
</body>

</html>