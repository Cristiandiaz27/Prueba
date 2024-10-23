<!DOCTYPE html>
<html lang="es">
<head>
    <title>Administración Hotel</title>
    <?php // Metaetiquetas globales importadas
        include('metaetiquetas.php');
    ?>
    <meta name='revised' content='Tuesday, February 13th, 2017, 13:22 pm' /><!-- Última revisión del sitio -->
    
</head>
<body>
    <?php
        include('titulo.php');
        include('menu-principal.php');
        echo '<div id="cajaContenido">';
        echo '<div id="cajaEntradas">';
        // Aquí puedes agregar contenido dinámico
        echo '<h2>Bienvenido a la Administración del Hotel</h2>';
        echo '<p>Gestione todas las operaciones desde este panel.</p>';
        echo '</div>';
        include('aside.php');
        echo '</div>';
        include('footer.php');
       
        
        
    ?>
</body>
</html>
