
function share(id){
   window.open(`https://api.whatsapp.com/send?text=[http://localhost/imobiliaria_PHP/public/detalhe-imovel?id=${id}]`, "_blank");
}
