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
        
        .content-card { background: var(--card-bg); border: 1px solid #222; border-radius: 32px; padding: 40px; margin-bottom: 30px; }
        .log-header { font-family: 'Clash Display'; font-weight: 800; font-size: 42px; letter-spacing: -1px; }
        
        .form-control { background: #000; border: 1px solid #333; color: #fff; padding: 15px; border-radius: 12px; }
        .form-control:focus { background: #000; border-color: var(--accent); color: #fff; box-shadow: 0 0 15px var(--accent-glow); }
        .btn-add { background: var(--accent); color: #fff; border: none; padding: 15px 30px; border-radius: 15px; font-weight: 900; }
        
        .work-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 30px; }
        .work-item { background: #000; border: 1px solid #222; border-radius: 24px; overflow: hidden; }
        .work-img { height: 200px; width: 100%; object-fit: cover; }
        .work-meta { padding: 20px; }
    </style>
</head>
<body>

<?php $active = 'showcase'; require_once 'components/sidebar.php'; ?>

<main class="main-content">
    <div class="d-flex justify-content-between align-items-center mb-5">
        <h1 class="log-header">SHOWCASE_VAULT</h1>
        <button class="btn btn-add" data-bs-toggle="modal" data-bs-target="#addWorkModal">+ NEW_PROJECT</button>
    </div>

    <div class="work-grid">
        <?php foreach ($data['works'] as $work): ?>
        <div class="work-item">
            <img src="<?= $work['image'] ?>" class="work-img">
            <div class="work-meta">
                <div class="small fw-800 text-accent mb-1"><?= $work['tag'] ?></div>
                <h5 class="fw-900 text-white mb-2"><?= $work['title'] ?></h5>
                <div class="small opacity-50 mb-3"><?= $work['result'] ?></div>
                <div class="d-flex gap-2">
                    <a href="?action=delete&id=<?= $work['id'] ?>" class="btn btn-outline-danger btn-sm w-100 fw-900 py-2 rounded-3" onclick="return confirm('Erase from vault?')">DELETE</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- Add Work Modal -->
    <div class="modal fade" id="addWorkModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 rounded-4" style="background: var(--card-bg);">
                <div class="modal-header border-bottom border-white border-opacity-10 p-4">
                    <h5 class="modal-title fw-900 text-white">ADD_TO_SHOWCASE</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <form method="POST">
                <div class="modal-body p-4">
                    <div class="mb-3">
                        <label class="small fw-900 opacity-50 text-uppercase mb-2">Project Title</label>
                        <input type="text" name="title" class="form-control" required placeholder="e.g. NexaRetail E-Com">
                    </div>
                    <div class="mb-3">
                        <label class="small fw-900 opacity-50 text-uppercase mb-2">Service Tag</label>
                        <input type="text" name="tag" class="form-control" required placeholder="e.g. Web Design">
                    </div>
                    <div class="mb-3">
                        <label class="small fw-900 opacity-50 text-uppercase mb-2">Image URL</label>
                        <input type="text" name="image" class="form-control" required placeholder="https://...">
                    </div>
                    <div class="mb-3">
                        <label class="small fw-900 opacity-50 text-uppercase mb-2">Result Metric</label>
                        <input type="text" name="result" class="form-control" required placeholder="e.g. +340% Conversions">
                    </div>
                </div>
                <div class="modal-footer border-top border-white border-opacity-10 p-4">
                    <button type="submit" class="btn btn-add w-100">CONFIRM_UPLOAD</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
