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
        body {
            background: var(--bg-admin);
            font-family: 'Inter', sans-serif;
            color: #fff;
        }
        .sidebar {
            width: var(--sidebar-w);
            position: fixed;
            top: 40px;
            left: 20px;
            bottom: 40px;
            background: #000;
            color: #fff;
            padding: 40px 30px;
            z-index: 1000;
            border: 2px solid #222;
            border-radius: 30px;
        }
        .main-content {
            margin-left: calc(var(--sidebar-w) + 40px);
            padding: 60px 40px;
        }
        .brand-admin {
            font-family: 'Clash Display';
            font-weight: 800;
            text-transform: uppercase;
            font-size: 24px;
            margin-bottom: 60px;
            display: block;
            text-decoration: none;
            color: #fff;
        }
        .nav-link-admin {
            color: rgba(255,255,255,0.4);
            padding: 18px 25px;
            display: flex;
            align-items: center;
            text-decoration: none;
            font-weight: 800;
            font-size: 13px;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            border-radius: 20px;
            margin-bottom: 10px;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .nav-link-admin i { font-size: 20px; }
        .nav-link-admin:hover {
            color: #fff;
            background: rgba(255,255,255,0.05);
            transform: translateX(5px);
        }
        .nav-link-admin.active {
            color: #fff;
            background: var(--accent);
            box-shadow: 0 10px 30px var(--accent-glow);
        }
        .stat-card {
            background: var(--card-bg);
            border: 1px solid #222;
            padding: 40px;
            border-radius: 32px;
            transition: all 0.4s;
            position: relative;
            overflow: hidden;
        }
        .stat-card:hover {
            border-color: var(--accent);
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.4);
        }
        .stat-val {
            font-family: 'Clash Display';
            font-weight: 800;
            font-size: 64px;
            line-height: 1;
            background: linear-gradient(135deg, #fff 0%, rgba(255,255,255,0.5) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .log-header {
            font-family: 'Clash Display';
            font-weight: 800;
            font-size: 42px;
            letter-spacing: -1px;
        }
    </style>
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
