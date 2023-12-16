
if (document.getElementById('search_announcement')) {
    let search = document.getElementById('search_announcement');
    searchUrl("");
    search.addEventListener('input', () => {
        searchUrl(search.value);
    })

}

async function searchUrl(name) {
    var table = document.querySelector('.table');
        var req = await fetch(`${baseUrl}/ksi/adm/ajax/announcement/search?search=${name}`, {
            method: "GET"
        });

        var json = await req.json();
        if (json) {
            table.innerHTML = `
            <tr class="tr-top">
               <td>ID</td>
               <td>MOME</td>
               <td>EMAIL</td>
               <td>TELEFONE</td>
               <td>CELULAR</td>
               <td>TIPO</td>
               <td>CEP</td>
               <td>END</td>
               <td>NUM</td>
               <td>BAIRRO</td>
               <td>CIDADE</td>
               <td>ESTADO</td>
               <td>Ação</td>
            </tr>
            `

            if (json[0].length > 0) {
                json[0].map(item => {

                    table.insertAdjacentHTML("beforeEnd", `
                    <tr class="tr-desc">
                      <td>${item.id}</td>   
                      <td>${item.name}</td>   
                      <td>${item.email}</td>   
                      <td>${item.telefone}</td>   
                      <td>${item.celular}</td>   
                      <td>${item.tipo}</td> 
                      <td>${item.cep}</td> 
                      <td>${item.end}</td> 
                      <td>${item.num}</td> 
                      <td>${item.bairro}</td> 
                      <td>${item.cidade}</td> 
                      <td>${item.estado}</td> 
                      <td><i onclick="remove(${item.id})" class="fa-solid fa-trash"></i></td>
                  `);
                });
            }
        }
    }