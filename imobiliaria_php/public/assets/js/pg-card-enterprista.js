
const base = document.querySelector('.content').getAttribute('data');

if (document.querySelector('.search-cards')) {
    let array = [];
    let listCard = document.querySelector('.search-cards');
    document.querySelectorAll('.page input, select').forEach(item => {
        item.addEventListener('input', () => {
            if (item.value.length > 4) {
                array.splice(0, 1);
                array.unshift(item.name + '=' + item.value);
                urlAjax(array);
            } else {
                array.splice(0, 1);
            }
        });
    });

    async function urlAjax(list) {
        let form = new FormData();
        for (let i = 0; i < list.length; i++) {
            form.append(i, list[i]);
        }

        let req = await fetch(base + '/impreendimentos', {
            method: 'POST',
            body: form
        });

        const json = await req.json();
        console.log(json);
        if (json.error == '') {
            
                listCard.innerHTML = "";
                json[0].forEach(item => {
                    let t = item['tipo'].split('/');
                    let c = item['classificacao'].split('/');

                    listCard.insertAdjacentHTML("beforeEnd",
                        `<div class="card">
                    <div class=" hover-card">
                      <div class="hover-card-group-i">
                         <a href="${base}/detalhe-imovel?id=${item['id']}">
                            <button class="button-i-card" type="button">Mais Detalhes</button>
                         </a>  
                         <div class="hover-card-icon-group">
                              ${(item['favorito'].length > 0 ?
                            '<i onclick="favoriteLink(' + item['id'] + ', 2)" class="fa-solid fa-heart"></i> ' :
                            '<i onclick="favoriteLink(' + item['id'] + ', 2)" class="fa-regular fa-heart"></i>'
                        )}
                               <i onclick="share(${item['id']})" class="fa-solid fa-share"></i> 
                        </div>
                      </div> 
                </div>
                <div class="card-img">
                    <div class="inf-i" style="display: ${(item['condicao'] != 0 ? 'flex' : 'none')}">${item['condicao']}</div>
                    <div class="inf-i green" style="left: 41%; display: ${(c[0] ? 'flex' : 'none')}">${c[0]}</div>
                    <div class="inf-i blue" style="left: 61%; display: ${c[1]}">${c[1]}</div>
                    <img src="assets/media/photos_immobile/${item['id']}/${item['foto1']}" alt="Apartamento">
                </div>
                <div class="group-text">
                    <div class="group-card-title">
                     <h4> ${t[0]} - ${t[1]} </h4>
                    </div>
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
                
        } else {
            listCard.innerHTML = "<h3>Nenhum impreendimento encontrado</h3>";
        }
    }
    urlAjax(array);
}