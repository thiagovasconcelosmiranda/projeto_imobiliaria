<?php ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="<?= $base; ?>/assets/images/logo.png" />
    <link rel="stylesheet" href="<?= $base; ?>/assets/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cinzel&family=Merriweather:wght@300&family=Open+Sans:wght@300&family=Sora:wght@200;300;500;600&family=Tektur:wght@500;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src=" https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <title>Imobiliaria</title>
</head>

<body onload="loading()">
    <?php if (isset($_GET['login'])) { ?>
    <?php } ?>
    <div class="box-load">
        <div class="pre">
            <img src="<?= $base; ?>/assets//images/progress-icon-gif-1.jpg" alt="loading">
        </div>
    </div>
    <div class="content" data="<?= $base; ?>"></div>
    <nav class="navbar">
        <input type="checkbox" id="option">
        <label for="option" class="menu-mobile">
            <span></span>
            <span></span>
            <span></span>
        </label>
        <a href="<?= $base; ?>">
            <img src="<?= $base; ?>/assets/images/logo.png" alt="Logotipo">
        </a>
        <ul class="ul" id="option-ul">
            <div class="border-option">
                <p>Seja bem vindo(a)</p>
            </div>
            <li class="<?= ($activeLink == 'impreendimentos' ? 'activelink' : '') ?>">
                <i class="fa-solid fa-building"></i>
                <a href="<?= $base; ?>/impreendimentos">Impreendimentos</a>
            </li>
            <li class="<?= ($activeLink == 'anuncio' ? 'activelink' : '') ?>">
                <i class="fa fa-bullhorn i" aria-hidden="true"></i>
                <a href="<?= $base; ?>/anuncio">Anúnciar</a>
            </li>
            <li>
                <i class="fa-solid fa-phone"></i>
                <a href="#">(14) 99708-7974</a>
            </li>
            <li>
                <i class="fa-solid fa-comments"></i>
                <a href="#">Fale conosco</a>
            </li>
            <li>
                <i class="fa-solid fa-user"></i>
                <a style="cursor: pointer;" class="area-client">Área do cliente</a>
            </li>
        </ul>
        <div class="aboud" style="display: <?= $aboutFlex; ?>;">
            <a href="<?= $base; ?>/sobre">
                <i class="fa-solid fa-house"></i>
                <p>Sobre a <strong>Imobiliária</strong></p>
            </a>
        </div>
    </nav>