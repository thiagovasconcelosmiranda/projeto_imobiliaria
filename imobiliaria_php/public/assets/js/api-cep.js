if(document.getElementById('error-10')){
    
   var inputCep = document.getElementById('error-10');
    
    inputCep.addEventListener('keyup', function(e){
        
        var keycode = (e.keyCode ? e.keyCode : e.which);

       if(keycode == 13){
           cepApi(inputCep.value)
       }
        
    });

    async function cepApi(cep){
    }
}