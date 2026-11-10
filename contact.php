<?php
/*
 * contact.php
 * Contact page with opening hours and a simple reservation form.
 * When the form is submitted, the page shows a confirmation message.
 */
$pageTitle   = 'Contact';
$currentPage = 'contact.php';
include('header.php');

// Opening hours, printed in a table below
$hours = [
    'Monday - Thursday' => '11:00am - 10:00pm',
    'Friday - Saturday' => '11:00am - 11:00pm',
    'Sunday'            => '12:00pm - 9:00pm',
];

// Check if the reservation form was submitted
$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // htmlspecialchars() stops users from injecting HTML into the page
    $name   = htmlspecialchars(trim($_POST['name'] ?? ''));
    $guests = (int) ($_POST['guests'] ?? 0);

    if ($name === '' || $guests < 1) {
        $message = '<p class="error">Please enter your name and number of guests.</p>';
    } else {
        $message = "<p class=\"success\">Thank you, $name! Your table for $guests is requested. We'll call to confirm.</p>";
    }
}
?>

<h2 class="page-title">Visit Us</h2>

<div class="two-col">
    <section>
        <h3>Opening Hours</h3>
        <table class="hours">
            <?php foreach ($hours as $days => $time): ?>
                <tr><td><?php echo $days; ?></td><td><?php echo $time; ?></td></tr>
            <?php endforeach; ?>
        </table>
    </section>

    <section>
        <h3>Reserve a Table</h3>
        <?php echo $message; ?>
        <form method="post" action="contact.php">
            <label>Name <input type="text" name="name"></label>
            <label>Guests <input type="number" name="guests" min="1" max="12"></label>
            <button class="button" type="submit">Request Table</button>
        </form>
    </section>
</div>

<?php include('footer.php'); ?>
