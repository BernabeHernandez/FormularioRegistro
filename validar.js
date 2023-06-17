function validarFormulario() {
    var nombre = document.getElementById("NO").value;
    var usuario = document.getElementById("P").value;
    var contraseña = document.getElementById("Co").value;
    var confirmarContraseña = document.getElementById("C").value;
    var correo = document.getElementById("Ema").value;
    var telefono = document.getElementById("Num").value;
    var nacimiento = document.getElementById("F").value;
    var genero = document.getElementById("Genero").value;

    // Validar que todos los campos estén completos
    if (nombre == "" || usuario == "" || contraseña == "" || confirmarContraseña == contraseña || correo == "" || telefono == "" || nacimiento == "" || genero == "") {
        alert("Por favor, completa todos los campos");
        return false;
    }

    // Validar que la contraseña y la confirmación coincidan
    if (contraseña !== confirmarContraseña) {
        alert("La contraseña y la confirmación no coinciden");
        return false;
    }

    // Agrega aquí cualquier otra validación que necesites

    return true;
}