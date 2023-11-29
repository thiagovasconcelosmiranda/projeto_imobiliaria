document.querySelector('.select-option-i').addEventListener('click', () => {
    let modal = document.querySelector('.modal-option-immobile');

    if (modal.style.display == "block") {
        modal.style.display = "none";

    } else {
        modal.style.display = "block";
        setTimeout(() => {
            document.addEventListener('click', removeEvent);
        }, 500);
    }

});

function removeEvent() {
    document.querySelector('.modal-option-immobile').style.display = "none";
    document.removeEventListener('click', removeEvent);
}

document.querySelectorAll('.modal-option-immobile .group-select').forEach(item => {
    item.addEventListener('click', () => {
    if(item.querySelector('p').innerHTML == 'Detalhes'){
        let detail = document.querySelector('.immobile-inf-row');

        if(detail.style.display=="block"){
            detail.style.display="none";
        }else{
            detail.style.display="block"
        }
    }
    });

});

document.querySelector('#immobile-inf-out').addEventListener('click', ()=>{
    document.querySelector('.immobile-inf-row').style.display="none";
});

