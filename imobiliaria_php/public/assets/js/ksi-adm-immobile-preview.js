if(document.querySelector('.immobile-photos')){
    document.querySelectorAll('.immobile-photos input, img').forEach(item => {
        item.addEventListener('change', () => {
            previewImg(item);
        })
    });
    
    function previewImg(item) {
        let idImg = item.id.split('-');
        let image = item.files[0];
        let preview = document.getElementById('img-' + idImg[1]);
        let reader = new FileReader();
    
        reader.onloadend = function () {
            preview.src = reader.result;
        }
    
        if (image) {
            reader.readAsDataURL(image);
        }
    }
}
