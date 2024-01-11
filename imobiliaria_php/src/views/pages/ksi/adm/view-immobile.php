<div class="group-title">
    <h1>Dados do imóvel</h1>
    <p>Dados do imóvel  <i onclick="window.print()" class="fa-solid fa-print"></i> </p>
</div>
<div class="list-view-immobile">

    <div class="view-immobile-title">
        <h1>Infomações do Imóvel</h1>
    </div>
    <div class="container-view-immobile">
        <div class="view-immobile-group-row">
            <div class="view-immobile-col">
                <label>Ref:</label>
                <div class="view-info">
                    <?= $listImmobile['ref']; ?>
                </div>
            </div>
            <div class="view-immobile-col">
                <label>Tipo:</label>
                <div class="view-info">
                    <?= $listImmobile['tipo']; ?>
                </div>
            </div>
        </div>
        <div class="view-immobile-group-row">
            <div class="view-immobile-col">
                <label>Condomínio:</label>
                <div class="view-info">
                    <?= $listImmobile['condominio']; ?>
                </div>
            </div>
            <div class="view-immobile-col">
                <label>Quarto:</label>
                <div class="view-info">
                    <?= $listImmobile['qtd_quarto']; ?>
                </div>
            </div>
            <div class="view-immobile-col">
                <label>Sala:</label>
                <div class="view-info">
                    <?= $listImmobile['qtd_sala']; ?>
                </div>
            </div>
            <div class="view-immobile-col">
                <label>Banheiro:</label>
                <div class="view-info">
                    <?= $listImmobile['qtd_banheiro']; ?>
                </div>
            </div>
        </div>

        <div class="view-immobile-group-row">
            <div class="view-immobile-col">
                <label>Sala:</label>
                <div class="view-info">
                    <?= $listImmobile['qtd_sala']; ?>
                </div>
            </div>
            <div class="view-immobile-col">
                <label>Banheiro:</label>
                <div class="view-info">
                    <?= $listImmobile['qtd_banheiro']; ?>
                </div>
            </div>
            <div class="view-immobile-col">
                <label>Cozinha:</label>
                <div class="view-info">
                    <?= $listImmobile['qtd_cozinha']; ?>
                </div>
            </div>
            <div class="view-immobile-col">
                <label>Varanda:</label>
                <div class="view-info">
                    <?= $listImmobile['qtd_varanda']; ?>
                </div>
            </div>
        </div>

        <div class="view-immobile-group-row">
            <div class="view-immobile-col">
                <label>Vaga:</label>
                <div class="view-info">
                    <?= $listImmobile['qtd_vaga']; ?>
                </div>
            </div>
            <div class="view-immobile-col">
                <label>Outro:</label>
                <div class="view-info">
                    <?= $listImmobile['outros']; ?>
                </div>
            </div>
            <div class="view-immobile-col">
                <label>Condição:</label>
                <div class="view-info">
                    <?= $listImmobile['condicao']; ?>
                </div>
            </div>
        </div>
        <div class="view-immobile-group-row">
            <div class="view-immobile-col">
                <label>Disponibilidade:</label>
                <div class="view-info">
                    <?= $listImmobile['disponibilidade']; ?>
                </div>
            </div>
            <div class="view-immobile-col">
                <label>Terreno:</label>
                <div class="view-info">
                    <?= $listImmobile['area_terreno']; ?>
                </div>
            </div>
            <div class="view-immobile-col">
                <label>Classificação:</label>
                <div class="view-info">
                    <?= $listImmobile['classificacao']; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="view-immobile-title">
        <h1>Infomações do Endereço</h1>
    </div>
    <div class="container-view-immobile">
        <div class="view-immobile-group-row">
            <div class="view-immobile-col">
                <label>Cep:</label>
                <div class="view-info">
                    <?= $listImmobile['cep']; ?>
                </div>
            </div>
            <div class="view-immobile-col">
                <label>End:</label>
                <div class="view-info">
                    <?= $listImmobile['end']; ?>
                </div>
            </div>
        </div>
        <div class="view-immobile-group-row">
            <div class="view-immobile-col">
                <label>Num:</label>
                <div class="view-info">
                    <?= $listImmobile['num']; ?>
                </div>
            </div>
            <div class="view-immobile-col">
                <label>Bairro:</label>
                <div class="view-info">
                    <?= $listImmobile['bairro']; ?>
                </div>
            </div>
            <div class="view-immobile-col">
                <label>Região:</label>
                <div class="view-info">
                    <?= $listImmobile['regiao']; ?>
                </div>
            </div>
        </div>
        <div class="view-immobile-group-row">
            <div class="view-immobile-col">
                <label>Cidade:</label>
                <div class="view-info">
                    <?= $listImmobile['cidade']; ?>
                </div>
            </div>
            <div class="view-immobile-col">
                <label>Cidade:</label>
                <div class="view-info">
                    <?= $listImmobile['cidade']; ?>
                </div>
            </div>
            <div class="view-immobile-col">
                <label>Estado:</label>
                <div class="view-info">
                    <?= $listImmobile['uf']; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="view-immobile-title">
        <h1>Imagens do Imovel</h1>
    </div>
    <div class="container-view-immobile">
        <div class="view-immobile-group-row flexWrap">
            <div class="view-immobile-image">
                <img
                    src="<?= $base; ?>/assets/media/photos_immobile/<?= $listImmobile['id']; ?>/<?= $listImmobile['foto1']; ?>">
            </div>

            <div class="view-immobile-image">
                <img
                    src="<?= $base; ?>/assets/media/photos_immobile/<?= $listImmobile['id']; ?>/<?= $listImmobile['foto2']; ?>">
            </div>
            <div class="view-immobile-image">
                <img
                    src="<?= $base; ?>/assets/media/photos_immobile/<?= $listImmobile['id']; ?>/<?= $listImmobile['foto3']; ?>">
            </div>
            <div class="view-immobile-image">
                <img
                    src="<?= $base; ?>/assets/media/photos_immobile/<?= $listImmobile['id']; ?>/<?= $listImmobile['foto4']; ?>">
            </div>
            <div class="view-immobile-image">
                <img
                    src="<?= $base; ?>/assets/media/photos_immobile/<?= $listImmobile['id']; ?>/<?= $listImmobile['foto5']; ?>">
            </div>
        </div>
    </div>
</div>