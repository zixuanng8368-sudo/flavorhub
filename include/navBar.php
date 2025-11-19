<nav class="navBar">
    <div class="outer-container">
        <a href="index.php" class="logo"><img src="img/logo.jpg" alt="FlavorHub's Logo" style="width: 15vw; max-height: 8vh;"></a>
        <a href="recipe.php">Recipe</a>
        <a href="ingredient.php">Ingredient</a>
        <a href="cook.php">Cook</a>
    </div>

    <div class="outer-container">
        <?php
        if (!isset($_SESSION["username"])) {
            echo    "<a href='register.php'>Register</a>
                             <a href='login.php'>Login</a>";
        } else {
            echo '<a href="#" onclick="window.location.href=\'logout.php\'">Logout</a>';
        }
        ?>
    </div>
</nav>