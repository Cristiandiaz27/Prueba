<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reservas</title>
    <link rel="stylesheet" href="estilos2.css">
</head>
<body>
    <h2>Reservas</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Habitación</th>
                <th>Entrada</th>
                <th>Salida</th>
                <th>Precio</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "hostal";
            
            $conn = new mysqli($servername, $username, $password, $dbname);
            
            if ($conn->connect_error) {
                die("Conexión fallida: " . $conn->connect_error);
            }
            
            $sql = "SELECT * FROM reservas_calculadas";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["num_habitacion"]. "</td><td>" . $row["fecha_entrada"]. "</td><td>" . $row["fecha_salida"]. "</td><td>" . $row["precio"]. "</td><td>" . $row["total"]. "</td></tr>";
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

    