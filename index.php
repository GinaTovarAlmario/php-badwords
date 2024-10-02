<?php   



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
                <form action="./censoredtext.php" method="GET">
                    <div class="mb-3">
                        <label for="censoredWord" class="form-label">Parola da Censurare</label>
                        <input type="text" class="form-control" id="censoredWord" name="censoredWord" placeholder="Inserire parola da censurare">
                    </div>
                    <div class="mb-3">
                        <label for="textToChange" class="form-label">Testo da Modificare</label>
                        <textarea class="form-control" id="textToChange" name="textToChange" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Send</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>
            </div>
        </section>
    </main>
</body>
</html>