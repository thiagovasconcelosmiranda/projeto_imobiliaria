
const base = document.querySelector('.content').getAttribute('data');
if(document.querySelector('.search-cards')){
     let array =[];
     let listCard = document.querySelector('.search-cards');
     document.querySelectorAll('.form select, input ').forEach(item =>{
         item.addEventListener('input', ()=>{
             if(item.value.length > 4){
                array.splice(0,1);
                array.unshift(item.name+'='+item.value);
                url(array);
             }else{
               array.splice(0,1); 
             }
         });
      });

      async function  url(list){
      let form = new FormData();
      for (let i =0; i < list.length; i++) {
          form.append(i, list[i]); 
       }

       let req = await fetch( base+'/impreendimentos', {
          method: 'POST',
            body:form
        });
    
       const json = await req.json();
     
       if(json[0].length > 0){
           listCard.innerHTML="";
           json[0].forEach(item => {
            let t = item['tipo'].split('/');
            console.log(item['classificacao']);
            let c = item['classificacao'].split('/');
            listCard.insertAdjacentHTML("beforeEnd",
            `<div class="card">
                <div class=" hover-card">
                    <a href="${base}/detalhe-imovel?id=${item['id']}">
                        <button class="button-enterprise" type="button">Mais Detalhes</button>
                     </a>
                </div>
                <div class="card-img">
                    <div class="inf-i" style="display: ${(item['condicao']!= 0? 'flex': 'none')}">${item['condicao']}</div>
                    <div class="inf-i green" style="left: 41%; display: ${(c[0]? 'flex': 'none')}">${c[0]}</div>
                    <div class="inf-i blue" style="left: 61%; display: ${c[1]}">${c[1]}</div>
                    <img src="assets/images/${item['id']}/${item['foto1']}" alt="Apartamento">
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
              </div> `
            );
        });
     
    }else{
         listCard.innerHTML="<h3>Nenhum impreendimento encontrado</h3>";
    }
 }
 url(array);
 
 }