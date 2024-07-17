<!-- header.php -->
<?php
session_start();

// Function to determine if the current page matches a given name
function isCurrentPage($pageName) {
    $currentPage = basename($_SERVER['PHP_SELF']);
    return ($currentPage === $pageName);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Secure Member Portal</title>
</head>
<body class="<?php echo basename($_SERVER['PHP_SELF'], ".php"); ?>">
 <header>
    <div class="logo">
        <img src="Logo.png" alt="Logo">
        <span class="company-name">Secure Member Portal</span>
    </div>
    <nav>
    <button class="nav-toggle" aria-label="Toggle navigation">&#9776;</button>
        <ul>
                <li><a href="index.php" <?php if (isCurrentPage('index.php')) echo 'class="active"'; ?>>Home</a></li>
                <li><a href="welcome.php" <?php if (isCurrentPage('welcome.php')) echo 'class="active"'; ?>>Welcome</a></li>
                <li><a href="protected-home.php" <?php if (isCurrentPage('protected-home.php')) echo 'class="active"'; ?>>Protected Home</a></li>
                <li><a href="login.php" <?php if (isCurrentPage('login.php')) echo 'class="active"'; ?>>Login</a></li>
                <?php if (isset($_SESSION['userId'])): ?>
                    <li><a href="logout.php">Logout</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>
</body>
</html>
