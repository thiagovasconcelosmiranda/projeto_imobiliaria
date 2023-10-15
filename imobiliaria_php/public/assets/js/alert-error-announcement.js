if(document.querySelectorAll('.input-alert input select span') &&
    document.querySelectorAll('.input-alert button')){
      document.querySelectorAll('.group-input button').forEach(button=>{
          button.addEventListener('click', ()=>{ 
              document.querySelectorAll('.input-alert input, select').forEach(item =>{
                   veri_error(item);
              });
           });
      }); 
      
let num = 0;
function veri_error(text_input ){
   if(!text_input.value){
      let id = text_input.id;
      let inputId =  document.getElementById(id);
      if(inputId){
         inputId.classList.add('cor-error-input');
         document.getElementById(`msg-${id}`).style.display="flex";
      }
   }

   if(text_input.value){
      num++;
      let id = text_input.id;
      let inputId =  document.getElementById(id);
      if(inputId){
         inputId.classList.remove('cor-error-input');
         document.getElementById(`msg-${id}`).style.display="none";
      }

   }
     
    if(text_input.type === 'checkbox'){
      let msg_error= document.querySelector('.msg-error-ann');
       if(!text_input.checked){
         num++;
           msg_error.style.color="red";
         }else{
            msg_error.style.color="#000";
         }
      }
    
      if(num=== 12){
         document.querySelectorAll('.group-input button').forEach(button =>{
            button.type="submit";
         })
      }
  }

}


