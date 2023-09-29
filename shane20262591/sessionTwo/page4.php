<?php 
    include 'partials/header.php';
    session_start();
?>

<main>
<p><?= $_SESSION['name'] ?></p>
<p><?= $_SESSION['email'] ?></p>

</main>
<?php include 'partials/footer.php'; ?>

