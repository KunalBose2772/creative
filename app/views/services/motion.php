<?php 
// Hardcoded Service Data for 3D Motion Graphics & Cinematic Video Editing
$serviceSlug = 'motion';
$accentColor = '#FF5E36'; // Cinematic Ember
$service = [
    'title' => '3D Animation Services India',
    'meta_title' => '3D Animation Services & Motion Graphics Studio India | Crea8ve Cool',
    'meta_description' => 'Premium 3D animation studio in India. We create cinematic 3D product renders, motion graphics, and high-quality video editing for brands.',
    'desc' => 'We are a leading 3D animation studio in India. We create stunning 3D product animations and cinematic videos that help your brand stand out and capture attention.',
    'color' => '#FF5E36',
    'features' => [
        'Cinematic 3D Video Production',
        'High-Retention Social Reels',
        'Hyper-Realistic Product Rendering',
        'Kinetic Typography & Explainers',
        'VFX & Seamless Fluid Dynamics',
        'Expert Sound Engineering & Design'
    ],
    'packages' => [
        [
            'name' => 'Lite',
            'tagline' => 'Reels & Shorts',
            'desc' => 'High-engagement short-form videos engineered to capture attention instantly.',
            'price' => '4,999',
            'original_price' => '9,999',
            'savings' => '50',
            'features' => ['Up to 60 Seconds', 'Dynamic Sound Effects', 'Kinetic Typography', 'Color Grading', 'Viral Hooks & Strategy', 'Standard HD Output', '1 Round of Revision', '4-Day Delivery'],
            'color' => '#111111',
            'recommended' => false
        ],
        [
            'name' => 'Plus',
            'tagline' => 'Brand Explainer',
            'desc' => 'Complete corporate overview, brand explainer, or promo with expert sound design.',
            'price' => '14,990',
            'original_price' => '24,990',
            'savings' => '40',
            'features' => ['Up to 3 Minutes', 'Custom Storyboarding', 'Professional Voiceover Sync', 'Premium Stock Assets', 'Custom Sound Design', 'Full 1080p Export', '2 Rounds of Revision', '7-Day Delivery'],
            'color' => '#FF5E36',
            'recommended' => true
        ],
        [
            'name' => 'Premium',
            'tagline' => '3D Cinematic Master',
            'desc' => 'Photorealistic 3D product animation or complex visual effects sequence.',
            'price' => '39,990',
            'original_price' => '64,990',
            'savings' => '38',
            'features' => ['Full 3D Modeling & CAD Integration', 'Hyper-Realistic Lighting & Textures', 'Seamless Fluid & Physics Simulations', '4K Cinema Export', 'Full Commercial Copyrights', 'Dedicated Sound Engineering', 'Unlimited Revisions', '14-Day Delivery'],
            'color' => '#FF007A',
            'recommended' => false
        ]
    ]
];

// Support for dynamic location (SEO landing pages) passed from the controllers
if (isset($data['location'])) {
    $loc = $data['location'];
    $service['title'] = "Elite 3D Motion Graphics & Video Editing in " . $loc['name'];
    $service['desc'] = "Engineering premium 3D animations, cinematic corporate videos, and conversion-optimized visual storytelling for high-ticket businesses across " . $loc['name'] . ".";
    $service['meta_title'] = "3D Video & Motion Graphics in " . $loc['name'] . " | Crea8ve Cool";
    $service['meta_description'] = "Looking for premium 3D video editing, corporate animation, or product rendering in " . $loc['name'] . "? Contact us today for a free design audit.";
} elseif (isset($data['city'])) {
    $service['title'] .= " in " . $data['city'];
}

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

