<?php
// pages/home.php
// Hero, Brand Ethos, Signature "Cookie Study" Highlight, Daily Bakes
?>

<!-- Hero Section -->
<section class="hero-section">
  <div class="container hero-grid">
    <div>
      <div class="hero-pill">
        <span>&#10022;</span> Task 4 Website Showcase &bull; Loaf &amp; Rye
      </div>
      <h1 class="hero-title">
        Handcrafted Bread &amp; <em>Artisan Treats</em>. Baked with Care.
      </h1>
      <p class="hero-subtitle">
        Welcome to LR Bakery (Loaf &amp; Rye). Born from a reverence for 36-hour natural sourdough fermentation, pure stoneground grains, and the timeless joy of small-batch baking.
      </p>
      
      <div class="hero-ctas">
        <a href="?page=menu" class="btn btn-primary">
          Explore Daily Bakes &rarr;
        </a>
        <a href="?page=packaging" class="btn btn-outline">
          View Packaging Design (Task 3)
        </a>
      </div>

      <div class="hero-features">
        <div class="feature-item">
          <h4>36-Hour Levain</h4>
          <p>Wild yeast cultures &amp; long slow cold proofing.</p>
        </div>
        <div class="feature-item">
          <h4>Single-Origin Grains</h4>
          <p>100% stoneground flour with zero chemical additives.</p>
        </div>
        <div class="feature-item">
          <h4>Window Packaging</h4>
          <p>Bespoke sustainable packaging designed for gifting.</p>
        </div>
      </div>
    </div>

    <!-- Hero Card Spotlight: Cookie Study (Task 3) with Real Imagery -->
    <div class="hero-card">
      <div class="hero-card-badge">Signature Gift Box</div>
      
      <!-- Visual representation of the Cookie Study window box with real cookies -->
      <div class="window-box-mockup">
        <div style="display: flex; align-items: center; justify-content: center; gap: 0.5rem; margin-bottom: 0.6rem;">
          <img src="assets/images/logo.png" alt="LR Logo" style="width: 24px; height: 24px; object-fit: contain;">
          <span style="font-family: var(--font-serif); font-size: 0.85rem; letter-spacing: 0.15em; color: var(--color-caramel); text-transform: uppercase;">
            LR Bakery &bull; Cookie Study
          </span>
        </div>
        
        <div class="window-box-aperture" style="padding: 0.5rem; overflow: hidden;">
          <img src="assets/images/cookies.jpg" alt="Cookie Study freshly baked cookies" style="width: 100%; height: 160px; object-fit: cover; border-radius: 8px;">
        </div>
        
        <div style="font-size: 0.75rem; color: var(--color-muted); margin-top: 0.75rem; font-style: italic;">
          Clear acetate display window &bull; 6 Handcrafted Cookies &bull; Net Wt 240g
        </div>
      </div>

      <h3 class="hero-card-title">Cookie Study — Signature Box</h3>
      <p style="font-size: 0.9rem; color: var(--color-muted); margin-bottom: 1rem;">
        Crispy golden edges with molten Valrhona 70% dark chocolate centers, wrapped in our custom die-cut kraft window box.
      </p>
      
      <div class="hero-card-meta">
        <div>
          <span style="font-size: 0.75rem; color: var(--color-muted); display: block;">Box of Six</span>
          <span class="hero-card-price">$24.00</span>
        </div>
        <button type="button" 
                class="btn btn-primary add-btn" 
                data-id="cookie-study-box" 
                data-name="Cookie Study — Signature Box" 
                data-price="24.00">
          Add to Bakery Box +
        </button>
      </div>
    </div>
  </div>
</section>

