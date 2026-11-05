<?php
// includes/footer.php
// Brand footer with bakery hours, student design credentials, and main.js
?>
  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        <!-- Brand identity col -->
        <div class="footer-brand">
          <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem;">
            <img src="assets/images/logo.png" alt="LR Logo" style="width: 44px; height: 44px; object-fit: contain; filter: brightness(1.2) drop-shadow(0 2px 4px rgba(0,0,0,0.3));">
            <h3 style="margin: 0;">Loaf &amp; Rye Bakery</h3>
          </div>
          <p>
            An artisan neighborhood bakery dedicated to 36-hour wild sourdough fermentation, flaky butter viennoiserie, and small-batch chocolate chip cookies packaged with thoughtful care.
          </p>
          <div style="margin-top: 1.25rem;">
            <span class="badge" style="background: var(--color-caramel); color: #fff;">
              Crafted with Care &bull; Shared with Joy
            </span>
          </div>
        </div>

        <!-- Quick Links -->
        <div class="footer-col">
          <h4>Explore</h4>
          <ul class="footer-links">
            <li><a href="?page=home">Home</a></li>
            <li><a href="?page=menu">Daily Bakery Menu</a></li>
            <li><a href="?page=story">Our Sourdough Philosophy</a></li>
            <li><a href="?page=packaging">Packaging Study (Task 3)</a></li>
            <li><a href="?page=contact">Pre-Order Inquiries</a></li>
          </ul>
        </div>

        <!-- Hours & Bakes -->
        <div class="footer-col">
          <h4>Bake Schedule</h4>
          <ul class="footer-links" style="line-height: 1.8;">
            <li><strong>Tue – Fri:</strong> 7:00 AM – 3:00 PM</li>
            <li><strong>Sat – Sun:</strong> 7:30 AM – 2:00 PM</li>
            <li><strong>Monday:</strong> Rest &amp; Starter Feeding</li>
            <li style="margin-top: 0.5rem; color: var(--color-caramel-light);">Warm loaves off the stone hearth every morning at 7:30 AM.</li>
          </ul>
        </div>

        <!-- Bakery Address & Credits -->
        <div class="footer-col">
          <h4>Bakery &amp; Kitchen</h4>
          <p style="font-size: 0.88rem; line-height: 1.6; margin-bottom: 1rem;">
            142 Artisan Lane, Ponsonby / Market District<br>
            Fresh loaves &bull; Handcrafted gift sets
          </p>
          <p style="font-size: 0.82rem; color: var(--color-kraft-dark);">
            Telephone: (09) 345-BAKE<br>
            Email: hello@loafandrye.co.nz
          </p>
        </div>
      </div>

      <!-- Footer Bottom -->
      <div class="footer-bottom">
        <div>
          &copy; <?= date('Y') ?> Loaf &amp; Rye Bakery (LR Bakery). All rights reserved.
        </div>
        <div>
          Design &amp; Concept by <span class="student-credit">Loren (Zihao Ye &bull; ID: 270845446)</span> &bull; Task 4: Website Design
        </div>
      </div>
    </div>
  </footer>

  <!-- Interactive Client JS -->
  <script src="assets/js/main.js"></script>
</body>
</html>
