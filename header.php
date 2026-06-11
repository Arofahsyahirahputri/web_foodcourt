<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodcourt</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <!--  -->
  <!-- ══════════════════ NAVBAR ══════════════════ -->
<nav id="navbar">
  <a class="nav-logo" href="index.php" onclick="navigate('home')">
    <span>FoodCourt</span><em></em>
  </a>
  <ul class="nav-links">
    <li><a href="aboutfc.php" data-page="about">About FC</a></li>
    <li><a href="restaurant.index.php" data-page="restaurants">Restaurants</a></li>
    <li><a href="feedback.php" data-page="feedback">Feedback</a></li>
    <li><a href="faQs.php" data-page="faq">FAQs</a></li>
  </ul>
  <div class="nav-right">
    <a href="auth.php" class="btn-login" style="text-decoration: none; display: inline-block;">Login</a>
  </div>
  <button class="hamburger" id="ham" onclick="toggleMenu()">
    <span></span><span></span><span></span>
  </button>
</nav>
<div class="mobile-menu" id="mobileMenu">
  <a href="index.php">Home</a>
  <a href="aboutfc.php" data-mob="about">About FC</a>
  <a href="restaurant.index.php" data-mob="restaurants">Restaurants</a>
  <a href="feedback.php" data-mob="feedback">Feedback</a>
  <a href="faQs.php" data-mob="faq">FAQs</a>
</div>
</body>
</html>