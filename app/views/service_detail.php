<?php 
// Service Data passed from controller
$service = $data['service'] ?? [];
$accentColor = $service['color'] ?? 'var(--primary-start)';
$serviceSlug = $data['service_slug'] ?? 'default';

// SEO JSON-LD
$schemaData = [
    "@context" => "https://schema.org",
    "@type" => "Service",
    "name" => $service['title'],
    "description" => $service['meta_description'],
    "provider" => [
        "@type" => "Organization",
        "name" => "Crea8ve Cool",
        "url" => BASE_URL
    ],
    "areaServed" => [
        "@type" => "Country",
        "name" => "India"
    ],
    "hasOfferCatalog" => [
        "@type" => "OfferCatalog",
        "name" => $service['title'] . " Packages",
        "itemListElement" => array_map(function($pkg) {
            return [
                "@type" => "Offer",
                "itemOffered" => [
                    "@type" => "Service",
                    "name" => $pkg['name']
                ],
                "price" => str_replace(['₹', ','], '', $pkg['price']),
                "priceCurrency" => "INR"
            ];
        }, $service['packages'] ?? [])
    ]
];

if (isset($data['city'])) {
    $schemaData['areaServed'] = [
        "@type" => "City",
        "name" => $data['city']
    ];
}

// GAP Closure: LocalBusiness Schema Injection
$localBusinessSchema = [
    "@context" => "https://schema.org",
    "@type" => "ProfessionalService",
    "name" => "Crea8ve Cool",
    "image" => BASE_URL . "public/assets/img/logo.png",
    "@id" => BASE_URL,
    "url" => BASE_URL,
    "telephone" => "+91-9999999999",
    "address" => [
        "@type" => "PostalAddress",
        "streetAddress" => "Tech Hub",
        "addressLocality" => "New Delhi",
        "postalCode" => "110001",
        "addressCountry" => "IN"
    ],
    "geo" => [
        "@type" => "GeoCoordinates",
        "latitude" => 28.6139,
        "longitude" => 77.2090
    ]
];

// GAP Closure: FAQ Schema Injection
$faqSchema = [
    "@context" => "https://schema.org",
    "@type" => "FAQPage",
    "mainEntity" => [
        [
            "@type" => "Question",
            "name" => "What is the starting price for web design?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "Our Small Business Web Design packages start at ₹5,999 for WordPress-based sites."
            ]
        ],
        [
            "@type" => "Question",
            "name" => "Do you provide SEO with web design?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "Yes, all our engineering-grade packages include absolute SEO optimization and scalable architecture."
            ]
        ]
    ]
];

$combinedSchema = [$schemaData, $localBusinessSchema, $faqSchema];
?>

