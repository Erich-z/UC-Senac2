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