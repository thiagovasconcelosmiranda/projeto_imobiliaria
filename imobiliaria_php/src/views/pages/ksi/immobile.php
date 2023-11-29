<div class="panel-row container">
    <div class="panel-title">
        <h1>Meus imoveis</h1>
    </div>
    <div class="count-immobile">
        <h5><i class="fa-solid fa-house"></i></h5>
        <h5>Você possui
            <?= count($infImmobile); ?> imóve<?=(count($infImmobile) > 1 ? 'is' : 'l');?>
             cadastrado<?= (count($infImmobile) > 1 ? 's' : '');?>
        </h5>
    </div>
    <div class="list-immobile">
        <?php foreach ($infImmobile as $item): ?>
            <?php $tipo = explode("/", $item['tipo']); ?>
            <div class="immobile-row">
                <div class="group-inf">
                    <div class="immobile-col">
                        <div class="immobile-image">
                            <img src="<?= $base; ?>/assets/images/<?= $item['id']; ?>/<?= $item['foto1']; ?>" alt="">
                        </div>
                    </div>
                    <div class="immobile-col">
                        <p> <strong>Residência</strong> Casa/
                            <?= $item['cidade']; ?>-
                            <?= $item['uf']; ?> <span>Ref:2092
                                <?= $item['end']; ?>,
                                <?= $item['num']; ?> - Unid.
                                0
                            </span>
                        </p>
                    </div>
                    <div class="immobile-col">
                        <h4> <strong>Disposivel</strong>-
                            <?= $item['preco_aluguels']; ?>
                        </h4>
                    </div>
                    <div class="immobile-col">
                        <div class="select-option-i">
                            <div class="group-select">
                                <p>Ações</p>
                            </div>
                            <i class="fa-solid fa-caret-down"></i>
                            <div class="modal-option-immobile">
                                <div class="group-select">
                                    <i class="fa-solid fa-folder-open"></i>
                                    <p>Ocorrêcias</p>
                                </div>

                                <div class="group-select">
                                    <i class="fa-solid fa-eye"></i>
                                    <p>Atividades</p>
                                </div>

                                <div class="group-select">
                                    <i class="fa-solid fa-folder-open"></i>
                                    <p>Documents</p>
                                </div>
                                <div class="group-select">
                                    <i class="fa-solid fa-bars"></i>
                                    <p>Detalhes</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="immobile-inf-row">
                    <div class="detail-title">
                        <h5>Detalhe do imóvel</h5>
                        <i id="immobile-inf-out" class="fa-solid fa-chevron-up"></i>
                    </div>
                    <div class="detail-info-immobile">
                        <div class="inf-i">
                            <p>Referência: 20892</p>
                        </div>
                        <div class="inf-i">
                            <p> Tipo:
                                <?= ucfirst($tipo[0]); ?> -
                                <?= $tipo[1]; ?>
                            </p>
                        </div>
                        <div class="inf-i">
                            <p>Localização:
                                <?= $item['end']; ?>
                                <?= $item['num']; ?> -
                                <?= $item['cidade']; ?> -
                                <?= $item['uf']; ?>
                            </p>
                        </div>
                        <div class="inf-i">
                            <p>Descrição:
                                <?= $item['descricao']; ?>.
                            </p>
                        </div>
                        <div class="inf-i">
                            Sala:
                            <?= $item['qtd_sala']; ?>
                        </div>
                        <div class="inf-i">
                            Quarto:
                            <?= $item['qtd_quarto']; ?>
                        </div>
                        <div class="inf-i">
                            Banheiros:
                            <?= $item['qtd_banheiro']; ?>
                        </div>
                        <div class="inf-i">
                            Cozinha:
                            <?= $item['qtd_cozinha']; ?>
                        </div>
                        <div class="detail-immobile-images">
                            <div class="photo-i">
                                <img src="<?= $base; ?>/assets/images/<?= $item['id']; ?>/<?= $item['foto1']; ?>">
                            </div>
                            <div class="photo-i">
                                <img src="<?= $base; ?>/assets/images/<?= $item['id']; ?>/<?= $item['foto2']; ?>">
                            </div>
                            <div class="photo-i">
                                <img src="<?= $base; ?>/assets/images/<?= $item['id']; ?>/<?= $item['foto3']; ?>">
                            </div>
                            <div class="photo-i">
                                <img src="<?= $base; ?>/assets/images/<?= $item['id']; ?>/<?= $item['foto4']; ?>">
                            </div>
                            <div class="photo-i">
                                <img src="<?= $base; ?>/assets/images/<?= $item['id']; ?>/<?= $item['foto5']; ?>">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<script src="<?= $base; ?>/assets/js/ksi-immobile.js"></script>