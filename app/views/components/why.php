<section id="why" class="py-5 overflow-hidden position-relative" style="background-color: #050507 !important; color: #FFFFFF !important; border-top: 2px solid #111111;">
    
    <!-- Ambient Neon Background Glows -->
    <div class="ambient-glow" style="background: radial-gradient(circle, rgba(106, 90, 224, 0.12) 0%, transparent 70%); top: -10%; left: -5%;"></div>
    <div class="ambient-glow" style="background: radial-gradient(circle, rgba(255, 0, 122, 0.08) 0%, transparent 70%); bottom: -10%; right: -5%;"></div>

    <div class="container py-5 position-relative" style="max-width:1300px;">
        <div class="row align-items-center g-5">
            
            <!-- LEFT COLUMN: Compact Header & Direct Agency Access -->
            <div class="col-lg-5 col-12" data-aos="fade-right">
                <div class="section-header mb-0">
                    <span class="section-tag mb-3">The Crea8ve Cool Advantage</span>
                    <h2 class="section-title text-white m-0" style="font-family: 'Montserrat', sans-serif; font-weight: 800; line-height: 1.1; letter-spacing: -1px;">
                        We Architect <br>High-Yield <span class="gradient-text">Brands.</span>
                    </h2>
                </div>
                
                <p class="mt-4 text-white-50" style="font-size: 17px; max-width: 480px; line-height: 1.6; font-weight: 400;">
                    We reject generic templates and superficial aesthetic trends. We build digital-first ecosystems engineered specifically to convert users into loyal customers.
                </p>

                <!-- Compact Direct Access Banner -->
                <div class="mt-5 p-4 bg-glossy-black shadow-brutal" style="border-radius: 20px; border: 1px solid rgba(255,255,255,0.12);">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="avatar-group d-flex align-items-center flex-shrink-0">
                            <img src="https://i.pravatar.cc/100?u=director1" width="44" height="44" class="rounded-circle border border-2 border-dark" alt="Creative Director Shakti Kumar" title="Shakti Kumar — Lead Creative Director">
                            <img src="https://i.pravatar.cc/100?u=director2" width="44" height="44" class="rounded-circle border border-2 border-dark" style="margin-left:-16px;" alt="Agency Director" title="Agency Director — Strategy & Execution">
                        </div>
                        <div>
                            <h3 class="text-white m-0 fw-bold" style="font-size: 16px;">Talk Directly to Directors</h3>
                            <span class="text-white-50 small">Zero corporate bloat & delays.</span>
                        </div>
                    </div>
                    <a href="<?= BASE_URL ?>contact" class="btn btn-gradient w-100 py-3 fw-bold m-0 d-flex align-items-center justify-content-center gap-2" style="border-radius: 12px; font-size: 15px;">
                        Book Strategy Call <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- RIGHT COLUMN: Compact Animated Accordion Showcase -->
            <div class="col-lg-7 col-12" data-aos="fade-left">
                <div class="compact-animated-accordion d-flex flex-column gap-3" id="whyCompactAccordion">
                    <?php 
                    if (isset($data['why']) && is_array($data['why'])):
                        $vibrantColors = ['#6A5AE0', '#FF007A', '#00F3FF', '#FFB800'];
                        foreach ($data['why'] as $i => $why): 
                            $color = $vibrantColors[$i % count($vibrantColors)];
                            $isFirst = ($i === 0);
                    ?>
                    <div class="compact-accordion-item position-relative overflow-hidden <?= $isFirst ? 'active' : '' ?>" 
                         style="--neon-glow: <?= $color ?>;">
                        
                        <div class="item-accent-line"></div>

                        <button class="compact-accordion-trigger d-flex align-items-center justify-content-between w-100 p-4 border-0 bg-transparent text-start <?= $isFirst ? '' : 'collapsed' ?>" 
                                type="button" data-bs-toggle="collapse" data-bs-target="#compactCollapse<?= $i ?>" 
                                aria-expanded="<?= $isFirst ? 'true' : 'false' ?>" aria-controls="compactCollapse<?= $i ?>">
                            
                            <span class="d-flex align-items-center gap-3.5">
                                <span class="compact-icon-box flex-shrink-0 d-flex" style="color: <?= $color ?>; background: <?= $color ?>15; border-color: <?= $color ?>30;">
                                    <i class="bi <?= htmlspecialchars($why['icon']) ?>"></i>
                                </span>
                                <span class="compact-item-title m-0 text-white fw-bold d-block" style="font-size: 20px;">
                                    <?= htmlspecialchars($why['title']) ?>
                                </span>
                            </span>

                            <span class="compact-action-toggle flex-shrink-0 d-flex" style="color: <?= $color ?>;">
                                <i class="bi bi-chevron-down"></i>
                            </span>

                        </button>

                        <div id="compactCollapse<?= $i ?>" class="accordion-collapse collapse <?= $isFirst ? 'show' : '' ?>" data-bs-parent="#whyCompactAccordion">
                            <div class="px-4 pb-4 pt-0 ps-5 ms-3">
                                <div class="ps-3 pt-2 border-top border-secondary border-opacity-25">
                                    <p class="text-white-50 m-0" style="font-size: 15.5px; line-height: 1.6;">
                                        <?= htmlspecialchars($why['desc']) ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <?php 
                        endforeach; 
                    endif;
                    ?>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
