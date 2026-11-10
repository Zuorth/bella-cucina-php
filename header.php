<?php
/*
 * header.php
 * Shared header for every page of the Bella Cucina site.
 * Each page sets $pageTitle and $currentPage BEFORE including this file,
 * so the <title> and the highlighted menu link change per page.
 */

// Fallback values in case a page forgets to set them
if (!isset($pageTitle))   { $pageTitle = 'Bella Cucina'; }
if (!isset($currentPage)) { $currentPage = ''; }

// Navigation links: file name => label (add a page here and it shows everywhere)
$navLinks = [
    'index.php'   => 'Home',
    'menu.php'    => 'Menu',
    'contact.php' => 'Contact',
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?> | Bella Cucina</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<!-- page header -->
<header class="site-header">
    <div class="brand">
        <span class="logo">&#127837;</span>
        <div>
            <h1>Bella Cucina</h1>
            <p class="tagline">Handmade Italian since 1998</p>
        </div>
    </div>

    <!-- menu: built from the $navLinks array -->
    <nav>
        <?php foreach ($navLinks as $file => $label): ?>
            <a href="<?php echo $file; ?>"
               class="<?php echo ($file === $currentPage) ? 'active' : ''; ?>">
                <?php echo $label; ?>
            </a>
        <?php endforeach; ?>
    </nav>
</header>

<!-- page content starts here -->
<main>
