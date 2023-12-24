if(document.querySelectorAll('.group-i')){
    document.getElementById('button-password').addEventListener('click', ()=>{
      inputPasswordError();
    });

    function inputPasswordError(){
        let num = 0;
        document.querySelectorAll('.group-i input').forEach(item =>{
        let id = item.id;
        if(id){
           if(!item.value){
             document.getElementById(id).classList.add('alert-error-login');
             document.getElementById('msg-'+id).style.display="flex";
           }else{
            document.getElementById(id).classList.remove('alert-error-login');
            document.getElementById('msg-'+id).style.display="none";
            num++;
           }
        
        }

        let newPassword = document.getElementById('32');
        let checkPassword = document.getElementById('33');

        let span = document.getElementById('msg-33')

        let  verifyPassword = (newPassword.value === checkPassword.value);

        if(!verifyPassword){
            newPassword.classList.add('alert-error-login');
            checkPassword.classList.add('alert-error-login');
            span.style.display="flex";
            span.innerHTML="Senhas não conferem!";
        }else{
            newPassword.classList.remove('alert-error-login');
            checkPassword.classList.remove('alert-error-login');
            span.innerHTML="Campo obrigatório*";
        }

        if(num === 2 && verifyPassword){
            document.getElementById('button-password').type="submit";
          }
        });
       
    }
}
