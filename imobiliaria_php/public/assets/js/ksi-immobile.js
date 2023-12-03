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

let detail = document.querySelector('.immobile-inf-row');
let activity = document.querySelector('.activity-row');
let documents = document.querySelector('.document-row');
let activeSelectP = document.querySelector('.active-select p');
let activeSelectI = document.querySelector('.active-select i');

document.querySelectorAll('.modal-option-immobile .group-select').forEach(item => {
    item.addEventListener('click', () => {

        if (item.querySelector('p').innerHTML == 'Detalhes') {

            if (detail.style.display == "block") {
                detail.style.display = "none";
               clearDetalhes();
            } else {
                detail.style.display = "block";
                activity.style.display = "none";
                documents.style.display = "none";
                clearAtividades();
                clearDocumento();
                addDetalhes();
            }
        }
        if (item.querySelector('p').innerHTML == 'Atividades') {
            if (activity.style.display == "flex") {
                activity.style.display = "none";
                clearAtividades();
            } else {
                activity.style.display = "flex";
                detail.style.display = "none";
                documents.style.display = "none";
               clearDetalhes();
               clearDocumento();
               addAtividades();
            }
        }
        if (item.querySelector('p').innerHTML == 'Documentos') {
            if (documents.style.display == "flex") {
                documents.style.display = "none";
                clearDocumento();
            } else {
                documents.style.display = "flex";
                activity.style.display = "none";
                detail.style.display = "none";
                clearDetalhes();
                clearAtividades();
                addDocumento();
            }
        }
    });
});

document.querySelector('#immobile-inf-out').addEventListener('click', () => {
    detail.style.display = "none";
    clearDetalhes();
});

document.querySelector('#activity-off').addEventListener('click', () => {
    activity.style.display = "none";
    clearAtividades();
});

document.querySelector('#documents-off').addEventListener('click', () => {
    documents.style.display = "none";
    clearDocumento();

});

//Documentos
function clearDocumento() {
    activeSelectP.innerHTML = "Ações";
    activeSelectI.classList.remove('fa-folder-open');
}

function addDocumento() {
    activeSelectP.innerHTML = "Documentos";
    activeSelectI.classList.add('fa-folder-open');
}
//

//Detalhes
function addDetalhes() {
    activeSelectI.classList.add('fa-bars');
    activeSelectP.innerHTML = "Detalhes";
}

function clearDetalhes() {
    activeSelectI.classList.remove('fa-bars');
    activeSelectP.innerHTML = "Ações";
}
//

//Atividades
function clearAtividades() {
    activeSelectP.innerHTML = "Ações";
    activeSelectI.classList.remove('fa-eye');
}

function addAtividades() {
    activeSelectI.classList.add('fa-eye');
    activeSelectP.innerHTML = "Atividades";
}
//


