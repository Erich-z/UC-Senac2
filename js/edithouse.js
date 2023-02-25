let photo = document.querySelectorAll('.imgPhoto');
//let file = document.querySelectorAll('.flImage');


photo.forEach((foto) => {
    foto.addEventListener('click', ({target}) => {
        target.nextElementSibling.click();
        
    });
    var file = foto.nextElementSibling;
    file.addEventListener('change', () => {
        if (file.files.length <= 0) {
            return;
        }
    
        let reader = new FileReader();
    
        reader.onload = () => {
            foto.src = reader.result;
        }
        reader.readAsDataURL(file.files[0]);
    })
});
