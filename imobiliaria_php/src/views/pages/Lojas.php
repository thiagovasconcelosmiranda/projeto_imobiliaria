<?php $render('header', [
    'aboutFlex' => $aboutFlex,
    'activeLink' => $activeLink
]); ?>
<div class="page">
    <h1>Confira nossas Lojas Disponíveis</h1>

    <div class="inputs-row">
        <form class="form store">
            <div class="group-i">
                <div class="align-i-10">
                    <label>Qual cidade?</label>
                    <select type="text" name="cidade">
                        <option value="">selecione</option>
                        <option value="Marilia">Marilia-SP</option>
                        <option value="Bauru">Bauru-SP</option>
                        <option value="Adamantina">Adamantina-SP</option>
                    </select>
                </div>
            </div>
            <div class="group-i">
                <div class="align-i-10">
                    <label>Qual condicao da loja?</label>
                    <select type="text" name="condicao">
                        <option value="s">Selecione</option>
                        <option value="Pronto pra usar">Pronto para usar</option>
                        <option value="Em construção">Em construção</option>
                    </select>
                </div>
            </div>
            <div class="group-i">
                <div class="align-i-10">
                    <label>Bairro da loja</label>
                    <select type="text" name="bairro">
                        <option value="">Selecione</option>
                        <option value="JD Aquarios">JD Aquarius</option>
                    </select>
                </div>
            </div>
        </form>
        <div class="search-cards-stores"><div>
    </div>
</div>
<?php $render('footer'); ?>