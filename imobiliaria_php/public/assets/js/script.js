AOS.init();
const select = document.querySelector('.group-select');
const painel = document.querySelector('.painel');
const mobile = document.querySelector('.menu-mobile');
const ul = document.querySelector('#option-ul');

mobile.addEventListener('click', ()=>{ 
  if(!ul.classList.contains('activeOption')){
    ul.classList.add('activeOption');
  }else{
    ul.classList.remove('activeOption');
  }  
});

let count = 1;
const teste =  document.getElementById("radio1").checked = true;

setInterval(function(){
  newImage();
 
},7000);

function newImage(){
  count++
 if(count > 3){
   count = 1;
 }
   document.getElementById("radio"+count).checked = true;
}


//Mudança automatico de imagem
const img = document.getElementById('slider');
let num = 0;
const images = ['assets/images/belo-resort-de-hotel-em-frente-a-praia-tropical-com-piscina-paradisiaca-para-ferias-ge.jpg',
'assets/images/arquitetura-e-natureza-se-fundem-em-ia-generativa-de-design-moderno.jpg', 'assets/images/interior-plano-vazio-com-elementos-de-decoracao.jpg'];
let nTotal = images.length;

setInterval(function(){
   newImages();
}, 10000);

function newImages(){
  num++

  if(num >= nTotal){
     num = 0;
  }
  img.src= images[num];
}
img.src= images[1];


const login = document.querySelector('.modal-login');
const areaClient = document.getElementById('area-client');
const closeI = document.querySelector('.close');

areaClient.addEventListener('click',()=>{
  login.style.display="flex";
});

 closeI.addEventListener('click', ()=>{
   login.style.display="none";
 });

//

const button = document.querySelectorAll('.respansive-button button');
 const alugar = document.querySelector('.row-i');
 const edificio = document.querySelector('.row-i-2');
 const region = document.getElementById('region');
 const bairro = document.getElementById('bairro');
 const valores = document.getElementById('valores');
 const condicao = document.getElementById('condicao');
 const caracteristica = document.getElementById('caracteristica');
 const precoSelect = document.getElementById('precoSelect');
 const quartos = document.getElementById('quarto');

 
function butonClick(info){
  for(var b = 0; b < button.length; b++){
    if(button[b].innerHTML === info){
       button[b].classList.add("active");
       precoSelect.innerHTML="Preço para "+info;
    }else{
       button[b].classList.remove("active");
    }
  }
  select.style.display="block";   
}


 function buttonSelect(info){
   if(info === 'Alugar Casa'){
    if(alugar.style.display==="flex"){
      alugar.style.display="none";
    }else{
      alugar.style.display="flex";
      edificio.style.display="none";
      region.style.display='none';
      valores.style.display="none"; 
      valores.style.display="none"; 
      quartos.style.display="none"; 
    }
   }
   
   if(info === 'Regiao'){
     if(region.style.display==='flex'){
      region.style.display='none';
     }else{
       region.style.display='flex';
       alugar.style.display="none";
       edificio.style.display="none";
       valores.style.display="none"; 
       condicao.style.display="none";
       caracteristica.style.display="none";
       valores.style.display="none"; 
       quartos.style.display="none"; 
       bairro.style.display="none"; 
     }
   }

   if(info === 'Bairro'){
     if(bairro.style.display==="flex"){
      bairro.style.display="none";
     }else{
      bairro.style.display="flex"
      caracteristica.style.display="none";
      condicao.style.display="none";
      valores.style.display="none"; 
      edificio.style.display="none";
      alugar.style.display="none";
      region.style.display='none';
      valores.style.display="none"; 
      quartos.style.display="none"; 
     }
   }
   
   if(info === 'Edificio'){
    if(edificio.style.display==="flex"){
       edificio.style.display="none";
    }else{
      edificio.style.display="flex";
      alugar.style.display="none";
      region.style.display='none';
      valores.style.display="none"; 
      condicao.style.display="none";
      caracteristica.style.display="none";
      bairro.style.display="none";
      quartos.style.display="none";
    }
   }
 
   if(info === "Quartos"){
       if(quartos.style.display=="flex"){
          quartos.style.display="none";
       }else{
        quartos.style.display="flex";
        bairro.style.display="none"
        caracteristica.style.display="none";
        condicao.style.display="none";
        valores.style.display="none"; 
        edificio.style.display="none";
        alugar.style.display="none";
        region.style.display='none';
        valores.style.display="none"; 
        bairro.style.display="none"; 
       }
   }

   if(info === 'Preço aluguel'){
      if(valores.style.display==="flex"){
        valores.style.display="none"; 
      }else{
        valores.style.display="flex"; 
        edificio.style.display="none";
        alugar.style.display="none";
        region.style.display='none';
        condicao.style.display="none";
        caracteristica.style.display="none";
        bairro.style.display="none";
        quartos.style.display="none";
      }
   }

   if(info === 'Condiçoes'){
     if(condicao.style.display==="flex"){
      condicao.style.display="none";
     }else{
      condicao.style.display="flex";
      valores.style.display="none"; 
      edificio.style.display="none";
      alugar.style.display="none";
      region.style.display='none';
      valores.style.display="none"; 
      caracteristica.style.display="none";
      bairro.style.display="none";
      quartos.style.display="none";
     }
   }

   if(info === 'Caracteristicas'){
    if(caracteristica.style.display==="flex"){
      caracteristica.style.display="none";
    }else{
      caracteristica.style.display="flex";
      condicao.style.display="none";
      valores.style.display="none"; 
      edificio.style.display="none";
      alugar.style.display="none";
      region.style.display='none';
      valores.style.display="none"; 
      bairro.style.display="none";
      quartos.style.display="none";
    }
   }

 }


 //Busca por imóveis
 const n = -1;
 var p = 0;
 const listRadio = [];
 const checkbox = document.querySelectorAll(".col-i input ");
 const radio = document.querySelectorAll(".col-i input");
 const listSearch = document.querySelector('.list-search ul');
 const clearSearch = document.querySelector('#clearSearch');
 
 function buttonRadio(pos){
  if(radio[pos].checked){
    listSearch.style.visibility="visible";
    p = pos;
    listRadio.unshift(radio[pos].value);
  }else{
      for(var i =0; i < listRadio.length; i++){
        if(radio[pos].value === listRadio[i]){
          listRadio.splice(i,1); 
         }
      }
  }

   resfre(); 
 }

 function resfre(){
  listRadio.reverse(listRadio);
  if(n < listRadio.length){
    listSearch.innerHTML="";
    for (let i = 0; i < listRadio.length; i++) {
        listSearch.insertAdjacentHTML("beforeEnd", `<li><p>${listRadio[i]}</p> <i onclick= 'excluirItem(${i})' class="fa-solid fa-xmark"></i></li>`);
    }
  }
  if(listRadio.length === 0){
    listSearch.style.visibility="hidden";
 }
}

function excluirItem(inf){
   var name = listRadio[inf];
   for(var i =0; i < radio.length; i++){
      if(radio[i].value === name){
         radio[i].checked = false;
      }   
   }

   for( var j = 0 ; j < listRadio.length; j++){
    if(inf === j){
      listRadio.splice(j,1); 
    }
   } 
   resfre();  
}


clearSearch.addEventListener('click', ()=>{
  for(var i = 0; i < radio.length; i++){
     radio[i].checked = false;
  }
  listRadio.length = 0;
  listSearch.innerHTML="";
  listSearch.style.visibility="hidden";
});






