<?php
// Establish a dense, pristine list of high-end Google testimonials
$fallbackTestimonials = [
    [
        'name' => 'Divya Menon',
        'company' => 'DOCTOR',
        'quote' => 'Soft, heartfelt, and beautiful portraits. They made us feel so comfortable during the entire shoot. Highly skilled creative directors.',
        'color' => '#0D9488' // Teal
    ],
    [
        'name' => 'Arjun Singh',
        'company' => 'CORPORATE VP',
        'quote' => 'Exceptional production quality. They delivered a video reel package that looked like a high-end film. Very impressed with the results.',
        'color' => '#2563EB' // Blue
    ],
    [
        'name' => 'Rahul Verma',
        'company' => 'TECH FOUNDER',
        'quote' => 'The quality of work is world-class. Worth every rupee for the beautiful brand assets they provided. A seamless creative experience.',
        'color' => '#EA580C' // Orange
    ],
    [
        'name' => 'Rohan Rao',
        'company' => 'CREATIVE DIRECTOR',
        'quote' => 'Technically superior work. Best in the creative agency collection. The results are breathtaking, hyper-fluid, and highly optimized.',
        'color' => '#7C3AED' // Purple
    ],
    [
        'name' => 'Sneha Kapoor',
        'company' => 'FASHION DESIGNER',
        'quote' => 'Their artistic vision is unmatched. They don\'t just take photos; they tell a story through their lens. Truly world-class andTimeless.',
        'color' => '#DB2777' // Pink
    ],
    [
        'name' => 'Vikram Malhotra',
        'company' => 'BUSINESS OWNER',
        'quote' => 'Incredible attention to detail and a very professional team. Highly recommended for premium brand films and campaigns.',
        'color' => '#059669' // Green
    ],
    [
        'name' => 'Meera Iyer',
        'company' => 'CHIEF ARCHITECT',
        'quote' => 'Sophisticated, elegant, and timeless. They captured the true soul of our spatial structure in India. Out of this world quality.',
        'color' => '#DC2626' // Red
    ],
    [
        'name' => 'Ananya Gupta',
        'company' => 'FOUNDER & CEO',
        'quote' => 'They transformed our entire digital launch. The video reels got us 2.4M organic views in a week! Simply spectacular execution.',
        'color' => '#4F46E5' // Indigo
    ]
];

// Split evenly into Row 1 and Row 2 for the dual-strip marquee
$row1 = array_slice($fallbackTestimonials, 0, 4);
$row2 = array_slice($fallbackTestimonials, 4, 4);
?>

