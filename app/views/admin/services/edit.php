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
    <?php $s = $data['service']; ?>
    <div class="d-flex justify-content-between align-items-center mb-5">
        <div>
            <a href="<?= BASE_URL ?>admin/services" class="text-white opacity-50 text-decoration-none small fw-900 mb-2 d-block"><i class="bi bi-arrow-left"></i> BACK_TO_REGISTRY</a>
            <h1 class="log-header">CONFIGURE: <?= strtoupper($s['title']) ?></h1>
        </div>
        <button type="submit" form="editServiceForm" class="btn btn-primary fw-900 px-5 py-3 rounded-pill" style="background: var(--accent); border: none;">SAVE_CHANGES</button>
    </div>

    <form id="editServiceForm" action="<?= BASE_URL ?>admin/services/edit?id=<?= $s['id'] ?>" method="POST">
        <div class="row">
            <div class="col-lg-7">
                <!-- Core Configuration -->
                <div class="edit-card">
                    <span class="section-tag">CORE_CONFIG</span>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label class="form-label">Service Title</label>
                            <input type="text" name="title" class="form-control br-input-admin" value="<?= htmlspecialchars($s['title']) ?>" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Service Slug</label>
                            <input type="text" name="slug" class="form-control br-input-admin" value="<?= htmlspecialchars($s['slug']) ?>" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Accent Color</label>
                            <input type="color" name="color" class="form-control br-input-admin" value="<?= $s['color'] ?>" style="height: 60px;">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Icon Class (Bootstrap Icons)</label>
                            <input type="text" name="icon" class="form-control br-input-admin" value="<?= htmlspecialchars($s['icon']) ?>" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Short Description</label>
                            <textarea name="description" class="form-control br-input-admin" rows="3"><?= htmlspecialchars($s['description']) ?></textarea>
                        </div>
                        <div class="col-12">
                            <label class="form-label">SEO Authority Content (Long Draft)</label>
                            <textarea name="seo_content" class="form-control br-input-admin" rows="10"><?= htmlspecialchars($s['seo_content'] ?? '') ?></textarea>
                        </div>
                    </div>
                </div>

                <!-- SEO MASTERY -->
                <div class="edit-card">
                    <span class="section-tag">SEO_MASTERY</span>
                    <div class="row g-4">
                        <div class="col-12">
                            <label class="form-label">Meta Title (Authority Title)</label>
                            <input type="text" name="meta_title" class="form-control br-input-admin" value="<?= htmlspecialchars($s['meta_title']) ?>">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Meta Description (Search Snippet)</label>
                            <textarea name="meta_description" class="form-control br-input-admin" rows="4"><?= htmlspecialchars($s['meta_description']) ?></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <!-- Features List -->
                <div class="edit-card">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="section-tag">FEATURE_STACK</span>
                        <button type="button" class="btn btn-sm btn-outline-primary rounded-pill fw-800" onclick="addFeature()">ADD_FEATURE +</button>
                    </div>
                    <div id="features-container">
                        <?php foreach ($s['features'] as $f): ?>
                        <div class="rel-item">
                            <i class="bi bi-trash remove-btn" onclick="this.parentElement.remove()"></i>
                            <div class="mb-3">
                                <label class="form-label small">Icon</label>
                                <input type="text" name="f_icon[]" class="form-control br-input-admin py-2" value="<?= htmlspecialchars($f['icon']) ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label small">Title</label>
                                <input type="text" name="f_title[]" class="form-control br-input-admin py-2" value="<?= htmlspecialchars($f['title']) ?>">
                            </div>
                            <div>
                                <label class="form-label small">Description</label>
                                <textarea name="f_desc[]" class="form-control br-input-admin py-2" rows="2"><?= htmlspecialchars($f['description']) ?></textarea>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Packages List -->
                <div class="edit-card">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="section-tag">PRICING_MODELS</span>
                        <button type="button" class="btn btn-sm btn-outline-warning rounded-pill fw-800" onclick="addPackage()">ADD_PACKAGE +</button>
                    </div>
                    <div id="packages-container">
                        <?php foreach ($s['packages'] as $p): ?>
                        <div class="rel-item border-warning border-opacity-10">
                            <i class="bi bi-trash remove-btn" onclick="this.parentElement.remove()"></i>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label small">Name</label>
                                    <input type="text" name="p_name[]" class="form-control br-input-admin py-2" value="<?= htmlspecialchars($p['name']) ?>" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small">Price</label>
                                    <input type="text" name="p_price[]" class="form-control br-input-admin py-2" value="<?= htmlspecialchars($p['price']) ?>" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small">Period</label>
                                    <input type="text" name="p_period[]" class="form-control br-input-admin py-2" value="<?= htmlspecialchars($p['period'] ?? '') ?>">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small">Tagline</label>
                                    <input type="text" name="p_tagline[]" class="form-control br-input-admin py-2" value="<?= htmlspecialchars($p['tagline'] ?? '') ?>">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label small">Original Price</label>
                                    <input type="text" name="p_original_price[]" class="form-control br-input-admin py-2" value="<?= htmlspecialchars($p['original_price'] ?? '') ?>">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label small">Savings (%)</label>
                                    <input type="text" name="p_savings[]" class="form-control br-input-admin py-2" value="<?= htmlspecialchars($p['savings'] ?? '') ?>">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label small">Theme Color</label>
                                    <input type="color" name="p_color[]" class="form-control br-input-admin py-2" value="<?= htmlspecialchars($p['color'] ?? '#6A5AE0') ?>" style="height: 45px; padding: 2px 10px;">
                                </div>
                                <div class="col-12">
                                    <label class="form-label small">Most Popular (Recommended)</label>
                                    <select name="p_recommended[]" class="form-control br-input-admin py-2">
                                        <option value="0" <?= empty($p['recommended']) ? 'selected' : '' ?>>No</option>
                                        <option value="1" <?= !empty($p['recommended']) ? 'selected' : '' ?>>Yes (Featured Badge)</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label small">Short Description</label>
                                    <textarea name="p_desc[]" class="form-control br-input-admin py-2" rows="2"><?= htmlspecialchars($p['description'] ?? '') ?></textarea>
                                </div>
                                <div class="col-12">
                                    <label class="form-label small">Included Features (Comma separated)</label>
                                    <textarea name="p_features[]" class="form-control br-input-admin py-2" rows="2"><?= htmlspecialchars(is_array($p['features']) ? implode(', ', $p['features']) : $p['features']) ?></textarea>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </form>
