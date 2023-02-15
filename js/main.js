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

const fileUploadImage = document.querySelector('#file-upload-photo-profile')
const imgUser = document.querySelector('.img-user');
const inputTxtCPF = document.querySelector("[name=txtCPF]")
const checkNull = document.querySelectorAll(".check-null")
const inputTelefone = document.querySelector('[name=txtTelefone]')
const inputxtValueDiaria = document.querySelector('[name=txtDiaria]')


VMasker(inputxtValueDiaria).maskMoney({
  precision: 2,
  // Decimal separator -> ",90"
  separator: ',',
  // Number delimiter -> "12.345.678"
  delimiter: '.',
  // Money unit -> "R$ 12.345.678,90"
  unit: 'R$',
  // Money unit -> "12.345.678,90 R$"
 
  // Force type only number instead decimal,
  // masking decimals with ",00"
  // Zero cents -> "R$ 1.234.567.890,00"

})
VMasker(inputTxtCPF).maskPattern("999.999.999-99");
VMasker(inputTelefone).maskPattern("(99) 99999-9999");

const includeReadOnly = (input) => {
  input.value.length > 0 ? input.readOnly = true : ''
}
checkNull.forEach(input => includeReadOnly(input))



includeReadOnly(inputTxtCPF)


fileUploadImage.addEventListener('change', (event) => {
  const reader = new FileReader();
  // Define o que ocorre quando concluir:
  reader.onload = function () {
    // Define o `src` do elemento para o resultado:

    console.log(reader.result)
    imgUser.src = reader.result;
  }
  // Lê o arquivo e cria um link (o resultado vai ser enviado para o onload.

  console.log(event.target.files[0])
  reader.readAsDataURL(event.target.files[0]);


})
const eyeIcon = document.querySelector('.eye-icon')
const inputPassword = document.querySelectorAll('input[type="password"]')
console.log(inputPassword)


eyeIcon.addEventListener('click', () => {

  eyeIcon.classList.toggle('fa-eye-slash')
  eyeIcon.classList.toggle('fa-eye')
  inputPassword.forEach((event) => {


    event.type == 'password' ? event.type = 'text' : event.type = 'password';
    console.log(event.type)
  })

})


// Example starter JavaScript for disabling form submissions if there are invalid fields
