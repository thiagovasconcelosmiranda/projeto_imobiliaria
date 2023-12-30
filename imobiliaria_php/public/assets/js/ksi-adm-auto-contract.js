contractHtml('');

if (document.getElementById('auto-fill-contract-rent')) {
    document.getElementById('auto-fill-contract-rent').addEventListener('click', () => {
        errorInputContract('rent');
    });
}



if (document.getElementById('auto-fill-contract-sale')) {
    document.getElementById('auto-fill-contract-sale').addEventListener('click', () => {
        errorInputContract('sale');
    });

}
if (document.getElementById('auto-fill-contract-guarantor')) {
    document.getElementById('auto-fill-contract-guarantor').addEventListener('click', () => {
        errorInputContract('guarantor');
    });
}

if (document.getElementById('button-benefit')) {
    document.getElementById('button-benefit').addEventListener('click', () => {
        errorInputContract('upload');
    })
}

if (document.getElementById('button-upload')) {
    document.getElementById('button-upload').addEventListener('click', () => {

       errorInputUploadOwner()
    })
}

function errorInputUploadOwner() {
    let count = 0;
    let spanSelect = document.getElementById('msg-42');
    let spanUpdate = document.getElementById('msg-43');

    document.querySelectorAll('#form input, select').forEach(item => {
        //Verifica se os campos do inputs do proprietário estão preenchidos.
        if (!parseInt(item.id)) {
            if (!item.value) {
                item.classList.add('error-select');
                spanSelect.style.display="flex";
            } else {
                item.classList.remove('error-select');
                spanSelect.style.opacity="0";
                count++;
            }
        }

        //Verifica se os campos do upload do proprietário está com arquivo
        if (item.type === "file") {
            if (!item.value) {
               spanUpdate.style.display = "flex";
            } else {
                spanUpdate.style.opacity = "0";
            }
        }
    });

    if (count === 2) {
        document.getElementById('button-upload').type = 'submit';
    }
}

function errorInputContract(contract) {
    let idRent = 0;
    let idSale = 0;
    let count = 0;

    document.querySelectorAll('.group-contract').forEach(item => {
        item.querySelectorAll('select').forEach(select => {
            if (parseInt(select.id)) {
                if (!select.value) {
                    select.style.border = "1px solid red";
                    document.getElementById('msg-' + select.id).style.display = "flex";
                } else {
                    select.style.border = "1px solid #ccc";
                    document.getElementById('msg-' + select.id).style.opacity = "0";

                    if (select.name === 'rent') {
                        idRent = select.value;
                    }

                    if (select.name === 'sale') {
                        idSale = select.value;
                    }
                    count++;
                }
            }

        });


        item.querySelectorAll(`.${contract} input`).forEach(input => {

            if (!input.value) {
                input.style.borderBottom = "1px solid red";
            } else {
                input.style.borderBottom = "1px solid transparent";
            }

        });
    });


    if (idRent != 0 && idSale != 0) {
        urlAjaxUser(idRent, idSale, contract);
    }
}

async function urlAjaxUser(idRent, idSale) {
    var req = await fetch(`${baseUrl}/ksi/adm/ajax/contract-user?idRent=${idRent}&idSale=${idSale}`, {
        method: "get",
    })

    let json = await req.json();

    if (json.error != '') {
        alert(json.error);
        return;
    }
    contractHtml(json);
}