</main>

<script>
function addFeature() {
    const html = `
        <div class="rel-item">
            <i class="bi bi-trash remove-btn" onclick="this.parentElement.remove()"></i>
            <div class="mb-3">
                <label class="form-label small">Icon</label>
                <input type="text" name="f_icon[]" class="form-control br-input-admin py-2" placeholder="bi-cpu">
            </div>
            <div class="mb-3">
                <label class="form-label small">Title</label>
                <input type="text" name="f_title[]" class="form-control br-input-admin py-2">
            </div>
            <div>
                <label class="form-label small">Description</label>
                <textarea name="f_desc[]" class="form-control br-input-admin py-2" rows="2"></textarea>
            </div>
        </div>
    `;
    document.getElementById('features-container').insertAdjacentHTML('beforeend', html);
}

function addPackage() {
    const html = `
        <div class="rel-item border-warning border-opacity-10">
            <i class="bi bi-trash remove-btn" onclick="this.parentElement.remove()"></i>
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label small">Name</label>
                    <input type="text" name="p_name[]" class="form-control br-input-admin py-2" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label small">Price</label>
                    <input type="text" name="p_price[]" class="form-control br-input-admin py-2" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label small">Period</label>
                    <input type="text" name="p_period[]" class="form-control br-input-admin py-2" placeholder="e.g. Starting">
                </div>
                <div class="col-md-6">
                    <label class="form-label small">Tagline</label>
                    <input type="text" name="p_tagline[]" class="form-control br-input-admin py-2" placeholder="e.g. Standard Platform">
                </div>
                <div class="col-md-4">
                    <label class="form-label small">Original Price</label>
                    <input type="text" name="p_original_price[]" class="form-control br-input-admin py-2">
                </div>
                <div class="col-md-4">
                    <label class="form-label small">Savings (%)</label>
                    <input type="text" name="p_savings[]" class="form-control br-input-admin py-2">
                </div>
                <div class="col-md-4">
                    <label class="form-label small">Theme Color</label>
                    <input type="color" name="p_color[]" class="form-control br-input-admin py-2" value="#6A5AE0" style="height: 45px; padding: 2px 10px;">
                </div>
                <div class="col-12">
                    <label class="form-label small">Most Popular (Recommended)</label>
                    <select name="p_recommended[]" class="form-control br-input-admin py-2">
                        <option value="0" selected>No</option>
                        <option value="1">Yes (Featured Badge)</option>
                    </select>
                </div>
                <div class="col-12">
                    <label class="form-label small">Short Description</label>
                    <textarea name="p_desc[]" class="form-control br-input-admin py-2" rows="2"></textarea>
                </div>
                <div class="col-12">
                    <label class="form-label small">Included Features (Comma separated)</label>
                    <textarea name="p_features[]" class="form-control br-input-admin py-2" rows="2"></textarea>
                </div>
            </div>
        </div>
    `;
    document.getElementById('packages-container').insertAdjacentHTML('beforeend', html);
}

// Initialize CKEditor on SEO Authority Content Textarea
ClassicEditor
    .create(document.querySelector('textarea[name="seo_content"]'), {
        toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', 'insertTable', 'undo', 'redo' ]
    })
    .catch(error => {
        console.error(error);
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
