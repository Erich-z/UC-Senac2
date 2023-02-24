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

const  includeReadOnly =  (input) => {
  input.value.length > 0 ? input.readOnly = true : ''
}
checkNull.forEach(input => includeReadOnly(input))

const deleteCardButtton = document.querySelectorAll('.delete-card-buttton')
let id_Imovel = 0;

const confirmButton = document.querySelector(".confirm-button")

deleteCardButtton.forEach(data=>{

  data.addEventListener('click', ()=>{
    id_Imovel = data.id;
  })
})

confirmButton.addEventListener('click', ()=>{
  window.location.href = `../pages/delete-imv.php?id=${id_Imovel}`
})

includeReadOnly(inputTxtCPF)

const buttonCad = document.querySelector('[name=btncad]')

<<<<<<< HEAD
fileUploadImage.addEventListener('change', (event) => {
  const reader = new FileReader();
  // Define o que ocorre quando concluir:
  reader.onload = function() {
     // Define o `src` do elemento para o resultado:

     console.log(reader.result)
     imgUser.src = reader.result;
  }
  // Lê o arquivo e cria um link (o resultado vai ser enviado para o onload.

  console.log(event.target.files[0])
  reader.readAsDataURL(event.target.files[0]);


})
const eyeIcon = document.querySelector('.eye-icon')
=======
>>>>>>> origin
const inputPassword = document.querySelectorAll('input[type="password"]')

console.log(buttonCad)

buttonCad.addEventListener('click', (e) => {
  inputPassword[0].value === inputPassword[1].value ? '' : e.preventDefault()

})


console.log(buttonCad)
const eyeIcon = document.querySelector('.eye-icon')


  eyeIcon.addEventListener('click', () => {

    eyeIcon.classList.toggle('fa-eye-slash')
    eyeIcon.classList.toggle('fa-eye')
      inputPassword.forEach((event) => {

        
        event.type == 'password' ? event.type = 'text' :  event.type = 'password';
        console.log(event.type)
      })

  })

  


// Example starter JavaScript for disabling form submissions if there are invalid fields
