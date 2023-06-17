<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
        table {
            border-collapse: collapse;
            width: 100%;
        
        }
        th, td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
            background-color: #E3E4E5;
        }
        th {
            background-color: #FFFDD0;
        }
    </style>
<h2>Usuarios Registrados</h2>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Usuario</th>
            <th>Contraseña</th>
            <th>Correo electrónico</th>
            <th>Teléfono</th>
            <th>Fecha de Nacimiento</th>
            <th>Género</th>
        </tr>
        <?php
        $nombre = $_POST['nombre'];
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];
        $nacimiento = $_POST['nacimiento'];
        $genero = $_POST['genero'];

        $usuarioRegistrado = "$nombre,$usuario,$contraseña,$correo,$telefono,$nacimiento,$genero\n";
        file_put_contents("usuarios.txt", $usuarioRegistrado, FILE_APPEND);

        $usuarios = file("usuarios.txt");
        foreach ($usuarios as $usuario) {
            $datos = explode(",", $usuario);
            echo "<tr>";
            echo "<td>" . $datos[0] . "</td>";
            echo "<td>" . $datos[1] . "</td>";
            echo "<td>" . $datos[2] . "</td>";
            echo "<td>" . $datos[3] . "</td>";
            echo "<td>" . $datos[4] . "</td>";
            echo "<td>" . $datos[5] . "</td>";
            echo "<td>" . $datos[6] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
