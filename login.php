<?php
session_start();

if(isset($_GET['username'])){
    $_SESSION['name'] = $_GET['username'];?>
    <h1>
        <?php echo 'welcome '. $_SESSION['name']?>
    </h1>
<?php } elseif(isset($_SESSION['name'])) {?>
    <h1>
        <?php echo 'welcome back '. $_SESSION['name']?>
    </h1>
<?php } else{?>
    <h1>username needed to Login</h1>
<?php }?>