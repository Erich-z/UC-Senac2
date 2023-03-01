const InputUploadPhotoProfile = document.querySelector("#file-upload-photo-profile")
const photo = document.querySelector('.img-user')
InputUploadPhotoProfile.addEventListener('change', (evt) => {
    if (!(evt.target && evt.target.files && evt.target.files.length > 0)) {
        return;
    }

    // Inicia o file-reader:
    var r = new FileReader();
    // Define o que ocorre quando concluir:
    r.onload = function () {
        // Define o `src` do elemento para o resultado:
        // console.log(r.result)

        document.querySelector('.img-user').src = r.result
        formdata = new FormData();
        formdata.append("arquivo[]", evt.target.files);
        // $.ajax({
        //     url: 'pages/edit-profile-photo.php',
        //     type: 'post', //get
        //     data: formdata,
        //     beforeSend: function() {
        //     },
        //     success: function(data) {

        //         console.log(data)
        //     }
        // });
        var formData = new FormData();
        
        formData.append("image", InputUploadPhotoProfile.files[0]);
        axios.post('edit-profile-photo.php', formData, {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        }).then(data => console.log(data.data))


    }
    // Lê o arquivo e cria um link (o resultado vai ser enviado para o onload.
    const teste = r.readAsDataURL(evt.target.files[0]);

})