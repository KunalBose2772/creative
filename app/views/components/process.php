<section id="process" class="py-5 bg-white overflow-hidden" style="border-top: 2.5px solid #111111;">
    <div class="container py-4" style="max-width:1300px;">
        
        <!-- Section Header (Neo-Brutalist Alignment) -->
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-5 pb-4" style="border-bottom: 2px solid #111;" data-aos="fade-up">
            <div class="section-header mb-0">
                <span class="section-tag mb-3">Interactive Planner</span>
                <h2 class="section-title m-0" style="font-family: 'Montserrat', sans-serif; font-weight: 800; color: #111; line-height: 1.1; letter-spacing: -1px;">
                    Design Your <span class="gradient-text">Scope.</span>
                </h2>
            </div>
            <p class="mt-3 mt-md-0 text-muted" style="font-size: 17px; max-width: 520px; font-weight: 500; line-height: 1.6;">
                Select your growth channels, dial in your required velocity, and instantly generate a tailormade design and engineering blueprint.
            </p>
        </div>

        <!-- Planner Panel Workspace -->
        <div class="row g-4 g-lg-5 align-items-stretch mt-3">
            
            <!-- LEFT PANEL: Controls -->
            <div class="col-lg-7" data-aos="fade-right">
                <div class="planner-controls-card">
                    
                    <!-- STEP 1: Select Services -->
                    <div class="planner-step-group mb-4">
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="step-badge">01</span>
                            <h3 class="step-label m-0 text-uppercase">Choose Required Growth Channels</h3>
                        </div>
                        <div class="services-selector-grid">
                            
                            <div class="service-pill-btn active" data-service="web" data-days="14" data-comp="25" data-label="Web Architecture">
                                <i class="bi bi-code-slash fs-5"></i>
                                <div class="text-start">
                                    <div class="pill-title">Web Engineering</div>
                                    <div class="pill-meta">Next.js & Robust Backends</div>
                                </div>
                            </div>

                            <div class="service-pill-btn active" data-service="ui" data-days="8" data-comp="15" data-label="UI/UX & Figma">
                                <i class="bi bi-window-sidebar fs-5"></i>
                                <div class="text-start">
                                    <div class="pill-title">UI/UX Figma Decks</div>
                                    <div class="pill-meta">Premium Brand Wireframes</div>
                                </div>
                            </div>

                            <div class="service-pill-btn" data-service="motion" data-days="12" data-comp="30" data-label="3D & Motion Production">
                                <i class="bi bi-camera-reels fs-5"></i>
                                <div class="text-start">
                                    <div class="pill-title">3D & Motion Reels</div>
                                    <div class="pill-meta">Davinci & After Effects</div>
                                </div>
                            </div>

                            <div class="service-pill-btn" data-service="growth" data-days="6" data-comp="10" data-label="Growth Marketing">
                                <i class="bi bi-rocket-takeoff fs-5"></i>
                                <div class="text-start">
                                    <div class="pill-title">Growth Marketing</div>
                                    <div class="pill-meta">SEMrush SEO & Ads</div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- STEP 2: Project Scale Slider -->
                    <div class="planner-step-group mb-4 pt-2">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center gap-2">
                                <span class="step-badge">02</span>
                                <h3 class="step-label m-0 text-uppercase">Scale & Complexity Factor</h3>
                            </div>
                            <span class="slider-val-badge text-uppercase font-monospace" id="scaleBadge">Market Disruptor</span>
                        </div>
                        
                        <div class="custom-slider-wrapper">
                            <input type="range" class="planner-slider" id="scaleSlider" min="1" max="3" value="2" step="1" aria-label="Project scale complexity factor slider">
                            <div class="slider-points-labels d-flex justify-content-between mt-2 font-monospace">
                                <span>STARTUP MVP</span>
                                <span>MARKET DISRUPTOR</span>
                                <span>ENTERPRISE PLATFORM</span>
                            </div>
                        </div>
                    </div>

                    <!-- STEP 3: Timeline Velocity -->
                    <div class="planner-step-group pt-2">
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="step-badge">03</span>
                            <h3 class="step-label m-0 text-uppercase">Select Production Intensity</h3>
                        </div>
                        <div class="d-flex gap-3">
                            <button class="intensity-btn active" data-pace="standard" data-factor="1.0">
                                <i class="bi bi-calendar3 me-2"></i> Standard Pace
                            </button>
                            <button class="intensity-btn" data-pace="hyper" data-factor="0.6">
                                <i class="bi bi-lightning-charge-fill text-warning me-2 animate-pulse"></i> Hyper-Express (High Priority)
                            </button>
                        </div>
                    </div>

                </div>
            </div>

            <!-- RIGHT PANEL: Live Console Ticket Display -->
            <div class="col-lg-5" data-aos="fade-left">
                <div class="planner-terminal-card d-flex flex-column justify-content-between">
                    
                    <div>
                        <!-- Console Header -->
                        <div class="terminal-top d-flex justify-content-between align-items-center mb-4">
                            <div class="terminal-dots d-flex gap-1.5">
                                <span></span><span></span><span></span>
                            </div>
                            <span class="monospace text-success" style="font-size: 11px;">SYS_STATUS // ONLINE</span>
                        </div>

                        <!-- Real-time Summary Sheet -->
                        <div class="terminal-receipt">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="monospace text-muted">BLUEPRINT CODE:</span>
                                <span class="monospace text-white fw-bold" id="blueprintHash">#CC-WEB-UI-842</span>
                            </div>
                            <div class="receipt-divider mb-3"></div>

                            <!-- Big Dynamic Values -->
                            <div class="row text-center mb-4 g-2">
                                <div class="col-6">
                                    <div class="terminal-metric-box">
                                        <div class="metric-lbl">EST. TIMELINE</div>
                                        <div class="metric-val text-white" id="outTimeline">22 Days</div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="terminal-metric-box">
                                        <div class="metric-lbl">COMPLEXITY</div>
                                        <div class="metric-val" id="outComplexity" style="color: #6A5AE0;">40/100</div>
                                    </div>
                                </div>
                            </div>

                            <!-- List of deliverables generated in real-time -->
                            <div class="mb-3">
                                <span class="monospace text-muted d-block mb-2">RECOMMENDED SCOPE ITEMS:</span>
                                <div class="scope-deliverables-list d-flex flex-column gap-2" id="deliverablesList">
                                    <!-- Populated dynamically via JS -->
                                </div>
                            </div>

                            <div class="receipt-divider mb-3"></div>
                            
                            <!-- Growth Bump projection -->
                            <div class="d-flex justify-content-between align-items-center p-3 rounded-3" style="background: rgba(40, 200, 64, 0.08); border: 1.5px solid rgba(40, 200, 64, 0.15);">
                                <span class="monospace font-9 text-success fw-bold">CONVERSION VECTOR:</span>
                                <span class="monospace text-success fw-extrabold fs-5" id="outPotential">+185% Bump</span>
                            </div>

                        </div>
                    </div>

                    <!-- Direct Lock-in Action Call -->
                    <div class="mt-4">
                        <button class="lock-blueprint-btn text-uppercase w-100 py-3 font-clash" id="lockBlueprintBtn">
                            Lock In This Blueprint <i class="bi bi-arrow-right ms-2 fs-5"></i>
                        </button>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>

