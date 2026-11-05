<?php
// pages/packaging.php
// Dedicated showcase of Task 3: Packaging Design ("Cookie Study" Window Box)
$pageTitle = 'Packaging Design & Gift Boxes';
?>

<section class="section" style="padding-top: 3.5rem;">
  <div class="container">
    <div class="section-header">
      <div class="section-eyebrow">Task 3 Packaging Showcase</div>
      <h1 class="section-title">The &ldquo;Cookie Study&rdquo; Window Box</h1>
      <p class="section-desc">
        Bridging tactile craftsmanship with modern shelf presentation. How our signature cookie packaging protects freshness while displaying the artisan bake.
      </p>
    </div>

    <!-- Packaging Feature Layout with Real Logo & Cookie Photo -->
    <div class="packaging-feature" style="margin-bottom: 5rem;">
      <!-- Visual Model with Loren's Logo & Real Cookies -->
      <div style="background: var(--color-white); border: 1px solid var(--color-border); border-radius: var(--radius-lg); padding: 2.5rem; box-shadow: var(--shadow-md); text-align: center;">
        <div style="display: inline-block; width: 100%; max-width: 400px;">
          <div class="window-box-mockup" style="background: #EFE6DC; border: 2px solid var(--color-kraft-dark); box-shadow: var(--shadow-md); padding: 1.75rem 1.25rem;">
            <!-- Brand header on box -->
            <div style="display: flex; align-items: center; justify-content: center; gap: 0.65rem; margin-bottom: 0.85rem;">
              <img src="assets/images/logo.png" alt="LR Monogram" style="width: 32px; height: 32px; object-fit: contain;">
              <div>
                <div style="font-family: var(--font-serif); font-size: 0.95rem; letter-spacing: 0.15em; color: var(--color-cocoa-800); text-transform: uppercase; font-weight: 700;">
                  Loaf &amp; Rye
                </div>
                <div style="font-size: 0.7rem; color: var(--color-caramel); letter-spacing: 0.2em; text-transform: uppercase;">
                  Cookie Study &bull; Signature Collection
                </div>
              </div>
            </div>
            
            <!-- Window opening with real cookies -->
            <div class="window-box-aperture" style="background: #ffffff; padding: 0.5rem; overflow: hidden; border-radius: 12px; border: 1.5px solid var(--color-border-dark);">
              <img src="assets/images/cookies.jpg" alt="Artisan chocolate chip cookies seen through transparent window" style="width: 100%; height: 190px; object-fit: cover; border-radius: 8px;">
            </div>

            <div style="margin-top: 1rem; display: flex; justify-content: space-between; align-items: center; font-size: 0.75rem; color: var(--color-cocoa-700);">
              <span>Baked with Care</span>
              <span class="badge" style="background: var(--color-cocoa-800); color: #fff;">Net Wt 240g &bull; 6 Cookies</span>
              <span>LR Bakery</span>
            </div>
          </div>
        </div>
        <p style="font-size: 0.85rem; color: var(--color-muted); margin-top: 1rem;">
          Final Concept 02: Window Box with transparent food-safe acetate display window.
        </p>
      </div>

      <!-- Engineering & Material Specifications -->
      <div class="dieline-specs">
        <div class="section-eyebrow" style="margin-bottom: 0.35rem;">Technical Specifications</div>
        <h3 style="font-size: 1.6rem; margin-bottom: 1rem;">Dieline &amp; Structural Architecture</h3>
        <p style="font-size: 0.92rem; color: var(--color-muted); line-height: 1.6;">
          Developed from preliminary concept sketches (Sleeve Box, Drawer Box, Gable Box) and refined to maximize product visibility while maintaining stackable shelf rigidity.
        </p>

        <ul class="spec-list">
          <li>
            <span>Material Stock</span>
            <strong>A2 Cardboard (280–350 gsm Kraft)</strong>
          </li>
          <li>
            <span>Display Window</span>
            <strong>Food-safe clear acetate film</strong>
          </li>
          <li>
            <span>Capacity</span>
            <strong>6 Handcrafted Cookies (Net Wt 240g)</strong>
          </li>
          <li>
            <span>Color Palette</span>
            <strong>Kraft board, Cream backdrop, Cocoa print</strong>
          </li>
          <li>
            <span>Closure System</span>
            <strong>Tuck-in closing flaps with safety seal tab</strong>
          </li>
          <li>
            <span>Environmental Footprint</span>
            <strong>100% Biodegradable board &amp; soy-based inks</strong>
          </li>
        </ul>
      </div>
    </div>

    <!-- 7 Assembly Instructions (from Slide 34) -->
    <div style="margin-bottom: 4rem;">
      <div class="section-header" style="margin-bottom: 2rem;">
        <div class="section-eyebrow">Production Guide</div>
        <h2 class="section-title">Packaging Assembly Workflow</h2>
        <p class="section-desc">Standardized 7-step process designed for in-bakery folding and packaging.</p>
      </div>

      <div class="assembly-steps-grid">
        <div class="step-card">
          <div class="step-number">1</div>
          <h4>Print</h4>
          <p>Print the packaging template on A2 cardboard (280–350 gsm) at 100% scale.</p>
        </div>

        <div class="step-card">
          <div class="step-number">2</div>
          <h4>Cut</h4>
          <p>Carefully cut along the solid cutting lines, including the transparent window aperture.</p>
        </div>

        <div class="step-card">
          <div class="step-number">3</div>
          <h4>Score</h4>
          <p>Lightly score all dashed fold lines using a straight ruler and blunt scoring tool.</p>
        </div>

        <div class="step-card">
          <div class="step-number">4</div>
          <h4>Window</h4>
          <p>Attach food-safe acetate film behind the window opening using certified adhesive.</p>
        </div>

        <div class="step-card">
          <div class="step-number">5</div>
          <h4>Fold</h4>
          <p>Fold the cardboard along the scored creases to form front, back, and side panels.</p>
        </div>

        <div class="step-card">
          <div class="step-number">6</div>
          <h4>Glue</h4>
          <p>Apply adhesive to designated glue tabs and secure firmly to corresponding panels.</p>
        </div>

        <div class="step-card">
          <div class="step-number">7</div>
          <h4>Assemble</h4>
          <p>Lock bottom flaps and shape packaging into its final rectangular gift form.</p>
        </div>
      </div>
    </div>

    <!-- CTA to pre-order -->
    <div style="background: var(--color-cocoa-900); color: #fff; border-radius: var(--radius-lg); padding: 3.5rem 2rem; text-align: center;">
      <div style="display: flex; justify-content: center; margin-bottom: 1rem;">
        <img src="assets/images/logo.png" alt="LR Monogram" style="width: 50px; height: 50px; object-fit: contain; filter: brightness(1.2);">
      </div>
      <h2 style="color: #fff; font-size: 2.2rem; margin-bottom: 1rem;">Experience the Cookie Study Box</h2>
      <p style="color: var(--color-kraft); max-width: 600px; margin: 0 auto 2rem; font-size: 1.05rem;">
        Order our signature 6-cookie window gift set for personal indulgence, client gifting, or weekend morning celebrations.
      </p>
      <button type="button" 
              class="btn btn-primary add-btn" 
              style="background: var(--color-caramel); color: #fff; padding: 1rem 2.2rem;"
              data-id="cookie-study-box" 
              data-name="Cookie Study — Signature Box" 
              data-price="24.00">
        Add Cookie Study Box to Order ($24.00) &rarr;
      </button>
    </div>
  </div>
</section>
