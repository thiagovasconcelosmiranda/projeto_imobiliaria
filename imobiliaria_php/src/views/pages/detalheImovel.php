<?php $render('header'); ?>
<div class="page">
    <h1>Detalhe do imóvel</h1>
     <div class="photos">
     <?php if($imovel['foto1']){ ?>
       <div class="image-photo">
         <img src="assets/images/<?=$imovel['id']?>/<?=$imovel['foto1'];?>" alt="Imagem imovel 1">
       </div>
       <?php }?>
     <?php if($imovel['foto2']){ ?>
     <div class="image-photo">
        <img src="assets/images/<?=$imovel['id']?>/<?=$imovel['foto2'];?>" alt="Imagem imovel 2">
     </div>
     <?php }?>
     <?php if($imovel['foto3']){ ?>
        <div class="image-photo">
           <img src="assets/images/<?=$imovel['id']?>/<?=$imovel['foto3'];?>" alt="Imagem imovel 3">
        </div>
     <?php }?>
     <?php if($imovel['foto4']){ ?>
        <div class="image-photo">
           <img src="assets/images/<?=$imovel['id']?>/<?=$imovel['foto4'];?>" alt="Imagem imovel 4">
        </div>
     <?php }?>
     <?php if($imovel['foto5']){?>
        <div class="image-photo">
          <img src="assets/images/<?=$imovel['id']?>/<?=$imovel['foto5'];?>" alt="Imagem imovel 5">
        </div>
     <?php }?>
  </div>
  <div class="detalhe-row">
     <div class="detalhe-col">
         <div class="item-dados">
            <h3><?= $imovel['tipo'];?></h3>
            <h4 class="color">RESIDENCIAL - <?= $imovel['bairro'];?></h4>
            <P> <?= $imovel['end'];?>, Nº <?=$imovel['num'];?></P>
            <P> CEP: <?=$imovel['cep'];?></P>
            <P>CIDADE - <?=$imovel['cidade'];?> - <?=$imovel['uf'];?></P>
            <p>Descrição: <?=$imovel['descricao'];?></p>
            <div class="item-icone">
              <p class="blue"><?= $imovel['qtd_quarto'];?> quarto </P>
              <p class="green"><?= $imovel['qtd_cozinha'];?> cozinha</P>
              <p class="blue"><?= $imovel['qtd_banheiro'];?> banheiro</P>
             </div>
             <div class="item-icone">
              <?php if($imovel['qtd_vaga'] > 0){ ?>
                <p class="red"><?= $imovel['qtd_vaga'];?> vagas</P>
              <?php } ?>
              <?php if($imovel['qtd_varanda'] > 0){ ?>
              <p class="green"><?= $imovel['qtd_varanda'];?> varanda</p>
              <?php } ?>
               <?php if($imovel['qtd_area_jogos'] > 0){ ?>
                  <p class="yellow"><?= $imovel['qtd_area_jogos'];?> are de Jogos</p>
               <?php } ?>
             </div>
            </div>
     </div>
     <div class="detalhe-col">
         <div class="item-i">
            <div class="item-align">
               <div class="i-tipo">
                  <h2>Aluguel:</h2>
                   <h2 class="cinza">Preço: R$ <?=$imovel['preco_aluguel']?> /mês</h2>
                </div>
                <div class="i-tipo">
                  <h2>Venda:</h2>
                   <h2 class="cinza">Preço: R$ 
                     <?= $imovel['preco_venda']?></h2>
                   <a href="#">
                     <button>Agendar visita</button>
                   </a>
                </div>
              </div>
           </div>
     </div>
  </div>
  <div class="dados-row">
      <div class="group-i-icone">
         <h3>Classificação</h3>
         <h5><?=$imovel['classificacao'];?></h5>
      </div>
      <div class="group-i-icone">
         <h3>Tipo de imóvel</h3>
         <h5><?=$imovel['tipo_imovel'];?></h5>
      </div>
      <div class="group-i-icone">
         <h3>Àrea de terreno</h3>
         <h5><?=$imovel['area_terreno'];?> m²</h5>
      </div>
   </div>
</div>
<?php $render('footer');

 if($imovel['qtd_area_jogos'] > 0){
    echo "Há dados";
 }else{
   echo "Não há dados";
 }
?>