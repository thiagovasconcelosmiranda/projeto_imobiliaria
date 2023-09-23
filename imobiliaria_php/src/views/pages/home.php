<?php $render('header', ['aboutFlex'=>$aboutFlex]); ?>
<div class="images-top-group">
   <div class="top-image"></div>
</div>
<main>
     <div class="container">
         <div class="img-header">
          <img src="<?=$base;?>/assets/images/arquitetura-e-natureza-se-fundem-em-ia-generativa-de-design-moderno.jpg" alt="slide de imagens" id="slider">
              <div class="group-modal">
                <div class="align-title">
                  <h1>O que você está procurando?</h1>
                 </div>
                <div class="painel">
                 <form method="POST" action="<?=$base;?>/busca-imovel">
                  <div class="button-i">
                     <div class="respansive-button">
                       <button onclick="butonClick('Alugar')" type="button">Alugar</button>
                       <button onclick="butonClick('Vender')" type="button">Vender</button>
                       <button onclick="butonClick('Comprar')" type="button">Comprar</button>
                     </div>
                     <div class="respansive-button">
                       <button onclick="butonClick('Impreendimento')" class="button" type="button">Impreendimento</button>
                       <button onclick="butonClick('Investimento')" class="button" type="button">Investimento</button> 
                    </div>
                  </div>
                  <div class="group-select">
                    <div class="selector-i">
                      <div class="respansive-select">
                        <div class="select-option">
                          <select onclick="buttonSelect('Alugar Casa')">
                            <option>Alugar Casas</option>
                          </select>
                         </div>
                         <div class="select-option">
                           <select onclick="buttonSelect('Regiao')">
                              <option>Região</option>
                           </select>
                           <div class="col-option-select col-i"  id="region">
                             <div class="select-i-option ">
                               <input type="checkbox" value="Zona Leste" name="zona_leste" onclick="buttonRadio(0)"/>
                               <label>Zona Leste</label>
                             </div>
                             <div class="select-i-option">
                              <input type="checkbox" value="Zona Central" name="zona_central" onclick="buttonRadio(1)" />
                              <label>Zona Central</label>
                            </div>
                            <div class="select-i-option">
                              <input type="checkbox" value="Zona Nortel" name="zona_norte"onclick="buttonRadio(2)" />
                              <label>Zona Norte</label>
                            </div>
                            <div class="select-i-option">
                              <input type="checkbox" value="Zona Oeste" name="zona_oeste" onclick="buttonRadio(3)" />
                              <label>Zona Oeste</label>
                            </div>
                           </div>
                         </div>
                      </div>
                      <div class="respansive-select"> 
                       <div class="select-option">
                          <select onclick="buttonSelect('Bairro')">
                            <option>Bairro</option>
                          </select>
                       </div>
                       <div class="select-option">
                         <select onclick="buttonSelect('Edificio')">
                           <option>Edificio/Condominio</option>
                         </select>
                        </div>
                       </div>
                      </div>
                      <div class="row-i">
                        <div class="col-i">
                           <h4>Comercial</h4>
                           <div class="group-check">
                            <input type="checkbox" value="casa" name="casa" onclick="buttonRadio(4)">
                            <label>Casa</label>
                           </div>
                           <div class="group-check">
                            <input type="checkbox"  value="Galpão/Barracão" name="galpão_Barracão" onclick="buttonRadio(5)">
                            <label>Galpão/Barracão</label>
                           </div>
                           <div class="group-check">
                            <input type="checkbox" value="Loja em shopping" name="loja_shopping"   onclick="buttonRadio(6)">
                            <label>Loja em shopping</label>
                           </div>
                           <div class="group-check">
                            <input type="checkbox"  value="Loja" name="loja"   onclick="buttonRadio(7)">
                            <label>Loja</label>
                           </div>
                           <div class="group-check">
                            <input type="checkbox"  value="Salão Varejo" name="salao_varejo"   onclick="buttonRadio(8)">
                            <label>Salão Varejo</label>
                           </div>
                           <div class="group-check">
                            <input type="checkbox" value="Edificio/Apartamento" name="edificio-apartamento"  onclick="buttonRadio(9)">
                            <label>Edificio/Apartamento</label>
                           </div>
                          </div>
                          <div class="col-i">
                            <h4>Residêncial</h4>
                            <div class="group-check">
                              <input type="checkbox" value="Apartamento" name="apartamento" onclick="buttonRadio(10)">
                               <label>Apartamento</label>
                             </div>
                             <div class="group-check">
                                <input type="checkbox" value="Mansão/residencial" name="mansao" onclick="buttonRadio(11)">
                                <label>Mansão</label>
                             </div>
                             <div class="group-check">
                                <input type="checkbox" value="Casa condomínio/residencial" name="casa_condominio"  onclick="buttonRadio(12)">
                                <label>Casa condomínio</label>
                             </div>
                             <div class="group-check">
                              <input type="checkbox" value="Chacará/residencial" name="chacara" onclick="buttonRadio(13)">
                              <label>Chacará</label>
                            </div>
                            <div class="group-check">
                                 <input type="checkbox" value="Chacará em Condomínio/residencial" name="chacara_condominio" onclick="buttonRadio(14)">
                                 <label>Chacará em Condomínio</label>
                             </div>
                            <div class="group-check">
                                <input type="checkbox" value="Edificio/Apartamento/residencial" name="edifio_apartamento" onclick="buttonRadio(15)">
                                <label>Edificio/Apartamento</label>
                             </div>
                           </div>
                           <div class="col-i">
                            <h4>Terreno</h4>
                            <div class="group-check" >
                              <input type="checkbox" value="Àrea/terreno" name="area" onclick="buttonRadio(16)">
                              <label>Àrea</label>
                             </div>
                             <div class="group-check">
                              <input type="checkbox" value="Dentro do condomínio/terreno" name="area_condominio" onclick="buttonRadio(17)">
                              <label>Dentro do condomínio</label>
                             </div>
                             <div class="group-check">
                              <input type="checkbox"  value="Fora do condomínio/terreno" name="fora_condominio" onclick="buttonRadio(18)">
                              <label>Fora do condomínio</label>
                           </div>
                         </div>
                        </div>
                         <div class="row-i-4" id="bairro">
                          <div class="align-col-select">
                            <div class="col-i">
                              <div class="group-check">
                                 <input type="checkbox" value="Centro"  name="centro" onclick="buttonRadio(19)">
                                 <label>Centro</label>
                              </div>
                            <div class="group-check">
                               <input type="checkbox" value="Altos da Colina" name="colina" onclick="buttonRadio(20)">
                               <label>Altos da Colina</label>
                            </div>
                          <div class="group-check">
                           <input type="checkbox"  value="Salão de festas" name="armando_mascaro" onclick="buttonRadio(21)">
                           <label>Armando Mascaro</label>
                          </div>
                          <div class="group-check">
                           <input type="checkbox" value="Bassan" name="bassan" onclick="buttonRadio(22)">
                           <label>Bassan</label>
                          </div>
                          <div class="group-check">
                           <input type="checkbox" value="Bosque" name="Bosque" onclick="buttonRadio(23)">
                           <label>Bosque</label>
                          </div>
                          <div class="group-check">
                           <input type="checkbox" value="Castelo Branco" name="castelo_branco" onclick="buttonRadio(24)">
                           <label>Castelo Branco</label>
                          </div>  
                         <div class="group-check">
                          <input type="checkbox" value="Cavalieri 2" name="cavalieri" onclick="buttonRadio(25)">
                          <label>Cavalieri 2</label>
                         </div> 
                         <div class="group-check">
                          <input type="checkbox" value="Cetro (Padre Nóbrega)" name="padre_noberega" onclick="buttonRadio(26)">
                          <label>Cetro (Padre Nóbrega)</label>
                         </div> 
                         <div class="group-check">
                          <input type="checkbox" value="Portaria" name="portaria" onclick="buttonRadio(27)">
                          <label>Portaria</label>
                         </div> 
                      </div>
                       <div class="col-i">
                          <div class="group-check">
                           <input type="checkbox" value="Altaneira" name="altaneira" onclick="buttonRadio(28)">
                           <label>Altaneira</label>
                          </div>
                          <div class="group-check">
                           <input type="checkbox" value="Banzato" name="banzato" onclick="buttonRadio(29)">
                           <label>Banzato</label>
                          </div>
                          <div class="group-check">
                           <input type="checkbox" value="Betel" name="psicina_aduto" onclick="buttonRadio(30)">
                           <label>Betel</label>
                          </div>
                          <div class="group-check">
                           <input type="checkbox" value="Canaá" name="canaa" onclick="buttonRadio(31)">
                           <label>Canaá</label>
                          </div>
                          <div class="group-check">
                           <input type="checkbox"  value="Santa Antonieta 2" name="santa_antonieta" onclick="buttonRadio(32)">
                           <label>Santa Antonieta 2</label>
                          </div>
                          <div class="group-check">
                           <input type="checkbox" value="Parque das Nações" name="parque_nacoes" onclick="buttonRadio(33)">
                           <label>Parque das Nações</label>
                          </div>  
                         <div class="group-check">
                          <input type="checkbox" value="Jânio Quadro" name="jânio_quadro" onclick="buttonRadio(34)">
                          <label>Jânio Quadro</label>
                         </div> 
                         <div class="group-check">
                          <input type="checkbox" value="César Almeida" name="cesar_almeida" onclick="buttonRadio(35)">
                          <label>César Almeida</label>
                         </div> 
                         <div class="group-check">
                          <input type="checkbox" value="Social" name="social" onclick="buttonRadio(36)">
                          <label>Social</label>
                         </div> 
                       </div>
                       <div class="col-i">
                        <div class="group-check">
                          <input type="checkbox" value="Varanda grill" name="varanda_grill" onclick="buttonRadio(37)">
                          <label>Varanda grill</label>
                         </div> 
                        <div class="group-check">
                         <input type="checkbox" value="Altos Palmital" name="altos_palmital" onclick="buttonRadio(38)">
                         <label>Altos Palmital</label>
                        </div>
                        <div class="group-check">
                         <input type="checkbox" value=">Antonio Carlos" name="antonio_carlos" onclick="buttonRadio(39)">
                         <label>Antonio Carlos</label>
                        </div>
                        <div class="group-check">
                         <input type="checkbox" value="Palmital" name="piscina_fria" onclick="buttonRadio(40)">
                         <label>Palmital</label>
                        </div>
                        <div class="group-check">
                         <input type="checkbox"  value="Cascata" name="cascata" onclick="buttonRadio(41)">
                         <label>Cascata</label>
                        </div>
                        <div class="group-check">
                         <input type="checkbox"  value="Área de sinuca" name="area_sinuca" onclick="buttonRadio(42)">
                         <label>Área de sinuca</label>
                        </div>  
                       <div class="group-check">
                        <input type="checkbox" value="Lacio" name="lacio" onclick="buttonRadio(43)">
                        <label>Lacio</label>
                       </div> 
                       <div class="group-check">
                        <input type="checkbox" value="Viveiro" name="viveiro" onclick="buttonRadio(44)">
                        <label>Viveiro</label>
                        </div> 
                        <div class="group-check">
                          <input type="checkbox" value="Julieta" name="julieta" onclick="buttonRadio(45)">
                          <label>Julieta</label>
                        </div> 
                       </div>
                      </div>
                     </div>
                        <div class="row-i-2">
                          <div class="align-col-select">
                          <div class="col-i">
                             <div class="group-check">
                              <input type="checkbox" value="Valle do Canaã" onclick="buttonRadio(46)">
                              <label>Valle do Canaã</label>
                             </div>
                             <div class="group-check">
                              <input type="checkbox" value="Paineiras Home Design" onclick="buttonRadio(47)">
                              <label>Paineiras Home Design</label>
                             </div>
                             <div class="group-check">
                              <input type="checkbox" value="Residencial Jd. Villandry" onclick="buttonRadio(48)">
                              <label>Residencial Jd. Villandry</label>
                             </div>
                             <div class="group-check">
                              <input type="checkbox" value="Green Valley" onclick="buttonRadio(49)">
                              <label>Green Valley</label>
                             </div>
                             <div class="group-check">
                              <input type="checkbox" value="Condomínio Moradas Maríliay" onclick="buttonRadio(50)">
                              <label>Condomínio Moradas Marília</label>
                             </div>
                             <div class="group-check">
                              <input type="checkbox" value="Parque Casablanca" onclick="buttonRadio(51)">
                              <label>Parque Casablanca</label>
                             </div>
                            </div>
                           <div class="col-i">
                              <div class="group-check">
                                <input type="checkbox" value="Villa Flora III" onclick="buttonRadio(52)">
                                 <label>Villa Flora III</label>
                               </div>
                               <div class="group-check">
                                  <input type="checkbox" value="Edificio Praça Marechal" onclick="buttonRadio(53)">
                                  <label>Edificio Praça Marechal</label>
                               </div>
                               <div class="group-check">
                                  <input type="checkbox" value="Edifício Módenal" onclick="buttonRadio(54)">
                                  <label>Edifício Módena</label>
                               </div>
                               <div class="group-check">
                                <input type="checkbox" value="Chacará" onclick="buttonRadio(55)">
                                <label>Chacará</label>
                              </div>
                              <div class="group-check">
                                   <input type="checkbox" value="Chacará em Condomínio" onclick="buttonRadio(56)">
                                   <label>Chacará em Condomínio</label>
                               </div>
                              <div class="group-check">
                                  <input type="checkbox" value="Residencial Reserva Palmital 1" onclick="buttonRadio(57)">
                                  <label>Residencial Reserva Palmital 1</label>
                               </div>
                             </div>
                             <div class="col-i">
                              <div class="group-check">
                                <input type="checkbox" value="MN Concept" onclick="buttonRadio(58)">
                                <label>MN Concept</label>
                               </div>
                               <div class="group-check">
                                <input type="checkbox"  value="Jd. Esmeralda" onclick="buttonRadio(59)">
                                <label>Jd. Esmeralda</label>
                               </div>
                               <div class="group-check">
                                <input type="checkbox"  value="Praças Esmeraldas" onclick="buttonRadio(60)">
                                <label>Praças Esmeraldas</label>
                             </div>
                             <div class="group-check">
                              <input type="checkbox" value="Enseada" onclick="buttonRadio(61)">
                              <label>Enseada</label>
                           </div>
                           <div class="group-check">
                            <input type="checkbox" value="Verana Parque Alvorada" onclick="buttonRadio(62)">
                            <label>Verana Parque Alvorada</label>
                           </div>
                          </div>
                         </div>
                        </div>
                        <div class="selector-i">
                         <div class="respansive-select">
                          <div class="select-option">
                            <select onclick="buttonSelect('Preço aluguel')">
                              <option id="precoSelect">Preço aluguel</option>
                           </select>  
                           <div class="col-option-select col-i"  id="valores">
                            <div class="select-i-option">
                              <input type="checkbox"  value="400/600" name="valor1"  onclick="buttonRadio(63)"/>
                              <label>R$ 400,00 à R$ 600,00</label>
                            </div>
                            <div class="select-i-option">
                             <input type="checkbox"  value="700/800"  name="valor" onclick="buttonRadio(64)" />
                             <label>R$ 800,00 à R$ 900,00</label>
                           </div>
                           <div class="select-i-option">
                             <input type="checkbox" value="1800/1.200,00"  name="valor" onclick="buttonRadio(65)"/>
                             <label>R$ 1.0000,00 à R$ 1.200,00</label>
                           </div>
                           <div class="select-i-option">
                             <input type="checkbox" value="1300" name="valor" onclick="buttonRadio(66)"/>
                             <label>R$ 1.300,00</label>
                           </div>
                          </div> 
                          </div>
                          <div class="select-option">
                             <select  onclick="buttonSelect('Quartos')">
                              <option>Quartos</option>
                             </select>
                             <div class="col-option-select-3 col-i" id="quarto">
                              <div class="select-i-option">
                                <input type="checkbox" value="1+" name="um" onclick="buttonRadio(67)"/>
                                <label>1+</label>
                              </div>
                              <div class="select-i-option">
                               <input type="checkbox" value="2+" name="dois" onclick="buttonRadio(68)"/>
                               <label>2+</label>
                             </div>
                             <div class="select-i-option">
                              <input type="checkbox" value="3+" name="tres" onclick="buttonRadio(69)"/>
                              <label>3+</label>
                            </div>
                            <div class="select-i-option">
                              <input type="checkbox" value="2+" name="quatro" onclick="buttonRadio(70)"/>
                              <label>4+</label>
                            </div>
                            </div> 
                          </div>
                         </div>
                          <div class="respansive-select">
                            <div class="select-option">
                              <select onclick="buttonSelect('Condiçoes')">
                                <option>Condiçoes</option>
                              </select>
                              <div class="col-option-select-3 col-i"  id="condicao">
                                <div class="select-i-option">
                                  <input type="checkbox" value="Pronto para morar" name="condicoes_morar" onclick="buttonRadio(71)" />
                                  <label>Pronto para morar</label>
                                </div>
                                <div class="select-i-option">
                                 <input type="checkbox" value="Em Construção" name="contrucao" onclick="buttonRadio(72)"/>
                                 <label>Em Construção</label>
                               </div>
                              </div> 
                            </div>
                            <div class="respansive-select">
                              <div class="select-option">
                                 <select onclick="buttonSelect('Caracteristicas')">
                                   <option>Caracteristicas</option>
                                 </select>
                              </div>
                            </div>
                        </div>
                      </div>
                      <div class="row-i-3" id="caracteristica">
                        <div class="align-col-select">
                        <div class="col-i">
                          <div class="group-check">
                           <input type="checkbox" value="Informações"  name="informacao" onclick="buttonRadio(73)">
                           <label>Informações</label>
                          </div>
                          <div class="group-check">
                           <input type="checkbox" value="Acadêmia" name="academia" onclick="buttonRadio(74)">
                           <label>Acadêmia</label>
                          </div>
                          <div class="group-check">
                           <input type="checkbox"  value="Salão de festas" name="salao_festa" onclick="buttonRadio(75)">
                           <label>Salão de festas</label>
                          </div>
                          <div class="group-check">
                           <input type="checkbox" value="Piscina aquecida" name="pisina_aquecido" onclick="buttonRadio(76)">
                           <label>Piscina aquecida</label>
                          </div>
                          <div class="group-check">
                           <input type="checkbox" value="Quadra de volei área" name="quadra_volei" onclick="buttonRadio(77)">
                           <label>Quadra de volei área</label>
                          </div>
                          <div class="group-check">
                           <input type="checkbox" value="Área de churrasco" name="area_churrasco" onclick="buttonRadio(78)">
                           <label>Área de churrasco</label>
                          </div>  
                         <div class="group-check">
                          <input type="checkbox" value="Coworking" name="coworkingo" onclick="buttonRadio(79)">
                          <label>Coworking</label>
                         </div> 
                         <div class="group-check">
                          <input type="checkbox" value="Elevador de Serviço" name="elevador_servico" onclick="buttonRadio(80)">
                          <label>Elevador de Serviço</label>
                         </div> 
                         <div class="group-check">
                          <input type="checkbox" value="Portaria" name="portaria" onclick="buttonRadio(81)">
                          <label>Portaria</label>
                         </div> 
                         <div class="group-check">
                          <input type="checkbox" value="Àrea para musculação" name="area_musculacao" onclick="buttonRadio(82)">
                          <label>Àrea para musculação</label>
                         </div> 
                      </div>
                       <div class="col-i">
                          <div class="group-check">
                           <input type="checkbox" value="Área da planta residencial" name="area_planta" onclick="buttonRadio(83)">
                           <label>Área da planta residencial</label>
                          </div>
                          <div class="group-check">
                           <input type="checkbox" value="Total de unidades" name="total_unidades" onclick="buttonRadio(84)">
                           <label>Total de unidades</label>
                          </div>
                          <div class="group-check">
                           <input type="checkbox" value="Piscina Adulto" name="psicina_aduto" onclick="buttonRadio(85)">
                           <label>Piscina Adulto</label>
                          </div>
                          <div class="group-check">
                           <input type="checkbox" value="Piscina aquecida" name="pisina_aqu" onclick="buttonRadio(86)">
                           <label>Piscina aquecida</label>
                          </div>
                          <div class="group-check">
                           <input type="checkbox"  value="Salão de Jogos" name="salao_jogos" onclick="buttonRadio(87)">
                           <label>Salão de Jogos</label>
                          </div>
                          <div class="group-check">
                           <input type="checkbox" value="Campo de Futebol" name="campo_futebol" onclick="buttonRadio(88)">
                           <label>Campo de Futebol</label>
                          </div>  
                         <div class="group-check">
                          <input type="checkbox" value="Cerca Elétrica" name="cerca_eletrica" onclick="buttonRadio(89)">
                          <label>Cerca Elétrica</label>
                         </div> 
                         <div class="group-check">
                          <input type="checkbox" value="Elevador de Proprietário" name="elevador_proprietario" onclick="buttonRadio(90)">
                          <label>Elevador Proprietário</label>
                         </div> 
                         <div class="group-check">
                          <input type="checkbox" value="Social" name="social" onclick="buttonRadio(91)">
                          <label>Social</label>
                         </div> 
                         <div class="group-check">
                          <input type="checkbox" value="Varanda grill" name="varanda_grill" onclick="buttonRadio(92)">
                          <label>Varanda grill</label>
                         </div> 
                       </div>
                       <div class="col-i">
                        <div class="group-check">
                         <input type="checkbox" value="Área do terreno residencial" name="area_terreno_residencial" onclick="buttonRadio(93)" >
                         <label>Área do terreno residencial</label>
                        </div>
                        <div class="group-check">
                         <input type="checkbox" value="Laser" name="laser" onclick="buttonRadio(94)">
                         <label>Lazer</label>
                        </div>
                        <div class="group-check">
                         <input type="checkbox" value="Churrasqueira" name="churrasqueira" onclick="buttonRadio(95)">
                         <label>Churrasqueira</label>
                        </div>
                        <div class="group-check">
                         <input type="checkbox" value="Piscina fria" name="piscina_fria" onclick="buttonRadio(96)">
                         <label>Piscina Fria</label>
                        </div>
                        <div class="group-check">
                         <input type="checkbox"  value="Praça" name="praca" onclick="buttonRadio(97)">
                         <label>praça</label>
                        </div>
                        <div class="group-check">
                         <input type="checkbox"  value="Área de sinuca" name="area_sinuca" onclick="buttonRadio(98)">
                         <label>Área de sinuca</label>
                        </div>  
                       <div class="group-check">
                        <input type="checkbox" value="Quadra Tênis" name="quadra_tenis" onclick="buttonRadio(99)">
                        <label>Quadra Tênis</label>
                       </div> 
                       <div class="group-check">
                        <input type="checkbox" value="Viveiro" name="viveiro" onclick="buttonRadio(100)">
                        <label>Viveiro</label>
                        </div> 
                        <div class="group-check">
                          <input type="checkbox" value="Serviços" name="servico" onclick="buttonRadio(101)">
                          <label>Serviço</label>
                        </div> 
                        <div class="group-check">
                          <input type="checkbox" value="Hall social privativo" name="hall_social" onclick="buttonRadio(102)">
                          <label>Hall social privativo</label>
                        </div> 
                       </div>
                      </div>
                     </div>
                     <div class="list-search">
                      <ul></ul>
                    </div>
                    </div>
                    <div class="button-search">
                       <button id="clearSearch" type="button">Limpar Filtro</button>
                       <button type="submit" class="active">Buscar</button>
                    </div>
                </div>
              </form>
              </div>
            </div>
            <div class="item-page-col">
              <h3>Aluga Rápido Apartamentos</h3>
              <div class="cards" id="apartamento"></div>
              <div class="paginate" id="pag-1"></div></div>
            <div class="page-public">
             <div class="slider">
              <div class="slides">
                 <input type="radio" name="radio-btn" id="radio1">
                 <input type="radio" name="radio-btn" id="radio2">
                 <input type="radio" name="radio-btn" id="radio3">
                 <div class="slide first">
                    <img src="assets/images/5242866.jpg" alt="image1">
                 </div>
                 <div class="slide">
                  <img src="assets/images/5242876.jpg" alt="image2">
                 </div>
                 <div class="slide">
                   <img src="assets/images/5955801.jpg" alt="image3">
                 </div>
                  <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                  </div>
              </div>
              <div class="manual-navigation">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
             </div>
             </div>
            </div>

            <section id="aluguel">
             <div class="item-page-col">
                <h3>Aluga Rápido Residências</h3>
                <div class="cards" id="casa"> </div>
                 <div class="paginate" id="pag-2"> </div>
              </div>
            </section>
            <div class="item-page">
              <h1>O imóvel certo para cada tipo de pessoa :)</h1>
              <p>Qual o perfil de imóvel que está buscando hoje?</p>
             <div class="group-icons">
             <div class="icon-i" data-aos="fade-right" data-aos-delay="100">
              <i class="fa-solid fa-house"></i>
              <p>Um imovel só pra você</p>
              <div class="hover-i">
                  <h3>Um imovel só pra vocês</h3>
                  <a href="#"><p>Mais detalhes</p></a>
              </div>
             </div>
             <div class="icon-i" data-aos="fade-right" data-aos-delay="250">
               <i class="fa-solid fa-building"></i>
               <p>Seu Apartamento dos seus sonhos</p>
               <div class="hover-i">
                  <h3>Seu Apartamento dos seus sonhos</h3>
                  <a href="#"><p>Mais detalhes</p></a>
               </div>
              </div>
             <div class="icon-i" data-aos="fade-right" data-aos-delay="350">
              <div class="hover-i">
                  <h3>Um local para seus negócios</h3>
                  <a href="#"><p>Mais detalhes</p></a>
              </div>
              <i class="fa-solid fa-shop"></i>
              <p>Um local para seus negócios</p>
              <div class="hover-i">
                  <h3>Um local para seus negócios</h3>
                  <a href="#"><p>Mais detalhes</p></a>
              </div>
             </div>
           </div>
           </div> 
            <div class="item-page-col">
              <h3>Venda de imóveis em destaque</h3>
            <div class="cards" id="destaque"></div>
           <div class="paginate" id="pag-3"></div>
          </div>
          <div class="maps">
            <h1>Venha conhecer nossa matriz </h1>
            <iframe width="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3693.461914161926!2d-49.93947432534808!3d-22.222546413774594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94bfd0b01bb96d21%3A0x948601b6e967f1a3!2sAv.%20das%20Esmeraldas%20-%20Jardim%20Tangara%2C%20Mar%C3%ADlia%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1691111732457!5m2!1spt-BR!2sbr"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
         <?php $render('footer'); ?>