<script type="application/ld+json">
<?= json_encode($combinedSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
</script>

<?php
$visualConfig = [
    'seo' => [
        'status' => 'RANK ENGINE: TRACKING ACTIVE',
        'metric_label' => 'Visibility Growth',
        'metric_value' => '+284%',
        'icon' => 'bi-graph-up',
        'animation' => 'seo-dashboard'
    ],
    'website' => [
        'status' => 'UI ENGINE: RENDER CYCLE',
        'metric_label' => 'Lighthouse Score',
        'metric_value' => '99/100',
        'icon' => 'bi-laptop',
        'animation' => 'window-mockup'
    ],
    'marketing' => [
        'status' => 'AD_NETWORK: OPTIMIZING',
        'metric_label' => 'Current ROAS Goal',
        'metric_value' => '5.4x',
        'icon' => 'bi-bullseye',
        'animation' => 'roas-ring'
    ],
    'erp' => [
        'status' => 'SYS_SYNC: ALL FLUID',
        'metric_label' => 'Tasks Automated',
        'metric_value' => '9,430/hr',
        'icon' => 'bi-cpu',
        'animation' => 'erp-blocks'
    ],
    'saas' => [
        'status' => 'CLOUD: LOAD BALANCED',
        'metric_label' => 'Global Latency',
        'metric_value' => '12ms',
        'icon' => 'bi-hdd-network',
        'animation' => 'saas-server'
    ]
];

$vConfig = $visualConfig[$serviceSlug] ?? [
    'status' => 'SYSTEM_STATUS: ONLINE',
    'metric_label' => 'Operational Capacity',
    'metric_value' => 'MAX_SCALE',
    'icon' => 'bi-lightning-charge-fill',
    'animation' => 'energy-core'
];
?>

<!-- Stunning Bento Service Hero -->
<section class="service-bento-hero pt-5 pb-5 position-relative overflow-hidden" style="--page-accent: <?= $accentColor ?>;">
    <div class="hero-bg-elements">
        <div class="blob-1"></div>
        <div class="blob-2"></div>
        <div class="hero-grid-overlay"></div>
    </div>
    
    <div class="container mt-5 pt-3" style="max-width:1300px;">
        <div class="row g-4 bento-grid">
            
            <!-- Main Content Box -->
            <div class="col-lg-8" data-aos="zoom-in" data-aos-delay="100">
                <div class="bento-card main-info-card h-100 p-5 d-flex flex-column justify-content-center">
                    <div class="hero-badge mb-4 align-self-start">
                        <span class="badge-dot"></span> Service Insight
                    </div>
                    <h1 class="display-3 fw-900 text-dark mb-4">
                        <span class="gradient-text-dynamic"><?= htmlspecialchars($service['title']) ?></span> <br>
                        Build for Results.
                    </h1>
                    <p class="hero-subtext fs-5 text-dark opacity-75 mb-5" style="max-width: 600px;">
                        <?= htmlspecialchars($service['description'] ?? $service['desc'] ?? '') ?>
                    </p>
                    <div class="hero-cta-group d-flex flex-wrap gap-3">
                        <a href="#leads" class="btn btn-punchy btn-lg">Book Free Audit <i class="bi bi-chevron-right ms-2"></i></a>
                        <a href="#packages" class="btn btn-outline-dark-punchy btn-lg">View Packages</a>
                    </div>
                </div>
            </div>

            <!-- Stats/Visual Box -->
            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="bento-card visual-card-v2 h-100 p-4 overflow-hidden position-relative">
                    <div class="vc-top d-flex justify-content-between">
                        <span class="small fw-bold opacity-50 text-white"><?= htmlspecialchars($vConfig['status']) ?></span>
                        <div class="status-pulse"></div>
                    </div>
                    
                    <div class="vc-visual-content my-4 py-3 text-center">
                        <?php if($vConfig['animation'] === 'seo-dashboard'): ?>
                            <div class="anim-seo-dashboard">
                                <div class="mini-chart-wrapper">
                                     <svg class="trend-line" viewBox="0 0 200 80">
                                        <polyline points="0,70 40,65 80,35 120,40 160,15 200,5" fill="none" stroke="var(--page-accent)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                        <circle cx="200" cy="5" r="6" fill="var(--page-accent)"/>
                                     </svg>
                                </div>
                                <div class="keyword-pill px-4 mt-2">
                                    <span class="opacity-75">Target Keyword:</span> 
                                    <span class="text-white">Rank #1</span>
                                    <i class="bi bi-arrow-up-circle-fill text-accent-dynamic ms-1 fs-6"></i>
                                </div>
                            </div>

                        <?php elseif($vConfig['animation'] === 'window-mockup'): ?>
                            <div class="anim-window-mockup">
                                 <div class="mockup-header">
                                      <div class="dot red"></div><div class="dot yellow"></div><div class="dot green"></div>
                                 </div>
                                 <div class="mockup-body">
                                      <div class="skeleton-title"></div>
                                      <div class="skeleton-text"></div>
                                      <div class="skeleton-text short"></div>
                                      <div class="skeleton-img">
                                           <div class="img-glow"></div>
                                           <i class="bi bi-image position-absolute top-50 start-50 translate-middle opacity-25"></i>
                                      </div>
                                 </div>
                            </div>

                        <?php elseif($vConfig['animation'] === 'roas-ring'): ?>
                            <div class="anim-roas-ring">
                                <svg class="roas-svg" viewBox="0 0 160 160">
                                    <circle class="ring-bg" cx="80" cy="80" r="70" fill="none" stroke="rgba(255,255,255,0.05)" stroke-width="12"/>
                                    <circle class="ring-fill" cx="80" cy="80" r="70" fill="none" stroke="var(--page-accent)" stroke-width="12" stroke-linecap="round"/>
                                </svg>
                                <div class="roas-content">
                                    <span class="roas-value text-white display-6 fw-900 mb-0 lh-1">5.4x</span>
                                    <span class="roas-label small fw-bold opacity-50 mt-1 letter-spacing-1">AVG ROAS</span>
                                </div>
                                <div class="roas-ping ping-1"></div>
                                <div class="roas-ping ping-2"></div>
                            </div>

                        <?php elseif($vConfig['animation'] === 'erp-blocks'): ?>
                            <div class="anim-erp-blocks">
                                <div class="erp-hub">CORE<br><span class="opacity-50">SYNC</span></div>
                                <div class="erp-module m-top"><i class="bi bi-people-fill text-accent-dynamic"></i> HR</div>
                                <div class="erp-module m-right"><i class="bi bi-cash-stack text-accent-dynamic"></i> FIN</div>
                                <div class="erp-module m-bottom"><i class="bi bi-box-seam text-accent-dynamic"></i> INV</div>
                                <div class="erp-module m-left"><i class="bi bi-graph-up text-accent-dynamic"></i> CRM</div>
                                
                                <svg class="erp-connections" viewBox="0 0 200 200">
                                    <line x1="100" y1="100" x2="100" y2="35" stroke="var(--page-accent)" stroke-width="2" class="c-line"/>
                                    <line x1="100" y1="100" x2="165" y2="100" stroke="var(--page-accent)" stroke-width="2" class="c-line"/>
                                    <line x1="100" y1="100" x2="100" y2="165" stroke="var(--page-accent)" stroke-width="2" class="c-line"/>
                                    <line x1="100" y1="100" x2="35" y2="100" stroke="var(--page-accent)" stroke-width="2" class="c-line"/>
                                </svg>
                                <div class="data-packet p-top"></div>
                                <div class="data-packet p-right"></div>
                                <div class="data-packet p-bottom"></div>
                                <div class="data-packet p-left"></div>
                            </div>

                        <?php elseif($vConfig['animation'] === 'saas-server'): ?>
                            <div class="anim-saas-server">
                                 <div class="server-rack">
                                      <div class="server-blade">
                                          <div class="blade-lights"><span class="l-grn"></span><span class="l-blu"></span></div>
                                          <div class="blade-load" style="width: 40%;"></div>
                                      </div>
                                      <div class="server-blade">
                                          <div class="blade-lights"><span class="l-grn"></span><span class="l-blu"></span></div>
                                          <div class="blade-load" style="width: 75%;"></div>
                                      </div>
                                      <div class="server-blade active">
                                          <div class="blade-lights"><span class="l-grn"></span><span class="l-blu pulse"></span></div>
                                          <div class="blade-load" style="width: 90%;"></div>
                                      </div>
                                 </div>
                                 <div class="saas-metrics mt-4 d-flex justify-content-between w-100 px-2">
                                      <div class="text-start">
                                           <span class="d-block text-white opacity-50 fw-900 letter-spacing-1" style="font-size:10px;">REQ/SEC</span>
                                           <span class="text-white fw-bold fs-5 lh-1">14,205</span>
                                      </div>
                                      <div class="text-end">
                                           <span class="d-block text-accent-dynamic fw-900 letter-spacing-1" style="font-size:10px;">UPTIME</span>
                                           <span class="text-white fw-bold fs-5 lh-1">99.99%</span>
                                      </div>
                                 </div>
                            </div>

                        <?php else: ?>
                            <div class="energy-core-upgraded">
                                 <div class="core-orbit o-1 d-none d-sm-block"></div>
                                 <div class="core-orbit o-2 d-none d-sm-block"></div>
                                 <div class="core-center">
                                     <div class="core-nucleus"></div>
                                 </div>
                                 <div class="core-ring pulse-ring"></div>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="vc-footer mt-auto pt-4 border-top border-white border-opacity-10">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="d-block small text-white opacity-50"><?= htmlspecialchars($vConfig['metric_label']) ?></span>
                                <span class="h4 fw-900 mb-0 text-white"><?= htmlspecialchars($vConfig['metric_value']) ?></span>
                            </div>
                            <i class="bi <?= $vConfig['icon'] ?> text-white fs-3"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Trust / Social Proof Box -->
            <div class="col-lg-5" data-aos="zoom-in" data-aos-delay="300">
                <div class="bento-card trust-card-punchy p-4 d-flex align-items-center justify-content-between h-100">
                    <div class="d-flex align-items-center gap-3">
                        <div class="avatar-stack d-flex">
                            <div class="av bg-dark text-white">A</div>
                            <div class="av bg-accent text-white ms-n2">K</div>
                            <div class="av bg-white text-dark ms-n2 border-dark border">C</div>
                        </div>
                        <div>
                            <div class="fw-900 text-dark mb-0">99% Retention</div>
                            <span class="small opacity-50">Client Success Rate</span>
                        </div>
                    </div>
                    <div class="badge-accent-v2">Top Tier</div>
                </div>
            </div>

            <!-- Technology / Tool Box -->
            <div class="col-lg-7" data-aos="zoom-in" data-aos-delay="400">
                <div class="bento-card marquee-card-v2 p-4 overflow-hidden d-flex align-items-center h-100">
                    <div class="marquee-content-v2 d-flex gap-5">
                        <span class="marquee-item">PREMIUM DESIGN • HIGH PERFORMANCE • SCALABLE OPS • </span>
                        <span class="marquee-item">PREMIUM DESIGN • HIGH PERFORMANCE • SCALABLE OPS • </span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Pitching Section: High-Authority Offerings -->
<section class="pitching-section section-padding-lg bg-white position-relative border-bottom border-dark border-opacity-5">
    <div class="container">
        <div class="row mb-5" data-aos="fade-up">
            <div class="col-lg-10">
                <h2 class="display-4 fw-900 text-dark mb-4">Transform Your Business with a Leading <span class="text-accent-dynamic"><?= htmlspecialchars($service['title']) ?> Company</span></h2>
                <p class="fs-5 text-muted" style="max-width: 800px;">Looking to take your brand to the next level? Our expert team creates visually stunning, high-performance digital assets that help you stand out and connect with your audience on a deeper level.</p>
            </div>
        </div>

        <div class="row g-4">
            <!-- Feature 1 -->
            <div class="col-lg-6" data-aos="fade-up">
                <div class="pitch-card p-5 border-3 border border-dark rounded-5 h-100 transition-all bg-light">
                    <div class="icon-box-punchy mb-4">
                        <i class="bi bi-people-fill fs-1"></i>
                    </div>
                    <h3 class="fw-900 mb-3">User-Friendly Interfaces for Maximum Engagement</h3>
                    <p class="text-muted mb-4 fs-5">A website is your 24/7 salesperson. We design intuitive, <strong>User-Friendly Websites</strong> that prioritize the <a href='https://www.nngroup.com/articles/definition-user-experience/' target='_blank' class='text-dark fw-bold text-decoration-underline'>visitor's journey</a>. By streamlining navigation and clarifying calls-to-action, we ensure your audience stays engaged. This is the core of our <a href='/cr/services/uiux' class='text-accent-dynamic fw-bold'>UI/UX Strategy</a>, ensuring your brand resonates with every click.</p>
                    <a href="#strategy" class="btn btn-dark-punchy rounded-pill px-4">See Our Strategy <i class="bi bi-arrow-down ms-2"></i></a>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="pitch-card p-5 border-3 border border-dark rounded-5 h-100 transition-all bg-white shadow-punchy-sm">
                    <div class="icon-box-punchy mb-4">
                        <i class="bi bi-phone-vibrate fs-1"></i>
                    </div>
                    <h3 class="fw-900 mb-3">Mobile-Optimized for the Modern Shopper</h3>
                    <p class="text-muted mb-4 fs-5">In today's mobile-first world, your site must be flawless on every screen. Our <strong>Mobile-Optimized Designs</strong> adapt perfectly to any device, providing a <a href='/cr/services/pwa' class='text-accent-dynamic fw-bold'>Native-App Experience</a>. We focus on touch-friendly interfaces and rapid mobile rendering, as outlined in <a href='https://developers.google.com/search/mobile-sites/mobile-first-indexing' target='_blank' class='text-dark fw-bold text-decoration-underline'>Google's Mobile Indexing Guide</a>.</p>
                    <a href="#technology" class="btn btn-dark-punchy rounded-pill px-4">Tech Specs <i class="bi bi-cpu ms-2"></i></a>
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="col-lg-6" data-aos="fade-up">
                <div class="pitch-card p-5 border-3 border border-dark rounded-5 h-100 transition-all bg-white shadow-punchy-sm">
                    <div class="icon-box-punchy mb-4">
                        <i class="bi bi-palette-fill fs-1"></i>
                    </div>
                    <h3 class="fw-900 mb-3">Customized Designs for Unique Brands</h3>
                    <p class="text-muted mb-4 fs-5">Your business is unique, and your website should be too. We avoid generic templates in favor of <strong>Customized Designs</strong> that capture your <a href='/cr/services/branding' class='text-accent-dynamic fw-bold'>Brand Personality</a>. We work closely with you to ensure every visual element aligns with your core values, much like our successful <a href='/cr/work' class='text-dark fw-bold text-decoration-underline'>Portfolio Projects</a>.</p>
                    <a href="/cr/work" class="btn btn-dark-punchy rounded-pill px-4">View Portfolio <i class="bi bi-grid-3x3-gap ms-2"></i></a>
                </div>
            </div>

            <!-- Feature 4 -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="pitch-card p-5 border-3 border border-dark rounded-5 h-100 transition-all bg-light">
                    <div class="icon-box-punchy mb-4">
                        <i class="bi bi-lightning-charge-fill fs-1"></i>
                    </div>
                    <h3 class="fw-900 mb-3">Fast Loading for Better User Experience</h3>
                    <p class="text-muted mb-4 fs-5">Speed is the foundation of trust. Our websites are engineered to be <strong>Lightning Fast</strong>, with a focus on sub-second load times. We optimize everything from server-side scripts to client-side assets, ensuring your <a href='/cr/services/seo' class='text-accent-dynamic fw-bold'>SEO Rankings</a> soar. Check your current speed on <a href='https://pagespeed.web.dev/' target='_blank' class='text-dark fw-bold text-decoration-underline'>PageSpeed Insights</a>.</p>
                    <a href="#performance" class="btn btn-dark-punchy rounded-pill px-4">Speed Metrics <i class="bi bi-lightning ms-2"></i></a>
                </div>
            </div>

            <!-- Feature 5 -->
            <div class="col-12" data-aos="fade-up">
                <div class="pitch-card p-5 border-3 border border-dark rounded-5 transition-all bg-dark text-white" style="box-shadow: 12px 12px 0px var(--page-accent);">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h3 class="fw-900 mb-3 text-white">SEO-Friendly Designs for Organic Growth</h3>
                            <p class="text-white opacity-75 mb-4 fs-5">Don't just launch; dominate. We build <strong>SEO-Friendly Websites</strong> from the ground up, ensuring that search engines love your site. Our architecture follows <a href='https://schema.org/' target='_blank' class='text-accent-dynamic fw-bold text-decoration-none'>Schema.org Best Practices</a> and integrates seamlessly with our <a href='/cr/services/marketing' class='text-accent-dynamic fw-bold'>Full-Scale Marketing Campaigns</a>.</p>
                        </div>
                        <div class="col-lg-4 text-lg-end">
                            <a href="/cr/services/seo" class="btn btn-punchy btn-lg">Explore SEO Pillar <i class="bi bi-graph-up-arrow ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    </div>
</section>

<style>
.pitch-card {
    transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
}
.pitch-card:hover {
    transform: translateY(-10px);
    border-color: var(--page-accent) !important;
}
.icon-box-punchy {
    width: 80px;
    height: 80px;
    background: var(--page-accent);
    color: var(--text-dark);
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 20px;
    border: 3px solid var(--text-dark);
}
.section-padding-lg {
    padding: 100px 0;
}
<!-- Core Excellence Pillars -->
<section class="excellence-pillars-section section-padding bg-white">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-aos="fade-up">
                <div class="pillar-card-v2 p-4 text-center border-2 border border-dark rounded-5 h-100 transition-all">
                    <div class="p-icon mb-3 text-accent-dynamic"><i class="bi bi-lightning-charge fs-1"></i></div>
                    <h4 class="fw-900 mb-2">Fast-Loading & High-Performance</h4>
                    <p class="small text-muted mb-0">Speed-optimized architectures designed to reduce bounce rates and maximize <strong>User Experience</strong> through clean, <a href='/cr/services/website' class='text-dark fw-bold'>Modern Coding</a>.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="50">
                <div class="pillar-card-v2 p-4 text-center border-2 border border-dark rounded-5 h-100 transition-all shadow-punchy-sm">
                    <div class="p-icon mb-3 text-accent-dynamic"><i class="bi bi-wallet2 fs-1"></i></div>
                    <h4 class="fw-900 mb-2">Affordable Solutions for Small Business</h4>
                    <p class="small text-muted mb-0">High-quality <a href='/cr/services/website' class='text-dark fw-bold'>Web Design</a> at a price that fits your budget without compromising on engineering excellence.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="pillar-card-v2 p-4 text-center border-2 border border-dark rounded-5 h-100 transition-all shadow-punchy-sm">
                    <div class="p-icon mb-3 text-accent-dynamic"><i class="bi bi-graph-up-arrow fs-1"></i></div>
                    <h4 class="fw-900 mb-2">SEO-Optimized Engineering</h4>
                    <p class="small text-muted mb-0">Built using the latest <strong>SEO Techniques</strong> to rank higher and drive <a href='/cr/services/seo' class='text-accent-dynamic fw-bold'>Organic Traffic</a> and high-intent leads.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="150">
                <div class="pillar-card-v2 p-4 text-center border-2 border border-dark rounded-5 h-100 transition-all">
                    <div class="p-icon mb-3 text-accent-dynamic"><i class="bi bi-phone fs-1"></i></div>
                    <h4 class="fw-900 mb-2">Mobile Responsive Mastery</h4>
                    <p class="small text-muted mb-0">Beautiful, user-friendly designs that look perfect on mobile, tablets, and desktops. Optimized for <a href='/cr/services/pwa' class='text-dark fw-bold'>Touch Interaction</a>.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Growth Ecosystem (The 15+ Benefits) -->
<section class="growth-ecosystem-section section-padding bg-dark text-white overflow-hidden">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-8">
                <h2 class="display-4 fw-900 mb-4 text-white">Affordable, Professional, and <span class="text-accent-dynamic">Built for Growth</span></h2>
                <p class="fs-5 opacity-75">In today’s digital-first world, every business deserves a professional online presence. Our service offers cost-effective, engineering-grade solutions tailored to showcase your brand and products.</p>
            </div>
        </div>
        
        <div class="row g-3">
            <?php 
            $ecosystem_features = [
                ['title' => 'Professional Templates', 'link' => '/cr/services/website'],
                ['title' => 'Cost-Effective Design', 'link' => '/cr/services/marketing'],
                ['title' => 'Mobile Responsive', 'link' => '/cr/services/pwa'],
                ['title' => 'Fast Load Speeds', 'link' => 'https://pagespeed.web.dev/'],
                ['title' => 'User-Friendly Interface', 'link' => '/cr/services/uiux'],
                ['title' => 'Secure Hosting', 'link' => '/cr/services/automation'],
                ['title' => 'Custom Branding Colors', 'link' => '/cr/services/branding'],
                ['title' => 'Integrated Contact Forms', 'link' => '/cr/services/crm'],
                ['title' => 'Domain Registration', 'link' => '#'],
                ['title' => 'Quick Launch Timeline', 'link' => '/cr/about'],
                ['title' => 'Scalable Solutions', 'link' => '/cr/services/saas'],
                ['title' => 'Technical Support', 'link' => '/cr/contact'],
                ['title' => 'Enhanced Visual Appeal', 'link' => '/cr/services/creative'],
                ['title' => 'SEO Integration', 'link' => '/cr/services/seo'],
                ['title' => 'API Readiness', 'link' => '/cr/services/api']
            ];
            foreach ($ecosystem_features as $f): 
            ?>
            <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                <div class="p-3 border border-white border-opacity-10 rounded-4 transition-all hover-bg-white-opacity d-flex align-items-center gap-3">
                    <i class="bi bi-check-circle-fill text-accent-dynamic"></i>
                    <a href="<?= $f['link'] ?>" class="text-white text-decoration-none fw-bold small opacity-75 hover-opacity-100"><?= $f['title'] ?></a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<style>
.pillar-card-v2:hover {
    transform: translateY(-5px);
    border-color: var(--page-accent) !important;
}
.hover-bg-white-opacity:hover {
    background: rgba(255,255,255,0.05);
    border-color: var(--page-accent) !important;
}
.hover-opacity-100:hover { opacity: 1 !important; }
<!-- Local Dominance Section -->
<section class="local-dominance-section section-padding bg-white">
    <div class="container">
        <div class="row mb-5 text-center" data-aos="fade-up">
            <div class="col-lg-8 mx-auto">
                <h2 class="display-5 fw-900 text-dark mb-4">Mastering <span class="text-accent-dynamic">Local Dominance</span></h2>
                <p class="fs-5 text-muted">A website is only as powerful as its visibility. We specialize in localized strategies that ensure you aren't just 'online'—you're at the top of every local search result.</p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-4" data-aos="fade-up">
                <div class="p-5 border-2 border border-dark rounded-5 h-100 bg-light shadow-punchy-sm">
                    <h4 class="fw-900 mb-3"><i class="bi bi-geo-alt text-accent-dynamic me-2"></i> Stronger Community Outreach</h4>
                    <p class="small text-muted mb-0">Strengthen your connection with the local audience through tailored strategies that boost visibility and engagement. We build trust within your specific service area.</p>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="p-5 border-2 border border-dark rounded-5 h-100 bg-white shadow-punchy-sm">
                    <h4 class="fw-900 mb-3"><i class="bi bi-graph-up text-accent-dynamic me-2"></i> Higher Local SEO Ranking</h4>
                    <p class="small text-muted mb-0">Secure higher <a href='/cr/services/seo' class='text-dark fw-bold'>Local SEO Rankings</a>. Connect with nearby customers, increase foot traffic, and stand out in the map pack effortlessly.</p>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="p-5 border-2 border border-dark rounded-5 h-100 bg-light shadow-punchy-sm">
                    <h4 class="fw-900 mb-3"><i class="bi bi-search text-accent-dynamic me-2"></i> Area-Based Keyword Research</h4>
                    <p class="small text-muted mb-0">Target your audience with laser precision. Our strategies ensure you rank for specific regions, driving highly relevant local traffic to your door.</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up">
                <div class="p-5 border-2 border border-dark rounded-5 h-100 bg-dark text-white">
                    <h4 class="fw-900 mb-3 text-accent-dynamic"><i class="bi bi-link-45deg me-2"></i> Local Link Building & Listings</h4>
                    <p class="small opacity-75 mb-0">Boost credibility with accurate <a href='/cr/services/marketing' class='text-white fw-bold'>Business Listings</a> and strategic local backlinks that signal authority to Google's proximity algorithms.</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="p-5 border-2 border border-dark rounded-5 h-100 bg-white border-accent-dynamic">
                    <h4 class="fw-900 mb-3"><i class="bi bi-google text-accent-dynamic me-2"></i> GMB Optimization Mastery</h4>
                    <p class="small text-muted mb-0">Maximize your <a href='https://www.google.com/business/' target='_blank' class='text-dark fw-bold'>Google My Business</a> profile. We enhance rankings with tailored updates, image optimization, and review management strategies.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Authority Showcase (Case Studies) -->
<section class="authority-showcase-section section-padding bg-light overflow-hidden">
    <div class="container">
        <div class="row align-items-end mb-5">
            <div class="col-lg-7">
                <h2 class="display-4 fw-900 text-dark mb-4">Case Studies: <span class="text-accent-dynamic">Success Stories</span></h2>
                <p class="fs-5 text-muted">At Crea8ve Cool, every project tells a story of strategy and measurable ROI. Explore how we transformed brands across the globe.</p>
            </div>
            <div class="col-lg-5 text-lg-end pb-3">
                <a href="/cr/work" class="btn btn-outline-dark-punchy rounded-pill px-5">View All Work</a>
            </div>
        </div>

        <div class="row g-4">
            <?php 
            $case_studies = [
                ['name' => 'Dhananjay Creations', 'niche' => 'Saree Manufacturers | Delhi', 'results' => ['Website with SEO (Multiple Locations)', 'Brand Image Building', 'GMB Ranking Optimization']],
                ['name' => 'Formative Sports', 'niche' => 'Sportswear Manufacturers | Australia', 'results' => ['Global E-commerce Architecture', 'High-Authority Link Building', 'National TV Media Exposure']],
                ['name' => 'Academic Global School', 'niche' => 'Best CBSE School | Gorakhpur', 'results' => ['Educational Portal Engineering', 'Local Community Outreach', 'Organic Enrollment Growth']],
                ['name' => 'Marina Dee', 'niche' => 'Psychic Readings | Melbourne', 'results' => ['Bespoke Creative Branding', 'Targeted Search Dominance', 'Seamless Booking Integration']],
                ['name' => 'DRH Sports', 'niche' => 'Sports Uniforms | Dominica', 'results' => ['International Supply-Chain SEO', 'B2B Lead Generation Funnels', 'Technical Performance Hardening']]
            ];
            foreach ($case_studies as $i => $cs): 
            ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?= $i * 50 ?>">
                <div class="case-card p-5 border-3 border border-dark rounded-5 h-100 bg-white transition-all shadow-punchy-sm">
                    <div class="badge bg-dark text-white rounded-pill px-3 py-1 mb-3 small fw-bold"><?= $cs['niche'] ?></div>
                    <h4 class="fw-900 mb-4"><?= $cs['name'] ?></h4>
                    <ul class="list-unstyled d-grid gap-2 mb-4">
                        <?php foreach($cs['results'] as $res): ?>
                            <li class="small d-flex align-items-center gap-2">
                                <i class="bi bi-star-fill text-accent-dynamic" style="font-size: 10px;"></i>
                                <span class="opacity-75"><?= $res ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <a href="/cr/work" class="text-accent-dynamic fw-900 text-decoration-none small">READ FULL CASE STUDY <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<style>
.case-card:hover {
    transform: translateY(-10px) rotate(1deg);
    box-shadow: 15px 15px 0px var(--page-accent);
    border-color: var(--page-accent) !important;
}
.border-accent-dynamic { border-color: var(--page-accent) !important; border-width: 3px !important; }
</style>

<!-- Authority Narrative Section 1: The Growth Engine -->
<section class="growth-engine-section section-padding bg-light overflow-hidden">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="p-2 bg-white border border-dark border-3 rounded-5 shadow-punchy-sm">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=800&q=80" alt="Business Growth" class="img-fluid rounded-4">
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="display-5 fw-900 text-dark mb-4">Accelerate Your Business Growth with <span class="text-accent-dynamic">Unmatched Web Engineering</span></h2>
                <p class="fs-5 text-muted mb-4">Your website is more than a digital presence—it’s your <strong>growth engine</strong>. We design innovative, user-focused platforms that captivate audiences, enhance <strong>User Experience</strong>, and drive measurable results. At Crea8ve Cool, we understand that whether you're a startup or an established enterprise, your <a href='/cr/services/website' class='text-dark fw-bold text-decoration-underline'>Custom Web Solution</a> must ensure you stand out, attract customers, and turn clicks into conversions.</p>
                <p class="fs-5 text-muted mb-5">Let's grow together by leveraging our expertise in <a href='/cr/services/marketing' class='text-accent-dynamic fw-bold'>Performance Marketing</a> and <strong>Conversion Rate Optimization (CRO)</strong>. We focus on the intersection of brand identity and technical excellence, as seen in our <a href='/cr/work' class='text-dark fw-bold text-decoration-underline'>Featured Case Studies</a>.</p>
                <a href="#leads" class="btn btn-punchy btn-lg">Start Your Growth Journey</a>
            </div>
        </div>
    </div>
</section>

<!-- Authority Narrative Section 2: The Strategic Partner -->
<section class="strategic-partner-section section-padding bg-white">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-12" data-aos="fade-up">
                <h2 class="display-4 fw-900 text-dark mb-5 text-center">Drive Success with the <span class="text-accent-dynamic">Best Web Design Services in India</span></h2>
            </div>
            <div class="col-lg-6" data-aos="fade-right">
                <p class="fs-5 text-muted mb-4">A well-designed website forms the core of success for your business online. It's that critical <strong>first impression</strong> that your audience will have—a platform to introduce your brand, demonstrate value, and convince visitors to take action. Behind each thriving business is a website that combines aesthetic appeal with technical functionality, and we deliver exactly that.</p>
                <p class="fs-5 text-muted">Crea8ve Cool focuses on creating brilliant websites that attract your target audience and keep them engaged. We understand the specific challenges facing businesses today—from tight <a href='/cr/services/marketing' class='text-accent-dynamic fw-bold'>Marketing Budgets</a> to tough global competition and the urgency for quick, measurable outcomes. Our strategy is aimed at meeting these needs while maximizing long-term productivity and <a href='/cr/services/seo' class='text-accent-dynamic fw-bold'>Organic Growth</a>.</p>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="p-5 border-3 border border-dark rounded-5 bg-dark text-white shadow-punchy-lg">
                    <h4 class="fw-900 mb-4 text-accent-dynamic">The Authority Difference</h4>
                    <p class="opacity-75 mb-4">As a top-tier provider of <strong>Web Design Services in India</strong>, we understand the unique needs of scaling brands. From bold, eye-catching visuals to easy-to-navigate layouts, we make sure your website reflects the true identity and values of your business.</p>
                    <p class="opacity-75">Our <a href='/cr/services/pwa' class='text-white fw-bold text-decoration-underline'>Mobile-First Design Approach</a> ensures your site functions perfectly on all devices, providing every user with a seamless experience. We integrate modern trends in design, <a href='https://web.dev/vitals/' target='_blank' class='text-accent-dynamic fw-bold text-decoration-none'>Google Web Vitals Optimization</a>, and intuitive use into every production.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Authority Narrative Section 3: The Trust Commitment -->
<section class="trust-commitment-section section-padding bg-light">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">
                <h2 class="display-5 fw-900 text-dark mb-4">Exceptional Services That <span class="text-accent-dynamic">Businesses Count On</span></h2>
                <p class="fs-5 text-muted mb-4">Crea8ve Cool represents the distinctness of your business while delivering measurable success. We have worked hard to gain the trust of our clients by offering top-notch <a href='/cr/services/website' class='text-dark fw-bold text-decoration-underline'>Web Engineering Services</a>. We understand your needs, challenges, and dreams, and we blend creativity with absolute technical competence.</p>
                <p class="fs-5 text-muted mb-5">Our commitment to excellence, transparency, and satisfaction has enabled us to gain the trust of many scaling brands. Let's bring your vision to life as a digital masterpiece that dominates the search results and converts traffic into revenue.</p>
                
                <div class="d-grid gap-3">
                    <div class="d-flex align-items-center gap-3 p-3 bg-white border border-dark border-2 rounded-4">
                        <i class="bi bi-shield-check text-accent-dynamic fs-3"></i>
                        <span class="fw-800 text-dark">Commitment to Excellence & Transparency</span>
                    </div>
                    <div class="d-flex align-items-center gap-3 p-3 bg-white border border-dark border-2 rounded-4">
                        <i class="bi bi-heart-fill text-accent-dynamic fs-3"></i>
                        <span class="fw-800 text-dark">Client-First Satisfaction Guarantee</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
                <div class="p-2 bg-white border border-dark border-3 rounded-5 shadow-punchy-sm">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=800&q=80" alt="Team Trust" class="img-fluid rounded-4">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Strategic Sub-Navigation -->
<div class="strategic-sub-nav sticky-top bg-white border-bottom border-dark border-opacity-10 py-3 d-none d-lg-block" style="z-index: 1000; top: 0;">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="d-flex gap-4">
            <a href="#strategy" class="sub-nav-link fw-800 text-dark opacity-50 text-decoration-none">Strategy</a>
            <a href="#performance" class="sub-nav-link fw-800 text-dark opacity-50 text-decoration-none">Performance</a>
            <a href="#technology" class="sub-nav-link fw-800 text-dark opacity-50 text-decoration-none">Technology</a>
            <a href="#packages" class="sub-nav-link fw-800 text-dark opacity-50 text-decoration-none">Pricing</a>
            <a href="#ecosystem" class="sub-nav-link fw-800 text-dark opacity-50 text-decoration-none">Ecosystem</a>
        </div>
        <a href="#leads" class="btn btn-dark btn-sm px-4 rounded-pill fw-bold">Get a Quote</a>
    </div>
</div>

<style>
.sub-nav-link { font-size: 13px; text-transform: uppercase; letter-spacing: 1px; transition: all 0.3s; }
.sub-nav-link:hover, .sub-nav-link.active { opacity: 1 !important; color: var(--page-accent) !important; }
.strategic-sub-nav { box-shadow: 0 10px 30px rgba(0,0,0,0.03); }
</style>

<!-- Why Choose Us SEO Section -->
<section class="seo-rich-content section-padding bg-light position-relative overflow-hidden">
    <div class="container">
        <div class="row g-5">
            <div class="col-12" data-aos="fade-up">
                <div class="authority-content-wrapper">
                    <?php 
                    $content = $service['seo_content'] ?? '';
                    if (empty($content)) {
                        echo "<p class='fs-5 text-muted'>We provide professional " . $service['title'] . " services that focus on high performance and measurable results.</p>";
                    } else {
                        // Internal Linker Logic
                        $services_list = $data['catalog'] ?? [];
                        foreach ($services_list as $s) {
                            if ($s['slug'] !== $serviceSlug) {
                                $pattern = '/\b' . preg_quote($s['title'], '/') . '\b/i';
                                $replacement = '<a href="' . BASE_URL . 'services/' . $s['slug'] . '" class="text-accent-dynamic text-decoration-none fw-bold">' . $s['title'] . '</a>';
                                $content = preg_replace($pattern, $replacement, $content, 1);
                            }
                        }
                        echo $content;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.authority-content-wrapper h2, .authority-content-wrapper h3, .authority-content-wrapper h4 {
    font-family: 'Clash Display';
    font-weight: 900;
    color: var(--text-dark);
    margin-top: 3rem;
    margin-bottom: 1.5rem;
}
.authority-content-wrapper p {
    font-size: 1.15rem;
    line-height: 1.8;
    color: #4b5563;
    margin-bottom: 1.5rem;
}
.authority-pillar-card {
    background: #fff;
    border: 3px solid var(--text-dark);
    box-shadow: 10px 10px 0px var(--text-dark);
    border-radius: 30px;
    padding: 2.5rem;
    height: 100%;
    transition: all 0.3s;
}
.authority-pillar-card:hover {
    transform: translate(-5px, -5px);
    box-shadow: 15px 15px 0px var(--page-accent);
}
.authority-content-wrapper .accordion-item {
    background: transparent;
    border: none;
    margin-bottom: 1.5rem;
}
.authority-content-wrapper .accordion-button {
    background: #fff;
    border: 3px solid var(--text-dark);
    box-shadow: 8px 8px 0px var(--text-dark);
    border-radius: 20px !important;
    padding: 1.5rem 2rem;
    font-family: 'Clash Display';
    font-weight: 900;
    color: var(--text-dark);
    font-size: 1.25rem;
}
.authority-content-wrapper .accordion-button:not(.collapsed) {
    color: var(--page-accent);
    box-shadow: 12px 12px 0px var(--page-accent);
    transform: translate(-4px, -4px);
}
.authority-content-wrapper .accordion-body {
    padding: 2rem;
    font-size: 1.1rem;
    line-height: 1.8;
    color: #4b5563;
}
.authority-content-wrapper .accordion-button::after {
    filter: brightness(0);
}
</style>
    </div>
</section>

<!-- Injecting Process and Stack Components -->
<?php 
if (empty($data['process'])) {
    $data['process'] = [
        ['step' => '01', 'title' => 'Discovery & Blueprint', 'desc' => "We audit your current standing, understand your goals, and map out a bulletproof strategy tailored exactly to your {$service['title']} needs."],
        ['step' => '02', 'title' => 'Rapid Execution', 'desc' => 'Our engineers and creatives execute the plan with precision and speed. No delays, no excuses, just high-performance delivery.'],
        ['step' => '03', 'title' => 'Scale & Dominate', 'desc' => 'Once live, we monitor the data streams, optimize rigorously, and deploy scaling strategies to multiply your ROI.']
    ];
}
require_once APP_PATH . '/views/components/process.php'; 
require_once APP_PATH . '/views/components/stack.php'; 
?>

<!-- GAP Closure: Interactive ROI Calculator -->
<section class="roi-calculator-section section-padding bg-dark text-white border-bottom border-white border-opacity-10 position-relative overflow-hidden">
    <div class="position-absolute w-100 h-100" style="background: radial-gradient(circle at right, rgba(<?= hexToRgb($accentColor) ?>, 0.1), transparent 50%); top:0; left:0; pointer-events: none;"></div>
    <div class="container position-relative z-1">
        <div class="row align-items-center g-5">
            <div class="col-lg-5" data-aos="fade-right">
                <span class="text-accent-dynamic fw-900 small letter-spacing-2 mb-3 d-block">INTERACTIVE ENGAGEMENT</span>
                <h2 class="display-5 fw-900 mb-4">Calculate Your <span class="text-accent-dynamic">Digital ROI</span></h2>
                <p class="fs-5 opacity-75 mb-4">Stop guessing. See exactly how an engineered website impacts your bottom line by increasing conversion rates and average order values.</p>
                <div class="d-flex align-items-center gap-3">
                    <i class="bi bi-shield-check text-accent-dynamic fs-3"></i>
                    <span class="fw-bold opacity-50">Data powered by industry averages.</span>
                </div>
            </div>
            <div class="col-lg-7" data-aos="fade-left">
                <div class="p-5 bg-white bg-opacity-10 border border-white border-opacity-25 rounded-5 backdrop-blur">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label class="small fw-bold opacity-75 mb-2">Monthly Traffic</label>
                            <input type="range" class="form-range custom-range" id="trafficInput" min="1000" max="50000" value="5000" step="1000">
                            <div class="fw-900 fs-4 text-white mt-2" id="trafficVal">5,000 Visitors</div>
                        </div>
                        <div class="col-md-6">
                            <label class="small fw-bold opacity-75 mb-2">Avg. Value Per Client (₹)</label>
                            <input type="range" class="form-range custom-range" id="valueInput" min="1000" max="50000" value="10000" step="1000">
                            <div class="fw-900 fs-4 text-white mt-2" id="valueVal">₹10,000</div>
                        </div>
                    </div>
                    <div class="mt-5 pt-4 border-top border-white border-opacity-10">
                        <div class="d-flex justify-content-between align-items-end">
                            <div>
                                <span class="d-block small fw-bold opacity-75 text-uppercase letter-spacing-1 mb-2">Projected Monthly Revenue</span>
                                <span class="display-4 fw-900 text-accent-dynamic" id="revenueOutput">₹1,500,000</span>
                            </div>
                            <div class="text-end d-none d-md-block">
                                <span class="d-block small opacity-50">Assuming a 3% Conversion Rate</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const tInput = document.getElementById('trafficInput');
    const vInput = document.getElementById('valueInput');
    const tVal = document.getElementById('trafficVal');
    const vVal = document.getElementById('valueVal');
    const rOut = document.getElementById('revenueOutput');

    function calcROI() {
        const traffic = parseInt(tInput.value);
        const value = parseInt(vInput.value);
        tVal.innerText = traffic.toLocaleString() + ' Visitors';
        vVal.innerText = '₹' + value.toLocaleString();
        
        // Assume 3% conversion with engineered site
        const revenue = traffic * 0.03 * value;
        rOut.innerText = '₹' + Math.round(revenue).toLocaleString();
    }

    tInput.addEventListener('input', calcROI);
    vInput.addEventListener('input', calcROI);
});
</script>

