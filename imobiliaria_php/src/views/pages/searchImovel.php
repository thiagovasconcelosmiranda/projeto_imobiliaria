
<?php $render('header'); ?>
<div class="page">
   <h1>Resutado da busca</h1>
   <div class="photos">
       <div class="search-cards"> 
          <?php foreach($imoveis as $imovel):?>
          <div class="s-card">
             <div class="s-hover-card">
               <a href="<?=$base;?>/detalhe-imovel?id=<?=$imovel['id'];?>">
                  <button type="button">Mais Detalhes</button>
               </a>
             </div>
             <div class="s-card-img">
               <img src="assets/images/<?=$imovel['id'];?>/<?=$imovel['foto1'];?>" alt="Apartamento">
             </div>  
             <div class="s-group-text">
                <h4><?=$imovel['tipo'];?></h4>
                 <p>Bairro:<?=$imovel['bairro'];?></p>
                  <p><?=$imovel['cidade'];?></p>
                  <p>Vender:</p>
                   <h2> R$ <?=$imovel['preco_aluguel'];?></h4>
                   <p>Alugar:</p>
                   <h2> R$ <?=$imovel['preco_venda'];?></h4>
                   <p><strong><?=$imovel['descricao'];?></strong> , <?=$imovel['qtd_quarto'];?> quartos,  <?=$imovel['qtd_sala'];?>
                    sala, <?=$imovel['qtd_cozinha'];?> Cozinha,  <?=$imovel['qtd_banheiro'];?> banheiros, e  area de lazer.</p>
              </div>
          </div>
          <?php endforeach;?>
       </div>
   </div>
<?php $render('footer'); ?>