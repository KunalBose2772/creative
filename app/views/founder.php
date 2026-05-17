<?php 
$data['page_hero_badge'] = 'The Artist & Founder';
$data['page_title_html'] = 'Shakti Kumar Gupta <br><span class="gradient-text-dynamic" style="background: linear-gradient(135deg, #FF5E36 0%, #FF007A 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">3D Generalist & Video Editor</span>';
$data['page_subtitle'] = "Master 3D Artist skilled in Maya, Blender, Substance Painter, ZBrush, and After Effects. Specializing in photorealistic characters, environments, hard-surface props, and Hollywood-grade CGI visual effects.";

// Load projects from local JSON
$projects = [];
$jsonPath = PUBLIC_PATH . '/assets/images/shakti/projects.json';
if (file_exists($jsonPath)) {
    $projects = json_decode(file_get_contents($jsonPath), true) ?? [];
}

ob_start(); ?>
<div class="founder-hero-visual position-relative" style="padding: 20px;">
    <!-- Ambient Glow behind avatar -->
    <div class="position-absolute top-50 start-50 translate-middle rounded-circle" style="width: 280px; height: 280px; background: radial-gradient(circle, rgba(255, 94, 54, 0.4) 0%, transparent 70%); z-index: 1;"></div>
    
    <div class="founder-avatar-wrap position-relative z-2 text-center">
        <div class="founder-avatar overflow-hidden mx-auto" style="border: 4px solid #111; border-radius: 50%; width: 240px; height: 240px; box-shadow: 12px 12px 0px #111; background: #fff;">
            <img src="<?= BASE_URL ?>public/assets/images/shakti/avatar.jpg" alt="Shakti Kumar Gupta" onerror="this.src='https://cdnb.artstation.com/p/users/avatars/010/901/731/large/b332d27192cc62f4eb1b655950af33af.jpg?1762547006'" class="w-100 h-100 object-fit-cover">
        </div>
        <div class="founder-location px-4 py-2 mt-4 d-inline-block" style="background: #111; color: #fff; border: 2px solid #111; border-radius: 50px; box-shadow: 6px 6px 0px var(--page-accent); font-weight: 800; font-size: 14px; letter-spacing: 1px;">
            <i class="bi bi-geo-alt-fill me-1" style="color: var(--page-accent);"></i> Mumbai, India
        </div>
    </div>
</div>
<?php 
$data['page_hero_visual'] = ob_get_clean();
require_once APP_PATH . '/views/components/page_hero.php'; 
?>

<!-- Premium Stack & Social Bar -->
<section class="section-padding py-5" style="background: #F4F4F6; border-top: 2px solid #111; border-bottom: 2px solid #111; position: relative; z-index: 2;">
    <div class="container d-flex flex-wrap justify-content-between align-items-center gap-4 max-w-1300">
        <div class="founder-socials d-flex gap-3">
            <a href="https://www.linkedin.com/in/shakti-kumar-886014229" target="_blank" rel="noopener noreferrer" class="social-pill" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
            <a href="https://www.instagram.com/shakti_sam2.0" target="_blank" rel="noopener noreferrer" class="social-pill" title="Instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://www.youtube.com/@TheViralLimited" target="_blank" rel="noopener noreferrer" class="social-pill" title="YouTube"><i class="bi bi-youtube"></i></a>
            <a href="https://www.behance.net/shaktisam" target="_blank" rel="noopener noreferrer" class="social-pill" title="Behance"><i class="bi bi-behance"></i></a>
            <a href="https://www.artstation.com/shakti_kumar" target="_blank" rel="noopener noreferrer" class="social-pill active-accent" title="ArtStation"><i class="bi bi-brush"></i></a>
        </div>
        <div class="software-stack d-flex flex-wrap gap-2 align-items-center">
            <span class="small fw-900 me-2 text-uppercase letter-spacing-1" style="color: #111;">Expertise Stack:</span>
            <span class="stack-chip">Blender</span>
            <span class="stack-chip">Autodesk Maya</span>
            <span class="stack-chip">ZBrush</span>
            <span class="stack-chip">Substance 3D Painter</span>
            <span class="stack-chip">Adobe After Effects</span>
            <span class="stack-chip">Arnold Renderer</span>
            <span class="stack-chip">Unreal Engine</span>
        </div>
    </div>
