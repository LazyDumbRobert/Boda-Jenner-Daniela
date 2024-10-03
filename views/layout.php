<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boda de Nombre y Nombre <?php echo $titulo; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Literata:ital,opsz,wght@0,7..72,200..900;1,7..72,200..900&family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/build/css/app.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin="" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <audio id="audio">
        <source src="/build/audio/background-sound.mp3" type="audio/mpeg">
    </audio>
    <?php 
        include_once __DIR__ .'/templates/header.php';
    ?>  
    <div class="contenido">
        <?php 
            echo $contenido;
        ?>
        </div>
    <?php 
        include_once __DIR__ .'/templates/footer.php'; 
    ?>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>

    <script src="/build/js/bundle.min.js" defer></script>
    
</body>
</html>