<!-- Impact Narrative: Designing for Results -->
<section class="results-narrative-section section-padding bg-light">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="display-5 fw-900 text-dark mb-4">Designing a Website That <span class="text-accent-dynamic">Delivers Real Results</span></h2>
                <p class="fs-5 text-muted mb-4">In today's digital-first world, a website must do more than just look good—it must deliver visible, measurable outcomes. A well-crafted platform is your most powerful tool for growth, attracting and converting visitors into loyal customers.</p>
                <p class="fs-5 text-muted mb-5">At Crea8ve Cool, we specialize in <strong>Designing Websites for Small Business</strong> that drive real success by combining performance, usability, and aesthetics with a bulletproof growth strategy.</p>
                
                <div class="d-grid gap-4">
                    <div class="d-flex gap-3">
                        <div class="step-num-v2 text-accent-dynamic fw-900 fs-3">01</div>
                        <div>
                            <h5 class="fw-900 mb-1">Attractively Designed</h5>
                            <p class="small text-muted mb-0">Catchy, modern designs that immediately capture attention and stick in the minds of your audience.</p>
                        </div>
                    </div>
                    <div class="d-flex gap-3">
                        <div class="step-num-v2 text-accent-dynamic fw-900 fs-3">02</div>
                        <div>
                            <h5 class="fw-900 mb-1">User-Centric Experiences</h5>
                            <p class="small text-muted mb-0">Intuitive navigation ensuring visitors find exactly what they need with zero friction.</p>
                        </div>
                    </div>
                    <div class="d-flex gap-3">
                        <div class="step-num-v2 text-accent-dynamic fw-900 fs-3">03</div>
                        <div>
                            <h5 class="fw-900 mb-1">Conversion-Focused Strategy</h5>
                            <p class="small text-muted mb-0">Strategic layouts and persuasive messaging designed to turn traffic into revenue.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="p-5 border-3 border border-dark rounded-5 bg-white shadow-punchy-lg">
                    <h3 class="fw-900 mb-4">Services That <span class="text-accent-dynamic">Engage and Convert</span></h3>
                    <p class="text-muted mb-4">Your website is more than a virtual storefront—it is a purpose-driven engine that connects with your audience. We design around your specific goals, whether it is lead generation, product sales, or audience expansion.</p>
                    
                    <ul class="list-unstyled d-grid gap-3 mb-0">
                        <li class="d-flex align-items-center gap-3 p-3 bg-light rounded-4 border border-dark border-opacity-10">
                            <i class="bi bi-person-check-fill text-accent-dynamic fs-4"></i>
                            <span class="fw-800 text-dark">Tailor-made Designs for Your Market</span>
                        </li>
                        <li class="d-flex align-items-center gap-3 p-3 bg-light rounded-4 border border-dark border-opacity-10">
                            <i class="bi bi-cpu-fill text-accent-dynamic fs-4"></i>
                            <span class="fw-800 text-dark">Optimized User Experience (UX) Mastery</span>
                        </li>
                        <li class="d-flex align-items-center gap-3 p-3 bg-light rounded-4 border border-dark border-opacity-10">
                            <i class="bi bi-lightning-fill text-accent-dynamic fs-4"></i>
                            <span class="fw-800 text-dark">Lightning-Fast Loading Speeds</span>
                        </li>
                        <li class="d-flex align-items-center gap-3 p-3 bg-light rounded-4 border border-dark border-opacity-10">
                            <i class="bi bi-megaphone-fill text-accent-dynamic fs-4"></i>
                            <span class="fw-800 text-dark">Clear, Persuasive Calls-to-Action</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- The 10-Step Impact Blueprint -->
