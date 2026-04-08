<?php
class HomeController {
    public function index() {
        $data = [
            'title' => 'Crea8ve Cool — We Build Websites That Drive Real Business Growth',
            'meta_description' => 'Crea8ve Cool is a premium digital agency delivering high-performance web design, SEO, paid ads, and automation systems that convert visitors into customers.',
            'stats' => [
                ['value' => '50', 'suffix' => '+', 'label' => 'Projects Completed'],
                ['value' => '30', 'suffix' => '+', 'label' => 'Happy Clients'],
                ['value' => '200', 'suffix' => '%', 'label' => 'Avg. Growth'],
                ['value' => '5', 'suffix' => '★', 'label' => 'Average Rating'],
            ],
            'services' => [
                ['icon' => 'bi-layout-text-window-reverse', 'title' => 'Web Design', 'desc' => 'Stunning, conversion-optimized websites built to impress and perform across every device.'],
                ['icon' => 'bi-search', 'title' => 'SEO', 'desc' => 'Data-driven SEO strategies that rank you higher and bring in qualified organic traffic.'],
                ['icon' => 'bi-megaphone', 'title' => 'Paid Ads', 'desc' => 'ROI-focused Google & Meta ad campaigns engineered to maximize every dollar spent.'],
                ['icon' => 'bi-gear-wide-connected', 'title' => 'Automation', 'desc' => 'Smart workflows and CRM integrations that save hours and scale your operations effortlessly.'],
            ],
            'works' => [
                ['image' => 'work1.webp', 'title' => 'E-Commerce Revamp', 'tag' => 'Web Design', 'result' => '+340% Conversions'],
                ['image' => 'work2.webp', 'title' => 'SaaS Product Launch', 'tag' => 'SEO + Paid Ads', 'result' => '+220% Organic Traffic'],
                ['image' => 'work3.webp', 'title' => 'Local Business Scale', 'tag' => 'Google Ads', 'result' => '5x ROAS Achieved'],
            ],
            'process' => [
                ['step' => '01', 'title' => 'Strategy', 'desc' => 'We audit your brand, research competitors, and craft a clear roadmap for growth.'],
                ['step' => '02', 'title' => 'Design & Build', 'desc' => 'Our team designs pixel-perfect interfaces and engineers high-performance backends.'],
                ['step' => '03', 'title' => 'Launch & Scale', 'desc' => 'We launch, monitor performance, and continuously optimize for maximum ROI.'],
            ],
            'why' => [
                ['icon' => 'bi-bullseye', 'title' => 'Conversion-Focused', 'desc' => 'Every design decision is driven by one goal — turning visitors into paying customers.'],
                ['icon' => 'bi-lightning-charge', 'title' => 'Fast Delivery', 'desc' => 'We ship fast without sacrificing quality, keeping your business moving forward.'],
                ['icon' => 'bi-palette', 'title' => 'Modern UI/UX', 'desc' => 'Premium, trend-forward designs that make your brand impossible to ignore.'],
                ['icon' => 'bi-layers', 'title' => 'Full-Stack Solutions', 'desc' => 'From design to DevOps — we handle everything so you can focus on what matters.'],
            ],
            'testimonials' => [
                ['quote' => 'Crea8ve Cool transformed our entire online presence. Our leads tripled within the first two months!', 'name' => 'Aditya Sharma', 'company' => 'Founder, NexaRetail'],
                ['quote' => 'Incredibly professional team. The website they built for us converted at 4x our previous rate.', 'name' => 'Priya Mehta', 'company' => 'CEO, BrightSpace SaaS'],
                ['quote' => 'Their SEO work got us to page one for our main keywords in under 90 days. Phenomenal results.', 'name' => 'Rohan Kapoor', 'company' => 'Director, UrbanEdge Homes'],
            ],
            'clients' => ['techcorp', 'nexaretail', 'brightspace', 'urbanedge', 'swiftpay', 'cloudpeak'],
        ];

        require_once APP_PATH . '/views/layouts/layout.php';
    }
}
