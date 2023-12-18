<div class="group-title">
    <h1>Painel</h1>
    <p>Painel</p>
</div>
<?php if ($flash !=""):?>
    <div class="item-alert">
        <div class="alert">
            <p><?=$flash;?></p>
        </div>
    </div>
<?php endif; ?>
<div class="panel-row-cards">
    <div class="panel-col-card blue">
        <div class="card-title">
            <h5> Usuários Online</h5>
        </div>
        <div class="card-description">
            <i class="fa-solid fa-user"></i>
            <h3>0</h3>
        </div>
    </div>
    <div class="panel-col-card yellowgreen">
        <div class="card-title">
            <h5>Usuários Ativos</h5>
        </div>
        <div class="card-description">
            <i class="fa-solid fa-user"></i>
            <h3>
                <?= count($usuarios); ?>
            </h3>
        </div>
    </div>
    <div class="panel-col-card yellow">
        <div class="card-title">
            <h5> Imoveis Ativos</h5>
        </div>
        <div class="card-description">
            <i class="fa-solid fa-house"></i>
            <h3>
                <?= count($imoveis); ?>
            </h3>
        </div>
    </div>
    <div class="panel-col-card gray cursor" id="notSearch">
        <div class="card-title">
            <h5>Usuário não achou</h5>
        </div>
        <div class="card-description">
            <i class="fa-solid fa-envelope"></i>
            <h3>
                <?= count($notSearchs); ?>
            </h3>
        </div>
    </div>
    <div class="panel-col-card red" id="announcement">
        <div class="card-title">
            <h5>Pedido de anuncios</h5>
        </div>
        <div class="card-description">
            <i class="fa-solid fa-bullhorn"></i>
            <h3>
                <?= count($anuncios); ?>
            </h3>
        </div>
    </div>
</div>
<div class="container-panel">
    <div class=" graphic-1" id="curve_chart">
    </div>
    <div class="list-immobile-1">
        <div class="list-immobile-1-title">
            <i class="fa-solid fa-table"></i>
            <h5>Tabela de imíveis</h5>
            <input type="text" id="search_immobile" name="search_immobile" placeholder="Buscar Imóvel">
        </div>
        <div class="group-table">
            <table class="table_immobile"> </table>
        </div>
    </div>

    <div class="list-user">
        <div class="list-list-user-title">
            <i class="fa-solid fa-table"></i>
            <h5>Tabela de Usuários</h5>
            <input type="text" id="search_user" name="search_user" placeholder="Buscar usuário" />
        </div>
        <div class="group-table">
            <table class="table_user"></table>
        </div>
    </div>
</div>
<script src="<?= $base; ?>/assets/js/panel-adm.js"></script>
<script src="<?= $base; ?>/assets/js/ksi-adm-search-immobile.js"></script>
<script src="<?= $base; ?>/assets/js/ksi-adm-search-user.js"></script>
<?php $render('ksi/graphic', ['imoveis' => $imoveis, 'anuncios' => $anuncios]); ?>