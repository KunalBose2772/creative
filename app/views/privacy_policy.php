<?php 
$data['page_hero_badge'] = 'Legal';
$data['page_title_html'] = 'Privacy <br><span class="gradient-text">Policy</span>';
$data['page_subtitle'] = "Your privacy is extremely important to us. Learn how we handle, protect, and secure your personal information across all Crea8ve Cool services.";

// Visual element for privacy hero
ob_start(); ?>
<div class="legal-hero-visual" style="--accent: <?= $data['hero_color'] ?>;">
    <div class="shield-container">
        <i class="bi bi-shield-lock-fill shield-icon"></i>
    </div>
    <div class="legal-tag">SECURE</div>
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
                <h2 class="fw-900 mb-3 text-dark">1. Information We Collect</h2>
                <p class="text-muted mb-4">We collect information to provide better services to all our users. The types of personal information we collect include:</p>
                <ul class="text-muted mb-5">
                    <li class="mb-2"><strong>Contact Details:</strong> Your name, business email address, phone number, and company name when you submit forms or book consultations.</li>
                    <li class="mb-2"><strong>Usage Data:</strong> Technical logs, IP address, browser metadata, and interactive navigation history via Google Analytics and tracking technologies.</li>
                    <li class="mb-2"><strong>Client Assets:</strong> Assets, copy, links, and details provided during active design and business automation partnerships.</li>
                </ul>

                <h2 class="fw-900 mb-3 text-dark">2. How We Use Information</h2>
                <p class="text-muted mb-4">We process your personal information with strict security and only for the following legitimate business operations:</p>
                <ul class="text-muted mb-5">
                    <li class="mb-2">To deliver, debug, optimize, and support our premium web design, SEO, and 3D visual production services.</li>
                    <li class="mb-2">To maintain correspondence, respond to inquiries, send invoices, and handle authenticated system notices.</li>
                    <li class="mb-2">To analyze platform traffic patterns and safeguard our network layers against suspicious bot traffic or crawling attacks.</li>
                </ul>

                <h2 class="fw-900 mb-3 text-dark">3. Cookies & Tracking Technologies</h2>
                <p class="text-muted mb-4">Our platform employs secure first-party and verified third-party cookies to elevate your digital experience. These cookies allow us to store interface preferences, preserve progressive step selections inside booking selectors, and map user flow optimization strategies. You retain absolute control over your cookie settings via your standard browser configurations.</p>

                <h2 class="fw-900 mb-3 text-dark mt-5">4. Information Sharing & Security</h2>
                <p class="text-muted mb-4">We do not sell, rent, or lease your private contact assets to third parties. We preserve and implement absolute administrative, network-layer, and server-side encryption firewalls to keep your database keys, lead submissions, and branding files 100% secure.</p>

                <h2 class="fw-900 mb-3 text-dark mt-5">5. Your Legal Rights</h2>
                <p class="text-muted mb-4">Under modern legal systems, you possess absolute authority regarding your personal data. You maintain the right to: access, review, modify, export, or permanently erase your personal data assets from our primary local servers. To exercise these rights, please connect directly with our compliance inbox.</p>

                <h2 class="fw-900 mb-3 text-dark mt-5">6. Policy updates</h2>
                <p class="text-muted mb-4">Crea8ve Cool reserves the right to refine or rewrite this Privacy Policy declaration at any moment to conform with modern platform improvements. Updates are posted publicly with an updated revision date.</p>

                <div class="bg-light p-4 rounded-3 border border-dark border-2 mt-5">
                    <h4 class="fw-900 mb-2"><i class="bi bi-envelope-paper me-2 text-primary"></i>Compliance Contact</h4>
                    <p class="text-muted mb-0">For all privacy inquiries, data deletion requests, or compliance audits, reach out to our core team at:</p>
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
.shield-container {
    width: 140px;
    height: 140px;
    background: rgba(var(--page-accent-rgb), 0.1);
    border: 3px solid var(--accent);
    border-radius: 35px;
    display: flex;
    align-items: center;
    justify-content: center;
    animation: pulseShield 4s infinite ease-in-out;
}
.shield-icon {
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

@keyframes pulseShield {
    0%, 100% { transform: scale(1) rotate(0deg); }
    50% { transform: scale(1.08) rotate(5deg); }
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
