<?php
// views/layouts/layout.php
// $view is now passed from the controller
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars($data['meta_description']) ?>">
    <meta name="keywords" content="<?= htmlspecialchars($data['keywords'] ?? 'web design, seo, digital agency, branding, automation') ?>">
    <link rel="canonical" href="<?= (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ?>">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ?>">
    <meta property="og:title" content="<?= htmlspecialchars($data['title']) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($data['meta_description']) ?>">
    <meta property="og:image" content="<?= BASE_URL ?>public/assets/images/og-image.webp">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?= (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ?>">
    <meta property="twitter:title" content="<?= htmlspecialchars($data['title']) ?>">
    <meta property="twitter:description" content="<?= htmlspecialchars($data['meta_description']) ?>">
    <meta property="twitter:image" content="<?= BASE_URL ?>public/assets/images/og-image.webp">

    <title><?= htmlspecialchars($data['title']) ?></title>
    <link rel="icon" type="image/png" href="<?= BASE_URL ?>public/assets/images/favicon.png">
    <link rel="manifest" href="<?= BASE_URL ?>public/manifest.json">
    <meta name="theme-color" content="#6A5AE0">
    <link rel="apple-touch-icon" href="<?= BASE_URL ?>public/assets/images/logo.png">

    <!-- Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Crea8ve Cool",
      "url": "<?= (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]" . BASE_URL ?>",
      "logo": "<?= (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]" . BASE_URL ?>public/assets/images/logo.png",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+91-9972988194",
        "contactType": "customer service"
      },
      "sameAs": [
        "https://linkedin.com/company/crea8ve-cool",
        "https://instagram.com/crea8vecool"
      ]
    }
    </script>
    <?php if (isset($data['breadcrumbs'])): ?>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        <?php foreach ($data['breadcrumbs'] as $index => $crumb): ?>
        {
          "@type": "ListItem",
          "position": <?= $index + 1 ?>,
          "name": "<?= htmlspecialchars($crumb['name']) ?>",
          "item": "<?= (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]" . BASE_URL . $crumb['url'] ?>"
        }<?= ($index < count($data['breadcrumbs']) - 1) ? ',' : '' ?>
        <?php endforeach; ?>
      ]
    }
    </script>
    <?php endif; ?>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <!-- AOS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <!-- Google Fonts & Fontshare for Clash Display -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://api.fontshare.com/v2/css?f[]=clash-display@400,500,600,700,800&display=swap" rel="stylesheet">
    <!-- Custom CSS (versioned to bust cache) -->
    <link href="<?= BASE_URL ?>public/assets/css/main.css?v=<?= filemtime(PUBLIC_PATH . '/assets/css/main.css') ?>" rel="stylesheet">
    <link href="<?= BASE_URL ?>public/assets/css/components.css?v=<?= filemtime(PUBLIC_PATH . '/assets/css/components.css') ?>" rel="stylesheet">

    <!-- ============================================================
         CRITICAL INLINE CSS — Mega Menu Bootstrap Conflict Fix
         This lives in PHP so it ALWAYS bypasses browser/CDN cache.
         It hides mega menus by default and shows them via JS hover.
         ============================================================ -->
    <style>
        /* FORCE hide all mega menus by default — overrides everything */
        div.mega-menu,
        .has-mega-menu > div.mega-menu {
            display: block !important;
            opacity: 0 !important;
            visibility: hidden !important;
            pointer-events: none !important;
            position: absolute !important;
            width: 880px !important;
            left: 50% !important;
            transform: translateX(-50%) translateY(20px) !important;
            top: calc(100% + 8px) !important;
            background: #FFFFFF !important;
            border: 2px solid #111111 !important;
            border-radius: 24px !important;
            box-shadow: 12px 12px 0px #111111 !important;
            overflow: visible !important;
            z-index: 99999 !important;
            transition: opacity 0.3s ease, visibility 0.3s ease, transform 0.3s ease !important;
        }

        /* Show state — applied by JavaScript on mouseenter */
        div.mega-menu.is-open {
            opacity: 1 !important;
            visibility: visible !important;
            pointer-events: auto !important;
            transform: translateX(-50%) translateY(0px) !important;
        }

        /* Ensure navbar and all parents allow overflow */
        #navbar,
        #navbar.scrolled,
        #navbar .container,
        #navbarDesktop,
        #navbarDesktop ul,
        #navbarDesktop ul li.has-mega-menu {
            overflow: visible !important;
        }

        /* Position context for mega menu */
        li.has-mega-menu {
            position: relative !important;
        }
    </style>
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
<!-- Custom JS (versioned to bust cache) -->
<script src="<?= BASE_URL ?>public/assets/js/main.js?v=<?= filemtime(PUBLIC_PATH . '/assets/js/main.js') ?>"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {

    /* ============================================================
       MEGA MENU — JS-driven open/close (reliable on all servers)
       Uses .is-open class toggled by mouseenter/mouseleave
       ============================================================ */
    const megaItems = document.querySelectorAll('.has-mega-menu');
    let closeTimer = null;

    megaItems.forEach(function(item) {
        const menu = item.querySelector('div.mega-menu');
        if (!menu) return;

        // Open on mouseenter (with slight debounce to prevent flicker)
        item.addEventListener('mouseenter', function () {
            clearTimeout(closeTimer);
            // Close all other open menus
            document.querySelectorAll('div.mega-menu.is-open').forEach(function(m) {
                if (m !== menu) m.classList.remove('is-open');
            });
            menu.classList.add('is-open');

            // Stagger animate children
            const children = menu.querySelectorAll('.mega-menu-list li, .featured-card');
            children.forEach(function(child, i) {
                child.style.opacity = '0';
                child.style.transform = 'translateY(10px)';
                setTimeout(function() {
                    child.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
                    child.style.opacity = '1';
                    child.style.transform = 'translateY(0)';
                }, i * 35 + 50);
            });
        });

        // Close on mouseleave with a small delay to allow moving to menu
        item.addEventListener('mouseleave', function () {
            closeTimer = setTimeout(function() {
                menu.classList.remove('is-open');
            }, 120);
        });

        // If user moves back onto the menu, cancel close
        menu.addEventListener('mouseenter', function () {
            clearTimeout(closeTimer);
        });

        menu.addEventListener('mouseleave', function () {
            closeTimer = setTimeout(function() {
                menu.classList.remove('is-open');
            }, 120);
        });
    });

    // Close all menus on click outside
    document.addEventListener('click', function (e) {
        if (!e.target.closest('.has-mega-menu')) {
            document.querySelectorAll('div.mega-menu.is-open').forEach(function(m) {
                m.classList.remove('is-open');
            });
        }
    });

    // Mobile: tap on nav link toggles menu
    megaItems.forEach(function(item) {
        const link = item.querySelector('a.nav-link-custom');
        const menu = item.querySelector('div.mega-menu');
        if (!link || !menu) return;

        link.addEventListener('click', function(e) {
            if (window.innerWidth > 991) {
                e.preventDefault(); // prevent href="#" jump on desktop
            }
        });
    });

});
</script>
<script>
if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
        navigator.serviceWorker.register('<?= BASE_URL ?>public/sw.js')
            .then(reg => console.log('SW Registered'))
            .catch(err => console.log('SW Error: ', err));
    });
}
</script>
</body>
</html>
