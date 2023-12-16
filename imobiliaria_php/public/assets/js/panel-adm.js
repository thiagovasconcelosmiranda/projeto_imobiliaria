
//console.log(document.querySelector('main'));
document.getElementById('announcement').addEventListener('click', ()=>{
    $('main').load(`${baseUrl}/ksi/adm/announcement`);
});

document.getElementById('notSearch').addEventListener('click', ()=>{
    $('main').load(`${baseUrl}/ksi/adm/NotSearch`); 
});


async function remove(id){
   if(id){
      var req = await fetch(`${baseUrl}/ksi/adm/ajax/announcement/remove/${id}`, {
        method: "GET"
      });
      var json = await req.json();
      
      if(json.error == ""){
        window.location.reload();
      }
   }
}

async function removeNotSearch(id){
  var req = await fetch(`${baseUrl}/ksi/adm/ajax/notSearch/remove/${id}`, {
    method: "GET"
  });
  var json = await req.json();

  if(json.error == ""){
    window.location.reload();
  }
}


