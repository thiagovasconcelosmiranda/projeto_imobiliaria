<?php 
 $create_at =   explode(' ', $infoUser->created_at);
 $dataItem = explode('-', $create_at[0]);
 $formData = $dataItem[2]."/".$dataItem[1]."/".$dataItem[0];
 $time = $create_at[1];
?>
<div class="group-title">
    <h1>Dados do usuário</h1>
    <p>Dados do usuário</p>
</div>
<div class="container-view">
 <div class="view-form-user-row">
 <h1> Dados pessoais</h1>
  <div class="icon-option">
    <i onclick="window.print()" class="fa-solid fa-print"></i>
    <i class="fa-regular fa-file-pdf"></i>
    <i class="fa-solid fa-floppy-disk"></i>
  </div>
 </div>
    <div class="view-form-user-row">
        <div class="view-inf-col">
            <h5>NOME:</h5>
            <p><?=$infoUser->nome;?></p>
        </div>
        <div class="view-inf-col">
            <h5>Estado civil:</h5>
            <p>Solteiro</p>
        </div>
    </div>
    <div class="view-form-user-row">
        <div class="view-inf-col">
            <h5>CPF:</h5>
            <p>331.966.938-99</p>
        </div>
        <div class="view-inf-col">
            <h5>DATA NASCIMENTO:</h5>
            <p>06/05/1984</p>
        </div>
    </div>
    <div class="line-view"></div>

<div class="view-form-user-row">
    <h1>Dados de contatos</h1>
</div>
    <div class="view-form-user-row">
        <div class="view-inf-col">
            <h5>Telefone Residencial:</h5>
            <p><?=$infoUser->telefone_residencial;?></p>
        </div>
        <div class="view-inf-col">
            <h5>Celular:</h5>
            <p><?=$infoUser->celular;?></p>
        </div>
    </div>
    <div class="view-form-user-row">
        <div class="view-inf-col">
            <h5>Telefone comercial:</h5>
            <p><?=$infoUser->telefone_comercial;?></p>
        </div>
        <div class="view-inf-col">
            <h5>Celular Comercial:</h5>
            <p>(14) 3425-1487</p>
        </div>
    </div>
    <div class="view-form-user-row">
        <div class="view-inf-col">
            <h5>Email comercial:</h5>
            <p><?=$infoUser->email;?></p>
        </div>
        <div class="view-inf-col">
            <h5>Email pessoal:</h5>
            <p><?=$infoUser->email;?></p>
        </div>
    </div>
   <div class="line-view"></div>

    <div class="view-form-user-row">
        <h1>Dados de endereço</h1>
    </div>
    <div class="view-form-user-row">
        <div class="view-inf-col">
            <h5>Cep:</h5>
            <p><?=$infoUser->cep;?></p>
        </div>
        <div class="view-inf-col">
            <h5>Endereço:</h5>
            <p><?=$infoUser->end;?></p>
        </div>
    </div>
    <div class="view-form-user-row">
        <div class="view-inf-col">
            <h5>num:</h5>
            <p><?=$infoUser->num;?></p>
        </div>
        <div class="view-inf-col">
            <h5>Bairro:</h5>
            <p><?=$infoUser->bairro;?></p>
        </div>
    </div>
    <div class="view-form-user-row">
        <div class="view-inf-col">
            <h5>Cidade:</h5>
            <p><?=$infoUser->cidade;?></p>
        </div>
        <div class="view-inf-col">
            <h5>Estado:</h5>
            <p><?=$infoUser->uf;?></p>
        </div>
    </div>
    <div class="line-view"></div>

    <div class="view-form-user-row">
        <h1>Dados de endereço comercial</h1>
    </div>
    <div class="view-form-user-row">
        <div class="view-inf-col">
            <h5>Cep:</h5>
            <p><?=$infoUser->cep_comercial;?></p>
        </div>
        <div class="view-inf-col">
            <h5>Endereço:</h5>
            <p><?=$infoUser->end_comercial;?></p>
        </div>
    </div>
    <div class="view-form-user-row">
        <div class="view-inf-col">
            <h5>num:</h5>
            <p><?=$infoUser->num_comercial;?></p>
        </div>
        <div class="view-inf-col">
            <h5>Bairro:</h5>
            <p><?=$infoUser->bairro_comercial;?></p>
        </div>
    </div>
    <div class="view-form-user-row">
        <div class="view-inf-col">
            <h5>Cidade:</h5>
            <p><?=$infoUser->cidade_comercial;?></p>
        </div>
        <div class="view-inf-col">
            <h5>Estado:</h5>
            <p><?=$infoUser->uf_comercial;?></p>
        </div>
    </div>


    <div class="view-form-user-row">
        <h4>Data do cadastro: <?=$formData;?> às <?= $time;?> horas</h4>
    </div>
</div>