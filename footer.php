<?php
/*
 * footer.php
 * Shared footer for every page. Included at the bottom of each content page.
 */

// Dynamic content: open/closed status based on the current hour (11am - 10pm)
date_default_timezone_set('America/New_York');
$hour   = (int) date('G');
$isOpen = ($hour >= 11 && $hour < 22);
?>
</main>
<!-- page content ends here -->

<!-- page footer -->
<footer class="site-footer">
    <p class="status <?php echo $isOpen ? 'open' : 'closed'; ?>">
        <?php echo $isOpen ? 'We are open now!' : 'We are closed right now. We open at 11am.'; ?>
    </p>
    <p>123 Mulberry Street, New York, NY &middot; (212) 555-0147 &middot;
       <a href="mailto:info@bellacucina.example">info@bellacucina.example</a></p>
    <p>&copy; <?php echo date('Y'); ?> Bella Cucina. All rights reserved.</p>
</footer>

</body>
</html>
