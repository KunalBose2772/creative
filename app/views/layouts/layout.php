<?php
// views/layouts/layout.php
$view = APP_PATH . '/views/home.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars($data['meta_description']) ?>">
    <meta property="og:title" content="<?= htmlspecialchars($data['title']) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($data['meta_description']) ?>">
    <meta property="og:type" content="website">
    <title><?= htmlspecialchars($data['title']) ?></title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <!-- AOS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <!-- Google Fonts & Fontshare for Clash Display -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://api.fontshare.com/v2/css?f[]=clash-display@400,500,600,700,800&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/cr/public/assets/css/main.css" rel="stylesheet">
    <link href="/cr/public/assets/css/components.css" rel="stylesheet">
</head>
<body>

<!-- Custom Cursor -->
<div class="custom-cursor"></div>
<div class="custom-cursor-follower"></div>

<!-- Noise Texture -->
<div class="noise-overlay"></div>

<?php require_once APP_PATH . '/views/components/header.php'; ?>

<main>
    <?php require_once $view; ?>
</main>

<?php require_once APP_PATH . '/views/components/footer.php'; ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- AOS JS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<!-- Custom JS -->
<script src="/cr/public/assets/js/main.js"></script>
</body>
</html>
