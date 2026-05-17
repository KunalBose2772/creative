<?php 
// Meta data for layout
$data['page_hero_badge'] = 'PRODUCTION ARCHIVE';
$data['page_title_html'] = 'Viral Reels & <br><span class="gradient-text">Cinematic Ads.</span>';
$data['page_subtitle'] = "We engineer high-retention vertical content designed for the algorithm. From 3D CGI to high-energy social edits, we make your brand impossible to scroll past.";

require_once APP_PATH . '/views/components/page_hero.php'; 

// Video Data with curated accent colors, custom filtering classes and specifications
$videos = [
    [
        'id' => '1nVKFtpnIHq7_q3QI9AIsj-jKGy2iJuL1', 
        'title' => 'Eyora Digital Signature', 
        'category' => 'Premium Branding',
        'result' => '98% Engagement',
        'desc' => 'Defining luxury visual identity through high-contrast motion graphics.',
        'color' => '#6A5AE0',
        'filter' => 'brand-reels',
        'software' => 'After Effects / Premier',
        'file' => 'v1_signature.mp4'
    ],
    [
        'id' => '1gYyJo3vDOmffp6mcpH63rC5iLAs-or4A', 
        'title' => 'BLPK 3D Metamorphosis', 
        'category' => '3D Engineering',
        'result' => '2.4M Impressions',
        'desc' => 'Showcasing structural complexity through fluid 3D transformations.',
        'color' => '#FF007A',
        'filter' => 'v3d',
        'software' => 'Blender 3D / Cycles',
        'file' => 'v2_blpk.mp4'
    ],
    [
        'id' => '11kxghcQ-fJKMjlCFowQr_Xz1aF1OK0qT', 
        'title' => 'Carat Lane Motion Essence', 
        'category' => 'Motion Design',
        'result' => '45% ROI Lift',
        'desc' => 'Elevating product desirability via minimalist kinetic energy.',
        'color' => '#00D2FF',
        'filter' => 'brand-reels',
        'software' => 'AE / Vector Engine',
        'file' => 'v3_caratlane.mp4'
    ],
    [
        'id' => '1U_qAr-cpJG9j_8PLlxR6tIzydPekM8Y1', 
        'title' => 'Chicken Bite Viral Promo', 
        'category' => 'Social Growth',
        'result' => '150k Shares',
        'desc' => 'Aggressive, high-retention editing designed for TikTok feeds.',
        'color' => '#FFB800',
        'filter' => 'brand-reels',
        'software' => 'Premiere / Soundly',
        'file' => 'v4_chickenbite.mp4'
    ],
    [
        'id' => '1VZLpz0yppSfqEwTEeI26x-dnWrn92M8l', 
        'title' => 'The Eyora Showreel', 
        'category' => 'Brand Showcase',
        'result' => 'Global Reach',
        'desc' => 'A masterclass in luxury storytelling, depth simulation, and color grading.',
        'color' => '#FF7A18',
        'filter' => 'vfx',
        'software' => 'DaVinci / After Effects',
        'file' => 'v5_eyorashowreel.mp4'
    ],
    [
        'id' => '1mXkiKtkNSajrQtDUPap8BLABV_1uWMFV', 
        'title' => 'Wearables Tech Demo', 
        'category' => 'Product CGI',
        'result' => 'Innovation Award',
        'desc' => 'Exploded-view animation showing internal mechanical precision.',
        'color' => '#28C840',
        'filter' => 'v3d',
        'software' => 'Blender / Cycles',
        'file' => 'v6_wearables.mp4'
    ],
    [
        'id' => '1LaaJRwHFFUyrTsAASAXZfz8J4i9WQg4Q', 
        'title' => 'Garden V Cinematic', 
        'category' => 'Visual Effects',
        'result' => 'HNW Conversion',
        'desc' => 'Merging hyper-realistic CGI with aerial cinematography structures.',
        'color' => '#00D2FF',
        'filter' => 'vfx',
        'software' => 'AE / Nuke / Unreal',
        'file' => 'v7_gardenv.mp4'
    ],
    [
        'id' => '17ahZ2Yy7yYNKz7zioQGVyVUI5f9i68Mo', 
        'title' => 'Gateway CGI Experience', 
        'category' => 'Cultural Motion',
        'result' => 'Museum Grade',
        'desc' => 'Digital preservation of architecture via physical light simulation.',
        'color' => '#6A5AE0',
        'filter' => 'v3d',
        'software' => 'Blender 3D / Octane',
        'file' => 'v8_gateway.mp4'
    ],
    [
        'id' => '1v53_7g8TWCN5C4E-Xssk0roWAScKFFui', 
        'title' => 'Guess RG Identity', 
        'category' => 'Fashion Motion',
        'result' => '85% Recall',
        'desc' => 'High-fashion rhythm with rapid-fire visual hooks and beats.',
        'color' => '#FF007A',
        'filter' => 'brand-reels',
        'software' => 'Premiere Pro / VFX',
        'file' => 'v9_guess.mp4'
    ]
];
?>

