<?php 
    include 'partials/header.php';
    session_start();
?>
<main>
<p><?= $_SESSION['email'] ?></p>

</main>
<?php include 'partials/footer.php'; ?>

