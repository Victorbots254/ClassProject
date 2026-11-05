<?php
// includes/nav.php
// Sticky brand navigation with LR monogram & active page highlights
$currentPage = $currentPage ?? 'home';
?>
<header class="site-header">
  <div class="container nav-container">
    <!-- Brand Monogram & Title with Loren's Original Logo -->
    <a href="index.php?page=home" class="brand-link" aria-label="LR Bakery Home">
      <img src="assets/images/logo.png" alt="LR Bakery Monogram Logo" class="brand-logo-img">
      <div class="brand-titles">
        <span class="brand-title">LR Bakery</span>
        <span class="brand-subtitle">Loaf &amp; Rye</span>
      </div>
    </a>

    <!-- Primary Navigation Links -->
    <nav>
      <ul class="nav-menu" id="navMenu">
        <li>
          <a href="index.php?page=home" class="nav-link <?= $currentPage === 'home' ? 'active' : '' ?>">Home</a>
        </li>
        <li>
          <a href="index.php?page=menu" class="nav-link <?= $currentPage === 'menu' ? 'active' : '' ?>">Menu &amp; Bakes</a>
        </li>
        <li>
          <a href="index.php?page=story" class="nav-link <?= $currentPage === 'story' ? 'active' : '' ?>">Our Story</a>
        </li>
        <li>
          <a href="index.php?page=packaging" class="nav-link <?= $currentPage === 'packaging' ? 'active' : '' ?>">Packaging Design</a>
        </li>
        <li>
          <a href="index.php?page=contact" class="nav-link <?= $currentPage === 'contact' ? 'active' : '' ?>">Visit &amp; Pre-Order</a>
        </li>
      </ul>
    </nav>

    <!-- Header Actions (Cart Drawer Trigger & Mobile Menu) -->
    <div class="nav-actions">
      <button type="button" class="cart-btn" id="openCartBtn" aria-label="View Bakery Box">
        <span>Bakery Box</span>
        <span class="cart-count">0</span>
      </button>

      <button type="button" class="menu-toggle" id="menuToggle" aria-label="Toggle navigation" aria-expanded="false">
        &#9776;
      </button>
    </div>
  </div>
</header>

<!-- Slideout Bakery Box / Cart Drawer -->
<div class="cart-drawer-overlay" id="cartOverlay"></div>
<aside class="cart-drawer" id="cartDrawer" aria-label="Bakery Box Drawer">
  <div class="cart-header">
    <h3 class="cart-title">Your Bakery Box</h3>
    <button type="button" class="cart-close" id="closeCartBtn" aria-label="Close box">&times;</button>
  </div>
  <div class="cart-body" id="cartBody">
    <!-- Rendered dynamically by assets/js/main.js -->
  </div>
  <div class="cart-footer">
    <div class="cart-total-row">
      <span>Estimated Total</span>
      <span id="cartTotal">$0.00</span>
    </div>
    <a href="index.php?page=contact" class="btn btn-primary" id="cartCheckoutBtn" style="width: 100%;">
      Proceed to Pre-Order &rarr;
    </a>
  </div>
</aside>
