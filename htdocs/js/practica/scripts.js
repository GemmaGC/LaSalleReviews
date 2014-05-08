
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

/*
function validarForm(){
    var camp_nombre = document.dadesUsuari.nombre;
    var valor_nombre = camp_nombre.value;

    var camp_apellido1 = document.dadesUsuari.apellido1;
    var valor_apellido1 = camp_apellido1.value;

    var camp_apellido2 = document.dadesUsuari.apellido2;
    var valor_apellido2 = camp_apellido2.value;

    var camp_dni = document.dadesUsuari.dni;
    var valor_dni = camp_dni.value;

    var camp_diaNacimiento = document.dadesUsuari.diaNacimiento;
    var valor_diaNacimiento = camp_diaNacimiento.value;
    var camp_mesNacimiento = document.dadesUsuari.mesNacimiento;
    var valor_mesNacimiento = camp_mesNacimiento.value;
    var camp_añoNacimiento = document.dadesUsuari.añoNacimiento;
    var valor_añoNacimiento = camp_añoNacimiento.value;

    var camp_direccion = document.dadesUsuari.direccion;
    var valor_direccion = camp_direccion.value;

    var camp_portera = document.dadesUsuari.portera;
    var valor_portera = camp_portera.value;
    var camp_centrocampista = document.dadesUsuari.centrocampista;
    var valor_centrocampista = camp_centrocampista.value;
    var camp_defensa = document.dadesUsuari.defensa;
    var valor_defensa = camp_defensa.value;
    var camp_wing = document.dadesUsuari.wing;
    var valor_wing = camp_wing.value;

    var camp_veterana = document.dadesUsuari.veterana;
    var valor_veterana = camp_veterana.value;

    var camp_nombreUsuario = document.dadesUsuari.nombreUsuario;
    var valor_nombreUsuario = camp_nombreUsuario.value;

    var camp_contraseña = document.dadesUsuari.contraseña;
    var valor_contraseña = camp_contraseña.value;



    if(valor_nombre == ""){
        alert("El nombre es obligatorio.");
    }else{
        if(valor_apellido1 == "" || valor_apellido2 == ""){
            alert("Los apellidos son obligatorios.");
        } else{
            if (valor_dni == ""){
                alert("El DNI es obligatorio.");
            } else {
                if (valor_dni.length!=9){
                    alert("El DNI no es correcto.");
                } else{
                    if (valor_direccion == ""){
                        alert("El mail es obligatorio.");
                    } else{
                        var pos_arroba = valor_direccion.indexOf('@');
                        if (pos_arroba<1){
                            alert("El mail es incorrecto");
                        }else{
                            var pos_punt = valor_direccion.indexOf('.');
                            if(pos_punt<1){
                                alert("El mail es incorrecto");
                            }else{
                                //SEGUEIX AQUI
                                if(!document.getElementById('portera').checked && !document.getElementById('centrocampista').checked && !document.getElementById('defensa').checked &&
                                    !document.getElementById('wing').checked){
                                    alert('Tienes que seleccionar alguna checkbox.');
                                } else{
                                    var ok=0;
                                    for(i=0;i<document.dadesUsuari.veterana.length;i++){
                                        if(document.dadesUsuari.veterana[i].checked) {
                                            ok=1;
                                        }
                                    }
                                    if (ok==0){
                                        alert("Tienes que decir si has jugado antes.");
                                    } else{

                                        if(valor_nombreUsuario == ""){
                                            alert("El nombre de usuario es obligatorio.");
                                        }else{
                                            if(valor_contraseña == ""){
                                                alert("La contraseña es obligatoria.");
                                            } else{
                                                alert("El formulari s'ha enviat correctament.");
                                                document.dadesUsuari.submit();
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}

function Borrar()
{
    if(document.getElementById("buscador").value=="Buscar...")
    {
        document.getElementById("buscador").value="";
    }
}

function Escribir()
{
    if(document.getElementById("buscador").value=="")
    {
        document.getElementById("buscador").value="Buscar...";
    }
}
*/
