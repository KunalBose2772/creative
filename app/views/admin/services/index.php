<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title'] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&family=Jost:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="<?= BASE_URL ?>public/assets/css/admin.css" rel="stylesheet">
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
