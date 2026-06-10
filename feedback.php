<?php include 'header.php'; ?>
    <!-- ══════════════════════════════════════
     PAGE: FEEDBACK
══════════════════════════════════════ -->
<div class="page" id="page-feedback">
  <div class="page-hero">
    <div class="page-hero-inner">
      <span class="section-tag">We're Listening</span>
      <h1>Share Your <span>Feedback</span></h1>
      <p>Help us get better. Your opinion shapes the future of FoodCourt.</p>
    </div>
  </div>

  <section class="feedback-section">
    <div class="feedback-grid">
      <div class="feedback-form-box reveal">
        <h2>Send Us a Message</h2>
        <p>We read every submission and respond within 24 hours. Let us know what's on your mind.</p>
        <div id="feedbackForm">
          <div class="form-group">
            <label>Your Name</label>
            <input type="text" id="fbName" placeholder="e.g. Amara Johnson"/>
          </div>
          <div class="form-group">
            <label>Email Address</label>
            <input type="email" id="fbEmail" placeholder="e.g. amara@email.com"/>
          </div>
          <div class="form-group">
            <label>Feedback Type</label>
            <select id="fbType">
              <option value="">Select a category</option>
              <option>Delivery Experience</option>
              <option>Food Quality</option>
              <option>App Experience</option>
              <option>Restaurant Partner</option>
              <option>General Suggestion</option>
            </select>
          </div>
          <div class="form-group">
            <label>Rate Your Experience</label>
            <div class="star-rating" id="starRating">
              <span onclick="setStars(1)">★</span>
              <span onclick="setStars(2)">★</span>
              <span onclick="setStars(3)">★</span>
              <span onclick="setStars(4)">★</span>
              <span onclick="setStars(5)">★</span>
            </div>
          </div>
          <div class="form-group">
            <label>Your Feedback</label>
            <textarea id="fbMessage" placeholder="Tell us about your experience — what went great or what could be better..."></textarea>
          </div>
          <button class="btn-submit" onclick="submitFeedback()">Send Feedback</button>
        </div>
        <div class="success-msg" id="successMsg">
          <span class="s-icon">🎉</span>
          <h3>Thanks for your feedback!</h3>
          <p>We really appreciate you taking the time. Our team will review your message and get back to you within 24 hours.</p>
        </div>
      </div>

      <div class="feedback-info reveal">
        <h2>What our <span style="color:var(--red)">customers</span> say</h2>
        <p>We're proud of the feedback we receive. Here's what some of our community members have shared about their FoodCourt experience.</p>
        <div class="testimonials">
          <div class="testi">
            <p>FoodCourt has completely changed how I eat during the week. The food always arrives hot and on time — I'm genuinely impressed!</p>
            <div class="testi-author"><div class="testi-av" style="background:#fff0f0">👩</div><div><h4>Adaeze O.</h4><span>Lagos, Nigeria</span></div><div class="testi-stars">★★★★★</div></div>
          </div>
          <div class="testi">
            <p>Amazing selection of restaurants. I love being able to filter by cuisine. My go-to app for lunch every single day at work.</p>
            <div class="testi-author"><div class="testi-av" style="background:#f0fff0">👨</div><div><h4>Kwame A.</h4><span>Accra, Ghana</span></div><div class="testi-stars">★★★★★</div></div>
          </div>
          <div class="testi">
            <p>The real-time tracking is so satisfying. I can watch my order moving towards me. Delivery was faster than expected!</p>
            <div class="testi-author"><div class="testi-av" style="background:#fff5e0">👩</div><div><h4>Zara M.</h4><span>Nairobi, Kenya</span></div><div class="testi-stars">★★★★☆</div></div>
          </div>
        </div>
      </div>
    </div>
  </section>

</div><!-- /page-feedback -->
<?php include 'footer.php'; ?>