<?php 
$data['page_hero_badge'] = 'Project Planner';
$data['page_title_html'] = 'Let\'s Blueprint Your <br><span class="gradient-text">Next Big Scale.</span>';
$data['page_subtitle'] = "Tell us about your goals. Our elite architects will review your business and formulate a tailored strategy audit within 24 hours.";

// Visual element for booking hero
ob_start(); ?>
<div class="booking-hero-visual" style="--accent: <?= $data['hero_color'] ?>;">
    <div class="planner-indicator-box shadow-lg border-3 border-dark border p-4 bg-white rounded-5 text-dark position-relative">
        <div class="d-flex align-items-center gap-3 mb-3">
            <span class="pulse-ring bg-success"></span>
            <span class="small fw-800 text-uppercase letter-spacing-1 text-muted">Active Onboarding</span>
        </div>
        <div class="h3 fw-900 mb-2">3-Step Discovery</div>
        <p class="small text-muted mb-0">Fill out the planner to lock in your priority strategy slot. Only 3 client slots remaining for this month.</p>
    </div>
</div>
<?php 
$data['page_hero_visual'] = ob_get_clean();
require_once APP_PATH . '/views/components/page_hero.php'; 
?>

<!-- Project Planner Inbound Section -->
<section class="section-padding bg-light-soft border-top border-bottom position-relative">
    <div class="container" style="max-width: 1000px;">
        <div class="row justify-content-center">
            <div class="col-lg-10" data-aos="fade-up">
                <div class="p-4 p-md-5 bg-white border-3 border border-dark shadow-punchy rounded-5">
                    
                    <?php if ($data['success']): ?>
                        <div class="alert alert-success border-3 border-dark rounded-4 mb-4 p-4 shadow-punchy-sm text-center" style="background: #28C840; color: white;">
                            <div class="display-1 mb-3">🎉</div>
                            <h2 class="fw-900 mb-2 text-white">TRANSMISSION SECURED!</h2>
                            <p class="fw-bold mb-4">Your project details have been successfully logged in our digital database. Our lead architects are already preparing your customized brand strategy blueprint.</p>
                            <a href="<?= BASE_URL ?>" class="btn btn-dark-punchy text-uppercase px-5 py-3">Back to Homepage</a>
                        </div>
                    <?php else: ?>

                        <!-- Interactive Step Progress Bar -->
                        <div class="planner-steps-wrapper mb-5">
                            <div class="d-flex justify-content-between align-items-center position-relative">
                                <div class="planner-progress-line">
                                    <div class="planner-progress-active" id="progress-bar-width" style="width: 0%;"></div>
                                </div>
                                <div class="planner-indicator-node active" data-target-step="1" id="indicator-1">
                                    <div class="node-dot">1</div>
                                    <span class="node-label">About You</span>
                                </div>
                                <div class="planner-indicator-node" data-target-step="2" id="indicator-2">
                                    <div class="node-dot">2</div>
                                    <span class="node-label">Scope & Budget</span>
                                </div>
                                <div class="planner-indicator-node" data-target-step="3" id="indicator-3">
                                    <div class="node-dot">3</div>
                                    <span class="node-label">The Vision</span>
                                </div>
                            </div>
                        </div>

                        <!-- Main Form -->
                        <form action="<?= BASE_URL ?>booking" method="POST" id="bookingPlannerForm" class="row g-4">
                            
                            <!-- Step 1: About You -->
                            <div class="planner-step-panel" id="planner-step-1">
                                <div class="mb-4">
                                    <h4 class="fw-900 text-dark mb-1">01. Who are we building this for?</h4>
                                    <p class="text-muted small mb-0">Give us your key coordinates so we can address you professionally.</p>
                                </div>
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <label class="form-label fw-900 text-uppercase small opacity-50 letter-spacing-1">Full Name *</label>
                                        <input type="text" name="name" class="form-control br-input-v3" placeholder="John Doe" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-900 text-uppercase small opacity-50 letter-spacing-1">Work Email *</label>
                                        <input type="email" name="email" class="form-control br-input-v3" placeholder="john@company.com" required>
                                    </div>
                                    <div class="col-12 mt-5">
                                        <button type="button" class="btn btn-dark w-100 py-3 fw-900 text-uppercase border-3 border-dark next-planner-step" style="letter-spacing: 0.1em; border-radius: 12px; box-shadow: 6px 6px 0px var(--accent);">
                                            NEXT: CHOOSE SERVICE & BUDGET <i class="bi bi-arrow-right ms-2"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 2: Scope & Budget -->
                            <div class="planner-step-panel d-none" id="planner-step-2">
                                <div class="mb-4">
                                    <h4 class="fw-900 text-dark mb-1">02. Scope & Target Investment</h4>
                                    <p class="text-muted small mb-0">Select what core service you require and your matching investment range.</p>
                                </div>
                                <div class="row g-4">
                                    <div class="col-md-12">
                                        <label class="form-label fw-900 text-uppercase small opacity-50 letter-spacing-1">Service Required *</label>
                                        <select name="service_type" class="form-select br-input-v3" required>
                                            <option value="" selected disabled>Select Core Capability</option>
                                            <option value="Web Design & Dev">Web Design & Systems Engineering</option>
                                            <option value="SEO Domination">Google Search Engine Optimization (SEO)</option>
                                            <option value="3D Motion & Video">3D Motion Graphics & Video Editing</option>
                                            <option value="Performance Ads">Performance Ads & Paid Marketing</option>
                                            <option value="Custom ERP & Automation">Custom ERP Software & Automation</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label fw-900 text-uppercase small opacity-50 letter-spacing-1">Investment Budget (₹) *</label>
                                        <select name="budget" class="form-select br-input-v3" required>
                                            <option value="" selected disabled>Select Target Budget</option>
                                            <option value="₹50,000 - ₹2,00,000">₹50,000 - ₹2,00,000</option>
                                            <option value="₹2,00,000 - ₹5,00,000">₹2,00,000 - ₹5,00,000</option>
                                            <option value="₹5,00,000 - ₹15,00,000">₹5,00,000 - ₹15,00,000</option>
                                            <option value="₹15,00,000+">₹15,00,000+ (Enterprise Custom Scale)</option>
                                        </select>
                                    </div>
                                    <div class="col-12 mt-5 d-flex gap-3">
                                        <button type="button" class="btn btn-outline-dark py-3 fw-900 text-uppercase prev-planner-step" style="border-radius: 12px; flex: 1;">
                                            BACK
                                        </button>
                                        <button type="button" class="btn btn-dark py-3 fw-900 text-uppercase next-planner-step" style="letter-spacing: 0.1em; border-radius: 12px; box-shadow: 6px 6px 0px var(--accent); flex: 2;">
                                            NEXT: THE VISION <i class="bi bi-arrow-right ms-2"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 3: The Vision -->
                            <div class="planner-step-panel d-none" id="planner-step-3">
                                <div class="mb-4">
                                    <h4 class="fw-900 text-dark mb-1">03. Describe Your Ultimate Vision</h4>
                                    <p class="text-muted small mb-0">What are the primary goals, target audience, and roadblocks we should smash?</p>
                                </div>
                                <div class="row g-4">
                                    <div class="col-12">
                                        <label class="form-label fw-900 text-uppercase small opacity-50 letter-spacing-1">Project Brief *</label>
                                        <textarea name="message" class="form-control br-input-v3" rows="5" placeholder="I want to build a legendary brand by... (Include competitors, technical rules, or design tastes you love)" required></textarea>
                                    </div>
                                    <div class="col-12 mt-5 d-flex gap-3">
                                        <button type="button" class="btn btn-outline-dark py-3 fw-900 text-uppercase prev-planner-step" style="border-radius: 12px; flex: 1;">
                                            BACK
                                        </button>
                                        <button type="submit" class="btn btn-dark py-3 fw-900 text-uppercase" style="letter-spacing: 0.1em; border-radius: 12px; box-shadow: 6px 6px 0px var(--accent); flex: 2;">
                                            TRANSMIT PROPOSAL <i class="bi bi-send-fill ms-2"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </form>

                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Include standard call to action at the bottom -->
