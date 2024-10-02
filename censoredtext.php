<?php
// ! prendi il valore che si trova nella chiave censoredWord
$word = $_GET["censoredWord"];

//! prendi il valore che si trova nella chiave textToChange
$text = $_GET["textToChange"];


?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ginatovaralmario">
    <meta name="project" content="php-intro">
    <title>PHP BADWORDS</title>
    <!-- includo Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- includo css -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main class="container">
        <section class="row">
            <div claas="col-12">
                <h1 class="text-center mt-3">Php Badwords</h1>
                <p>
                    <h2>Testo inserito</h2>
                    <?php echo $text ?>
                </p>
            </div>
        </section>
    </main>
</body>
</html>