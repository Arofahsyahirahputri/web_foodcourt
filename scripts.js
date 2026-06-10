/* ═══════════════════════════════════
   NAVIGATION
═══════════════════════════════════ */
let currentPage = 'home';

function navigate(page) {
  const targetPage = document.getElementById('page-' + page);
  if (!targetPage) {
    console.error('Page not found: page-' + page);
    return;
  }

  document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
  targetPage.classList.add('active');
  window.scrollTo({ top: 0, behavior: 'smooth' });

  // Tutup menu mobile secara otomatis setelah navigasi
  const ham = document.getElementById('ham');
  const mobileMenu = document.getElementById('mobileMenu');
  if (ham) ham.classList.remove('open');
  if (mobileMenu) mobileMenu.classList.remove('open');

  currentPage = page;

  // update nav active links
  document.querySelectorAll('.nav-links a').forEach(a => {
    a.classList.toggle('active', a.dataset.page === page);
  });
  document.querySelectorAll('.mobile-menu a').forEach(a => {
    a.classList.toggle('active', a.dataset.mob === page);
  });

  // lazy init per page
  if (page === 'restaurants') renderRestaurants();
  if (page === 'faq') renderFaqs('All');
  setTimeout(initReveal, 50);
}

/* ═══════════════════════════════════
   HAMBURGER
═══════════════════════════════════ */
function toggleMenu() {
  const ham = document.getElementById('ham');
  const mobileMenu = document.getElementById('mobileMenu');
  if (ham) ham.classList.toggle('open');
  if (mobileMenu) mobileMenu.classList.toggle('open');
}

/* ═══════════════════════════════════
   SCROLL
═══════════════════════════════════ */
window.addEventListener('scroll', () => {
  const nav = document.getElementById('navbar');
  if (nav) nav.classList.toggle('scrolled', window.scrollY > 10);
});

/* ═══════════════════════════════════
   SCROLL REVEAL
═══════════════════════════════════ */
function initReveal() {
  const els = document.querySelectorAll('#page-' + currentPage + ' .reveal');
  
  if (!window.IntersectionObserver) {
    els.forEach(el => el.classList.add('visible'));
    return;
  }

  const obs = new IntersectionObserver((entries) => {
    entries.forEach((e, i) => {
      if (e.isIntersecting) {
        setTimeout(() => e.target.classList.add('visible'), i * 80);
        obs.unobserve(e.target);
      }
    });
  }, { threshold: 0.1 });
  els.forEach(el => { if (!el.classList.contains('visible')) obs.observe(el); });
}

/* ═══════════════════════════════════
   COUNTER ANIMATION
═══════════════════════════════════ */
function animateCount(el, target) {
  const isFloat = !Number.isInteger(target);
  const dur = 1800, start = performance.now();
  const tick = (t) => {
    const prog = Math.min((t - start) / dur, 1);
    const ease = 1 - Math.pow(1 - prog, 3);
    el.textContent = isFloat ? (target * ease).toFixed(1) : Math.floor(target * ease);
    if (prog < 1) requestAnimationFrame(tick);
  };
  requestAnimationFrame(tick);
}

const statsBar = document.getElementById('statsBar');
const statsObs = new IntersectionObserver(entries => {
  if (entries[0].isIntersecting) {
    document.querySelectorAll('[data-target]').forEach(el =>
      animateCount(el, parseFloat(el.dataset.target)));
    statsObs.disconnect();
  }
}, { threshold: 0.4 });
if (statsBar) statsObs.observe(statsBar); // Pastikan statsBar ada sebelum diobservasi

/* ═══════════════════════════════════
   QR CODE (decorative)
═══════════════════════════════════ */
const qrPattern = [
  1,1,1,1,1,1,1,0,1,0,1,
  1,0,0,0,0,0,1,0,0,1,1,
  1,0,1,1,1,0,1,0,1,0,1,
  1,0,1,1,1,0,1,0,0,1,0,
  1,0,1,1,1,0,1,0,1,1,1,
  1,0,0,0,0,0,1,0,0,0,1,
  1,1,1,1,1,1,1,0,1,0,1,
  0,0,0,0,0,0,0,0,0,1,0,
  1,0,1,1,0,1,1,0,1,0,1,
  0,1,0,0,1,0,0,0,0,1,1,
  1,1,1,1,1,1,1,0,1,0,1,
];
const qrEl = document.getElementById('qr');
if (qrEl) {
  qrPattern.forEach(c => {
    const d = document.createElement('div');
    if (!c) d.classList.add('b');
    qrEl.appendChild(d);
  });
}

