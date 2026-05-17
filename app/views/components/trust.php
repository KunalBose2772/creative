<?php
$ecosystem_tools = [
    [
        'name' => 'Next.js',
        'url' => 'https://cdn.simpleicons.org/nextdotjs/000000',
        'glow' => '#000000',
        'type' => 'SaaS Web Engineering',
        'link' => 'https://nextjs.org'
    ],
    [
        'name' => 'React & Native',
        'url' => 'https://cdn.simpleicons.org/react/61DAFB',
        'glow' => '#61DAFB',
        'type' => 'App Development',
        'link' => 'https://react.dev'
    ],
    [
        'name' => 'Expo',
        'url' => 'https://cdn.simpleicons.org/expo/000020',
        'glow' => '#000020',
        'type' => 'Universal Mobile SDK',
        'link' => 'https://expo.dev'
    ],
    [
        'name' => 'DaVinci Resolve',
        'url' => BASE_URL . 'public/assets/images/davinci-resolve.webp',
        'glow' => '#1460aa',
        'type' => 'Cinematic Grading',
        'link' => 'https://www.blackmagicdesign.com/products/davinciresolve'
    ],
    [
        'name' => 'Adobe Premiere',
        'url' => 'https://cdn.simpleicons.org/adobepremierepro/EA77FF',
        'glow' => '#ea77ff',
        'type' => 'Video Production',
        'link' => 'https://www.adobe.com/products/premiere.html'
    ],
    [
        'name' => 'After Effects',
        'url' => 'https://cdn.simpleicons.org/adobeaftereffects/9999FF',
        'glow' => '#9999ff',
        'type' => '3D VFX & Motion',
        'link' => 'https://www.adobe.com/products/aftereffects.html'
    ],
    [
        'name' => 'SEMrush',
        'url' => 'https://cdn.simpleicons.org/semrush/FF642D',
        'glow' => '#FF642D',
        'type' => 'SEO Dominance',
        'link' => 'https://www.semrush.com'
    ],
    [
        'name' => 'Ahrefs',
        'url' => 'https://cdn.simpleicons.org/ahrefs/FFB11B',
        'glow' => '#FFB11B',
        'type' => 'Search Intelligence',
        'link' => 'https://ahrefs.com'
    ],
    [
        'name' => 'Shopify',
        'url' => 'https://cdn.simpleicons.org/shopify/96bf48',
        'glow' => '#96bf48',
        'type' => 'E-Commerce Scale',
        'link' => 'https://www.shopify.com'
    ],
    [
        'name' => 'WordPress',
        'url' => 'https://cdn.simpleicons.org/wordpress/21759B',
        'glow' => '#21759B',
        'type' => 'CMS Development',
        'link' => 'https://wordpress.org'
    ],
    [
        'name' => 'Google Ads',
        'url' => 'https://cdn.simpleicons.org/googleads/4285F4',
        'glow' => '#4285F4',
        'type' => 'Paid Advertising',
        'link' => 'https://ads.google.com'
    ],
    [
        'name' => 'Meta Ads',
        'url' => 'https://cdn.simpleicons.org/meta/0064F1',
        'glow' => '#0064F1',
        'type' => 'Social Distribution',
        'link' => 'https://ads.facebook.com'
    ],
    [
        'name' => 'Stripe Payments',
        'is_inline' => true,
        'glow' => '#635BFF',
        'type' => 'Secure Payments',
        'link' => 'https://stripe.com'
    ],
    [
        'name' => 'Figma',
        'url' => 'https://cdn.simpleicons.org/figma/F24E1E',
        'glow' => '#F24E1E',
        'type' => 'UI/UX Blueprinting',
        'link' => 'https://www.figma.com'
    ],
    [
        'name' => 'Webflow',
        'url' => 'https://cdn.simpleicons.org/webflow/4353FF',
        'glow' => '#4353FF',
        'type' => 'No-Code Platforms',
        'link' => 'https://webflow.com'
    ],
    [
        'name' => 'Canva',
        'url' => 'https://cdn.simpleicons.org/canva/00C4CC',
        'glow' => '#00C4CC',
        'type' => 'Collaborative Assets',
        'link' => 'https://www.canva.com'
    ],
    [
        'name' => 'Razorpay',
        'url' => 'https://cdn.simpleicons.org/razorpay/3395FF',
        'glow' => '#3395FF',
        'type' => 'Payment Gateway',
        'link' => 'https://razorpay.com'
    ],
    [
        'name' => 'PhonePe',
        'url' => 'https://cdn.simpleicons.org/phonepe/5f259f',
        'glow' => '#5f259f',
        'type' => 'UPI Payments',
        'link' => 'https://phonepe.com'
    ],
    [
        'name' => 'PHP Engineering',
        'url' => 'https://cdn.simpleicons.org/php/777BB4',
        'glow' => '#777BB4',
        'type' => 'Backend Engineering',
        'link' => 'https://php.net'
    ]
];

// Double array for continuous infinite scroll loop
$display_tools = array_merge($ecosystem_tools, $ecosystem_tools, $ecosystem_tools);
?>

