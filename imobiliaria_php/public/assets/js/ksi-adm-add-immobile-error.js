if (document.querySelector('.group-area-immobile') &&
    document.querySelector(".group-area-immobile-end") &&
    document.querySelector('.group-area-immobile-photos')) {

    let buttonEnd = document.getElementById('button-add-end-immobile-back');
    let buttonPhoto = document.getElementById('button-add-photo-immobile-back');

    let inputImmobile = document.querySelector('.group-area-immobile');
    let endImmobile = document.querySelector(".group-area-immobile-end");
    let photoImmobile = document.querySelector('.group-area-immobile-photos');

    document.getElementById('button-add-immobile').addEventListener('click', () => {
        immobileInputError();
    });

    document.getElementById('button-add-end-immobile').addEventListener('click', () => {
        immobileInputEndError();
    });

    document.getElementById('button-add-image-immobile').addEventListener('click', () => {
        immobileImageError();
    });

    function immobileInputError() {
        let num = 0;
        document.querySelectorAll('.group-area-immobile input, select, textarea').forEach(input => {
            let id = input.id;
            if (id) {
                if (!input.value) {
                    document.getElementById(id).classList.add('input-error');
                    document.getElementById('msg-' + id).style.display = "flex";
                } else {
                    document.getElementById(id).classList.remove('input-error');
                    document.getElementById('msg-' + id).style.display = "none";
                    num++;
                }
            }
            if (num === 18) {
                inputImmobile.style.display = "none";
                endImmobile.style.display = "block";
            }
        });
    }

    function immobileInputEndError() {
        let num = 0;
        document.querySelectorAll('.group-area-immobile-end input, select').forEach(input => {
            let id = parseInt(input.id);
            if (id != null) {
                if (!input.value) {
                    document.getElementById(id).classList.add('input-error');
                    document.getElementById('msg-' + id).style.display = "flex";
                } else {
                    document.getElementById(id).classList.remove('input-error');
                    document.getElementById('msg-'+id).style.display = "none";
                    num++;
                }
            }
            if (num === 7) {
                endImmobile.style.display = "none";
                photoImmobile.style.display = "block";
            }
        });
    }

    function immobileImageError() {
        let num = 0;
        document.querySelectorAll('.immobile-photos input').forEach(input => {
            let id = input.id.split('-');

            if (id[1]) {
                if (!input.value) {
                    document.getElementById('error-' + id[1]).classList.add('input-error');
                    document.getElementById('err-' + id[1]).style.display = "flex";
                } else {
                    document.getElementById('error-' + id[1]).classList.remove('input-error');
                    document.getElementById('err-' + id[1]).style.display = "none";
                    num++;
                }
            }
            if (num === 5) {
                document.getElementById('button-add-image-immobile').type = "submit";
            }
        });
    }

   buttonEnd.addEventListener('click', ()=>{
    inputImmobile.style.display = "block";
    endImmobile.style.display = "none";
   });

   buttonPhoto.addEventListener('click', ()=>{
    endImmobile.style.display = "block";
    photoImmobile.style.display="none";
   });
}