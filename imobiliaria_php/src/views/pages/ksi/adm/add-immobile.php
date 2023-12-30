<div class="group-title">
    <h1><?=$title?></h1>
    <p>Adicionar imóvel</p>
</div>
<div class="container-immobile">
    <form method="post" action="<?= $base;?>/<?=$url;?>" enctype="multipart/form-data">
        <div class="group-area-immobile">
            <?php if(empty($imoveis)): ?>
            <div class="group-input-row line">
                <div class="group-input-col-x">
                    <label>Usuário do imóvel</label>
                    <select type="text" name="login_id" id="1">
                        <option value=""> Selecione um usuário...</option>
                        <?php if (!empty($users)): ?>
                            <?php foreach ($users as $item): ?>
                                <option value="<?= $item['id']; ?>">
                                    <?= $item['id']; ?> -
                                    <?= $item['nome']; ?>
                                </option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                    <span id="msg-1">Campos obrigátorio*</span>
                </div>
            </div>
            <?php endif; ?>
            <div class="group-input-row">
                <div class="group-input-col-x">
                    <label>Classificação</label>
                    <select name="classificacao" id="2">
                        <option value="<?=(empty($imoveis) ? '':$imoveis[0][0]['classificacao']);?>">
                            <?=(empty($imoveis) ? 'Selecione a Classificação':$imoveis[0][0]['classificacao']);?></option>
                        <option value="aluguel">Aluguel</option>
                        <option value="venda">Venda</option>
                        <option value="venda/aluguel">Venda/Aluguel</option>
                    </select>
                    <span id="msg-2">Campos obrigátorio*</span>

                    <label>Tipo</label>
                    <select name="tipo" id="3">
                        <option value="<?=(empty($imoveis) ? '':$imoveis[0][0]['tipo']);?>">
                            <?=(empty($imoveis) ? 'Selecione o tipo':$imoveis[0][0]['tipo']);?></option>
                        <option value="residencial/Casa">Residencial casa</option>
                        <option value="comercial/Casa">Comercial casa</option>

                    </select>
                    <span id="msg-3">Campos obrigátorio*</span>

                    <label>Condição do imóvel</label>
                    <select name="condicao" id="4">
                        <option value="<?=(empty($imoveis) ? '':$imoveis[0][0]['condicao']);?>">
                             <?=(empty($imoveis) ? 'Selecione a condição':$imoveis[0][0]['condicao']);?>
                         </option>
                        <option value="Pronto pra morar">Pronto pra morar</option>
                        <option value="Em construção">Em construção</option>
                    </select>
                    <span id="msg-4">Campos obrigátorio*</span>

                    <label for="">Área do terreno</label>
                    <input type="text" value="<?=(empty($imoveis) ? '':$imoveis[0][0]['area_terreno']);?>" name="area_terreno" id="5">
                    <span id="msg-5">Campos obrigátorio*</span>

                    <label>Area de laser</label>
                    <select name="area_laser" id="6">
                        <option value="<?=(empty($imoveis) ? '':$imoveis[0][0]['area_laser']);?>">
                           <?=(empty($imoveis) ? ' Selecione a se tem area de laser':$imoveis[0][0]['area_laser']);?>
                        </option>
                        <option value="Sim">Sim</option>
                        <option value="Não">Não</option>
                    </select>
                    <span id="msg-6">Campos obrigátorio*</span>

                    <label>Qtde de vagas </label>
                    <select name="qtd_vaga" id="7">
                        <option value="<?=(empty($imoveis) ? '':$imoveis[0][0]['qtd_vaga']);?>">
                            <?=(empty($imoveis) ? 'Selecione a qtd de vagas':$imoveis[0][0]['qtd_vaga']);?>
                        </option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="2">3</option>
                        <option value="2">4</option>
                        <option value="2">5</option>
                    </select>
                    <span id="msg-7">Campos obrigátorio*</span>
                </div>

                <div class="group-input-col-x">
                    <label>Condominio</label>
                    <input type="text" value="<?=(empty($imoveis) ? '':$imoveis[0][0]['condominio']);?>" name="condominio" id="8">
                    <span id="msg-8">Campos obrigátorio*</span>

                    <label>Categoria </label>
                    <select name="tipo_imovel" id="9">
                        <option value="<?=(empty($imoveis) ? '':$imoveis[0][0]['tipo_imovel']);?>">
                            <?=(empty($imoveis) ? 'Selecione o categoria':$imoveis[0][0]['tipo_imovel']);?>
                        </option>
                        <option value="Residencial">Residencial</option>
                        <option value="Comercial">Comercial</option>
                    </select>
                    <span id="msg-9">Campos obrigátorio*</span>

                    <label>Disponibilidade </label>
                    <select name="disponibilidade" id="10">
                        <option value="<?=(empty($imoveis) ? '':$imoveis[0][0]['disponibilidade']);?>">
                            <?=(empty($imoveis) ? 'Selecione a disponibilidade':$imoveis[0][0]['disponibilidade']);?>
                        </option>
                        <option value="Disponível">Disponível</option>
                        <option value="Indisponível">Indisponível</option>
                    </select>
                    <span id="msg-10">Campos obrigátorio*</span>

                    <label>Valores de aluguel </label>
                    <select name="aluguel_id" id="11">
                        <option value="<?=(empty($imoveis) ? '':$imoveis[0][0]['preco_aluguels']);?>">
                            <?=(empty($imoveis) ? 'Selecione o valor':$imoveis[0][0]['preco_aluguels']);?>
                        </option>
                        <?php if (!empty($alugueis)): ?>
                            <?php foreach ($alugueis as $item): ?>
                                <option value="<?= $item['id']; ?>"> R$
                                    <?= $item['preco_aluguels']; ?>
                                </option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                    <span id="msg-11">Campos obrigátorio*</span>

                    <label>Valores de vendas </label>
                    <select name="preco_vendas" id="12">
                        <?php if (!empty($vendas)):?>
                            <option value="<?=(empty($imoveis) ? '':$imoveis[0][0]['preco_vendas']);?>">
                                <?=(empty($imoveis) ? 'Selecione o valor':$imoveis[0][0]['preco_vendas']);?>
                            </option>
                            <?php foreach ($vendas as $item): ?>
                                <option value="<?=$item['id'];?>"><?=$item['preco_vendas'];?></option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                    <span id="msg-12">Campos obrigátorio*</span>

                    <label>Qtde de varanda </label>
                    <select name="qtd_varanda" id="13">
                        <option value="<?=(empty($imoveis) ? '':$imoveis[0][0]['qtd_varanda']);?>">
                            <?=(empty($imoveis) ? ' Selecione a qtd de varanda':$imoveis[0][0]['qtd_varanda']);?>
                        </option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="2">3</option>
                        <option value="2">4</option>
                        <option value="2">5</option>
                    </select>
                    <span id="msg-13">Campos obrigátorio*</span>
                </div>
                <div class="group-input-col-x">
                    <label>Qtde de quartos </label>
                    <select name="qtd_quarto" id="14">
                        <option value="<?=(empty($imoveis) ? '':$imoveis[0][0]['qtd_quarto']);?>">
                            <?=(empty($imoveis) ? 'Selecione a qtd de quartos':$imoveis[0][0]['qtd_quarto']);?> 
                       </option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="2">3</option>
                        <option value="2">4</option>
                        <option value="2">5</option>
                    </select>
                    <span id="msg-14">Campos obrigátorio*</span>


                    <label>Qtde de sala </label>
                    <select name="qtd_sala" id="15">
                        <option value="<?=(empty($imoveis) ? '':$imoveis[0][0]['qtd_sala']);?>">
                            <?=(empty($imoveis) ? 'Selecione a qtd de sala':$imoveis[0][0]['qtd_sala']);?>
                        </option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="2">3</option>
                        <option value="2">4</option>
                        <option value="2">5</option>
                    </select>
                    <span id="msg-15">Campos obrigátorio*</span>

                    <label>Qtde de banheiro </label>
                    <select name="qtd_banheiro" id="16">
                        <option value="<?=(empty($imoveis) ? '':$imoveis[0][0]['qtd_banheiro']);?>">
                            <?=(empty($imoveis) ? 'Selecione a qtd de banheiro':$imoveis[0][0]['qtd_banheiro']);?>
                        </option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="2">3</option>
                        <option value="2">4</option>
                        <option value="2">5</option>
                    </select>
                    <span id="msg-16">Campos obrigátorio*</span>

                    <label>Qtde de cozinha</label>
                    <select name="qtd_cozinha" id="17">
                        <option value="<?=(empty($imoveis) ? '':$imoveis[0][0]['qtd_cozinha']);?>"> 
                            <?=(empty($imoveis) ? 'Selecione a qtd de cozinha':$imoveis[0][0]['qtd_cozinha']);?>
                        </option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="2">3</option>
                        <option value="2">4</option>
                        <option value="2">5</option>
                    </select>
                    <span id="msg-17">Campos obrigátorio*</span>

                    <label>Outros</label>
                    <input type="text" value="<?=(empty($imoveis) ? '':$imoveis[0][0]['outros']);?>" name="outros" id="19">
                    <span id="msg-19">Campos obrigátorio*</span>
                </div>
            </div>
            <div class="group-input-row line">
                <div class="group-input-col-x">
                    <label>Descrição</label>
                    <span id="msg-20">Campos obrigátorio*</span>
                    <textarea name="descricao" text="<?=(empty($imoveis) ? '':$imoveis[0][0]['descricao']);?>" id="20" cols="30" rows="100">
                      <?=(empty($imoveis) ? '':$imoveis[0][0]['descricao']);?>
                    </textarea>
                </div>
            </div>
            <div class="group-input-row">
                <div class="group-input-col-x">
                    <button id="button-add-immobile" class="button" type="button">Avançar -></button>
                </div>
            </div>
        </div>
        <div class="group-area-immobile-end">
            <h1>Endereço do imóvel</h1>
            <div class="group-input-row">
                <div class="group-input-col-x">
                    <label>Cep:</label>
                    <input type="text" value="<?=(empty($imoveis) ? '':$imoveis[0][0]['cep']);?>" id="21" name="cep">
                    <span id="msg-21">Compos obrigatório*</span>

                    <label>Endereço</label>
                    <input type="text" value="<?=(empty($imoveis) ? '':$imoveis[0][0]['end']);?>" name="end" id="22">
                    <span id="msg-22">Compos obrigatório*</span>

                    <label>Num:</label>
                    <input type="number" value="<?=(empty($imoveis) ? '':$imoveis[0][0]['num']);?>"  name="num" id="23">
                    <span id="msg-23">Compos obrigatório*</span>
                </div>
                <div class="group-input-col-x">
                    <label>Bairro:</label>
                    <input type="text" name="bairro" value="<?=(empty($imoveis) ? '':$imoveis[0][0]['bairro']);?>" id="24">
                    <span id="msg-24">Compos obrigatório*</span>

                    <label>Cidade:</label>
                    <input type="text" name="cidade" value="<?=(empty($imoveis) ? '':$imoveis[0][0]['cidade']);?>"id="25">
                    <span id="msg-25">Compos obrigatório*</span>

                    <label>Estado:</label>
                    <input type="text" name="uf" value="<?=(empty($imoveis) ? '':$imoveis[0][0]['uf']);?>" id="26">
                    <span id="msg-26">Compos obrigatório*</span>
                </div>
            </div>
            <div class="group-input-row">
                <div class="group-input-col-x flex-direction">
                    <button id="button-add-end-immobile-back" class="button" type="button"><- Voltar</button>
                     <button id="button-add-end-immobile" class="button" type="button">Avançar -></button>
                </div>
            </div>
        </div>

        <div class="group-area-immobile-photos">
            <h1>Imagens do imovel</h1>
            <div class="group-input-row">
                <div class="group-input-col-x">
                    <div class="immobile-photos">
                        <label for="photo-1">
                            <span id="err-1">Compo obrigatorio*</span>
                            <div class="immobile-photo" id="error-1">
                                <img id="img-1" 
                                  src="<?= $base; ?>/assets/images/<?=(empty($imoveis) ? 'images_icon-icons.com_50365.png':$imoveis[0][0]['id'].'/'.$imoveis[0][0]['foto1']);?>"
                                />
                            </div>
                        </label>
                        <input type="file" name="foto1" id="photo-1">

                        <label for="photo-2">
                            <span id="err-2">Compo obrigatorio*</span>
                            <div class="immobile-photo" id="error-2">
                                <img id="img-2" 
                                  src="<?= $base; ?>/assets/images/<?=(empty($imoveis) ? 'images_icon-icons.com_50365.png':$imoveis[0][0]['id'].'/'.$imoveis[0][0]['foto2']);?>"
                                 />
                            </div>
                        </label>
                        <input type="file" name="foto2" id="photo-2">

                        <label for="photo-3">
                            <span id="err-3">campo obrigatorio*</span>
                            <div class="immobile-photo" id="error-3">
                                <img id="img-3"  
                                    src="<?= $base; ?>/assets/images/<?=(empty($imoveis) ? 'images_icon-icons.com_50365.png':$imoveis[0][0]['id'].'/'.$imoveis[0][0]['foto3']);?>"
                                />
                            </div>
                        </label>
                        <input type="file" name="foto3" id="photo-3">

                        <label for="photo-4">
                            <span id="err-4">campo obrigatorio*</span>
                            <div class="immobile-photo" id="error-4">
                                <img id="img-4" 
                                   src="<?= $base; ?>/assets/images/<?=(empty($imoveis) ? 'images_icon-icons.com_50365.png':$imoveis[0][0]['id'].'/'.$imoveis[0][0]['foto4']);?>"
                                 />
                            </div>
                        </label>
                        <input type="file" name="foto4" id="photo-4">

                        <label for="photo-5">
                            <span id="err-5">campo obrigatorio*</span>
                            <div class="immobile-photo" id="error-5">
                                <img id="img-5"
                                    src="<?= $base; ?>/assets/images/<?=(empty($imoveis) ? 'images_icon-icons.com_50365.png':$imoveis[0][0]['id'].'/'.$imoveis[0][0]['foto5']);?>"
                                 />
                            </div>
                            <span id="err-5">Compo obrigatorio*</span>
                        </label>
                        <input type="file" name="foto5" id="photo-5">
                    </div>
                </div>
            </div>
            <div class="group-input-row">
                <div class="group-input-col-x flex-direction">
                    <button class="button" type="button"><- Voltar</button>
                            <button id="button-add-image-immobile" class="button" type="<?=($title != "Alterar Imóvel"? 'button':'submit');?>"><?=($title != "Alterar Imóvel"? 'Adicionar':'Alterar');?></button>
                </div>
            </div>
        </div>
    </form>
</div>
<script src="<?= $base; ?>/assets/js/ksi-adm-add-immobile-error.js"></script>
<script src="<?= $base; ?>/assets/js/ksi-adm-immobile-preview.js"></script>