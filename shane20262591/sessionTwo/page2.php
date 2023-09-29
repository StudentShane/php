<?php 
    include 'partials/header.php';
    session_start();
?>
<main>
<p> This belongs to <?= $_SESSION['name'] ?></p>

</main>
<?php include 'partials/footer.php'; ?>
