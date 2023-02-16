const inputTxtCep = document.querySelector("[name=txtCEP]");
const inputTxtRua = document.querySelector("[name=txtRua]");
const inputTxtBairro = document.querySelector("[name=txtBairro]");
const inputTxtCidade = document.querySelector("[name=txtCidade]");
const inputTxtNumero = document. querySelector("[name=txtNroCasa]")

function getCep(cepValue) {
  fetch(`https://viacep.com.br/ws/${cepValue}/json/`)
    .then((response) => response.json())
    .then((data) => {
        console.log(data)
    inputTxtRua.value = data.logradouro;
    inputTxtBairro.value = data.bairro;
    inputTxtCidade.value = data.localidade;
    inputTxtNumero.focus();
        
    });
}
inputTxtCep.addEventListener("keyup", () => {

   
  inputTxtCep.value.length === 8 ? getCep(inputTxtCep.value) : "";
});
