
document.getElementById('button-add-user').addEventListener('click', () => {
    ckeckInput();
});

async function ckeckInput() {
    let num = 0;
    document.querySelectorAll('form input').forEach(item => {
        let id = item.id.split('-');
        if (id[1]) {
            if (!item.value) {
                document.getElementById('error-' + id[1]).classList.add('error-input');
                if (document.getElementById('msg-' + id[1])) {
                    document.getElementById('msg-' + id[1]).style.display = "flex";
                }
            } else {
                document.getElementById('error-' + id[1]).classList.remove('error-input');
                document.getElementById('msg-' + id[1]).style.display = "none";
                num++;
            }
        }
    });

    // Verifica se existe uma imagem 
    let upload = document.getElementById('upload').value;
    if (!upload) {
        document.getElementById('error-0').style.display = "flex";
    } else {
        document.getElementById('error-0').style.display = "none";
    }
    //

    //Verifica passwords são iguais
    let newPassword = document.getElementById('error-5');
    let checkPassword = document.getElementById('error-6');

    if (newPassword.value === checkPassword.value) {
        checkPassword.classList.remove('error-input');
    } else {
        checkPassword.classList.add('error-input');
        document.getElementById('msg-6').style.display = "flex";
        document.getElementById('msg-6').innerHTML = "Senhas não conferem!";
    }

    let veryPassword = (newPassword.value === checkPassword.value);
    //

    //Verifica os E-mails são iguais
    let newInputEmail = document.getElementById('error-3');
    let checkInputEmail = document.getElementById('error-4');

    if (newInputEmail.value === checkInputEmail.value) {
        checkInputEmail.classList.remove('error-input');
    } else {
        checkPassword.classList.add('error-input');
        document.getElementById('msg-4').style.display = "flex";
        document.getElementById('msg-4').innerHTML = "Email não conferem!";
    }
    let veryEmail = (newInputEmail.value === checkInputEmail.value);
    //


    //Verifica se existe cpf e email
    let cpf = await checkCpf(document.getElementById('error-2').value);
    let email = await checkEmail(document.getElementById('error-3').value);

    if (document.getElementById('error-2').value) {
        if (cpf) {
            document.getElementById('error-2').classList.add('error-input');
            document.getElementById('msg-2').style.display = "flex";
            document.getElementById('msg-2').innerHTML = "Cpf já existe!";
        }
    } else {
        document.getElementById('msg-2').innerHTML = "Campos obrigatório*";
    }

    if (document.getElementById('error-3').value) {
        if (email) {
            document.getElementById('error-3').classList.add('error-input');
            document.getElementById('msg-3').style.display = "flex";
            document.getElementById('msg-3').innerHTML = "E-mail já existe!";
        }
    } else {
        document.getElementById('msg-3').innerHTML = "Campos obrigatório*";
    }
    //

    console.log(veryPassword);
    if (num == 13 && cpf == false && email == false && upload != ''
        && veryPassword && veryEmail) {
        document.getElementById('button-add-user').type = "submit";
    }
}

async function checkCpf(cpf) {
    if (cpf) {
        var req = await fetch(`${baseUrl}/ksi/ajax/login/check-cpf?cpf=${cpf}`);
        var json = await req.json();

        if (json.error != "") {
            alert(json.error);
            return;
        }

        if (json.cpf == true) {
            return true;
        } else {
            return false;
        }
    }
}

async function checkEmail(email) {
    if (email) {
        var req = await fetch(`${baseUrl}/ksi/ajax/login/check-email?email=${email}`);
        var json = await req.json();

        if (json.error != "") {
            alert(json.error);
            return;
        }

        if (json.email == true) {
            return true;
        } else {
            return false;
        }
    }
}
