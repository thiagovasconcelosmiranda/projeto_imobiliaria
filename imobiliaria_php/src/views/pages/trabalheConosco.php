<?php $render('header', ['aboutFlex' => $aboutFlex, 'activeLink' => $activeLink]); ?>

<div class="container-work">
    <div class="work-title">
        <h1>Trabalhe Conosco</h1>
        <?php if($flash): ?>
        <div class="alert-flash">
            <p><?=$flash;?></p>
        </div>
        <?php endif; ?>
    </div>

    <form method="post" action="<?=$base;?>/trabalheconosco/add" enctype="multipart/form-data">
        <div class="work-descrition">
            <p>Cadastre seu currículo e esteja preparado para encarar novos desafios.</p>
        </div>
        <div class="group-work-input">
            <div class="input-i">
                <input type="text" name="nome" placeholder="Nome" id="47">
                <span id="msg-47">Compos obrigatórios*</span>
            </div>
            <div class="input-i">
                <input type="text" name="telefone" placeholder="Telefone" id="48">
                <span id="msg-48">Compos obrigatórios*</span>
            </div>

        </div>
        <div class="group-work-input">
            <div class="input-i">
                <input type="email" id="49" name="email" placeholder="Email">
                <span id="msg-49">Compos obrigatórios*</span>
            </div>
            <div class="input-i">
                <input type="text" name="celular" placeholder="Celular" id="50">
                <span id="msg-50">Compos obrigatórios*</span>
            </div>
        </div>
        <div class="group-work-input">
            <div class="input-i">
                <input type="hidden" name="escolaridade" id="51">
                <div class="select-option" id="select-option">
                    <p>Escolaridade</p>
                    <i id="active-select" class="fa-solid fa-caret-down"></i>
                    <div class="option-i">
                        <div class="select-radio">
                            <label for="f-incompleto">
                               Ensino Médio - Incompleto
                            </label>
                            <input type="radio" id="f-incompleto" value="Ensino Médio - Incompleto" name="escolaridade">
                        </div>
                        <div class="select-radio">
                            <label for="f-completo">
                                Ensino Médio - Completo
                            </label>
                            <input type="radio" id="f-completo" value="Ensino Médio Fundamental - Completo" name="escolaridade">
                        </div>

                        <div class="select-radio">
                            <label for="g-incompleto">
                               Graduação - Incompleto
                            </label>
                            <input type="radio" id="g-incompleto" value=" Graduação - Incompleto" name="escolaridade">
                        </div>
                        <div class="select-radio">
                            <label for="g-completo">
                                Graduação - Completo
                            </label>
                            <input type="radio" id="g-completo" value="Graduação - Completo" name="escolaridade">
                        </div>


                        <div class="select-radio">
                            <label for="p-incompleto">
                                Pos graduação - Incompleto
                            </label>
                            <input type="radio" id="p-incompleto" value=" Pos graduação - Incompleto" name="escolaridade">
                        </div>

                        <div class="select-radio">
                            <label for="p-completo">
                            Pos graduação - Completo
                            </label>
                            <input type="radio" id="p-completo" value="Pos graduação - Completo" name="escolaridade">
                        </div>
                    </div>
                </div>
                <span id="msg-51">Compos obrigatórios*</span>
            </div>
            <div class="input-i">
                <div class="upload">
                    <label class="label-í" for="52">
                        <i class="fa-solid fa-paperclip"></i>
                        <p>Selecione um arquivo</p>
                    </label>
                </div>
                <input  type="file" name="curriculo" onchange="upload()" id="52">
                <span id="msg-52">Campos obrigatórios*</span>
            </div>
        </div>

        <div class="group-work-input">
            <div class="input-i">
                <textarea name="descricao" cols="30" rows="10" id="53"></textarea>
                <span id="msg-53">Campos obrigatórios*</span>
            </div>
        </div>
        <div class="work-i-row">
            <div class="work-i-col">
                <p>* Todos os campos são de preenchimento obrigatório</p>
                <div class="work-contract">
                    <input type="checkbox" value="Aceito os termos" name="contract" id="54">
                    <label id="error-contract">
                        Ao clicar no botão "Enviar", afirmo que li e concordo com os
                        TERMOS DE USO (atualizados dia 13/08/2021) e POLITICA DE PRIVACIDADE
                        (atualizados dia 13/08/2021).
                    </label>
                    <span id="msg-54"></span>
                </div>
            </div>
            <div class="work-i-col justify-left">
                <button id="button-work" type="button" class="work-button">Enviar</button>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript" src="<?= $base; ?>/assets/js/alert-error-work.js"> </script>
<?php $render('footer'); ?>