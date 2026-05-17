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
