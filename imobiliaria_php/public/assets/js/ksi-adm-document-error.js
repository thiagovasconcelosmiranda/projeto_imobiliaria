
document.getElementById('button-document').addEventListener('click', ()=>{
  verifyInputDocument();
});

function verifyInputDocument(){
    let num = 0;
  document.querySelectorAll('.container-document input, textarea').forEach(item =>{
    let id = item.id;

    if(id){

        if(!item.value){
            document.getElementById(id).classList.add('error-input');
            document.getElementById('msg-'+id).style.display="flex";  
        
        }else{
            document.getElementById(id).classList.remove('error-input');
            document.getElementById('msg-'+id).style.display="none";
            num++;
            if(item.type === 'file'){
                if(item.files[0]['type'] === 'application/pdf'){
                  num++
                }
            }
        }
    }
   
  })
  if(num === 5){
    document.getElementById('button-document').type="submit";
  }
}