<section class="video-portfolio-page-wrapper py-5 bg-studio-page-dark">
    <!-- Cyber Grid Backdrop -->
    <div class="studio-page-grid-lines"></div>

    <div class="container" style="max-width: 1240px; position: relative; z-index: 2;">
        
        <!-- Premium Navigation Filters -->
        <div class="d-flex justify-content-center gap-2 mb-5 flex-wrap" data-aos="fade-up">
            <button class="btn btn-studio-filter active" data-filter="all">All Renders</button>
            <button class="btn btn-studio-filter" data-filter="v3d">3D CGI</button>
            <button class="btn btn-studio-filter" data-filter="brand-reels">Brand Reels</button>
            <button class="btn btn-studio-filter" data-filter="vfx">VFX & Cinema</button>
        </div>

        <!-- High-Fidelity Video Cards Grid -->
        <div class="row g-5 video-portfolio-grid-cards">
            <?php foreach ($videos as $v): ?>
            <div class="col-lg-4 col-md-6 portfolio-card-col <?= $v['filter'] ?>" data-aos="fade-up" style="transition: opacity 0.5s ease, transform 0.5s ease;">
                <div class="studio-video-card h-100" style="--accent: <?= $v['color'] ?>;">
                    
                    <!-- 3D Phone-screen frame device with custom overlays -->
                    <div class="studio-frame-wrapper shadow-punchy-studio">
                        
                        <!-- Status Elements -->
                        <div class="studio-notch"></div>
                        <div class="studio-frame-header d-flex justify-content-between px-3">
                            <span class="monospace text-danger font-9 d-flex align-items-center gap-1">
                                <span class="rec-dot"></span> STREAM
                            </span>
                            <span class="monospace font-9 text-white-50">9:16 HD</span>
                        </div>
                        
                        <!-- Video Surface -->
                        <div class="studio-inner-container">
                            <div class="studio-screen-reflection"></div>
                            
                            <!-- Custom High-Tech Loader -->
                            <div class="studio-video-loader d-flex flex-column align-items-center justify-content-center">
                                <div class="spinner-border text-white border-2" role="status" style="width: 24px; height: 24px;"></div>
                                <span class="monospace font-9 text-uppercase mt-3 text-white-50 tracking-widest text-center">
                                    ESTABLISHING STREAM<br>
                                    <span class="text-success font-8">SECURE_LINK</span>
                                </span>
                            </div>
                            
                            <!-- Lazy Loaded Local High-Fidelity MP4 Video -->
                            <div class="iframe-placeholder-portfolio w-100 h-100" data-file="<?= $v['file'] ?>" data-id="<?= $v['id'] ?>"></div>

                             <!-- Sleek Interactive Overlays for Playlist Control -->
                             <div class="studio-video-controls-overlay d-flex align-items-center justify-content-center">
                                 <!-- Floating Elegant Control Dock -->
                                 <div class="studio-control-dock d-flex align-items-center gap-3 px-3 py-2 rounded-pill" style="background: rgba(0, 0, 0, 0.75); backdrop-filter: blur(8px); border: 1.5px solid rgba(255, 255, 255, 0.25); pointer-events: auto;">
                                     <!-- Mute / Unmute -->
                                     <button class="btn btn-studio-vol-toggle border-0 rounded-circle d-flex align-items-center justify-content-center text-white p-0" style="width: 36px; height: 36px; background: rgba(255,255,255,0.1);" title="Mute/Unmute Video">
                                         <i class="bi bi-volume-mute-fill fs-5 vol-icon"></i>
                                     </button>

                                     <!-- Play / Pause (Center) -->
                                     <button class="btn btn-studio-play-toggle border-0 rounded-circle d-flex align-items-center justify-content-center text-white p-0" style="width: 44px; height: 44px; background: var(--accent, #6A5AE0);" title="Play/Pause Video">
                                         <i class="bi bi-play-fill fs-4 play-icon"></i>
                                     </button>

                                     <!-- Expand Cinema Mode -->
                                     <button class="btn btn-studio-expand-toggle border-0 rounded-circle d-flex align-items-center justify-content-center text-white p-0" style="width: 36px; height: 36px; background: rgba(255,255,255,0.1);" title="Expand to Fullscreen Cinema Mode">
                                         <i class="bi bi-arrows-angle-expand fs-6 expand-icon"></i>
                                     </button>
                                 </div>
                             </div>

                            <!-- Bottom Progress Bar -->
                            <div class="studio-progress-wrap">
                                <div class="studio-progress-bar" style="width: 0%; height: 100%; background: var(--accent, #6A5AE0); transition: width 0.1s linear;"></div>
                            </div>
                        </div>
                        
                        <!-- Dynamic High-contrast badge overlay -->
                        <div class="studio-badge-overlay">
                            <span class="badge bg-studio-overlay-black border-accent-dynamic text-white shadow-sm font-clash">
                                <?= $v['result'] ?>
                            </span>
                        </div>
                        
                        <!-- Interactive Neon Glow Backplate -->
                        <div class="studio-card-glow" style="background: <?= $v['color'] ?>;"></div>
                    </div>
                    
                    <!-- Title & Technical Specifications -->
                    <div class="studio-content-section mt-4">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <span class="text-uppercase small fw-bold monospace tag-custom-studio">
                                <?= $v['category'] ?>
                            </span>
                            <span class="monospace text-white-50 font-10">
                                <?= $v['software'] ?>
                            </span>
                        </div>
                        <h3 class="h4 fw-900 text-uppercase text-white font-clash mb-2"><?= $v['title'] ?></h3>
                        <p class="text-white-50 small mb-3 font-inter leading-relaxed" style="opacity: 0.7;"><?= $v['desc'] ?></p>
                        <a href="<?= BASE_URL ?>contact" class="btn-link-studio font-clash text-uppercase font-12">
                            COMMISSION REEL <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                    
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA Section -->
<?php require_once APP_PATH . '/views/components/cta.php'; ?>

