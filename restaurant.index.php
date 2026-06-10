<?php include 'header.php'; ?>
 <!-- ══════════════════════════════════════
     PAGE: RESTAURANTS
══════════════════════════════════════ -->
<div class="page" id="page-restaurants">
  <div class="page-hero">
    <div class="page-hero-inner">
      <span class="section-tag">500+ Partners</span>
      <h1>Find Your <span>Perfect Meal</span></h1>
      <p>Browse top-rated restaurants near you, filter by cuisine, and order in seconds.</p>
    </div>
  </div>

  <section class="rest-controls">
    <div class="section-head" style="margin-bottom:20px">
      <h2 style="font-size:1.4rem">Search Restaurants</h2>
    </div>
    <div class="rest-search-bar">
      <input class="rest-search-input" type="text" id="restSearch" placeholder="🔍  Search by name or cuisine..." oninput="filterRestaurants()"/>
    </div>
    <div class="filter-tabs" id="filterTabs">
      <button class="filter-tab active" onclick="setFilter('All',this)">All</button>
      <button class="filter-tab" onclick="setFilter('Burgers',this)">🍔 Burgers</button>
      <button class="filter-tab" onclick="setFilter('Pizza',this)">🍕 Pizza</button>
      <button class="filter-tab" onclick="setFilter('Chicken',this)">🍗 Chicken</button>
      <button class="filter-tab" onclick="setFilter('Asian',this)">🍜 Asian</button>
      <button class="filter-tab" onclick="setFilter('Healthy',this)">🥗 Healthy</button>
      <button class="filter-tab" onclick="setFilter('Desserts',this)">🍰 Desserts</button>
      <button class="filter-tab" onclick="setFilter('Drinks',this)">🧃 Drinks</button>
    </div>
  </section>

  <section class="rest-grid-section">
    <div class="rest-grid" id="restGrid"></div>
  </section>

</div><!-- /page-restaurants -->
<?php include 'footer.php'; ?>