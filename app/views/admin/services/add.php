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
        
        .edit-card { background: var(--card-bg); border: 1px solid #222; border-radius: 32px; padding: 40px; margin-bottom: 30px; }
        .form-label { font-weight: 800; color: rgba(255,255,255,0.4); text-transform: uppercase; font-size: 11px; letter-spacing: 1px; margin-bottom: 10px; }
        .br-input-admin { background: #000; border: 2px solid #222; color: #fff; border-radius: 15px; padding: 15px 20px; font-weight: 700; }
        .br-input-admin:focus { border-color: var(--accent); box-shadow: none; outline: none; }
        
        .section-tag { background: #1a1a1c; color: var(--accent); padding: 8px 15px; border-radius: 10px; font-weight: 900; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; display: inline-block; margin-bottom: 20px; }
    </style>
</head>
<body>

<?php $active = 'services'; require_once APP_PATH . '/views/admin/components/sidebar.php'; ?>

<main class="main-content">
    <div class="d-flex justify-content-between align-items-center mb-5">
        <div>
            <a href="<?= BASE_URL ?>admin/services" class="text-white opacity-50 text-decoration-none small fw-900 mb-2 d-block"><i class="bi bi-arrow-left"></i> BACK_TO_REGISTRY</a>
            <h1 class="log-header">DEPLOY_NEW_SERVICE</h1>
        </div>
        <button type="submit" form="addServiceForm" class="btn btn-primary fw-900 px-5 py-3 rounded-pill" style="background: var(--accent); border: none;">INITIALIZE_SYSTEM</button>
    </div>

    <form id="addServiceForm" method="POST">
        <div class="row">
            <div class="col-lg-8">
                <!-- Core Configuration -->
                <div class="edit-card">
                    <span class="section-tag">CORE_CONFIG</span>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label class="form-label">Service Title</label>
                            <input type="text" name="title" class="form-control br-input-admin" placeholder="e.g. AI Business Automation" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Service Slug</label>
                            <input type="text" name="slug" class="form-control br-input-admin" placeholder="e.g. automation" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Accent Color</label>
                            <input type="color" name="color" class="form-control br-input-admin" value="#6A5AE0" style="height: 60px;">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Icon Class (Bootstrap Icons)</label>
                            <input type="text" name="icon" class="form-control br-input-admin" placeholder="bi-cpu" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Short Description</label>
                            <textarea name="description" class="form-control br-input-admin" rows="3" placeholder="A brief summary for the cards..."></textarea>
                        </div>
                        <div class="col-12">
                            <label class="form-label">SEO Authority Content (Long Draft)</label>
                            <textarea name="seo_content" class="form-control br-input-admin" rows="8" placeholder="The full content for the service page..."></textarea>
                        </div>
                    </div>
                </div>

                <!-- SEO MASTERY -->
                <div class="edit-card">
                    <span class="section-tag">SEO_MASTERY</span>
                    <div class="row g-4">
                        <div class="col-12">
                            <label class="form-label">Meta Title (Authority Title)</label>
                            <input type="text" name="meta_title" class="form-control br-input-admin" placeholder="Best AI Automation Agency India">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Meta Description (Search Snippet)</label>
                            <textarea name="meta_description" class="form-control br-input-admin" rows="4" placeholder="Compelling snippet for Google..."></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="edit-card">
                    <span class="section-tag">GUIDELINE</span>
                    <p class="small opacity-50 lh-lg">Initialize the service with core data first. Features and packages can be added from the <strong>Configuration Engine</strong> after initial deployment.</p>
                    <div class="mt-4 p-4 rounded-4" style="background: rgba(106, 90, 224, 0.1); border: 1px dashed var(--accent);">
                         <h6 class="fw-900 text-white mb-2 small">PRO_TIP</h6>
                         <p class="mb-0 small opacity-75">Use high-intent keywords in the Meta Title to maximize organic reach.</p>
                    </div>
                </div>
            </div>
        </div>
    </form>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
