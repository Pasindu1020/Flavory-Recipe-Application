<?php
session_start();
if (!isset($_SESSION['email'])) {
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
          <li><a href="Home.html">Home</a></li>
          <li><a href="Aboutus.html">About</a></li>
          <li><a href="#">Recipe</a></li>
          <li><a href="Contact.html">Contact</a></li>
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
    <div class="recipe-card"><a href="Recipe pages/Apple-oat-bar-login.html">
      <img src="Images/apple oat bar.jfif" alt="Apple-oat-bar-login" /></a>
      <h3>Apple oat bar</h3>
      <p><i class="fas fa-clock"></i> 40 mins</p>
    </div>
    <div class="recipe-card "><a href="Recipe pages/Bibimbap-login.html">
      <img src="Images/Bibimbap.jpg" alt="Bibimbap" /></a>
      <h3>Bibimbap</h3>
      <p><i class="fas fa-clock"></i> 30 mins</p>
    </div>
    <div class="recipe-card"><a href="Recipe pages/Bread-Pizza-login.html">
      <img src="Images/Bread Pizza.jfif" alt="Bread Pizza" /></a>
      <h3>Bread Pizza</h3>
      <p><i class="fas fa-clock"></i> 25 mins</p>
    </div>
    <!-- Add the rest of the cards similarly -->
  </main>

  <main class="recipe-grid">
    <!-- Recipe Cards -->
    <div class="recipe-card"><a href="Recipe page/Creamy-Vegetable-Soup-login.html">
      <img src="Images/Creamy-Vegetable-Soup.jfif" alt="Creamy-Vegetable-" /></a>
      <h3>Creamy Vegetable Soup</h3>
      <p><i class="fas fa-clock"></i> 45 mins </p>
    </div>
    <!-- Add the rest of the cards similarly -->
  </main>



  <div class="pagination">
    <span>1</span>
    <span>2</span>
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
