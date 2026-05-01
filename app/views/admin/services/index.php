<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title'] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://api.fontshare.com/v2/css?f[]=clash-display@400,700,800&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-admin: #0a0a0b;
            --card-bg: #141416;
            --sidebar-w: 300px;
            --accent: #6A5AE0;
            --accent-glow: rgba(106, 90, 224, 0.3);
        }
        body { background: var(--bg-admin); font-family: 'Inter', sans-serif; color: #fff; }
        .sidebar { width: var(--sidebar-w); position: fixed; top: 40px; left: 20px; bottom: 40px; background: #000; color: #fff; padding: 40px 30px; z-index: 1000; border: 2px solid #222; border-radius: 30px; }
        .main-content { margin-left: calc(var(--sidebar-w) + 40px); padding: 60px 40px; }
        .brand-admin { font-family: 'Clash Display'; font-weight: 800; text-transform: uppercase; font-size: 24px; margin-bottom: 60px; display: block; text-decoration: none; color: #fff; }
        .nav-link-admin { color: rgba(255,255,255,0.4); padding: 18px 25px; display: flex; align-items: center; text-decoration: none; font-weight: 800; font-size: 13px; letter-spacing: 1.5px; text-transform: uppercase; border-radius: 20px; margin-bottom: 10px; transition: all 0.3s; }
        .nav-link-admin i { font-size: 20px; }
        .nav-link-admin:hover { color: #fff; background: rgba(255,255,255,0.05); }
        .nav-link-admin.active { color: #fff; background: var(--accent); box-shadow: 0 10px 30px var(--accent-glow); }
        .log-header { font-family: 'Clash Display'; font-weight: 800; font-size: 42px; letter-spacing: -1px; }
        
        .service-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(350px, 1fr)); gap: 30px; }
        .service-card-admin { background: var(--card-bg); border: 1px solid #222; border-radius: 32px; padding: 35px; transition: all 0.4s; }
        .service-card-admin:hover { border-color: var(--accent); transform: translateY(-10px); }
        .service-icon { width: 60px; height: 60px; background: rgba(255,255,255,0.05); border-radius: 18px; display: flex; align-items: center; justify-content: center; font-size: 28px; margin-bottom: 25px; }
    </style>
</head>
<body>

<?php $active = 'services'; require_once APP_PATH . '/views/admin/components/sidebar.php'; ?>

<main class="main-content">
    <div class="d-flex justify-content-between align-items-center mb-5">
        <h1 class="log-header">SERVICES_REGISTRY</h1>
        <a href="<?= BASE_URL ?>admin/services/add" class="btn btn-primary fw-900 px-4 py-3 rounded-4" style="background: var(--accent); border: none;">+ DEPLOY_NEW_SERVICE</a>
    </div>

    <div class="service-grid">
        <?php foreach ($data['services'] as $s): ?>
        <div class="service-card-admin">
            <div class="service-icon" style="color: <?= $s['color'] ?>;">
                <i class="bi <?= $s['icon'] ?>"></i>
            </div>
            <h3 class="fw-900 text-white mb-3"><?= htmlspecialchars($s['title']) ?></h3>
            <p class="small opacity-50 mb-4 lh-lg"><?= htmlspecialchars($s['description']) ?></p>
            <div class="d-flex gap-2">
                <a href="<?= BASE_URL ?>admin/services/edit?id=<?= $s['id'] ?>" class="btn btn-primary fw-900 w-100 py-3 rounded-4" style="background: var(--accent); border: none;">CONFIGURE_ENGINE</a>
                <a href="<?= BASE_URL ?>admin/services?action=delete&id=<?= $s['id'] ?>" class="btn btn-outline-danger btn-sm px-3 rounded-4" onclick="return confirm('Erase service data?')"><i class="bi bi-trash"></i></a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
