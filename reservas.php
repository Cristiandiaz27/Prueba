<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Clientes</title>
    <link rel="stylesheet" href="estilos3.css">
    
    <?php  //primera parte conexion bd 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hostal";

// Crear conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar la conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>

<section>

 <h2>Agregar Reserva</h2> 
 <form action="" name="reservas" method="post">
            <label for="num_habitacion">Número de Habitación:</label>
            <input type="text" id="num_habitacion" name="num_habitacion" required><br>
            
            <label for="fecha_entrada">Fecha de Entrada:</label>
            <input type="date" id="fecha_entrada" name="fecha_entrada" required><br>
            
            <label for="fecha_salida">Fecha de Salida:</label>
            <input type="date" id="fecha_salida" name="fecha_salida" required><br>
            
            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" required><br>
            
            <label for="observacion">Observación:</label>
            <textarea id="observacion" name="observacion"></textarea><br>
            
            <input type="submit" value="Agregar Reserva">
        </form>
</section>

<?php
// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener datos del formulario
    $num_habitacion = $_POST['num_habitacion'];
    $fecha_entrada = $_POST['fecha_entrada'];
    $fecha_salida = $_POST['fecha_salida'];
    $precio = $_POST['precio'];
    $observacion = $_POST['observacion'];

    // Preparar y ejecutar la consulta
    $sql = "INSERT INTO reservas (num_habitacion, fecha_entrada, fecha_salida, precio, observacion) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        // Vincular parámetros y ejecutar la consulta
        mysqli_stmt_bind_param($stmt, "sssss", $num_habitacion, $fecha_entrada, $fecha_salida, $precio, $observacion);

        // Ejecutar la consulta y verificar el resultado
        if (mysqli_stmt_execute($stmt)) {
            echo "<p>Reserva agregada exitosamente.</p>";
        } else {
            echo "<p>Error: " . mysqli_stmt_error($stmt) . "</p>";
        }

        // Cerrar la declaración
        mysqli_stmt_close($stmt);
    } else {
        echo "<p>Error al preparar la consulta: " . mysqli_error($conn) . "</p>";
    }

    // Cerrar la conexión
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página Ejemplo</title>
    <link rel="stylesheet" href="estilos.css">
</head>
 
</html>
    <!-- Botón para retornar a la página principal -->
    <form action="index.php" method="get">
<button type="submit">Volver a la Página Principal</button>
</form>

