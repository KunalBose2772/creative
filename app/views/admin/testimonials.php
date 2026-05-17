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

<?php $active = 'testimonials'; require_once 'components/sidebar.php'; ?>

<main class="main-content">
    <div class="d-flex justify-content-between align-items-center mb-5">
        <h1 class="log-header">PRAISE_ENGINE</h1>
        <button class="btn btn-primary fw-900 rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#addTestimonialModal">
            ADD_NEW_PRAISE +
        </button>
    </div>

    <div class="content-card">
        <div class="table-responsive">
            <table class="table table-admin mb-0">
                <thead>
                    <tr>
                        <th>Client</th>
                        <th>Praise / Quote</th>
                        <th>Date Added</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['testimonials'] as $t): ?>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-3">
                                <div style="width: 44px; height: 44px; background: #222; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-weight: 900; overflow: hidden;">
                                    <img src="<?= BASE_URL ?>public/assets/images/<?= $t['image'] ?>" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
                                <div>
                                    <div class="fw-bold"><?= htmlspecialchars($t['name']) ?></div>
                                    <div class="small opacity-50"><?= htmlspecialchars($t['company']) ?></div>
                                </div>
                            </div>
                        </td>
                        <td style="max-width: 400px;">
                            <span class="small opacity-75">"<?= htmlspecialchars($t['quote']) ?>"</span>
                        </td>
                        <td>
                            <span class="small opacity-30"><?= date('M d, Y', strtotime($t['created_at'])) ?></span>
                        </td>
                        <td class="text-end">
                            <a href="<?= BASE_URL ?>admin/testimonials?action=delete&id=<?= $t['id'] ?>" class="btn btn-outline-danger btn-sm rounded-pill px-3" onclick="return confirm('Erase this transmission?')">DELETE</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>

<!-- Add Modal -->
<div class="modal fade" id="addTestimonialModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark border-2 border-secondary rounded-5 p-4">
            <form action="<?= BASE_URL ?>admin/testimonials" method="POST">
                <div class="modal-header border-0 pb-0">
                    <h3 class="fw-900 text-white mb-0">LOG_NEW_PRAISE</h3>
                </div>
                <div class="modal-body py-4">
                    <div class="mb-3">
                        <label class="small fw-800 opacity-50 mb-2">CLIENT_NAME</label>
                        <input type="text" name="name" class="form-control br-input-admin" required>
                    </div>
                    <div class="mb-3">
                        <label class="small fw-800 opacity-50 mb-2">COMPANY_NAME</label>
                        <input type="text" name="company" class="form-control br-input-admin" required>
                    </div>
                    <div class="mb-3">
                        <label class="small fw-800 opacity-50 mb-2">PRAISE_CONTENT</label>
                        <textarea name="quote" class="form-control br-input-admin" rows="4" required></textarea>
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-outline-secondary fw-800 rounded-pill px-4" data-bs-dismiss="modal">CANCEL</button>
                    <button type="submit" class="btn btn-primary fw-900 rounded-pill px-4">TRANSMIT_LOG</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
