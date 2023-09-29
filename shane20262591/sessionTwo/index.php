<?php 
    include 'partials/header.php';
    session_start();
    $_SESSION['name'] = 'Shane';    
    $_SESSION['email'] = '20262591@myclyde.ac.uk';    
?>
<main>
<p> This belongs to <?= $pageTitle ?> :-D</p>

</main>
<?php include 'partials/footer.php'; ?>
