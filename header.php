<?php global $base_url; ?>
<header>
    <div class="container header">
        <img src="<?php echo $base_url; ?>/img/logo-big-v4.png" alt="logo" class="logo">
        <h1>Attracties</h1>
        <nav>
            <a href="<?php echo $base_url; ?>">Attracties</a> |
            <a href="<?php echo $base_url; ?>/admin">Admin</a>
            <?php if(isset($_SESSION['user_id'])): ?>
                | <a href="<?php echo $base_url; ?>/admin/logout.php">Uitloggen</a>
            <?php endif; ?>
        </nav>
    </div>
</header>
