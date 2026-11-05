<?php
// includes/header.php
// Brand head, Google fonts, CSS, meta tags
$pageTitle = isset($pageTitle) ? $pageTitle . ' | LR Bakery (Loaf & Rye)' : 'LR Bakery | Loaf & Rye — Artisan Bread & Treats';
$currentPage = $currentPage ?? 'home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($pageTitle) ?></title>
  <meta name="description" content="LR Bakery (Loaf & Rye) — Contemporary artisan bakery inspired by traditional baking, wild sourdough fermentation, and handcrafted treats like our signature Cookie Study window box.">
  
  <!-- Typography from Brand Guidelines (Serif + Sans-Serif) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  
  <!-- Brand Stylesheet -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

  <!-- Top Announcement Bar -->
  <div class="top-bar">
    <div class="container">
      Fresh stoneground sourdough loaves out of the oven at <strong>07:30 AM</strong> daily &bull; Pre-order your <strong>Cookie Study</strong> gift boxes for weekend pickup!
    </div>
  </div>
