if (document.querySelectorAll('.group-input input') &&
  document.querySelector('#error-input-1') &&
  document.querySelector('#error-input-2') &&
  document.querySelector('#msg-error-1') &&
  document.querySelector('#msg-error-2')) {


  const input_1 = document.querySelector('#error-input-1');
  const msg_1 = document.querySelector('#msg-error-1');
  const input_2 = document.querySelector('#error-input-2');
  const msg_2 = document.querySelector('#msg-error-2');

  document.querySelectorAll('.group-input input').forEach(item => {

    if (item.type === 'button') {

      item.addEventListener('click', () => {
        if (!input_1.value) {
          input_1.classList.add('error-input-1');
          msg_1.innerHTML = "Campos obrigatório*";

        } else {
          input_1.classList.remove('error-input-1');
          msg_1.innerHTML = "";

        }

        if (!input_2.value) {
          input_2.classList.add('error-input-2');
          msg_2.innerHTML = "Campos obrigatório*";

        } else {
          input_2.classList.remove('error-input-2');
          msg_2.innerHTML = "";
        }

        let contractError = document.querySelector('#contract');
        document.querySelectorAll('.group-i-contract p input').forEach(item => {
          if (!item.checked) {
            contractError.classList.add('contract-error');
          } else {
            contractError.classList.remove('contract-error');
            if (input_1.value && input_2) {
              document.querySelector('.input_active').type = "submit";
            }
          }
        });
      });
    }
  });
}

