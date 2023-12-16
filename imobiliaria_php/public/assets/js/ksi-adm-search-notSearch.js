
if (document.getElementById('search_notSearch')) {
    let search = document.getElementById('search_notSearch');
    searchUrl("");
    search.addEventListener('input', () => {
        searchUrl(search.value);
    });

    async function searchUrl(name) {
        var table = document.querySelector('.table');
            var req = await fetch(`${baseUrl}/ksi/adm/ajax/notSearch?search=${name}`, {
                method: "GET"
            });

            var json = await req.json();
            if(json){
                table.innerHTML = `
            <tr class="tr-top">
               <td>ID</td>
               <td>MOME</td>
               <td>EMAIL</td>
               <td>CIDADE</td>
               <td>TELEFONE</td>
               <td>DESCRIÇÃO</td>
               <td>OPERAÇÃO</td>
               <td>RESIDENCIAL</td>
               <td>COMERCIAL</td>
               <td>TERRENO</td>
               <td>CIDADE1</td>
               <td>CIDADE2</td>
               <td>CIDADE3</td>
               <td>CIDADE4</td>
               <td>CIDADE5</td>
               <td>CIDADE6</td>
               <td>CIDADE7</td>
               <td>CIDADE8</td>
               <td>CIDADE9</td>
               <td>CIDADE10</td>
               <td>CIDADE11</td>
               <td>CIDADE12</td>
               <td>CIDADE13</td>
               <td>CIDADE14</td>
               <td>Ação</td>
            </tr>
            `;
            if (json[0].length > 0) {
                json[0].map(item => {
                    table.insertAdjacentHTML("beforeEnd", `
                    <tr class="tr-desc">
                      <td>${item.id}</td>   
                      <td>${item.nome}</td>   
                      <td>${item.email}</td>   
                      <td>${item.cidade}</td> 
                      <td>${item.telefone}</td>
                      <td>${item.descricao}</td> 
                      <td>${item.operacao}</td> 
                      <td>${item.residencial}</td> 
                      <td>${item.comercial}</td> 
                      <td>${item.terreno}</td> 
                      <td>${item.cidade1}</td> 
                      <td>${item.cidade2}</td> 
                      <td>${item.cidade3}</td> 
                      <td>${item.cidade4}</td> 
                      <td>${item.cidade5}</td> 
                      <td>${item.cidade6}</td> 
                      <td>${item.cidade7}</td> 
                      <td>${item.cidade8}</td> 
                      <td>${item.cidade9}</td> 
                      <td>${item.cidade10}</td> 
                      <td>${item.cidade11}</td> 
                      <td>${item.cidade12}</td> 
                      <td>${item.cidade13}</td> 
                      <td>${item.cidade14}</td> 
                      <td><i onclick="removeNotSearch(${item.id})" class="fa-solid fa-trash"></i></td>
                    </tr>
                    `);
                })
            }
            }
        }
    } 