function contractHtml(list = []) {
    let sale = '';
    let rent = "";
    let guarantor = "";

    if (document.querySelector(`.rent`)) {
        rent = document.querySelector(`.rent`).innerHTML =
            `
           <div class="contract-title">
             <img src="${baseUrl}/assets/images/logo.png"/>
             <h1>CONTRATO DE LOCAÇÃO</h1>
                <div class="icon-option">
                  <i onclick="window.print()" class="fa-solid fa-print"></i>
                </div>
             </div>
             <div class="contract-info">
                <p>Pelo presente instrumento particular de locação de imóvel residencial, de um lado:</p>
                <p> Nome: <input type="text" style=" border: 0; border-bottom: 1px solid #ccc;" value="${(list[0]) != undefined ? (list[0].nome) : ''}" placeholder="ex: ex: Thiago Oliveira ">, nacionalidade: <input style=" border: 0; border-bottom: 1px solid #ccc;" type="text" placeholder="ex: brasileira"> 
                , estado civil <input style=" border: 0; border-bottom: 1px solid #ccc;" type="text" placeholder="ex: solteiro">  , profissão <input style=" border: 0; border-bottom: 1px solid #ccc;" type="text" placeholder="ex: programador">,
                portadordo RG nº <input style=" border: 0; border-bottom: 1px solid #ccc;" type="text" id="rg" value="" placeholder="00.000.000-0/XX"> , inscrito no CPF nº <input style=" border: 0; border-bottom: 1px solid #ccc;" type="text"
                value="${(list[0]) != undefined ? (list[0].cpf) : ''}" style=" border: 0; border-bottom: 1px solid #ccc;" placeholder="000.000.000-00">, residente e domiciliado na
                Rua <input type="text" style=" border: 0; border-bottom: 1px solid #ccc;" value="${(list[0]) != undefined ? (list[0].end) : ''}" placeholder="AV: Republica">, número <input type="number" style=" border: 0; border-bottom: 1px solid #ccc;" value="${(list[0]) != undefined ? (list[0].num) : ''}" placeholder="11">, bairro
                <input type="text"style=" border: 0; border-bottom: 1px solid #ccc;" value="${(list[0]) != undefined ? (list[0].bairro) : ''}" placeholder=" ex:Santa Antonieta">,
                cidade <input type="text" style=" border: 0; border-bottom: 1px solid #ccc;" value="${(list[0]) != undefined ? (list[0].cidade) : ''}" placeholder="Marilía">, estado <input type="text"style=" border: 0; border-bottom: 1px solid #ccc;" value="${(list[0]) != undefined ? (list[0].uf) : ''}" placeholder="São Paulo">, CEP
                <input type="text" style=" border: 0; border-bottom: 1px solid #ccc;" value="${(list[0]) != undefined ? (list[0].cep) : ''}" placeholder="XXXXX-000">, celular <input type="text"style=" border: 0; border-bottom: 1px solid #ccc;" value="${(list[0]) != undefined ? (list[0].celular) : ''}" placeholder="+55 (00) 9 0000-0000">,
                e-mail: <input type="text"style=" border: 0; border-bottom: 1px solid #ccc;" value="${(list[0]) != undefined ? (list[0].email) : ''}" placeholder="xxxxxxxxxx@xxxxxxxx"> , neste ato denominado LOCADOR, e de outro
               lado</p>
    
             <p> <input type="text" style=" border: 0; border-bottom: 1px solid #ccc;" value="${(list[1]) != undefined ? (list[1].nome) : ''}" placeholder="NOME COMPLETO DO INQUILINO">, nacionalidade <input style=" border: 0; border-bottom: 1px solid #ccc;" type="text" placeholder="ex: Brasileiro">, estado civil (<input style=" border: 0; border-bottom: 1px solid #ccc;"
                type="text" placeholder="ex: casado">,
                <input style=" border: 0; border-bottom: 1px solid #ccc;" type="text" placeholder="qualificar o cônjuge também">), profissão <input style=" border: 0; border-bottom: 1px solid #ccc;" type="text" placeholder="ex policial"> , portador do RG nº <input style=" border: 0; border-bottom: 1px solid #ccc;"
                type="text" value="" placeholder="000.000.000-00"> ,
                inscrito no CPF nº <input style=" border: 0; border-bottom: 1px solid #ccc;" type="text" value="${(list[1]) != undefined ? (list[1].cpf) : ''}" id="cpf_inq" placeholder=" 000.000.000-00"> , celular <input style=" border: 0; border-bottom: 1px solid #ccc;" type="text"
                value="${(list[1]) != undefined ? (list[1].celular) : ''}"  placeholder=" +55 (00) 9 0000-0000">,
                e-mail:<input type="text" style=" border: 0; border-bottom: 1px solid #ccc;" value="${(list[1]) != undefined ? (list[1].email) : ''}" style=" border: 0; border-bottom: 1px solid #ccc;" placeholder="xxxxxxxxxx@xxxxxxxx">,
                neste ato denominado LOCATÁRIO.
             </p>
    
            <p>As partes acima identificadas ajustam e acordam o presente CONTRATO DE LOCAÇÃO de imóvel residencial,
            que será regido pela Lei nº 8.245/91 ( Lei do Inquilinato),
            em relação ao imóvel abaixo identificado, que o LOCADOR se declara, sob as penas da lei,
            proprietário ou autorizado a gerir os frutos decorrentes da locação, de acordo com as cláusulas
            e condições seguintes:
            </p>
    
        <p>1ª. OBJETO – O objeto do presente contrato é a locação de natureza residencial do imóvel situado
            na: (descrição completa do endereço do imóvel; nome da rua, número, bairro, CEP, cidade, estado),
            registrado sob a Matrícula de Imóvel n.º xxxxxxxxxx, o qual se encontra livre de quaisquer ônus e
            dívidas.
        </p>
    
        <p>Parágrafo único – O imóvel foi devidamente vistoriado e entregue na data da assinatura deste contrato,
            pelo LOCADOR ao LOCATÁRIO, que declara recebê-lo em perfeitas condições de habitabilidade,
            instalações elétricas, hidráulicas e sanitárias, e com pintura nova, prometendo assim devolvê-lo.
        </p>
    
        <p>2ª. PRAZO – A presente locação terá o prazo de 30 (trinta) meses,
            a iniciar-se no dia 00/00/0000 e com previsão de término no dia 00/00/0000.
        </p>
    
        <p>Parágrafo único – Prorrogação. O contrato poderá ser prorrogado por convenção entre as
            partes ou se o LOCATÁRIO continuar residindo no imóvel após o fim do prazo, por mais de 30 (trinta)
            dias, sem objeção do LOCADOR, sendo que neste caso a locação será prorrogada por tempo indeterminado,
            podendo o LOCADOR reivindicar o imóvel a qualquer tempo, mediante notificação expressa e concedendo
            ao LOCATÁRIO o prazo de 30 (trinta) dias para a desocupação do imóvel.
        </p>
    
        <p>3ª. VALOR DO ALUGUEL – O valor do aluguel é de R$ 000,00 (descrever valor por extenso em reais)
            mensais, devendo o pagamento ser feito até o (dia de sua preferência) dia útil de cada mês,
            a ser efetuado diretamente ao LOCADOR, por meio de (informar se será pix, boleto,
            entrega em mãos, etc, da forma mais detalhada possível).
        </p>
    
        <p>Parágrafo 1º – Recibo. O LOCADOR deverá emitir recibo ao LOCATÁRIO referente à quantia paga,
            descrevendo o valor e o mês que está sendo pago, além de qualquer outra eventual despesa.
        </p>
    
        <p>Parágrafo 2º – Reajuste. O valor do aluguel será reajustado anualmente,
            tendo como base de correção monetária o índice do (insira aqui o índice que deseja;
            por exemplo: IGPM, IGP, IPC).
        </p>
    
        <p>Parágrafo 3º – Despesas e tributos. Além do pagamento do aluguel,
            obriga-se o LOCATÁRIO a realizar o pagamento de todas as despesas ordinárias (água, energia elétrica,
            gás, telefone, internet, condomínio, bem como tributos, taxas municipais e IPTU) quando dos respectivos
            vencimentos.
        </p>
    
        <p>4ª. GARANTIA – Fica acordado que o presente contrato será garantido por meio de:
            (descrever se será caução ou fiança; no caso de caução o locatário deixa como garantia
            o valor de (....), que será pago juntamente com o 1º (primeiro) mês de aluguel;
            se for fiança, inserir os dados do fiador: nome, nacionalidade, estado civil,
            profissão, RG, CPF, endereço, celular, e-mail).
        </p>
    
        <p>5ª. PAGAMENTO – Caso o pagamento ocorra até o dia X, será concedido a título de incentivo de
            pontualidade, redução de X reais no valor do aluguel mensal pactuado. No entanto,
            caso o pagamento ocorra após o dia X, o LOCATÁRIO perde tal benefício e terá o valor
            total acrescido de multa, juros e correção monetária, nos moldes a seguir descritos.
        </p>
    
        <p>Parágrafo Único – A multa será de 2% (dois por cento) sobre o valor do aluguel e os juros serão de
            1% (um por cento) ao mês, acrescidos de correção monetária segundo o índice do INPC
            (ou outro de sua preferência), até a regularização do pagamento.
        </p>
    
        <p>6ª. UTILIZAÇÃO DO IMÓVEL – A presente locação destina-se restritivamente ao uso do imóvel para
            fins residenciais, não podendo o LOCATÁRIO transferir, sublocar, ceder ou emprestar ou usá-lo de
            forma diferente do previsto, salvo autorização expressa do LOCADOR, sob pena haver seu contrato
            rescindido de plano, sem gerar direito a indenização.
        </p>
    
        <p>Parágrafo 2º – Seguro. O LOCATÁRIO obriga-se a providenciar seguro do imóvel locado,
            em companhia idônea, prevendo riscos de incêndio, raio, explosão etc., o qual servirá para pagamento
            da restauração em caso de sinistro. A apólice deverá ser apresentada anualmente,
            e a primeira no prazo de 30 (trinta) dias após a assinatura deste contrato.
        </p>
    
        <p>Parágrafo 3º – Culpa ou Dolo. Caso porventura venha a ocorrer acidente no imóvel por culpa ou dolo do
            LOCATÁRIO, este ficará obrigado a pagar todas as despesas pelos danos causados, além de multa no
            valor de x% (x por cento) sobre o valor do aluguel.
        </p>
    
        <p>Parágrafo 4º – Vistorias. Faculta ao LOCADOR realizar vistorias esporádicas no imóvel, em dia e hora a serem
            combinados, a fim de averiguar o estado de conservação do imóvel, sendo que se algum vício ou dano for
            constatado, o LOCATÁRIO deverá providenciar o conserto, no prazo de 60 (sessenta) dias, sob pena de rescisão
            contratual.
        </p>
    
        <p>Parágrafo 5º – Devolução. Finda ou rescindida a locação, o LOCATÁRIO obriga-se a devolver o imóvel nas mesmas
            condições em que o recebeu, arcando com as despesas cabíveis (conservação de portas, fechaduras, trincos,
            puxadores, vidraçarias e instalações elétricas, hidráulicas e sanitárias), inclusive obrigando-se a pintá-lo
            nas mesmas tintas e cores (citar marca de tinta se preferir). Após vistoria do local por parte do LOCADOR, e
            estando tudo nos conformes, a devolução irá se concretizar mediante a entrega das chaves e assinatura de um
            Termo de Entrega por ambas as partes.
        </p>
    
        <p>7ª. RESCISÃO CONTRATUAL. Poderá o contrato ser rescindido mediante prévio acordo entre as partes ou na
            ocorrência das situações acima pactuadas, bem como por quaisquer das outras hipóteses previstas na Lei do
            Inquilinato.
        </p>
    
        <p>8ª. CLÁUSULA PENAL. O LOCADOR e o LOCATÁRIO obrigam-se a mutuamente a respeitar este contrato em todas suas
            cláusulas, sob pena de incorrer no pagamento de multa no valor de X reais/aluguéis, além do ressarcimento
            por quaisquer danos causados.
        </p>
    
        <p>Parágrafo único – Devolução antecipada. Caso ocorra a devolução do imóvel antes do prazo de término previsto
            neste contrato, seja pela entrega voluntária ou por decisão judicial em decorrência de falta de pagamento ou
            outra infração qualquer, facultará ao LOCADOR cobrar do LOCATÁRIO o pagamento de multa compensatória no
            valor de X reais/aluguéis, proporcionalmente ao tempo de contrato não cumprido, na base de 1/24 para cada
            mês transcorrido.
        </p>
    
        <p>9ª. DISPOSIÇÕES FINAIS. Não será facultativo a nenhuma das partes o direito de arrependimento, devendo ambas
            as partes cumprir fielmente o disposto nas cláusulas aqui avençadas.
        </p>
    
        <p>Parágrafo 1º – Omissão. Caso venha a ocorrer alguma hipótese não prevista neste contrato, a omissão será
            suprida pela Lei nº 8.245/91 ( Lei do Inquilinato).
        </p>
    
        <p>Parágrafo 2º – Foro. Elegem a Comarca de (cidade), (Estado) como foro para dirimir quaisquer problemas,
            desistindo de qualquer outro, por mais privilegiado que seja ou possa ser.
        </p>
    
        <p>E assim, por estarem justos a e acordados, firmam o presente CONTRATO DE LOCAÇÃO, em 2 (<input type="text"
                placeholder="ex: 2">) vias de igual
            forma e teor, na presença de 2 (<input type="text" placeholder="ex: 2">) testemunhas, para que produza todos
            os seus jurídicos e legais
            efeitos.
        </p>
    
        <p>Cidade/Estado, (<input type="text" placeholder="Dia">) de (<input type="text" placeholder="Mês">) de (<input
                type="text" placeholder="Ano">).</p>
    
        <p><input type="text" placeholder="(NOME DO LOCADOR)"></p>
    
        <p>LOCATÁRIO</p>
    
        <p> <input type="text" placeholder="(NOME DO LOCATÁRIO)"></p>
    
        <p> <input type="text" placeholder="(NOME DA TESTEMUNHA 1)"></p>
    
        <p>RG: <input type="text" placeholder="00.000.000-0"> – <input type="text" placeholder="Sigla"> /<input
                type="text" placeholder="Estado"> </p>
    
        <p>RG: <input type="text" placeholder="00.000.000-0"> – <input type="text" placeholder="Sigla">/ <input
                type="text" placeholder="Estado"></p>
    
        <p>CPF: 000.000.000-00</p>
    </div>
        `;
    }

    if (document.querySelector(`.sale`)) {
        sale = document.querySelector(`.sale`).innerHTML =
            `
      <div class="contract-title">
        <img src="${baseUrl}/assets/images/logo.png"/>
        <h1>CONTRATO PARTICULAR DE COMPRA E VENDA DE IMÓVEL</h1>
        <div class="icon-option">
        <i onclick="window.print()" class="fa-solid fa-print"></i>
      </div>
    </div> 
    <div class="contract-info">
        <p>Pelo presente instrumento particular, de um lado EMPRESA <input type="text" value placeholder="Empresa">, pessoa
            jurídica de direito privado, inscrita
            sob o CNPJ nº <input type="text" value="" placeholder="00.XXXXX/0000-00"> , estabelecido na Rua <input  type="text"
            value="" placeholder="ex: Av Republic">, nº <input type="text" placeholder="num">, bairro <input type="text"
                placeholder="bairro">, com sede nesta cidade de <input type="text" placeholder="ex: Marília">,
            representado por seu sócio <input type="text" placeholder="Fulano">, inscrito no CPF nº <input type="text"
                placeholder="000.000.000-00">, RG <input type="text" placeholder="000.000-SSP-SC">, <input type="text"
                placeholder="Nascionalidade">,
            empresário, residente e domiciliado na Rua <input type="text" placeholder="Rua: Bahia ">, nº <input
                type="text" placeholder=" ex: 8985">, bairro <input type="text" placeholder=" ex: Centro">, nesta cidade
            de <input type="text" placeholder="ex: Adamantina">, de ora em diante
            denominado VENDEDOR, e de outro lado, FULANA, brasileira, casada, comerciante, portadora do CPF <input
                type="text" placeholder=" XXXXX-00">,
            residente e domiciliada à Rua <input type="text" placeholder="ex: Av Esmeralda">, nº <input type="text"
                placeholder="ex: 362"> , bairro <input type="text" placeholder="ex: Aquarios"> , na cidade de <input
                type="text" placeholder="ex: Bauru"> , de ora em diante denominada
            COMPRADOR, têm entre si justo e contratado o que segue, que se obrigam a cumprir por si, seus herdeiros e
            sucessores.
        </p>
 
        <p>DO OBJETO DO CONTRATO</p>
 
        <p>CLÁSULA PRIMEIRA - O presente contrato tem como OBJETO a venda entre as partes do IMÓVEL com a área de
            <input type="text" placeholder="364,00">m2. ( <input type="text"
                placeholder="trezentos e sessenta e quatro metros quadrados">), registrado no titular do 1º Ofício do
            RIC, de
            <input type="text" placeholder="XXX">, sob o nº <input type="text" placeholder="0.000">, fls. 00, do livro
            0F, em <input type="text" placeholder="0º ">de <input type="text" placeholder="setembro"> de <input
                type="text" placeholder="2023">, resolve vendê-lo ao COMPRADOR, pelo
            valor de R$<input type="text" placeholder="85.000,00"> de ( <input type="text"
                placeholder="oitenta e cinco mil reais">), livre de qualquer vício ou ônus.
        </p>
 
        <p>CLÁSULA SEGUNDA - O terreno ora vendido está localizado em (BAIRRO), zona urbana deste Município de XXX, na
            primeira quadra, do lado par, da Rua XXX, representado pelo lote nº 40, do loteamento denominado XXX, com as
            seguintes medidas e confrontações: Na frente que faz ao Norte, com a rua acima citada, onde mede 14,00
            metros; fundos que faz ao Sul, com terras de herdeiros de XXX, onde mede 14,00 metros; estrema ao Oeste, com
            terras de XXX (lote nº 38), distante nesta estrema da Rua XXX, onde mede 266,00 metros; e ao Leste, com
            terras de XXX (lote nº 42), medindo em cada uma dessas estremas 26,00 metros.
        </p>
 
        <p>DAS OBRIGAÇÕES</p>
 
        <p>CLÁSULA TERCEIRA - Pelo presente contrato o VENDEDOR se obriga a transferir o domínio do imóvel acima
            descrito e o comprador a pagar o preço em dinheiro, cujo valor ora supracitado.
        </p>
 
        <p>CLÁSULA QUARTA - Será de responsabilidade do VENDEDOR o pagamento dos impostos, taxas e despesas que incidam
            sobre o imóvel, momento em que esta obrigação passará ao COMPRADOR.
        </p>
 
        <p>CLÁSULA QUINTA - O COMPRADOR se responsabilizará pelas despesas com a escritura e registro do imóvel, a ser
            realizada quando da quitação do valor acertado neste instrumento.
        </p>
 
        <p>CLÁSULA SEXTA - Até a efetiva entrega do imóvel ao comprador, o vendedor se responsabiliza por quaisquer
            danos eventualmente ocorridos no imóvel.
        </p>
 
        <p>CLÁSULA SÉTIMA - Independente do prazo convencionado entre as partes para o pagamento, se antes da efetiva
            entrega do imóvel o comprador se tornar insolvente, o vendedor é autorizado a reter o imóvel até que o
            comprador apresente garantias de que irá efetuar o pagamento no dia previsto.
        </p>
 
        <p>DA MULTA</p>
 
        <p>CLÁSULA OITAVA - Caso alguma das partes não cumpra o disposto nas cláusulas estabelecidas neste instrumento,
            responsabilizar-se-á pelo pagamento de multa equivalente a 6% do valor da venda do imóvel.</p>
        <p>DO PAGAMENTO</p>
 
        <p>CLÁSULA NONA - Por força deste instrumento, o COMPRADOR pagará ao VENDEDOR a quantia de R$
            <input type="text" placeholder="oitenta e cinco mil reais"> (<input type="text" placeholder="CIDADE">), à
            vista, no dia 17 de junho de 2020, valores que o VENDEDOR declara ter recebido na
            presente data e que dá rasa e geral quitação.
        </p>
 
        <p>DO FORO</p>
 
        <p>CLÁSULA DÉCIMA - Para dirimir quaisquer controvérsias oriundas do CONTRATO, as partes elegem o foro da
            comarca de (<input type="text" placeholder="CIDADE">).
        </p>
 
        <p>Assim, por estarem assim justos e contratados, firmam o presente instrumento, em duas vias de igual teor,
            juntamente com <input type="text" placeholder="2"> (<input type="text" placeholder="duas">) testemunhas.
        </p>
 
        <p>CONDIÇÕES GERAIS</p>
 
        <p>CLÁSULA DÉCIMA PRIMEIRA - O presente contrato passa a valer a partir da assinatura pelas partes, obrigando-se
            a ele os herdeiros ou sucessores das mesmas.
        </p>
 
        <p><input type="text" placeholder="Cidade-SC">, <input type="text" placeholder="17">
            de <input type="text" placeholder="junho"> de <input type="text" placeholder="2020">.</p>
 
        <p>EMPRESA <input type="text" placeholder="XXX"></p>
 
        <p>CNPJ – <input type="text" placeholder="00.XXXXX/0000-00 "></p>
 
        <p>REPRESENTANTE: <input type="text" placeholder="Fulado "></p>
 
        <p><input type="text" placeholder="Fulana"></p>
 
        <p>CPF - <input type="text" placeholder="000.000.000-00"></p>
 
        <p><input type="number" placeholder="3"> TESTEMUNHAS</p>
    </div>
 
        `;
    }

    if (document.querySelector(`.guarantor`)) {
        guarantor = document.querySelector(`.guarantor`).innerHTML =
            `
      <div class="contract-title">
          <img src="${baseUrl}/assets/images/logo.png"/>
          <h1>CONTRATO DE LOCAÇÃO COM FIADOR</h1>
          <div class="icon-option">
            <i onclick="window.print()" class="fa-solid fa-print"></i>
          </div>
      </div> 

      <div class="contract-info">
        <p>Pelo presente instrumento particular, as partes a seguir qualificadas têm,
           entre si, ajustada a locação do imóvel abaixo descrito e caracterizado mediante 
           as cláusulas e condições seguintes.
        </p>

        <P>Locador: (nome), (nacionalidade), (estado civil), (profissão), inscrito(a) no CPF sob o nº (informar) e
           no RG nº (informar), residente e domiciliado(a) à (endereço).
         </P>

         <P>Locatário: (nome), (nacionalidade), (estado civil), (profissão), inscrito(a) no CPF sob o nº (informar) 
           e no RG nº (informar), residente e domiciliado(a) à (endereço).
         </P>

         <P>Fiador: (nome), (nacionalidade), (estado civil), (profissão), inscrito(a) no CPF sob o nº (informar) e 
           no RG nº (informar), residente e domiciliado(a) à (endereço).
         </P>

         <P>IMÓVEL OBJETO DA LOCAÇÃO: Imóvel situado na (endereço), devidamente inscrito no
           Cartório de Registro de Imóveis sob a Matrícula nº (informar).
         </P>

         <P>FINALIDADE DA LOCAÇÃO: Exclusivamente para fins (residenciais ou comerciais) do locatário.</P>

         <P>PRAZO DA LOCAÇÃO: O prazo da locação será de (quantidade) meses, com início em (data) e término
          em (data).
         </P>

         <P>VALOR DO ALUGUEL MENSAL: O valor mensal do aluguel será de R$ x.XXX,XX (valor por extenso), reajustáveis nos termos da cláusula 1.3.</P>
         <p>CLÁUSULAS E CONDIÇÕES RELATIVAS AO CONTRATO DE LOCAÇÃO</p>

         <p>1 – ALUGUEL E REAJUSTE</p>
         <p>1.1 – Todos os pagamentos de aluguéis e seus encargos pelo Locatário em razão deste contrato deverão
           ser efetuados no primeiro dia útil do mês a vencer, mediante depósito na conta bancária do Locador,
           qual seja, Banco (informar) (número), agência (informar), conta corrente (informar).
        </p>
        <p>1.2 – As partes ajustam que, em caso de mora do Locatário no pagamento do aluguel e 
          encargos convencionados, a importância devida será acrescida de multa moratória de 10% (dez por cento),
          honorários advocatícios de 20% independentemente dos sucumbenciais, bem como juros de 1% 
          (um por cento) ao mês e correção monetária de acordo com a variação do IGPM (Índice Geral de Preços 
          de Mercado) da Fundação Getulio Vargas, tudo desde a data do vencimento até a final liquidação,
          sem prejuízo do estabelecido na cláusula sétima deste contrato.
        </p>

        <p>1.3 – O aluguel mensal será reajustado anualmente de acordo com a variação do IGPM
         (Índice Geral de Preços de Mercado) da Fundação Getulio Vargas, ocorrida a partir da data deste instrumento
           e no período durante a vigência do presente e suas eventuais prorrogações. Caso tal índice seja extinto,
           será adotado novo critério de reajustamento, em vigor na ocasião, que reflita a verdadeira desvalorização
            da moeda.
         </p>
         <p>1.4 – O primeiro e último aluguéis, quando não corresponderem ao mês completo, serão cobrados proporcionalmente pelos
           dias que corresponderem ao período de locação dentro do mês em questão.
         </p>

         <p>1.5 – A falta de pagamentos, nas épocas determinadas neste contrato, dos aluguéis e encargos, por si só constituirá o Locatário em mora, independentemente de qualquer aviso ou interpelação.</p>
        
         <p>1.6. O recebimento, a pedido do locatário, em outro local, de outra forma, fora do prazo, ou sem as penalidades, constituirá mera tolerância do locador, não sendo, jamais, considerado novação contratual.</p>
        
         <p>2 – IMPOSTOS, TAXAS, DESPESAS COMUNS E AFINS</p>

         <p>2.1 – Correrão por conta exclusiva do Locatário, como parte integrante do aluguel ajustado, todos os impostos, taxas e demais tributos municipais, bem como as despesas ordinárias de condomínio ou outras despesas comuns,
           devendo ser satisfeitos os seus pagamentos juntamente com o aluguel coincidente com o mês de seus vencimentos, sob pena de, não o fazendo, responder o Locatário pelas multas e despesas decorrentes dos consequentes atrasos. 
           Se o Locador optar por efetuar esses pagamentos, obrigar-se-á o Locatário a reembolsá-lo imediatamente, sem mais formalidades, sob pena de incorrer nas penalidades previstas neste contrato para a mora no pagamento dos aluguéis.
        </p>

        <p>2.2 – Na hipótese de serem os avisos dos tributos e encargos a que se refere esta cláusula entregues diretamente ao Locatário, este se compromete a entregá-los no endereço do Locador, com antecedência necessária para que sejam providenciados os seus pagamentos,
          sob pena de responder pelas multas decorrentes do atraso. Se, porventura, qualquer pagamento a que se refere esta cláusula for efetuado pelo Locatário, obriga-se este a remeter cópia dos recibos ao Locador, ou a quem estiver encarregado da administração do imóvel,
          em até 10 (dez) dias do vencimento, sob pena de infração contratual.
        </p>

        <p>3 – FORNECIMENTO DE ENERGIA ELÉTRICA E ÁGUA</p>
        <p>3.1 – As despesas com o consumo de energia, água e outras utilidades para a coisa locada, ainda que lançadas em nome do Locador, serão sempre de exclusiva responsabilidade do Locatário, que se obriga a fazer os respectivos pagamentos nas épocas e nos montantes devidos
          junto aos órgãos e repartições competentes ou a reembolsar o Locador quando este fizer os pagamentos.
        </p>

        <p>3.2 – Se, porventura, o Locador efetuar os pagamentos referidos nesta cláusula, a fim de evitar cobrança em seu nome, as quantias por ela despendidas serão reembolsadas pelo Locatário em até 05 (cinco) dias e a ausência de pagamento implicará nas mesmas penalidades 
         impostas para a ausência de pagamento dos aluguéis.
        </p>

        <p>3.3 – O Locatário declara ter conhecimento de que será obrigado a transferir ou pedir ligação de energia elétrica e água relativa ao imóvel locado, em seu nome, junto às companhia fornecedoras, arcando com as eventuais despesas decorrentes, sob pena de incorrer em
          infração contratual de natureza grave, dando ensejo ao despejo e demais penalidades impostas por este contrato.
        </p>

        <p>4 – MANUTENÇÃO E RESTITUIÇÃO DO IMÓVEL</p>

        <p>4.1 – O Locatário confessa receber o imóvel objeto desta locação em perfeito estado de limpeza, conservação e funcionalidade, não havendo qualquer avaria em azulejos, fechos, torneiras, ralos, pisos, louças, aparelhos sanitários, paredes, janelas, portas, sistemas
          hidráulicos e elétricos, fossas, caixas d’água e demais acessórios, obrigando-se a devolvê-lo ao Locador ao término do contrato, em idênticas condições, inclusive devidamente repintado, sob pena de, assim não procedendo, ser-lhe imposto o pagamento de tais serviços e
          materiais gastos, que serão providenciados pelo Locador e a seu critério, sem prejuízo de eventuais perdas e danos, inclusive lucros cessantes representados pelos aluguéis, nos mesmos moldes deste contrato, durante o período necessário para recomposição do imóvel no seu estado original.
        </p>

        <p>4.2 – O Locatário, salvo as obras que importem na segurança do imóvel locado, obriga-se por todas as outras que visem manter o imóvel nas condições descritas na cláusula 4.1, para assim restituí-lo quando findo ou rescindido este contrato.</p>
        
        <p>4.3 – Quaisquer exigências dos órgãos competentes que decorram da atividade específica do Locatário ou de condições específicas da sua habitação serão por ele satisfeitas, ainda que tratem da segurança do imóvel, de requisitos dos órgãos de higiene e de requisitos exigidos pelos demais órgãos que
         regulem a atividade desempenhada pelo locatário.
        </p>

        <p>4.3 – Quaisquer exigências dos órgãos competentes que decorram da atividade específica do Locatário ou de condições específicas da sua habitação serão por ele satisfeitas, ainda que tratem da segurança do imóvel, de requisitos dos órgãos de higiene e de requisitos exigidos pelos demais órgãos que regulem a atividade desempenhada pelo locatário.</p>
        
        <p>4.5 A proibição descrita na cláusula 4.4 inclui a pintura ou repintura do imóvel de outra cor que não a original, pintura ou substituição das portas, colocação de outro tipo de piso sobre o existente, salvo carpete, desde que seja retirado ao fim da locação sem danificar o piso existente, furos nos azulejos, passagem de fios externos, substituição
          de vidros e janelas que não sejam do padrão original, abertura de portas, passagens e qualquer outra modificação no aspecto original do imóvel, que deve ser restituído no exato estado em que foi recebido, inclusive devidamente repintado na cor original.
        </p>

        <p>4.6 – Quando ao término da locação fica sob exclusivo critério do Locador aceitar eventuais modificações feitas com a sua anuência expressa e escrita, sem direito, contudo, a qualquer retenção ou indenização pelas mesmas, nos termos do artigo 35 da Lei 8.245/1991, as quais ficarão incorporadas ao imóvel, exceção feita aquelas que possam ser removidas
          sem dano para o prédio, tais como máquinas, equipamentos, divisórias, etc., que poderão ser retiradas pelo Locatário.
        </p>

        <p>4.7 – Nos termos dos artigos 35 e 36 da Lei 8.245/1991, o Locatário não terá direito a indenização por quaisquer benfeitorias (úteis, necessárias ou voluptuárias), bem como às acessões efetuadas no imóvel, renunciando, desde já, expressamente, em caráter irrevogável e irretratável, a qualquer indenização ou retenção.</p>
        
        <p>4.8 – Vencido o prazo de Locação estabelecido no quadro resumo deste instrumento, obriga-se o Locatário a restituir o imóvel inteiramente desocupado e no mesmo estado de conservação e habitabilidade em que o recebeu.</p>
        
        <p>4.9 – A entrega das chaves do imóvel para vistoria somente poderá ser efetuada junto ao Locador ou seu Representante Legal, nunca a terceiros, após o Locatário cumprir integralmente todas as condições previstas neste Contrato, sob pena de continuar responsável pelos aluguéis e encargos até o acerto final e recibo de quitação total expedido pelo Locador.</p>
        
        <p>5 – CESSÃO, TRANSFERÊNCIA, SUBLOCAÇÃO E COMODATO</p>

        <p>5.1 – Sem o consentimento expresso e por escrito do Locador, não será permitida, em hipótese alguma, a transferência deste contrato, ainda que seja pela cessão de cotas de sociedade locatária, nem a sublocação ou empréstimo do imóvel locado no todo ou em parte, sob pena de grave infração contratual, obrigando-se o Locatário, outrossim, a usar o imóvel exclusivamente
          para o fim indicado no presente instrumento.
        </p>

        <p>5.2 – A cessão de quotas da sociedade Locatária é equiparada, pela vontade das partes contratantes, à cessão da locação, obrigando-se a Locatária, sob pena de infração contratual e despejo, a colher a anuência expressa e por escrito do Locador para continuidade da locação com a nova composição societária.</p>
       
        <p>6 – MULTA E RESOLUÇÃO</p>

        <p>6.1 – A infração de qualquer cláusula do presente contrato, inclusive as referentes ao uso e manutenção, prazo contratual e restituição do imóvel locado, sujeitará o infrator a multa de valor igual a 3 (três) aluguéis mensais, vigentes na data da infração, facultado, ainda, à parte inocente, considerar resolvido o presente contrato sem qualquer aviso ou interpelação, 
         judicial ou extrajudicial, ensejando o despejo por infração contratual no caso do Locatário, sem prejuízo do complemento em razão de prejuízos suplementares que não puderem ser suportados pela multa ora pactuada (Código Civil, parágrafo único do art. 416).
        </p>

        <p>8 – FIANÇA</p>

        <p>8.1 – Assina também o presente contrato o Fiador qualificado no Quadro Resumo, como principal pagador, solidariamente responsável com o Locatário pelo fiel cumprimento de todas as obrigações, cuja responsabilidade perdurará mesmo que este contrato esteja vigendo por prazo indeterminado, ou seja, prorrogado por acordo ou força de lei e, ainda, após a efetiva entrega das chaves, 
          caso o imóvel não tenha sido entregue nas condições ajustadas na cláusula quarta ou com qualquer débito remanescente e decorrente do presente contrato.
        </p>

        <p>8.2 – Fica claro desde já que a responsabilidade do Fiador se estende às majorações de aluguéis, impostos, taxas, seguros e encargos assumidos pelo Locatário, por força do presente contrato, ainda que não tenha anuído ou participado, mesmo majorações resultantes de acordo judicial ou extrajudicial entre o Locador e o Locatário ou ação revisional e mesmo após o prazo contratado em 
          caso de vigência legal por prazo indeterminado ou entrega das chaves em razão das obrigações remanescentes, nos termos do art. 39, da Lei 8.245/1991, sendo que a fiança perdurará mesmo que ocorra falecimento do afiançado.
        </p>

        <p>8.3 – O Locatário e o Fiador nomeiam-se e constituem-se reciprocamente procuradores para receberem citações, intimações ou interpelações provenientes de eventual ação de despejo, de tal sorte que qualquer um deles poderá ser citado, notificado ou interpelado em ação movida em face de qualquer um deles e efetuar, como mandatário do Locatário, a restituição do imóvel, resilindo o contrato de locação 
          ora avençado, sem prejuízo das medidas judiciais cabíveis.
        </p>

        <p>8.4 – O Fiador obriga-se a comunicar ao Locador, por escrito, a mudança de seu endereço (domicílio) comercial ou residencial.</p>

        <p>8.5 – A par da renúncia, pelos fiadores, ao direito de pedir exoneração, caso esta ocorra por qualquer motivo ou haja necessidade de substituição do fiador por força de lei e, ainda, no caso de morte, falência, insolvência ou redução do patrimônio indicado pelo Fiador, o Locatário se obriga a dar substituto idôneo, no prazo de 30 (trinta) dias, sob pena de incorrer na multa convencionada neste contrato,
          além de infração contratual de acordo com a cláusula sétima e despejo. Nesses casos, o Locatário se obriga a oferecer outro fiador idôneo. Para tanto e para os efeitos do artigo 825, do Código Civil, se obriga a apresentar certidões negativas de protestos e distribuição de ações do fiador e seu cônjuge, bem como da matrícula atualizada (até 30 dias de expedição) de imóvel da propriedade dos garantidores,
          livre e desembaraçado no mesmo Município deste contrato, além de declaração em que concorde(m) com a assunção da obrigação, diligenciando para que compareçam para assinar aditivo ao vertente contrato.
        </p>

        <p>8.6 – Declara, outrossim, o Fiador:</p>

        <p>a) Em caráter irrevogável e irretratável, renunciar às faculdades previstas nos artigos 827, 828, 835, 837 e 839 do Código Civil, artigos 12, § 2º, e 40, X, da Lei 8.245/1991, renunciando expressamente ao direito de pedir exoneração de fiança e ao benefício de ordem, assumindo a condição de obrigado solidário, nos termos dos artigos 264 e 275 do Código Civil, tudo mesmo após o fim do prazo estipulado,
          até a restituição do imóvel em perfeito estado com cumprimento integral das obrigações decorrentes deste contrato;
        </p>

        <p>Assinatura do fiador: ____________________________</p>


        <p>b) Estar ciente e não se opor, em caráter irrevogável e irretratável, que não lhe assiste em execução, por força da solidariedade, o benefício de ordem, conforme o artigo 828 do Código Civil;</p>

        <p>c) Que não é obrigatório para o Locador ou seu representante legal dar conhecimento ao Fiador da propositura da Ação de Despejo por falta de pagamento cumulada com Ação de Cobrança dos aluguéis e encargos, 
          sendo obrigação do Fiador verificar a pontualidade do afiançado;
        </p>

        <p>d) Que em razão da renúncia à faculdade prevista no artigo 40, X, da Lei 8.245/1991, sua responsabilidade de principal pagador persiste após o término do prazo contratual e prorrogações legais ou por acordo, e vai até a efetiva entrega do imóvel em perfeitas condições, livre de pessoas e bens, sem débitos remanescentes, assim como, que a responsabilidade abrange o cumprimento integral de todas as
          cláusulas e condições estipuladas neste Instrumento e suas eventuais prorrogações, além dos acordos exclusivamente entre o Locador e o Locatário referentes a este contrato;
        </p>

        <p>e) Que a fiança ora prestada se estenderá a eventuais modificações da locação, resultantes de disposição legal, inclusive ação revisional de aluguel e após o término do Contrato de Locação, em caso de prorrogação legal por prazo indeterminado;</p>
        
        <p>f) Que se responsabiliza pelo pagamento integral da multa contratual, com juros e correções, ainda que o Contrato de Locação esteja vigendo por prazo indeterminado, mesmo no caso de despejo por falta de pagamento ou infração contratual ou legal;</p>

        <p><g) Que se responsabiliza por todos os danos causados ao imóvel objeto da locação pelo Locatário, responsabilizando-se, também, pelos lucros cessantes, ou seja, o tempo que o imóvel, em virtude dos danos, deixar de auferir rendimentos, ficando a disposição de vistoria e reforma;/p>

        <p>h) Que se responsabiliza por todas as despesas necessárias com o pagamento de depositário público ou particular, na hipótese de haver remoção de bens em ação de despejo, bem como as custas processuais, honorários advocatícios, honorários de peritos e assistentes técnicos em qualquer tipo de processo que tenha por objeto a locação afiançada, independente de notificação ou citação;</p>
      
        <p>i) Que apresenta como garantia de capacidade econômica o imóvel discriminado no item 03 do Quadro Resumo, sendo que se obriga a apresentar, em caso de renovação legal (artigo 71, V da Lei 8.245/1991) ou compulsória do contrato, certidões negativas de protestos e distribuição de ações (suas e de seu cônjuge), bem como da matrícula atualizada (até 30 dias de expedição) do mesmo imóvel ou 
          de outro imóvel de sua propriedade livre e desembaraçado no mesmo Município deste contrato;
        </p>

        <p>j) Que expressamente concorda em permanecer como garante nos termos originais aqui convencionados em caso de morte do afiançado e sub-rogação do contrato nos termos dos artigos 11 e 12 da Lei 8.245/1991 em razão da renúncia às faculdades do artigo 12, § 2º, da Lei 8.245/1991.</p>
       
        <p>9 – DISPOSIÇÕES GERAIS</p>

        <p>9.1 – O Locatário fica obrigado a satisfazer a todas as intimações dos poderes públicos a que der causa e a pagar todas as multas que motivar. É responsável, também, pelas multas e majorações de impostos e taxas a que der causa, com a retenção ou pela entrega fora de prazo para pagamento
         com abono, dos avisos de lançamentos respectivos que receber.
        </p>

        <p>9.2 – O Locatário desde já faculta o Locador ou seu representante a examinar ou vistoriar o imóvel locado, quando entender conveniente, em dias úteis e horário comercial. No caso de o imóvel ser oferecido a venda, o Locatário permitirá que os interessados na aquisição o visitem em dia e hora 
          que previamente o Locador indicará por escrito.
        </p>

        <p>9.3 – Em caso de desapropriação, o Locador fica desobrigado por todas as cláusulas deste contrato, ressalvada, ao Locatário, tão somente, a faculdade de haver do poder expropriante a indenização que porventura tiver direito.</p>
      
        <p>9.4 – Havendo regulamento especial para o imóvel, imposto por convenção condominial, o Locatário se obriga a observá-lo integralmente, como mais uma cláusula deste contrato, do qual passará a fazer parte integrante. De qualquer forma, não poderá o Locatário infringir as normas referentes ao direito de vizinhança,
         no que se refere ao sossego, saúde, segurança, silêncio e respeito aos direitos de seus vizinhos, responsabilizando-se, ainda, por atos daqueles que permitir o ingresso no imóvel objeto da presente locação, sob pena de a resolução e o consequente despejo por infração contratual, além da multa aqui pactuada,
         que será devida integralmente ao Locador, cumuladas com as penalidades impostas por eventual norma condominial, devidas ao Condomínio, que serão carreadas ao Locatário, ainda que lançadas em nome do Locador.
         </p>

         <p>9.5 – O exercício ou não, de forma diversa, de qualquer direito ou faculdade estabelecida neste contrato, não será considerado novação de seus termos, nem desobrigará as partes de suas obrigações contratuais.</p>
      
         <p>9.6 – Em caso de incêndio ou qualquer acidente ocorrido, sem culpa de qualquer das partes e que obrigue a reconstrução do prédio, a locação ficará resolvida, desobrigados os contratantes das cláusulas e condições deste instrumento.</p>

         <p>9.7 – Nos termos do artigo 58, item IV, da Lei 8.245/1991, concordam expressamente as partes que toda e qualquer intimação, citação ou notificação poderá ser efetuada, se assim acharem conveniente, mediante correspondência com aviso de recebimento, ou tratando-se de pessoa jurídica ou firma individual,
           também mediante fac-símile, e-mail ou, ainda, pelas demais formas previstas e/ou admitidas em lei.
         </p>

         <p>9.8 – No caso de ação de despejo por falta de pagamento de aluguel e acessórios da locação, o eventual depósito do débito atualizado, será este acrescido de multa contratual de 10%, juros de mora de 1% ao mês, custas e honorários advocatícios fixados desde já em 20%, nos termos do artigo 62, II, “a”, “b”, “c” e “d” da Lei 8.245/1991.</p>

        <p>10 – CASOS OMISSOS</p>

        <p>10.1 – Aplicar-se-ão as disposições relativas à Lei 8.245/1991 e outras em vigor, para reger eventuais omissões nas cláusulas e condições deste contrato.</p>

        <p>11 – FORO</p>

        <p>11.1 – Fica eleito o Foro da Comarca da localidade do imóvel para serem dirimidas as eventuais questões que surgirem do presente contrato.</p>
       
       <p>stando justas e contratadas, as partes, após lerem e concordarem com todas as cláusulas do presente instrumento, assinam em 02 (duas) vias de 
         igual teor e forma, juntamente com as testemunhas abaixo nomeadas e qualificadas.
       </p>

       <p>(localidade), (dia) de (mês) de (ano).</p>

       <p>assinatura)</p>
       <p>(nome do locador)</p>

       <p>(assinatura)</p>
       <p>(nome do locatário)</p>

       <p>(assinatura)</p>

       <p>(assinatura)</p>

       <p>(nome da testemunha) - Testemunha
       CPF nº (informar)</p>

       <p>(assinatura)
       (nome da testemunha) - Testemunha
       CPF nº (informar)</p>
       
       
        </div> 
        `;
    }

    document.querySelectorAll('.group-button-contract button ').forEach(button => {
        let rent = document.querySelector('.rent')
        let sale = document.querySelector('.sale');
        let autoPreencheRent = document.getElementById('auto-fill-contract-rent');
        let autoPreencheSale = document.getElementById('auto-fill-contract-sale');

        button.addEventListener('click', () => {
            document.querySelectorAll('.group-button-contract button ').forEach(item => {
                item.classList.remove('activeButton');
            });

            if (button.id === 'view-contract-rent') {
                rent.style.display = "block";
                sale.style.display = "none";
                autoPreencheRent.style.display = "flex";
                autoPreencheSale.style.display = "none";
            } else {
                sale.style.display = "block";
                rent.style.display = "none";
                autoPreencheSale.style.display = "flex";
                autoPreencheRent.style.display = "none";
            }
            button.classList.add('activeButton');
        })
    })
}

function previewPdf() {
    let pdf = document.getElementById('contract-pdf').files[0];
    let preview = document.getElementById('preview-pdf-contract');
    let reader = new FileReader();
    document.querySelector('#descrition-pdf').innerHTML= pdf['name'];
 
    reader.onload = function () {
        preview.src = reader.result;
    }
    
    if (pdf['type'] === 'application/pdf') {
        reader.readAsDataURL(pdf);
        document.querySelector('.pdf-owner').style.display="block";
    } else {
        alert('Arquivo invalido!');
    }
}




