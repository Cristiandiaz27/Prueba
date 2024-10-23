<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Clientes</title>
    <link rel="stylesheet" href="estilos1.css">
</head>
<body>
    <h2>Clientes</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>DNI</th>
                <th>Sexo</th>
                <th>Fecha de Nacimiento</th>
                <th>País</th>
                <th>Provincia</th>
                <th>Ciudad</th>
                <th>Código Postal</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Observación</th>
            </tr>
        </thead>
    </tbody>
       <?php
       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "hostal";

       $conn = new mysqli($servername, $username, $password, $dbname);
            
       if ($conn->connect_error) {
           die("Conexión fallida: " . $conn->connect_error);
       }
       
       $sql = "SELECT * FROM clientes";
       $result = $conn->query($sql);
       
       if ($result->num_rows > 0) {
           while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"]. "</td><td>" . $row["nombre"]. "</td><td>" . $row["apellidos"]. "</td><td>" . $row["dni"]. "</td><td>" . $row["sexo"]. "</td><td>" . $row["fecha_nacimiento"]. "</td><td>" . $row["pais"]. "</td><td>" . $row["provincia"]. "</td><td>" . $row["ciudad"]. "</td><td>" . $row["codigo_postal"]. "</td><td>" . $row["direccion"]. "</td><td>" . $row["telefono"]. "</td><td>" . $row["observacion"]. "</td></tr>";
           }
       } else {
           echo "<tr><td colspan='6'>0 resultados</td></tr>";
       }
       ?>
   </tbody>
</table>
<form action="index.php" method="get">
<button type="submit">Volver a la Página Principal</button>
</form>
