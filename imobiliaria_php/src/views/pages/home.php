<?php $render('header', [
    'aboutFlex' => $aboutFlex,
    'activeLink' => $activeLink
]); ?>

<div class="container" data-url="<?= $base; ?>">
    <main>
        <div class="item-page-col gray-page">
            <h3>Imagens em destaque</h3>
            <div class="row-image"></div>
            <div class="row-image-load">
                <div class="load"></div>
                <div class="load"></div>
                <div class="load"></div>
            </div>
            <p>Venha conhecer os imoveis disponíveis</p>
        </div>
        <div class="item-page-col">
            <h3>Aluga Rápido Apartamentos</h3>
            <div class="cards" id="apartamento"></div>
            <div class="paginate" id="pag-1"></div>
        </div>
        <div class="item-page">
            <h1>O imóvel certo para cada tipo de pessoa :)</h1>
            <p>Qual o perfil de imóvel que está buscando hoje?</p>
            <div class="group-icons">
                <div class="icon-i" data-aos="fade-right" data-aos-delay="100">
                    <i class="fa-solid fa-house"></i>
                    <p>Um imovel só pra você</p>
                    <div class="hover-i">
                        <h3>Um imovel só pra vocês</h3>
                        <a href="#">
                            <p>Mais detalhes</p>
                        </a>
                    </div>
                </div>
                <div class="icon-i" data-aos="fade-right" data-aos-delay="250">
                    <i class="fa-solid fa-building"></i>
                    <p>Seu Apartamento dos seus sonhos</p>
                    <div class="hover-i">
                        <h3>Seu Apartamento dos seus sonhos</h3>
                        <a href="<?= $base; ?>/Impreendimentos">
                            <p>Mais detalhes</p>
                        </a>
                    </div>
                </div>
                <div class="icon-i" data-aos="fade-right" data-aos-delay="350">
                    <div class="hover-i">
                        <h3>Um local para seus negócios</h3>
                        <a href="#">
                            <p>Mais detalhes</p>
                        </a>
                    </div>
                    <i class="fa-solid fa-shop"></i>
                    <p>Um local para seus negócios</p>
                    <div class="hover-i">
                        <h3>Um local para seus negócios</h3>
                        <a href="#">
                            <p>Mais detalhes</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-public">
            <div class="slider">
                <div class="slides">
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <div class="slide first">
                        <img src="assets/images/5242866.jpg" alt="image1">
                    </div>
                    <div class="slide">
                        <img src="assets/images/5242876.jpg" alt="image2">
                    </div>
                    <div class="slide">
                        <img src="assets/images/5955801.jpg" alt="image3">
                    </div>
                    <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                    </div>
                </div>
                <div class="manual-navigation">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                </div>
            </div>
        </div>

        <section id="aluguel">
            <div class="item-page-col">
                <h3>Aluga Rápido Residências</h3>
                <div class="cards" id="casa"> </div>
                <div class="paginate" id="pag-2"> </div>
            </div>
        </section>
        <div class="item-page-col">
            <h3>Imóveis recém publicados</h3>
            <div class="cards" id="destaque"></div>
            <div class="paginate" id="pag-3"></div>
        </div>
        <div class="maps">
            <h1>Venha conhecer nossa matriz </h1>
            <iframe width="100%"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3693.461914161926!2d-49.93947432534808!3d-22.222546413774594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94bfd0b01bb96d21%3A0x948601b6e967f1a3!2sAv.%20das%20Esmeraldas%20-%20Jardim%20Tangara%2C%20Mar%C3%ADlia%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1691111732457!5m2!1spt-BR!2sbr"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="whatzapp" ata-aos="zoom-in-up" data-aos-delay="400">
            <a target="_blank"
                href="https://api.whatsapp.com/send?phone=551100000000&text=Quero%20entrar%20em%20contato">
                <img src="assets/images/whatssapp.svg" alt="Botão whatssapp">
                <span class="tooltip-text">Whatzapp flutuante</span>
            </a>
        </div>
    </main>
    <?php $render('ksi/login-item'); ?>
    <script type="text/javascript" src="<?= $base; ?>/assets/js/image-sliders.js"></script>
    <?php $render('footer'); ?>
</div>