<section class="trust-section py-5 position-relative" style="background: #0b0b0d; border-top: 3px solid #000; border-bottom: 3px solid #000;" data-aos="fade-up">
    <!-- Subtle grid texture backdrop -->
    <div class="absolute-grid-overlay opacity-10"></div>

    <div class="container-fluid px-md-5" style="max-width: 1400px;">
        <div class="row align-items-center g-4">
            
            <!-- Left Side: Neo-brutalist Console Title -->
            <div class="col-lg-3 col-md-4 col-12 text-center text-md-start position-relative z-3 border-end-neo py-2">
                <div class="d-flex align-items-center justify-content-center justify-content-md-start gap-2 mb-2">
                    <span class="trust-live-pulse"></span>
                    <span style="font-size: 11px; text-transform: uppercase; letter-spacing: 2.5px; font-weight: 900; color: #888;">Growth Ecosystem</span>
                </div>
                <h2 class="trust-headline text-white m-0">Platforms We <br><span class="gradient-text">Build & Scale on.</span></h2>
            </div>

            <!-- Right Side: Medallion Marquee Track -->
            <div class="col-lg-9 col-md-8 col-12 ps-md-4 position-relative overflow-hidden z-1">
                <div class="trust-marquee-container">
                    <!-- Glassy edge gradients -->
                    <div class="marquee-fade-left"></div>
                    <div class="marquee-fade-right"></div>
                    
                    <div class="trust-marquee-track">
                        <?php foreach($display_tools as $tool): ?>
                            <a href="<?= $tool['link'] ?>" target="_blank" rel="noopener noreferrer" class="trust-medallion-link" style="text-decoration: none;" title="Explore <?= $tool['name'] ?> integration">
                                <div class="trust-medallion-badge" 
                                     title="<?= $tool['name'] ?> - <?= $tool['type'] ?>"
                                     style="--brand-glow: <?= $tool['glow'] ?>;">
                                    <div class="medallion-inner">
                                        <?php if (isset($tool['is_inline']) && $tool['is_inline']): ?>
                                            <!-- Bulletproof inline SVG logo for Stripe -->
                                            <svg viewBox="0 0 40 40" class="brand-vector-symbol" style="width: 32px; height: 32px; fill: #635BFF;">
                                                <path d="M19.1 13.9c0-1.2 1-1.7 2.6-1.7 1.8 0 3.8.7 5.1 1.4l1.3-4.5c-1.3-.6-3.4-1.2-5.7-1.2-5 0-8.3 2.5-8.3 7 0 7.4 10.1 6.2 10.1 9.4 0 1.4-1.2 1.9-3 1.9-2.2 0-4.6-1-5.9-1.8l-1.3 4.5c1.6.8 4.1 1.5 6.6 1.5 5.3 0 8.7-2.5 8.7-7.2-.1-7.7-10.2-6.5-10.1-9z"/>
                                            </svg>
                                        <?php else: ?>
                                            <img src="<?= $tool['url'] ?>" alt="<?= $tool['name'] ?>" title="<?= $tool['name'] ?>" class="brand-vector-symbol" loading="lazy" width="64" height="64">
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
/* Grid backdrop */
.absolute-grid-overlay {
    position: absolute;
    inset: 0;
    background-image: radial-gradient(rgba(255, 255, 255, 0.15) 1px, transparent 1px);
    background-size: 24px 24px;
    pointer-events: none;
}

/* Console Title Border */
@media (min-width: 768px) {
    .border-end-neo {
        border-right: 3px dashed #222;
        padding-right: 30px;
    }
}

.trust-headline {
    font-size: 26px;
    font-weight: 900;
    line-height: 1.15;
    letter-spacing: -0.02em;
}

/* Live indicators */
.trust-live-pulse {
    width: 8px;
    height: 8px;
    background: #28C840;
    border-radius: 50%;
    display: inline-block;
    box-shadow: 0 0 0 0 rgba(40, 200, 64, 0.7);
    animation: livePulse 1.5s infinite;
}

/* Infinite Marquee Track */
.trust-marquee-container {
    position: relative;
    width: 100%;
    overflow: hidden;
    white-space: nowrap;
    padding: 15px 0;
}
.marquee-fade-left {
    position: absolute;
    top: 0; bottom: 0; left: 0;
    width: 100px;
    background: linear-gradient(to right, #0b0b0d, transparent);
    z-index: 2;
    pointer-events: none;
}
.marquee-fade-right {
    position: absolute;
    top: 0; bottom: 0; right: 0;
    width: 100px;
    background: linear-gradient(to left, #0b0b0d, transparent);
    z-index: 2;
    pointer-events: none;
}

.trust-marquee-track {
    display: flex;
    gap: 35px;
    width: max-content;
    animation: trustMarqueeScroll 55s linear infinite;
}
.trust-marquee-track:hover {
    animation-play-state: paused;
}

@keyframes trustMarqueeScroll {
    0% { transform: translateX(0); }
    100% { transform: translateX(-33.333333%); }
}

/* Enamel Pin Medallions */
.trust-medallion-badge {
    width: 68px;
    height: 68px;
    background: #FFFFFF;
    border: 3px solid #000000;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 4px 4px 0px #000000;
    transition: all 0.35s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    cursor: pointer;
    flex-shrink: 0;
}
.medallion-inner {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 14px;
}
.brand-vector-symbol {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
    transition: transform 0.3s;
}

/* Enamel pin hover effects */
.trust-medallion-badge:hover {
    transform: translateY(-5px) scale(1.15);
    box-shadow: 6px 6px 0px var(--brand-glow);
    border-color: var(--brand-glow);
}
.trust-medallion-badge:hover .brand-vector-symbol {
    transform: scale(1.1);
}
</style>