/* Ambient Glows */
.ambient-glow {
    position: absolute;
    width: 500px;
    height: 500px;
    pointer-events: none;
    z-index: 0;
}

/* Compact Animated Accordion Styling */
.compact-accordion-item {
    background: rgba(20, 20, 28, 0.4);
    backdrop-filter: blur(16px);
    -webkit-backdrop-filter: blur(16px);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 20px;
    transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}

.compact-accordion-item .item-accent-line {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    width: 0px;
    background: var(--neon-glow);
    transition: width 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}

.compact-accordion-item:hover {
    background: rgba(25, 25, 35, 0.6);
    border-color: rgba(255, 255, 255, 0.15);
    transform: translateX(4px);
}

.compact-accordion-item.active,
.compact-accordion-item:has(.show) {
    background: rgba(25, 25, 36, 0.8);
    border-color: var(--neon-glow);
    box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.5), 0 0 20px var(--neon-glow)15;
}

.compact-accordion-item.active .item-accent-line,
.compact-accordion-item:has(.show) .item-accent-line {
    width: 5px;
}

/* Trigger Button */
.compact-accordion-trigger {
    cursor: pointer;
    user-select: none;
}

.compact-icon-box {
    width: 48px;
    height: 48px;
    border-radius: 14px;
    border: 1px solid transparent;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}

.compact-accordion-item:hover .compact-icon-box,
.compact-accordion-item.active .compact-icon-box,
.compact-accordion-item:has(.show) .compact-icon-box {
    transform: scale(1.1) rotate(-5deg);
    border-color: var(--neon-glow);
    background: var(--neon-glow)25;
}

.compact-item-title {
    letter-spacing: -0.3px;
    transition: color 0.3s ease;
}

.compact-accordion-item:has(.show) .compact-item-title {
    color: var(--neon-glow) !important;
}

/* Action Toggle Icon */
.compact-action-toggle {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.05);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
    transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}

.compact-accordion-trigger:not(.collapsed) .compact-action-toggle {
    transform: rotate(180deg);
    background: var(--neon-glow);
    color: #000 !important;
    box-shadow: 0 0 12px var(--neon-glow);
}
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const items = document.querySelectorAll('.compact-accordion-item');
    items.forEach(item => {
        const collapseElement = item.querySelector('.accordion-collapse');
        if (collapseElement) {
            collapseElement.addEventListener('show.bs.collapse', () => {
                item.classList.add('active');
            });
            collapseElement.addEventListener('hide.bs.collapse', () => {
                item.classList.remove('active');
            });
        }
    });
});
</script>
