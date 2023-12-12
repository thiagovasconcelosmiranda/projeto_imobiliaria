let areaLogin =  document.querySelector('#area-client');
let modalAccess = document.querySelector('.modal-login-access');


areaLogin.addEventListener('click', ()=>{
      if(modalAccess.style.display=="flex"){
        modalAccess.style.display="none";
      }else{
        modalAccess.style.display="flex";

        setTimeout(()=>{
            document.addEventListener('click', removeClickModal);
        },500);
      }
});

function removeClickModal(){
     modalAccess.style.display='none';
    document.removeEventListener('click', removeClickModal);
}

let loginItem = document.querySelector('#client');
let modalLogin = document.querySelector('.container-login');
let closeMmodal = document.querySelector('.close');

loginItem.addEventListener('click', () => {
    modalLogin.style.display = "flex";
});

closeMmodal.addEventListener('click', () => {
    modalLogin.style.display = "none";
});