</section>

<!-- Full 28 Projects Showcase -->
<section class="portfolio-grid-section py-5 mb-5 position-relative">
    <div class="container py-5 max-w-1300 position-relative z-1">
        <div class="row mb-5 text-center" data-aos="fade-up">
            <div class="col-lg-8 mx-auto">
                <span class="modern-badge mb-3">CGI ARCHIVE</span>
                <h2 class="display-4 fw-900 mb-3" style="font-family: 'Clash Display', sans-serif; color: #111;">Complete <span style="color: var(--page-accent);">Artwork Archive</span></h2>
                <p class="fs-5 opacity-75 text-muted">Explore all 28 high-fidelity 3D models, cinematic environments, and visual effects productions.</p>
            </div>
        </div>

        <div class="row g-4 portfolio-masonry-grid">
            <?php foreach ($projects as $idx => $proj): 
                // Determine sizing: make first 2 featured large, rest 3-col
                $colSize = ($idx < 2) ? 'col-lg-6' : 'col-lg-4 col-md-6';
                $imgHeight = ($idx < 2) ? '400px' : '300px';
                $fallbackImg = $proj['image_url'];
                $localImgUrl = BASE_URL . "public/assets/images/shakti/" . $proj['local_img'];
                $webpLocalPath = PUBLIC_PATH . "/assets/images/shakti/" . pathinfo($proj['local_img'], PATHINFO_FILENAME) . ".webp";
                if (file_exists($webpLocalPath)) {
                    $localImgUrl = BASE_URL . "public/assets/images/shakti/" . pathinfo($proj['local_img'], PATHINFO_FILENAME) . ".webp";
                }
            ?>
            <div class="<?= $colSize ?> portfolio-item-wrapper" data-aos="fade-up" data-aos-delay="<?= ($idx % 3) * 50 ?>">
                <!-- Cinematic 3D Frame Layout (CGI/VFX) -->
                <div class="work-branding-card position-relative overflow-hidden bg-black rounded-4 group-hover" style="height: <?= $imgHeight ?>;">
                    <div class="position-absolute top-0 start-0 w-100 p-3 d-flex justify-content-between align-items-center z-2" style="background: linear-gradient(to bottom, rgba(0,0,0,0.8), transparent);">
                        <span class="badge bg-punchy text-white fw-bold px-3 py-2 rounded-pill" style="letter-spacing: 1px;">PROJECT #<?= str_pad($idx + 1, 2, '0', STR_PAD_LEFT) ?></span>
                        <span class="text-white opacity-75 small fw-bold"><i class="bi bi-aspect-ratio me-1"></i> CGI Render</span>
                    </div>
                    <a href="<?= htmlspecialchars($proj['permalink']) ?>" target="_blank" class="d-block w-100 h-100">
                        <img src="<?= $localImgUrl ?>" onerror="this.src='<?= $fallbackImg ?>'" alt="<?= htmlspecialchars($proj['title']) ?>" class="w-100 h-100 object-fit-cover transition-all" style="filter: brightness(0.95);">
                    </a>
                    <div class="position-absolute bottom-0 start-0 w-100 p-3 z-2 pointer-events-none" style="background: linear-gradient(to top, rgba(0,0,0,0.9), transparent);">
                        <div class="card-result-badge bg-punchy text-white border border-white border-opacity-20 d-inline-block px-3 py-1 rounded-pill small fw-bold">3D Masterpiece</div>
                    </div>
                </div>
                <div class="work-card-content mt-3 p-2">
                    <span class="work-category-tag bg-dark text-white">3D CGI & VFX</span>
                    <h3 class="work-card-title fs-4 mb-2"><?= htmlspecialchars($proj['title']) ?></h3>
                    <p class="work-card-metrics mb-3"><i class="bi bi-activity text-accent-dynamic me-1"></i> Photorealistic 3D Render</p>
                    <div class="work-tech-stack">
                        <span class="tech-tag">Maya</span>
                        <span class="tech-tag">Blender</span>
                        <span class="tech-tag">ZBrush</span>
                        <a href="<?= htmlspecialchars($proj['permalink']) ?>" target="_blank" class="live-link-pill"><i class="bi bi-box-arrow-up-right me-1"></i> View 3D Project</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-5 pt-5" data-aos="fade-up">
            <div class="master-cta-console bg-dark text-white p-5 overflow-hidden position-relative max-w-800 mx-auto" style="border-radius: 36px; border: 2.5px solid #111; box-shadow: 12px 12px 0px var(--page-accent);">
                <div style="position: absolute; right: -150px; top: -150px; width: 400px; height: 400px; background: radial-gradient(circle, rgba(255, 94, 54, 0.25) 0%, transparent 70%); border-radius: 50%; pointer-events: none;"></div>
                <div style="position: absolute; left: -150px; bottom: -150px; width: 400px; height: 400px; background: radial-gradient(circle, rgba(255, 0, 122, 0.15) 0%, transparent 70%); border-radius: 50%; pointer-events: none;"></div>
                
                <h3 class="fw-900 mb-3 text-white display-6 position-relative z-1" style="font-family: 'Clash Display', sans-serif;">Looking for a custom 3D masterpiece?</h3>
                <p class="opacity-75 mb-4 fs-5 position-relative z-1" style="line-height: 1.6;">Partner with Crea8ve Cool to bring your product to life with photorealistic rendering and Hollywood-grade CGI.</p>
                <a href="<?= BASE_URL ?>contact" class="btn btn-punchy btn-lg px-5 py-3 fw-900 position-relative z-1" style="border-radius: 50px; font-size: 18px;">
                    Start Your Project <i class="bi bi-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<style>