<section class="process-blueprint-section section-padding bg-white">
    <div class="container">
        <div class="row mb-5" data-aos="fade-up">
            <div class="col-lg-8">
                <h2 class="display-4 fw-900 text-dark mb-4">Crafting Impactful <span class="text-accent-dynamic">Small Business Design</span></h2>
                <p class="fs-5 text-muted">A small website doesn’t mean small in impact. We follow a meticulous 10-step blueprint to ensure your digital presence drives results effortlessly.</p>
            </div>
        </div>

        <div class="row g-2 mb-5">
            <?php 
            $steps = ['Goal Definition', 'Audience Research', 'Content Planning', 'Simple Navigation', 'Responsive Design', 'Visual Consistency', 'Optimized Loading Speed', 'Call-to-Action Placement', 'SEO Integration', 'Regular Updates'];
            foreach ($steps as $i => $s): 
            ?>
            <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="<?= $i * 30 ?>">
                <div class="p-3 border border-dark border-opacity-10 rounded-4 text-center bg-light h-100 transition-all hover-shadow-sm">
                    <div class="fw-900 text-accent-dynamic mb-1">Step <?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?></div>
                    <div class="small fw-800 text-dark"><?= $s ?></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="row">
            <div class="col-lg-12" data-aos="fade-up">
                <div class="p-5 border-3 border border-dark rounded-5 bg-dark text-white shadow-punchy-lg">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h4 class="fw-900 mb-3 text-accent-dynamic">The Critical Role of Regular Updates</h4>
                            <p class="opacity-75 mb-0">Regular updates are essential to keep your website relevant, secure, and functional. We monitor analytics to identify improvement areas, fix broken links, and update security protocols to maintain absolute user trust. Add fresh content and modern design elements to stay competitive in an evolving digital landscape.</p>
                        </div>
                        <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                            <a href="#leads" class="btn btn-punchy px-5">Secure Your Future</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.step-num-v2 { line-height: 1; }
