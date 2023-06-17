function validarFormulario() {
    var nombre = document.getElementById("NO").value;
    var usuario = document.getElementById("P").value;
    var contraseña = document.getElementById("Co").value;
    var confirmarContraseña = document.getElementById("C").value;
    var correo = document.getElementById("Ema").value;
    var telefono = document.getElementById("Num").value;
    var nacimiento = document.getElementById("F").value;
    var genero = document.getElementById("Genero").value;

    
    if (nombre == "" || usuario == "" || contraseña == "" || confirmarContraseña == contraseña || correo == "" || telefono == "" || nacimiento == "" || genero == "") {
        alert("Por favor, completa todos los campos");
        return false;
    }    
    if (contraseña !== confirmarContraseña) {
        alert("La contraseña y la confirmación no coinciden");
        return false;
    }

    return true;
}
