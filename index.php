<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
</head>
<body>
    <header >
        <ul class="d-flex justify-content-between">
            <li>
                <a href="./index.php">Home</a>
            </li>
            <li>
                <a href="./login.php">Login</a>
            </li>
            <li>
                <a href="./logout.php">Logout</a>
            </li>
        </ul>
    </header>
    <main>
        <?php if (isset($_SESSION['logged']) && $_SESSION['logged']===true){?>
        <h2>
            Benvenuto <?php echo $_SESSION['username'] ?>
        </h2>
        <?php } else {?>
        <h2>
            Mi dispiace non hai i permessi necessari
        </h2>
        <?php } ?>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>


