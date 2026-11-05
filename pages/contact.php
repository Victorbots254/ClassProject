<?php
// pages/contact.php
// Visit, Opening Hours, Location & Interactive Pre-Order Inquiry Form
$pageTitle = 'Visit & Bakery Pre-Order';
?>

<section class="section" style="padding-top: 3.5rem;">
  <div class="container">
    <div class="section-header">
      <div class="section-eyebrow">Connect &amp; Reserve</div>
      <h1 class="section-title">Visit the Hearth or Pre-Order Online</h1>
      <p class="section-desc">
        Fresh batches sell out quickly each morning. Reserve your favorite sourdough loaves or custom Cookie Study gift boxes in advance.
      </p>
    </div>

    <!-- Success Message Box (Shown via JS on form submit) -->
    <div id="formSuccessMsg" style="display: none; background: #e8f5e9; border: 1px solid #a5d6a7; color: #2e7d32; padding: 1.25rem; border-radius: var(--radius-md); margin-bottom: 2rem; font-size: 0.95rem;"></div>

    <div class="contact-grid">
      <!-- Pre-Order Form -->
      <div class="form-card">
        <h3 style="font-size: 1.5rem; margin-bottom: 0.5rem;">Bakery Pre-Order Request</h3>
        <p style="font-size: 0.9rem; color: var(--color-muted); margin-bottom: 1.75rem;">
          Fill out your details below. We bake to order for next-day and weekend collections.
        </p>

        <form id="preOrderForm">
          <div class="form-row">
            <div class="form-group">
              <label for="orderName">Your Name *</label>
              <input type="text" id="orderName" class="form-control" placeholder="e.g. Sarah Jenkins" required>
            </div>
            <div class="form-group">
              <label for="orderEmail">Email Address *</label>
              <input type="email" id="orderEmail" class="form-control" placeholder="sarah@example.com" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label for="orderPhone">Phone Number</label>
              <input type="tel" id="orderPhone" class="form-control" placeholder="021 555 0192">
            </div>
            <div class="form-group">
              <label for="orderDate">Preferred Pickup Date *</label>
              <input type="date" id="orderDate" class="form-control" required>
            </div>
          </div>

          <div class="form-group">
            <label for="pickupTime">Pickup Time Slot</label>
            <select id="pickupTime" class="form-control">
              <option value="morning-1">Early Morning (07:30 AM – 09:30 AM) — Hot Out of Hearth</option>
              <option value="morning-2">Mid Morning (09:30 AM – 12:00 PM)</option>
              <option value="afternoon">Early Afternoon (12:00 PM – 02:30 PM)</option>
            </select>
          </div>

          <div class="form-group">
            <label for="orderNotes">Requested Items &amp; Gift Box Notes</label>
            <textarea id="orderNotes" rows="4" class="form-control" placeholder="e.g. 2 x Cookie Study Gift Boxes, 1 x Heritage Country Sourdough (sliced)"></textarea>
          </div>

          <button type="submit" class="btn btn-primary" style="width: 100%; padding: 0.95rem;">
            Submit Pre-Order Request &rarr;
          </button>
        </form>
      </div>

      <!-- Bakery Location & Hours Card -->
      <div>
        <div class="info-card">
          <h3>Loaf &amp; Rye Bakery</h3>
          
          <div class="info-item">
            <h5>Bakery Doors &amp; Cafe</h5>
            <p>
              142 Artisan Lane<br>
              Ponsonby / Central Arts Quarter<br>
              Auckland, New Zealand
            </p>
          </div>

          <div class="info-item">
            <h5>Baking Schedule</h5>
            <p>
              <strong>Tuesday – Friday:</strong> 7:00 AM – 3:00 PM<br>
              <strong>Saturday – Sunday:</strong> 7:30 AM – 2:00 PM<br>
              <strong>Monday:</strong> Closed for fermentation &amp; rest
            </p>
          </div>

          <div class="info-item">
            <h5>Direct Inquiries</h5>
            <p>
              Email: hello@loafandrye.co.nz<br>
              Phone: (09) 345-BAKE (2253)
            </p>
          </div>

          <div class="info-item">
            <h5>Packaging &amp; Corporate Gifting</h5>
            <p style="font-size: 0.85rem; color: var(--color-kraft);">
              We provide custom branded packaging runs for corporate events, weddings, and holiday celebrations using our Cookie Study gift cartons.
            </p>
          </div>
        </div>

        <!-- Quick FAQ Accordion -->
        <div style="background: var(--color-white); border: 1px solid var(--color-border); border-radius: var(--radius-md); padding: 1.5rem; margin-top: 1.5rem;">
          <h4 style="margin-bottom: 0.85rem; font-size: 1.1rem;">Frequently Asked Questions</h4>
          
          <div style="margin-bottom: 0.75rem; font-size: 0.88rem;">
            <strong style="display: block; color: var(--color-cocoa-800);">When should I place my sourdough order?</strong>
            <span style="color: var(--color-muted);">Because our wild fermentation takes 36 hours, we recommend ordering by 3:00 PM two days prior.</span>
          </div>

          <div style="font-size: 0.88rem;">
            <strong style="display: block; color: var(--color-cocoa-800);">How long do the cookies stay fresh in the box?</strong>
            <span style="color: var(--color-muted);">Our food-safe acetate sealed window boxes keep cookies chewy and fresh for up to 7 days at room temperature.</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