<style>
/* ---------------- STUDIO PORTFOLIO PAGE STYLING ---------------- */
.bg-studio-page-dark {
    background-color: #0B0C0E !important;
    background: radial-gradient(circle at center, #111317 0%, #060709 100%) !important;
    position: relative;
    overflow: hidden;
}

.studio-page-grid-lines {
    position: absolute;
    inset: 0;
    background-image: linear-gradient(rgba(255, 255, 255, 0.012) 1px, transparent 1px),
                      linear-gradient(90deg, rgba(255, 255, 255, 0.012) 1px, transparent 1px);
    background-size: 50px 50px;
    pointer-events: none;
    z-index: 1;
}

.studio-page-grid-lines::after {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at 10% 20%, rgba(106, 90, 224, 0.04) 0%, transparent 60%),
                radial-gradient(circle at 90% 80%, rgba(255, 0, 122, 0.04) 0%, transparent 60%);
}

/* Glassmorphic sci-fi filter buttons */
.btn-studio-filter {
    background: rgba(255, 255, 255, 0.02);
    border: 1px solid rgba(255, 255, 255, 0.08);
    color: rgba(255, 255, 255, 0.6);
    border-radius: 50px;
    padding: 12px 28px;
    font-size: 12px;
    font-weight: 800;
    font-family: 'Inter', sans-serif;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}

.btn-studio-filter:hover, .btn-studio-filter.active {
    background: white;
    color: #000;
    border-color: white;
    box-shadow: 0px 8px 24px rgba(255, 255, 255, 0.15);
    transform: translateY(-2px);
}

/* Studio Video Grid Card */
.studio-video-card {
    background: transparent;
    transition: transform 0.4s ease;
}

