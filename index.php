<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>FoodCourt</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include_once 'header.php'; ?>

<!-- ══════════════════════════════════════
     PAGE: HOME
══════════════════════════════════════ -->
<div class="page active" id="page-home">

  <!-- HERO -->
  <section class="hero">
    <div class="hero-content">
      <div class="hero-badge">Now delivering near you</div>
      <h1>Good Food,<br/><span>Made Easy</span></h1>
      <p>Chef Prepared meals, at the click of a button.<br/>Order from top restaurants and get it delivered fast.</p>
    </div>
    <div class="hero-visual">
      <span class="float-emoji fe1">🍔</span>
      <span class="float-emoji fe2">🍕</span>
      <span class="float-emoji fe3">🌮</span>
      <span class="float-emoji fe4">🍜</span>
      <div class="phone">
        <div class="phone-notch"></div>
        <div class="phone-screen">
          <div class="ph">
            <div class="ph-top">
              <span>📍 Your Location</span>
              <div class="ph-logo">FoodCourt</div>
              <div class="ph-av"></div>
            </div>
            <div class="ph-search">🔍 Search restaurants, dishes...</div>
          </div>
          <div class="ph-banner"><small>Special Offer</small><b>50% OFF First Order!</b></div>
          <div class="ph-cats">
            <div class="ph-cat"><div class="ph-cat-icon" style="background:#fff0f0">🍔</div><span>Burgers</span></div>
            <div class="ph-cat"><div class="ph-cat-icon" style="background:#fff5e0">🍕</div><span>Pizza</span></div>
            <div class="ph-cat"><div class="ph-cat-icon" style="background:#f0fff0">🍜</div><span>Noodles</span></div>
            <div class="ph-cat"><div class="ph-cat-icon" style="background:#f5f0ff">🌮</div><span>Tacos</span></div>
          </div>
          <div class="ph-title">Popular Near You</div>
          <div class="ph-cards">
            <div class="ph-card"><div class="ph-card-img" style="background:#fff0f0">🍔</div><div class="ph-card-info"><b>Burger King</b><small>⭐ 4.5 · 20 min</small></div></div>
            <div class="ph-card"><div class="ph-card-img" style="background:#fff5e0">🍕</div><div class="ph-card-info"><b>Pizza House</b><small>⭐ 4.8 · 25 min</small></div></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- STATS -->
  <section class="stats" id="statsBar">
    <div class="stat reveal"><span class="stat-n" data-target="500">0</span><span class="stat-n">+</span><div class="stat-l">Restaurants</div></div>
    <div class="stat reveal"><span class="stat-n" data-target="1000">0</span><span class="stat-n">K+</span><div class="stat-l">Happy Customers</div></div>
    <div class="stat reveal"><span class="stat-n" data-target="30">0</span><span class="stat-n"> min</span><div class="stat-l">Avg Delivery</div></div>
    <div class="stat reveal"><span class="stat-n" data-target="4.8">0</span><span class="stat-n">★</span><div class="stat-l">App Rating</div></div>
  </section>

  <!-- FEATURES -->
  <section class="features">
    <div class="section-head reveal">
      <span class="section-tag">Why FoodCourt</span>
      <h2>Everything you love about food, delivered</h2>
      <p>From chef-prepared meals to your favourite local spots — we bring the best of food to your door.</p>
    </div>
    <div class="features-grid">
      <div class="feat-card reveal"><div class="feat-icon">🍽️</div><h3>Chef Prepared Meals</h3><p>Restaurant-quality meals by professional chefs, delivered fresh to your doorstep.</p></div>
      <div class="feat-card reveal"><div class="feat-icon">⚡</div><h3>Fast Delivery</h3><p>Get your food in 30 minutes or less with real-time tracking on every order.</p></div>
      <div class="feat-card reveal"><div class="feat-icon">🏪</div><h3>500+ Restaurants</h3><p>Choose from hundreds of local restaurants. Something for everyone, every day.</p></div>
      <div class="feat-card reveal"><div class="feat-icon">💳</div><h3>Easy Payment</h3><p>Card, mobile money, or cash — multiple secure payment options at your fingertips.</p></div>
    </div>
  </section>

  <!-- HOW IT WORKS -->
  <section class="how">
    <div class="section-head reveal">
      <span class="section-tag">Simple Steps</span>
      <h2>Order in just a few taps</h2>
      <p>Download the app and get your favourite food in minutes.</p>
    </div>
    <div class="steps">
      <div class="step reveal"><div class="step-n">1</div><h3>Download App</h3><p>Get FoodCourt on iOS or Android for free</p></div>
      <div class="step reveal"><div class="step-n">2</div><h3>Browse Menu</h3><p>Explore hundreds of restaurants near you</p></div>
      <div class="step reveal"><div class="step-n">3</div><h3>Place Order</h3><p>Checkout securely in seconds</p></div>
      <div class="step reveal"><div class="step-n">4</div><h3>Enjoy Food</h3><p>Sit back while we deliver hot food to your door</p></div>
    </div>
  </section>

  <?php include_once 'footer.php'; ?>