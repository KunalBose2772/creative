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
    <style>
        .work-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 30px; }
        .work-item { background: var(--card-bg); border: 1px solid var(--border-color); border-radius: 24px; overflow: hidden; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05); transition: all 0.3s; }
        .work-item:hover { transform: translateY(-5px); box-shadow: 0 15px 30px rgba(0,0,0,0.07); }
        .work-img { height: 200px; width: 100%; object-fit: cover; }
        .work-meta { padding: 20px; }
    </style>
</head>
<body>

<?php $active = 'showcase'; require_once 'components/sidebar.php'; ?>

<main class="main-content">
    <div class="d-flex justify-content-between align-items-center mb-5">
        <h1 class="log-header">SHOWCASE_VAULT</h1>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addWorkModal">+ NEW_PROJECT</button>
    </div>

    <div class="work-grid">
        <?php foreach ($data['works'] as $work): ?>
        <div class="work-item">
            <img src="<?= $work['image'] ?>" class="work-img">
            <div class="work-meta">
                <div class="small fw-800 mb-1" style="color: var(--accent);"><?= $work['tag'] ?></div>
                <h5 class="fw-900 text-dark mb-2"><?= $work['title'] ?></h5>
                <div class="small opacity-50 mb-3" style="color: var(--text-secondary);"><?= $work['result'] ?></div>
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
                    <h5 class="modal-title fw-900 text-dark">ADD_TO_SHOWCASE</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form method="POST">
                <div class="modal-body p-4">
                    <div class="mb-3">
                        <label class="small fw-900 opacity-50 text-uppercase mb-2 text-secondary">Project Title</label>
                        <input type="text" name="title" class="form-control br-input-admin" required placeholder="e.g. NexaRetail E-Com">
                    </div>
                    <div class="mb-3">
                        <label class="small fw-900 opacity-50 text-uppercase mb-2 text-secondary">Service Tag</label>
                        <input type="text" name="tag" class="form-control br-input-admin" required placeholder="e.g. Web Design">
                    </div>
                    <div class="mb-3">
                        <label class="small fw-900 opacity-50 text-uppercase mb-2 text-secondary">Image URL</label>
                        <input type="text" name="image" class="form-control br-input-admin" required placeholder="https://...">
                    </div>
                    <div class="mb-3">
                        <label class="small fw-900 opacity-50 text-uppercase mb-2 text-secondary">Result Metric</label>
                        <input type="text" name="result" class="form-control br-input-admin" required placeholder="e.g. +340% Conversions">
                    </div>
                </div>
                <div class="modal-footer border-top border-white border-opacity-10 p-4">
                    <button type="submit" class="btn btn-primary w-100">CONFIRM_UPLOAD</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
