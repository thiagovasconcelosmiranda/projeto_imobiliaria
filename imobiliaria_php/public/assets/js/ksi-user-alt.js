function preview() {
    var image = document.querySelector('#upload').files[0];
    var preview = document.querySelector('.preview');

    var reader = new FileReader();

    reader.onload = function () {
        preview.src = reader.result;
    }

    if (image) {
        reader.readAsDataURL(image);
    } else {
        preview.src = "";
    }
}

if(document.getElementById('button-alt')){
    var buttonAlt = document.getElementById('button-alt');
    var contractInput = document.getElementById('contract-input');
    
    buttonAlt.addEventListener('click', () => {
        console.log(contractInput)
        if(!contractInput.checked){
           document.querySelector('.error').style.color="red";
        }else{
            document.querySelector('.error').style.color="#000";
            buttonAlt.type="submit";
        }
    });
}
