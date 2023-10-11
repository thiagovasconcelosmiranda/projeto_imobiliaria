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
                 <h5>Escola as opções de buscas</h5>
                 <form method="POST" action="<?=$base;?>/busca-imovel">
                  <div class="button-i">
                     <div class="respansive-button">
                       <button onclick="butonClick('Preço de aluguels')" type="button">Alugar</button>
                       <button onclick="butonClick('Preço da vendas')" type="button">Vender</button>
                       <button onclick="butonClick('Comprar')" type="button">Comprar</button>
                       <button onclick="butonClick('Impreendimento')" class="button" type="button">Impreendimento</button>
                       <button onclick="butonClick('Investimento')" class="button" type="button">Investimento</button> 
                     </div>
                  </div>
                   <div class="group-select-row">
                       <div class="align-select">
                               <select class="select-item" onclick="selectClick('Imóvel')" name="">
                                 <option value="">Qual tipo de imóvel?</option>
                                </select>
                                <select  onclick="selectClick('Região')">
                                  <option value="">Região</option>
                                  <option value="Zona Leste">Zona Leste</option>
                                  <option value="Zona Oeste">Zona Oeste</option>
                                  <option value="Zona Norte">Zona Norte</option>
                                  <option value="Zona Sul">Zona Sul</option>
                                </select>
                                <select onclick="selectClick('Bairro')">
                                  <option value="">Bairro</option>
                               </select>
                               <select onclick="selectClick('Edificio/Condominio')">
                                  <option value="">Edificio/Condominio</option>
                               </select>
                         </div>
                         <div class="group-option-row" >
                              <div class="group-option-col">
                                 <p>Comercial</p>
                                 <div class="group-check">
                                    <input type="checkbox" value="comercial/casa" name="tipo/casa" onclick="buttonRadio(0)">
                                    <label>Casa</label>
                                  </div>
                                  <div class="group-check">
                                    <input type="checkbox"  value="comercial/Galpão/Barracão" name="tipo/galpão" onclick="buttonRadio(1)">
                                    <label>Galpão/Barracão</label>
                                  </div>
                                  <div class="group-check">
                                    <input type="checkbox" value="comecial/Loja em shopping" name="tipo/loja_shopping" onclick="buttonRadio(2)">
                                    <label>Loja em shopping</label>
                                  </div>
                                  <div class="group-check">
                                     <input type="checkbox"  value="comercial/Loja" name="tipo/loja" onclick="buttonRadio(3)">
                                     <label>Loja</label>
                                  </div>
                                  <div class="group-check">
                                     <input type="checkbox"  value="comercial/Salão Varejo" name="tipo/salao_varejo" onclick="buttonRadio(4)">
                                     <label>Salão Varejo</label>
                                  </div>
                                  <div class="group-check">
                                    <input type="checkbox" value="comercial/Sata de condominio" name="tipo_edificio-apartamento"  onclick="buttonRadio(5)">
                                    <label>Edificio/Apartamento</label>
                                 </div>
                               </div>
                              <div class="group-option-col">
                                <p>Residêncial</p>
                                <div class="group-check">
                                    <input type="checkbox" value="residencial/Apartamento" name="tipo/apartamento" onclick="buttonRadio(6)">
                                    <label>Apartamento</label>
                                </div>
                                <div class="group-check">
                                <input type="checkbox" value="residencial/Casa" name="tipo/casa" onclick="buttonRadio(7)">
                                <label>Casa</label>
                             </div>
                             <div class="group-check">
                                <input type="checkbox" value="residencial/Casa condomínio" name="tipo/condominio"  onclick="buttonRadio(8)">
                                <label>Casa condomínio</label>
                             </div>
                             <div class="group-check">
                              <input type="checkbox" value="residencial/Chacará" name="tipo/chacara" onclick="buttonRadio(9)">
                              <label>Chacará</label>
                            </div>
                              </div>
                              <div class="group-option-col">
                                 <p>Terreno</p>
                                 <div class="group-check" >
                                   <input type="checkbox" value="terreno/Àrea" name="tipo/area" onclick="buttonRadio(10)">
                                   <label>terreno/Àrea</label>
                                 </div>
                                 <div class="group-check">
                                   <input type="checkbox" value="terreno/Dentro do condomínio" name="tipo/area_condominio" onclick="buttonRadio(11)">
                                   <label>Dentro do condomínio</label>
                                 </div>
                                <div class="group-check">
                                  <input type="checkbox"  value="terreno/Fora do condomínio" name="tipo/fora_condominio" onclick="buttonRadio(12)">
                                  <label>Fora do condomínio</label>
                                </div>
                              </div>
                         </div>
                         
                         
                         <div class="group-option-row-1">
                              <div class="group-option-col">
                                 <p>Marília</p>
                                 <div class="group-check">
                                    <input type="checkbox" value="Centro"  name="bairro" onclick="buttonRadio(13)">
                                    <label>Centro</label>
                                 </div>
                                 <div class="group-check">
                                   <input type="checkbox" value="Altos da Colina" name="bairro" onclick="buttonRadio(14)">
                                   <label>Altos da Colina</label>
                                 </div>
                                 <div class="group-check">
                                    <input type="checkbox"  value="Salão de festas" name="bairro" onclick="buttonRadio(15)">
                                    <label>Armando Mascaro</label>
                                  </div>
                                  <div class="group-check">
                                    <input type="checkbox" value="Bassan" name="bairro" onclick="buttonRadio(16)">
                                    <label>Bassan</label>
                                  </div>
                                  <div class="group-check">
                                     <input type="checkbox" value="Bosque" name="bairro" onclick="buttonRadio(17)">
                                     <label>Bosque</label>
                                  </div>
                                  <div class="group-check">
                                     <input type="checkbox" value="Castelo Branco" name="castelo_branco" onclick="buttonRadio(18)">
                                     <label>Castelo Branco</label>
                                  </div>  
                                  <div class="group-check">
                                     <input type="checkbox" value="Cavalieri 2" name="bairro" onclick="buttonRadio(19)">
                                     <label>Cavalieri 2</label>
                                  </div> 
                                  <div class="group-check">
                                    <input type="checkbox" value="Cetro (Padre Nóbrega)" name="bairro" onclick="buttonRadio(20)">
                                    <label>Cetro (Padre Nóbrega)</label>
                                  </div> 
                                  <div class="group-check">
                                    <input type="checkbox" value="Portaria" name="bairro" onclick="buttonRadio(21)">
                                    <label>Portaria</label>
                                 </div> 
                               </div>
                              <div class="group-option-col">
                                <div class="group-check">
                                  <input type="checkbox" value="Altaneira" name="bairro" onclick="buttonRadio(22)">
                                  <label>Altaneira</label>
                                </div>
                                <div class="group-check">
                                  <input type="checkbox" value="Banzato" name="bairro" onclick="buttonRadio(23)">
                                  <label>Banzato</label>
                                </div>
                                <div class="group-check">
                                   <input type="checkbox" value="Betel" name="bairro" onclick="buttonRadio(24)">
                                   <label>Betel</label>
                                </div>
                                <div class="group-check">
                                    <input type="checkbox" value="Canaá" name="bairro" onclick="buttonRadio(25)">
                                    <label>Canaá</label>
                                </div>
                               <div class="group-check">
                                 <input type="checkbox"  value="Santa Antonieta 2" name="bairro" onclick="buttonRadio(26)">
                                 <label>Santa Antonieta 2</label>
                               </div>
                               <div class="group-check">
                                 <input type="checkbox" value="Parque das Nações" name="bairro" onclick="buttonRadio(27)">
                                 <label>Parque das Nações</label>
                              </div>  
                              <div class="group-check">
                                <input type="checkbox" value="Jânio Quadro" name="bairro" onclick="buttonRadio(28)">
                                <label>Jânio Quadro</label>
                              </div> 
                              </div>
                              <div class="group-option-col">
                                 <div class="group-check">
                                    <input type="checkbox" value="César Almeida" name="bairro" onclick="buttonRadio(29)">
                                    <label>César Almeida</label>
                                  </div> 
                                  <div class="group-check">
                                   <input type="checkbox" value="Social" name="social" onclick="buttonRadio(30)">
                                   <label>Social</label>
                                </div> 
                                <div class="group-check">
                                  <input type="checkbox"  value="terreno/Fora do condomínio" name="tipo/fora_condominio" onclick="buttonRadio(31)">
                                  <label>Fora do condomínio</label>
                                </div>
                              </div>
                         </div>
                         <div class="group-option-row-3">
                         <div class="group-option-col">
                                 <p>Marília</p>
                                 <div class="group-check">
                                    <input type="checkbox" value="Valle do Canaã"  name="bairro" onclick="buttonRadio(32)">
                                    <label>Valle do Canaã</label>
                                 </div>
                                 <div class="group-check">
                                   <input type="checkbox" value="Paineiras Home Design" name="condominio" onclick="buttonRadio(33)">
                                   <label>Paineiras Home Design</label>
                                 </div>
                                 <div class="group-check">
                                    <input type="checkbox"  value="Residencial Jd. Villandry" name="ends" onclick="buttonRadio(34)">
                                    <label>Residencial Jd. Villandry</label>
                                  </div>
                                  <div class="group-check">
                                    <input type="checkbox" value="Green Valley" name="condominio" onclick="buttonRadio(35)">
                                    <label>Green Valley</label>
                                  </div>
                                  <div class="group-check">
                                     <input type="checkbox" value="Condomínio Moradas Marília" name="condominio" onclick="buttonRadio(36)">
                                     <label>Condomínio Moradas Marília</label>
                                  </div>
                                  <div class="group-check">
                                     <input type="checkbox" value="Castelo Branco" name="ends" onclick="buttonRadio(37)">
                                     <label>Castelo Branco</label>
                                  </div>  
                                  <div class="group-check">
                                     <input type="checkbox" value="Parque Casablanca" name="bairro" onclick="buttonRadio(38)">
                                     <label>Parque Casablanca</label>
                                  </div> 
                                  <div class="group-check">
                                    <input type="checkbox" value="Cetro (Padre Nóbrega)" name="ends" onclick="buttonRadio(39)">
                                    <label>Palazzo</label>
                                  </div> 
                                  <div class="group-check">
                                    <input type="checkbox" value="AV Rio Branco" name="ends" onclick="buttonRadio(40)">
                                    <label> AV Rio Branco</label>
                                 </div> 
                               </div>
                               <div class="group-option-col">
                                 <div class="group-check">
                                    <input type="checkbox" value="Condomínio Village do Bosque"  name="condominio" onclick="buttonRadio(41)">
                                    <label>Condomínio Village do Bosque</label>
                                 </div>
                                 <div class="group-check">
                                   <input type="checkbox" value="Villa Flora III" name="bairro" onclick="buttonRadio(42)">
                                   <label>Villa Flora III</label>
                                 </div>
                                 <div class="group-check">
                                    <input type="checkbox"  value="Edificio Praça Marechal<" name="condominio" onclick="buttonRadio(43)">
                                    <label>Edificio Praça Marechal</label>
                                  </div>
                                  <div class="group-check">
                                    <input type="checkbox" value="Bassan" name="condominio" onclick="buttonRadio(44)">
                                    <label>Edifício Módena</label>
                                  </div>
                                  <div class="group-check">
                                     <input type="checkbox" value="Edifício Módena" name="ends" onclick="buttonRadio(45)">
                                     <label>Residencial Reserva Palmital 1</label>
                                  </div>
                                  <div class="group-check">
                                     <input type="checkbox" value="Terras da Fazenda" name="ends" onclick="buttonRadio(46)">
                                     <label>Terras da Fazenda</label>
                                  </div>  
                                  <div class="group-check">
                                     <input type="checkbox" value="Cavalieri 2" name="ends" onclick="buttonRadio(47)">
                                     <label>Cavalieri 2</label>
                                  </div> 
                                  <div class="group-check">
                                    <input type="checkbox" value="Cetro (Padre Nóbrega)" name="bairro" onclick="buttonRadio(48)">
                                    <label>Cetro (Padre Nóbrega)</label>
                                  </div> 
                                  <div class="group-check">
                                    <input type="checkbox" value="Condomínio Santa Gertrudes" name="condominio" onclick="buttonRadio(49)">
                                    <label>Condomínio Santa Gertrudes</label>
                                 </div> 
                               </div>
                               <div class="group-option-col">
                                 <div class="group-check">
                                    <input type="checkbox" value="Edifício Atlanta"  name="condominio" onclick="buttonRadio(50)">
                                    <label>Edifício Atlanta</label>
                                 </div>
                                 <div class="group-check">
                                   <input type="checkbox" value="MN Concept" name="condominio" onclick="buttonRadio(51)">
                                   <label>MN Concept</label>
                                 </div>
                                 <div class="group-check">
                                    <input type="checkbox"  value="Jd. Esmeralda" name="bairro" onclick="buttonRadio(52)">
                                    <label>Jd. Esmeralda</label>
                                  </div>
                                  <div class="group-check">
                                    <input type="checkbox" value="Praças Esmeraldas" name="condominio" onclick="buttonRadio(53)">
                                    <label>Praças Esmeraldas</label>
                                  </div>
                                  <div class="group-check">
                                     <input type="checkbox" value="Enseada" name="condominio" onclick="buttonRadio(54)">
                                     <label>Enseada</label>
                                  </div>
                                  <div class="group-check">
                                     <input type="checkbox" value="Verana Parque Alvorada" name="bairro" onclick="buttonRadio(55)">
                                     <label>Verana Parque Alvorada</label>
                                  </div>  
                                  <div class="group-check">
                                     <input type="checkbox" value="Residencial Sol 2" name="bairro" onclick="buttonRadio(56)">
                                     <label>Cavalieri 2</label>
                                  </div> 
                                  <div class="group-check">
                                    <input type="checkbox" value="Cavalieri 2" name="bairro" onclick="buttonRadio(57)">
                                    <label>Residencial Sol 2</label>
                                  </div> 
                                  <div class="group-check">
                                    <input type="checkbox" value="Vitória" name="bairro" onclick="buttonRadio(58)">
                                    <label>Vitória</label>
                                 </div> 
                               </div>
                         </div>
                         <div class="align-select">
                               <select  id="preco" name="" onclick="selectClick('Preço')">
                                  <option id="title-option" value=""></option>
                               </select>
                                <select name="qtd_quarto" onclick="selectClick('Quartos')">
                                  <option  value="">Quartos</option>
                                  <option value="1">1+</option>
                                  <option value="2">2+</option>
                                  <option value="3">3+</option>
                                  <option value="4">4+</option>
                                </select>
                               <select name="condicao"onclick="selectClick('Condiçoes')">
                               <option value="">Condição</option>
                                  <option value="Pornto para morar">Pornto para morar</option>
                                  <option value="Em construção"> Em construção</option>
                               </select>
                               <select name=""onclick="selectClick('Caracteristica')">
                                  <option value="">Caracteristica</option>
                               </select>
                         </div>
                         <div class="group-option-row-2">
                             <div class="group-option-col">
                                 <div class="group-check">
                                    <input type="checkbox" value="informações"  name="outros" onclick="buttonRadio(59)">
                                    <label>informações</label>
                                 </div>
                                 <div class="group-check">
                                   <input type="checkbox" value="Academia" name="outros" onclick="buttonRadio(60)">
                                   <label>Academia</label>
                                 </div>
                                 <div class="group-check">
                                    <input type="checkbox"  value="Food truck lounge" name="outros" onclick="buttonRadio(61)">
                                    <label>Food truck lounge</label>
                                  </div>
                                  <div class="group-check">
                                    <input type="checkbox" value="Salão de Festa"name="outros" onclick="buttonRadio(62)">
                                    <label>Salão de Festa</label>
                                  </div>
                                  <div class="group-check">
                                     <input type="checkbox" value="churrasqueira eletrica" name="outros" onclick="buttonRadio(63)">
                                     <label>churrasqueira eletrica</label>
                                  </div>
                                  <div class="group-check">
                                     <input type="checkbox" value="pcina quente" name="outros" onclick="buttonRadio(64)">
                                     <label>pcina quente</label>
                                  </div>  
                                  <div class="group-check">
                                     <input type="checkbox" value="Piscina Aquecida" name="outros" onclick="buttonRadio(65)">
                                     <label>Piscina Aquecida</label>
                                  </div> 
                                  <div class="group-check">
                                    <input type="checkbox" value="Cetro (Padre Nóbrega)" name="outros" onclick="buttonRadio(66)">
                                    <label>Cetro (Padre Nóbrega)</label>
                                  </div> 
                                  <div class="group-check">
                                    <input type="checkbox" value="Banheira" name="outros" onclick="buttonRadio(67)">
                                    <label>Banheira</label>
                                 </div> 
                               </div>
                              <div class="group-option-col">
                                <div class="group-check">
                                  <input type="checkbox" value="Quadra de Vôlei de areia" name="outros" onclick="buttonRadio(68)">
                                  <label>Quadra de Vôlei de areia</label>
                                </div>
                                <div class="group-check">
                                  <input type="checkbox" value="Torre(s)" name="outros" onclick="buttonRadio(69)">
                                  <label>Torre(s)</label>
                                </div>
                                <div class="group-check">
                                   <input type="checkbox" value="Piscina Aquecida" name="outros" onclick="buttonRadio(70)">
                                   <label>Piscina Aquecida</label>
                                </div>
                                <div class="group-check">
                                    <input type="checkbox" value="Quiosque" name="outros" onclick="buttonRadio(71)">
                                    <label>Quiosque</label>
                                </div>
                               <div class="group-check">
                                 <input type="checkbox"  value="Elevador de Serviço" name="outros" onclick="buttonRadio(72)">
                                 <label>Elevador de Serviço</label>
                               </div>
                               <div class="group-check">
                                 <input type="checkbox" value="Parque das Nações" name="outros" onclick="buttonRadio(73)">
                                 <label>Parque das Nações</label>
                              </div>  
                              <div class="group-check">
                                <input type="checkbox" value="Jânio Quadro" name="outros" onclick="buttonRadio(74)">
                                <label>Jânio Quadro</label>
                              </div> 
                              </div>
                              <div class="group-option-col">
                                 <div class="group-check">
                                    <input type="checkbox" value="Elevador proprietários" name="outros" onclick="buttonRadio(75)">
                                    <label>Elevador proprietários</label>
                                  </div> 
                                  <div class="group-check">
                                   <input type="checkbox" value="Coworking" name="outros" onclick="buttonRadio(76)">
                                   <label>Coworking</label>
                                </div> 
                                <div class="group-check">
                                  <input type="checkbox"  value="Musculação" name="outros" onclick="buttonRadio(77)">
                                  <label>Musculação</label>
                                </div>
                                <div class="group-check">
                                     <input type="checkbox" value="Sala de jogos" name="outros" onclick="buttonRadio(78)">
                                     <label>Sala de jogos</label>
                                  </div> 
                              </div>
                         </div>
                    </div>
                    <div class="list-search" >
                      <ul></ul> 
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
                 <div class="paginate" id="pag-1"></div>
            </div>
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
          <?php $render('login-item');?>
          <script type="text/javascript" src="<?= $base;?>/assets/js/image-sliders.js"> </script>
          <?php $render('footer');?>

        