<style>
/* --- Scope Planner Master Styles --- */
.planner-controls-card {
    background: #FFFFFF;
    border: 2.5px solid #111111;
    border-radius: 24px;
    box-shadow: 6px 6px 0px #111111;
    padding: 30px;
    height: 100%;
}

.step-badge {
    background: #111111;
    color: #FFFFFF;
    font-size: 11px;
    font-weight: 900;
    font-family: monospace;
    width: 20px;
    height: 20px;
    border-radius: 4px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.step-label {
    font-size: 13px;
    font-weight: 900;
    letter-spacing: 1.5px;
    color: #111111;
}

/* Services Pill Buttons Grid */
.services-selector-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 16px;
}

.service-pill-btn {
    background: #F8F8FA;
    border: 2px solid #111111;
    border-radius: 14px;
    padding: 14px 20px;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 16px;
    transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
    user-select: none;
    position: relative;
    box-shadow: 3px 3px 0px #111111;
}

.service-pill-btn:hover {
    transform: translate(-2px, -2px);
    box-shadow: 5px 5px 0px #111111;
}

.service-pill-btn.active {
    background: #111111;
    color: #FFFFFF !important;
    transform: translate(-3px, -3px);
    box-shadow: 6px 6px 0px var(--primary-start);
    border-color: #111111;
}

