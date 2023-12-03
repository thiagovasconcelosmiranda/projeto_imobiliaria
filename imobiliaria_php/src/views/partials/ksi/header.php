<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $base; ?>/assets/css/styles-ksi.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>KSI - Kurole Sitema imobiliario</title>
</head>

<body>
    <header>
        <?php if($page == ""):?>
        <nav class="nav-user">
            <p class="logo-p">KSI Kurole Sistema Imobiliaria</p>
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
                            <a href="<?= $base; ?>/ksi/logout">Sair</a>
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
        <?php endif;?>
    </header>