/**
 * LR Bakery (Loaf & Rye) - Client-side Interactions
 * Mobile navigation, Menu category filters, Pre-order Cart Drawer
 */

document.addEventListener('DOMContentLoaded', () => {
  // Mobile Navigation Toggle
  const menuToggle = document.getElementById('menuToggle');
  const navMenu = document.getElementById('navMenu');
  
  if (menuToggle && navMenu) {
    menuToggle.addEventListener('click', () => {
      navMenu.classList.toggle('active');
      const isOpen = navMenu.classList.contains('active');
      menuToggle.setAttribute('aria-expanded', isOpen);
    });
  }

  // Pre-Order Cart / Box System
  const cart = {
    items: JSON.parse(localStorage.getItem('lr_bakery_box') || '[]'),
    
    save() {
      localStorage.setItem('lr_bakery_box', JSON.stringify(this.items));
      this.updateUI();
    },

    addItem(id, name, price) {
      const existing = this.items.find(item => item.id === id);
      if (existing) {
        existing.qty += 1;
      } else {
        this.items.push({ id, name, price: parseFloat(price), qty: 1 });
      }
      this.save();
      showToast(`Added "${name}" to your bakery order!`);
    },

    removeItem(id) {
      this.items = this.items.filter(item => item.id !== id);
      this.save();
    },

    clear() {
      this.items = [];
      this.save();
    },

    getTotal() {
      return this.items.reduce((sum, item) => sum + (item.price * item.qty), 0);
    },

    getCount() {
      return this.items.reduce((sum, item) => sum + item.qty, 0);
    },

    updateUI() {
      const badges = document.querySelectorAll('.cart-count');
      const count = this.getCount();
      badges.forEach(b => b.textContent = count);

      const cartBody = document.getElementById('cartBody');
      const cartTotal = document.getElementById('cartTotal');
      const checkoutBtn = document.getElementById('cartCheckoutBtn');

      if (!cartBody) return;

      if (this.items.length === 0) {
        cartBody.innerHTML = `
          <div class="cart-empty-state">
            <p>Your bakery box is empty.</p>
            <p style="font-size: 0.85rem; margin-top: 0.5rem;">Explore our fresh sourdough and Cookie Study gift boxes to get started!</p>
          </div>
        `;
        if (cartTotal) cartTotal.textContent = '$0.00';
        if (checkoutBtn) checkoutBtn.disabled = true;
      } else {
        cartBody.innerHTML = this.items.map(item => `
          <div class="cart-item">
            <div>
              <div class="cart-item-title">${item.name} &times; ${item.qty}</div>
              <div class="cart-item-price">$${(item.price * item.qty).toFixed(2)}</div>
            </div>
            <button class="cart-item-remove" data-remove-id="${item.id}" title="Remove item">Remove</button>
          </div>
        `).join('');

        if (cartTotal) cartTotal.textContent = `$${this.getTotal().toFixed(2)}`;
        if (checkoutBtn) checkoutBtn.disabled = false;

        // Attach remove events
        cartBody.querySelectorAll('[data-remove-id]').forEach(btn => {
          btn.addEventListener('click', () => {
            this.removeItem(btn.getAttribute('data-remove-id'));
          });
        });
      }
    }
  };

  // Bind Add to Cart Buttons
  document.querySelectorAll('.add-btn, .btn-add-hero').forEach(btn => {
    btn.addEventListener('click', (e) => {
      const id = btn.getAttribute('data-id');
      const name = btn.getAttribute('data-name');
      const price = btn.getAttribute('data-price');
      if (id && name && price) {
        cart.addItem(id, name, price);
      }
    });
  });

  // Drawer Toggle Events
  const openCartBtn = document.getElementById('openCartBtn');
  const closeCartBtn = document.getElementById('closeCartBtn');
  const cartDrawer = document.getElementById('cartDrawer');
  const cartOverlay = document.getElementById('cartOverlay');

  function openCart() {
    if (cartDrawer && cartOverlay) {
      cartDrawer.classList.add('open');
      cartOverlay.classList.add('open');
      document.body.style.overflow = 'hidden';
    }
  }

  function closeCart() {
    if (cartDrawer && cartOverlay) {
      cartDrawer.classList.remove('open');
      cartOverlay.classList.remove('open');
      document.body.style.overflow = '';
    }
  }

  if (openCartBtn) openCartBtn.addEventListener('click', openCart);
  if (closeCartBtn) closeCartBtn.addEventListener('click', closeCart);
  if (cartOverlay) cartOverlay.addEventListener('click', closeCart);

  // Initial cart render
  cart.updateUI();

  // Menu Category Filtering
  const filterButtons = document.querySelectorAll('.filter-btn');
  const productCards = document.querySelectorAll('.product-card');

  filterButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      filterButtons.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const filter = btn.getAttribute('data-filter');

      productCards.forEach(card => {
        const category = card.getAttribute('data-category');
        if (filter === 'all' || category === filter) {
          card.style.display = 'flex';
        } else {
          card.style.display = 'none';
        }
      });
    });
  });

  // Contact / Pre-Order Form Handling
  const preOrderForm = document.getElementById('preOrderForm');
  if (preOrderForm) {
    preOrderForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const name = document.getElementById('orderName')?.value || 'Valued Guest';
      const date = document.getElementById('orderDate')?.value || 'tomorrow morning';
      
      const successBox = document.getElementById('formSuccessMsg');
      if (successBox) {
        successBox.style.display = 'block';
        successBox.innerHTML = `<strong>Thank you, ${name}!</strong> Your bakery pre-order inquiry for pickup on <em>${date}</em> has been prepared. We'll send a confirmation email with collection details shortly.`;
        preOrderForm.reset();
        cart.clear();
      } else {
        alert(`Thank you, ${name}! Your pre-order has been received for ${date}.`);
        preOrderForm.reset();
      }
    });
  }

  // Toast Functionality
  function showToast(message) {
    let toast = document.getElementById('globalToast');
    if (!toast) {
      toast = document.createElement('div');
      toast.id = 'globalToast';
      toast.className = 'toast-notice';
      document.body.appendChild(toast);
    }
    toast.innerHTML = `<span>&#10003;</span> ${message}`;
    toast.classList.add('show');
    setTimeout(() => {
      toast.classList.remove('show');
    }, 3200);
  }
});
