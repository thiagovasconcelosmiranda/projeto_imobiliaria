if(document.querySelectorAll('.input-alert input select span') &&
    document.querySelectorAll('.input-alert button')){
      document.querySelectorAll('.group-input button').forEach(button=>{
          button.addEventListener('click', ()=>{ 
            veri_error();
           });
      }); 
      

function veri_error(){
 let count = 0;
 document.querySelectorAll('.input-alert input, select').forEach(item =>{
   let id = item.id;
   let inputId =  document.getElementById(id);

   if(!item.value){
      if(inputId){
         inputId.classList.add('cor-error-input');
         document.getElementById(`msg-${id}`).style.display="flex";
      }
   }else{
      if(item.type !== 'checkbox'){
         count++;
         if(inputId){
           inputId.classList.remove('cor-error-input');
           document.getElementById(`msg-${id}`).style.display="none";
        }
      }
   }

   
     
    if(item.type === 'checkbox'){
      let msg_error= document.querySelector('.msg-error-ann');
       if(!item.checked){
           msg_error.style.color="red";
         }else{
            msg_error.style.color="#000";
            count++;
         }
      }
       
      if(count=== 13){
         document.querySelectorAll('.group-input button').forEach(button =>{
            button.type="submit";
         })
      }
   });
  }
}