<section id="testimonials" class="py-5 bg-white overflow-hidden" style="border-top: 2.5px solid #111111; position: relative;">
    <div class="container py-4" style="max-width:1300px;">
        
        <!-- Section Header (Neo-Brutalist Alignment) -->
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-5 pb-4" style="border-bottom: 2px solid #111;" data-aos="fade-up">
            <div class="section-header mb-0">
                <span class="section-tag mb-3">Social Proof</span>
                <h2 class="section-title m-0" style="font-family: 'Montserrat', sans-serif; font-weight: 800; color: #111; line-height: 1.1; letter-spacing: -1px;">
                    Client <span class="gradient-text">Reviews.</span>
                </h2>
            </div>
            <p class="mt-3 mt-md-0 text-muted" style="font-size: 17px; max-width: 520px; font-weight: 500; line-height: 1.6;">
                Don't just take our word for it. Read verified feedback from industry leaders and high-growth brands who trust us with their vision.
            </p>
        </div>

    </div>

    <!-- Dual Strip Marquee Container -->
    <div class="marquee-master-container mt-4">
        
        <!-- ROW 1: Scrolling Left -->
        <div class="testimonial-marquee-wrapper mb-4" data-aos="fade-up">
            <div class="testimonial-marquee marquee-left">
                
                <!-- Content Block 1 -->
                <div class="marquee-content">
                    <?php foreach ($row1 as $t): ?>
                    <div class="google-testimonial-card">
                        <div class="card-top-bar d-flex justify-content-between align-items-center mb-3">
                            <!-- Vector Google Logo -->
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                                <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                                <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l3.66-2.85z" fill="#FBBC05"/>
                                <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.85c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                            </svg>
                            <!-- Stars block -->
                            <div class="stars-rating-block">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                        </div>

                        <p class="testimonial-quote-text">
                            "<?= htmlspecialchars($t['quote']) ?>"
                        </p>

                        <div class="card-footer-reviewer d-flex align-items-center gap-3 mt-4">
                            <div class="reviewer-avatar font-clash" style="background: <?= $t['color'] ?>;">
                                <?= strtoupper(substr($t['name'], 0, 1)) ?>
                            </div>
                            <div class="text-start">
                                <h3 class="m-0 reviewer-name d-flex align-items-center">
                                    <?= htmlspecialchars($t['name']) ?>
                                    <i class="bi bi-patch-check-fill text-primary ms-1.5" style="font-size: 13.5px;" title="Verified Reviewer"></i>
                                </h3>
                                <p class="m-0 reviewer-company monospace text-muted"><?= htmlspecialchars($t['company']) ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <!-- Duplicate Block 1 for Infinite Scroll -->
                <div class="marquee-content" aria-hidden="true">
                    <?php foreach ($row1 as $t): ?>
                    <div class="google-testimonial-card">
                        <div class="card-top-bar d-flex justify-content-between align-items-center mb-3">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                                <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                                <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l3.66-2.85z" fill="#FBBC05"/>
                                <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.85c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                            </svg>
                            <div class="stars-rating-block">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                        </div>

                        <p class="testimonial-quote-text">
                            "<?= htmlspecialchars($t['quote']) ?>"
                        </p>

                        <div class="card-footer-reviewer d-flex align-items-center gap-3 mt-4">
                            <div class="reviewer-avatar font-clash" style="background: <?= $t['color'] ?>;">
                                <?= strtoupper(substr($t['name'], 0, 1)) ?>
                            </div>
                            <div class="text-start">
                                <h3 class="m-0 reviewer-name d-flex align-items-center">
                                    <?= htmlspecialchars($t['name']) ?>
                                    <i class="bi bi-patch-check-fill text-primary ms-1.5" style="font-size: 13.5px;" title="Verified Reviewer"></i>
                                </h3>
                                <p class="m-0 reviewer-company monospace text-muted"><?= htmlspecialchars($t['company']) ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>

        <!-- ROW 2: Scrolling Right -->
        <div class="testimonial-marquee-wrapper" data-aos="fade-up" data-aos-delay="150">
            <div class="testimonial-marquee marquee-right">
                
                <!-- Content Block 2 -->
                <div class="marquee-content">
                    <?php foreach ($row2 as $t): ?>
                    <div class="google-testimonial-card">
                        <div class="card-top-bar d-flex justify-content-between align-items-center mb-3">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                                <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                                <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l3.66-2.85z" fill="#FBBC05"/>
                                <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.85c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                            </svg>
                            <div class="stars-rating-block">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                        </div>

                        <p class="testimonial-quote-text">
                            "<?= htmlspecialchars($t['quote']) ?>"
                        </p>

                        <div class="card-footer-reviewer d-flex align-items-center gap-3 mt-4">
                            <div class="reviewer-avatar font-clash" style="background: <?= $t['color'] ?>;">
                                <?= strtoupper(substr($t['name'], 0, 1)) ?>
                            </div>
                            <div class="text-start">
                                <h3 class="m-0 reviewer-name d-flex align-items-center">
                                    <?= htmlspecialchars($t['name']) ?>
                                    <i class="bi bi-patch-check-fill text-primary ms-1.5" style="font-size: 13.5px;" title="Verified Reviewer"></i>
                                </h3>
                                <p class="m-0 reviewer-company monospace text-muted"><?= htmlspecialchars($t['company']) ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <!-- Duplicate Block 2 for Infinite Scroll -->
                <div class="marquee-content" aria-hidden="true">
                    <?php foreach ($row2 as $t): ?>
                    <div class="google-testimonial-card">
                        <div class="card-top-bar d-flex justify-content-between align-items-center mb-3">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                                <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                                <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l3.66-2.85z" fill="#FBBC05"/>
                                <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.85c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                            </svg>
                            <div class="stars-rating-block">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                        </div>

                        <p class="testimonial-quote-text">
                            "<?= htmlspecialchars($t['quote']) ?>"
                        </p>

                        <div class="card-footer-reviewer d-flex align-items-center gap-3 mt-4">
                            <div class="reviewer-avatar font-clash" style="background: <?= $t['color'] ?>;">
                                <?= strtoupper(substr($t['name'], 0, 1)) ?>
                            </div>
                            <div class="text-start">
                                <h3 class="m-0 reviewer-name d-flex align-items-center">
                                    <?= htmlspecialchars($t['name']) ?>
                                    <i class="bi bi-patch-check-fill text-primary ms-1.5" style="font-size: 13.5px;" title="Verified Reviewer"></i>
                                </h3>
                                <p class="m-0 reviewer-company monospace text-muted"><?= htmlspecialchars($t['company']) ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>

    </div>