<!-- Brand Ethos & Heritage Section with Real Craft Photography -->
<section class="section section-alt">
  <div class="container story-grid">
    <div>
      <div class="section-eyebrow">Our Philosophy</div>
      <h2 style="font-size: 2.3rem; margin-bottom: 1.25rem;">
        The good things take time. We don't rush the crumb.
      </h2>
      <p class="story-lead">
        Inspired by the artisan bakeries of Auckland (Daily Bread), San Francisco (Tartine), and New York (Levain).
      </p>
      <p class="story-body">
        At LR Bakery, every single loaf and pastry begins days before it arrives at your table. We feed our sourdough mother culture twice daily with locally milled, untreated flours. 
      </p>
      <div class="story-quote">
        &ldquo;LR represents both Loaf &amp; Rye and Loren. It is a commitment to simplicity, honest baking, and packaging that honors what is inside.&rdquo;
      </div>
      <p class="story-body">
        From our signature 36-hour country loaves with crackling blistered crusts to our layered Normandy butter croissants, our mission is to bring warm, grounded nourishment back into daily life.
      </p>
      <div style="margin-top: 1.75rem;">
        <a href="?page=story" class="btn btn-outline">Read the Full Brand Story &rarr;</a>
      </div>
    </div>

    <!-- Craft photo & Bake clock -->
    <div>
      <div style="position: relative; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-md); margin-bottom: 1.5rem;">
        <img src="assets/images/bakery-craft.jpg" alt="Artisan bread making and flour dusted table" style="width: 100%; height: 230px; object-fit: cover;">
        <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(0deg, rgba(38,22,13,0.85) 0%, transparent 100%); padding: 1.25rem; color: #fff;">
          <strong style="font-family: var(--font-serif); font-size: 1.1rem; display: block;">Handmade Techniques &bull; Long Fermentation</strong>
          <span style="font-size: 0.8rem; color: var(--color-kraft-light);">Stone hearth baking at 240&deg;C daily</span>
        </div>
      </div>

      <div style="background: var(--color-cream); border: 1px solid var(--color-border); border-radius: var(--radius-md); padding: 1.75rem; box-shadow: var(--shadow-sm);">
        <h3 style="font-size: 1.2rem; margin-bottom: 1rem; color: var(--color-cocoa-800);">The Daily Bake Schedule</h3>
        
        <div style="display: flex; flex-direction: column; gap: 0.85rem;">
          <div style="display: flex; gap: 0.85rem; align-items: center;">
            <span style="background: var(--color-cocoa-800); color: #fff; border-radius: var(--radius-sm); padding: 0.2rem 0.55rem; font-weight: 700; font-size: 0.8rem;">07:00 AM</span>
            <span style="font-size: 0.88rem; color: var(--color-cocoa-900);">Doors Open &bull; Butter Flake Croissants &amp; Batch Brew</span>
          </div>
          <div style="display: flex; gap: 0.85rem; align-items: center;">
            <span style="background: var(--color-caramel); color: #fff; border-radius: var(--radius-sm); padding: 0.2rem 0.55rem; font-weight: 700; font-size: 0.8rem;">07:30 AM</span>
            <span style="font-size: 0.88rem; color: var(--color-cocoa-900);">Heritage Country Sourdough hot from the hearth</span>
          </div>
          <div style="display: flex; gap: 0.85rem; align-items: center;">
            <span style="background: var(--color-cocoa-800); color: #fff; border-radius: var(--radius-sm); padding: 0.2rem 0.55rem; font-weight: 700; font-size: 0.8rem;">10:30 AM</span>
            <span style="font-size: 0.88rem; color: var(--color-cocoa-900);">Cookie Study window boxes freshly packaged</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Featured Favorites Showcase with Real Product Images -->
<section class="section">
  <div class="container">
    <div class="section-header">
      <div class="section-eyebrow">Handpicked Bakes</div>
      <h2 class="section-title">Fresh from Today's Hearth</h2>
      <p class="section-desc">
        Explore our most cherished loaves, laminated pastries, and signature gift packs.
      </p>
    </div>

    <div class="products-grid">
      <?php 
      $featured = array_filter($products, fn($p) => $p['is_featured']);
      foreach ($featured as $item): 
      ?>
        <div class="product-card" data-category="<?= htmlspecialchars($item['category']) ?>">
          <div class="product-thumb-wrap">
            <img src="<?= htmlspecialchars($item['image']) ?>" alt="<?= htmlspecialchars($item['name']) ?>" class="product-thumb">
            <span class="badge <?= $item['category'] === 'signature' ? 'badge-signature' : '' ?> product-thumb-badge">
              <?= htmlspecialchars($item['badge']) ?>
            </span>
          </div>

          <div style="padding: 1.5rem; display: flex; flex-direction: column; flex-grow: 1;">
            <div style="display: flex; justify-content: space-between; align-items: baseline; margin-bottom: 0.35rem;">
              <h3 class="product-name" style="margin-bottom: 0;"><?= htmlspecialchars($item['name']) ?></h3>
              <span style="font-size: 0.8rem; color: var(--color-muted); white-space: nowrap;"><?= htmlspecialchars($item['weight']) ?></span>
            </div>
            
            <div class="product-tagline"><?= htmlspecialchars($item['tagline']) ?></div>
            <p class="product-desc"><?= htmlspecialchars($item['description']) ?></p>

            <div class="product-details">
              <span><strong>Ingredients:</strong> <?= htmlspecialchars($item['ingredients']) ?></span>
              <?php if (!empty($item['allergens'])): ?>
                <span><strong>Contains:</strong> <?= implode(', ', $item['allergens']) ?></span>
              <?php endif; ?>
            </div>

            <div class="product-card-footer">
              <span class="product-price">$<?= number_format($item['price'], 2) ?></span>
              <button type="button" 
                      class="add-btn"
                      data-id="<?= htmlspecialchars($item['id']) ?>"
                      data-name="<?= htmlspecialchars($item['name']) ?>"
                      data-price="<?= $item['price'] ?>">
                Add to Box +
              </button>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div style="text-align: center; margin-top: 3.5rem;">
      <a href="?page=menu" class="btn btn-outline">
        View Entire Daily Menu (<?= count($products) ?> items) &rarr;
      </a>
    </div>
  </div>
</section>
