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
      <div class="hero-badge">Sekarang mengantarkan di dekat Anda</div>
      <h1>Good Food,<br/><span>Made Easy</span></h1>
      <p>Makanan siap saji dari koki, hanya dengan sekali klik.<br/>Pesan dari restoran ternama dan dapatkan pengiriman cepat.</p>
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
      <span class="section-tag">Mengapa Food Court</span>
      <h2>Semua yang Anda sukai tentang makanan, diantar langsung ke rumah Anda.</h2>
      <p>Mulai dari hidangan yang disiapkan oleh koki hingga tempat makan lokal favorit Anda — kami menghadirkan makanan terbaik langsung ke pintu Anda.</p>
    </div>
    <div class="features-grid">
      <div class="feat-card reveal"><div class="feat-icon">🍽️</div><h3>Makanan yang Disiapkan Koki</h3><p>Hidangan berkualitas restoran yang dimasak oleh koki profesional, diantar langsung ke depan pintu Anda dalam keadaan segar.</p></div>
      <div class="feat-card reveal"><div class="feat-icon">⚡</div><h3>Pengiriman Cepat</h3><p>Dapatkan makanan Anda dalam 30 menit atau kurang dengan pelacakan waktu nyata pada setiap pesanan.</p></div>
      <div class="feat-card reveal"><div class="feat-icon">🏪</div><h3>500+ Restaurants</h3><p>Pilihlah dari ratusan restoran lokal. Ada sesuatu untuk semua orang, setiap hari.</p></div>
      <div class="feat-card reveal"><div class="feat-icon">💳</div><h3>Pembayaran Mudah</h3><p>Kartu, uang elektronik, atau uang tunai — berbagai pilihan pembayaran aman di ujung jari Anda.
</p></div>
    </div>
  </section>

  <!-- HOW IT WORKS -->
  <section class="how">
    <div class="section-head reveal">
      <span class="section-tag">Simple Steps</span>
      <h2>Pesan hanya dengan beberapa ketukan</h2>
      <p>Unduh aplikasinya dan dapatkan makanan favoritmu dalam hitungan menit.</p>
    </div>
    <div class="steps">
      <div class="step reveal"><div class="step-n">1</div><h3>Download App</h3><p>Dapatkan FoodCourt di iOS atau Android secara gratis.</p></div>
      <div class="step reveal"><div class="step-n">2</div><h3>Browse Menu</h3><p>Jelajahi ratusan restoran di dekat Anda</p></div>
      <div class="step reveal"><div class="step-n">3</div><h3>Place Order</h3><p>Selesaikan pembayaran dengan aman dalam hitungan detik.</p></div>
      <div class="step reveal"><div class="step-n">4</div><h3>Enjoy Food</h3><p>Duduk santai sementara kami mengantarkan makanan hangat ke pintu Anda.</p></div>
    </div>
  </section>

  <?php include_once 'footer.php'; ?>