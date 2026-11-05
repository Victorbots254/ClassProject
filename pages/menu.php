<?php
// pages/menu.php
// Full Bakery Menu with Real Product Photography & Interactive Filter
$pageTitle = 'Daily Bakery Menu & Treats';
?>

<section class="section" style="padding-top: 3.5rem;">
  <div class="container">
    <div class="section-header">
      <div class="section-eyebrow">Loaf &amp; Rye Pantry</div>
      <h1 class="section-title">Daily Hearth &amp; Oven Menu</h1>
      <p class="section-desc">
        Handmade sourdough loaves, flaky cultured butter pastries, and small-batch cookie gift boxes. Filter by category below or add items directly to your bakery pre-order box.
      </p>
    </div>

    <!-- Category Filter Bar -->
    <div class="menu-filter-bar">
      <button type="button" class="filter-btn active" data-filter="all">All Items (<?= count($products) ?>)</button>
      <button type="button" class="filter-btn" data-filter="signature">Signature Box</button>
      <button type="button" class="filter-btn" data-filter="bread">Artisan Bread</button>
      <button type="button" class="filter-btn" data-filter="pastry">Viennoiserie</button>
      <button type="button" class="filter-btn" data-filter="treats">Cookies &amp; Treats</button>
      <button type="button" class="filter-btn" data-filter="beverage">Coffee</button>
    </div>

    <!-- Products Grid with Real Photos -->
    <div class="products-grid">
      <?php foreach ($products as $item): ?>
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
                <span><strong>Allergens:</strong> <?= implode(', ', $item['allergens']) ?></span>
              <?php else: ?>
                <span><strong>Allergens:</strong> None reported</span>
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

    <!-- Dietary & Allergen Note -->
    <div style="margin-top: 4rem; padding: 2.5rem; background: var(--color-kraft-light); border-radius: var(--radius-md); text-align: center; border: 1px solid var(--color-border-dark);">
      <h4 style="margin-bottom: 0.5rem; color: var(--color-cocoa-800); font-size: 1.25rem;">A Note on Our Ingredients &amp; Allergens</h4>
      <p style="font-size: 0.95rem; color: var(--color-muted); max-width: 750px; margin: 0 auto; line-height: 1.6;">
        All our artisan sourdough breads undergo a 36-hour wild yeast fermentation, which significantly degrades gluten proteins and makes them gentler on sensitive stomachs. However, our kitchen handles wheat, tree nuts, eggs, and dairy. Please consult our staff if you have severe allergies.
      </p>
    </div>
  </div>
</section>