/* --- Premium Founder Styling --- */
.social-pill {
    width: 52px;
    height: 52px;
    border-radius: 16px;
    border: 2.5px solid #111;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #111;
    font-size: 20px;
    background: #fff;
    box-shadow: 4px 4px 0px #111;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
}
.social-pill:hover, .social-pill.active-accent {
    background: var(--page-accent);
    color: #fff;
    transform: translate(-4px, -4px);
    box-shadow: 8px 8px 0px #111;
    border-color: #111;
}
.stack-chip {
    background: #fff;
    border: 2px solid #111;
    box-shadow: 4px 4px 0px #111;
    padding: 8px 20px;
    border-radius: 50px;
    font-size: 13px;
    font-weight: 800;
    color: #111;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
}
.stack-chip:hover {
    background: var(--page-accent);
    color: #fff;
    transform: translate(-3px, -3px);
    box-shadow: 7px 7px 0px #111;
    border-color: #111;
}
.modern-badge {
    display: inline-block;
    padding: 6px 18px;
    font-size: 12px;
    font-weight: 900;
    letter-spacing: 2px;
    border-radius: 50px;
    background: #fff;
    color: var(--page-accent);
    border: 2px solid #111;
    box-shadow: 4px 4px 0px #111;
    text-transform: uppercase;
}
.work-branding-card {
    transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}
.work-branding-card:hover {
    transform: translate(-4px, -4px);
    box-shadow: 12px 12px 0px var(--page-accent) !important;
}
.group-hover:hover img {
    transform: scale(1.06);
    filter: brightness(1) !important;
}
.pointer-events-none { pointer-events: none; }
</style>

