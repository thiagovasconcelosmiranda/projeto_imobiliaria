function favoriteLink(id, numPag) {
  let paglink = "";
  
  switch (numPag) {
    case 1:
      paglink = "home";
      break;
    case 2:
      paglink = "impreendimentos";
      break;
    case 3:
      paglink = "detalhe-imovel";
      break;
  }
  window.location.href = `${base}/favorite/verify/${id}&&pag=${paglink}`;
}