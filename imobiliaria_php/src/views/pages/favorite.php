<?php

$render('header', [
    'aboutFlex' => $aboutFlex,
    'activeLink' => $activeLink,
    'favorites' => $favorites
]);

?>

<div class="page">
    <h1>Meus favoritos</h1>
    <div class="container-favorite">

        <div class="list-favorite">
            <?php if (!empty($favorites)): ?>
                <div class="cards">
                    <?php foreach ($favorites as $item):?>
                        <div class="cardTwo">
                            <div class="card-img">
                                <img
                                    src="<?= $base; ?>/assets/media/photos_immobile/<?= $item['imovel_id']; ?>/<?= $item['foto1']; ?>">
                            </div>
                            <div class="group-text">
                                <h4>
                                    <?= $item['tipo']; ?>
                                </h4>
                                <p>Bairro:
                                    <?= $item['bairro']; ?>
                                </p>
                                <p>Cidade:
                                    <?= $item['cidade']; ?>
                                </p>
                                <p>
                                    <strong>Ótima casa localizada </strong> ,
                                    1 quartos,
                                    2 sala,
                                    2 Cozinha,
                                    1 banheiros, e area de lazer.
                                </p>
                            </div>
                            <div class="group-text">
                                <p>Aluguel:</p>
                                <h2> R$
                                    <?= $item['preco_aluguels']; ?>
                                </h2>
                                <p>Venda:</p>
                                <h2> R$
                                    <?= $item['preco_aluguels']; ?>
                                </h2>
                                <a href="<?=$base;?>/detalhe-imovel?id=<?=$item['imovel_id'];?>">
                                   <button class="button-favorite">Ver detalhes</button>
                                </a>
                                
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <div class="favorite-text">
                <h3>Não há favoritos</h3>
                </div>
                
            <?php endif; ?>
        </div>

    </div>

    <?php $render('ksi/login-item'); ?>
    <?php $render('footer'); ?>