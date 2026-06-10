<?php include 'header.php'; ?>
    <!-- ══════════════════════════════════════
     PAGE: FAQs
══════════════════════════════════════ -->
<div class="page" id="page-faq">
  <div class="page-hero">
    <div class="page-hero-inner">
      <span class="section-tag">Help Center</span>
      <h1>Frequently Asked <span>Questions</span></h1>
      <p>Everything you need to know about FoodCourt. Can't find your answer? We're here to help.</p>
    </div>
  </div>

  <section class="faq-section">
    <div class="faq-wrap">
      <div class="faq-cats" id="faqCats">
        <button class="faq-cat active" onclick="setFaqCat('All',this)">All</button>
        <button class="faq-cat" onclick="setFaqCat('Orders',this)">Orders</button>
        <button class="faq-cat" onclick="setFaqCat('Delivery',this)">Delivery</button>
        <button class="faq-cat" onclick="setFaqCat('Payment',this)">Payment</button>
        <button class="faq-cat" onclick="setFaqCat('Account',this)">Account</button>
      </div>
      <div id="faqList"></div>
      <div class="faq-still">
        <h3>Still have questions?</h3>
        <p>Our support team is available 7 days a week to help you out.</p>
        <a onclick="navigate('feedback')">Contact Support</a>
      </div>
    </div>
  </section>

</div><!-- /page-faq -->
<?php include 'footer.php'; ?>