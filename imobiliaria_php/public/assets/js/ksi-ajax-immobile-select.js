let table = document.querySelector('.list-document table');

async function doc(id, item){
    
    var req = await fetch(`${baseUrl}/ksi/ajax/client/${item}/${id}`, {
        method: 'GET'
    });

    var json = await req.json();
    console.log(json[0]);
    if(json.error == ''){
    table.innerHTML = "";
    
        json[0].map(item =>{
            table.insertAdjacentHTML("beforeEnd",
            `
            <tr class="tr-description">
              <td> <i class="fa-solid fa-image"></i>
                 ${item['categoria']}
              </td>
              <td><a href="">
                   ${item['descricao']}
                </a></td>
                <td>
                   ${item['download']}
                </td>
                <td>
                   ${item['tamanho']}
                </td>
                <td>
                ${item['created_at']}
                </td>
             </tr>
            `)
        })
    }
    
}