.hover-shadow-sm:hover { box-shadow: 0 5px 15px rgba(0,0,0,0.05); transform: translateY(-2px); border-color: var(--page-accent) !important; }
</style>
    <div class="container">
        <div class="row mb-5 text-center" data-aos="fade-up">
            <div class="col-lg-8 mx-auto">
                <h2 class="display-5 fw-900 text-dark mb-4">Plans and <span class="text-accent-dynamic">Pricing</span></h2>
                <p class="fs-5 text-muted">Crea8ve Cool provides engineering-grade web design and development packages specifically tailored for scaling businesses. All packages include high-performance hosting, responsive engineering, and absolute SEO optimization.</p>
            </div>
        </div>

        <div class="row g-4 justify-content-center">
            <?php 
            $packages = [
                [
                    'name' => 'Lite',
                    'tagline' => 'WordPress Based',
                    'desc' => 'Perfect for solo-preneurs and local startups.',
                    'price' => '5,999',
                    'original_price' => '9,999',
                    'savings' => '40',
                    'features' => ['WordPress CMS Platform', '1-3 Basic Pages', 'Mobile Responsive', 'Essential Plugins', 'Standard Performance', 'Excludes Domain/Hosting', 'Contact Form', '7-Day Delivery'],
                    'color' => '#6A5AE0',
                    'recommended' => false
                ],
                [
                    'name' => 'Plus',
                    'tagline' => 'Custom Engineering',
                    'desc' => 'Ideal for businesses ready to scale properly.',
                    'price' => '14,990',
                    'original_price' => '24,990',
                    'savings' => '40',
                    'features' => ['Hard-Coded PHP/MVC', 'Upto 10 Custom Pages', 'Performance Optimized', 'Enhanced SEO Architecture', 'High-Fidelity UI Design', 'Custom Admin Dashboard', 'Priority Support', '15-Day Delivery'],
                    'color' => '#FF007A',
                    'recommended' => true
                ],
                [
                    'name' => 'Pro',
                    'tagline' => 'Enterprise Authority',
                    'desc' => 'For market leaders and high-traffic portals.',
                    'price' => '29,990',
                    'original_price' => '49,990',
                    'savings' => '40',
                    'features' => ['Full Conversion Architecture', 'Unlimited Technical Pages', 'Core Web Vitals Mastery', 'Deep Semantic SEO Silos', 'Bespoke Motion Graphics', 'API & CRM Integrations', 'Dedicated Account Mgr', '30-Day Delivery'],
                    'color' => '#00D2FF',
                    'recommended' => false
                ]
            ];

            foreach ($packages as $pkg): 
            ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-up">
                <div class="price-card h-100 p-4 border-3 border border-dark rounded-5 bg-white position-relative <?= $pkg['recommended'] ? 'recommended' : '' ?>">
                    <?php if($pkg['recommended']): ?>
                        <div class="recommended-badge bg-accent-dynamic text-dark fw-900 shadow-sm">MOST POPULAR</div>
                    <?php endif; ?>
                    
                    <div class="mb-4">
                        <span class="badge text-uppercase mb-2" style="background: <?= $pkg['color'] ?>20; color: <?= $pkg['color'] ?>; font-size: 10px; border: 1px solid <?= $pkg['color'] ?>50;">
                            <?= $pkg['tagline'] ?>
                        </span>
                        <h3 class="fw-900 mb-1" style="color: <?= $pkg['color'] ?>"><?= $pkg['name'] ?></h3>
                        <p class="small text-muted mb-0"><?= $pkg['desc'] ?></p>
                    </div>

                    <div class="price-box mb-4 p-3 bg-light rounded-4 border border-dark border-2">
                        <div class="d-flex align-items-end gap-2 my-2">
                            <span class="h1 fw-900 mb-0">₹<?= $pkg['price'] ?>*</span>
                            <span class="small text-muted text-decoration-line-through mb-1">₹<?= $pkg['original_price'] ?></span>
                        </div>
                        <div class="badge bg-success text-white rounded-pill px-3 py-1" style="font-size: 10px;">
                            SAVE <?= $pkg['savings'] ?>% TODAY
                        </div>
                    </div>

                    <div class="d-grid gap-2 mb-4">
                        <a href="#leads" class="btn btn-dark-punchy w-100 py-3 rounded-pill fw-bold">Select Plan</a>
                    </div>

                    <div class="feature-list mt-auto">
                        <div class="small fw-900 text-dark mb-3 opacity-50 text-uppercase letter-spacing-1">Key Features:</div>
                        <ul class="list-unstyled d-grid gap-2 mb-0">
                            <?php foreach($pkg['features'] as $feature): ?>
                                <li class="d-flex align-items-start gap-2" style="font-size: 14px;">
                                    <i class="bi bi-check2 text-accent-dynamic fw-bold"></i>
                                    <span class="fw-bold opacity-75"><?= $feature ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <div class="mt-4 pt-4 border-top border-dark border-opacity-10 text-center">
                        <div class="x-small text-muted mt-1" style="font-size: 10px;">*One-time setup. 18% GST Extra. Domain/Hosting not included.</div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- GAP Closure: Technical Feature Matrix (Comparison Table) -->
<section class="feature-matrix-section section-padding bg-white border-top border-dark border-opacity-5 d-none d-lg-block">
    <div class="container">
        <div class="row mb-5 text-center" data-aos="fade-up">
            <div class="col-lg-8 mx-auto">
                <h2 class="display-5 fw-900 text-dark mb-3">Technical <span class="text-accent-dynamic">Feature Matrix</span></h2>
                <p class="fs-5 text-muted">A granular breakdown of the engineering capabilities included in each tier.</p>
            </div>
        </div>

        <div class="table-responsive" data-aos="fade-up" data-aos-delay="100">
            <table class="table table-borderless comparison-table align-middle">
                <thead>
                    <tr class="border-bottom border-dark border-opacity-10 text-center">
                        <th class="text-start fs-5 fw-900 w-25 pb-4">Core Capabilities</th>
                        <th class="pb-4 w-25"><span class="badge bg-dark bg-opacity-10 text-dark fw-bold px-3 py-2 rounded-pill">Lite Plan</span></th>
                        <th class="pb-4 w-25"><span class="badge bg-accent-dynamic text-white fw-bold px-3 py-2 rounded-pill shadow-sm">Plus Plan</span></th>
                        <th class="pb-4 w-25"><span class="badge bg-dark text-white fw-bold px-3 py-2 rounded-pill">Pro Plan</span></th>
                    </tr>
                </thead>
                <tbody class="text-center small fw-bold text-muted">
                    <tr class="border-bottom border-dark border-opacity-10">
                        <td class="text-start py-4 text-dark">Platform Architecture</td>
                        <td class="py-4">WordPress CMS</td>
                        <td class="py-4 text-dark fw-900">Custom PHP/MVC</td>
                        <td class="py-4 text-dark fw-900">Enterprise Node/React</td>
                    </tr>
                    <tr class="border-bottom border-dark border-opacity-10">
                        <td class="text-start py-4 text-dark">Semantic SEO Siloing</td>
                        <td class="py-4"><i class="bi bi-x-circle text-muted opacity-25 fs-5"></i></td>
                        <td class="py-4"><i class="bi bi-check-circle-fill text-accent-dynamic fs-5"></i></td>
                        <td class="py-4"><i class="bi bi-check-circle-fill text-dark fs-5"></i></td>
                    </tr>
                    <tr class="border-bottom border-dark border-opacity-10">
                        <td class="text-start py-4 text-dark">Core Web Vitals Guarantee</td>
                        <td class="py-4"><i class="bi bi-x-circle text-muted opacity-25 fs-5"></i></td>
                        <td class="py-4"><i class="bi bi-check-circle-fill text-accent-dynamic fs-5"></i></td>
                        <td class="py-4"><i class="bi bi-check-circle-fill text-dark fs-5"></i></td>
                    </tr>
                    <tr class="border-bottom border-dark border-opacity-10">
                        <td class="text-start py-4 text-dark">API & CRM Integrations</td>
                        <td class="py-4"><i class="bi bi-x-circle text-muted opacity-25 fs-5"></i></td>
                        <td class="py-4">Basic Webhooks</td>
                        <td class="py-4 text-dark fw-900">Unlimited Endpoints</td>
                    </tr>
                    <tr>
                        <td class="text-start py-4 text-dark">Dedicated Account Manager</td>
                        <td class="py-4"><i class="bi bi-x-circle text-muted opacity-25 fs-5"></i></td>
                        <td class="py-4"><i class="bi bi-x-circle text-muted opacity-25 fs-5"></i></td>
                        <td class="py-4"><i class="bi bi-check-circle-fill text-dark fs-5"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<style>

