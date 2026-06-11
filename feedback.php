<?php include 'header.php'; ?>
    <!-- ══════════════════════════════════════
     PAGE: FEEDBACK
══════════════════════════════════════ -->
<div class="page" id="page-feedback">
  <div class="page-hero">
    <div class="page-hero-inner">
      <span class="section-tag">We're Listening</span>
      <h1>Share Your <span>Feedback</span></h1>
      <p>Bantu kami menjadi lebih baik. Pendapat Anda membentuk masa depan FoodCourt.</p>
    </div>
  </div>

  <section class="feedback-section">
    <div class="feedback-grid">
      <div class="feedback-form-box reveal">
        <h2>Send Us a Message</h2>
        <p>Kami membaca setiap kiriman dan merespons dalam waktu 24 jam. Beri tahu kami apa yang ada di pikiran Anda.</p>
        <div id="feedbackForm">
          <div class="form-group">
            <label>Nama Anda</label>
            <input type="text" id="fbName" placeholder="e.g. Amara Johnson"/>
          </div>
          <div class="form-group">
            <label>Alamat Email</label>
            <input type="email" id="fbEmail" placeholder="e.g. amara@email.com"/>
          </div>
          <div class="form-group">
            <label>Jenis Feedback</label>
            <select id="fbType">
              <option value="">Pilih kategori</option>
              <option>Delivery Experience</option>
              <option>Food Quality</option>
              <option>App Experience</option>
              <option>Restaurant Partner</option>
              <option>General Suggestion</option>
            </select>
          </div>
          <div class="form-group">
            <label>Nilai Pengalaman Anda</label>
            <div class="star-rating" id="starRating">
              <span onclick="setStars(1)">★</span>
              <span onclick="setStars(2)">★</span>
              <span onclick="setStars(3)">★</span>
              <span onclick="setStars(4)">★</span>
              <span onclick="setStars(5)">★</span>
            </div>
          </div>
          <div class="form-group">
            <label>Feedback Anda</label>
            <textarea id="fbMessage" placeholder="Beritahu kami tentang pengalaman Anda — apa yang berjalan baik atau apa yang bisa diperbaiki..."></textarea>
          </div>
          <button class="btn-submit" onclick="submitFeedback()">Kirim Masukan</button>
        </div>
        <div class="success-msg" id="successMsg">
          <span class="s-icon">🎉</span>
          <h3>Thanks for your feedback!</h3>
          <p>Kami sangat menghargai waktu yang Anda luangkan. Tim kami akan meninjau pesan Anda dan menghubungi Anda kembali dalam waktu 24 jam.</p>
        </div>
      </div>

      <div class="feedback-info reveal">
        <h2>What our <span style="color:var(--red)">customers</span> say</h2>
        <p>Kami bangga dengan masukan yang kami terima. Berikut adalah apa yang telah dibagikan oleh beberapa anggota komunitas kami tentang pengalaman mereka di FoodCourt.</p>
        <div class="testimonials">
          <div class="testi">
            <p>FoodCourt benar-benar mengubah cara saya makan selama seminggu. Makanan selalu datang dalam keadaan panas dan tepat waktu — saya benar-benar terkesan!</p>
            <div class="testi-author"><div class="testi-av" style="background:#fff0f0">👩</div><div><h4>Adaeze O.</h4><span>Lagos, Nigeria</span></div><div class="testi-stars">★★★★★</div></div>
          </div>
          <div class="testi">
            <p>Pilihan restoran yang luar biasa. Saya suka bisa menyaring berdasarkan jenis masakan. Aplikasi pilihan saya untuk makan siang setiap hari di kantor.</p>
            <div class="testi-author"><div class="testi-av" style="background:#f0fff0">👨</div><div><h4>Kwame A.</h4><span>Accra, Ghana</span></div><div class="testi-stars">★★★★★</div></div>
          </div>
          <div class="testi">
            <p>Pelacakan real-time sangat memuaskan. Saya bisa melihat pesanan saya bergerak ke arah saya. Pengiriman lebih cepat dari yang diharapkan!</p>
            <div class="testi-author"><div class="testi-av" style="background:#fff5e0">👩</div><div><h4>Zara M.</h4><span>Nairobi, Kenya</span></div><div class="testi-stars">★★★★☆</div></div>
          </div>
        </div>
      </div>
    </div>
  </section>

</div><!-- /page-feedback -->
<?php include 'footer.php'; ?>