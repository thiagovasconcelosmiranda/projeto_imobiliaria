let baseUrl = document.querySelector('footer').getAttribute('data-url');
if (document.querySelectorAll('.user-button-option-group')) {
    document.querySelectorAll('.user-button-option-group .group-accordion').forEach(item => {
        item.querySelector('.accordion').addEventListener('click', () => {
            activePainel(item);
        })
    });
}

function activePainel(item) {
    if (item.querySelector('.panel') != null) {
        let panel = item.querySelector('.panel');
        let idButton = item.querySelector('button').id.split('-');

        document.querySelectorAll('.panel').forEach(accordion => {
            let idPanel = accordion.id.split('-');
            if (idPanel[1] != idButton[1]) {
                accordion.style.marginTop = '-150px';
            }
        });

        if (panel.style.marginTop == '-150px') {
            panel.style.marginTop = '0';

        } else {
            panel.style.marginTop = '-150px';
        }
    }
}

document.querySelector('.nav-icon').addEventListener('click', () => {
    let modal = document.querySelector('.modal-option');

    if (modal.style.display == "flex") {
        modal.style.display = "none";
    } else {
        modal.style.display = "flex";
        setTimeout(() => {
            document.addEventListener('click', removeClick);
        }, 500);
    }
});

function removeClick() {
    document.querySelector('.modal-option').style.display = "none";
    document.removeEventListener('click', removeClick);
}

document.querySelector('.menuMobile').addEventListener('click', () => {
    let panel = document.querySelector('.aside-group');
    if (panel.style.display == "flex") {
        panel.style.display = "none";
    } else {
        panel.style.display = "flex";
    }
});

document.querySelectorAll('.modal-option p').forEach(item => {
    item.addEventListener('click', () => {
        if (item.id == 'user') {
            $('#refresh').load(`${base}/ksi/alter-user`);
        }

        if (item.id == 'information') {
            $('#refresh').load(`${base}/ksi/information`);
        }
    })
})

document.getElementById('button-alter').addEventListener('click', () => {
    $('#refresh').load(`${base}/ksi/alter-user`);
});


//client
$('#start').click(function () {
    refreshPageClient(1);
});
refreshPageClient(1);

document.querySelectorAll(".panel .user-i-option").forEach(button => {
    button.addEventListener('click', () => {
        refreshPageClient(button.id)
    });
});

function refreshPageClient(element) {
    switch (element) {
        case 1:
            $('#refresh').load(`${baseUrl}/ksi/panel`);
            document.querySelectorAll('.panel').forEach(item => {
                item.style.marginTop = "-150px";
            })
            break;
        case 'contract':
            $('#refresh').load(`${base}/ksi/contract?contract=proprietario-locador`);
            break;

        case 'imovel':
            $('#refresh').load(`${base}/ksi/immobile`);
            break;

        case 'contract-2':
            $('#refresh').load(`${base}/ksi/contract?contract=inquilino-locatario`);
            break;
        case 'contract-3':
            $('#refresh').load(`${base}/ksi/contract?contract=favorecido-beneficiario`);
            break;

        case 'fiador':
            $('#refresh').load(`${base}/ksi/contract?contract=fiador`);
            break;
    }
}

//adm
$('#start-adm').click(function () {
    refreshPageAdm('start');
});
refreshPageAdm('start');

document.querySelectorAll('.group-accordion .adm .user-i-option').forEach(button => {
    button.addEventListener('click', () => {
        refreshPageAdm(button.id)
    });
});


function refreshPageAdm(element) {
    console.log(element);

    switch (element) {
        case 'start':
            $('#refresh-adm').load(`${baseUrl}/ksi/adm/panel-adm`);
        break;
        case 'novo_usuario':
            $('#refresh-adm').load(`${baseUrl}/ksi/adm/adm-user`);
        break;
    
        default:
            break;
    }
}