/* ═══════════════════════════════════
   RESTAURANTS DATA & RENDER
═══════════════════════════════════ */
const restaurants = [
  { name:"The Burger Lab",    image:"img/burger.jpeg", rating:"4.8", time:"18 min", tags:["Burgers","American"],     badge:"Popular",   cat:"Burgers" },
  { name:"Pizza Palace",      image:"img/pizza.jpeg", rating:"4.7", time:"22 min", tags:["Pizza","Italian"],         badge:"Top Rated", cat:"Pizza" },
  { name:"Crispy Wings Co",   image:"img/chicken.jpeg", rating:"4.6", time:"20 min", tags:["Chicken","Fast Food"],     badge:"",          cat:"Chicken" },
  { name:"Noodle House",      image:"img/noodle.jpeg", rating:"4.9", time:"25 min", tags:["Asian","Noodles"],         badge:"Chef Pick",  cat:"Asian" },
  { name:"Green Bowl",        image:"img/greenbowl.jpeg", rating:"4.5", time:"15 min", tags:["Healthy","Salads"],        badge:"Trending",  cat:"Healthy" },
  { name:"Sweet Endings",     image:"img/dessert.jpeg", rating:"4.8", time:"30 min", tags:["Desserts","Cakes"],        badge:"New",       cat:"Desserts" },
  { name:"Sushi Central",     image:"img/sushi.jpeg", rating:"4.7", time:"28 min", tags:["Asian","Japanese"],        badge:"",          cat:"Asian" },
  { name:"Taco Fiesta",       image:"img/tacos.jpeg", rating:"4.6", time:"20 min", tags:["Mexican","Fast Food"],     badge:"Popular",   cat:"Burgers" },
  { name:"Juice Junction",    image:"img/drinks2.jpeg", rating:"4.4", time:"12 min", tags:["Drinks","Smoothies"],      badge:"",          cat:"Drinks" },
  { name:"Grill Masters",     image:"img/beef.jpeg", rating:"4.8", time:"35 min", tags:["Grills","American"],       badge:"Top Rated", cat:"Burgers" },
  { name:"Vegan Garden",      image:"img/vegan.jpeg", rating:"4.5", time:"22 min", tags:["Healthy","Vegan"],         badge:"",          cat:"Healthy" },
  { name:"Bubble Tea Bar",    image:"img/drinks.jpeg", rating:"4.6", time:"18 min", tags:["Drinks","Desserts"],       badge:"New",       cat:"Drinks" },
];

let activeFilter = 'All';

function setFilter(cat, btn) {
  activeFilter = cat;
  document.querySelectorAll('.filter-tab').forEach(b => b.classList.remove('active'));
  btn.classList.add('active');
  filterRestaurants();
}

function filterRestaurants() {
  const searchInput = document.getElementById('restSearch');
  const q = searchInput ? searchInput.value.toLowerCase() : '';
  const filtered = restaurants.filter(r => {
    const matchCat = activeFilter === 'All' || r.cat === activeFilter;
    const matchQ = !q || r.name.toLowerCase().includes(q) || r.tags.some(t => t.toLowerCase().includes(q));
    return matchCat && matchQ;
  });
  renderGrid(filtered);
}

function renderGrid(list) {
  const g = document.getElementById('restGrid');
  if (!g) return;
  if (list.length === 0) {
    g.innerHTML = '<p style="text-align:center;color:#999;grid-column:1/-1;padding:40px">No restaurants found. Try a different search.</p>';
    return;
  }
  g.innerHTML = list.map(r => `
    <div class="rest-card">
      <div class="rest-img" style="${r.bg ? `background:${r.bg}` : ''}">
        ${r.image 
          ? `<img src="${r.image}" alt="${r.name}" style="width:100%; height:100%; object-fit:cover;">` 
          : `<span style="font-size:4rem">${r.emoji}</span>`
        }
        ${r.badge ? `<div class="rest-badge">${r.badge}</div>` : ''}
      </div>
      <div class="rest-info">
        <h3>${r.name}</h3>
        <div class="rest-meta">
          <span>⭐ ${r.rating}</span>
          <span>🕐 ${r.time}</span>
          <span>🛵 Free delivery</span>
        </div>
        <div class="rest-tags">${r.tags.map(t=>`<span class="rest-tag">${t}</span>`).join('')}</div>
      </div>
    </div>`).join('');
}

function renderRestaurants() {
  activeFilter = 'All';
  document.querySelectorAll('.filter-tab').forEach((b,i) => b.classList.toggle('active', i===0));
  filterRestaurants();
}

