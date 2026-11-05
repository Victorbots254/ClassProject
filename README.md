# LR Bakery (Loaf & Rye) — Website Design (Task 4)

**Student Concept & Design:** Loren / Zihao Ye (ID: 270845446)  
**Project:** Artisan Bakery Brand & Packaging Identity

---

## 🥖 Overview
This project delivers the complete digital storefront for **LR Bakery (Loaf & Rye)**, directly integrating the brand design developed across Tasks 1–3:
- **Brand Palette:** Cocoa brown (`#3B2316`), caramel (`#B87333`), kraft (`#D7C4B0`), and cream (`#FAF5ED`).
- **Typography:** Classic Serif (*Playfair Display*) for warmth and heritage, paired with modern Sans-Serif (*Plus Jakarta Sans*) for clear legibility.
- **Task 2 Logo:** Authentic vector LR monogram with wheat stalk and bread loaf curves.
- **Task 3 Packaging Integration:** Dedicated showcase of the *Cookie Study* window gift box, specifications, and 7-step assembly guide.
- **Interactive Features:** Responsive navigation, category filter for daily bakes, pre-order shopping box with real-time estimation, and inquiry submission form.

---

## 📁 Project Architecture

```text
WorkA/
├── assets/
│   ├── css/
│   │   └── style.css          # Full brand stylesheet with CSS variables
│   ├── js/
│   │   └── main.js            # Menu filtering, mobile navigation, pre-order drawer
│   └── images/
│       └── logo.svg           # Vector LR monogram emblem (Task 2)
├── data/
│   └── products.php           # Catalog data: sourdough, pastries, Cookie Study box
├── includes/
│   ├── header.php             # HTML5 head, Google Fonts, meta tags, announcement bar
│   ├── nav.php                # Sticky brand navigation & slideout order drawer
│   └── footer.php             # Bake schedule, store address, student credits
├── pages/
│   ├── home.php               # Hero section, brand ethos, daily bake clock, featured bakes
│   ├── menu.php               # Complete interactive catalog with live category filter
│   ├── story.php              # Research inspiration (Daily Bread, Tartine, Levain), Loren philosophy
│   ├── packaging.php          # Deep dive into Task 3 "Cookie Study" window box & assembly steps
│   └── contact.php            # Pre-order reservation form, bakery hours, location & FAQ
├── index.php                  # Front controller router
└── README.md                  # Project documentation & run guide
```

---

## 💻 How to Run in Visual Studio / VS Code

### 1. Open the Folder in VS Code
- Open **Visual Studio Code**.
- Click **File > Open Folder...** and select:
  `D:\WorkA`

### 2. Recommended VS Code Extensions
Install any of the following from the VS Code Extensions Marketplace (`Ctrl+Shift+X`):
1. **PHP Server** (by *brapifra*)
   - Right-click `index.php` in the file explorer &rarr; click **PHP Server: Serve project**.
   - Your browser will automatically open `http://localhost:3000` or `http://localhost:8000`.
2. **PHP Intelephense** (by *Ben Mewburn*)
   - Provides intelligent autocomplete, syntax highlighting, and code formatting for PHP.
3. **Live Server** (by *Ritwick Dey*)
   - For fast live-reloading of HTML/CSS/JS files.

### 3. Running from VS Code Built-In Terminal
Press ``Ctrl + ` `` (or select **Terminal > New Terminal**) and execute:

```powershell
php -S localhost:8000
```

Then visit:
```text
http://localhost:8000
```
*(Press `Ctrl + C` in the terminal anytime you wish to stop the server).*
