
let tableSchedule = document.querySelector('.table');

let inputSchedule = document.getElementById('search_schedule');

inputSchedule.addEventListener('input', ()=>{
   scheduleAjaxUrl(inputSchedule.value);
});
scheduleAjaxUrl('');

async function scheduleAjaxUrl(name){
  tableSchedule.innerHTML=
  `
         <tr class="tr-top">
            <td>ID</td>
            <td>Nome</td>
            <td>Email</td>
            <td>Opcao</td>
            <td>Celular</td>
            <td>Data</td>
            <td>Hora</td>
            <td>Data pedido</td>
            <td>Ação</td>
          </tr>
  `;
  var req = await fetch(`${baseUrl}/ksi/adm/ajax/schedule?name=${name}`,{
    method: 'GET'
  });

  var json = await req.json();
  
  if(json.error == ''){
    json[0].map(item =>{
      tableSchedule.insertAdjacentHTML("beforeEnd",
      `<tr class="tr-desc">
        <td>${item.id}</td>
        <td>${item.name}</td>
        <td>${item.email}</td>
        <td>${item.opcao}</td>
        <td>${item.celular}</td>
        <td>${item.date}</td>
        <td>${item.time}</td>
        <td>${item.create_at}</td>
        <td><i onclick="removeScheduleSearch(${item.id})" class="fa-solid fa-trash"></i></td>
      </tr>
      `);
    });
  }
}

async function removeScheduleSearch(id){
  var req = await fetch(`${baseUrl}/ksi/adm/ajax/schedule/delete/${id}`,{
    method: 'GET'
  });
  var json = await req.json();
  console.log(json);

  if(json.status != ''){
     window.location.href= `${baseUrl}/ksi/adm/area-adm`;
     return;
  }else{
    alert('ERROR: Não deletado');
  }
}
