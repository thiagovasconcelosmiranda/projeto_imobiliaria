     
     async function  apartamento(i){
         var tipoClass= 'apt';
         if(document.getElementById('pag-1') &&
         document.getElementById('apartamento') ){
           var pageButton = document.getElementById('pag-1');
           const div = document.getElementById('apartamento');
           const {data} = await axios.get(`${base}/apartamento`, {
            params: {
              apartamento: i
            }
         });
         divUrl(div, data['0'], data['1'], pageButton, tipoClass);
      }
        
      }

      async function casa(i){
         if(document.getElementById('pag-2') &&
            document.getElementById('casa')){
            var tipoClass = 'casa';
            var pageButton = document.getElementById('pag-2');
            const div = document.getElementById('casa');
            const {data} = await axios.get(`${base}/casa`, {
            params: {
                casa: i
            }
       });
         divUrl(div, data['0'], data['1'], pageButton, tipoClass);
      }
    }

    async function destaque(i){
      if(document.getElementById('pag-3') &&
         document.getElementById('destaque')){
            var tipoClass = 'dest';
            var pageButton = document.getElementById('pag-3');
            const div = document.getElementById('destaque');
            const {data} = await axios.get(`${base}/destaque`, {
              params: {
                destaque: i
              }
            });
            divUrl(div, data['0'], data['1'], pageButton, tipoClass);
      }
  }

   function divUrl(divimovel, data, page, pageButton, tipoClass){ 
      if(data.length > 0){
          divimovel.innerHTML="";
          data.map(item=>{
            let t = item['tipo'].split('/');
            let c = item['classificacao'].split('/');
              divimovel.insertAdjacentHTML("beforeEnd", 
                `<div class="card">
                    <div class="hover-card">
                        <a href="http://localhost/imobiliaria_PHP/public/detalhe-imovel?id=${item['id']}">
                          <button class="button-i-card" type="button">Mais Detalhes</button>
                         </a>
                      </div>
                    <div class="card-img">
                    <div class="inf-i" style="display: ${(item['condicao'] != 0 ? 'flex': 'none')};">
                    ${item['condicao']}
                    </div>
                    <div class="inf-i green" style="left: 41%; display: ${(c[0]? 'flex': 'none')};">
                      ${c[0]} 
                   </div>
                   <div class="inf-i blue" style="left: 61%; display: ${(c[1]? 'flex': 'none')};">
                      ${c[1]}
                    </div>

                    <img src="assets/images/${item['id']}/${item['foto1']}" alt="Apartamento">
                    </div>  
                    <div class="group-text">
                       <h4>${t[0]} - ${t[1]}</h4>
                       <p>Bairro: ${item['bairro']}</p>
                       <p>${item['cidade']} -${item['uf']} </p>
                        <p>Vender:</p>
                        <h2> R$ ${item['preco_vendas']}</h4>
                        <p>Alugar:</p>
                        <h2> R$ ${item['preco_aluguels']}</h4>
                        <p> <strong>${item['descricao']}</strong> | <strong>${item['qtd_quarto']}</strong> quartos | <strong>${item['qtd_sala']}</strong> |
                        sala | <strong>${item['qtd_cozinha']}</strong> Cozinha | <strong>${item['qtd_banheiro']}</strong> banheiros | e <strong>1</strong> area de lazer.</p>
                    </div>
                 </div>`);
           });
    } 
 
   if(page > 1){
      pageButton.innerHTML="";
      for (let p = 0; p < page; p++) {
        if(tipoClass === 'apt'){
          var func = `apartamento(${p})`;
        }
        if(tipoClass === 'casa'){
          var func = `casa(${p})`;
        }

        if(tipoClass === 'dest'){
          var func = `destaque(${p})`;
        }
       
        pageButton.insertAdjacentHTML("beforeEnd",
           `<div class='circle' onclick='${func}'></div>` 
        );
      }
   }
 }

  apartamento(0);
  casa(0);
  destaque(0);
 