<?php
 $date = explode(' ', $infoUser->updated_at);
 $arrayDate = explode('/',$date[0]);
 $arrayDate = array_reverse($arrayDate);
 $newDate = $arrayDate[0]."/".$arrayDate[1]."".$arrayDate[2];
?>
<div class=" user-alter">
    <h1>Dados do Usuário</h1>

    <form method="POST" action="<?= $base;?>/ksi/login/1/update?adm=<?=$adm;?>" enctype="multipart/form-data"  autocomplete="off">
        <div class="user-group-title">
            <i class="fa-solid fa-pencil"></i>
            <p>Alteração do cadastro</p>
        </div>
        <div class="row-upload">
            <div class="col-group-upload">
                <h1>Foto</h1>
                <?php if(!empty($infoUser->photo)): ?>
                   <img class="preview" src="<?= $base; ?>/assets/media/user/<?=$infoUser->id;?>/<?=$infoUser->photo;?>" alt="user">
                <?php else: ?>
                    <img class="preview" src="<?= $base; ?>/assets/images/user.png" alt="user">
                <?php endif;?>
            </div>
            <div class="col-group-upload">
                <input id="upload" name="photo" type="file" onchange="preview()">
                <label for="upload">
                    <div class="button">
                        Selecionar
                    </div>
                </label>
            </div>
        </div>
        <div class="group-input">
            <label>E-mail:</label>
            <input type="email" value="<?= $infoUser->email;?>" name="email">
        </div>
        <div class="group-row-input">
            <div class="col-input-x">
                <h1>Alteração Senha:</h1>
                <div class="group-input ">
                    <label>Nova Senha:</label>
                    <input type="password" name="password">

                    <label>Confirmação de senha:</label>
                    <input type="password" name="check_password"  autocomplete="off">
                </div>
            </div>

            <div class="col-input-x">
                <h1>Telefones</h1>
                <div class="group-input ">
                    <label>Comercial:</label>
                    <input type="text" value="<?=$infoUser->telefone_comercial;?>" name="tel_comercial">
                    <label>Residencial:</label>
                    <input type="text" value="<?=$infoUser->telefone_residencial;?>" name="tel_residencial">
                    <label>Celular:</label>
                    <input type="text" value="<?=$infoUser->celular;?>"  name="celular">
                </div>

            </div>
        </div>
        <div class="group-row-input">
            <div class="col-input-x">
                <h1>Endereço:</h1>
                <div class="group-input ">
                    <label>Cep:</label>
                    <input type="text" value="<?=$infoUser->cep;?>" name="cep">
                    <label>Cidade:</label>
                    <input type="text"  value="<?=$infoUser->cidade;?>" name="cidade">
                    <label>Estado:</label>
                    <input type="test"  value="<?=$infoUser->uf;?>" name="uf">
                    <label>Bairro:</label>
                    <input type="test"  value="<?=$infoUser->bairro;?>" name="bairro">
                    <label>Endereço:</label>
                    <input type="text"  value="<?=$infoUser->end;?>" name="end">
                    <label>Numero:</label>
                    <input type="number"  value="<?=$infoUser->num;?>" name="num">
                </div>
            </div>

            <div class="col-input-x">
                <h1>Endereço Comercial</h1>
                <div class="group-input ">
                    <label>Cep:</label>
                    <input type="text" value="<?=$infoUser->cep_comercial;?>" name="cep_comercial">
                    <label>Cidade:</label>
                    <input type="text" value="<?=$infoUser->cidade_comercial;?>" name="cidade_comercial">
                    <label>Estado:</label>
                    <input type="test" value="<?=$infoUser->uf_comercial;?>"  name="bairro_comercial">
                    <label>Bairro:</label>
                    <input type="test" value="<?=$infoUser->bairro_comercial;?>"  name="uf_comercial">
                    <label>Endereço:</label>
                    <input type="text" value="<?=$infoUser->end_comercial;?>"  name="end_comercial">
                    <label>Numero:</label>
                    <input type="number" value="<?=$infoUser->num_comercial;?>"  name="num_comercial">
                </div>
            </div>
        </div>
        <div class="group-row-input">
            <div class="col-input-x">
                <button id="button-alt" type="button">Alterar</button>
            </div>
            <div class="col-input-x flex">
              <div class="contract-i">
                <input id="contract-input" type="checkbox" name="contrato" value="Concordo com os termos da política">
                <p class="error"> Confirmo que os dados estão atualizados</p>
              </div>
            </div>

            <div class="col-input-x">
                <p>Última atualização: <?=$newDate;?> - Hora: <?=$date[1];?></p>
            </div>
        </div>
    </form>
</div>
<script src="<?=$base;?>/assets/js/ksi-user-alt.js"></script>