let baseUrl = document.querySelector('.container').getAttribute('data-url');
console.log(baseUrl);
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
   const images = [`${baseUrl}/assets/images/belo-resort-de-hotel-em-frente-a-praia-tropical-com-piscina-paradisiaca-para-ferias-ge.jpg`,
      `${baseUrl}/assets/images/full-shot-mulher-feliz-brincando-com-crianca.jpg`, `${baseUrl}/assets/images/interior-plano-vazio-com-elementos-de-decoracao.jpg`];
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
