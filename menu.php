<?php
/*
 * menu.php
 * Menu page. The dishes are stored in an array and printed with loops,
 * so adding a dish only means adding one line to the array.
 */
$pageTitle   = 'Menu';
$currentPage = 'menu.php';
include('header.php');

// Menu data: category => list of [name, description, price]
$menu = [
    'Antipasti' => [
        ['Bruschetta', 'Grilled bread, tomato, basil, garlic', 9.50],
        ['Calamari Fritti', 'Fried squid with lemon aioli', 14.00],
    ],
    'Pasta' => [
        ['Spaghetti Carbonara', 'Egg, pecorino, guanciale, black pepper', 19.00],
        ['Lasagna della Nonna', 'Beef ragu, bechamel, parmigiano', 21.50],
    ],
    'Pizza' => [
        ['Margherita', 'Tomato, fresh mozzarella, basil', 16.00],
        ['Diavola', 'Spicy salami, chili oil, mozzarella', 18.50],
    ],
    'Dolci' => [
        ['Tiramisu', 'Espresso-soaked ladyfingers, mascarpone', 9.00],
        ['Cannoli', 'Crisp shells, sweet ricotta, pistachio', 8.00],
    ],
];
?>

<h2 class="page-title">Our Menu</h2>

<?php foreach ($menu as $category => $dishes): ?>
    <section class="menu-section">
        <h3><?php echo $category; ?></h3>
        <?php foreach ($dishes as $dish): ?>
            <div class="menu-item">
                <div>
                    <strong><?php echo $dish[0]; ?></strong>
                    <p><?php echo $dish[1]; ?></p>
                </div>
                <span class="price">$<?php echo number_format($dish[2], 2); ?></span>
            </div>
        <?php endforeach; ?>
    </section>
<?php endforeach; ?>

<?php include('footer.php'); ?>
