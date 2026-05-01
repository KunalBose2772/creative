<?php 
$data['page_hero_badge'] = 'Partner Proof';
$data['page_title_html'] = 'Real Results. <br><span class="gradient-text">Absolute Success.</span>';
$data['page_subtitle'] = "We don't just build software; we build partnerships that last. See what our partners have to say about the Crea8ve Cool impact.";

// Visual element for testimonials hero
ob_start(); ?>
<div class="testi-hero-visual" style="--accent: <?= $data['hero_color'] ?>;">
    <div class="testi-card-mini t-1" data-aos="fade-left" data-aos-delay="200">
        <div class="stars">★★★★★</div>
        <p>"Leads tripled in 60 days!"</p>
    </div>
    <div class="testi-card-mini t-2" data-aos="fade-left" data-aos-delay="400">
        <div class="stars">★★★★★</div>
        <p>"The best UI we've ever seen."</p>
    </div>
    <div class="main-avatar shadow-lg border border-3 border-dark" data-aos="zoom-in">
        <i class="bi bi-chat-quote-fill text-white fs-3"></i>
    </div>
</div>
<?php 
$data['page_hero_visual'] = ob_get_clean();
require_once APP_PATH . '/views/components/page_hero.php'; 
?>

<!-- Testimonials Grid -->
<section class="section-padding bg-light">
    <div class="container" style="max-width: 1240px;">
        <div class="row g-4">
            <?php 
            $all_testimonials = [
                ['quote' => 'Crea8ve Cool transformed our entire online presence. Our leads tripled within the first two months! The technical depth they have is unmatched.', 'name' => 'Aditya Sharma', 'company' => 'Founder, NexaRetail', 'image' => 'A'],
                ['quote' => 'Incredibly professional team. The website they built for us converted at 4x our previous rate. Their bento-style design is a masterpiece.', 'name' => 'Priya Mehta', 'company' => 'CEO, BrightSpace SaaS', 'image' => 'P'],
                ['quote' => 'Their SEO work got us to page one for our main keywords in under 90 days. Phenomenal results and incredibly easy to work with.', 'name' => 'Rohan Kapoor', 'company' => 'Director, UrbanEdge Homes', 'image' => 'R'],
                ['quote' => 'We needed a complex ERP solution in a tight timeframe. Not only did they deliver, but the automation saved us over 40 man-hours a week.', 'name' => 'Suresh Nair', 'company' => 'Operations, LogiSync India', 'image' => 'S'],
                ['quote' => 'The motion design and animations they implemented made our brand feel 5 years ahead of the competition. Worth every rupee.', 'name' => 'Ananya Iyer', 'company' => 'Marketing Lead, VogueVibe', 'image' => 'A'],
                ['quote' => 'Fast, reliable, and ROI-obsessed. They are the only agency we trust with our performance marketing budget.', 'name' => 'Vikram Singh', 'company' => 'Managing Director, TitanScale', 'image' => 'V'],
            ];

            foreach ($all_testimonials as $i => $t):
            ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?= $i * 100 ?>">
                <div class="testimonial-card-v2 p-5 h-100 bg-white border border-3 border-dark shadow-punchy-sm rounded-5 d-flex flex-column">
                    <div class="stars text-accent-dynamic mb-4" style="font-size: 14px;">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p class="fs-5 fw-600 text-dark mb-5 flex-grow-1 lh-base">"<?= htmlspecialchars($t['quote']) ?>"</p>
                    <div class="d-flex align-items-center gap-3">
                        <div class="av-testi bg-dark text-white fw-900 rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <?= $t['image'] ?>
                        </div>
                        <div>
                            <h5 class="fw-900 mb-0 small"><?= htmlspecialchars($t['name']) ?></h5>
                            <span class="small opacity-50 fw-bold letter-spacing-1"><?= htmlspecialchars($t['company']) ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Call to Action -->
<?php require_once APP_PATH . '/views/components/cta.php'; ?>

<style>
.testi-hero-visual {
    position: relative;
    width: 320px;
    height: 320px;
    margin: 0 auto;
}
.main-avatar {
    width: 80px;
    height: 80px;
    background: var(--accent);
    border-radius: 50%;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 5;
}
.testi-card-mini {
    position: absolute;
    background: white;
    padding: 15px 20px;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    border: 2px solid #eee;
    width: 220px;
}
.testi-card-mini .stars { color: #ffc107; font-size: 12px; margin-bottom: 5px; }
.testi-card-mini p { font-size: 13px; font-weight: 800; color: #111; margin: 0; }

.t-1 { top: 0; right: -40px; }
.t-2 { bottom: 0; left: -40px; }

.testimonial-card-v2 {
    transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}
.testimonial-card-v2:hover {
    transform: translateY(-8px);
    box-shadow: 12px 12px 0px var(--text-dark);
}
.shadow-punchy-sm {
    box-shadow: 6px 6px 0px var(--text-dark);
}
</style>
