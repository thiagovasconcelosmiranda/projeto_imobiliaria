
if(document.querySelectorAll('.col-group') &&
   document.querySelectorAll('.i-button-2 button')){
    document.querySelectorAll('.i-button-2 button').forEach(button =>{
        button.addEventListener('click', ()=>{
                veryError();
        })
    }) 
}


function veryError(){
  let count = 0;
  let num = 0;
    document.querySelectorAll('.col-group input, .col-group select').forEach(item =>{    
    if(item.name === 'operacao'){
       if(!item.checked){
         count++;
          if(count === 2){
            document.getElementById('msg').style.display='flex';
            count = 0;
           }else{
            document.getElementById('msg').style.display='none';
           } 
       }else{
        num++;
       }
    }
     
    if(item.id != ''){
       if(!item.value){
         document.getElementById(item.id).classList.add('input-error');
         document.getElementById(`msg-${item.id}`).style.display="flex"; 
       }else{
         document.getElementById(item.id).classList.remove('input-error');
         document.getElementById(`msg-${item.id}`).style.display="none";
         num++;
       }
    }

  });

  if(num === 6){
    document.querySelectorAll('.i-button-2 button').forEach(button=>{
        button.type="submit";
    });
  }
  num=0;
}

let list = [];
document.querySelectorAll('.active-button').forEach(item =>{
      item.addEventListener('click',()=>{

       if(item.classList.contains('active')){
        item.classList.remove('active');
       }else{
        item.classList.add('active');
       }
           
      });
});