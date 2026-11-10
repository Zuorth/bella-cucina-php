<?php
/*
 * index.php
 * Home page. Sets the page variables, then includes the shared header and footer.
 */
$pageTitle   = 'Home';
$currentPage = 'index.php';
include('header.php');
?>

<section class="hero">
    <h2>Welcome to Bella Cucina</h2>
    <p>Fresh pasta made every morning, wood-fired pizza and family recipes from Naples.</p>
    <a class="button" href="menu.php">View Our Menu</a>
</section>

<section class="cards">
    <div class="card">
        <h3>Fresh Pasta</h3>
        <p>Rolled and cut by hand every day in our open kitchen.</p>
    </div>
    <div class="card">
        <h3>Wood-Fired Oven</h3>
        <p>Neapolitan-style pizza baked at 900&deg;F in 90 seconds.</p>
    </div>
    <div class="card">
        <h3>Family Owned</h3>
        <p>Three generations of the Russo family cooking for you.</p>
    </div>
</section>

<?php include('footer.php'); ?>
