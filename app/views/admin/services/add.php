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
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
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
<script>
ClassicEditor
    .create(document.querySelector('textarea[name="seo_content"]'), {
        toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', 'insertTable', 'undo', 'redo' ]
    })
    .catch(error => {
        console.error(error);
    });
</script>
</body>
</html>
