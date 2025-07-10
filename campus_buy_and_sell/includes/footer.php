<footer class="new-footer">

    <div class="footer-top">
        <h2>Stay Connected, Stay Updated with UNNify!</h2>
        <form action="#" method="POST" class="newsletter-form">
            <input type="email" name="email" placeholder="Enter your email" required>
            <button type="submit"><i class='bx bx-send'></i></button>
        </form>
    </div>

    <div class="footer-main">
        <div class="footer-box">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Marketplace</a></li>
                <li><a href="#">Categories</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>

        <div class="footer-box">
            <h4>Support</h4>
            <ul>
                <li><a href="#">FAQs</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">Help Desk</a></li>
            </ul>
        </div>

        <div class="footer-box">
            <h4>Contact</h4>
            <p>📞 +234 805 292 3367</p>
            <p>📧 support@unnify.com</p>

            <div class="social-icons">
                <a href="#"><i class='bx bxl-instagram'></i></a>
                <a href="#"><i class='bx bxl-whatsapp'></i></a>
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-twitter'></i></a>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; 2024 UNNify | Built for UNN Students with ❤️</p>
    </div>
</footer>

<!-- ScrollReveal -->
<script src="https://unpkg.com/scrollreveal"></script>

<!-- Tippy.js -->
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/tippy.js@6"></script>

<script>
  // ScrollReveal animations
  ScrollReveal().reveal('[data-sr]', {
    distance: '30px',
    duration: 1000,
    easing: 'ease-out',
    origin: 'bottom',
    interval: 100,
  });

  // Tooltips
  tippy('[data-tippy-content]', {
    theme: 'light-border',
    animation: 'shift-away',
  });

  // Dark mode toggle
  const toggle = document.getElementById('toggleDark');
  toggle.addEventListener('change', () => {
    document.body.classList.toggle('dark');
  });

  // Loader simulation
  window.addEventListener('load', () => {
    setTimeout(() => {
      document.getElementById('loader').style.display = 'none';
      document.getElementById('dashboard-content').classList.remove('hidden');
    }, 1000); // Simulate loading delay
  });
</script>

