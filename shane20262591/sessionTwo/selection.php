<?php 
    include 'partials/header.php';
    session_start();
    $age =21;

    // if ($age > 20){
    //     echo 'You are old!!!';
    // } else {
    //     echo 'You are nothing but a wee baby!';
    // }
?>

<main>
        <p> My name is <?= $_SESSION['name'] ?> and I am
        <?php if ($age < 20) : ?>
            <p> young </p>
            <?php else : ?>
                <p> OLD!</p>
                <?php endif ?>
        
</main>
<?php include 'partials/footer.php'; ?>

