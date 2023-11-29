<div class=" user-alter container">
    <h1>Dados do Usuário</h1>

    <form method="PUT" action="<?= $base;?>/login">
        <div class="user-group-title">
            <i class="fa-solid fa-pencil"></i>
            <p>Alteração do cadastro</p>
        </div>
        <div class="row-upload">
            <div class="col-group-upload">
                <h1>Foto</h1>
                <?php if(!empty($infoUser->photo)): ?>
                   <img src="<?= $base; ?>/assets/media/user/<?=$infoUser->id;?>/<?=$infoUser->photo;?>" alt="user">
                <?php else: ?>
                    <img src="<?= $base; ?>/assets/images/user.png" alt="user">
                <?php endif;?>
            </div>
            <div class="col-group-upload">
                
                <label for="u">
                    <button type="button">Selecionar</button>
                </label>
                <input id="u" type="file" >
                <button type="button">Salvar</button>
            </div>
        </div>
        <div class="group-input">
            <label>E-mail:</label>
            <input type="email" value="<?= $infoUser->email;?>" name="email">
            <label>Confirmação de E-mail:</label>
            <input type="email" name="check_email">
        </div>
        <div class="group-row-input">
            <div class="col-input-x">
                <h1>Alteração Senha:</h1>
                <div class="group-input ">
                    <label>Senha atual:</label>
                    <input type="password" name="password">
                    <label>Nova senha:</label>
                    <input type="password" name="new-password">
                    <label>Confirmação de senha:</label>
                    <input type="password" name="check_password">
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
                    <input type="cep" value="<?=$infoUser->cep;?>" name="cep">
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
                    <label>Ap:casa:</label>
                    <input type="text"  value="" name="ap">
                </div>
            </div>

            <div class="col-input-x">
                <h1>Endereço Comercial</h1>
                <div class="group-input ">
                    <label>Cep:</label>
                    <input type="cep" value="<?=$infoUser->cep_comercial;?>" name="cep">
                    <label>Cidade:</label>
                    <input type="text" value="<?=$infoUser->cidade_comercial;?>" name="cidade">
                    <label>Estado:</label>
                    <input type="test" value="<?=$infoUser->uf_comercial;?>"  name="uf">
                    <label>Bairro:</label>
                    <input type="test" value="<?=$infoUser->bairro_comercial;?>"  name="bairro">
                    <label>Endereço:</label>
                    <input type="text" value="<?=$infoUser->end_comercial;?>"  name="end">
                    <label>Numero:</label>
                    <input type="number" value="<?=$infoUser->num_comercial;?>"  name="num">
                    <label>Ap:casa:</label>
                    <input type="txt" name="ap">
                </div>
            </div>
        </div>
        <div class="group-row-input">
            <div class="col-input-x">
                <button>Alterar</button>
            </div>
            <div class="col-input-x flex">
                <p> <input type="checkbox"> Confirmo que os dados estão atualizados</p>
            </div>

            <div class="col-input-x">
                <p>Última atualização: 19/10/2023</p>
            </div>
        </div>
    </form>
</div>