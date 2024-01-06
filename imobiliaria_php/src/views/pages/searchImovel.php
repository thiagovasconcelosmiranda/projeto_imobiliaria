<?php $render('header', ['activeLink' => $activeLink]); ?>
<div class="page">
  <h1>Resutado da busca</h1>
  <div class="search-cards-x">
    <?php if (count($imoveis) > 0): ?>
      <?php foreach ($imoveis as $imovel):
        $c = explode('/', $imovel['classificacao']);
        $t = explode('/', $imovel['tipo']);
        ?>
        <div class="card">
          <div class="hover-card">
            <a href="<?= $base; ?>/detalhe-imovel?id=<?= $imovel['id']; ?>">
              <button class="button-i-card" type="button">Mais Detalhes</button>
            </a>
          </div>
          <div class="card-img">
            <div class="inf-i" style="display: <?php echo ($imovel['condicao'] != 0 ? 'flex' : 'none'); ?>">
              <?= $imovel['condicao']; ?>
            </div>
            <div class="inf-i green" style="left: 40%">
              <?= $c[0]; ?>
            </div>
            <div class="inf-i blue" style="left: 70%; display: <?php echo (isset($c[1]) ? 'flex' : 'none'); ?>">
              <?= $c[1]; ?>
            </div>
            <img src="assets/media/photos_immobile/<?=$imovel['id']; ?>/<?= $imovel['foto1']; ?>" alt="Apartamento">
          </div>
          <div class="group-text">
            <h4>
              <?= $t[0]; ?> -
              <?= $t[1]; ?>
            </h4>
            <p>Bairro:
              <?= $imovel['bairro']; ?>
            </p>
            <p>
              <?= $imovel['cidade']; ?> -
              <?= $imovel['uf']; ?>
            </p>
            <p>Vender:</p>
            <h2> R$
              <?= $imovel['preco_vendas']; ?>
              </h4>
              <p>Alugar:</p>
              <h2> R$
                <?= $imovel['preco_aluguels']; ?>
                </h4>
                <p><strong>
                    <?= $imovel['descricao']; ?>
                  </strong> ,
                  <?= $imovel['qtd_quarto']; ?> quartos,
                  <?= $imovel['qtd_sala']; ?>
                  sala,
                  <?= $imovel['qtd_cozinha']; ?> Cozinha,
                  <?= $imovel['qtd_banheiro']; ?> banheiros, e area de lazer.
                </p>
          </div>
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <h3>Imóvel não encontrado</h3>
    <?php endif; ?>
  </div>
  <div class="link-i-search">
    <h3>Não encontrou o que procura? <a href="<?= $base; ?>/nao-encontrei"> Clique aqui </a></h3>
  </div>
  <?php $render('ksi/login-item'); ?>
  <?php $render('footer'); ?>