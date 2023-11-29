if (document.querySelectorAll('.form input')) {
  document.querySelectorAll('.form input, .form select , .form button').forEach(item => {

    if (item.type === 'button') {
      item.addEventListener('click', () => {
        veryfiInput();
      });
    }
  });
}

function veryfiInput() {
  let count = 0;
  document.querySelectorAll('.form input, .form select').forEach(input => {
    if (input.id) {
      if (!input.value) {
        document.getElementById('msg-' + input.id).style.display = "flex";
        document.getElementById(input.id).classList.add('alert-input-error');
      } else {
        document.getElementById('msg-' + input.id).style.display = "none";
        document.getElementById(input.id).classList.remove('alert-input-error');
        count++;
      }

      document.querySelectorAll('.contact-i input').forEach(item => {


        if (item.checked) {
          document.getElementById('contract-error').style.color = "#000";
          count++;
        } else {
          document.getElementById('contract-error').style.color = "red";
        }
      })

    }
  })
  if (count == 12) {
    document.querySelector('.button-i-schedule').type = "submit";
  }
}