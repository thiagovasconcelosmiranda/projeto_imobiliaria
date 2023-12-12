 let base = document.querySelector('.nav-user').getAttribute('data-url');
document.addEventListener('click', ()=>{
    reniciarCronometro();
});

let seg = 0;
let min = 0;
let inter;

function startCronometro(){
   inter = setInterval(() => {
          seg++;
          if(seg == 60){
              seg = 0;
              min++;
          }
          actualizarCreonometro();
    }, 1000);
}

startCronometro();

function detenerCronometro(){
     clearInterval(inter);
}

function reniciarCronometro(){
    seg = 0;
    min = 0;
    actualizarCreonometro();
}

 function actualizarCreonometro(){
     let valor = `${min }:${seg < 10 ? 0 : ''}${seg}`;
     if(valor === '1:59'){
       alert("Sessão Expirada");
        window.location.href=`${base}/ksi/logout`;
        detenerCronometro();
        return;
     }
 }