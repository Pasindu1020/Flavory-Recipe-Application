<?php
session_start();
if (!isset($_SESSION['logemail'])) {
    header("Location: Login.html");
    exit;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Recipe Page</title>
  <link rel="stylesheet" href="CSS/Recipepagestyles.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <div class="navbar">
      <div class="logo"> <!-- Replace with your logo -->
        <img src="Images/logo1.JPG" alt="Logo" />
      </div>
      <nav>
        <ul>
          <li><a href="HomeLogged.html">Home</a></li>
          <li><a href="AboutusLogged.html">About</a></li>
          <li><a href="#">Recipe</a></li>
          <li><a href="ContactLoggged.html">Contact</a></li>
        </ul>
      </nav>
      <div class="signup-btn">
        <button href="Recipe Page.html">Logout</button>
      </div>
    </div>
  </header>

  <br><br>

  <div class="search-container">
    <input type="text" placeholder="Search ..." />
    <i class="fas fa-search"></i>
  </div>

  <br><br><br>

  <main class="recipe-grid">
    <!-- Recipe Cards -->
    <div class="recipe-card"><a href="Recipe pages/breakfast-buns.html">
      <img src="Images/breakfast-buns.jpg" alt="Breakfast Buns" /></a>
      <h3>Breakfast Buns</h3>
      <p><i class="fas fa-clock"></i> 35 mins</p>
    </div>
    <div class="recipe-card"><a href="Recipe pages/chicken-fried-rice.html">
      <img src="Images/chicken-fried-rice.jpg" alt="Chicken Fried Rice" /></a>
      <h3>Chicken Fried Rice</h3>
      <p><i class="fas fa-clock"></i> 30 mins</p>
    </div>
    <div class="recipe-card"><a href="Recipe pages/coconut-curry-noodles.html">
      <img src="Images/coconut-curry-noodles.jpeg" alt="Coconut Curry Noodles" /></a>
      <h3>Coconut Curry Noodles</h3>
      <p><i class="fas fa-clock"></i> 25 mins</p>
    </div>

    <!-- Add the rest of the cards similarly -->
  </main>

   <main class="recipe-grid">
    <!-- Recipe Cards -->
    <div class="recipe-card"><a href="Recipe pages/lemon-mashroom-pasta.html">
      <img src="Images/lemon-mashroom-pasta.jpeg" alt="Lemon Mashroom Pasta" /></a>
      <h3>Lemon Mashroom Pasta</h3>
      <p><i class="fas fa-clock"></i> 25 mins </p>
    </div>
    <div class="recipe-card"><a href="Recipe pages/teriyaki-chicken-rice.html">
      <img src="Images/teriyaki-chicken-rice.jpeg" alt="Teriyaki Chicken Rice" /></a>
      <h3>Teriyaki Chicken Rice</h3>
      <p><i class="fas fa-clock"></i> 40 mins</p>
    </div>
    <div class="recipe-card premium-recipe" data-recipe-url="Recipe pages/Sweet-Potato-Mini-Pancakes-login.html">
      <img src="Images/mini-pancake.jfif" alt="Sweet Potato Mini Pancakes" />
      <h3>Sweet Potato Mini Pancakes</h3>
      <p><i class="fas fa-clock"></i> 15 mins</p>
    </div>
    <!-- Add the rest of the cards similarly -->
  </main>

  <div class="pagination">
    <span>1</span>
   <a href ="RecipeLogged2.php" style="text-decoration:none;" > <span>2</span></a>
    <span>&gt;</span>
  </div>

  <footer>
    <div class="footer-container">
      <div class="footer-logo">
        <img src="Images/logo1.JPG" alt="Footer Logo" />
        <p>© 2025 FoodVibes, Inc. All rights reserved.</p>
      </div>
      <div class="footer-column">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="Home.html">Home</a></li>
          <li><a href="#">Recipes</a></li>
          <li><a href="Aboutus.html">About</a></li>
          <li><a href="Contact.html">Contact</a></li>
        </ul>
      </div>
      <div class="footer-column">
        <h4>Explore</h4>
        <ul>
          <li><a href="#">Salads</a></li>
          <li><a href="#">Entrees</a></li>
          <li><a href="#">Desserts</a></li>
          <li><a href="#">Beverages</a></li>
        </ul>
      </div>
      <div class="footer-column">
        <h4>Connect</h4>
        <ul>
          <li><a href="https://facebook.com" target="_blank">Facebook</a></li>
          <li><a href="https://instagram.com" target="_blank">Instagram</a></li>
          <li><a href="https://twitter.com" target="_blank">Twitter</a></li>
          <li><a href="https://pinterest.com" target="_blank">Pinterest</a></li>
        </ul>
      </div>
    </div>
  </footer>

  <script src="MemberScript.js"></script>
</body>
</html>
