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

<?php $active = 'dashboard'; require_once 'components/sidebar.php'; ?>

<main class="main-content">
    <div class="d-flex justify-content-between align-items-center mb-5">
        <h1 class="log-header">LOGISTICS_HUB</h1>
        <div class="d-flex align-items-center gap-3 bg-dark p-2 rounded-pill pe-3">
            <div style="width: 44px; height: 44px; background: var(--accent); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 900;">A</div>
            <span class="small fw-800 opacity-50 letter-spacing-1">ADMIN_HUB_01</span>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="stat-card">
                <span class="small fw-800 opacity-50 text-uppercase d-block mb-2">Total Services</span>
                <div class="stat-val"><?= $data['stats']['services'] ?></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="stat-card">
                <span class="small fw-800 opacity-50 text-uppercase d-block mb-2">Portfolio Items</span>
                <div class="stat-val"><?= $data['stats']['works'] ?></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="stat-card">
                <span class="small fw-800 opacity-50 text-uppercase d-block mb-2">Active Inquiries</span>
                <div class="stat-val"><?= $data['stats']['inquiries'] ?></div>
            </div>
        </div>
    </div>
</main>

</body>
</html>
