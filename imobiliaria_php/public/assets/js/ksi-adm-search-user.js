if (document.getElementById('search_user')) {
    var search = document.getElementById('search_user');
    searchUrl("");
    search.addEventListener('input', () => {
        searchUrl(search.value);
    });



    async function searchUrl(name) {
        var table = document.querySelector('.table_user');

        var req = await fetch(`${baseUrl}/ksi/adm/ajax/user?search=${name}`, {
            method: "get"
        });

        var json = await req.json();

        if (json) {
            table.innerHTML =
                `
              <tr class="tr-top">
                <td class="td-top">ID</td>
                <td class="td-top">NOME</td>
                <td class="td-top">IMAGEM</td>
                <td class="td-top">EMAIL</td>
                <td class="td-top">CIDADE</td>
                <td class="td-top">UF</td>
                <td class="td-top">DATA CADASTRO</td>
                <td class="td-top">AÇÕES</td>
              </tr>
          `;

            if (json[0].length > 0) {

                json[0].map(item => {
                    table.insertAdjacentHTML("beforeEnd",
                    `
                      <tr>
                       <td class="td-desc">${item.id}</td>
                       <td class="td-desc">${item.nome}</td>
                       <td class="td-desc">
                       <img src="${baseUrl}/assets/media/user/${item.id}/${item.photo}"></td>
                       <td class="td-desc">${item.email}</td>
                       <td class="td-desc">${item.cidade}</td>
                       <td class="td-desc">${item.uf}</td>
                       <td class="td-desc">${item.created_at}</td>
                       <td class="td-desc">
                          <i class="fa-solid fa-eye"></i>
                          <i class="fa-solid fa-pen-to-square"></i>
                          <i class="fa-solid fa-trash"></i>
                        </td>
                     `
                    );
                })
            }

        }
    }
}
