<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

<div class="container-photo">
    <div class="carousel">
        <div class="carousel-close">
            <i class="fa-solid fa-xmark"></i>
        </div>

        <!--images-->
        <div class="slider-wrapper">

            <button id="prev-slide" class="slider-button material-symbols-outlined">chevron_left</button>
            <div class="image-list">
                <?php if (!empty($imovel['foto1'])): ?>
                <img class="image-i" src="<?= $base; ?>/assets/images/<?= $imovel['id']; ?>/<?= $imovel['foto1']; ?>"
                    alt="img-1">
                <?php endif; ?>
                <?php if (!empty($imovel['foto2'])): ?>
                <img class="image-i" src="<?= $base; ?>/assets/images/<?= $imovel['id']; ?>/<?= $imovel['foto2']; ?>"
                    alt="img-2">
                <?php endif; ?>
                <?php if (!empty($imovel['foto3'])): ?>
                <img class="image-i" src="<?= $base; ?>/assets/images/<?= $imovel['id']; ?>/<?= $imovel['foto3']; ?>"
                    alt="img-3">
                <?php endif; ?>
                <?php if (!empty($imovel['foto4'])): ?>
                <img class="image-i" src="<?= $base; ?>/assets/images/<?= $imovel['id']; ?>/<?= $imovel['foto4']; ?>"
                    alt="img-4">
                <?php endif; ?>
                <?php if (!empty($imovel['foto5'])): ?>
                <img class="image-i" src="<?= $base; ?>/assets/images/<?= $imovel['id']; ?>/<?= $imovel['foto5']; ?>"
                    alt="img-5">
                <?php endif; ?>
            </div>
            <button id="next-slide" class="slider-button material-symbols-outlined">chevron_right</button>

        </div>
        <div class="slider-scrollbar">
            <div class="scrollbar-track">
                <div class="scrollbar-thumb">

                </div>
            </div>
        </div>
    </div>
</div>