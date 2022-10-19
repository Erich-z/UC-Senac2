const eyeIcon = document.querySelector('.eye-icon')
const inputPassword = document.querySelector('input[type="password"]')
console.log(inputPassword)

eyeIcon.addEventListener('click', () => {
  eyeIcon.classList.toggle('fa-eye')
  eyeIcon.classList.toggle('fa-eye-slash')
  inputPassword.type == 'password' ? inputPassword.type = 'text' :  inputPassword.type = 'password';
})