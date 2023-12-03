
let count = 1;
setInterval(function () {
   newImage();
}, 7000);

function newImage() {
   count++
   if (count > 3) {
      count = 1;
   }
   if (document.getElementById("radio" + count).checked = true) {
      document.getElementById("radio" + count).checked = true;
   }
}

if (document.getElementById('slider')) {
   const img = document.getElementById('slider');
   let num = 0;
   const images = ['assets/images/belo-resort-de-hotel-em-frente-a-praia-tropical-com-piscina-paradisiaca-para-ferias-ge.jpg',
      'assets/images/arquitetura-e-natureza-se-fundem-em-ia-generativa-de-design-moderno.jpg', 'assets/images/interior-plano-vazio-com-elementos-de-decoracao.jpg'];
   let nTotal = images.length;

   setInterval(function () {
      newImages();
   }, 13000);

   function newImages() {
      num++
      if (num >= nTotal) {
         num = 0;
      }
      img.src = images[num];
   }
   img.src = images[1];
}
