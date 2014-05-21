/**
 *
 * Funció que s'encarrega de comprovar el formulari de registre
 */

var timer_signup = setInterval(function(){validarRegistre()}, 1000);

function validarRegistre(){

    var value_name = document.signup_form.newUser.value;
    var value_login = document.signup_form.newLogin.value;
    var value_email = document.signup_form.newEmail.value;
    var value_password = document.signup_form.newPassword.value;

    if(value_name == "" )
    {
        document.getElementById("name").style.borderColor = "red";
    }else{
        document.getElementById("name").style.borderColor = "#fff";
    }

    if(value_login == "" || value_login.length < 7 || value_login.replace(/[^0-9]/g,"").length != 5)
    {
        document.getElementById("login").style.borderColor = "red";
    }else{
        document.getElementById("login").style.borderColor = "#fff";
    }

    if(value_email == "" )
    {
        document.getElementById("email").style.borderColor = "red";
    }else{
        document.getElementById("email").style.borderColor = "#fff";
    }

    if(value_password == "" || value_password.length < 6 || value_password.length > 20)
    {
        document.getElementById("Password").style.borderColor = "red";
    }else{
        document.getElementById("Password").style.borderColor = "#fff";
    }
}



/**
 *
 * Funció que s'encarrega de comprovar el formulari de log in sense Facebook
 */

var timer_signup2 = setInterval(function(){validarLogIn()}, 1000);

function validarLogIn(){

    var value_email = document.signup_form.email.value;
    var value_password = document.signup_form.password.value;

    if(value_email == "" )
    {
        document.getElementById("email").style.borderColor = "red";
    }else{
        document.getElementById("email").style.borderColor = "#fff";
    }

    if(value_password == "" || value_password.length < 6 || value_password.length > 20)
    {
        document.getElementById("Password").style.borderColor = "red";
    }else{
        document.getElementById("Password").style.borderColor = "#fff";
    }

}


/**
 *
 * Funció que s'encarrega de comprovar el formulari de registre amb Facebook
 */

var timer_signup3 = setInterval(function(){validarLogInFB()}, 1000);

function validarLogInFB(){

    var value_login = document.signup_form.login.value;
    var value_password = document.signup_form.password.value;

    if(value_login == "" || value_login.length < 7 || value_login.replace(/[^0-9]/g,"").length != 5)
    {
        document.getElementById("login").style.borderColor = "red";
    }else{
        document.getElementById("login").style.borderColor = "#fff";
    }

    if(value_password == "" || value_password.length < 6 || value_password.length > 20)
    {
        document.getElementById("Password").style.borderColor = "red";
    }else{
        document.getElementById("Password").style.borderColor = "#fff";
    }

}

/**
 *
 * Funció que s'encarrega de fer submit del formulari ocult
 */
function submitirFormularioOculto(){
    document.getElementById("review").submit();

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



/**
 *
 * Funció que s'encarrega de linkar amb Facebook
 */
//FACEBOOK
(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/ca_ES/sdk.js#xfbml=1&appId=292309604263355&version=v2.0";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));




