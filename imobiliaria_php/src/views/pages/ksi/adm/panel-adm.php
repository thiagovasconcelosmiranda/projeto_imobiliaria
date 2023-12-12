<div class="group-title">
    <h1>Painel</h1>
    <p>Painel</p>
</div>
<div class="panel-row-cards">
    <div class="panel-col-card blue">
        <div class="card-title">
            <h5> Usuários Online</h5>
        </div>
        <div class="card-description">
            <h3>500.000 usuarios</h3>
        </div>
    </div>
    <div class="panel-col-card yellowgreen">
        <div class="card-title">
            <h5> Qutds Usuario no cadastrados</h5>
        </div>
        <div class="card-description">
            <h3>500.000 usuarios</h3>
        </div>
    </div>
    <div class="panel-col-card yellow">
        <div class="card-title">
            <h5> Imoveis cadastrados</h5>
        </div>
        <div class="card-description">
            <h3>
                <?= count($imoveis); ?> Imoveis
            </h3>
        </div>
    </div>
    <div class="panel-col-card gray">
        <div class="card-title">
            <h5> Emails recebidos</h5>
        </div>
        <div class="card-description">
            <h3>500.000 itens</h3>
        </div>
    </div>
</div>
<div class="container">

    <div class="col-i graphic-1">
        <img src="https://adrianopataro.com.br/wp-content/uploads/2021/10/elementos-do-grafico-titulo-dinamico.png">
    </div>
    <div class="col-i graphic-2">
        <img src="https://especiais.gazetadopovo.com.br/wp-content/uploads/sites/19/2020/03/09085018/grafico-historico-cotacao-dolar-4-reais.png"
            alt="">
    </div>
    <div class="col-i list-immobile-1">
        <div class="list-immobile-1-title">
            <i class="fa-solid fa-table"></i>
            <h5>Tabela de imíveis</h5>
        </div>
        <div class="group-table">
            <table>
                <tr class="tr-top">
                    <td class="td-top">ID</td>
                    <td class="td-top">TIPO</td>
                    <td class="td-top">IMAGEM</td>
                    <td class="td-top">CIDADE</td>
                    <td class="td-top">UF</td>
                    <td class="td-top">DATA CADASTRO</td>
                    <td class="td-top">AÇÕES</td>
                </tr>
                <?php foreach ($imoveis as $item): ?>
                    <tr>
                        <td class="td-desc">
                            <?= $item['id']; ?>
                        </td>
                        <td class="td-desc">
                            <?= $item['tipo'] ?>
                        </td>
                        <td class="td-desc"><img
                                src="<?= $base; ?>/assets/images/<?= $item['id']; ?>/<?= $item['foto1']; ?>">
                        </td>

                        <td class="td-desc">
                            <?= $item['cidade']; ?>
                        </td>
                        <td class="td-desc">
                            <?= $item['uf']; ?>
                        </td>
                        <td class="td-desc">
                            <?= $item['created_at']; ?>
                        </td>
                        <td class="td-desc">
                            <a href="<?= $base; ?>/<?= $item['id']; ?>"> <i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="<?= $base; ?>/<?= $item['id']; ?>"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
    <div class="col-i list-user">
        <div class="list-list-user-title">
            <i class="fa-solid fa-table"></i>
            <h5>Tabela de Usuários</h5>
        </div>
        <div class="group-table">
            <table>
                <tr class="tr-top">
                    <td class="td-top">ID</td>
                    <td class="td-top">NOME</td>
                    <td class="td-top">IMAGEM</td>
                    <td class="td-top">EMAIL</td>
                    <td class="td-top">CIDADE</td>
                    <td class="td-top">UF</td>
                    <td class="td-top">DATA CADASTRO</td>
                    <td class="td-top">AÇÕES</td>
                </tr>
                <?php if (!empty($usuarios)): ?>
                    <?php foreach ($usuarios as $item): ?>
                        <tr>
                            <td class="td-desc">
                                <?= $item['id']; ?>
                            </td>
                            <td class="td-desc">
                                <?= $item['nome']; ?>
                            </td>
                            <td class="td-desc"><img
                                    src="<?= $base; ?>/assets/media/user/<?= $item['id']; ?>/<?= $item['photo'] ?>">
                            </td>
                            <td class="td-desc">
                                <?= $item['email']; ?>
                            </td>
                            <td class="td-desc">
                                <?= $item['cidade']; ?>
                            </td>

                            <td class="td-desc">
                                <?= $item['uf']; ?>
                            </td>
                            <td class="td-desc">
                                <?= $item['created_at']; ?>
                            </td>
                            <td class="td-desc">
                                <a href="<?= $base; ?>/<?= $item['id']; ?>"> <i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="<?= $base; ?>/<?= $item['id']; ?>"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </table>
        </div>
    </div>

</div>