</section>

<style>
/* --- Testimonial Marquee Master Styles --- */
.marquee-master-container {
    width: 100%;
    position: relative;
}

/* Vignette gradient edge masks for high-end look */
.marquee-master-container::before,
.marquee-master-container::after {
    content: '';
    position: absolute;
    top: 0;
    bottom: 0;
    width: 15vw;
    z-index: 3;
    pointer-events: none;
}
.marquee-master-container::before {
    left: 0;
    background: linear-gradient(to right, #FFFFFF 0%, rgba(255, 255, 255, 0.8) 25%, transparent 100%);
}
.marquee-master-container::after {
    right: 0;
    background: linear-gradient(to left, #FFFFFF 0%, rgba(255, 255, 255, 0.8) 25%, transparent 100%);
}

.testimonial-marquee-wrapper {
    width: 100%;
    overflow: hidden;
    position: relative;
    padding: 10px 0;
}

.testimonial-marquee {
    display: flex;
    width: max-content;
    gap: 24px;
}

.marquee-content {
    display: flex;
    gap: 24px;
    will-change: transform;
}

/* Left-right animation loops */
.marquee-left .marquee-content {
    animation: scrollTestimonialsLeft 45s linear infinite;
}
.marquee-right .marquee-content {
    animation: scrollTestimonialsRight 45s linear infinite;
}

/* Pause on hover */
.testimonial-marquee-wrapper:hover .marquee-content {
    animation-play-state: paused !important;
}

@keyframes scrollTestimonialsLeft {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}

@keyframes scrollTestimonialsRight {
    0% { transform: translateX(-50%); }
    100% { transform: translateX(0); }
}

/* --- Google Testimonial Card Styling --- */
.google-testimonial-card {
    background: #FFFFFF;
    border: 2.5px solid #111111;
    border-radius: 20px;
    padding: 30px;
    width: 420px;
    max-width: 420px;
    flex-shrink: 0;
    box-shadow: 4px 4px 0px #111111;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    position: relative;
    user-select: none;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.google-testimonial-card:hover {
    transform: translate(-3px, -3px) rotate(0.5deg);
    box-shadow: 8px 8px 0px var(--primary-start);
}

.stars-rating-block i {
    font-size: 13.5px;
    margin-left: 2px;
}

.testimonial-quote-text {
    font-size: 14.5px;
    line-height: 1.6;
    color: #1A1A24;
    font-weight: 500;
    font-style: italic;
    margin: 0;
    flex-grow: 1;
}

/* Reviewer circular avatar */
.reviewer-avatar {
    width: 44px;
    height: 44px;
    min-width: 44px;
    border-radius: 50%;
    color: #FFFFFF;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
    font-weight: 900;
    border: 1.5px solid #111111;
}

.reviewer-name {
    font-size: 15px;
    font-weight: 800;
    color: #111111;
}

.reviewer-company {
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 1.5px;
}
</style>
