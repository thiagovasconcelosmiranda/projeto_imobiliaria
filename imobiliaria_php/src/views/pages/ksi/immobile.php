<div class="panel-row container" data-url="<?=$base;?>">
    <div class="panel-title">
        <h1>Meus imoveis</h1>
    </div>
    <div class="count-immobile">
        <h5><i class="fa-solid fa-house"></i></h5>
        <h5>Você possui
            <?= count($listImmobile);?> imóve<?=(count($listImmobile)>1?'is':'l');?>
            cadastrado<?=(count($listImmobile) > 1 ? 's':'');?>
        </h5>
    </div>
    <div class="list-immobile">
        <?php if(!empty($listImmobile)):?>
        <?php foreach ($listImmobile as $item):?>
            <?php $tipo = explode("/", $item['tipo']); ?>
            <div class="immobile-row">
                <div class="group-inf">
                    <div class="immobile-col">
                        <div class="immobile-image">
                            <img src="<?= $base; ?>/assets/media/photos_immobile/<?= $item['id']; ?>/<?= $item['foto1']; ?>">
                        </div>
                    </div>
                    <div class="immobile-col">
                        <p style="width: 50%"></p> <strong>Residência</strong> Casa/
                        <?= $item['cidade']; ?> -
                        <?= $item['uf']; ?> <span> Ref: <?=$item['ref'];?>
                            <?= $item['end']; ?>,
                            <?= $item['num']; ?> - Unid.
                            0
                        </span>
                        </p>
                    </div>
                    <div class="immobile-col">
                        <h4><strong style="color: <?= ($item['disponibilidade'] == 'Disponível' ? 'green' : 'red') ?>;">
                                <?=$item['disponibilidade']; ?>
                            </strong>
                            <?php if(!empty($item['preco_aluguels'])):?>
                             Aluguel:
                             <p><?= $item['preco_aluguels']; ?></p>
                            <?php endif; ?>
                            <?php if(!empty($item['preco_vendas'])):?>
                               <h4>Vendas:
                               <p><?= $item['preco_vendas']; ?></p>
                               </h4>
                            <?php endif; ?>
                        </h4>
                     </div>
                    <div class="immobile-col" >
                        <div class="select-option-i">
                            <div class="group-select active-select">
                                <i class="fa-solid"></i>
                                <p>Ações</p>
                            </div>
                            <i class="fa-solid fa-caret-down"></i>
                            <div class="modal-option-immobile">
                                <div class="group-select">
                                    <i class="fa-solid fa-eye"></i>
                                    <p>Atividades</p>
                                </div>

                                <div class="group-select">
                                    <i class="fa-solid fa-folder-open"></i>
                                    <p>Documentos</p>
                                </div>
                                <div class="group-select">
                                    <i class="fa-solid fa-bars"></i>
                                    <p>Detalhes</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="group-lists">
                    <div class="immobile-inf-row i">
                        <div class="detail-title">
                            <h5>Detalhe do imóvel</h5>
                            <i id="immobile-inf-out" class="fa-solid fa-chevron-up"></i>
                        </div>
                        <div class="detail-info-immobile">
                            <div class="inf-i">
                                <p>Referência: <?=$item['ref'];?></p>
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
                                    <img src="<?= $base; ?>/assets/media/photos_immobile/<?= $item['id']; ?>/<?= $item['foto1']; ?>">
                                </div>
                                <div class="photo-i">
                                    <img src="<?= $base; ?>/assets/media/photos_immobile/<?= $item['id']; ?>/<?= $item['foto2']; ?>">
                                </div>
                                <div class="photo-i">
                                    <img src="<?= $base; ?>/assets/media/photos_immobile/<?= $item['id']; ?>/<?= $item['foto3']; ?>">
                                </div>
                                <div class="photo-i">
                                    <img src="<?= $base; ?>/assets/media/photos_immobile/<?= $item['id']; ?>/<?= $item['foto4']; ?>">
                                </div>
                                <div class="photo-i">
                                    <img src="<?= $base; ?>/assets/media/photos_immobile/<?= $item['id']; ?>/<?= $item['foto5']; ?>">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="document-row i">
                        <div class="document_title">
                            <p>Documentos</p>
                            <i id="documents-off" class="fa-solid fa-chevron-up"></i>
                        </div>
                        <div class="list-document">
                            <table >
                                <tr class="tr-title">
                                    <td>Categoria</td>
                                    <td>Arquivo</td>
                                    <td>Descrição</td>
                                    <td>Download</td>
                                    <td>Tamanho</td>
                                    <td>Data</td>
                                </tr>

                                <?php foreach($item['doc'] as $doc):?>
                                    <tr class="tr-desc">
                                    <td><?=$doc['id'];?></td>
                                    <td>
                                        <?php if(!empty( $doc['arquivo'])):?>
                                            <i class="fa-solid fa-file"></i>
                                        <?php endif; ?>
                                    </td>
                                    <td><?=$doc['descricao'];?></td>
                                    <td><?=$doc['download'];?></td>
                                    <td><?=$doc['tamanho'];?></td>
                                    <td><?=$doc['created_at'];?></td>
                                </tr>
                                <?php endforeach; ?>
                                
                            </table>
                        </div>
                    </div>

                    <div class="activity-row i">
                        <div class="activity-title">
                            <div class="group-title">
                                <i class="fa-solid fa-square-poll-vertical"></i>
                                <p>Veja abaixo todas as movimentações do imóvel</p>
                            </div>
                            <i id="activity-off" class="fa-solid fa-chevron-up"></i>
                        </div>
                        <div class="movements_title">
                            <p>Movimentação</p>
                        </div>
                        <div class="list-activity">
                            <table>
                                <tr class="tr-title">
                                    <td>Data Hora</td>
                                    <td>Descrição</td>
                                    <td>Atendente</td>
                                    <td>Setor</td>
                                </tr>
                                <?php if (!empty($item['at'])): ?>
                                    <?php foreach ($item['at'] as $at): ?>
                                        <tr class="tr-info">
                                          <td><?=$at['date'];?> - <?=$at['time'];?></td>
                                          <td><?=$at['descricao'];?></td>
                                          <td><?=$at['atendente'];?></td>
                                          <td><?=$at['setor'];?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        <?php endforeach; ?>
        <?php endif;?>
    </div>
</div>
<script src="<?=$base;?>/assets/js/ksi-immobile.js"></script>
