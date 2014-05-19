
var timer_signup = setInterval(function(){validarRegistre()}, 1000);

function validarRegistre(){

    var value_name = document.signup-form.newUser.value;
    var value_login = document.signup-form.newLogin.value;
    var value_email = document.signup-form.newEmail.value;
    var value_password = document.signup-form.newPassword.value;

    if(value_name == "" && (value_login != "" || value_email != "" || value_password != ""))
    {
        alert("Nom incorrecte");
    }

    if((value_login == "" && (value_name != "" || value_email != "" || value_password != ""))
        || value_login.length != 7 || value_login.replace(/[^0-9]/g,"").length != 5)
    {
        alert(value_login.replace(/[^0-9]/g,"").length);
    }

    if(value_email == "" && (value_name != "" || value_login != "" || value_password != ""))
    {
        alert("Error al mail");
    }

    if(value_password.length < 6 || value_password.length > 20)
    {
        alert("Error password");
    }
}

function submitirFormularioOculto(){
    document.getElementById("review").submit();
}


function submitirFormularioEditar(){
    document.getElementById("edit").submit();
}

function submitirFormularioEsborrar(){
    document.getElementById("delete").submit();
}

/**
 *  Funció per precarregar la imatge
 */
window.onload = function() {
    var fileInput = document.getElementById('fileInput');
    var fileDisplayArea = document.getElementById('fileDisplayArea');

    fileInput.addEventListener('change', function(e) {
        var file = fileInput.files[0];
        var imageType = /image.*/;

        if (file.type.match(imageType)) {
            var reader = new FileReader();

            reader.onload = function(e) {
                fileDisplayArea.innerHTML = "";

                // Create a new image.
                var img = new Image();
                // Set the img src property using the data URL.
                img.src = reader.result;
                img.className += " " + "section_review_img";
                img.style.float = "left";

                // Add the image to the page.
                fileDisplayArea.appendChild(img);
            }

            reader.readAsDataURL(file);
        } else {
            fileDisplayArea.innerHTML = "File not supported!";
        }
    });
}




