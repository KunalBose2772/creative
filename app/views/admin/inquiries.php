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
        
        .content-card {
            background: var(--card-bg);
            border: 1px solid #222;
            border-radius: 32px;
            overflow: hidden;
        }
        .table thead { background: #1a1a1c; color: #fff; }
        .table th { border: none; padding: 25px; text-transform: uppercase; font-size: 11px; letter-spacing: 2px; color: rgba(255,255,255,0.4); }
        .table td { padding: 25px; vertical-align: middle; border-bottom: 1px solid #222; font-weight: 600; color: #fff; }
        .log-header {
            font-family: 'Clash Display';
            font-weight: 800;
            font-size: 42px;
            letter-spacing: -1px;
        }
        .status-badge {
            padding: 5px 12px;
            border-radius: 6px;
            font-size: 10px;
            font-weight: 900;
            text-transform: uppercase;
        }
        .status-new { background: #6A5AE0; color: #fff; }
        .status-read { background: #eee; color: #000; }
    </style>
</head>
<body>

<?php $active = 'inquiries'; require_once 'components/sidebar.php'; ?>

<main class="main-content">
    <div class="d-flex justify-content-between align-items-center mb-5">
        <h1 class="log-header">STRATEGIC_INBOUND</h1>
        <div class="d-flex align-items-center gap-3 bg-dark p-2 rounded-pill pe-3">
            <div style="width: 44px; height: 44px; background: var(--accent); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 900;">A</div>
            <span class="small fw-800 opacity-50 letter-spacing-1">ADMIN_HUB_01</span>
        </div>
    </div>

    <div class="content-card">
        <div class="table-responsive">
            <table class="table mb-0">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Client</th>
                        <th>Service</th>
                        <th>Budget</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['inquiries'] as $item): ?>
                    <tr>
                        <td><span class="opacity-50"><?= date('M d, Y', strtotime($item['created_at'])) ?></span></td>
                        <td>
                            <div class="fw-900"><?= htmlspecialchars($item['name']) ?></div>
                            <div class="small opacity-50"><?= htmlspecialchars($item['email']) ?></div>
                        </td>
                        <td><span class="badge border border-dark text-dark rounded-pill"><?= htmlspecialchars($item['service_type']) ?></span></td>
                        <td><div class="fw-800"><?= $item['budget'] ?></div></td>
                        <td>
                            <span class="status-badge status-<?= $item['status'] ?>">
                                <?= $item['status'] ?>
                            </span>
                        </td>
                        <td>
                            <div class="d-flex gap-2">
                                <button class="btn btn-dark btn-sm rounded-0 fw-bold" data-bs-toggle="modal" data-bs-target="#modal-<?= $item['id'] ?>">VIEW_BRIEF</button>
                                <?php if ($item['status'] === 'new'): ?>
                                    <a href="?action=read&id=<?= $item['id'] ?>" class="btn btn-outline-dark btn-sm rounded-0 fw-bold">MARK_READ</a>
                                <?php endif; ?>
                                <a href="?action=delete&id=<?= $item['id'] ?>" class="btn btn-danger btn-sm rounded-0 fw-bold" onclick="return confirm('Confirm Deletion?')"><i class="bi bi-trash"></i></a>
                            </div>
                        </td>
                    </tr>

                    <!-- Brief Modal -->
                    <div class="modal fade" id="modal-<?= $item['id'] ?>" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content border-0 rounded-4 overflow-hidden shadow-lg" style="background: var(--card-bg);">
                                <div class="modal-header border-bottom border-white border-opacity-10 p-4">
                                    <h5 class="modal-title fw-900 text-white" style="font-family: 'Clash Display';">PROJECT_BRIEF</h5>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body p-4">
                                    <div class="mb-4">
                                        <label class="small fw-900 opacity-50 text-uppercase d-block mb-2">Message Detail</label>
                                        <div class="p-4 bg-black border border-white border-opacity-10 rounded-4 text-white" style="line-height: 1.6;">
                                            <?= nl2br(htmlspecialchars($item['message'])) ?>
                                        </div>
                                    </div>
                                    <div class="d-grid">
                                        <a href="mailto:<?= $item['email'] ?>" class="btn btn-primary fw-900 py-3 rounded-3 shadow-lg" style="background: var(--accent); border: none;">REPLY_DIRECTLY</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
