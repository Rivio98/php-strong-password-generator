<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>php-password-generator</title>
</head>

<body>
    <div class="container mt-5">
        <form>
            <div class="mb-3">
                <label class="form-label">Inserisci un numero da 6 a 25 compreso</label>
                <input type="number" min='6' max='25' class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Password generata:</label>
                <input type="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Genera</button>
        </form>
    </div>
</body>

</html>