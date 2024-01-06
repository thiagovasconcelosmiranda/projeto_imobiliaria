
if (document.querySelector('.search-cards-stores')) {
    let listCardStore = document.querySelector('.search-cards-stores');
    document.querySelectorAll('.store .group-i input, select').forEach(item => {
        verifyInputs(item);
    });
    getUrl('');

     function verifyInputs(item) {
        item.addEventListener('input', () => {
            
            if(item.value.length >2 ){
                getUrl(item);
            }
            if(!item.value){
                getUrl(''); 
            }
        });   
    }

    async function  getUrl(item){
        let value = "";
        let name = "";

        if(item){
            value = item.value;
            name = item.name;
        }
        
        var req = await fetch(`${base}/search-store?name=${name}&&value=${value}`, {
            method: 'get'
        });
        var json = await req.json();

        listCardStore.innerHTML="";
    
        json[0].forEach(item => {
            let t = item['tipo'].split('/');
            let c = item['classificacao'].split('/');

            listCardStore.insertAdjacentHTML("beforeEnd",
            `<div class="card">
                <div class=" hover-card">
                    <a href="${base}/detalhe-imovel?id=${item['id']}">
                        <button class="button-enterprise" type="button">Mais Detalhes</button>
                     </a>
                </div>
                <div class="card-img">
                    <div class="inf-i" style="display: ${(item['condicao'] != 0 ? 'flex' : 'none')}">${item['condicao']}</div>
                    <div class="inf-i green" style="left: 41%; display: ${(c[0] ? 'flex' : 'none')}">${c[0]}</div>
                    <div class="inf-i blue" style="left: 61%; display: ${c[1]}">${c[1]}</div>
                    <img src="assets/media/photos_immobile/${item['id']}/${item['foto1']}" alt="Apartamento">
                </div>
                <div class="group-text">
                   <h4> ${t[0]} - ${t[1]} </h4>
                   <p>Bairro: ${item['bairro']}</p>
                   <p> ${item['cidade']} - ${item['uf']} </p>
                   <p>Vender:</p>
                   <h2> R$ ${item['preco_aluguels']}</h4>
                   <p>Alugar:</p>
                   <h2> R$ ${item['preco_vendas']}</h4>
                   <p><strong>${item['descricao']}</strong> | ${item['qtd_quarto']}  quartos|  ${item['qtd_sala']}
                   sala|  ${item['qtd_cozinha']} Cozinha|  ${item['qtd_banheiro']} banheiros|  area de lazer.</p>
                 </div>
              </div>
            
            
            `);

            
           
        });  
    }
}

