(() => {
  'use strict';

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation');

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms).forEach((form) => {
    form.addEventListener('submit', (event) => {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  });
})();



const eyeIcon = document.querySelector('.eye-icon')
const inputPassword = document.querySelector('input[type="password"]')
console.log(inputPassword)

eyeIcon.addEventListener('click', () => {
  eyeIcon.classList.toggle('fa-eye')
  eyeIcon.classList.toggle('fa-eye-slash')
  inputPassword.type == 'password' ? inputPassword.type = 'text' :  inputPassword.type = 'password';
})

// Example starter JavaScript for disabling form submissions if there are invalid fields
