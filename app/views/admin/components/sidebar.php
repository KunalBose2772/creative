<aside class="sidebar">
    <a href="<?= BASE_URL ?>admin/dashboard" class="brand-admin">Crea8ve <span style="color: var(--accent);">Cool</span></a>
    
    <nav>
        <a href="<?= BASE_URL ?>admin/dashboard" class="nav-link-admin <?= ($active == 'dashboard') ? 'active' : '' ?>"><i class="bi bi-grid-fill me-3"></i> OVERVIEW</a>
        <a href="<?= BASE_URL ?>admin/services" class="nav-link-admin <?= ($active == 'services') ? 'active' : '' ?>"><i class="bi bi-layers me-3"></i> SERVICES</a>
        <a href="<?= BASE_URL ?>admin/showcase" class="nav-link-admin <?= ($active == 'showcase') ? 'active' : '' ?>"><i class="bi bi-briefcase me-3"></i> SHOWCASE</a>
        <a href="<?= BASE_URL ?>admin/testimonials" class="nav-link-admin <?= ($active == 'testimonials') ? 'active' : '' ?>"><i class="bi bi-chat-quote me-3"></i> TESTIMONIALS</a>
        <a href="<?= BASE_URL ?>admin/inquiries" class="nav-link-admin <?= ($active == 'inquiries') ? 'active' : '' ?>"><i class="bi bi-envelope me-3"></i> INQUIRIES</a>
        <div class="mt-5 pt-4" style="border-top: 1px solid rgba(255,255,255,0.05);">
            <a href="<?= BASE_URL ?>admin/logout" class="nav-link-admin text-danger"><i class="bi bi-power me-3"></i> TERMINATE</a>
        </div>
    </nav>
</aside>