.price-card {
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    box-shadow: 8px 8px 0px var(--text-dark);
}
.price-card:hover {
    transform: scale(1.03) translateY(-10px);
    box-shadow: 15px 15px 0px var(--page-accent);
}
.price-card.recommended {
    border-color: var(--page-accent) !important;
    transform: scale(1.05);
    box-shadow: 15px 15px 0px var(--text-dark);
    z-index: 2;
}
.recommended-badge {
    position: absolute;
    top: -15px;
    left: 50%;
    transform: translateX(-50%);
    padding: 5px 20px;
    border: 3px solid var(--text-dark);
    border-radius: 50px;
    font-size: 11px;
    letter-spacing: 1px;
}
</style>

<!-- Lead Generation Form Section -->
<section id="leads" class="lead-section section-padding bg-dark text-white position-relative overflow-hidden">
    <div class="lead-bg-blobs">
        <div class="lb-1" style="background: <?= $accentColor ?>;"></div>
    </div>
    <div class="container position-relative z-1">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5" data-aos="fade-right">
                <span class="text-accent-dynamic fw-900 mb-3 d-block letter-spacing-2">TAKE THE FIRST STEP</span>
                <h2 class="display-3 fw-900 text-white mb-4">Book Your Free <br><span class="text-accent-dynamic">Strategy Audit</span></h2>
                <p class="fs-5 opacity-60 mb-5">Interested in scaling? Fill out the form below and our subject matter experts will get back to you within 24 hours.</p>
                
                <div class="trust-indicators-v3 p-4 border border-white border-opacity-10 rounded-5">
                    <div class="d-flex align-items-center gap-4 mb-4">
                        <div class="ti-icon bg-white text-dark rounded-circle d-flex align-items-center justify-content-center" style="width:50px; height:50px;">
                            <i class="bi bi-shield-check fs-4"></i>
                        </div>
                        <div>
                            <div class="fw-800 fs-5">NDA Protected</div>
                            <span class="small opacity-50 text-uppercase letter-spacing-1">Safe Conversations</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-4">
                        <div class="ti-icon bg-white text-dark rounded-circle d-flex align-items-center justify-content-center" style="width:50px; height:50px;">
                            <i class="bi bi-speedometer2 fs-4"></i>
                        </div>
                        <div>
                            <div class="fw-800 fs-5">Fast Response</div>
                            <span class="small opacity-50 text-uppercase letter-spacing-1">Within 24 Hours</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7" data-aos="fade-left">
                <div class="lead-form-wrap p-5 bg-white rounded-5 border-3 border border-dark shadow-punchy-lg">
                    <form id="leadCaptureForm" action="#" method="POST">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="form-floating-custom">
                                    <label class="small fw-900 text-dark opacity-50 text-uppercase mb-2 d-block">Full Name</label>
                                    <input type="text" class="form-control-punchy" placeholder="John Doe" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating-custom">
                                    <label class="small fw-900 text-dark opacity-50 text-uppercase mb-2 d-block">Work Email</label>
                                    <input type="email" class="form-control-punchy" placeholder="john@company.com" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating-custom">
                                    <label class="small fw-900 text-dark opacity-50 text-uppercase mb-2 d-block">Phone Number</label>
                                    <input type="tel" class="form-control-punchy" placeholder="+91 99XXXXXXX" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating-custom">
                                    <label class="small fw-900 text-dark opacity-50 text-uppercase mb-2 d-block">Company Website</label>
                                    <input type="url" class="form-control-punchy" placeholder="https://">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating-custom">
                                    <label class="small fw-900 text-dark opacity-50 text-uppercase mb-2 d-block">Tell us about your project</label>
                                    <textarea class="form-control-punchy" rows="4" placeholder="I'm looking to scale my..."></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-punchy-big w-100 py-4 mt-3">
                                    Send Inquiry <i class="bi bi-send-fill ms-2"></i>
                                </button>
                                <p class="text-center small text-muted mt-4 mb-0">No spam, ever. Your privacy is our absolute priority.</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Digital Excellence Network (Related Services) -->
<section class="digital-network-section section-padding bg-light">
    <div class="container">
        <div class="row mb-5" data-aos="fade-up">
            <div class="col-lg-8">
                <h2 class="display-5 fw-900 text-dark">The <span class="text-accent-dynamic">Digital Excellence</span> Network</h2>
                <p class="fs-5 text-muted">Your website is more than a digital presence—it’s your growth engine. Explore our interconnected services designed to amplify your results.</p>
            </div>
        </div>

        <div class="row g-4">
            <?php 
            $network = [
                ['title' => 'Customized Website Designing', 'desc' => 'Bespoke websites tailored to your unique goals, blending captivating visuals with seamless functionality.'],
                ['title' => 'Business Website with SEO', 'desc' => 'Position your business as an industry leader with striking design and powerful search strategies.'],
                ['title' => 'eCommerce Web Designing', 'desc' => 'Take your store to the next level with user-friendly, mobile-responsive shopping experiences.'],
                ['title' => 'Web Development Engineering', 'desc' => 'Elevate your presence with cutting-edge development that blends creativity and robust functionality.'],
                ['title' => 'Industry-Specific Design', 'desc' => 'Unlock your full potential with designs precision-engineered for your specific market leadership.'],
                ['title' => 'PSD to HTML Conversion', 'desc' => 'Converting pixel-perfect designs into animated, fully functional, and responsive web platforms.'],
                ['title' => 'Landing Page Designing', 'desc' => 'Maximize your impact with layouts strategically crafted to transform visitors into high-value leads.'],
                ['title' => 'Responsive Web Designing', 'desc' => 'Ensure your brand looks exceptional and performs flawlessly across every screen size on the planet.']
            ];
            foreach ($network as $i => $item): 
            ?>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="<?= $i * 50 ?>">
                <div class="network-card p-4 border-2 border border-dark rounded-4 h-100 bg-white transition-all shadow-punchy-sm">
                    <h5 class="fw-900 mb-3"><?= $item['title'] ?></h5>
                    <p class="small text-muted mb-4"><?= $item['desc'] ?></p>
                    <a href="/cr/services/website" class="text-accent-dynamic fw-800 text-decoration-none small">READ MORE <i class="bi bi-arrow-up-right"></i></a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- GAP Closure: Video Social Proof -->
<section class="video-proof-section section-padding bg-dark text-white position-relative">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="video-placeholder-wrap position-relative rounded-5 overflow-hidden border border-white border-opacity-25" style="aspect-ratio: 16/9; background: #000;">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80" alt="Team collaborating" class="w-100 h-100 object-fit-cover opacity-50">
                    <div class="position-absolute top-50 start-50 translate-middle">
                        <button class="btn btn-accent-dynamic rounded-circle d-flex align-items-center justify-content-center pulse-button" style="width: 80px; height: 80px;">
                            <i class="bi bi-play-fill text-white" style="font-size: 40px; margin-left: 5px;"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="display-4 fw-900 mb-4">See The <span class="text-accent-dynamic">Difference</span></h2>
                <p class="fs-5 opacity-75 mb-4">Don't just take our word for it. Watch how our engineered web solutions transformed a local brand into a national powerhouse within 6 months.</p>
                <div class="d-flex align-items-center gap-4 mt-4">
                    <div class="text-center">
                        <div class="h3 fw-900 text-white mb-0">300+</div>
                        <div class="small fw-bold opacity-50 text-uppercase">Projects Delivered</div>
                    </div>
                    <div class="border-start border-white border-opacity-25" style="height: 40px;"></div>
                    <div class="text-center">
                        <div class="h3 fw-900 text-white mb-0">98%</div>
                        <div class="small fw-bold opacity-50 text-uppercase">Client Retention</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Voice of the Customer (Testimonials) -->
<section class="testimonials-section section-padding bg-white">
    <div class="container">
        <div class="row mb-5 text-center" data-aos="fade-up">
            <div class="col-lg-8 mx-auto">
                <h2 class="display-5 fw-900 text-dark mb-4">Hear What Our <span class="text-accent-dynamic">Valued Customers</span> Have to Say</h2>
                <p class="fs-5 text-muted">Our customers are at the heart of everything we do. Their stories speak volumes about our commitment to quality and transparency.</p>
            </div>
        </div>

        <div class="row g-4">
            <?php 
            $reviews = [
                ['name' => 'Priya Gupta', 'role' => 'Business Owner', 'review' => 'Crea8ve Cool provided a perfect solution for our small business website. They understood our requirements and delivered a platform that truly represents our brand.', 'rating' => 5],
                ['name' => 'Rohan Verma', 'role' => 'Tech Startup Founder', 'review' => 'Our small business needed a custom website, and the team exceeded our expectations. Their technical expertise and design sense are unmatched.', 'rating' => 5],
                ['name' => 'Neha Desai', 'role' => 'E-commerce Entrepreneur', 'review' => 'Working with this team was an excellent experience. They provided a website that not only looks great but has significantly boosted our sales traffic.', 'rating' => 5]
            ];
            foreach ($reviews as $rev): 
            ?>
            <div class="col-lg-4" data-aos="fade-up">
                <div class="testimonial-card p-5 border-3 border border-dark rounded-5 bg-light h-100 position-relative shadow-punchy-sm">
                    <div class="google-branding mb-4 d-flex justify-content-between">
                        <i class="bi bi-google text-muted"></i>
                        <div class="stars text-warning">
                            <?php for($i=0; $i<$rev['rating']; $i++): ?><i class="bi bi-star-fill"></i><?php endfor; ?>
                        </div>
                    </div>
                    <p class="fs-6 italic text-dark mb-4">"<?= $rev['review'] ?>"</p>
                    <div class="d-flex align-items-center gap-3 mt-auto">
                        <div class="av bg-accent-dynamic text-white fw-900"><?= substr($rev['name'], 0, 1) ?></div>
                        <div>
                            <div class="fw-900 text-dark"><?= $rev['name'] ?></div>
                            <div class="small text-muted"><?= $rev['role'] ?></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<style>
.network-card:hover { transform: translate(-5px, -5px); border-color: var(--page-accent) !important; box-shadow: 10px 10px 0px var(--page-accent); }
.testimonial-card { transition: all 0.3s; }
.testimonial-card:hover { transform: scale(1.02); border-color: var(--page-accent) !important; }
</style>

