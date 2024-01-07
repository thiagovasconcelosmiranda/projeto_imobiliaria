

<?php $render('header', ['activeLink' => $activeLink]); ?>
<?php $render('ksi/login-item');?>

<div class="page">

    <h1>Detalhe do imóvel</h1>
     <div class="photos" >
     <?php if($imovel['foto1']){ ?>
       <div class="image-photo">
         <img src="assets/media/photos_immobile/<?=$imovel['id']?>/<?=$imovel['foto1'];?>" alt="Imagem imovel 1">
       </div>
       <?php }?>
     <?php if($imovel['foto2']){ ?>
     <div class="image-photo">
        <img src="assets/media/photos_immobile/<?=$imovel['id']?>/<?=$imovel['foto2'];?>" alt="Imagem imovel 2">
     </div>
     <?php }?>
     <?php if($imovel['foto3']){ ?>
        <div class="image-photo">
           <img src="assets/media/photos_immobile/<?=$imovel['id']?>/<?=$imovel['foto3'];?>" alt="Imagem imovel 3">
        </div>
     <?php }?>
     <?php if($imovel['foto4']){ ?>
        <div class="image-photo">
           <img src="assets/media/photos_immobile/<?=$imovel['id']?>/<?=$imovel['foto4'];?>" alt="Imagem imovel 4">
        </div>
     <?php }?>
     <?php if($imovel['foto5']){?>
        <div class="image-photo">
          <img src="assets/media/photos_immobile/<?=$imovel['id']?>/<?=$imovel['foto5'];?>" alt="Imagem imovel 5">
        </div>
     <?php }?>
  </div>
  <div class="detalhe-row">
     <div class="detalhe-col">
         <div class="item-dados">
            <h3 class="color"><?= $imovel['tipo'];?></h3>
            <h4 class="color"><?= $imovel['condominio'];?></h4>
            <P><strong>ENDEREÇO: </strong><?= $imovel['end'];?>, Nº <?=$imovel['num'];?></P>
            <P><strong>CEP: </strong> <?=$imovel['cep'];?></P>
            <P><strong>BAIRRO: </strong> <?=$imovel['bairro'];?></P>
            <P><strong>CIDADE: </strong> - <?=$imovel['cidade'];?> - <?=$imovel['uf'];?></P>
            <p>DESCRIÇÃO: <?=$imovel['descricao'];?></p>
            <div class="item-icone">
              <p class="red"><?= $imovel['qtd_quarto'];?> quarto </P>
              <p class="borange"><?= $imovel['qtd_cozinha'];?> cozinha</P>
              <p class="blue"><?= $imovel['qtd_banheiro'];?> banheiro</P>
             </div>
             <div class="item-icone">
              <?php if($imovel['qtd_vaga'] > 0){ ?>
                <p class="blue-course"><?= $imovel['qtd_vaga'];?> vagas</P>
              <?php } ?>
              <?php if($imovel['qtd_varanda'] > 0){ ?>
              <p class="green"><?= $imovel['qtd_varanda'];?> varanda</p>
              <?php } ?>
               <?php if($imovel['outros'] > 0){ ?>
                  <p class="gray"><?= $imovel['outros'];?></p>
               <?php } ?>
             </div>
            </div>
     </div>
     <div class="detalhe-col">
         <div class="item-i">
            <div class="item-align">
               <div class="i-tipo">
                  <h2>Aluguel:</h2>
                   <h2 class="cinza">Preço: R$ <?=$imovel['preco_aluguels']?> /mês</h2>
                </div>
                <div class="i-tipo">
                  <h2>Venda:</h2>
                   <h2 class="cinza">Preço: R$ 
                     <?= $imovel['preco_vendas']?></h2>
                     <button class="button-i" onclick="click()" type="button">Agendar visita</button>
                </div>
              </div>
           </div>
     </div>
  </div>
  <div class="dados-row" >
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
<?php $render('modal-photo', ['imovel' => $imovel]);?>
<?php $render('modal-visita', ['id'=> $id, 'flash' => $flash]);?>
<?php $render('footer');?>

