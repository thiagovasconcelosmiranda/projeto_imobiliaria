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
                    <?php foreach ($favorites as $item):
                        $t = explode('/', $item['tipo']);
                        ?>
                        <div class="cardTwo">
                            <div class="card-img">
                                <img
                                    src="<?= $base; ?>/assets/media/photos_immobile/<?= $item['imovel_id']; ?>/<?= $item['foto1']; ?>">
                            </div>
                            <div class="group-text">
                                <div class="group-card-title">
                                    <h4>
                                        <?= strtoupper($t[0]) ?> -
                                        <?= strtoupper($t[1]) ?>
                                    </h4>
                                </div>
                                <p>Bairro:
                                    <?= $item['bairro']; ?>
                                </p>
                                <p>Cidade:
                                    <?= $item['cidade']; ?>
                                </p>
                                <p>
                                    <strong>
                                        <?php if (!empty($item['descricao'])): ?>
                                            <?=$item['descricao'];?>
                                        <?php endif; ?>
                                    </strong> ,<br/><br/>
                                    <?php if ($item['qtd_quarto'] > 0): ?>
                                        <strong><?=$item['qtd_quarto'];?></strong> quarto<?=($item['qtd_quarto'] > 1 ? 's':'')?>,
                                    <?php endif; ?>

                                    <?php if ($item['qtd_sala'] > 0): ?>
                                        <strong><?=$item['qtd_sala'];?></strong> sala<?=($item['qtd_sala'] > 1 ? 's' : '') ?>,
                                    <?php endif; ?>

                                    <?php if ($item['qtd_cozinha'] > 0): ?>
                                        <strong><?=$item['qtd_cozinha'];?></strong> cozinha<?=($item['qtd_cozinha'] > 1 ? 's' : '');?>,
                                    <?php endif; ?>

                                    <?php if ($item['qtd_varanda'] > 0): ?>
                                        <strong><?= $item['qtd_varanda'];?></strong> varanda<?=($item['qtd_varanda'] > 1 ? 's' : '')?>,
                                    <?php endif; ?>

                                    <?php if ($item['qtd_banheiro'] > 0): ?>
                                        <strong><?=$item['qtd_banheiro'];?></strong> banheiro<?=($item['qtd_banheiro'] > 1 ? 's' : '');?>
                                    <?php endif; ?>

                                    <?php if ($item['area_laser'] > 0): ?>
                                       <strong><?=$item['area_laser'];?></strong>e área de laser<?=($item['area_laser'] > 1 ? 's' : '');?>
                                    <?php endif; ?>
                                </p>
                            </div>
                            <div class="group-text">
                                <p>Aluguel:</p>
                                <h2> R$
                                    <?= $item['preco_aluguels']; ?>
                                </h2>
                                <p>Venda:</p>
                                <h2> R$
                                    <?= $item['preco_vendas']; ?>
                                </h2>
                                <a href="<?= $base; ?>/detalhe-imovel?id=<?= $item['imovel_id']; ?>">
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