<style>
/* Cinematic Bento Hero Styles */
.service-bento-hero {
    min-height: 90vh;
    background: #fff;
    display: flex;
    align-items: center;
    background: radial-gradient(circle at top right, rgba(<?= hexToRgb($accentColor) ?>, 0.05), #fff 60%);
}

.bento-card {
    background: #fff;
    border: 3px solid var(--text-dark);
    box-shadow: 12px 12px 0px var(--text-dark);
    border-radius: 40px;
    transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
    position: relative;
    z-index: 10;
}
.bento-card:hover {
    transform: translateY(-8px) scale(1.01);
    box-shadow: 16px 16px 0px var(--page-accent);
}

.visual-card-v2 { 
    background: var(--text-dark) !important;
    box-shadow: 12px 12px 0px var(--page-accent);
}

/* Stunning Pricing V3 */
.pricing-card-v3 {
    background: #fff;
    border: 3px solid var(--text-dark);
    box-shadow: 15px 15px 0px var(--text-dark);
    border-radius: 50px;
    position: relative;
    transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
}
.pricing-card-v3:hover {
    transform: translateY(-15px);
    box-shadow: 25px 25px 0px var(--accent);
}

.popular-ribbon {
    position: absolute;
    top: 30px; right: -15px;
    background: var(--accent);
    color: #fff;
    padding: 10px 30px;
    font-weight: 900;
    font-size: 12px;
    letter-spacing: 1px;
    transform: rotate(5deg);
    box-shadow: 5px 5px 0px var(--text-dark);
}

.pkg-check {
    background: rgba(<?= hexToRgb($accentColor) ?>, 0.1);
    display: flex;
    align-items: center;
    justify-content: center;
    width: 24px; height: 24px;
}

/* Premium Form Styles */
.lead-form-wrap {
    box-shadow: 20px 20px 0px var(--page-accent);
}
.form-control-punchy {
    width: 100%;
    padding: 20px;
    background: #f8faff;
    border: 3px solid transparent;
    border-radius: 20px;
    font-weight: 700;
    color: var(--text-dark);
    transition: all 0.3s;
}
.form-control-punchy:focus {
    outline: none;
    border-color: var(--page-accent);
    background: #fff;
    box-shadow: 10px 10px 0px rgba(0,0,0,0.05);
}

.btn-punchy-big {
    background: var(--page-accent);
    color: #fff;
    border: 3px solid var(--text-dark);
    box-shadow: 8px 8px 0px var(--text-dark);
    font-weight: 900;
    font-size: 18px;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: all 0.3s;
}
.btn-punchy-big:hover {
    transform: translate(-3px, -3px);
    box-shadow: 12px 12px 0px var(--text-dark);
}

/* Animations & Utilities */
.status-pulse {
    width: 10px; height: 10px;
    background: #00ff88;
    border-radius: 50%;
    box-shadow: 0 0 10px #00ff88;
    animation: p-blink 1.5s infinite;
}
@keyframes p-blink { 50% { opacity: 0.3; } }

.lead-bg-blobs {
    position: absolute;
    inset: 0;
    pointer-events: none;
}
.lb-1 {
    position: absolute;
    bottom: -20%; right: -10%;
    width: 800px; height: 800px;
    border-radius: 50%;
    filter: blur(150px);
    opacity: 0.1;
}

/* Helper function defined here */
<?php 
if (!function_exists('hexToRgb')) {
    function hexToRgb($hex) {
        $hex = str_replace("#", "", $hex);
        if(strlen($hex) == 3) {
            $r = hexdec(substr($hex,0,1).substr($hex,0,1));
            $g = hexdec(substr($hex,1,1).substr($hex,1,1));
            $b = hexdec(substr($hex,2,1).substr($hex,2,1));
        } else {
            $r = hexdec(substr($hex,0,2));
            $g = hexdec(substr($hex,2,2));
            $b = hexdec(substr($hex,4,2));
        }
        return "$r, $g, $b";
    }
}
?>
</style>



<style>
/* Perfected Bento Hero Styles */
:root {
    --accent-raw: <?= $accentColor ?>;
    --page-accent: <?= $accentColor ?>;
    --page-accent-rgb: <?= hexToRgb($accentColor) ?>;
}

.service-bento-hero {
    min-height: 90vh;
    background: #fff;
    display: flex;
    align-items: center;
    background: radial-gradient(circle at top right, rgba(<?= hexToRgb($accentColor) ?>, 0.05), #fff 60%);
}

/* Helper function defined here for simplicity in this template */
<?php 
function hexToRgb($hex) {
    $hex = str_replace("#", "", $hex);
    if(strlen($hex) == 3) {
        $r = hexdec(substr($hex,0,1).substr($hex,0,1));
        $g = hexdec(substr($hex,1,1).substr($hex,1,1));
        $b = hexdec(substr($hex,2,1).substr($hex,2,1));
    } else {
        $r = hexdec(substr($hex,0,2));
        $g = hexdec(substr($hex,2,2));
        $b = hexdec(substr($hex,4,2));
    }
    return "$r, $g, $b";
}
?>

.hero-bg-elements {
    position: absolute;
    inset: 0;
    pointer-events: none;
    z-index: 0;
}
.blob-1, .blob-2 {
    position: absolute;
    width: 800px;
    height: 800px;
    border-radius: 50%;
    filter: blur(140px);
    opacity: 0.15;
    background: var(--page-accent);
    animation: blobAnim 25s infinite alternate;
}
.blob-1 { top: -20%; right: -10%; }
.blob-2 { bottom: -20%; left: -10%; animation-delay: -7s; }

.hero-grid-overlay {
    position: absolute;
    inset: 0;
    background-image: radial-gradient(rgba(0,0,0,0.05) 1px, transparent 1px);
    background-size: 40px 40px;
    opacity: 0.4;
}

.bento-card {
    background: #fff;
    border: 3px solid var(--text-dark);
    box-shadow: 12px 12px 0px var(--text-dark);
    border-radius: 40px;
    transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
    position: relative;
    z-index: 10;
}
.bento-card:hover {
    transform: translateY(-8px) scale(1.01);
    box-shadow: 16px 16px 0px var(--page-accent);
}

.main-info-card { 
    border-right-width: 8px;
    border-bottom-width: 8px;
}

.visual-card-v2 { 
    background: var(--text-dark) !important;
    box-shadow: 12px 12px 0px var(--page-accent);
}

.trust-card-punchy {
    background: #fff;
    border-color: var(--text-dark);
}

.marquee-card-v2 {
    background: var(--page-accent);
    border-color: var(--text-dark);
    box-shadow: 12px 12px 0px var(--text-dark);
    transition: all 0.4s ease;
    cursor: pointer;
}
.marquee-card-v2:hover {
    background: var(--text-dark) !important;
    border-color: var(--page-accent);
    box-shadow: 12px 12px 0px var(--page-accent);
}
.marquee-card-v2:hover .marquee-item {
    color: var(--page-accent);
}

/* Punchy Typography */
.gradient-text-dynamic {
    background: linear-gradient(90deg, var(--text-dark), var(--page-accent));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-family: 'Clash Display';
}

.text-accent-dynamic { color: var(--page-accent); }

.hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 10px 20px;
    background: var(--text-dark);
    color: #fff;
    border-radius: 100px;
    font-weight: 900;
    font-size: 11px;
    letter-spacing: 2px;
    text-transform: uppercase;
}
.badge-dot {
    width: 8px; height: 8px;
    background: var(--page-accent);
    border-radius: 50%;
    animation: pulse 1.5s infinite;
}

/* Energy Core Visual */
.energy-core {
    position: relative;
    width: 120px; height: 120px;
    margin: 0 auto;
}
.core-inner {
    position: absolute;
    inset: 30px;
    background: var(--page-accent);
    border-radius: 50%;
    box-shadow: 0 0 40px var(--page-accent);
    z-index: 2;
}
.core-ring, .core-ring-2 {
    position: absolute;
    inset: 0;
    border: 2px solid var(--page-accent);
    border-radius: 50%;
    opacity: 0.3;
    animation: rotateCore 4s linear infinite;
}
.core-ring-2 {
    inset: -15px;
    opacity: 0.1;
    animation-direction: reverse;
    animation-duration: 6s;
}

@keyframes rotateCore { from { transform: rotate(0); } to { transform: rotate(360deg); } }

/* Buttons */
.btn-punchy {
    background: var(--page-accent);
    color: #fff;
    border: 3px solid var(--text-dark);
    box-shadow: 6px 6px 0px var(--text-dark);
    font-weight: 900;
    padding: 18px 35px;
    border-radius: 15px;
    transition: all 0.3s;
}
.btn-punchy:hover {
    transform: translate(-2px, -2px);
    box-shadow: 10px 10px 0px var(--text-dark);
    background: var(--page-accent);
    color: #fff;
}

.btn-outline-dark-punchy {
    background: transparent;
    color: var(--text-dark);
    border: 3px solid var(--text-dark);
    font-weight: 900;
    padding: 18px 35px;
    border-radius: 15px;
    transition: all 0.3s;
}
.btn-outline-dark-punchy:hover {
    background: var(--text-dark);
    color: #fff;
}

/* Marquee V2 */
.marquee-content-v2 {
    animation: marqueeMove 20s linear infinite;
}
.marquee-item {
    font-family: 'Clash Display';
    font-weight: 900;
    font-size: 24px;
    color: #fff;
    white-space: nowrap;
    transition: color 0.4s ease;
}
@keyframes marqueeMove {
    from { transform: translateX(0); }
    to { transform: translateX(-50%); }
}

/* Avatar Stack */
.av {
    width: 45px; height: 45px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 900;
}
.bg-accent { background: var(--page-accent); }
.badge-accent-v2 {
    background: var(--page-accent);
    color: #fff;
    padding: 6px 15px;
    border-radius: 10px;
    font-weight: 900;
    font-size: 12px;
}

/* Pulse animation */
@keyframes pulse {
    0% { transform: scale(0.8); opacity: 1; }
    100% { transform: scale(1.5); opacity: 0; }
}

/* Feature Cards Accent */
.sf-icon-wrap { background: rgba(<?= hexToRgb($accentColor) ?>, 0.1) !important; }
.service-feat-card-v2:hover .sf-icon-wrap { background: var(--page-accent) !important; }

/* Process Glow */
.process-bg-glow {
    position: absolute;
    top: 50%; right: -10%;
    width: 600px; height: 600px;
    background: radial-gradient(circle, var(--accent) 0%, transparent 70%);
    opacity: 0.15;
}

/* --- Enhanced Visual Box Animations --- */

/* SEO Dashboard */
.anim-seo-dashboard { position: relative; width: 100%; display: flex; flex-direction: column; align-items: center; justify-content: center; }
.mini-chart-wrapper { width: 100%; max-width: 220px; height: 100px; position: relative; }
.trend-line polyline { stroke-dasharray: 400; stroke-dashoffset: 400; animation: drawLine 3s ease-out infinite alternate; filter: drop-shadow(0 10px 10px rgba(0,0,0,0.5)); }
@keyframes drawLine { 0% { stroke-dashoffset: 400; } 100% { stroke-dashoffset: 0; } }
.trend-line circle { animation: pulseCircle 3s ease-out infinite alternate; filter: drop-shadow(0 0 10px var(--page-accent)); }
@keyframes pulseCircle { 0%, 90% { opacity: 0; transform: scale(0); } 100% { opacity: 1; transform: scale(1.5); } }
.keyword-pill { background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); border-radius: 50px; padding: 10px 20px; font-size: 12px; font-weight: 800; color: rgba(255,255,255,0.6); display: inline-flex; align-items: center; justify-content: center; animation: floatPill 4s infinite ease-in-out; white-space: nowrap; }
@keyframes floatPill { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-5px); box-shadow: 0 10px 15px rgba(0,0,0,0.3); } }