<?php require_once APP_PATH . '/views/components/cta.php'; ?>

<style>
.booking-hero-visual {
    position: relative;
    width: 320px;
}
.planner-indicator-box {
    border-radius: 24px;
    box-shadow: 8px 8px 0px var(--text-dark);
}
.pulse-ring {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    display: inline-block;
    animation: livePulse 1.5s infinite;
}
@keyframes livePulse {
    0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(40, 200, 64, 0.7); }
    70% { transform: scale(1); box-shadow: 0 0 0 8px rgba(40, 200, 64, 0); }
    100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(40, 200, 64, 0); }
}

.br-input-v3 {
    border: 3px solid var(--text-dark);
    padding: 15px 20px;
    border-radius: 12px;
    font-weight: 700;
    background: transparent;
    transition: all 0.3s;
}
.br-input-v3:focus {
    background: white;
    border-color: var(--accent);
    box-shadow: 6px 6px 0px var(--text-dark);
    outline: none;
}
.shadow-punchy {
    box-shadow: 20px 20px 0px var(--text-dark);
}
.shadow-punchy-sm {
    box-shadow: 6px 6px 0px var(--text-dark);
}

/* Linear step progress bar */
.planner-steps-wrapper {
    position: relative;
    width: 100%;
}
.planner-progress-line {
    position: absolute;
    top: 22px;
    left: 40px;
    right: 40px;
    height: 6px;
    background: #e9ecef;
    z-index: 1;
    border-radius: 3px;
    overflow: hidden;
}
.planner-progress-active {
    height: 100%;
    background: var(--primary-gradient, linear-gradient(135deg, #6A5AE0, #E83E8C));
    transition: width 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}
.planner-indicator-node {
    position: relative;
    z-index: 2;
    display: flex;
    flex-direction: column;
    align-items: center;
    cursor: pointer;
}
.node-dot {
    width: 44px;
    height: 44px;
    border-radius: 50%;
    background: #e9ecef;
    border: 3px solid #dee2e6;
    color: #888;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 900;
    font-size: 16px;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
}
.node-label {
    margin-top: 8px;
    font-size: 11px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: #888;
    transition: color 0.3s;
}
.planner-indicator-node.active .node-dot {
    background: var(--text-dark);
    border-color: var(--text-dark);
    color: #fff;
    transform: scale(1.1);
    box-shadow: 4px 4px 0px var(--accent);
}
.planner-indicator-node.active .node-label {
    color: var(--text-dark);
    font-weight: 900;
}
.planner-indicator-node.completed .node-dot {
    background: #28C840;
    border-color: #28C840;
    color: #fff;
}
.planner-indicator-node.completed .node-label {
    color: #28C840;
}

.planner-step-panel {
    animation: panelReveal 0.4s cubic-bezier(0.16, 1, 0.3, 1) forwards;
}
@keyframes panelReveal {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}

.btn-dark-punchy {
    background: var(--text-dark);
    color: white;
    border-radius: 12px;
    font-weight: 900;
    letter-spacing: 1px;
    box-shadow: 6px 6px 0px var(--accent);
    transition: all 0.3s;
    border: 2px solid var(--text-dark);
}
.btn-dark-punchy:hover {
    transform: translate(-2px, -2px);
    box-shadow: 10px 10px 0px var(--accent);
    color: white;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    let currentStep = 1;
    const totalSteps = 3;
    const form = document.getElementById('bookingPlannerForm');
    if (!form) return;

    const panels = {
        1: document.getElementById('planner-step-1'),
        2: document.getElementById('planner-step-2'),
        3: document.getElementById('planner-step-3')
    };

    const indicators = {
        1: document.getElementById('indicator-1'),
        2: document.getElementById('indicator-2'),
        3: document.getElementById('indicator-3')
    };

    const progressBar = document.getElementById('progress-bar-width');

    function validateStep(step) {
        const panel = panels[step];
        const inputs = panel.querySelectorAll('input[required], select[required], textarea[required]');
        let isValid = true;
        
        inputs.forEach(input => {
            if (!input.value.trim() || !input.checkValidity()) {
                input.classList.add('is-invalid');
                isValid = false;
            } else {
                input.classList.remove('is-invalid');
            }
        });
        
        return isValid;
    }

    function setStep(step) {
        // Toggle Panels
        for (let i = 1; i <= totalSteps; i++) {
            if (i === step) {
                panels[i].classList.remove('d-none');
            } else {
                panels[i].classList.add('d-none');
            }
        }

        // Progress Bar Width
        const progressPercentage = ((step - 1) / (totalSteps - 1)) * 100;
        if (progressBar) {
            progressBar.style.width = progressPercentage + '%';
        }

        // Indicators Styling
        for (let i = 1; i <= totalSteps; i++) {
            const node = indicators[i];
            if (i === step) {
                node.classList.add('active');
                node.classList.remove('completed');
            } else if (i < step) {
                node.classList.remove('active');
                node.classList.add('completed');
            } else {
                node.classList.remove('active', 'completed');
            }
        }

        currentStep = step;
        // Stay in place; do not scroll viewport on step changes
    }

    // Next Buttons
    document.querySelectorAll('.next-planner-step').forEach(btn => {
        btn.addEventListener('click', function() {
            if (validateStep(currentStep)) {
                setStep(currentStep + 1);
            }
        });
    });

    // Prev Buttons
    document.querySelectorAll('.prev-planner-step').forEach(btn => {
        btn.addEventListener('click', function() {
            setStep(currentStep - 1);
        });
    });

    // Form inputs cleanup on type
    form.querySelectorAll('input, select, textarea').forEach(input => {
        input.addEventListener('input', function() {
            if (this.value.trim()) {
                this.classList.remove('is-invalid');
            }
        });
    });
});
</script>
