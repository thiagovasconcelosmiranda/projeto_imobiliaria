let loginItem = document.querySelector('.area-client');
let modalLogin = document.querySelector('.modal-login');
let closeMmodal = document.querySelector('.close');

loginItem.addEventListener('click',()=>{
   modalLogin.style.display="flex";
});

closeMmodal.addEventListener('click', ()=>{
    modalLogin.style.display="none";
});


    