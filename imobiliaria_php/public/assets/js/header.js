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

  if(document.querySelectorAll('.button-i buttton')){
    function  butonClick(info) {
        if(document.querySelector('.group-select-row')){
           document.querySelector('.group-select-row').style.display="flex";
           priceAll(info);
        } 
       
    }

    function selectClick(info){
      let p1 =  document.querySelector('.group-option-row');
      let p2=  document.querySelector('.group-option-row-1');
      let p3 =   document.querySelector('.group-option-row-2');
      let p4 =   document.querySelector('.group-option-row-3');

       switch(info){
          case  'Imóvel':
            if( p1.style.display==="flex"){
               p1.style.display="none";
               p2.style.display="none";
               p3.style.display="none";
               p4.style.display="none";
               
            }else{
               p1.style.display="flex";
               p2.style.display="none";
               p3.style.display="none";
               p4.style.display="none";
            }
          
          break;
          case  'Região':
            p1.style.display="none";
            p2.style.display="none";
            p3.style.display="none";
            p4.style.display="none";
          break;
          case  'Bairro':
            if( p2.style.display==="flex"){
              p1.style.display="none";
              p2.style.display="none";
              p3.style.display="none";
              p4.style.display="none";
              
           }else{
              p1.style.display="none";
              p2.style.display="flex";
              p3.style.display="none";
              p4.style.display="none";
           }
            
          break;
          case  'Edificio/Condominio':
            if(p4.style.display==="flex"){
              p1.style.display="none";
              p2.style.display="none";
              p3.style.display="none";
              p4.style.display="none";
              
           }else{
              p1.style.display="none";
              p2.style.display="none";
              p3.style.display="none";
              p4.style.display="flex";
           }
          break;
          case 'Preço':
            p1.style.display="none";
            p2.style.display="none";
            p3.style.display="none";
            p4.style.display="none";
          break;
          case 'Quartos':
            p1.style.display="none";
              p2.style.display="none";
              p3.style.display="none";
              p4.style.display="none";
          break;
          case 'Condiçoes':
              p1.style.display="none";
              p2.style.display="none";
              p3.style.display="none";
              p4.style.display="none";
          break;
          case 'Caracteristica':
            if( p3.style.display==="flex"){
              p1.style.display="none";
              p2.style.display="none";
              p3.style.display="none";
              p4.style.display="none";
              
           }else{
              p1.style.display="none";
              p2.style.display="none";
              p3.style.display="flex";
              p4.style.display="none";
           }
          break;
       }
    }

  }



  if(document.querySelectorAll('.group-select-row input') && 
    document.querySelectorAll('.list-search ul') &&
    document.querySelector('#clearSearch')){
      
    const n = -1;
    var p = 0;
    const listRadio = [];
    const radio = document.querySelectorAll('.group-select-row input');
    const listSearch = document.querySelector('.list-search ul');
    const clearSearch = document.querySelector('#clearSearch');
    function buttonRadio(pos){
    listSearch.style.display="flex";

    for (let index = 0; index < radio.length; index++) {
      console.log(index + ' => ');
        console.log(radio[index]);
    }
      if(radio[pos].checked){
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
        }else{
          listSearch.style.display="none";
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
          listSearch.style.display="none";
      });
 

  }

  async function priceAll(info){
      let req = await fetch(`${base}/preco?type=${info}`,{
        method: 'GET'
      });

      let json = await req.json();
      if(document.querySelector('#preco') && 
          document.querySelector('#title-option')
        ){
        const selectItem = document.querySelector('#preco');
         let i = info.split(' ');
         selectItem.name= i[2];
         console.log(i);
        let titleOption = document.querySelector('#title-option');
        titleOption.innerHTML = info;
        selectItem.options.length=1;
        if(json[0].length > 0){
           json[0].forEach(item =>{
            let option = new Option(item[`preco_${i[2]}`]);
            selectItem.options[selectItem.options.length]= option;
           });

            if(json.error !== ''){
               alert(json.error);
             }
        }
      } 
 }
