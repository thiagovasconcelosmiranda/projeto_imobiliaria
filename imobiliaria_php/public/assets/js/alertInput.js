var inputs = document.querySelectorAll('.group-input input, select');
var buttonform =  document.getElementById('button');

button.addEventListener('click', ()=>{


 if(!inputs[0].value ){
     document.getElementById('0').style.display='flex';
 }else{
     document.getElementById('0').style.display='none';
 }

 if(!inputs[1].value ){
     document.getElementById('1').style.display='flex';
 }else{
     document.getElementById('1').style.display='none';
 }

 if(!inputs[2].value ){
     document.getElementById('2').style.display='flex';
 }else{
     document.getElementById('2').style.display='none';
 }

 if(!inputs[3].value ){
     document.getElementById('3').style.display='flex';
 }else{
     document.getElementById('3').style.display='none';
 }

 if(!inputs[4].value ){
     document.getElementById('4').style.display='flex';
 }else{
    
     document.getElementById('4').style.display='none';
 }

 if(!inputs[5].value ){
     document.getElementById('5').style.display='flex';
 }else{
     document.getElementById('5').style.display='none';
 }

 if(!inputs[6].value ){
     document.getElementById('6').style.display='flex';
 }else{
     document.getElementById('6').style.display='none';
 }

 if(!inputs[7].value ){
     document.getElementById('7').style.display='flex';
 }else{
     document.getElementById('7').style.display='none';
 }
 if(!inputs[8].value ){
     document.getElementById('8').style.display='flex';
 }else{
     document.getElementById('8').style.display='none';
 }
 if(!inputs[9].value ){
     document.getElementById('9').style.display='flex';
 }else{
     document.getElementById('9').style.display='none';
 }
 if(!inputs[10].value ){
     document.getElementById('10').style.display='flex';
 }else{
     document.getElementById('10').style.display='none';
 }
 if(!inputs[11].value ){
     document.getElementById('11').style.display='flex';
 }else{
     document.getElementById('11').style.display='none';
 }

 if(!inputs[12].checked){
     document.getElementById('12').style.display='flex';
 }else{
     document.getElementById('12').style.display='none';
 }
 
 let num = 0;
 if(inputs[12].checked){

     for(i =0; i < inputs.length; i++){
        
        if(inputs[i].value){
            num++;
        }
        
     }
 }

 console.log(num);
 if(num === 17){
   buttonform.type="submit";
 }
  
});