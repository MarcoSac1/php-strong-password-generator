<?php
$utenti =[
    [
        'username' => 'franco',
        'password' => 'calippo'
    ],
    [
        'username' => 'erminio',
        'password' => 'antani'
    ],
    [
        'username' => 'pippo',
        'password' => 'panti'
    ],
    [
        'username' => 'enza',
        'password' => 'saturo'
    ],
    [
        'username' => 'antonio',
        'password' => 'giumenta'
    ],
];

session_start();

if(isset($_SESSION['logged']) && $_SESSION['logged'] === true ){
    header('Location: ./index.php');

}

if(isset($_POST['username']) && isset($_POST['password'])){
foreach ($utenti as $user){
    if ($user['username'] === $_POST['username']) {
        if ($user['password'] === $_POST['password']){
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = $_POST['password'];
            $_SESSION['logged'] = true;
    break;
        }
    }
}



}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
        <form action="./login.php" method="POST">
            <label for="username">create your username:</label>
            <input type="text" name="username" id="username">
            <label for="password">create your password:</label>
            <input type="text" name="password" id="password">
            <button type="submit">Login</button>
            <?php if(!isset($_SESSION['logged'])){ ?>
                <pre>i dati inseriti non sono corretti</pre>
            <?php } ?>
        </form>
        <ul class="  w-25">
        <?php foreach($utenti as $user ) {?>
            <li class="bg-warning ">
                <p>nome: <?php echo $user['username'];?></p>
            </li>
            <li class="bg-danger text-white mb-2">
                <p>password: <?php echo $user['password'];?></p>
            </li>
            <?php }?>
        </ul>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
