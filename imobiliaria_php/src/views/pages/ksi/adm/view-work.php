<div class="group-title">
    <h1>Dados do Cadastro Trabalhe Conosco</h1>
    <p>Dados do Cadastro Trabalhe Conosco</p>
</div>

<div class="container-view">
    <div class="view-form-user-row">
        <h1> Dados do candidato</h1>
        <div class="icon-option">
            <i onclick="window.print()" class="fa-solid fa-print"></i>
        </div>

    </div>
    <div class="view-form-user-row">
        <div class="view-inf-col">
            <h5>NOME:</h5>
            <p>
                <?= $work['nome']; ?>
            </p>
        </div>
        <div class="view-inf-col">
            <h5>Email:</h5>
            <p>
                <?= $work['email']; ?>
            </p>
        </div>
    </div>
    <div class="view-form-user-row">
        <div class="view-inf-col">
            <h5>Telefone:</h5>
            <p>
                <?= $work['telefone']; ?>
            </p>
        </div>
        <div class="view-inf-col">
            <h5>Celular:</h5>
            <p>
                <?= $work['celular']; ?>
            </p>
        </div>
    </div>
    <div class="view-form-user-row">
        <div class="view-inf-col">
            <h5>Descrição</h5>
            <p>
                <?= $work['descricao']; ?>
            </p>
        </div>
    </div>
</div>
<div class="view-curriculo">
    <iframe width="100%" src="<?=$base;?>/assets/media/works/<?=$work['id'];?>/<?=$work['arquivo'];?>"
        width="600" height="780" ></iframe>
</div>