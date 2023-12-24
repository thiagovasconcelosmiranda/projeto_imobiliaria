
if (document.getElementById('search_immobile')) {
    var searchImmobile = document.querySelector('#search_immobile');
    searchUrl("");
    searchImmobile.addEventListener('input', () => {
        searchUrl(searchImmobile.value);
    });

    async function searchUrl(name) {
        var table = document.querySelector('.table_immobile');
        var req = await fetch(`${baseUrl}/ksi/adm/ajax/immobile?search=${name}`, {
            method: "GET"
        });

        var json = await req.json();
      
        if (json) {
            table.innerHTML = `
                  <tr class="tr-top">
                    <td class="td-top">ID</td>
                    <td class="td-top">REF</td>
                    <td class="td-top">TIPO</td>
                    <td class="td-top">IMAGEM</td>
                    <td class="td-top">CIDADE</td>
                    <td class="td-top">UF</td>
                    <td class="td-top">DATA CADASTRO</td>
                    <td class="td-top">AÇÕES</td>
            `;

            if (json[0].length > 0) {
                json[0].map(item => {
                    table.insertAdjacentHTML("beforeEnd",
                     `
                        <tr>
                          <td class="td-desc">${item.id}</td>
                          <td class="td-desc">${item.ref}</td>
                          <td class="td-desc">${item.tipo} </td>
                          <td class="td-desc">
                           <img src="${baseUrl}/assets/images/${item.id}/${item.foto1}">
                          </td>
                          <td class="td-desc">${item.cidade}</td>
                          <td class="td-desc">${item.uf} </td>
                          <td class="td-desc">${item.created_at}</td>
                          <td class="td-desc">
                             <i class="fa-solid fa-eye"></i>
                             <i class="fa-solid fa-pen-to-square"></i>
                             <i class="fa-solid fa-trash"></i>
                          </td>
                         </tr>
                     `
                    );

                });
            }
        }
    }
}