
if (document.querySelectorAll('.group-i')) {
    document.getElementById('button-login-adm').addEventListener('click', () => {
        inputLoginError();
    });


    function inputLoginError() {
        let num = 0;
        document.querySelectorAll('.group-i input').forEach(item => {
            let id = item.id;
            if (id) {
                if (!item.value) {
                    console.log(id);
                    document.getElementById(id).classList.add('alert-error-login');
                    document.getElementById('msg-' + id).style.display = "flex";
                } else {
                    document.getElementById(id).classList.remove('alert-error-login');
                    document.getElementById('msg-' + id).style.display = "none";
                    num++;
                }
            }
        });

        if (num === 2) {
            document.getElementById('button-login-adm').type="submit";
        }
    }

}
