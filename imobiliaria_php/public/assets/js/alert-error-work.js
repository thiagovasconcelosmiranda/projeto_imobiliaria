if (document.querySelectorAll('.group-work-input')) {
    document.getElementById('button-work').addEventListener('click', () => {
        inputErrorWork();
    });

    function inputErrorWork() {
        let count = 0;
       
        document.querySelectorAll('.group-work-input, input, textarea').forEach(item => {
            if (parseInt(item.id)) {
                if (!item.value) {
                    document.getElementById(item.id).classList.add('error-input');
                    document.getElementById('msg-' + item.id).style.visibility = "visible";
                    document.querySelector('#select-option').classList.add('error-input');
                } else {
                    document.getElementById(item.id).classList.remove('error-input');
                    document.getElementById('msg-' + item.id).style.visibility = "hidden";
                    count++;
                    if(item.id === '51'){
                        if(item.value){
                            document.querySelector('.select-option').style.border=" 1px solid #ccc";
                            count++;
                        }
                    }
                }

                if(item.id === '54'){
                    let errorContract = document.getElementById('error-contract');
                   if(!item.checked){
                       errorContract.style.color="red";
                   }else{
                    errorContract.style.color="#000";
                    count++;
                   }
                }
            }

            if (item.type === 'file') {
                let divFile = document.querySelector('.upload');
                let spanFile = document.getElementById('msg-52');
                if (!item.value) {
                    divFile.classList.add('error-input');
                    spanFile.style.visibility = "visible";
                } else {
                    divFile.classList.remove('error-input');
                    spanFile.style.visibility = "hidden";
                    count++;
                }
            }
            
        });
        if(count === 11){
            document.getElementById('button-work').type="submit";
        }
    }

    document.getElementById('active-select').addEventListener('click', () => {
        let modal = document.querySelector('.option-i');

        if (modal.style.display == "block") {
            modal.style.display = "none";
        } else {
            modal.style.display = "block";
            setTimeout(() => {
                document.addEventListener('click', removeClick);
            }, 500);
        }
    });
    function removeClick() {
        document.querySelector('.option-i').style.display = "none";
        document.removeEventListener('click', removeClick);
    }

    document.querySelectorAll('.select-radio ').forEach(item => {
        item.addEventListener('click', () => {
            
            document.querySelector('.select-option p').innerHTML = item.querySelector('input').value;
            document.getElementById('51').value = item.querySelector('input').value;

        });
    });

   function upload(){
      let arquivo = document.getElementById('52').files[0]['name'];
      let p = document.querySelector('.upload label p');
      p.innerHTML= arquivo;
   }
}