/* Bezel Frame Screen Device */
.studio-frame-wrapper {
    position: relative;
    border: 4px solid #1A1D24;
    background: #0B0C0F;
    border-radius: 36px;
    overflow: hidden;
    /* Aspect Ratio approx 9:16 */
    padding-top: 177.78%; 
    box-shadow: 10px 10px 0px rgba(0,0,0,0.6);
    transition: transform 0.15s ease-out, box-shadow 0.15s ease-out;
    z-index: 2;
}

.shadow-punchy-studio {
    box-shadow: 12px 12px 0px var(--accent, #6A5AE0);
}

.studio-notch {
    position: absolute;
    top: 10px;
    left: 50%;
    transform: translateX(-50%);
    width: 60px;
    height: 14px;
    background: #000;
    border-radius: 10px;
    z-index: 10;
}

.studio-frame-header {
    position: absolute;
    top: 12px;
    left: 0;
    width: 100%;
    z-index: 9;
}

.rec-dot {
    width: 5px;
    height: 5px;
    background: #FF3B30;
    border-radius: 50%;
    display: inline-block;
    animation: flashBlink 1s infinite alternate;
}

@keyframes flashBlink {
    0% { opacity: 0.2; }
    100% { opacity: 1; }
}

.studio-inner-container {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 28px;
    overflow: hidden;
    border: 2px solid rgba(255,255,255,0.02);
}

.studio-inner-container iframe {
    width: 100%;
    height: 100%;
    border: none;
    background: #000;
}

/* Glass glare layer */
.studio-screen-reflection {
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.05) 0%, rgba(255, 255, 255, 0.01) 45%, transparent 45%);
    pointer-events: none;
    z-index: 7;
}

/* Skeleton loader overlay */
.studio-video-loader {
    position: absolute;
    inset: 0;
    background: #0D0E11;
    z-index: 6;
    transition: opacity 0.6s ease;
}

/* Overlay high-retention stats badge */
.studio-badge-overlay {
    position: absolute;
    top: 36px;
    right: 16px;
    z-index: 8;
}

.bg-studio-overlay-black {
    background-color: rgba(10, 11, 14, 0.85);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
}

