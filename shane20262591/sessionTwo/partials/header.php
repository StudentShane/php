<?php 
define('ROOT_DIR', 'http://localhost/shane20262591/sessionTwo/');
$pageTitle = "Shane's site";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>
    
</head>
<body>
    <nav>
        <ul>
            <li><a href="<?= ROOT_DIR ?>index.php">Home page</a></li>
            <li><a href="<?= ROOT_DIR ?>page2.php">Page 2</a></li>
            <li><a href="<?= ROOT_DIR ?>page3.php">Page 3</a></li>
            <li><a href="<?= ROOT_DIR ?>page4.php">Page 4</a></li>
        </ul>
    </nav>

