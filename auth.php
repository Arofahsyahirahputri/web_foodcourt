<?php include 'header.php'; ?>

<div class="page" id="page-auth">
  <!-- Hero Section untuk Halaman Auth -->
  <div class="page-hero">
    <div class="page-hero-inner">
      <span class="section-tag">Account Access</span>
      <h1>Join <span>FoodCourt</span></h1>
      <p>Log in to your account or create a new one to start exploring the best restaurants near you.</p>
    </div>
  </div>

  <!-- Form Section -->
  <section class="feedback-section" style="background: var(--gray); min-height: 60vh; display: flex; align-items: center; padding: 40px 5%;">
    <div class="faq-wrap" style="background: #fff; padding: 40px; border-radius: 24px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); width: 100%; max-width: 500px;">
      
      <!-- Tabs to switch between Login and Register -->
      <div class="faq-cats" style="margin-bottom: 30px;">
        <button class="faq-cat active" id="loginBtn" onclick="toggleAuth('login')">Login</button>
        <button class="faq-cat" id="registerBtn" onclick="toggleAuth('register')">Register</button>
      </div>

      <!-- Konten Form Login -->
      <div id="loginSection" class="reveal visible">
        <form onsubmit="event.preventDefault(); alert('Login functionality will be implemented here.');">
          <div class="form-group">
            <label>Email Address</label>
            <input type="email" placeholder="Enter your email" required />
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" placeholder="Enter your password" required />
          </div>
          <button class="btn-submit" type="submit">Login Now</button>
        </form>
      </div>

      <!-- Konten Form Registrasi -->
      <div id="registerSection" style="display: none;">
        <form onsubmit="event.preventDefault(); alert('Registration functionality will be implemented here.');">
          <div class="form-group">
            <label>Full Name</label>
            <input type="text" placeholder="e.g. John Doe" required />
          </div>
          <div class="form-group">
            <label>Email Address</label>
            <input type="email" placeholder="e.g. john@email.com" required />
          </div>
          <div class="form-group">
            <label>New Password</label>
            <input type="password" placeholder="Create a strong password" required />
          </div>
          <button class="btn-submit" type="submit">Create Account</button>
        </form>
      </div>

    </div>
  </section>

  <script>
    /**
     * Switch between Login and Registration forms
     */
    function toggleAuth(type) {
      const loginSec = document.getElementById('loginSection');
      const regSec = document.getElementById('registerSection');
      const loginBtn = document.getElementById('loginBtn');
      const regBtn = document.getElementById('registerBtn');

      if (type === 'login') {
        loginSec.style.display = 'block';
        regSec.style.display = 'none';
        loginBtn.classList.add('active');
        regBtn.classList.remove('active');
      } else {
        loginSec.style.display = 'none';
        regSec.style.display = 'block';
        loginBtn.classList.remove('active');
        regBtn.classList.add('active');
      }
    }
  </script>
</div>

<?php include 'footer.php'; ?>