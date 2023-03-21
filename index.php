<?php

$password_length = isset($_GET['inputNumber']) ? $_GET['inputNumber'] : '';

// var_dump($password_length);

$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*';

$array_password = [];

include 'functions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <main class="container py-5">

        <h1 class="py-3">Generatore di Password</h1>

        <form class="row g-3" action="" method="GET">

            <div class="col-auto d-flex gap-3 align-items-center">
                <span class="col-auto">Lunghezza password:</span>
                <input type="number" class="form-control" name="inputNumber" id="inputNumber">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary">Genera Password</button>
            </div>

        </form>

        <div class="py-3">
            <h3>Password Generata</h3>
            <p>Lunghezza password: <?php echo $password_length ?></p>
            <p><?php echo $password ?></p>
        </div>
            

    </main>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>