.service-pill-btn.active .pill-meta {
    color: rgba(255, 255, 255, 0.6);
}

.pill-title {
    font-size: 14px;
    font-weight: 900;
    text-transform: uppercase;
}

.pill-meta {
    font-size: 11px;
    color: #888894;
    font-weight: 500;
}

/* Custom Styled Slider */
.planner-slider {
    -webkit-appearance: none;
    width: 100%;
    height: 12px;
    border-radius: 20px;
    background: #EAEAEF;
    border: 2px solid #111111;
    outline: none;
    margin: 15px 0;
}

.planner-slider::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 24px;
    height: 24px;
    border-radius: 50%;
    background: #FFFFFF;
    border: 3px solid #111111;
    cursor: pointer;
    box-shadow: 3px 3px 0px #111111;
    transition: transform 0.1s ease;
}

.planner-slider::-webkit-slider-thumb:hover {
    transform: scale(1.15);
}

.slider-val-badge {
    font-size: 11px;
    font-weight: 900;
    color: var(--primary-start);
    background: var(--primary-start)15;
    padding: 3px 10px;
    border: 1.5px solid var(--primary-start)30;
    border-radius: 30px;
}

/* Intensity Toggle Buttons */
.intensity-btn {
    flex-grow: 1;
    background: #F8F8FA;
    border: 2px solid #111111;
    border-radius: 12px;
    padding: 14px 20px;
    font-weight: 900;
    font-size: 14px;
    cursor: pointer;
    transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
    box-shadow: 3px 3px 0px #111111;
}

.intensity-btn:hover {
    transform: translate(-2px, -2px);
    box-shadow: 5px 5px 0px #111111;
}

.intensity-btn.active {
    background: #111111;
    color: #FFFFFF;
    transform: translate(-3px, -3px);
    box-shadow: 6px 6px 0px #FEBC2E;
}

/* RIGHT PANEL: Live Console Card */
.planner-terminal-card {
    background: #0C0C0F;
    border: 2.5px solid #111111;
    border-radius: 24px;
    box-shadow: 6px 6px 0px #111111;
    padding: 30px;
    height: 100%;
    position: relative;
}