// LocalBusiness Schema
$localBusinessSchema = [
    "@context" => "https://schema.org",
    "@type" => "ProfessionalService",
    "name" => "Crea8ve Cool",
    "image" => BASE_URL . "public/assets/images/logo.png",
    "@id" => BASE_URL,
    "url" => BASE_URL,
    "telephone" => "+91-9972988194",
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

// Dynamic override of schema metrics for geo-indexing
if (isset($data['location'])) {
    $loc = $data['location'];
    $schemaData['areaServed'] = [
        "@type" => "City",
        "name" => $loc['name']
    ];
    $localBusinessSchema['address']['addressLocality'] = $loc['name'];
    $localBusinessSchema['address']['addressCountry'] = ($loc['type'] === 'domestic') ? 'IN' : 'US';
    $localBusinessSchema['geo'] = [
        "@type" => "GeoCoordinates",
        "latitude" => $loc['geo']['lat'],
        "longitude" => $loc['geo']['lon']
    ];
} elseif (isset($data['city'])) {
    $schemaData['areaServed'] = [
        "@type" => "City",
        "name" => $data['city']
    ];
}

// FAQ Schema
$faqSchema = [
    "@context" => "https://schema.org",
    "@type" => "FAQPage",
    "mainEntity" => [
        [
            "@type" => "Question",
            "name" => "What assets do you need for a 3D product render?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "We can work from high-resolution images, hand sketches, or existing CAD/OBJ files to build photorealistic models."
            ]
        ],
        [
            "@type" => "Question",
            "name" => "Do you provide custom voiceovers for brand videos?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "Yes, our Cinematic Brand package includes professional voiceover options in male or female vocals in multiple accents."
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
    'motion' => [
        'status' => 'RENDER ENGINE: STEADY ACTIVE',
        'metric_label' => 'Audience Retention',
        'metric_value' => '+340%',
        'icon' => 'bi-camera-reels',
        'animation' => 'motion-dashboard'
    ]
];

$vConfig = $visualConfig[$serviceSlug] ?? [
    'status' => 'SYSTEM_STATUS: ONLINE',
    'metric_label' => 'Operational Capacity',
    'metric_value' => 'MAX_SCALE',
    'icon' => 'bi-lightning-charge-fill',
    'animation' => 'energy-core'
];

// hexToRgb helper needed for CSS variable injection
if (!function_exists('hexToRgb')) {
    function hexToRgb($hex) {
        $hex = ltrim($hex, '#');
        if (strlen($hex) === 3) {
            $hex = $hex[0].$hex[0].$hex[1].$hex[1].$hex[2].$hex[2];
        }
        return hexdec(substr($hex,0,2)) . ', ' . hexdec(substr($hex,2,2)) . ', ' . hexdec(substr($hex,4,2));
    }
}
$accentRgb       = (strpos($accentColor, '#') === 0) ? hexToRgb($accentColor) : '255, 94, 54';
$locationContext = isset($data['location']) ? $data['location']['name'] : 'India';
?>

<!-- Dynamic CSS Variables (per-service accent color) — intentionally inline -->
<style>
:root {
    --page-accent: <?= $accentColor ?>;
    --page-accent-rgb: <?= $accentRgb ?>;
}
</style>

<!-- Stunning Bento Service Hero -->
<section class="service-bento-hero pt-5 pb-5 position-relative overflow-hidden" >
    <div class="hero-bg-elements">
        <div class="blob-1" style="background: rgba(255, 94, 54, 0.25);"></div>
        <div class="blob-2" style="background: rgba(255, 0, 122, 0.15);"></div>
        <div class="hero-grid-overlay"></div>
    </div>
    
    <div class="container mt-5 pt-3 max-w-1300">
        <div class="row g-4 bento-grid mb-5">
            
            <!-- Main Content Box -->
            <div class="col-lg-8" data-aos="zoom-in" data-aos-delay="100">
                <div class="bento-card main-info-card h-100 p-4 p-lg-5 d-flex flex-column justify-content-center">
                    <div class="hero-badge mb-3 align-self-start" style="background: rgba(255, 94, 54, 0.15); color: #B3300C;">
                        <span class="badge-dot" style="background: #B3300C;"></span> Motion Insight
                    </div>
                    <h1 class="display-5 fw-900 text-dark mb-3">
                        <span class="gradient-text-dynamic" style="background: linear-gradient(135deg, #FF5E36 0%, #FF007A 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"><?= htmlspecialchars($service['title']) ?></span> <br>
                        Build for Results.
                    </h1>
                    <p class="hero-subtext fs-6 text-dark opacity-75 mb-4 max-w-600">
                        <?= htmlspecialchars($service['desc']) ?>
                    </p>
                    <div class="hero-cta-group d-flex flex-wrap gap-2">
                        <a href="#leads-form" class="btn btn-punchy" title="Navigate to Project Inquiry Form">Start Project <i class="bi bi-chevron-right ms-2"></i></a>
                        <a href="#packages" class="btn btn-outline-dark-punchy" title="View Our Service Packages">View Packages</a>
                    </div>
                </div>
            </div>

            <!-- Hero Lead Form Box -->
            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200" id="leads-form">
                
                <div class="bento-card h-100 p-4 bg-dark text-white d-flex flex-column justify-content-center position-relative overflow-hidden hero-form-box">
                    <!-- Ambient Glow -->
                    <div class="position-absolute top-0 end-0 rounded-circle hero-form-glow" style="background: radial-gradient(circle, rgba(255, 94, 54, 0.4) 0%, transparent 70%);"></div>
                    
                    <!-- Social Icons Corner -->
                    <div class="position-absolute top-0 end-0 p-3 z-2 form-social-icons d-flex gap-3">
                        <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" title="Connect with us on LinkedIn"><i class="bi bi-linkedin fs-6"></i></a>
                        <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" title="Follow our updates on Instagram"><i class="bi bi-instagram fs-6"></i></a>
                        <a href="https://wa.me/919972988194" target="_blank" rel="noopener noreferrer" title="Chat with us on WhatsApp"><i class="bi bi-whatsapp fs-6"></i></a>
                    </div>

                    <div class="form-header mb-3 position-relative z-1 mt-3">
                        <div class="badge bg-white text-dark rounded-pill px-2 py-1 mb-2 fw-bold d-inline-flex align-items-center gap-2 border border-2 border-dark status-badge-custom">
                            <div class="status-dot status-dot-custom" style="background: #FF5E36;"></div>
                            Accepting Renders
                        </div>
                        <div class="h3 fw-900 mb-1 fs-4 lh-sm text-white">Start Your Project</div>
                        <p class="opacity-75 mb-0 small text-white">Tell us about your requirements and let's build something amazing.</p>
                    </div>
                    <?php if (isset($_GET['success'])): ?>
                        <div class="alert alert-success border-2 border-white rounded-3 mb-2 p-3 position-relative z-1" style="background: #28C840; color: white;">
                            <h5 class="fw-900 mb-1" style="font-size: 14px;">TRANSMISSION_SUCCESS</h5>
                            <p class="fw-bold mb-0" style="font-size: 12px;">Your details have been securely sent. We will contact you shortly!</p>
                        </div>
                    <?php endif; ?>
                    <form action="<?= BASE_URL ?>leads/submit" method="POST" class="hero-form d-flex flex-column gap-2 position-relative z-1">
                        <input type="hidden" name="source" value="<?= htmlspecialchars($service['title'] ?? 'Motion') ?> Inquiry">
                        <div>
                            <input type="text" name="name" class="form-control hero-form-input shadow-none" placeholder="Your Name" required>
                        </div>
                        <div>
                            <input type="email" name="email" class="form-control hero-form-input shadow-none" placeholder="Work Email" required>
                        </div>
                        <div>
                            <input type="tel" name="phone" class="form-control hero-form-input shadow-none" placeholder="Phone Number" required>
                        </div>
                        <button type="submit" class="btn btn-punchy w-100 mt-1 d-flex align-items-center justify-content-center gap-2 btn-punchy-custom">
                            Send Inquiry <i class="bi bi-arrow-right fs-6"></i>
                        </button>
                        <div class="text-center mt-1">
                            <span class="opacity-50 fw-bold text-white text-11px"><i class="bi bi-shield-lock-fill me-1 text-accent-dynamic"></i> 100% Secure & Confidential</span>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Trust / Social Proof Box -->
            <div class="col-lg-5" data-aos="zoom-in" data-aos-delay="300">
                <div class="bento-card trust-card-punchy p-4 d-flex align-items-center justify-content-between h-100">
                    <div class="d-flex align-items-center gap-3">
                        <div class="avatar-stack d-flex">
                            <div class="av bg-google-blue text-white" title="Priya G.">P</div>
                            <div class="av bg-google-red text-white" title="Rohan V.">R</div>
                            <div class="av bg-google-green text-white" title="Neha D.">N</div>
                        </div>
                        <div>
                            <div class="fw-900 text-dark mb-0">99% Retention</div>
                            <span class="small opacity-50">Audience Success Rate</span>
                        </div>
                    </div>
                    <div class="badge-accent-v2">Top Tier</div>
                </div>
            </div>

            <!-- Technology / Tool Box -->
            <div class="col-lg-7" data-aos="zoom-in" data-aos-delay="400">
                <div class="bento-card marquee-card-v2 p-4 overflow-hidden d-flex align-items-center h-100">
                    <div class="marquee-content-v2 d-flex gap-5">
                        <span class="marquee-item">PREMIUM 3D ANIMATION • HOLLYWOOD VFX • SCALABLE PACING • </span>
                        <span class="marquee-item">PREMIUM 3D ANIMATION • HOLLYWOOD VFX • SCALABLE PACING • </span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Pitching Section: High-Authority Offerings -->
<section id="pitching-intro" class="pitching-section section-padding-lg bg-white position-relative border-bottom border-dark border-opacity-5">
    <div class="container">
        <div class="row mb-5" data-aos="fade-up">
            <div class="col-lg-10">
                <h2 class="display-4 fw-900 text-dark mb-4">Transform Your Business with Leading <span class="text-accent-dynamic"><?= htmlspecialchars($service['title']) ?></span></h2>
                <p class="fs-5 text-muted max-w-800">Looking to take your visual branding to the next level? Our expert team creates breathtaking 3D renders, cinematic video sequences, and hyper-engaging reels that build massive brand authority.</p>
            </div>
        </div>

        <div class="row g-4">
            <!-- Feature 1 -->
            <div class="col-lg-6" data-aos="fade-up">
                <div class="pitch-card p-5 border-3 border border-dark rounded-5 h-100 transition-all bg-light">
                    <div class="icon-box-punchy mb-4">
                        <i class="bi bi-camera-reels fs-1"></i>
                    </div>
                    <h3 class="fw-900 mb-3">Cinematic Renders for Maximum Engagement</h3>
                    <p class="text-muted mb-4 fs-5">A flat image is no longer enough to win the modern attention war. We design immersive, photorealistic <strong>3D product renderings</strong> and seamless physics animations that prioritize the viewer's emotion. By refining every frame and fluid simulation, we ensure your audience is completely hooked. This is the core of our <a href='<?= BASE_URL ?>services/website' class='text-accent-dynamic fw-bold' title="Explore our High-Performance Web Designing and Development services">Visual Strategy</a>, ensuring your brand stands out on every platform.</p>
                    <a href="#strategy" class="btn btn-dark-punchy rounded-pill px-4" title="Deep dive into our Strategy framework">See Our Strategy <i class="bi bi-arrow-down ms-2"></i></a>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="pitch-card p-5 border-3 border border-dark rounded-5 h-100 transition-all bg-white shadow-punchy-sm">
                    <div class="icon-box-punchy mb-4">
                        <i class="bi bi-phone-vibrate fs-1"></i>
                    </div>
                    <h3 class="fw-900 mb-3">Mobile-Optimized for Short-Form Content</h3>
                    <p class="text-muted mb-4 fs-5">In today's mobile-first world, your video must capture minds in the first 3 seconds. Our <strong>Short-Form Reels & Shorts</strong> adapt perfectly to mobile feeds, providing a highly-interactive, uncompressed viewing experience. We focus on kinetic captions, rapid grading, and dynamic audio hooks that dominate YouTube, Instagram, and TikTok algorithms.</p>
                    <a href="#technology" class="btn btn-dark-punchy rounded-pill px-4" title="Review our Technical Stack">Tech Specs <i class="bi bi-cpu ms-2"></i></a>
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="col-lg-6" data-aos="fade-up">
                <div class="pitch-card p-5 border-3 border border-dark rounded-5 h-100 transition-all bg-white shadow-punchy-sm">
                    <div class="icon-box-punchy mb-4">
                        <i class="bi bi-palette-fill fs-1"></i>
                    </div>
                    <h3 class="fw-900 mb-3">Customized Storyboards for Unique Brands</h3>
                    <p class="text-muted mb-4 fs-5">Your business is unique, and your visual assets should be too. We avoid generic, stock-heavy templates in favor of <strong>Bespoke 3D Modeling</strong> and custom storyboards that capture your genuine <a href='<?= BASE_URL ?>services/website' class='text-accent-dynamic fw-bold' title="Explore our High-Performance Web Designing and Development services">Brand Authority</a>. We work closely with you to ensure every particle effect and camera sweep aligns with your core values.</p>
                    <a href="<?= BASE_URL ?>video-portfolio" class="btn btn-dark-punchy rounded-pill px-4" title="Navigate to Video Portfolio Showcase">View Portfolio <i class="bi bi-grid-3x3-gap ms-2"></i></a>
                </div>
            </div>

            <!-- Feature 4 -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="pitch-card p-5 border-3 border border-dark rounded-5 h-100 transition-all bg-light">
                    <div class="icon-box-punchy mb-4">
                        <i class="bi bi-lightning-charge-fill fs-1"></i>
                    </div>
                    <h3 class="fw-900 mb-3">Fast Rendering Cycles for Rapid Deployment</h3>
                    <p class="text-muted mb-4 fs-5">Timing is everything in marketing. Our production cycles are engineered to be <strong>Fast and Efficient</strong>, utilizing high-performance GPU clusters to render 4K video streams in record times. We optimize everything from pre-visualization to final editing, ensuring your <a href='<?= BASE_URL ?>services/seo' class='text-accent-dynamic fw-bold'>Campaign Launches</a> hit the ground running with zero delays.</p>
                    <a href="#performance" class="btn btn-dark-punchy rounded-pill px-4" title="View our performance and speed metrics">Speed Metrics <i class="bi bi-lightning ms-2"></i></a>
                </div>
            </div>

            <!-- Feature 5 -->
            <div class="col-12" data-aos="fade-up">
                <div class="pitch-card p-5 border-3 border border-dark rounded-5 transition-all bg-dark text-white shadow-accent">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h3 class="fw-900 mb-3 text-white">SEO-Friendly Video Assets for Organic Growth</h3>
                            <p class="text-white opacity-75 mb-4 fs-5">Don't just upload; dominate. We build <strong>SEO-Friendly video metadata and transcript schemas</strong> from the ground up, ensuring that search engines and video platforms love your content. Our architecture integrates seamlessly with our <a href='<?= BASE_URL ?>services/seo' class='text-accent-dynamic fw-bold text-decoration-none'>Organic SEO Strategy</a> for massive compounding traffic.</p>
                        </div>
                        <div class="col-lg-4 text-lg-end">
                            <a href="<?= BASE_URL ?>services/seo" class="btn btn-punchy btn-lg" title="Learn more about our SEO strategies">Explore SEO Pillar <i class="bi bi-graph-up-arrow ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Local Dominance Section -->
<section class="local-dominance-section section-padding bg-white">
    <div class="container">
        <div class="row mb-5 text-center" data-aos="fade-up">
            <div class="col-lg-8 mx-auto">
                <h2 class="display-5 fw-900 text-dark mb-4">Mastering <span class="text-accent-dynamic">Visual Local Dominance</span></h2>
                <p class="fs-5 text-muted">A video is only as powerful as its visibility. We specialize in localized video strategies that ensure you aren't just 'producing content'—you're the top visual brand in your market.</p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-4" data-aos="fade-up">
                <div class="p-5 border-2 border border-dark rounded-5 h-100 bg-light shadow-punchy-sm">
                    <h3 class="h4 fw-900 mb-3"><i class="bi bi-geo-alt text-accent-dynamic me-2"></i> Stronger Regional Connection</h3>
                    <p class="small text-muted mb-0">Strengthen your connection with your local audience through cinematic storytelling that captures the authentic culture, roots, and visual trust of your region.</p>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="p-5 border-2 border border-dark rounded-5 h-100 bg-white shadow-punchy-sm">
                    <h3 class="h4 fw-900 mb-3"><i class="bi bi-graph-up text-accent-dynamic me-2"></i> Higher Video SEO Ranking</h3>
                    <p class="small text-muted mb-0">Secure higher Google Video Tab and YouTube Rankings. Connect with nearby customers, increase clicks, and stand out in local listings effortlessly.</p>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="p-5 border-2 border border-dark rounded-5 h-100 bg-light shadow-punchy-sm">
                    <h3 class="h4 fw-900 mb-3"><i class="bi bi-search text-accent-dynamic me-2"></i> Regional Visual Storytelling</h3>
                    <p class="small text-muted mb-0">Target your audience with cultural precision. Our custom videos resonate with localized pain points, driving highly qualified leads straight to your business.</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up">
                <div class="p-5 border-2 border border-dark rounded-5 h-100 bg-dark text-white">
                    <h3 class="h4 fw-900 mb-3 text-accent-dynamic"><i class="bi bi-link-45deg me-2"></i> Interactive CTA Overlays</h3>
                    <p class="small opacity-75 mb-0">Boost conversions with accurate, interactive call-to-action video overlays and automated lead pipelines built directly within your visual players.</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="p-5 border-2 border border-dark rounded-5 h-100 bg-white border-accent-dynamic">
                    <h3 class="h4 fw-900 mb-3"><i class="bi bi-google text-accent-dynamic me-2"></i> GMB Video Optimization</h3>
                    <p class="small text-muted mb-0">Maximize your Google My Business profile with photorealistic 3D virtual tours and product videos that attract immediate clicks from proximity searches.</p>
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
                <h2 class="display-4 fw-900 text-dark mb-4">Case Studies: <span class="text-accent-dynamic">Visual Success Stories</span></h2>
                <p class="fs-5 text-muted">At Crea8ve Cool, every production tells a story of creative strategy and massive ROI. Explore how we transformed visual identities.</p>
            </div>
            <div class="col-lg-5 text-lg-end pb-3">
                <a href="<?= BASE_URL ?>video-portfolio" class="btn btn-outline-dark-punchy rounded-pill px-5">View All Work</a>
            </div>
        </div>

        <div class="row g-4">
            <?php 
            $case_studies = [
                ['name' => 'Dhananjay Creations', 'niche' => 'Visual Branding | Delhi', 'results' => ['3D Product Explainer Animation', 'Cinematic Saree Production Tour', 'Engagement Rate boosted by 240%']],
                ['name' => 'Formative Sports', 'niche' => 'Activewear Promos | Australia', 'results' => ['Cinematic Activewear Launch Reel', 'Visual Effects (VFX) Particle integration', '3M+ Organic Views across feeds']],
                ['name' => 'Academic Global School', 'niche' => 'Campus Virtual Tour | Gorakhpur', 'results' => ['Immersive 3D Campus Fly-through', 'Corporate Trust-Building Interviews', 'Enrollment inquiries boosted by 45%']],
                ['name' => 'Marina Dee', 'niche' => 'Creative Animated Intros | Melbourne', 'results' => ['Bespoke Kinetic Identity Loop', 'Stunning Mystical Fluid Effects', 'Click-Through Rate increased by 80%']],
                ['name' => 'DRH Sports', 'niche' => 'Manufacturing VFX | Dominica', 'results' => ['Industrial Supply-Chain Video Edit', '3D Fabric Simulation Render', 'Highly-engaging B2B lead generation']]
            ];
            foreach ($case_studies as $i => $cs): 
            ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?= $i * 50 ?>">
                <div class="case-card p-5 border-3 border border-dark rounded-5 h-100 bg-white transition-all shadow-punchy-sm">
                    <div class="badge bg-dark text-white rounded-pill px-3 py-1 mb-3 small fw-bold"><?= $cs['niche'] ?></div>
                    <h3 class="h4 fw-900 mb-4"><?= $cs['name'] ?></h3>
                    <ul class="list-unstyled d-grid gap-2 mb-4">
                        <?php foreach($cs['results'] as $res): ?>
                            <li class="small d-flex align-items-center gap-2">
                                <i class="bi bi-star-fill text-accent-dynamic text-10px"></i>
                                <span class="opacity-75"><?= $res ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <a href="<?= BASE_URL ?>video-portfolio" class="text-accent-dynamic fw-900 text-decoration-none small" title="Read the full success story for <?= $cs['name'] ?>">READ FULL CASE STUDY <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- The Artist Behind The Work -->
<section class="section-padding bg-dark text-white border-top border-bottom border-secondary border-opacity-25" id="the-artist">
    <div class="container" style="max-width: 1240px;">
        <div class="row align-items-center g-5">
            <div class="col-lg-5" data-aos="fade-right">
                <span class="badge bg-accent-dynamic text-white px-3 py-2 rounded-pill mb-3 fw-bold letter-spacing-1">CRAFTED BY ARTISTS</span>
                <h2 class="display-4 fw-900 text-white mb-4">Meet <span class="gradient-text-dynamic" style="background: linear-gradient(135deg, #FF5E36 0%, #FF007A 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Shakti Kumar.</span></h2>
                <p class="fs-5 opacity-75 mb-4">We don't outsource to generic agencies. Your brand's visual identity is crafted in-house by our 3D Generalist & Video Editor, Shakti Kumar Gupta.</p>
                <p class="opacity-50 mb-4">Specializing in hyper-realistic characters, environments, and seamless fluid dynamics using industry-standard tools.</p>
                
                <div class="software-badges d-flex flex-wrap gap-2 mb-4">
                    <span class="badge bg-black border border-secondary border-opacity-25 py-2 px-3">Blender</span>
                    <span class="badge bg-black border border-secondary border-opacity-25 py-2 px-3">ZBrush</span>
                    <span class="badge bg-black border border-secondary border-opacity-25 py-2 px-3">Maya</span>
                    <span class="badge bg-black border border-secondary border-opacity-25 py-2 px-3">Substance Painter</span>
                </div>

                <a href="<?= BASE_URL ?>founder" class="btn btn-punchy btn-lg rounded-pill" title="View Shakti's Profile">
                    View Full Artist Profile <i class="bi bi-arrow-right ms-2"></i>
                </a>
            </div>
            <div class="col-lg-7" data-aos="fade-left">
                <div class="row g-3">
                    <div class="col-sm-6">
                        <div class="rounded-4 overflow-hidden position-relative group-hover h-100">
                            <img src="https://cdna.artstation.com/p/assets/images/images/091/168/852/large/shakti-gupta-hari-closeup1.webp?1756045219" alt="3D Lord Vishnu Model - High Fidelity CGI" title="Shakti Kumar Gupta — Cinematic 3D Character Art" class="img-fluid w-100 h-100 object-fit-cover" style="min-height: 250px;">
                            <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-gradient-overlay-dark">
                                <h4 class="text-white fw-bold mb-0 fs-5">3D Lord Vishnu</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 d-flex flex-column gap-3">
                        <div class="rounded-4 overflow-hidden position-relative group-hover flex-grow-1">
                            <img src="https://cdna.artstation.com/p/assets/images/images/089/359/824/large/shakti-gupta-durga-render.webp?1751351187" alt="3D Durga Maa Model - Photorealistic Rendering" title="3D Artist Shakti Kumar — Cultural CGI Masterpiece" class="img-fluid w-100 h-100 object-fit-cover" style="min-height: 200px;">
                            <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-gradient-overlay-dark">
                                <h4 class="text-white fw-bold mb-0 fs-6">Durga Maa Render</h4>
                            </div>
                        </div>
                        <div class="rounded-4 overflow-hidden position-relative group-hover flex-grow-1">
                            <img src="https://cdnb.artstation.com/p/assets/images/images/093/221/615/large/shakti-kumar-gupta-1.webp?1761916238" alt="Sci Fi Mechanical Prop - 3D Hard Surface Modeling" title="Custom 3D Props and Assets for Motion Graphics" class="img-fluid w-100 h-100 object-fit-cover" style="min-height: 200px;">
                            <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-gradient-overlay-dark">
                                <h4 class="text-white fw-bold mb-0 fs-6">Sci Fi Prop</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Authority Narrative Section 1: The Growth Engine -->
<section class="growth-engine-section section-padding bg-light overflow-hidden">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="p-2 bg-white border border-dark border-3 rounded-5 shadow-punchy-sm">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80" alt="3D Motion Design Team Collaborating on CGI Projects" title="Crea8ve Cool — Award-winning Creative Directors & Animators" class="img-fluid rounded-4">
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="display-5 fw-900 text-dark mb-4">Accelerate Your Audience Growth with <span class="text-accent-dynamic">Cinematic Video Editing</span></h2>
                <p class="fs-5 text-muted mb-4">Your video is more than simple footage—it’s your <strong>growth engine</strong>. We design innovative, viewer-focused sequences that captivate audiences, enhance <strong>Retention Rates</strong>, and drive measurable conversions. At Crea8ve Cool, we understand that whether you're an influencer, startup, or established enterprise, your <a href='<?= BASE_URL ?>video-portfolio' class='text-dark fw-bold text-decoration-underline' title="Explore our full dynamic motion graphics and 3D video portfolio archive">Custom Visual Masterpiece</a> must ensure you stand out and convert clicks into revenue.</p>
                <p class="fs-5 text-muted mb-5">Let's scale together by leveraging our expertise in <a href='<?= BASE_URL ?>services/website' title='Scale with Website Design' class='text-accent-dynamic fw-bold'>High-End Web Design</a> and <strong>Visual Storytelling</strong>. We focus on the intersection of brand authority and technical rendering excellence.</p>
                <a href="#leads" class="btn btn-punchy btn-lg" title="Start your growth journey now">Start Your Growth Journey</a>
            </div>
        </div>
    </div>
</section>

<!-- Authority Narrative Section 2: The Strategic Partner -->
<section id="partner-intro" class="strategic-partner-section section-padding bg-white">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-12" data-aos="fade-up">
                <h2 class="display-4 fw-900 text-dark mb-5 text-center">Drive Success with the <span class="text-accent-dynamic">Best 3D Animation Services in <?= htmlspecialchars($locationContext) ?></span></h2>
            </div>
            <div class="col-lg-6" data-aos="fade-right">
                <p class="fs-5 text-muted mb-4">A professional 3D video forms the core of visual authority for your business online. It's that critical <strong>first impression</strong> that your audience will have—a platform to introduce your product, demonstrate mechanical or structural value, and convince visitors to take action. Behind each thriving brand is a video that combines aesthetic appeal with technical precision.</p>
                <p class="fs-5 text-muted">Crea8ve Cool focuses on creating brilliant, cinema-grade motions that attract your target audience and keep them engaged. We understand the specific challenges facing businesses today—from tight <a href='<?= BASE_URL ?>services/website' class='text-accent-dynamic fw-bold' title="Explore our High-Performance Web Designing and Development services">Production Budgets</a> to tough global competition and the urgency for quick, measurable organic traffic outcomes. Our strategy is aimed at meeting these needs.</p>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="p-5 border-3 border border-dark rounded-5 text-white shadow-punchy-lg position-relative overflow-hidden auth-card-dark">
                    <div class="position-absolute top-0 end-0 w-100 h-100 auth-card-glow" style="background: radial-gradient(circle, rgba(255, 94, 54, 0.3) 0%, transparent 70%);"></div>
                    <h3 class="h4 fw-900 mb-4 text-accent-dynamic position-relative z-1">The Authority Difference</h3>
                    <p class="mb-4 text-white position-relative z-1 text-auth-p">As a top-tier provider of <strong>3D Animation &amp; Motion Graphics in <?= htmlspecialchars($locationContext) ?></strong>, we understand the unique needs of scaling brands. From bold, eye-catching textures to easy-to-digest layouts, we make sure your videos reflect the true identity and values of your business.</p>
                    <p class="text-white position-relative z-1 text-auth-p">Our <a href='<?= BASE_URL ?>video-portfolio' class='text-white fw-bold text-decoration-underline' title="Explore our full dynamic motion graphics and 3D video portfolio archive">Cinematic Approach</a> ensures your videos function perfectly across all screen sizes, providing every user with an immersive experience. We integrate modern trends in rendering, <a href='https://web.dev/vitals/' target='_blank' rel='noopener noreferrer' class='text-accent-dynamic fw-bold text-decoration-none' title="Learn about Google's Core Web Vitals guidelines on web.dev">Google Video optimization</a>, and fluid use.</p>
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
                <h2 class="display-5 fw-900 text-dark mb-4">Exceptional Motion Services That <span class="text-accent-dynamic">Businesses Count On</span></h2>
                <p class="fs-5 text-muted mb-4">Crea8ve Cool represents the distinctness of your business while delivering measurable success. We have worked hard to gain the trust of our clients by offering top-notch <a href='<?= BASE_URL ?>video-portfolio' class='text-dark fw-bold text-decoration-underline' title="Explore our full dynamic motion graphics and 3D video portfolio archive">3D Motion &amp; Video Production</a>. We understand your needs, challenges, and dreams, and we blend cinematic creativity with absolute technical competence.</p>
                <p class="fs-5 text-muted mb-5">Our commitment to excellence, transparency, and satisfaction has enabled us to gain the trust of many scaling brands. Let's bring your vision to life as a digital masterpiece that dominates YouTube feeds and converts social traffic into revenue.</p>
                
                <div class="d-grid gap-3">
                    <div class="d-flex align-items-center gap-3 p-3 bg-white border border-dark border-2 rounded-4">
                        <i class="bi bi-shield-check text-accent-dynamic fs-3"></i>
                        <span class="fw-800 text-dark">Commitment to Creative Excellence</span>
                    </div>
                    <div class="d-flex align-items-center gap-3 p-3 bg-white border border-dark border-2 rounded-4">
                        <i class="bi bi-heart-fill text-accent-dynamic fs-3"></i>
                        <span class="fw-800 text-dark">Client-First Satisfaction Guarantee</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
                <div class="p-2 bg-white border border-dark border-3 rounded-5 shadow-punchy-sm">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=800&q=80" alt="High-Performance Video Production and Client Trust" title="Crea8ve Cool — Engineering Visual Experiences for Global Brands" class="img-fluid rounded-4">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Strategic Floating Sub-Navigation -->
<div class="floating-sub-nav position-fixed start-50 translate-middle-x scrolled-up floating-nav-pos">
    <div class="nav-pill-wrapper bg-dark p-1 rounded-pill shadow-punchy-lg border border-white border-opacity-10 d-flex align-items-center nav-pill-bg">
        <div class="nav-links d-flex px-4 gap-4">
            <a href="#pitching-intro" class="sub-nav-link fw-800 text-white opacity-50 text-decoration-none small letter-spacing-1" title="View our Overview section">OVERVIEW</a>
            <a href="#strategy" class="sub-nav-link fw-800 text-white opacity-50 text-decoration-none small letter-spacing-1" title="View our Strategy section">STRATEGY</a>
            <a href="#performance" class="sub-nav-link fw-800 text-white opacity-50 text-decoration-none small letter-spacing-1" title="View our Performance section">PERFORMANCE</a>
            <a href="#technology" class="sub-nav-link fw-800 text-white opacity-50 text-decoration-none small letter-spacing-1" title="View our Technology section">TECHNOLOGY</a>
            <a href="#packages" class="sub-nav-link fw-800 text-white opacity-50 text-decoration-none small letter-spacing-1" title="View our Pricing section">PRICING</a>
            <a href="#ecosystem" class="sub-nav-link fw-800 text-white opacity-50 text-decoration-none small letter-spacing-1" title="View our Ecosystem section">ECOSYSTEM</a>
        </div>
        <a href="#leads-form" class="btn-quote-pill rounded-pill px-4 fw-900 text-decoration-none d-flex align-items-center justify-content-center btn-quote-custom" title="Request a custom quote">GET A QUOTE</a>
    </div>
</div>

<!-- Section 1: Strategy -->
<section id="strategy" class="seo-rich-content section-padding bg-white position-relative overflow-hidden">
    <div class="container">
        <div class="authority-content-wrapper mb-0">
            <div class="row g-4 align-items-center">
                    <div class="col-lg-7" data-aos="fade-right">
                        <h2 class="display-5 fw-900 mb-4">1. The Psychology of Motion: <span class="text-accent-dynamic">Visual Pacing Beyond Frames</span></h2>
                        <p>When you look for a <strong>3D Video Editing &amp; Animation</strong> partner, you aren't just looking for someone to push keyframes. You are looking for a creative partner who understands <strong>Human Attention Architecture</strong> and <strong>Retention Pacing</strong>. At Crea8ve Cool, we don't start with random stock clips; we start with a precise storyboard of your customer's visual path.</p>
                        <p>Every successful brand video must answer three questions in the first 3 seconds: <em>What is this item? Why is it superior? How does it serve me?</em> This is where our <strong>Creative Branding</strong> and <strong>VFX Design</strong> expertise comes into play. We utilize rapid pacing and strategic visual focus to guide viewers directly toward your call to action.</p>
                        <p>Our motion strategies integrate deeply with your <a href='<?= BASE_URL ?>services/website' class='text-accent-dynamic fw-bold' title="Explore our High-Performance Web Designing and Development services">E-Commerce Design</a> goals. We know that if your landing page video doesn't hook, your ad budget is wasted. That's why we build with 'Visual Gravity'—ensuring that every frame leads to a deeper trust signal.</p>
                    </div>
                    <div class="col-lg-5" data-aos="fade-left">
                        <div class="sc-card">
                            <div class="sc-card-header">
                                <span class="sc-tag-pill">Our Framework</span>
                                <h4 class="fw-900 mb-0 mt-2 text-sc-title">The Motion Checklist</h4>
                            </div>
                            <div class="sc-card-body">
                                <div class="sc-item">
                                    <div class="sc-badge">01</div>
                                    <div>
                                        <div class="sc-item-label">Concept Storyboarding</div>
                                        <div class="sc-item-desc">We precisely draft the visual blueprint, camera sweeps, and scripting hooks before rendering.</div>
                                    </div>
                                </div>
                                <div class="sc-item">
                                    <div class="sc-badge">02</div>
                                    <div>
                                        <div class="sc-item-label">3D Asset Modeling</div>
                                        <div class="sc-item-desc">Engineering hyper-detailed photorealistic models with flawless physical properties.</div>
                                    </div>
                                </div>
                                <div class="sc-item">
                                    <div class="sc-badge">03</div>
                                    <div>
                                        <div class="sc-item-label">Fluid &amp; Physics Sync</div>
                                        <div class="sc-item-desc">Integrating high-end simulation modules for realistic particles, smoke, and liquid effects.</div>
                                    </div>
                                </div>
                                <div class="sc-item sc-item-last">
                                    <div class="sc-badge">04</div>
                                    <div>
                                        <div class="sc-item-label">Dynamic Audio Grading</div>
                                        <div class="sc-item-desc">Sound engineering with custom music, SFX, and localized voiceovers for emotional impact.</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 2: Performance -->
<section id="performance" class="seo-rich-content section-padding bg-light position-relative overflow-hidden">
    <div class="container">
        <div class="authority-content-wrapper mb-0">
            <h2 class="display-5 fw-900 mb-5 text-center">2. Rendering for the Future of Tech: <span class="text-accent-dynamic">Technical Video Performance</span></h2>
            <div class="row g-5">
                    <div class="col-lg-6" data-aos="fade-right">
                        <p class="fs-5">Playback speed is the ultimate trust signal. In a world of <a href='<?= BASE_URL ?>services/website' class='text-accent-dynamic fw-bold' title="Explore our High-Performance Web Designing and Development services">Dynamic Web Portals</a> and high-speed connections, a pixelated, buffering video is a dead video. Our <strong>Video Engineering</strong> process follows the 'Zero-Loss' compression methodology.</p>
                        <p>We don't use generic web hosts that crush your video files into heavily pixelated blocks. Instead, we use a <strong>Custom Google Drive API Direct Stream</strong> pipeline to deliver true, uncompressed, ultra-smooth 4K playback on any device.</p>
                        <p>Our performance engineering includes next-gen codecs, automated device scaling, and progressive rendering protocols that align perfectly with modern web layout standards.</p>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="perf-card">
                            <div class="perf-card-title">Rendering Benchmarks</div>
                            <div class="perf-grid">
                                <div class="perf-stat">
                                    <div class="perf-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                                    <div class="perf-val">60 FPS</div>
                                    <div class="perf-label">Liquid-Smooth Playback</div>
                                </div>
                                <div class="perf-stat">
                                    <div class="perf-icon"><i class="bi bi-speedometer2"></i></div>
                                    <div class="perf-val">4K UHD</div>
                                    <div class="perf-label">Cinema-Grade Output</div>
                                </div>
                                <div class="perf-stat">
                                    <div class="perf-icon"><i class="bi bi-image-fill"></i></div>
                                    <div class="perf-val">Octane</div>
                                    <div class="perf-label">State-of-the-Art Render</div>
                                </div>
                                <div class="perf-stat">
                                    <div class="perf-icon"><i class="bi bi-phone-fill"></i></div>
                                    <div class="perf-val">9:16 / 16:9</div>
                                    <div class="perf-label">Omnichannel Adaptation</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 3: Technology Stack -->
<section id="technology" class="seo-rich-content section-padding bg-white position-relative overflow-hidden">
    <div class="container">
        <div class="authority-content-wrapper mb-0">
            <div class="row g-5 align-items-center">
                    <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-right">
                        <div class="fortress-card">
                            <div class="fortress-glow" style="background: radial-gradient(circle, rgba(255, 94, 54, 0.4) 0%, transparent 70%);"></div>
                            <div class="fortress-header">
                                <div class="fortress-shield-icon" style="background: #FF5E36; color: #fff;"><i class="bi bi-cpu"></i></div>
                                <div>
                                    <div class="fortress-tag">Production Stack</div>
                                    <div class="h3 fortress-title">The Render Engine</div>
                                </div>
                            </div>
                            <p class="fortress-desc">Quality is not an option — it is our identity. We build on industry-leading modeling and simulation pipelines to deliver unmatched physical realism.</p>
                            <div class="fortress-rows">
                                <div class="fortress-row">
                                    <div class="fortress-row-icon"><i class="bi bi-shield-fill-check"></i></div>
                                    <div>
                                        <div class="fortress-row-label">Blender &amp; Cinema 4D</div>
                                        <div class="fortress-row-desc">Industry-standard 3D modeling, lighting, and layout pipelines.</div>
                                    </div>
                                </div>
                                <div class="fortress-row">
                                    <div class="fortress-row-icon"><i class="bi bi-database-lock"></i></div>
                                    <div>
                                        <div class="fortress-row-label">Octane / Cycles Render</div>
                                        <div class="fortress-row-desc">GPU-accelerated photorealistic raytracing for physical accuracy.</div>
                                    </div>
                                </div>
                                <div class="fortress-row">
                                    <div class="fortress-row-icon"><i class="bi bi-cloud-arrow-up-fill"></i></div>
                                    <div>
                                        <div class="fortress-row-label">After Effects &amp; Premiere</div>
                                        <div class="fortress-row-desc">Advanced composition, visual effects (VFX), and kinetic grading.</div>
                                    </div>
                                </div>
                                <div class="fortress-row fortress-row-last">
                                    <div class="fortress-row-icon"><i class="bi bi-patch-check-fill"></i></div>
                                    <div>
                                        <div class="fortress-row-label">DaVinci Resolve</div>
                                        <div class="fortress-row-desc">Hollywood-standard color correction and spatial acoustic grading.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 order-1 order-lg-2" data-aos="fade-left">
                        <h2 class="display-5 fw-900 mb-4">3. The Production Pipeline: <span class="text-accent-dynamic">Unmatched Visual Realism</span></h2>
                        <p>Your product deserves more than a standard template mock-up. Our <strong>Bespoke 3D Engineering</strong> ensures you have complete control over every texture, particle sweep, and camera shift. We deliver custom renders that reflect high-end luxury, making your product impossible to scroll past.</p>
                        <p>Whether you need custom fluid simulation, dynamic cloth rendering, or a complex structural explainer, our physics-first logic makes it possible. We don't believe in digital limitations — if your product has a design, we can bring it to life in motion.</p>
                        <p>We also utilize direct API integrations to stream your video showcases onto your custom <a href='<?= BASE_URL ?>services/website' class='text-accent-dynamic fw-bold' title="Explore our High-Performance Web Designing and Development services">Websites</a> with zero buffering. This level of 'Visual Authority' is what sets a premium, world-class agency apart. Your brand deserves a legendary showcase.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 4: Glossary (Premium FAQ Style) -->
<section id="glossary" class="seo-rich-content section-padding bg-light position-relative overflow-hidden">
    <div class="container">
        <div class="authority-content-wrapper mb-0">
            <div class="text-center mb-5" data-aos="fade-up">
                    <h2 class="display-5 fw-900 text-dark mb-3">4. 3D Motion Excellence Glossary</h2>
                    <p class="fs-5 text-muted">Core concepts you should know to dominate your visual niche.</p>
                </div>
                
                <div class="premium-faq-wrapper mx-auto max-w-900" id="premiumGlossary">
                    <?php 
                    $glossary = [
                        ['q'=>'What is 3D Product Rendering?', 'a'=>'<strong>3D Product Rendering</strong> involves building a hyper-realistic digital 3D model of your product, allowing us to sweep virtual cameras, adjust physics, and simulate fluid animations in 4K resolution without needing physical studio shoots.'],
                        ['q'=>'Why does Audience Retention matter?', 'a'=>'Retention is the % of video your user watches. Platforms like YouTube and Instagram promote videos with high retention. Our cinematic, rapid-pace editing is specifically engineered to keep retention above 75%.'],
                        ['q'=>'What is VFX in commercial videos?', 'a'=>'<strong>VFX (Visual Effects)</strong> integrates computer-generated imagery (such as particle explosions, glowing highlights, and seamless fluid transitions) into real or 3D footage, raising your brand\'s authority to enterprise status.'],
                        ['q'=>'Do you handle scriptwriting and storyboards?', 'a'=>'Absolutely. Every premium video package includes a professional storyboard phase, mapping out every hook, visual asset, voiceover transition, and call-to-action before rendering begins.'],
                        ['q'=>'How do you stream videos in ultra-high quality?', 'a'=>'We bypass standard web compressions by leveraging a custom Google Drive API direct-pipe pipeline, ensuring that visitors to your custom <a href="<?= BASE_URL ?>services/website" class="text-accent-dynamic fw-bold" title="Explore our High-Performance Web Designing and Development services">Crea8ve website</a> experience pure, uncompressed, buffering-free 4K video.']
                    ];
                    foreach($glossary as $idx => $item): 
                        $isFirst = ($idx === 0);
                    ?>
                    <div class="p-faq-item mb-4" data-aos="fade-up" data-aos-delay="<?= $idx * 50 ?>">
                        <button class="p-faq-btn w-100 text-start d-flex justify-content-between align-items-center <?= $isFirst ? '' : 'collapsed' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#pfaq<?= $idx ?>" aria-expanded="<?= $isFirst ? 'true' : 'false' ?>">
                            <span class="fw-900 fs-5 pe-3"><?= $item['q'] ?></span>
                            <span class="p-faq-icon">
                                <i class="bi bi-plus-lg p-icon-plus"></i>
                                <i class="bi bi-dash-lg p-icon-minus"></i>
                            </span>
                        </button>
                        <div id="pfaq<?= $idx ?>" class="collapse <?= $isFirst ? 'show' : '' ?>" data-bs-parent="#premiumGlossary">
                            <div class="p-faq-body p-4 border-top border-dark border-opacity-10 fs-6 text-muted lh-lg">
                                <?= $item['a'] ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
require_once APP_PATH . '/views/components/stack.php'; 
?>

<?php require_once APP_PATH . '/views/components/roi_calculator.php'; ?>

<!-- Impact Narrative: Designing for Results -->
<section class="results-narrative-section section-padding bg-light">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="display-5 fw-900 text-dark mb-4">Creating Video That <span class="text-accent-dynamic">Delivers Real Conversions</span></h2>
                <p class="fs-5 text-muted mb-4">In today's digital-first world, a video must do more than just look nice—it must deliver visible, measurable sales outcomes. A well-crafted visual story is your most powerful tool for engagement, converting passive scrolls into paying clients.</p>
                <p class="fs-5 text-muted mb-5">At Crea8ve Cool, we specialize in <strong>Cinematic 3D Video Production</strong> that drives real success by combining pacing, rendering, and sound with a bulletproof conversion strategy.</p>
                
                <div class="d-grid gap-4">
                    <div class="d-flex gap-3">
                        <div class="step-num-v2 text-accent-dynamic fw-900 fs-3">01</div>
                        <div>
                            <h3 class="h5 fw-900 mb-1">Photorealistic Textures</h3>
                            <p class="small text-muted mb-0">Stunning, physically-accurate materials that immediately capture attention and stick in the minds of your audience.</p>
                        </div>
                    </div>
                    <div class="d-flex gap-3">
                        <div class="step-num-v2 text-accent-dynamic fw-900 fs-3">02</div>
                        <div>
                            <h3 class="h5 fw-900 mb-1">Viewer-Centric Pacing</h3>
                            <p class="small text-muted mb-0">High-retention editing ensures visitors stay engaged for the entire duration with zero friction.</p>
                        </div>
                    </div>
                    <div class="d-flex gap-3">
                        <div class="step-num-v2 text-accent-dynamic fw-900 fs-3">03</div>
                        <div>
                            <h3 class="h5 fw-900 mb-1">Conversion-Focused Hooks</h3>
                            <p class="small text-muted mb-0">Strategic timing, kinetic text, and persuasive audio prompts designed to turn views into qualified leads.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="p-5 border-3 border border-dark rounded-5 bg-white shadow-punchy-lg">
                    <h3 class="fw-900 mb-4">Productions That <span class="text-accent-dynamic">Hook and Convert</span></h3>
                    <p class="text-muted mb-4">Your brand video is more than simple entertainment—it is a purpose-driven asset that connects with your audience. We design around your specific goals, whether it is high CTR, social viral growth, or B2B contracts.</p>
                    
                    <ul class="list-unstyled d-grid gap-3 mb-0">
                        <li class="d-flex align-items-center gap-3 p-3 bg-light rounded-4 border border-dark border-opacity-10">
                            <i class="bi bi-person-check-fill text-accent-dynamic fs-4"></i>
                            <span class="fw-800 text-dark">Tailor-made Storyboards for Your Market</span>
                        </li>
                        <li class="d-flex align-items-center gap-3 p-3 bg-light rounded-4 border border-dark border-opacity-10">
                            <i class="bi bi-cpu-fill text-accent-dynamic fs-4"></i>
                            <span class="fw-800 text-dark">Optimized Audience Retention (AR) Mastery</span>
                        </li>
                        <li class="d-flex align-items-center gap-3 p-3 bg-light rounded-4 border border-dark border-opacity-10">
                            <i class="bi bi-lightning-fill text-accent-dynamic fs-4"></i>
                            <span class="fw-800 text-dark">Ultra-Fast GPU Rendering Velocities</span>
                        </li>
                        <li class="d-flex align-items-center gap-3 p-3 bg-light rounded-4 border border-dark border-opacity-10">
                            <i class="bi bi-megaphone-fill text-accent-dynamic fs-4"></i>
                            <span class="fw-800 text-dark">Clear, Auditory Calls-to-Action</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- The 10-Step Impact Blueprint — Vertical Tabs -->
<section class="process-blueprint-section section-padding bg-white">
    <div class="container">
        <div class="row mb-5" data-aos="fade-up">
            <div class="col-lg-8">
                <h2 class="display-4 fw-900 text-dark mb-4">Crafting Impactful <span class="text-accent-dynamic">Visual Media Design</span></h2>
                <p class="fs-5 text-muted">A video doesn't mean simple shots. We follow a meticulous 10-step blueprint to ensure your digital presence drives results effortlessly.</p>
            </div>
        </div>

        <div class="vtabs-wrapper" data-aos="fade-up">
            <!-- Left: Step Nav -->
            <div class="vtabs-nav" id="vtabsNav">
                <div class="vtab-item active" data-tab="step1"><span class="vtab-num">01</span><span class="vtab-name">Goal Definition</span></div>
                <div class="vtab-item" data-tab="step2"><span class="vtab-num">02</span><span class="vtab-name">Concept Storyboarding</span></div>
                <div class="vtab-item" data-tab="step3"><span class="vtab-num">03</span><span class="vtab-name">3D Modeling</span></div>
                <div class="vtab-item" data-tab="step4"><span class="vtab-num">04</span><span class="vtab-name">Texturing &amp; Lighting</span></div>
                <div class="vtab-item" data-tab="step5"><span class="vtab-num">05</span><span class="vtab-name">Fluid &amp; Physics</span></div>
                <div class="vtab-item" data-tab="step6"><span class="vtab-num">06</span><span class="vtab-name">Animation sweep</span></div>
                <div class="vtab-item" data-tab="step7"><span class="vtab-num">07</span><span class="vtab-name">GPU Rendering</span></div>
                <div class="vtab-item" data-tab="step8"><span class="vtab-num">08</span><span class="vtab-name">Sound Design</span></div>
                <div class="vtab-item" data-tab="step9"><span class="vtab-num">09</span><span class="vtab-name">Color Grading</span></div>
                <div class="vtab-item" data-tab="step10"><span class="vtab-num">10</span><span class="vtab-name">4K Final Export</span></div>
            </div>

            <!-- Right: Step Content -->
            <div class="vtabs-content">
                <div class="vtab-pane active" id="step1">
                    <div class="vtab-step-tag">Step 01</div>
                    <h3 class="vtab-title">Goal Definition</h3>
                    <p class="vtab-body">Every successful brand video begins with absolute clarity of purpose. Before a single frame is rendered, we sit down with you to define your primary business goals — whether that's capturing leads, raising social media ctr, selling physical products, or establishing brand authority. We translate those goals into visual storyboarding and build every angle around them.</p>
                </div>
                <div class="vtab-pane" id="step2">
                    <div class="vtab-step-tag">Step 02</div>
                    <h3 class="vtab-title">Concept Storyboarding</h3>
                    <p class="vtab-body">Storyboarding is what separates a high-converting visual asset from a generic clip. We conduct deep narrative design — mapping out hooks, camera pathways, scene shifts, and copywriting prompts — to build a precise visual flow. This planning dictates the visual pacing and sound design, ensuring your brand resonates with every single view.</p>
                </div>
                <div class="vtab-pane" id="step3">
                    <div class="vtab-step-tag">Step 03</div>
                    <h3 class="vtab-title">3D Asset Modeling</h3>
                    <p class="vtab-body">We architect hyper-detailed, photorealistic digital 3D models of your product or asset. This ensures your site doesn't just display basic stock images, but showcases a custom, proprietary asset that belongs solely to your company. Our modeling integrates seamlessly with CAD blueprints or physical sketches for flawless spatial accuracy.</p>
                </div>
                <div class="vtab-pane" id="step4">
                    <div class="vtab-step-tag">Step 04</div>
                    <h3 class="vtab-title">Texturing &amp; Lighting</h3>
                    <p class="vtab-body">Lighting is the invisible hand that builds visual desire. We engineer intuitive, physically-accurate material textures (metals, glass, liquids, and carbon fiber) and apply Hollywood-grade three-point digital lighting to ensure your product looks stunning. We focus on photorealism and light reflections that elevate your brand's authority.</p>
                </div>
                <div class="vtab-pane" id="step5">
                    <div class="vtab-step-tag">Step 05</div>
                    <h3 class="vtab-title">Fluid &amp; Physics Simulation</h3>
                    <p class="vtab-body">We implement complex physics and particle simulation modules — including smoke, fire, collisions, and realistic fluid dynamics — to add dynamic movement to your videos. These physics simulations are meticulously tuned, guaranteeing that your brand looks professional, high-ticket, and impossible to ignore on social feeds.</p>
                </div>
                <div class="vtab-pane" id="step6">
                    <div class="vtab-step-tag">Step 06</div>
                    <h3 class="vtab-title">Animation Sweep</h3>
                    <p class="vtab-body">A static camera is boring. We sweep digital camera pathways using advanced cinema tracking curves and mechanical sweeps, ensuring that every movement feels fluid and premium. This visual consistency builds subconscious credibility with your audience. Visitors who trust your video quality, trust your product authority.</p>
                </div>
                <div class="vtab-pane" id="step7">
                    <div class="vtab-step-tag">Step 07</div>
                    <h3 class="vtab-title">Optimized GPU Rendering</h3>
                    <p class="vtab-body">Rendering is where the magic becomes real. We leverage custom GPU render clusters utilizing Octane and Cycles tracing engines to compile photorealistic 3D footage in sub-second timelines. Our optimized pipelines ensure that we deliver Hollywood-quality videos without the massive multi-week delays of traditional production agencies.</p>
                </div>
                <div class="vtab-pane" id="step8">
                    <div class="vtab-step-tag">Step 08</div>
                    <h3 class="vtab-title">Sound Design Placement</h3>
                    <p class="vtab-body">The difference between a generic video and a viral masterpiece is professional sound design. We apply deep spatial sound effects, custom-licensed music, and professional voiceovers to match every transition. Every sweep, click, and drop is sound-engineered to trigger emotional focus and drive viewer actions.</p>
                </div>
                <div class="vtab-pane" id="step9">
                    <div class="vtab-step-tag">Step 09</div>
                    <h3 class="vtab-title">Color Grading &amp; VFX</h3>
                    <p class="vtab-body">We bake cinematic grade color lookup tables (LUTs) and customized compositing filters into your final cuts. From correcting exposure levels to injecting glowing highlights, neon accents, and sharp contrasts, this compositing phase ensures your video feels cohesive, legendary, and completely professional from the first frame.</p>
                </div>
                <div class="vtab-pane active-hidden" id="step10">
                    <div class="vtab-step-tag">Step 10</div>
                    <h3 class="vtab-title">4K Final Export</h3>
                    <p class="vtab-body">We render your finished production in multiple optimized formats (9:16 mobile feeds and 16:9 widescreen) in raw, uncompressed 4K resolution. We set up direct pipelines to stream these assets on your custom websites with zero buffering, and hand over complete commercial copyrights. In a digital world that never sleeps, your visuals shouldn't either.</p>
                </div>
            </div>
        </div>

        <!-- Dark Highlight Card -->
        <div class="row mt-5">
            <div class="col-lg-12" data-aos="fade-up">
                <div class="p-5 border-3 border border-dark rounded-5 bg-dark text-white shadow-punchy-lg">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h3 class="h4 fw-900 mb-3 text-accent-dynamic">The Critical Role of 4K Streams</h3>
                            <p class="text-updates">High-fidelity videos are essential to keep your brand relevant, secure, and engaging. We deliver true, uncompressed 4K video feeds using direct API integrations, ensuring your clients witness pure physical realism without buffering. Stay competitive in an evolving visual landscape with premium content.</p>
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

<section id="packages" class="pricing-section section-padding bg-light">
    <div class="container">
        <div class="row mb-5 text-center" data-aos="fade-up">
            <div class="col-lg-8 mx-auto">
                <h2 class="display-5 fw-900 text-dark mb-4">Plans and <span class="text-accent-dynamic">Pricing</span></h2>
                <p class="fs-5 text-muted">Crea8ve Cool provides studio-grade 3D motion design and video production packages tailored for scaling businesses. All packages include high-performance rendering, sound engineering, and commercial copyrights.</p>
            </div>
        </div>

        <div class="row g-4 justify-content-center">
            <?php 
            $packages = [
                [
                    'name' => 'Lite',
                    'tagline' => 'Reels & Shorts',
                    'desc' => 'High-engagement short-form videos engineered to capture attention instantly.',
                    'price' => '4,999',
                    'original_price' => '9,999',
                    'savings' => '50',
                    'features' => ['Up to 60 Seconds', 'Dynamic Sound Effects', 'Kinetic Typography', 'Color Grading', 'Viral Hooks & Strategy', 'Standard HD Output', '1 Round of Revision', '4-Day Delivery'],
                    'color' => '#6A5AE0',
                    'recommended' => false
                ],
                [
                    'name' => 'Plus',
                    'tagline' => 'Brand Explainer',
                    'desc' => 'Complete corporate overview, brand explainer, or promo with expert sound design.',
                    'price' => '14,990',
                    'original_price' => '24,990',
                    'savings' => '40',
                    'features' => ['Up to 3 Minutes', 'Custom Storyboarding', 'Professional Voiceover Sync', 'Premium Stock Assets', 'Custom Sound Design', 'Full 1080p Export', '2 Rounds of Revision', '7-Day Delivery'],
                    'color' => '#FF5E36',
                    'recommended' => true
                ],
                [
                    'name' => 'Premium',
                    'tagline' => '3D Cinematic Master',
                    'desc' => 'Photorealistic 3D product animation or complex visual effects sequence.',
                    'price' => '39,990',
                    'original_price' => '64,990',
                    'savings' => '38',
                    'features' => ['Full 3D Modeling & CAD Integration', 'Hyper-Realistic Lighting & Textures', 'Seamless Fluid & Physics Simulations', '4K Cinema Export', 'Full Commercial Copyrights', 'Dedicated Sound Engineering', 'Unlimited Revisions', '14-Day Delivery'],
                    'color' => '#FF007A',
                    'recommended' => false
                ]
            ];
            foreach($packages as $pkg): 
                $accentColorCard = $pkg['color'];
            ?>
            <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                <div class="card pricing-card h-100 border-3 border border-dark rounded-5 p-4 position-relative overflow-hidden <?= $pkg['recommended'] ? 'pricing-card-recommended' : '' ?>" style="box-shadow: 6px 6px 0px #111;">
                    <?php if($pkg['recommended']): ?>
                        <div class="badge bg-warning text-dark border border-dark border-2 rounded-pill px-3 py-1 position-absolute top-0 end-0 translate-middle-y me-4" style="font-weight: 900; font-size: 10px;">MOST POPULAR</div>
                    <?php endif; ?>
                    
                    <div class="card-body p-0 d-flex flex-column h-100">
                        <div class="monospace text-muted text-uppercase small font-weight-700"><?= $pkg['tagline'] ?></div>
                        <h3 class="fw-900 mt-1 mb-2 text-dark" style="font-size: 24px;"><?= $pkg['name'] ?></h3>
                        <p class="text-muted small mb-4" style="min-height: 40px; font-weight: 600;"><?= $pkg['desc'] ?></p>
                        
                        <div class="mb-4">
                            <span class="text-muted text-decoration-line-through small fw-bold">₹<?= $pkg['original_price'] ?></span>
                            <div class="d-flex align-items-baseline">
                                <span class="display-6 fw-900 text-dark">₹<?= $pkg['price'] ?></span>
                                <span class="text-muted small fw-bold ms-1">/ project</span>
                            </div>
                            <span class="badge bg-success text-white rounded-pill px-3 py-1 font-8 border border-dark mt-2">SAVE <?= $pkg['savings'] ?>% INCLUSIVE OF TAX</span>
                        </div>

                        <ul class="list-unstyled d-flex flex-column gap-2 mb-5">
                            <?php foreach($pkg['features'] as $feat): ?>
                                <li class="d-flex align-items-center gap-2 small" style="font-weight: 700;">
                                    <i class="bi bi-patch-check-fill text-success fs-5"></i>
                                    <span><?= $feat ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>

                        <a href="#leads-form" class="btn btn-punchy mt-auto py-3 text-white" style="background: <?= $accentColorCard ?>; border: 2px solid #111; box-shadow: 4px 4px 0px #111;" title="Get Started with <?= $pkg['name'] ?> Package">Get Started Now</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Geographic SEO Coverage Grid -->
<section class="locations-coverage-grid py-5 bg-white border-top border-dark border-3">
    <div class="container" style="max-width: 1240px;">
        <div class="row align-items-center mb-5" data-aos="fade-up">
            <div class="col-md-6">
                <span class="monospace font-9 text-uppercase text-accent-only fw-900 tracking-widest"><span class="presence-pulse-domestic" style="background: #FF5E36;"></span> ACTIVE COVERAGE MAP</span>
                <h2 class="font-clash fw-900 text-uppercase text-dark mt-2 mb-1" style="font-size: 2rem; letter-spacing: -1px;">Motion &amp; Video Production Hubs</h2>
                <p class="text-muted small mb-0">Explore our premium 3D motion design &amp; cinematic visual scaling hubs.</p>
            </div>
            <div class="col-md-6 text-md-end mt-3 mt-md-0">
                <span class="badge bg-dark text-white rounded-pill px-3 py-2 text-uppercase font-9 border-2 border border-dark">Scale High-Ticket Markets</span>
            </div>
        </div>
        
        <div class="row g-3" data-aos="fade-up" data-aos-delay="100">
            <?php 
            $seo_locations = require APP_PATH . '/config/locations.php';
            foreach ($seo_locations as $key => $loc): 
                $activeClass = (isset($data['location']) && $data['location']['name'] === $loc['name']) ? 'border-primary shadow-punchy-accent text-primary' : '';
            ?>
            <div class="col-lg-3 col-md-4 col-6">
                <a href="<?= BASE_URL ?>services/motion/<?= $key ?>" class="text-decoration-none" title="Bespoke Motion Graphics &amp; Video in <?= htmlspecialchars($loc['name']) ?>">
                    <div class="p-3 border-3 border border-dark rounded-4 h-100 bg-white transition-all text-dark hover-translate-up <?= $activeClass ?>" style="box-shadow: 4px 4px 0px #111;">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <span class="fw-800 text-uppercase font-10 tracking-widest text-muted" style="font-size: 8px;"><?= $loc['type'] === 'domestic' ? '🇮🇳 DOMESTIC' : '🌐 GLOBAL' ?></span>
                            <i class="bi bi-arrow-up-right font-10"></i>
                        </div>
                        <h3 class="h6 fw-900 mb-1" style="font-size: 14px;"><?= $loc['name'] ?></h3>
                        <span class="text-muted d-block text-truncate" style="font-size: 10px; font-weight: 700;"><?= $loc['desc'] ?></span>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<style>
.hover-translate-up {
    transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275), box-shadow 0.3s ease;
}
.hover-translate-up:hover {
    transform: translateY(-5px);
    box-shadow: 6px 6px 0px #111 !important;
}
</style>
