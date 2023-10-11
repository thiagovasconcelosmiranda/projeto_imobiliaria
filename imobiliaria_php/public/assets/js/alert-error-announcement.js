if(document.querySelectorAll('.form-i input, select, button')){
     document.querySelectorAll('.form-i  button').forEach(button=>{

        button.addEventListener('click', ()=>{
             document.querySelectorAll('.form-i input, select').forEach(item =>{
                 verifyInfo(item, button);
             });
        });
    });
}

let num =0;
function verifyInfo(item, button){
   if(item.value){
    num++;
      if(num === 17){
        button.type="submit";
      }
   }

}
