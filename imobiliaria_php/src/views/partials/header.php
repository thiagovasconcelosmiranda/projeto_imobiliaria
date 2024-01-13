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
    <script src="https://www.geradorcnpj.com/assets/js/jquery-1.2.6.pack.js" type="text/javascript"></script>
    <script src=" https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <title>Imobiliaria</title>
</head>

<body onload="loading()">
    <div class="box-load">
        <div class="pre">
            <img src="<?= $base; ?>/assets/images/progress-icon-gif-1.jpg" alt="loading">
        </div>
    </div>
    <div class="content" data="<?= $base; ?>"></div>
    <header>
        <nav class="navbar">
            <input type="checkbox" id="option">
            <label for="option" class="menu-mobile">
                <span></span>
                <span></span>
                <span></span>
            </label>
            <a href="<?= $base; ?>">
                <div class="logo-top">
                    <img src="<?= $base; ?>/assets/images/logo.png" alt="Logotipo">
                </div>
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
                    <a  target="_blank" href="https://api.whatsapp.com/send?phone=551100000000&text=Quero%20entrar%20em%20contato">(14) 99708-7974</a>
                  
                </li>
                <li class="<?= ($activeLink == 'favorite' ? 'activelink' : '') ?>">
                 <?php if(count($favorites) > 0):?>
                    <i class="fa-solid fa-heart"></i>
                    <div class="count-favorite"><p><?=count($favorites)?></p></div>
                    <?php else: ?>
                    <i class="fa-regular fa-heart"></i>
                    <?php endif;?>
                    <a href="<?=$base;?>/favorite">Favoritos</a>
                </li>
                <li>
                    <i class="fa-solid fa-user"></i>
                    <div class="group-area">
                        <p style="cursor: pointer;"> Área do cliente</p>
                        <i class="fa-solid fa-caret-down" id="area-client"></i>
                        <div class="modal-login-access">
                            <p id="client">Àrea Cliente</p>
                            <a href="<?= $base ?>/ksi/adm/login-adm">Area Colaborador</a>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="aboud" style="display: <?= $aboutFlex; ?>;">
                <a href="<?= $base; ?>/sobre">
                    <i class="fa-solid fa-house"></i>
                    <p>Sobre a <strong>Imobiliária</strong></p>
                </a>
            </div>
        </nav>
        <?php if ($activeLink == "home"): ?>
            <div class="images-top-group">
                <div class="top-image"></div>
            </div>
            <div class="img-header">
                <div class="dark-img">
                </div>
                <img id="slider">
                <div class="group-modal">
                    <div class="header-title-1">
                        <h1>Seja bem-vindo a Imobiliária Estilo</h1>
                        <p>Facilitado em adquirir sua casa dos sonhos </p>
                    </div>
                    <div class="header-title-2">
                        <h2>O que você está procurando?</h2>
                    </div>
                    <div class="painel">
                        <h5>Escola as opções de buscas</h5>
                        <form method="POST" action="<?= $base; ?>/busca-imovel">
                            <div class="painel-group">
                                <div class="button-i">
                                    <div class="respansive-button">
                                        <button onclick="butonClick('Preço de aluguels')" type="button">Alugar</button>
                                        <button onclick="butonClick('Preço da vendas')" type="button">Vender</button>
                                        <button id="impreendimento" class="button" type="button">Impreendimento</button>
                                        <button onclick="butonClick('Código')" class="button" type="button">Código</button>
                                    </div>
                                </div>
                                <div class="row-select-row-ref">
                                    <div class="group-ref-col">
                                        <p>Referência</p>
                                        <input type="text" name="ref">
                                    </div>
                                </div>
                                <div class="group-select-row">
                                    <div class="align-select">
                                        <div class="select-i-m" onclick="selectClick('Imóvel')">
                                            <p>Qual tipo de imóvel?</p>
                                            <i class="fa-solid fa-caret-down"></i>
                                        </div>
                                        <select name="regiao" onclick="selectClick('Região')">
                                            <option value="">Região</option>
                                            <option value="Zona Leste">Zona Leste</option>
                                            <option value="Zona Oeste">Zona Oeste</option>
                                            <option value="Zona Norte">Zona Norte</option>
                                            <option value="Zona Sul">Zona Sul</option>
                                        </select>
                                        <div class="select-i-m" onclick="selectClick('Bairro')">
                                            <p>Bairro</p>
                                            <i class="fa-solid fa-caret-down"></i>
                                        </div>
                                        <div class="select-i-m" onclick="selectClick('Edificio/Condominio')">
                                            <p>Edificio/Condominio</p>
                                            <i class="fa-solid fa-caret-down"></i>
                                        </div>
                                    </div>
                                    <div class="group-option-row">
                                        <div class="group-option-col">
                                            <p>Comercial</p>
                                            <div class="group-check">
                                                <input type="checkbox" value="comercial/casa" name="tipo/casa"
                                                    onclick="buttonRadio(0)">
                                                <label>Casa</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="comercial/Galpão/Barracão" name="tipo/galpão"
                                                    onclick="buttonRadio(1)">
                                                <label>Galpão/Barracão</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="comecial/Loja em shopping"
                                                    name="tipo/loja_shopping" onclick="buttonRadio(2)">
                                                <label>Loja em shopping</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="comercial/Loja" name="tipo/loja"
                                                    onclick="buttonRadio(3)">
                                                <label>Loja</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="comercial/Salão Varejo"
                                                    name="tipo/salao_varejo" onclick="buttonRadio(4)">
                                                <label>Salão Varejo</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="comercial/Sata de condominio"
                                                    name="tipo_edificio-apartamento" onclick="buttonRadio(5)">
                                                <label>Edificio/Apartamento</label>
                                            </div>
                                        </div>
                                        <div class="group-option-col">
                                            <p>Residêncial</p>
                                            <div class="group-check">
                                                <input type="checkbox" value="residencial/Apartamento"
                                                    name="tipo/apartamento" onclick="buttonRadio(6)">
                                                <label>Apartamento</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="residencial/Casa" name="tipo/casa"
                                                    onclick="buttonRadio(7)">
                                                <label>Casa</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="residencial/Casa condomínio"
                                                    name="tipo/condominio" onclick="buttonRadio(8)">
                                                <label>Casa condomínio</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="residencial/Chacará" name="tipo/chacara"
                                                    onclick="buttonRadio(9)">
                                                <label>Chacará</label>
                                            </div>
                                        </div>
                                        <div class="group-option-col">
                                            <p>Terreno</p>
                                            <div class="group-check">
                                                <input type="checkbox" value="terreno/Àrea" name="tipo/area"
                                                    onclick="buttonRadio(10)">
                                                <label>terreno/Àrea</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="terreno/Dentro do condomínio"
                                                    name="tipo/area_condominio" onclick="buttonRadio(11)">
                                                <label>Dentro do condomínio</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="terreno/Fora do condomínio"
                                                    name="tipo/fora_condominio" onclick="buttonRadio(12)">
                                                <label>Fora do condomínio</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="group-option-row-1">
                                        <div class="group-option-col">
                                            <p>Marília</p>
                                            <div class="group-check">
                                                <input type="checkbox" value="Centro" name="bairro"
                                                    onclick="buttonRadio(13)">
                                                <label>Centro</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Altos da Colina" name="bairro"
                                                    onclick="buttonRadio(14)">
                                                <label>Altos da Colina</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Salão de festas" name="bairro"
                                                    onclick="buttonRadio(15)">
                                                <label>Armando Mascaro</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Bassan" name="bairro"
                                                    onclick="buttonRadio(16)">
                                                <label>Bassan</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Bosque" name="bairro"
                                                    onclick="buttonRadio(17)">
                                                <label>Bosque</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Castelo Branco" name="castelo_branco"
                                                    onclick="buttonRadio(18)">
                                                <label>Castelo Branco</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Cavalieri 2" name="bairro"
                                                    onclick="buttonRadio(19)">
                                                <label>Cavalieri 2</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Cetro (Padre Nóbrega)" name="bairro"
                                                    onclick="buttonRadio(20)">
                                                <label>Cetro (Padre Nóbrega)</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Portaria" name="bairro"
                                                    onclick="buttonRadio(21)">
                                                <label>Portaria</label>
                                            </div>
                                        </div>
                                        <div class="group-option-col">
                                            <div class="group-check">
                                                <input type="checkbox" value="Altaneira" name="bairro"
                                                    onclick="buttonRadio(22)">
                                                <label>Altaneira</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Banzato" name="bairro"
                                                    onclick="buttonRadio(23)">
                                                <label>Banzato</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Betel" name="bairro"
                                                    onclick="buttonRadio(24)">
                                                <label>Betel</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Canaá" name="bairro"
                                                    onclick="buttonRadio(25)">
                                                <label>Canaá</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Santa Antonieta 2" name="bairro"
                                                    onclick="buttonRadio(26)">
                                                <label>Santa Antonieta 2</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Parque das Nações" name="bairro"
                                                    onclick="buttonRadio(27)">
                                                <label>Parque das Nações</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Jânio Quadro" name="bairro"
                                                    onclick="buttonRadio(28)">
                                                <label>Jânio Quadro</label>
                                            </div>
                                        </div>
                                        <div class="group-option-col">
                                            <div class="group-check">
                                                <input type="checkbox" value="César Almeida" name="bairro"
                                                    onclick="buttonRadio(29)">
                                                <label>César Almeida</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Social" name="social"
                                                    onclick="buttonRadio(30)">
                                                <label>Social</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="terreno/Fora do condomínio"
                                                    name="tipo/fora_condominio" onclick="buttonRadio(31)">
                                                <label>Fora do condomínio</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="group-option-row-3">
                                        <div class="group-option-col">
                                            <p>Marília</p>
                                            <div class="group-check">
                                                <input type="checkbox" value="Valle do Canaã" name="bairro"
                                                    onclick="buttonRadio(32)">
                                                <label>Valle do Canaã</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Paineiras Home Design" name="condominio"
                                                    onclick="buttonRadio(33)">
                                                <label>Paineiras Home Design</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Residencial Jd. Villandry" name="ends"
                                                    onclick="buttonRadio(34)">
                                                <label>Residencial Jd. Villandry</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Green Valley" name="condominio"
                                                    onclick="buttonRadio(35)">
                                                <label>Green Valley</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Condomínio Moradas Marília" name="condominio"
                                                    onclick="buttonRadio(36)">
                                                <label>Condomínio Moradas Marília</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Castelo Branco" name="ends"
                                                    onclick="buttonRadio(37)">
                                                <label>Castelo Branco</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Parque Casablanca" name="bairro"
                                                    onclick="buttonRadio(38)">
                                                <label>Parque Casablanca</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Cetro (Padre Nóbrega)" name="ends"
                                                    onclick="buttonRadio(39)">
                                                <label>Palazzo</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="AV Rio Branco" name="ends"
                                                    onclick="buttonRadio(40)">
                                                <label> AV Rio Branco</label>
                                            </div>
                                        </div>
                                        <div class="group-option-col">
                                            <div class="group-check">
                                                <input type="checkbox" value="Condomínio Village do Bosque"
                                                    name="condominio" onclick="buttonRadio(41)">
                                                <label>Condomínio Village do Bosque</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Villa Flora III" name="bairro"
                                                    onclick="buttonRadio(42)">
                                                <label>Villa Flora III</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Edificio Praça Marechal<" name="condominio"
                                                    onclick="buttonRadio(43)">
                                                <label>Edificio Praça Marechal</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Bassan" name="condominio"
                                                    onclick="buttonRadio(44)">
                                                <label>Edifício Módena</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Edifício Módena" name="ends"
                                                    onclick="buttonRadio(45)">
                                                <label>Residencial Reserva Palmital 1</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Terras da Fazenda" name="ends"
                                                    onclick="buttonRadio(46)">
                                                <label>Terras da Fazenda</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Cavalieri 2" name="ends"
                                                    onclick="buttonRadio(47)">
                                                <label>Cavalieri 2</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Cetro (Padre Nóbrega)" name="bairro"
                                                    onclick="buttonRadio(48)">
                                                <label>Cetro (Padre Nóbrega)</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Condomínio Santa Gertrudes" name="condominio"
                                                    onclick="buttonRadio(49)">
                                                <label>Condomínio Santa Gertrudes</label>
                                            </div>
                                        </div>
                                        <div class="group-option-col">
                                            <div class="group-check">
                                                <input type="checkbox" value="Edifício Atlanta" name="condominio"
                                                    onclick="buttonRadio(50)">
                                                <label>Edifício Atlanta</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="MN Concept" name="condominio"
                                                    onclick="buttonRadio(51)">
                                                <label>MN Concept</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Jd. Esmeralda" name="bairro"
                                                    onclick="buttonRadio(52)">
                                                <label>Jd. Esmeralda</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Praças Esmeraldas" name="condominio"
                                                    onclick="buttonRadio(53)">
                                                <label>Praças Esmeraldas</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Enseada" name="condominio"
                                                    onclick="buttonRadio(54)">
                                                <label>Enseada</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Verana Parque Alvorada" name="bairro"
                                                    onclick="buttonRadio(55)">
                                                <label>Verana Parque Alvorada</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Residencial Sol 2" name="bairro"
                                                    onclick="buttonRadio(56)">
                                                <label>Cavalieri 2</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Cavalieri 2" name="bairro"
                                                    onclick="buttonRadio(57)">
                                                <label>Residencial Sol 2</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Vitória" name="bairro"
                                                    onclick="buttonRadio(58)">
                                                <label>Vitória</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="align-select">
                                        <select id="preco" name="" onclick="selectClick('Preço')">
                                            <option id="title-option" value="5000"></option>
                                        </select>
                                        <select name="qtd_quarto" onclick="selectClick('Quartos')">
                                            <option value="">Quartos</option>
                                            <option value="1">1+</option>
                                            <option value="2">2+</option>
                                            <option value="3">3+</option>
                                            <option value="4">4+</option>
                                        </select>
                                        <select name="condicao" onclick="selectClick('Condiçoes')">
                                            <option value="">Condição</option>
                                            <option value="Pornto para morar">Pornto para morar</option>
                                            <option value="Em construção"> Em construção</option>
                                        </select>
                                        <div class="select-i-m" onclick="selectClick('Caracteristica')">
                                            <p>Caracteristica</p>
                                            <i class="fa-solid fa-caret-down"></i>
                                        </div>
                                    </div>
                                    <div class="group-option-row-2">
                                        <div class="group-option-col">
                                            <div class="group-check">
                                                <input type="checkbox" value="informações" name="outros"
                                                    onclick="buttonRadio(59)">
                                                <label>informações</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Academia" name="outros"
                                                    onclick="buttonRadio(60)">
                                                <label>Academia</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Food truck lounge" name="outros"
                                                    onclick="buttonRadio(61)">
                                                <label>Food truck lounge</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Salão de Festa" name="outros"
                                                    onclick="buttonRadio(62)">
                                                <label>Salão de Festa</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="churrasqueira eletrica" name="outros"
                                                    onclick="buttonRadio(63)">
                                                <label>churrasqueira eletrica</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="pcina quente" name="outros"
                                                    onclick="buttonRadio(64)">
                                                <label>pcina quente</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Piscina Aquecida" name="outros"
                                                    onclick="buttonRadio(65)">
                                                <label>Piscina Aquecida</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Cetro (Padre Nóbrega)" name="outros"
                                                    onclick="buttonRadio(66)">
                                                <label>Cetro (Padre Nóbrega)</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Banheira" name="outros"
                                                    onclick="buttonRadio(67)">
                                                <label>Banheira</label>
                                            </div>
                                        </div>
                                        <div class="group-option-col">
                                            <div class="group-check">
                                                <input type="checkbox" value="Quadra de Vôlei de areia" name="outros"
                                                    onclick="buttonRadio(68)">
                                                <label>Quadra de Vôlei de areia</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Torre(s)" name="outros"
                                                    onclick="buttonRadio(69)">
                                                <label>Torre(s)</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Piscina Aquecida" name="outros"
                                                    onclick="buttonRadio(70)">
                                                <label>Piscina Aquecida</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Quiosque" name="outros"
                                                    onclick="buttonRadio(71)">
                                                <label>Quiosque</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Elevador de Serviço" name="outros"
                                                    onclick="buttonRadio(72)">
                                                <label>Elevador de Serviço</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Parque das Nações" name="outros"
                                                    onclick="buttonRadio(73)">
                                                <label>Parque das Nações</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Jânio Quadro" name="outros"
                                                    onclick="buttonRadio(74)">
                                                <label>Jânio Quadro</label>
                                            </div>
                                        </div>
                                        <div class="group-option-col">
                                            <div class="group-check">
                                                <input type="checkbox" value="Elevador proprietários" name="outros"
                                                    onclick="buttonRadio(75)">
                                                <label>Elevador proprietários</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Coworking" name="outros"
                                                    onclick="buttonRadio(76)">
                                                <label>Coworking</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Musculação" name="outros"
                                                    onclick="buttonRadio(77)">
                                                <label>Musculação</label>
                                            </div>
                                            <div class="group-check">
                                                <input type="checkbox" value="Sala de jogos" name="outros"
                                                    onclick="buttonRadio(78)">
                                                <label>Sala de jogos</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-search">
                                        <ul></ul>
                                    </div>
                                </div>
                                <div class="button-search">
                                    <button id="clearSearch" type="button">Limpar Filtro</button>
                                    <button type="submit" class="active">Buscar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        <?php endif; ?>
    </header>