/* Window Mockup */
.anim-window-mockup { width: 100%; max-width: 220px; height: 160px; margin: 0 auto; background: #161616; border: 2px solid rgba(255,255,255,0.08); border-radius: 12px; overflow: hidden; display: flex; flex-direction: column; box-shadow: -15px 25px 30px rgba(0,0,0,0.6); transform: perspective(1000px) rotateY(-15deg) rotateX(5deg); animation: floatWindow 5s infinite ease-in-out; }
.mockup-header { height: 28px; background: rgba(0,0,0,0.4); display: flex; align-items: center; padding: 0 12px; gap: 6px; border-bottom: 1px solid rgba(255,255,255,0.05); }
.mockup-header .dot { width: 10px; height: 10px; border-radius: 50%; opacity: 0.8; }
.mockup-header .dot.red { background: #ff5f56; }
.mockup-header .dot.yellow { background: #ffbd2e; }
.mockup-header .dot.green { background: #27c93f; }
.mockup-body { padding: 15px; flex-grow: 1; display: flex; flex-direction: column; gap: 10px; }
.skeleton-title { height: 14px; width: 60%; background: rgba(255,255,255,0.15); border-radius: 6px; animation: loadSkel 2s infinite alternate; }
.skeleton-text { height: 8px; width: 100%; background: rgba(255,255,255,0.08); border-radius: 4px; }
.skeleton-text.short { width: 75%; }
.skeleton-img { flex-grow: 1; background: rgba(255,255,255,0.03); border-radius: 8px; position: relative; overflow: hidden; border: 1px dashed rgba(255,255,255,0.1); }
.img-glow { position: absolute; top:0; left: -100%; width: 50%; height: 100%; background: linear-gradient(90deg, transparent, rgba(255,255,255,0.1), transparent); animation: sweep 3s infinite; }
@keyframes loadSkel { 0% { opacity: 0.5; } 100% { opacity: 1; box-shadow: 0 0 10px rgba(255,255,255,0.1); } }
@keyframes floatWindow { 0%, 100% { transform: perspective(1000px) rotateY(-15deg) rotateX(5deg) translateY(0); } 50% { transform: perspective(1000px) rotateY(-15deg) rotateX(5deg) translateY(-15px); } }
@keyframes sweep { 100% { left: 200%; } }

/* ROAS Ring */
.anim-roas-ring { position: relative; width: 160px; height: 160px; margin: 0 auto; display: flex; align-items: center; justify-content: center; }
.roas-svg { position: absolute; inset: 0; width: 100%; height: 100%; transform: rotate(-90deg); filter: drop-shadow(0 0 15px rgba(0,0,0,0.5)); }
.ring-fill { stroke-dasharray: 440; stroke-dashoffset: 440; animation: fillRing 2.5s cubic-bezier(0.16, 1, 0.3, 1) forwards infinite alternate; }
@keyframes fillRing { 0% { stroke-dashoffset: 440; } 100% { stroke-dashoffset: 100; } } /* 75% fill */
.roas-content { position: relative; z-index: 2; display: flex; flex-direction: column; align-items: center; animation: heartbeat 2s infinite; }
.roas-ping { position: absolute; width: 12px; height: 12px; background: var(--page-accent); border-radius: 50%; box-shadow: 0 0 15px var(--page-accent); }
.ping-1 { top: 15px; left: 120px; animation: pulsePing 2s infinite alternate; }
.ping-2 { bottom: 25px; left: 20px; animation: pulsePing 2s infinite alternate 1s; }
@keyframes heartbeat { 0%, 100% { transform: scale(1); } 10% { transform: scale(1.05); } 20% { transform: scale(1); } }
@keyframes pulsePing { 0% { transform: scale(1); opacity: 0.3; } 100% { transform: scale(1.8); opacity: 1; } }

/* ERP Blocks Dashboard */
.anim-erp-blocks { position: relative; width: 100%; max-width: 200px; height: 200px; margin: 0 auto; }
.erp-hub { position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: #111; border: 2px solid var(--page-accent); border-radius: 12px; font-weight: 900; font-size: 14px; z-index: 3; color: white; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; width: 80px; height: 80px; animation: hubPulse 2s infinite alternate; letter-spacing: 1px; }
.erp-module { position: absolute; padding: 6px 14px; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); border-radius: 8px; font-size: 11px; font-weight: 800; color: rgba(255,255,255,0.8); display: flex; align-items: center; gap: 8px; z-index: 2; backdrop-filter: blur(5px); }
.m-top { top: 0; left: 50%; transform: translateX(-50%); }
.m-right { top: 50%; right: -15px; transform: translateY(-50%); }
.m-bottom { bottom: 0; left: 50%; transform: translateX(-50%); }
.m-left { top: 50%; left: -15px; transform: translateY(-50%); }
.erp-connections { position: absolute; top:0; left: 50%; transform: translateX(-50%); width: 200px; height: 200px; z-index: 1; overflow: visible; }
.c-line { opacity: 0.2; stroke-dasharray: 4; stroke-linecap: round; }
.data-packet { position: absolute; width: 8px; height: 8px; background: var(--page-accent); border-radius: 50%; box-shadow: 0 0 12px var(--page-accent); z-index: 4; }
.p-top { top: 35px; left: 50%; transform: translateX(-50%); animation: packTB 2s infinite linear; }
.p-bottom { bottom: 35px; left: 50%; transform: translateX(-50%); animation: packBT 2s infinite linear 1s; }
.p-right { top: 50%; right: 35px; transform: translateY(-50%); animation: packRL 2s infinite linear 0.5s; }
.p-left { top: 50%; left: 35px; transform: translateY(-50%); animation: packLR 2s infinite linear 1.5s; }
@keyframes hubPulse { 0% { box-shadow: 0 0 15px rgba(0,0,0,0.5); } 100% { box-shadow: 0 0 25px var(--page-accent), inset 0 0 15px rgba(255,255,255,0.1); } }
@keyframes packTB { 0% { top: 35px; opacity: 1; transform: translateX(-50%) scale(1); } 50% { transform: translateX(-50%) scale(1.5); } 80% { top: 80px; opacity: 1; } 100% { top: 80px; opacity: 0; } }
@keyframes packBT { 0% { bottom: 35px; opacity: 1; transform: translateX(-50%) scale(1); } 50% { transform: translateX(-50%) scale(1.5); } 80% { bottom: 80px; opacity: 1; } 100% { bottom: 80px; opacity: 0; } }
@keyframes packRL { 0% { right: 35px; opacity: 1; transform: translateY(-50%) scale(1); } 50% { transform: translateY(-50%) scale(1.5); } 80% { right: 80px; opacity: 1; } 100% { right: 80px; opacity: 0; } }
@keyframes packLR { 0% { left: 35px; opacity: 1; transform: translateY(-50%) scale(1); } 50% { transform: translateY(-50%) scale(1.5); } 80% { left: 80px; opacity: 1; } 100% { left: 80px; opacity: 0; } }

/* SaaS Server UI */
.anim-saas-server { width: 100%; max-width: 240px; margin: 0 auto; display: flex; flex-direction: column; align-items: center; }
.server-rack { width: 100%; padding: 18px 15px; background: rgba(0,0,0,0.4); border: 2px solid rgba(255,255,255,0.05); border-radius: 16px; display: flex; flex-direction: column; gap: 12px; box-shadow: inset 0 10px 30px rgba(0,0,0,0.8); }
.server-blade { height: 32px; border: 1px solid rgba(255,255,255,0.05); border-radius: 6px; background: #151515; display: flex; align-items: center; justify-content: flex-start; padding: 0 14px; position: relative; overflow: hidden; }
.server-blade.active { border-color: var(--page-accent); box-shadow: inset 0 0 15px rgba(var(--page-accent-rgb), 0.1); }
.blade-lights { display: flex; gap: 6px; z-index: 2; position: relative; }
.blade-lights span { width: 8px; height: 8px; border-radius: 50%; }
.l-grn { background: #27c93f; animation: blinkGrn 1s infinite alternate; }
.l-blu { background: var(--page-accent); opacity: 0.5; }
.l-blu.pulse { animation: blinkBlu 0.4s infinite; box-shadow: 0 0 10px var(--page-accent); }
.blade-load { position: absolute; right: 0; top: 0; bottom: 0; background: rgba(255,255,255,0.03); z-index: 1; transform-origin: right; animation: loadWobble 2.5s infinite alternate ease-in-out; border-left: 2px solid rgba(255,255,255,0.1); }
@keyframes blinkGrn { 0% { opacity: 0.3; } 100% { opacity: 1; box-shadow: 0 0 8px #27c93f; } }
@keyframes blinkBlu { 0%, 100% { opacity: 1; } 50% { opacity: 0.2; } }
@keyframes loadWobble { 0% { transform: scaleX(0.95); } 100% { transform: scaleX(1.05); } }

/* Energy Core Upgraded */
.energy-core-upgraded { position: relative; width: 160px; height: 160px; margin: 0 auto; display: flex; align-items: center; justify-content: center; perspective: 800px; }
.core-orbit { position: absolute; width: 100%; height: 100%; border: 3px solid rgba(255,255,255,0.05); border-radius: 50%; filter: drop-shadow(0 0 5px var(--page-accent)); }
.o-1 { border-top-color: var(--page-accent); transform: rotateX(70deg); animation: orbSpin1 5s linear infinite; }
.o-2 { border-right-color: var(--page-accent); transform: rotateY(70deg); animation: orbSpin2 6s linear infinite; }
.core-center { width: 50px; height: 50px; background: var(--page-accent); border-radius: 50%; box-shadow: 0 0 40px var(--page-accent), 0 0 80px var(--page-accent); animation: corePulse 2s infinite alternate cubic-bezier(0.4, 0, 0.2, 1); position: relative; z-index: 3; }
.core-ring.pulse-ring { position: absolute; width: 140px; height: 140px; border: 2px solid var(--page-accent); border-radius: 50%; opacity: 0; animation: expandRing 3s infinite ease-out; }
@keyframes orbSpin1 { 0% { transform: rotateX(70deg) rotateZ(0deg); } 100% { transform: rotateX(70deg) rotateZ(360deg); } }
@keyframes orbSpin2 { 0% { transform: rotateY(70deg) rotateZ(0deg); } 100% { transform: rotateY(70deg) rotateZ(360deg); } }
@keyframes corePulse { 0% { transform: scale(0.85); box-shadow: 0 0 20px var(--page-accent); } 100% { transform: scale(1.15); box-shadow: 0 0 50px var(--page-accent), 0 0 100px var(--page-accent); } }
@keyframes expandRing { 0% { transform: scale(0.3); opacity: 0.8; stroke-width: 4px; } 100% { transform: scale(1.2); opacity: 0; stroke-width: 1px; } }

/* --- Compact Pricing Block CSS --- */
.pricing-compact-wrapper {
    transition: transform 0.4s ease;
}
.pricing-col {
    transition: background 0.3s ease;
}
.pricing-col:hover {
    background: rgba(0,0,0,0.015);
}
.recommended-bar {
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 6px;
    background: var(--page-accent);
}
.btn-punchy-compact {
    background: var(--page-accent);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    border: none;
    letter-spacing: 0.5px;
}
.btn-punchy-compact:hover {
    transform: translateY(-4px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.15);
    background: var(--page-accent);
    color: #fff !important;
}
.btn-outline-compact {
    background: transparent;
    border: 2px solid rgba(0,0,0,0.1);
    color: var(--text-dark);
    letter-spacing: 0.5px;
}
.btn-outline-compact:hover {
    background: var(--text-dark);
    border-color: var(--text-dark);
    color: #fff !important;
    transform: translateY(-4px);
    box-shadow: 0 12px 25px rgba(0,0,0,0.15);
}
</style>