.terminal-dots span {
    display: inline-block;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: transparent;
    border: 1.5px solid #222530;
}
.terminal-dots span:nth-child(1) { background: #FF5F56; border-color: #FF5F56; }
.terminal-dots span:nth-child(2) { background: #FFBD2E; border-color: #FFBD2E; }
.terminal-dots span:nth-child(3) { background: #27C93F; border-color: #27C93F; }

.terminal-receipt {
    padding: 18px;
    background: #14141A;
    border: 2px solid #222530;
    border-radius: 16px;
}

.receipt-divider {
    height: 1px;
    border-bottom: 2px dashed #222530;
}

.terminal-metric-box {
    background: #0C0C0F;
    border: 1.5px solid #222530;
    border-radius: 12px;
    padding: 12px;
}

.metric-lbl {
    font-size: 8px;
    font-weight: 800;
    letter-spacing: 1px;
    color: #555866;
    margin-bottom: 4px;
    font-family: monospace;
}

.metric-val {
    font-size: 22px;
    font-weight: 900;
    font-family: 'Clash Display', sans-serif;
}

.scope-deliverables-list {
    max-height: 160px;
    overflow-y: auto;
}

.scope-item-row {
    font-size: 11.5px;
    font-family: monospace;
    color: #A0A0AB;
    display: flex;
    align-items: center;
    gap: 8px;
}

.scope-item-row i {
    color: #27C93F;
}

/* Master Lock blueprint button */
.lock-blueprint-btn {
    background: var(--primary-start);
    color: #FFFFFF;
    border: 2.5px solid #111111;
    border-radius: 50px;
    font-weight: 900;
    font-size: 16px;
    cursor: pointer;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    box-shadow: 4px 4px 0px #111111;
}

.lock-blueprint-btn:hover {
    transform: translate(-3px, -3px);
    box-shadow: 8px 8px 0px #111111;
}

.lock-blueprint-btn:active {
    transform: translate(-1px, -1px);
    box-shadow: 3px 3px 0px #111111;
}
</style>

<script>
class InteractiveLaunchPlanner {
    constructor() {
        this.selectedServices = ['web', 'ui'];
        this.scaleLevel = 2; // Default Market Disruptor
        this.paceFactor = 1.0; // Default Standard Pace
        this.paceName = "Standard Pace";

        this.init();
    }

    init() {
        this.initDOM();
        this.initEvents();
        this.recalculateBlueprint();
    }

    initDOM() {
        this.servicePills = document.querySelectorAll('.service-pill-btn');
        this.slider = document.getElementById('scaleSlider');
        this.scaleBadge = document.getElementById('scaleBadge');
        this.intensityBtns = document.querySelectorAll('.intensity-btn');

        // Output tags
        this.timelineOut = document.getElementById('outTimeline');
        this.complexityOut = document.getElementById('outComplexity');
        this.potentialOut = document.getElementById('outPotential');
        this.hashOut = document.getElementById('blueprintHash');
        this.deliverablesList = document.getElementById('deliverablesList');
        this.lockBtn = document.getElementById('lockBlueprintBtn');
    }

    initEvents() {
        // Toggling service checkboxes
        this.servicePills.forEach(pill => {
            pill.onclick = () => {
                const srv = pill.getAttribute('data-service');
                if (pill.classList.contains('active')) {
                    // Prevent deselecting if it is the only one remaining
                    if (this.selectedServices.length <= 1) return;
                    pill.classList.remove('active');
                    this.selectedServices = this.selectedServices.filter(s => s !== srv);
                } else {
                    pill.classList.add('active');
                    this.selectedServices.push(srv);
                }
                this.recalculateBlueprint();
            };
        });

        // Sliders change event
        if (this.slider) {
            this.slider.oninput = (e) => {
                this.scaleLevel = parseInt(e.target.value);
                const labels = ["Starter MVP", "Market Disruptor", "Enterprise Platform"];
                if (this.scaleBadge) {
                    this.scaleBadge.textContent = labels[this.scaleLevel - 1];
                }
                this.recalculateBlueprint();
            };
        }

        // Timeline pace buttons
        this.intensityBtns.forEach(btn => {
            btn.onclick = () => {
                this.intensityBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                this.paceFactor = parseFloat(btn.getAttribute('data-factor'));
                this.paceName = btn.getAttribute('data-pace') === 'hyper' ? "Hyper-Express" : "Standard Pace";
                this.recalculateBlueprint();
            };
        });

        // Trigger action
        if (this.lockBtn) {
            this.lockBtn.onclick = () => {
                this.lockAndRedirect();
            };
        }
    }

    recalculateBlueprint() {
        let baseDays = 0;
        let baseComplexity = 0;
        let deliverables = [];
        let hashCodes = [];

        // Sum up from active elements
        this.servicePills.forEach(pill => {
            const srv = pill.getAttribute('data-service');
            if (this.selectedServices.includes(srv)) {
                baseDays += parseInt(pill.getAttribute('data-days'));
                baseComplexity += parseInt(pill.getAttribute('data-comp'));
                
                // Add deliverables matching key
                const label = pill.getAttribute('data-label');
                deliverables.push(label);
                hashCodes.push(srv.substring(0, 2).toUpperCase());
            }
        });

        // Apply slider multipliers
        let scaleMultiplier = 1.0;
        let potentialText = "+185% Avg Growth";
        let complexityOffset = 0;

        if (this.scaleLevel === 1) {
            scaleMultiplier = 0.7;
            complexityOffset = -15;
            potentialText = "+110% Avg Growth";
        } else if (this.scaleLevel === 3) {
            scaleMultiplier = 1.35;
            complexityOffset = 25;
            potentialText = "+290% Avg Growth";
        }

        // Calculate final estimated timeline and complexity score
        let finalTimeline = Math.round(baseDays * scaleMultiplier * this.paceFactor);
        let finalComplexity = Math.min(100, Math.max(15, Math.round(baseComplexity + complexityOffset)));

        // Style target complexity colors
        let complexityColor = "#6A5AE0"; // Purple
        if (finalComplexity > 60) complexityColor = "#FF5F57"; // Red
        else if (finalComplexity < 30) complexityColor = "#28C840"; // Green

        // Render UI outputs
        if (this.timelineOut) {
            this.timelineOut.textContent = `${finalTimeline} Days`;
        }
        if (this.complexityOut) {
            this.complexityOut.textContent = `${finalComplexity}/100`;
            this.complexityOut.style.color = complexityColor;
        }
        if (this.potentialOut) {
            this.potentialOut.textContent = potentialText;
        }

        // Generate custom blueprint hash code
        const hashNum = 800 + finalTimeline + finalComplexity;
        const generatedHash = `#CC-${hashCodes.join('-')}-${hashNum}`;
        if (this.hashOut) {
            this.hashOut.textContent = generatedHash;
        }

        // Dynamic list rendering
        if (this.deliverablesList) {
            this.deliverablesList.innerHTML = '';
            
            // Core deliverables
            deliverables.forEach(item => {
                const row = document.createElement('div');
                row.className = 'scope-item-row';
                row.innerHTML = `<i class="bi bi-patch-check-fill"></i> <span>Ready: ${item}</span>`;
                this.deliverablesList.appendChild(row);
            });

            // Add standard engine deliverables
            const metaRow = document.createElement('div');
            metaRow.className = 'scope-item-row';
            metaRow.innerHTML = `<i class="bi bi-patch-check-fill"></i> <span>Ready: 1:1 Responsive Design Q/A</span>`;
            this.deliverablesList.appendChild(metaRow);
        }
    }

    lockAndRedirect() {
        // Collect choices text
        const code = this.hashOut ? this.hashOut.textContent : '#CC-LAUNCH-PLAN';
        const timelineText = this.timelineOut ? this.timelineOut.textContent : '22 Days';
        const potentialText = this.potentialOut ? this.potentialOut.textContent : '+185%';
        const magnitudeLabel = this.scaleBadge ? this.scaleBadge.textContent : 'Market Disruptor';
        
        let chosenServices = [];
        this.servicePills.forEach(pill => {
            const srv = pill.getAttribute('data-service');
            if (this.selectedServices.includes(srv)) {
                chosenServices.push(pill.querySelector('.pill-title').textContent);
            }
        });

        // Formulate prefilled text block
        const prefillText = `Hey Crea8ve Cool Team!\n\nI just designed my custom launch blueprint in your project scope planner. Let's make it happen:\n\n- BLUEPRINT: ${code}\n- SERVICES: ${chosenServices.join(', ')}\n- SCALE: ${magnitudeLabel}\n- PACE: ${this.paceName}\n- EST. TIMELINE: ${timelineText}\n- POTENTIAL: ${potentialText}\n\nLet's build this outstanding brand!`;

        // Attempt to find form textarea (usually has id 'message')
        const messageBox = document.getElementById('message');
        if (messageBox) {
            messageBox.value = prefillText;
        }

        // Smooth scroll user to CTA/Contact Section
        const contactSection = document.getElementById('cta') || document.getElementById('contact');
        if (contactSection) {
            contactSection.scrollIntoView({ behavior: 'smooth' });
            // Flash feedback animation on message container
            setTimeout(() => {
                messageBox.focus();
                messageBox.classList.add('flash-indicator');
                setTimeout(() => messageBox.classList.remove('flash-indicator'), 1000);
            }, 800);
        }
    }
}

// Bind to DOM load
document.addEventListener('DOMContentLoaded', () => {
    new InteractiveLaunchPlanner();
});
</script>
