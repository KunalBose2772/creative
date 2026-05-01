<?php if (isset($data['breadcrumbs']) && count($data['breadcrumbs']) > 1): ?>
<div class="breadcrumb-wrapper py-3">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <?php foreach ($data['breadcrumbs'] as $index => $crumb): ?>
                    <?php if ($index === count($data['breadcrumbs']) - 1): ?>
                        <li class="breadcrumb-item active" aria-current="page"><?= htmlspecialchars($crumb['name']) ?></li>
                    <?php else: ?>
                        <li class="breadcrumb-item">
                            <a href="<?= BASE_URL . $crumb['url'] ?>"><?= htmlspecialchars($crumb['name']) ?></a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ol>
        </nav>
    </div>
</div>

<style>
.breadcrumb-wrapper {
    background: rgba(255, 255, 255, 0.03);
    border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    backdrop-filter: blur(10px);
}

.breadcrumb-item {
    font-size: 0.85rem;
    font-weight: 500;
    letter-spacing: 0.02em;
    text-transform: uppercase;
    display: flex;
    align-items: center;
}

.breadcrumb-item a {
    color: rgba(255, 255, 255, 0.5);
    text-decoration: none;
    transition: color 0.3s ease;
}

.breadcrumb-item a:hover {
    color: var(--accent-color, #00f2fe);
}

.breadcrumb-item.active {
    color: #fff;
}

.breadcrumb-item + .breadcrumb-item::before {
    content: "\F285"; /* Bootstrap Icons bi-chevron-right */
    font-family: "bootstrap-icons";
    color: rgba(255, 255, 255, 0.2);
    font-size: 0.7rem;
    padding-right: 0.75rem;
}
</style>
<?php endif; ?>
