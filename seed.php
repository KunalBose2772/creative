<?php
/**
 * Crea8ve Cool — Database Seed Script
 * Run this file once to populate the database with high-fidelity service and work data.
 */

$_SERVER['HTTP_HOST'] = 'localhost'; // Mock for CLI
require_once 'app/config/config.php';
require_once 'app/core/Database.php';

try {
    $db = Database::getInstance();
    echo "Connected to database successfully.\n";

    // Clear existing data (Optional, use with caution)
    $db->exec("SET FOREIGN_KEY_CHECKS = 0;");
    $db->exec("TRUNCATE TABLE service_packages;");
    $db->exec("TRUNCATE TABLE service_features;");
    $db->exec("TRUNCATE TABLE services;");
    $db->exec("TRUNCATE TABLE works;");
    $db->exec("TRUNCATE TABLE testimonials;");
    $db->exec("SET FOREIGN_KEY_CHECKS = 1;");
    echo "Cleared existing data.<br>";

    // --- SEED SERVICES ---
    $services = [
        [
            'slug' => 'website',
            'title' => 'Product Engineering & Web Design',
            'color' => '#FFB800',
            'icon' => 'bi-layout-text-window-reverse',
            'desc' => 'High-performance, bento-style, conversion-optimized digital products.',
            'meta_title' => 'Premium Web Development & UI/UX Design Agency | India',
            'meta_description' => 'Stunning, high-performance websites built to convert. We offer bento-style modern web design and development for brands looking for premium digital presence.',
            'features' => [
                ['icon' => 'bi-lightning', 'title' => 'Fast Loading', 'desc' => 'LCP < 1.5s for maximum SEO ranking.'],
                ['icon' => 'bi-phone', 'title' => 'Responsive', 'desc' => 'Pixel perfect on every device.'],
                ['icon' => 'bi-code-slash', 'title' => 'Clean Architecture', 'desc' => 'Scalable code built for future growth.'],
                ['icon' => 'bi-graph-up', 'title' => 'Conversion Optimized', 'desc' => 'Psychological triggers to drive leads.']
            ],
            'packages' => [
                ['name' => 'Premium Corporate', 'price' => '₹65,000', 'period' => 'Starting', 'features' => '10-15 Pages, Custom UI/UX, SEO Ready, Contact Integration'],
                ['name' => 'Business Scale', 'price' => '₹1,25,000', 'period' => 'Starting', 'features' => 'Advanced Animations, Speed Mastery, CMS Dashboard, Brand Assets'],
                ['name' => 'SaaS MVP', 'price' => '₹2,50,000', 'period' => 'Starting', 'features' => 'Full Logic, Database, Auth, Cloud Deployment']
            ]
        ],
        [
            'slug' => 'seo',
            'title' => 'Industrial SEO Scaling',
            'color' => '#FF007A',
            'icon' => 'bi-graph-up-arrow',
            'desc' => 'Data-driven SEO strategies that rank you higher and bring in qualified organic traffic.',
            'meta_title' => 'Best SEO Agency in India | Rank #1 on Google Organically',
            'meta_description' => 'Dominate search results with our industrial SEO scaling services. We offer technical SEO, content strategy, and quality backlink building.',
            'features' => [
                ['icon' => 'bi-search', 'title' => 'Keyword Mastery', 'desc' => 'Targeting high-intent search terms.'],
                ['icon' => 'bi-bar-chart', 'title' => 'Data Analytics', 'desc' => 'Weekly reports on growth and traffic.'],
                ['icon' => 'bi-link', 'title' => 'Authority Building', 'desc' => 'High-quality backlink outreach.'],
                ['icon' => 'bi-file-text', 'title' => 'Content Strategy', 'desc' => '2000+ word authority articles.']
            ],
            'packages' => [
                ['name' => 'Local SEO', 'price' => '₹35,000', 'period' => 'Monthly', 'features' => 'Google Maps Polish, 10 Keywords, On-Page SEO, Monthly Report'],
                ['name' => 'Growth Plan', 'price' => '₹75,000', 'period' => 'Monthly', 'features' => 'Professional Blogging, 30 Keywords, Backlink Outreach, Competitor Audit']
            ]
        ],
        [
            'slug' => 'marketing',
            'title' => 'Performance Ads & Funnels',
            'color' => '#FF7A18',
            'icon' => 'bi-bullseye',
            'desc' => 'ROI-focused Google & Meta ad campaigns engineered to maximize every dollar spent.',
            'meta_title' => 'Performance Marketing & Google Ads Management Agency India',
            'meta_description' => 'Get guaranteed ROAS with our performance marketing services. Expert Google Ads, Meta Ads, and sales funnel optimization.',
            'features' => [
                ['icon' => 'bi-megaphone', 'title' => 'Ad Design', 'desc' => 'Creatives that stop the scroll.'],
                ['icon' => 'bi-funnel', 'title' => 'Sales Funnels', 'desc' => 'Landing pages built for 10% conversion.'],
                ['icon' => 'bi-cpu', 'title' => 'Daily Optimization', 'desc' => 'Constant tweaks to lower CPA.'],
                ['icon' => 'bi-people', 'title' => 'Targeting', 'desc' => 'Hyper-specific audience segmentation.']
            ],
            'packages' => [
                ['name' => 'Starter Ads', 'price' => '₹25,000', 'period' => 'Monthly Fee', 'features' => 'Single Platform, Basic Creative, Lead Tracking, Monthly Review'],
                ['name' => 'Growth Strategy', 'price' => '₹60,000', 'period' => 'Monthly Fee', 'features' => 'Google + Meta, Video Ad Strategy, Retargeting Flow, Weekly Sync']
            ]
        ],
        [
            'slug' => 'automation',
            'title' => 'AI & Business Automation',
            'color' => '#6A5AE0',
            'icon' => 'bi-gear-wide-connected',
            'desc' => 'Smart workflows and CRM integrations that save hours and scale operations.',
            'meta_title' => 'Custom ERP & AI Business Automation Systems India',
            'meta_description' => 'Scale your business with custom ERP and AI automation. We integrate LLMs and smart workflows into your business.',
            'features' => [
                ['icon' => 'bi-robot', 'title' => 'AI Chatbots', 'desc' => '24/7 customer support and lead qualification.'],
                ['icon' => 'bi-layers', 'title' => 'Custom ERP', 'desc' => 'Bespoke business operating systems.'],
                ['icon' => 'bi-shuffle', 'title' => 'Workflow Sync', 'desc' => 'Automate data moving between apps.'],
                ['icon' => 'bi-shield-lock', 'title' => 'Secure Ops', 'desc' => 'Bank-grade security for your data.']
            ],
            'packages' => [
                ['name' => 'AI Integration', 'price' => '₹75,000', 'period' => 'Starting', 'features' => 'LLM Chatbots, Automated Qualification, Document AI'],
                ['name' => 'Custom ERP', 'price' => '₹1,50,000', 'period' => 'Starting', 'features' => 'Inventory, Sales, HR, Advanced Reporting']
            ]
        ],
        [
            'slug' => 'creative',
            'title' => 'Creative & Brand Strategy',
            'color' => '#28C840',
            'icon' => 'bi-camera-reels',
            'desc' => 'Visual authority through cinematic production and brand storytelling.',
            'meta_title' => 'Brand Films & Influencer Marketing Agency India',
            'meta_description' => 'Premium brand production, professional photo shoots, and viral influencer marketing campaigns.',
            'features' => [
                ['icon' => 'bi-camera', 'title' => 'Photo Shoots', 'desc' => 'Professional product and lifestyle visuals.'],
                ['icon' => 'bi-play-btn', 'title' => 'Brand Films', 'desc' => 'Cinematic storytelling for your business.'],
                ['icon' => 'bi-person-badge', 'title' => 'Influencer Ops', 'desc' => 'Managed creator partnerships for reach.'],
                ['icon' => 'bi-brush', 'title' => 'Brand PR', 'desc' => 'Media placements and viral storytelling.']
            ],
            'packages' => [
                ['name' => 'Content Engine', 'price' => '₹50,000', 'period' => 'Monthly', 'features' => '15 Edited Reels, 1 Photo Shoot, Monthly Strategy'],
                ['name' => 'Viral Growth', 'price' => '₹1,50,000', 'period' => 'Starting', 'features' => 'Influencer Campaign, PR Placement, 3 Cinematic Brand Films']
            ]
        ]
    ];

    foreach ($services as $s) {
        $stmt = $db->prepare("INSERT INTO services (slug, title, color, icon, description, meta_title, meta_description) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$s['slug'], $s['title'], $s['color'], $s['icon'], $s['desc'], $s['meta_title'], $s['meta_description']]);
        $service_id = $db->lastInsertId();

        foreach ($s['features'] as $f) {
            $stmt_f = $db->prepare("INSERT INTO service_features (service_id, icon, title, description) VALUES (?, ?, ?, ?)");
            $stmt_f->execute([$service_id, $f['icon'], $f['title'], $f['desc']]);
        }

        foreach ($s['packages'] as $p) {
            $stmt_p = $db->prepare("INSERT INTO service_packages (service_id, name, price, period, features) VALUES (?, ?, ?, ?, ?)");
            $stmt_p->execute([$service_id, $p['name'], $p['price'], $p['period'], $p['features']]);
        }
    }
    echo "Services, Features, and Packages seeded.<br>";

    // --- SEED WORKS ---
    $works = [
        ['title' => 'NexaRetail E-Commerce', 'tag' => 'Web Design', 'image' => 'work1.webp', 'result' => '+340% Conversions', 'link' => '#'],
        ['title' => 'BrightSpace SaaS Launch', 'tag' => 'Product Engineering', 'image' => 'work2.webp', 'result' => '₹12L ARR in 90 Days', 'link' => '#'],
        ['title' => 'UrbanEdge Real Estate SEO', 'tag' => 'SEO', 'image' => 'work3.webp', 'result' => '#1 for Prime Keywords', 'link' => '#'],
        ['title' => 'Titan Industrial ERP', 'tag' => 'Automation', 'image' => 'titan_case_study.webp', 'result' => '40% Cost Reduction', 'link' => '#'],
        ['title' => 'SwiftPay Brand Shoot', 'tag' => 'Creative Ops', 'image' => 'newsletter.webp', 'result' => '5M+ Viral Reach', 'link' => '#']
    ];

    foreach ($works as $w) {
        $stmt = $db->prepare("INSERT INTO works (title, tag, image, result, link) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$w['title'], $w['tag'], $w['image'], $w['result'], $w['link']]);
    }
    echo "Portfolio seeded.<br>";

    // --- SEED TESTIMONIALS ---
    $testimonials = [
        ['quote' => 'Crea8ve Cool transformed our entire online presence. Our leads tripled within the first two months!', 'name' => 'Aditya Sharma', 'company' => 'Founder, NexaRetail'],
        ['quote' => 'Incredibly professional team. The website they built for us converted at 4x our previous rate.', 'name' => 'Priya Mehta', 'company' => 'CEO, BrightSpace SaaS'],
        ['quote' => 'Their SEO work got us to page one for our main keywords in under 90 days. Phenomenal results.', 'name' => 'Rohan Kapoor', 'company' => 'Director, UrbanEdge Homes']
    ];

    foreach ($testimonials as $t) {
        $stmt = $db->prepare("INSERT INTO testimonials (quote, name, company) VALUES (?, ?, ?)");
        $stmt->execute([$t['quote'], $t['name'], $t['company']]);
    }
    echo "Testimonials seeded.<br>";

    echo "<strong>Database Seeding Completed Successfully!</strong>";

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
