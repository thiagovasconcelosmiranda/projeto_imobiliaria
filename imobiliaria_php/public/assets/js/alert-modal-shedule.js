if (document.querySelectorAll('.group-input, input, .group-input select') &&
    document.querySelector('.button-i-schedule')) {

    document.querySelector('.button-i-schedule').addEventListener('click', () => {
        verifyError();
    });
}

function verifyError() {
    let count = 0;
    document.querySelectorAll('.group-input, input, .group-input select').forEach(item => {
        if (item.id.length == 1) {
            if (!item.value) {
                document.getElementById('msg-' + item.id).style.display = "block";
                document.getElementById(item.id).classList.add('alert-input-error');
            } else {
                document.getElementById('msg-' + item.id).style.display = "none";
                document.getElementById(item.id).classList.remove('alert-input-error');
                count++;
            }
            document.querySelectorAll('.contact-i input').forEach(item => {
                if (!item.checked) {
                    document.getElementById('contract-error').classList.add('alert-error-contract');
                } else {
                    document.getElementById('contract-error').classList.remove('alert-error-contract');
                    count++;
                }
            });
        }
    });

    if (count === 12) {
        document.querySelector('.button-i-schedule').type = "submit";
    }

}
