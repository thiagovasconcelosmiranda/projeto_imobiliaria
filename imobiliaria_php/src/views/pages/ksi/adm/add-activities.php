<div class="group-title">
    <h1>Adicionar Atividade</h1>
    <p>Adicionar Atividade</p>
</div>

<div class="container-activities">
    <form method="post" action="<?=$base;?>/ksi/adm/activities/create">
    <input type="hidden" value="<?=$id;?>" name="imovel_id">
        <div class="activities-row">
            <div class="activities-col-input">
                <label>Data</label>
                <input type="time" name="date">
                <span>Campos Obrigatorio*</span>
            </div>
            <div class="activities-col-input">
                <label>Data</label>
                <input type="date" name="time">
                <span>Campos Obrigatorio*</span>
            </div>
            <div class="activities-col-input">
                <label>Atendente</label>
                <select name="atendente" id="">
                    <option value="">Selecione a atendente</option>
                    <option value="Joyce Oliveira">Joyce Oliveira</option>
                    <option value="Yasmin Nascimento">Yasmin Nascimento</option>
                    <option value="Pedro Santana">Pedro Santana</option>

                </select>
                <span>Campos Obrigatorio*</span>
            </div>
            <div class="activities-col-input">
                <label>Setor</label>
                <select name="setor" id="">
                    <option value="">Selecione o setor</option>
                    <option value="Recursos Humanos">Recursos Humanos</option>
                    <option value="Corretor">Corretor</option>
                    <option value="Tesourária">Tesourária</option>
                    <option value="Atendente">Atendente</option>
                    <option value="Juridíco">Juridíco</option>
                </select>
                <span>Campos Obrigatorio*</span>
            </div>
        </div>
        <div class="activities-row">
            <div class="activities-col-input">
                <label>Descrição</label>
                <textarea name="descricao" id="" cols="30" rows="10"></textarea>
                <span>Campos Obrigatorio*</span>
            </div>
        </div>
        <div class="activities-row">
        <div class="activities-col-input">
            <button>Enviar</button>
        </div>
        </div>
    </form>
</div>
<script src="<?= $base; ?>/assets/js/ksi-adm-document-error.js"></script>