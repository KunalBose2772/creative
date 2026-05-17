<?php 
$data['page_hero_badge'] = 'Legal';
$data['page_title_html'] = 'Terms of <br><span class="gradient-text">Service</span>';
$data['page_subtitle'] = "Please read these terms carefully. By partnering with Crea8ve Cool, you agree to these legal standards and collaboration terms.";

// Visual element for terms hero
ob_start(); ?>
<div class="legal-hero-visual" style="--accent: <?= $data['hero_color'] ?>;">
    <div class="contract-container">
        <i class="bi bi-file-earmark-check-fill contract-icon"></i>
    </div>
    <div class="legal-tag">AGREEMENT</div>
</div>
<?php 
$data['page_hero_visual'] = ob_get_clean();
require_once APP_PATH . '/views/components/page_hero.php'; 
?>

<!-- Content Section -->
<section class="section-padding bg-light">
    <div class="container" style="max-width: 1000px;">
        <div class="bento-card p-5 bg-white border border-dark border-3 shadow-punchy-sm rounded-4 mb-5" data-aos="fade-up">
            <p class="text-muted small fw-bold mb-4"><i class="bi bi-calendar-event me-2"></i>Last Updated: May 17, 2026</p>
            
            <div class="legal-body">
                <h2 class="fw-900 mb-3 text-dark">1. Acceptance of Terms</h2>
                <p class="text-muted mb-4">By visiting, navigating, or contracting development services with Crea8ve Cool Digital Agency ("Company," "we," "us"), you acknowledge that you have read, understood, and agreed to be legally bound by these Terms of Service. If you disagree with any segment of these clauses, you must immediately discontinue platform access and active operations.</p>

                <h2 class="fw-900 mb-3 text-dark">2. Our Services & Scope</h2>
                <p class="text-muted mb-4">Crea8ve Cool engineers bespoke digital assets, specifically: custom website development, enterprise SEO roadmaps, cinematic 3D CGI video render passes, and performance marketing orchestration. All client partnerships are executed under dedicated Statement of Work (SOW) documents defining precise milestones, delivery targets, and budget structures.</p>

                <h2 class="fw-900 mb-3 text-dark">3. Client Responsibilities & Asset Assets</h2>
                <p class="text-muted mb-4">For us to meet SOW milestones, clients must deliver necessary business assets (such as copywriting copy, media files, branding guidelines, access tokens, and technical documentation) in a timely manner. Delays in asset provision directly extend our delivery deadlines.</p>

                <h2 class="fw-900 mb-3 text-dark mt-5">4. Payment Terms, Billing, & Refunds</h2>
                <ul class="text-muted mb-5">
                    <li class="mb-2"><strong>Advance Commitments:</strong> Standard operations require an initial upfront commitment (50% default unless stated otherwise in the SOW) before design or coding tasks begin.</li>
                    <li class="mb-2"><strong>Milestone Invoices:</strong> Remaining balances are invoiced upon successful milestone delivery and are payable within 7 business days.</li>
                    <li class="mb-2"><strong>Refund Policy:</strong> Due to the custom engineering nature of our work (design drafts, software code, custom renders), all payments are non-refundable once work has commenced.</li>
                </ul>

                <h2 class="fw-900 mb-3 text-dark mt-5">5. Intellectual Property Rights</h2>
                <p class="text-muted mb-4">Upon full final invoice payment, all ownership rights of the custom coded web software, design layouts, and visual media files transfer entirely to the Client. Crea8ve Cool retains general rights to display case study visual segments inside our public portfolio showcase for promotional purposes.</p>

                <h2 class="fw-900 mb-3 text-dark mt-5">6. Limitation of Liability</h2>
                <p class="text-muted mb-4">Crea8ve Cool, including its directors, developers, and partners, shall not be held liable for any indirect, incidental, special, or consequential damages (including lost profits, server downtimes, business interruptions, or data losses) arising from the use or inability to use our digital assets.</p>

                <h2 class="fw-900 mb-3 text-dark mt-5">7. Governing Law</h2>
                <p class="text-muted mb-4">These terms and all active service contracts are governed by and construed in accordance with the laws of India. Any legal disputes arising from these agreements shall be resolved exclusively within the courts of New Delhi, India.</p>

                <div class="bg-light p-4 rounded-3 border border-dark border-2 mt-5">
                    <h4 class="fw-900 mb-2"><i class="bi bi-shield-fill-check me-2 text-primary"></i>Agreement Inquiries</h4>
                    <p class="text-muted mb-0">If you have any questions regarding these Terms of Service or wish to request clear clarifications, reach out to our team:</p>
                    <a href="mailto:crea8vecool@gmail.com" class="fw-bold text-decoration-none mt-2 d-inline-block text-primary">crea8vecool@gmail.com</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once APP_PATH . '/views/components/cta.php'; ?>

<style>
.legal-hero-visual {
    position: relative;
    width: 280px;
    height: 280px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.contract-container {
    width: 140px;
    height: 140px;
    background: rgba(var(--page-accent-rgb), 0.1);
    border: 3px solid var(--accent);
    border-radius: 35px;
    display: flex;
    align-items: center;
    justify-content: center;
    animation: bounceContract 4s infinite ease-in-out;
}
.contract-icon {
    font-size: 64px;
    color: var(--accent);
}
.legal-tag {
    position: absolute;
    top: 20px;
    right: 10px;
    background: var(--text-dark);
    color: white;
    padding: 6px 15px;
    border-radius: 6px;
    font-weight: 900;
    font-size: 11px;
    letter-spacing: 2px;
}

@keyframes bounceContract {
    0%, 100% { transform: translateY(0) scale(1); }
    50% { transform: translateY(-8px) scale(1.03); }
}

.legal-body h2 {
    font-size: 24px;
    margin-top: 40px;
}
.legal-body p, .legal-body li {
    font-size: 16px;
    line-height: 1.8;
}
</style>
