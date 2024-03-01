<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgriSync -
        <?php echo $titulo; ?>
    </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&family=Open+Sans&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/build/css/styles.css">

</head>

<body class="bg-gray-50">
    <?php
    include_once __DIR__ . '/templates/header.php';

    // Contenido dinámico de la página
    echo $contenido;

    include_once __DIR__ . '/templates/footer.php';

    ?>
    <!-- <script src="/build/js/bundle.min.js" defer></script> -->
</body>

</html>