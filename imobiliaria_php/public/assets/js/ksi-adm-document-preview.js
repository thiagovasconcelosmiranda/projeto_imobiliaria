function preloadDocument() {
  let groupImage = document.querySelector('.document-upload ');
  let previewOn = document.querySelector('.document-preview');
  let image = groupImage.querySelector('input').files[0];
  let name = groupImage.querySelector('p');
  let preview = document.querySelector('.document-preview iframe ');
  let size = document.getElementById('61');
   
  if (image['type'] === 'application/pdf') {
    let reader = new FileReader();

    reader.onload = function () {
      preview.src = reader.result;
    }

    if (image) {
      reader.readAsDataURL(image);
      name.innerHTML = image['name'];
      size.value = image['size'];
      previewOn.style.display="flex";
    } else {
      name.innerHTML = 'Upload do documento';
      previewOn.style.display="none";
      size.value = "";
    }
  } else {
    name.style.color = "red";
    name.innerHTML = 'Arquivo invílido';
    size.value = "";
    previewOn.style.display="none";
  }
}