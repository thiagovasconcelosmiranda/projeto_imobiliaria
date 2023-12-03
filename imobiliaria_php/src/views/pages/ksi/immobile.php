
<div class="panel-row container">
    <div class="panel-title">
        <h1>Meus imoveis</h1>
    </div>
    <div class="count-immobile">
        <h5><i class="fa-solid fa-house"></i></h5>
        <h5>Você possui
            <?= count($infImmobile); ?> imóve
            <?= (count($infImmobile) > 1 ? 'is' : 'l'); ?>
            cadastrado
            <?= (count($infImmobile) > 1 ? 's' : ''); ?>
        </h5>
    </div>
    <div class="list-immobile">
        <?php foreach ($infImmobile as $item): ?>
            <?php $tipo = explode("/", $item['tipo']); ?>
            <div class="immobile-row">
                <div class="group-inf">
                    <div class="immobile-col">
                        <div class="immobile-image">
                            <img src="<?=$base; ?>/assets/images/<?= $item['id']; ?>/<?= $item['foto1'];?>">
                        </div>
                    </div>
                    <div class="immobile-col">
                        <p style="width: 50%"></p> <strong>Residência</strong> Casa/
                             <?= $item['cidade'];?> -
                             <?= $item['uf']; ?> <span>Ref:2092
                                <?= $item['end']; ?>,
                                <?= $item['num']; ?> - Unid.
                                0
                            </span>
                        </p>
                    </div>
                    <div class="immobile-col">
                    <?php if(!empty($item['disponibilidade'])): ?>
                        <h4><strong style="color: <?=($item['disponibilidade'] == 'disponível' ? 'green':'red')?>;"><?=$item['disponibilidade'];?></strong>-
                            <p><?= $item['preco_aluguels'];?></p>
                        </h4>
                        <?php endif; ?>
                    </div>
                    <div class="immobile-col">
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
                <div class="activity-row">
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
                                <td>Unidade</td>
                                <td>Atendente</td>
                                <td>Setor</td>
                            </tr>
                            <?php if(!empty($atividades)):?>
                              <?php foreach($atividades as $item): ?>
                               <tr class="tr-info">
                                <td><?=$item['created_at'];?></td>
                                <td><?=$item['descricao'];?></td>
                                <td><?=$item['unidade'];?></td>
                                <td><?=$item['atendente'];?></td>
                                <td><?=$item['setor'];?></td>
                               </tr>
                              <?php endforeach; ?>
                            <?php endif;?>
                        </table>
                    </div>
                </div>
                <div class="document-row">
                    <div class="document_title">
                        <p>Documentos</p>
                        <i id="documents-off" class="fa-solid fa-chevron-up"></i>
                    </div>
                    <div class="list-document">
                      <table>
                        <tr class="tr-title">
                            <td>Categoria</td>
                            <td>Descrição</td>
                            <td>Download</td>
                            <td>Tamanho</td>
                            <td>Data</td>
                        </tr>
                        <?php if(!empty($atividades)):?>
                        <?php foreach($documentos as $item):?>
                        <tr class="tr-description">
                            <td> <i class="fa-solid fa-image"></i><?=$item['categoria'];?></td>
                            <td><a href=""><?=$item['descricao'];?></a></td>
                            <td><?=$item['download'];?></td>
                            <td><?=$item['tamanho'];?></td>
                            <td><?=$item['created_at'];?></td>
                        </tr>
                        <?php endforeach;?>
                        <?php endif;?>
                       
                      </table>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<script src="<?= $base; ?>/assets/js/ksi-immobile.js"></script>