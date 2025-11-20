<?php
require_once 'connectDb.php';

// Check if user is logged in
function isLogin() {
    return isset($_SESSION["username"]);
}

// Show user icon
function showUserIcon() {
    // Currently just default icon; can replace with DB image later
    return '<i class="fa-solid fa-user fa-2xl"></i>';
}
?>

<nav class="navBar">
    <!-- Left: Logo -->
    <div class="outer-container">
        <a href="index.php" class="logo">
            <img src="img/logo.jpg" alt="FlavorHub Logo" style="height: 6vh;">
        </a>
    </div>

    <!-- Right: Links + User -->
    <div class="outer-container right">
        <!-- Main navigation links -->
        <div class="heading">
            <a href="recipe.php" class="head">Recipe</a>
            <a href="ingredient.php" class="head">Ingredient</a>
            <a href="cook.php" class="head">Cook</a>
        </div>

        <!-- User icon toggle button -->
        <button class="toggle"><?= showUserIcon() ?></button>

    
        <!-- Dropdown menu -->
        <div class="user-menu">
            <?php if (isLogin()): ?>
                <a href="logout.php" class="user-menu-option">Logout</a>
            <?php else: ?>
                <a href="register.php" class="user-menu-option">Register</a>
                <a href="login.php" class="user-menu-option">Login</a>
            <?php endif; ?>
        </div>
    </div>
</nav>

<!-- JS for user menu toggle -->
<script>
const toggleBtn = document.querySelector('.toggle');
const userMenu = document.querySelector('.user-menu');

window.addEventListener('click', function(e) {
    if (e.target.closest('.toggle')) {
        // Toggle menu
        userMenu.style.display = (userMenu.style.display === 'flex') ? 'none' : 'flex';
    } else if (!e.target.closest('.user-menu')) {
        // Close when clicking outside
        userMenu.style.display = 'none';
    }
});
</script>
