window.onload = function () {



    let base = document.getElementById('refresh').getAttribute('data-url');
    if (document.querySelectorAll('.user-button-option-group')) {
        document.querySelectorAll('.user-button-option-group .group-accordion').forEach(item => {
            item.querySelector('.accordion').addEventListener('click', () => {
                activePainel(item);
            })

        });
    }

    function activePainel(item) {
        if (item.querySelector('.panel') != null) {
            document.querySelectorAll('.user-button-option-group .group-accordion .panel').forEach(item => {
                item.style.display = "none";
            });

            let panel = item.querySelector('.panel');
            if (panel.style.display == 'flex') {
                panel.style.display = "none";
            } else {
                panel.style.display = "flex";
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

    document.getElementById('button-alter').addEventListener('click', ()=>{
        $('#refresh').load(`${base}/ksi/alter-user`);
    });
    refreshPage(1);

    $('#button').click(function () {
        refreshPage(1);
    });

    document.querySelectorAll(".user-button-option-group .group-accordion .panel .user-i-option").forEach(button => {

        button.addEventListener('click', () => {
            refreshPage(button.id)
        });
    });

    function refreshPage(element) {
        switch (element) {

            case 1:
                $('#refresh').load(`${base}/ksi/panel`);
                break;

            case 'contract':
                $('#refresh').load(`${base}/ksi/contract?contract=locador-proprietario`);
                break;

            case 'imovel':
                $('#refresh').load(`${base}/ksi/immobile`);
                break;

            case 'contract-2':
                $('#refresh').load(`${base}/ksi/contract?contract=locatario-Inquilino`);
                break;
                case 'contract-3':
                $('#refresh').load(`${base}/ksi/contract?contract=beneficiario-favorecido`);
                break;

                case 'fiador':
                    $('#refresh').load(`${base}/ksi/contract?contract=fiador`);
                    break;
        }
    }

}