.border-accent-dynamic {
    border: 1px solid var(--accent, #6A5AE0);
    color: #fff;
    font-size: 10px;
    font-weight: 800;
    letter-spacing: 0.5px;
    padding: 6px 12px;
    border-radius: 6px;
}

/* Glow Plate behind device */
.studio-card-glow {
    position: absolute;
    inset: -20px;
    filter: blur(40px);
    opacity: 0.1;
    z-index: -1;
    transition: opacity 0.5s ease;
}

/* Specs & Description Section */
.tag-custom-studio {
    color: var(--accent, #6A5AE0);
    letter-spacing: 1px;
}

.btn-link-studio {
    text-decoration: none;
    color: white;
    font-weight: 800;
    letter-spacing: 0.5px;
    display: inline-flex;
    align-items: center;
    position: relative;
    padding-bottom: 2px;
    transition: color 0.3s ease;
}

.btn-link-studio::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 2px;
    background: var(--accent, #6A5AE0);
    transition: width 0.3s ease;
}

.btn-link-studio:hover {
    color: var(--accent, #6A5AE0);
}

.btn-link-studio:hover::after {
    width: 100%;
}

/* Custom Interactive Playlist Controls Overlay & Progress bar */
.studio-progress-wrap {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 5px;
    background: rgba(255, 255, 255, 0.2);
    z-index: 9;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.studio-video-card.active-playing .studio-progress-wrap {
    opacity: 1;
}

.studio-video-controls-overlay {
    position: absolute;
    inset: 0;
    z-index: 8;
    opacity: 0.15; /* Always slightly translucent to show controls exist */
    transition: opacity 0.3s ease;
    background: transparent;
    pointer-events: auto;
}

.studio-video-card:hover .studio-video-controls-overlay,
.studio-video-card.active-playing .studio-video-controls-overlay {
    opacity: 1;
}

.studio-control-dock {
    transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275), background 0.3s ease;
    box-shadow: 0 10px 30px rgba(0,0,0,0.5);
}

.studio-control-dock:hover {
    transform: translateY(-2px) scale(1.05);
}

.btn-studio-vol-toggle, .btn-studio-play-toggle, .btn-studio-expand-toggle {
    transition: transform 0.2s ease, background 0.2s ease, color 0.2s ease;
}

.btn-studio-vol-toggle:hover, .btn-studio-expand-toggle:hover {
    transform: scale(1.15);
    background: rgba(255, 255, 255, 0.25) !important;
}

.btn-studio-play-toggle:hover {
    transform: scale(1.15);
    background: #5042c2 !important;
}

/* Big pulse ring and neon border for the active playing card */
.studio-frame-wrapper.active-playing {
    border-color: var(--accent, #6A5AE0) !important;
    box-shadow: 0 0 25px var(--accent, #6A5AE0) !important;
}

.active-playing .rec-dot {
    background-color: #ff3b30 !important;
    animation: flashIndicator 1s infinite alternate;
}

@keyframes flashIndicator {
    0% { opacity: 0.2; }
    100% { opacity: 1; }
}

/* Preserve aspect-ratio without stretching when video is in native fullscreen cinema mode */
video:fullscreen {
    object-fit: contain !important;
    background-color: #000000 !important;
}
video:-webkit-full-screen {
    object-fit: contain !important;
    background-color: #000000 !important;
}
video:-moz-full-screen {
    object-fit: contain !important;
    background-color: #000000 !important;
}
video:-ms-fullscreen {
    object-fit: contain !important;
    background-color: #000000 !important;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    
    class VideoPlaylistManager {
        constructor() {
            this.cards = Array.from(document.querySelectorAll('.portfolio-card-col'));
            this.visibleCards = [];
            this.activeIndex = -1;
            this.isMuted = false; // Start unmuted by default!
            this.isGridVisible = false;

            this.init();
        }

        init() {
            const gridElement = document.querySelector('.video-portfolio-grid-cards');
            if (!gridElement) return;

            // IntersectionObserver triggers autoplay ONLY when the video container appears in the viewport
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    this.isGridVisible = entry.isIntersecting;
                    if (this.isGridVisible) {
                        this.updateVisibleCards();
                        if (this.activeIndex === -1) {
                            this.playFirst();
                        } else {
                            this.resumeActive();
                        }
                    } else {
                        this.pauseAll();
                    }
                });
            }, { threshold: 0.1 });

            observer.observe(gridElement);

            // Live Portfolio Filter Logic with Stagger Animations
            const filterButtons = document.querySelectorAll('.btn-studio-filter');
            filterButtons.forEach(btn => {
                btn.addEventListener('click', () => {
                    // Active state switch
                    filterButtons.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');

                    const filterType = btn.getAttribute('data-filter');

                    // Filter animation sequence
                    this.cards.forEach(card => {
                        if (filterType === 'all' || card.classList.contains(filterType)) {
                            card.style.display = 'block';
                            setTimeout(() => {
                                card.style.opacity = '1';
                                card.style.transform = 'translateY(0) scale(1)';
                            }, 50);
                        } else {
                            card.style.opacity = '0';
                            card.style.transform = 'translateY(20px) scale(0.95)';
                            setTimeout(() => {
                                card.style.display = 'none';
                            }, 400);
                        }
                    });

                    // Wait for filter transition, then recalibrate visible cards and autoplay the new first video
                    setTimeout(() => {
                        this.updateVisibleCards();
                        this.playFirst();
                    }, 450);
                });
            });

            // Initialize Event listeners on all cards
            this.cards.forEach(cardCol => {
                const innerContainer = cardCol.querySelector('.studio-inner-container');
                const playBtn = cardCol.querySelector('.btn-studio-play-toggle');
                const volBtn = cardCol.querySelector('.btn-studio-vol-toggle');
                const expandBtn = cardCol.querySelector('.btn-studio-expand-toggle');

                // Toggle Play/Pause when clicking the big center overlay play button
                if (playBtn) {
                    playBtn.addEventListener('click', (e) => {
                        e.stopPropagation();
                        this.togglePlayPause(cardCol);
                    });
                }

                // Toggle Volume (Muted/Unmuted) globally when clicking any volume button
                if (volBtn) {
                    volBtn.addEventListener('click', (e) => {
                        e.stopPropagation();
                        this.toggleVolumeGlobal();
                    });
                }

                // Expand to Fullscreen Cinema Mode
                if (expandBtn) {
                    expandBtn.addEventListener('click', (e) => {
                        e.stopPropagation();
                        this.expandVideoFullscreen(cardCol);
                    });
                }

                // Focus and activate a card video on click of the frame
                if (innerContainer) {
                    innerContainer.addEventListener('click', () => {
                        this.setActiveCard(cardCol);
                    });
                }
            });

            // Global user gesture listener: if a browser initially blocked unmuted sound on direct page load/refresh,
            // this listener automatically unmutes the currently playing video immediately upon their very first interaction (scroll, click, mousemove, touch).
            const forceUnmutePlay = () => {
                if (this.isMuted) {
                    this.isMuted = false;
                    this.cards.forEach(cardCol => {
                        const video = cardCol.querySelector('video');
                        if (video) {
                            video.muted = false;
                            // If the current video is the active one and is paused, resume playback with audio
                            if (video.paused && cardCol.querySelector('.studio-video-card').classList.contains('active-playing')) {
                                video.play().catch(e => console.log("Failed to resume on interaction:", e));
                            }
                        }
                    });
                    this.updateVolumeIcons();
                }
                // Cleanup listeners so we only trigger this once
                window.removeEventListener('click', forceUnmutePlay);
                window.removeEventListener('scroll', forceUnmutePlay);
                window.removeEventListener('mousemove', forceUnmutePlay);
                window.removeEventListener('touchstart', forceUnmutePlay);
            };

            window.addEventListener('click', forceUnmutePlay, { passive: true });
            window.addEventListener('scroll', forceUnmutePlay, { passive: true });
            window.addEventListener('mousemove', forceUnmutePlay, { passive: true });
            window.addEventListener('touchstart', forceUnmutePlay, { passive: true });
            
            this.setupHoverAndCursor();
        }

        updateVisibleCards() {
            this.visibleCards = this.cards.filter(card => {
                return card.style.display !== 'none';
            });

            // Lazy-create video tags for all visible cards so they are buffered
            this.visibleCards.forEach(cardCol => {
                this.ensureVideoLoaded(cardCol);
            });
        }

        ensureVideoLoaded(cardCol) {
            const placeholder = cardCol.querySelector('.iframe-placeholder-portfolio');
            if (placeholder && !placeholder.querySelector('video')) {
                const file = placeholder.getAttribute('data-file');
                const video = document.createElement('video');
                video.src = `<?= BASE_URL ?>public/assets/videos/${file}`;
                video.preload = "auto";
                video.muted = this.isMuted;
                video.setAttribute('playsinline', '');
                video.style.width = '100%';
                video.style.height = '100%';
                video.style.objectFit = 'cover';
                video.style.background = '#000';
                video.style.opacity = '0';
                video.style.transition = 'opacity 0.8s cubic-bezier(0.16, 1, 0.3, 1)';

                const loader = cardCol.querySelector('.studio-video-loader');
                video.addEventListener('canplay', () => {
                    video.style.opacity = '1';
                    if (loader) {
                        loader.style.opacity = '0';
                        setTimeout(() => { loader.style.display = 'none'; }, 800);
                    }
                });

                // Instagram-style progress line updater
                const progressBar = cardCol.querySelector('.studio-progress-bar');
                video.addEventListener('timeupdate', () => {
                    if (video.duration) {
                        const percent = (video.currentTime / video.duration) * 100;
                        if (progressBar) {
                            progressBar.style.width = `${percent}%`;
                        }
                    }
                });

                // PLAY NEXT SEQUENTIALLY when current ends!
                video.addEventListener('ended', () => {
                    this.playNext();
                });

                placeholder.appendChild(video);
            }
        }

        playFirst() {
            if (this.visibleCards.length === 0) return;
            this.activeIndex = 0;
            this.playVideoAtIndex(0);
        }

        playVideoAtIndex(index) {
            this.pauseAll();

            if (index < 0 || index >= this.visibleCards.length) return;
            const activeCardCol = this.visibleCards[index];
            this.ensureVideoLoaded(activeCardCol);

            const video = activeCardCol.querySelector('video');
            const card = activeCardCol.querySelector('.studio-video-card');
            const frame = activeCardCol.querySelector('.studio-frame-wrapper');

            if (card) card.classList.add('active-playing');
            if (frame) frame.classList.add('active-playing');

            if (video) {
                video.muted = this.isMuted;
                video.currentTime = 0;
                
                const playPromise = video.play();
                if (playPromise !== undefined) {
                    playPromise.then(() => {
                        this.updatePlayStateUI(activeCardCol, true);
                    }).catch(err => {
                        console.log("Play unmuted interrupted or blocked by browser restriction.", err);
                        // Fallback: autoplay muted if unmuted request was blocked by browser policies
                        this.isMuted = true;
                        video.muted = true;
                        video.play().then(() => {
                            this.updatePlayStateUI(activeCardCol, true);
                            this.updateVolumeIcons();
                        });
                    });
                }
            }
            this.updateVolumeIcons();
        }

        resumeActive() {
            if (this.activeIndex < 0 || this.activeIndex >= this.visibleCards.length) return;
            const activeCardCol = this.visibleCards[this.activeIndex];
            const video = activeCardCol.querySelector('video');
            const card = activeCardCol.querySelector('.studio-video-card');
            const frame = activeCardCol.querySelector('.studio-frame-wrapper');

            if (card) card.classList.add('active-playing');
            if (frame) frame.classList.add('active-playing');

            if (video) {
                video.muted = this.isMuted;
                const playPromise = video.play();
                if (playPromise !== undefined) {
                    playPromise.then(() => {
                        this.updatePlayStateUI(activeCardCol, true);
                    }).catch(err => {
                        console.log("Play unmuted blocked on resume.", err);
                        this.isMuted = true;
                        video.muted = true;
                        video.play().then(() => {
                            this.updatePlayStateUI(activeCardCol, true);
                            this.updateVolumeIcons();
                        });
                    });
                }
            }
        }

        playNext() {
            if (this.visibleCards.length === 0) return;
            this.activeIndex = (this.activeIndex + 1) % this.visibleCards.length;
            this.playVideoAtIndex(this.activeIndex);
        }

        pauseAll() {
            this.cards.forEach(cardCol => {
                const card = cardCol.querySelector('.studio-video-card');
                const frame = cardCol.querySelector('.studio-frame-wrapper');
                if (card) card.classList.remove('active-playing');
                if (frame) frame.classList.remove('active-playing');

                const video = cardCol.querySelector('video');
                if (video) {
                    video.pause();
                    this.updatePlayStateUI(cardCol, false);
                }
            });
        }

        setActiveCard(clickedCardCol) {
            const index = this.visibleCards.indexOf(clickedCardCol);
            if (index !== -1) {
                if (index === this.activeIndex) {
                    this.togglePlayPause(clickedCardCol);
                } else {
                    this.activeIndex = index;
                    this.playVideoAtIndex(index);
                }
            }
        }

        togglePlayPause(cardCol) {
            const video = cardCol.querySelector('video');
            if (!video) return;

            if (video.paused) {
                this.pauseAll();
                
                const card = cardCol.querySelector('.studio-video-card');
                const frame = cardCol.querySelector('.studio-frame-wrapper');
                if (card) card.classList.add('active-playing');
                if (frame) frame.classList.add('active-playing');

                video.muted = this.isMuted;
                video.play().then(() => {
                    this.updatePlayStateUI(cardCol, true);
                });
                this.activeIndex = this.visibleCards.indexOf(cardCol);
            } else {
                video.pause();
                this.updatePlayStateUI(cardCol, false);
            }
        }

        toggleVolumeGlobal() {
            this.isMuted = !this.isMuted;
            
            // Sync muted state globally across all videos
            this.cards.forEach(cardCol => {
                const video = cardCol.querySelector('video');
                if (video) {
                    video.muted = this.isMuted;
                }
            });

            this.updateVolumeIcons();
        }

        expandVideoFullscreen(cardCol) {
            const video = cardCol.querySelector('video');
            if (!video) return;

            // Trigger standard high-compatibility fullscreen mode on the native element
            if (video.requestFullscreen) {
                video.requestFullscreen();
            } else if (video.webkitRequestFullscreen) { /* Safari */
                video.webkitRequestFullscreen();
            } else if (video.msRequestFullscreen) { /* IE11 */
                video.msRequestFullscreen();
            }
        }

        updatePlayStateUI(cardCol, isPlaying) {
            const playIcon = cardCol.querySelector('.play-icon');
            if (playIcon) {
                if (isPlaying) {
                    playIcon.classList.remove('bi-play-fill');
                    playIcon.classList.add('bi-pause-fill');
                } else {
                    playIcon.classList.remove('bi-pause-fill');
                    playIcon.classList.add('bi-play-fill');
                }
            }
        }

        updateVolumeIcons() {
            this.cards.forEach(cardCol => {
                const volIcon = cardCol.querySelector('.vol-icon');
                if (volIcon) {
                    if (this.isMuted) {
                        volIcon.classList.remove('bi-volume-up-fill');
                        volIcon.classList.add('bi-volume-mute-fill');
                    } else {
                        volIcon.classList.remove('bi-volume-mute-fill');
                        volIcon.classList.add('bi-volume-up-fill');
                    }
                }
            });
        }

        setupHoverAndCursor() {
            // Dynamic 3D Card Hover Tilt Coordinates
            this.cards.forEach(cardCol => {
                const card = cardCol.querySelector('.studio-video-card');
                const frame = cardCol.querySelector('.studio-frame-wrapper');
                const glow = cardCol.querySelector('.studio-card-glow');

                cardCol.addEventListener('mousemove', (e) => {
                    const rect = cardCol.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    const centerX = rect.width / 2;
                    const centerY = rect.height / 2;

                    const tiltX = ((y - centerY) / centerY) * -10;
                    const tiltY = ((x - centerX) / centerX) * 10;

                    if (frame) {
                        frame.style.transform = `rotateY(${tiltY}deg) rotateX(${tiltX}deg) scale(1.02)`;
                        frame.style.boxShadow = `${-tiltY * 1.5}px ${tiltX * 1.5}px 30px var(--accent)`;
                    }
                    if (glow) {
                        glow.style.opacity = '0.3';
                        glow.style.transform = `translate(${-tiltY * 1}px, ${-tiltX * 1}px)`;
                    }
                });

                cardCol.addEventListener('mouseleave', () => {
                    if (frame) {
                        frame.style.transform = 'rotateY(0deg) rotateX(0deg) scale(1)';
                        frame.style.boxShadow = '10px 10px 0px rgba(0,0,0,0.6)';
                    }
                    if (glow) {
                        glow.style.opacity = '0.1';
                        glow.style.transform = 'none';
                    }
                });
            });

            // Cursor Follower Lens Custom Mode inside Card Video Frame areas
            const cursorFollower = document.querySelector('.custom-cursor-follower');
            if (cursorFollower) {
                const frameAreas = document.querySelectorAll('.studio-frame-wrapper');
                frameAreas.forEach(area => {
                    area.addEventListener('mouseenter', () => {
                        cursorFollower.classList.add('cursor-lens-mode');
                        cursorFollower.innerHTML = '<span class="monospace text-info font-9 fw-extrabold" style="letter-spacing:1px; padding: 4px;">▶ STREAM</span>';
                        
                        cursorFollower.style.width = '70px';
                        cursorFollower.style.height = '70px';
                        cursorFollower.style.background = 'rgba(0, 210, 255, 0.08)';
                        cursorFollower.style.borderColor = '#00d2ff';
                        cursorFollower.style.borderStyle = 'dashed';
                        cursorFollower.style.display = 'flex';
                        cursorFollower.style.alignItems = 'center';
                        cursorFollower.style.justifyContent = 'center';
                    });
                    area.addEventListener('mouseleave', () => {
                        cursorFollower.classList.remove('cursor-lens-mode');
                        cursorFollower.innerHTML = '';
                        
                        cursorFollower.style.width = '';
                        cursorFollower.style.height = '';
                        cursorFollower.style.background = '';
                        cursorFollower.style.borderColor = '';
                        cursorFollower.style.borderStyle = '';
                        cursorFollower.style.display = '';
                    });
                });
            }
        }
    }

    // Launch Playlist Manager
    window.studioPlaylist = new VideoPlaylistManager();

});
</script>
