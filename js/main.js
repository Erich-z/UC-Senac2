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
const inputPassword = document.querySelectorAll('input[type="password"]')
console.log(inputPassword)


  eyeIcon.addEventListener('click', () => {

    eyeIcon.classList.toggle('fa-eye-slash')
    eyeIcon.classList.toggle('fa-eye')
      inputPassword.forEach((event) => {

        
        event.type == 'password' ? event.type = 'text' :  event.type = 'password';
        console.log(event.type)
      })

  })


// Example starter JavaScript for disabling form submissions if there are invalid fields