/* ═══════════════════════════════════
   STAR RATING
═══════════════════════════════════ */
let selectedStars = 0;
function setStars(n) {
  selectedStars = n;
  document.querySelectorAll('#starRating span').forEach((s, i) => {
    s.classList.toggle('lit', i < n);
  });
}

/* ═══════════════════════════════════
   FEEDBACK FORM
═══════════════════════════════════ */
function submitFeedback() {
  const name = document.getElementById('fbName').value.trim();
  const email = document.getElementById('fbEmail').value.trim();
  const msg = document.getElementById('fbMessage').value.trim();
  if (!name || !email || !msg) {
    alert('Please fill in your name, email and feedback message.');
    return;
  }
  document.getElementById('feedbackForm').style.display = 'none';
  document.getElementById('successMsg').style.display = 'block';
}

/* ═══════════════════════════════════
   FAQ DATA & RENDER
═══════════════════════════════════ */
const faqs = [
  { cat:"Orders", q:"How do I place an order on FoodCourt?", a:"Download the FoodCourt app, create an account, browse restaurants near you, add items to your cart, and checkout. It takes less than 2 minutes to place your first order!" },
  { cat:"Orders", q:"Can I schedule an order in advance?", a:"Yes! FoodCourt allows you to schedule orders up to 3 days in advance. Simply select your preferred delivery time during checkout." },
  { cat:"Orders", q:"Can I modify or cancel my order?", a:"You can modify or cancel your order within 5 minutes of placing it. After that, the restaurant has begun preparing your food and cancellation may not be possible." },
  { cat:"Delivery", q:"How long does delivery take?", a:"Most orders are delivered within 30 minutes. Delivery time depends on your location, the restaurant, and current demand. You can track your order in real-time in the app." },
  { cat:"Delivery", q:"What areas do you deliver to?", a:"FoodCourt currently operates in major cities across the country. Enter your address in the app to check if delivery is available in your area." },
  { cat:"Delivery", q:"Is there a delivery fee?", a:"Delivery fees vary by restaurant and distance. Some restaurants offer free delivery, and FoodCourt Pro subscribers enjoy free delivery on all orders." },
  { cat:"Payment", q:"What payment methods do you accept?", a:"We accept credit/debit cards (Visa, Mastercard), mobile money, bank transfers, and cash on delivery in select areas." },
  { cat:"Payment", q:"Is my payment information secure?", a:"Absolutely. FoodCourt uses industry-standard SSL encryption and never stores your full card details. All payments are processed through PCI-DSS compliant gateways." },
  { cat:"Payment", q:"How do refunds work?", a:"If there's an issue with your order, contact support within 48 hours. Approved refunds are processed back to your original payment method within 3–5 business days." },
  { cat:"Account", q:"How do I create a FoodCourt account?", a:"Download the app and sign up with your email or phone number. You can also sign up using your Google or Apple account for faster access." },
  { cat:"Account", q:"How do I reset my password?", a:"On the login screen, tap 'Forgot Password', enter your registered email or phone number, and follow the instructions sent to you." },
  { cat:"Account", q:"Can I have multiple delivery addresses saved?", a:"Yes! You can save multiple delivery addresses in your profile (home, work, etc.) and switch between them easily when placing an order." },
];

let currentFaqCat = 'All';
let openFaqIndex = null;

function setFaqCat(cat, btn) {
  currentFaqCat = cat;
  document.querySelectorAll('.faq-cat').forEach(b => b.classList.remove('active'));
  btn.classList.add('active');
  openFaqIndex = null;
  renderFaqs(cat);
}

function renderFaqs(cat) {
  const filtered = cat === 'All' ? faqs : faqs.filter(f => f.cat === cat);
  const list = document.getElementById('faqList');
  if (!list) return;
  list.innerHTML = filtered.map((f, i) => `
    <div class="faq-item" id="faq-${i}">
      <div class="faq-q" onclick="toggleFaq(${i})">
        <h3>${f.q}</h3>
        <div class="faq-icon">+</div>
      </div>
      <div class="faq-a"><p>${f.a}</p></div>
    </div>`).join('');
}

function toggleFaq(i) {
  const item = document.getElementById('faq-' + i);
  const isOpen = item.classList.contains('open');
  document.querySelectorAll('.faq-item').forEach(el => el.classList.remove('open'));
  if (!isOpen) item.classList.add('open');
}

/* ═══════════════════════════════════
   INIT
═══════════════════════════════════ */
window.addEventListener('DOMContentLoaded', () => {
  // Detect the page currently in the DOM
  const activePageElement = document.querySelector('.page');
  if (activePageElement) {
    const pageId = activePageElement.id.replace('page-', '');
    navigate(pageId);
  } else {
    navigate('home');
  }
});