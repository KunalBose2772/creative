<?php
// app/views/components/video_showcase.php

// Data for the cinematic reels with local video assets (9:16 Portrait optimized)
$reels = [
    [
        'title' => 'Eyora Digital', 
        'tag' => 'Premium Branding',
        'desc' => 'High-contrast luxury motion branding for elite eyewear. Crafted to disrupt and capture digital focus.',
        'metric' => '98% ROAS',
        'color' => '#6A5AE0',
        'software' => 'Premiere • After Effects',
        'file' => 'v1_signature.mp4',
        'passes' => 'LUT-Grade • Motion Blur',
    ],
    [
        'title' => 'BLPK 3D Tech', 
        'tag' => '3D Engineering',
        'desc' => 'Fluid 3D transformations showcasing structural complexity and multi-surface material engineering.',
        'metric' => '2.4M Views',
        'color' => '#FF007A',
        'software' => 'Blender 3D • Cycles Engine',
        'file' => 'v2_blpk.mp4',
        'passes' => 'Cycles GI • Mesh Bake',
    ],
    [
        'title' => 'Carat Lane', 
        'tag' => 'Motion Design',
        'desc' => 'Minimalist kinetic energy elevating product desirability and structural grace in modern luxury.',
        'metric' => '45% ROI',
        'color' => '#00D2FF',
        'software' => 'After Effects • Vector Suite',
        'file' => 'v3_caratlane.mp4',
        'passes' => 'Path Vector • Blur Depth',
    ],
    [
        'title' => 'Chicken Bite', 
        'tag' => 'Social Growth',
        'desc' => 'Aggressive, high-retention viral editing for TikTok. Synchronized speed-ramps engineered for loops.',
        'metric' => '150k Shares',
        'color' => '#FFB800',
        'software' => 'Premiere Pro • Audition',
        'file' => 'v4_chickenbite.mp4',
        'passes' => 'Speed Ramps • VFX Overlay',
    ]
];
?>

<section id="video-showcase" class="py-5 overflow-hidden bg-studio-dark text-white">
    <!-- Immersive Grid Network and Background Ambient -->
    <div class="studio-ambient-network"></div>
    
    <div class="container" style="max-width: 1300px;">
        <!-- Compact Header -->
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end pb-3 mb-4 position-relative z-3" style="border-bottom: 2px solid #1A1A1E;" data-aos="fade-up">
            <div>
                <span class="studio-live-tag mb-2 d-inline-flex align-items-center gap-2">
                    <span class="live-dot pulse"></span> DIRECTORY: MOTION STUDIO 3.0
                </span>
                <h2 class="section-title m-0 text-white" style="font-family: 'Montserrat', sans-serif; font-weight: 800; font-size: clamp(24px, 3.5vw, 36px) !important; line-height: 1.1; letter-spacing: -1px;">
                    Cinematic Director <span class="gradient-text">Engine.</span>
                </h2>
            </div>
            <div class="mt-2 mt-md-0 d-flex flex-column align-items-md-end gap-0.5">
                <span class="monospace text-success fw-bold" style="font-size: 11px;">NLE_SYSTEM // ACTIVE</span>
                <p class="m-0 opacity-50 small text-uppercase monospace" style="letter-spacing: 2px; font-size: 8.5px;">VOL.03 // PORTRAIT VIEWPORT CONSOLE</p>
            </div>
        </div>

        <!-- Master NLE Control Console Deck -->
        <div class="nle-studio-console" data-aos="zoom-in" data-aos-delay="100">
            <!-- Console Topbar -->
            <div class="console-top-bar d-flex align-items-center justify-content-between">
                <div class="window-dots">
                    <span class="dot-r"></span>
                    <span class="dot-y"></span>
                    <span class="dot-g"></span>
                </div>
                <div class="console-meta-tag monospace text-uppercase">
                    Console: CREA8VE_PORTRAIT_v3.0 // ACTIVE_CHANNEL: <span id="active-console-chan">CH_01</span>
                </div>
                <div class="d-none d-md-block monospace text-white-50" style="font-size: 9px; letter-spacing: 1.5px;">
                    RENDER_STATUS: OK
                </div>
            </div>

            <!-- Dashboard Columns (Horizontal split) -->
            <div class="row g-0">
                
                <!-- LEFT COLUMN: Portrait Master Preview Monitor (Aspect 9:16 optimized) -->
                <div class="col-lg-4 p-3 d-flex flex-column align-items-center justify-content-center border-end-studio">
                    <div class="master-display-monitor">
                        <div class="monitor-screen-container">
                            <div class="monitor-glass-reflection"></div>
                            <div class="monitor-glitch-overlay" id="videoGlitchOverlay"></div>
                            
                            <!-- Master Video Player Feeds -->
                            <?php foreach ($reels as $index => $reel): ?>
                            <video src="<?= BASE_URL ?>public/assets/videos/<?= $reel['file'] ?>" 
                                   id="monitor-video-<?= $index ?>" 
                                   muted 
                                   playsinline 
                                   preload="none"
                                   class="monitor-video-feed <?= $index === 0 ? 'active' : '' ?>" 
                                   style="--accent-glow: <?= $reel['color'] ?>;">
                                <track kind="captions" src="" srclang="en" label="English" default>
                            </video>
                            <?php endforeach; ?>

                            <!-- Telemetry HUD Layer -->
                            <div class="monitor-hud-overlay">
                                <div class="d-flex justify-content-between align-items-center w-100 px-3 pt-3">
                                    <span class="monospace text-danger font-9 d-flex align-items-center gap-1">
                                        <span class="rec-dot-tiny pulse"></span> REC
                                    </span>
                                    <span class="monospace font-9 text-white-50" id="monitor-clock">12:00</span>
                                </div>
                                
                                <div class="safe-area-brackets"></div>
                                <div class="safe-area-crosshair"></div>
                                
                                <div class="monitor-hud-footer d-flex justify-content-between align-items-center w-100 px-3 pb-3">
                                    <span class="monospace text-white-50 font-8" id="active-channel-badge">CH_01 // EYORA</span>
                                    <span class="monospace text-warning font-10 fw-bold" id="monitor-timecode">00:00:00:00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RIGHT COLUMN: Telemetry CAM Switcher & Timeline (Compact Side Console) -->
                <div class="col-lg-8 d-flex flex-column justify-content-between p-3 bg-console-side">
                    
                    <!-- Switcher Section: 2x2 Interactive Grid -->
                    <div>
                        <div class="panel-header d-flex justify-content-between align-items-center mb-2">
                            <span class="monospace font-9 tracking-wider text-white-50">// SELECT VIDEO SEQUENCE</span>
                            <span class="status-indicator monospace font-8 text-success d-flex align-items-center gap-1">
                                <span class="pulse-green"></span> PLAYBACK: LIVE
                            </span>
                        </div>

                        <div class="row g-2" id="switcherButtonsContainer">
                            <?php foreach ($reels as $index => $reel): ?>
                            <div class="col-6">
                                <button class="cam-channel-btn <?= $index === 0 ? 'active' : '' ?>" 
                                        data-channel="<?= $index ?>" 
                                        style="--accent-color: <?= $reel['color'] ?>;">
                                    <span class="channel-status-light d-block"></span>
                                    <span class="d-flex align-items-center justify-content-between w-100">
                                        <span class="d-flex align-items-center gap-2">
                                            <span class="channel-num monospace">CH_0<?= $index + 1 ?></span>
                                            <span class="channel-title text-uppercase font-clash" style="font-size: 11px;"><?= $reel['title'] ?></span>
                                        </span>
                                        <span class="metric-val text-success fw-bold monospace" style="font-size: 11px;"><?= explode(' ', $reel['metric'])[0] ?></span>
                                    </span>
                                </button>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Meta specs card (Compact center display) -->
                    <div class="p-3 my-3 bg-studio-dark-soft border-accent-dash rounded-3" style="min-height: 98px;">
                        <div id="metaSpecsContainer">
                            <?php foreach ($reels as $index => $reel): ?>
                            <div class="meta-spec-slide <?= $index === 0 ? 'active' : '' ?>" id="meta-spec-<?= $index ?>">
                                <div class="d-flex justify-content-between align-items-center mb-1">
                                    <span class="monospace text-uppercase text-accent-bold font-9"><?= $reel['tag'] ?></span>
                                    <span class="monospace text-white-50 font-8"><?= $reel['software'] ?> // EXPORT OK</span>
                                </div>
                                <p class="text-white-50 font-inter mb-0" style="font-size: 13px; line-height: 1.45;"><?= $reel['desc'] ?></p>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- BOTTOM: Interactive NLE Timeline Track Workspace -->
                    <div class="timeline-editor-deck p-2 rounded-3 border-console-inner">
                        <div class="timeline-toolbar d-flex justify-content-between align-items-center mb-2 pb-1" style="border-bottom: 1.5px solid #111;">
                            <span class="monospace font-9 text-white-50">// MULTI_TRACK_SYNC_TIMELINE</span>
                            <div class="d-flex align-items-center gap-1">
                                <button class="transport-btn" id="timeline-prev-btn" title="Previous Sequence"><i class="bi bi-skip-backward-fill"></i></button>
                                <button class="transport-btn primary" id="timeline-play-btn" title="Play/Pause"><i class="bi bi-pause-fill"></i></button>
                                <button class="transport-btn" id="timeline-next-btn" title="Next Sequence"><i class="bi bi-skip-forward-fill"></i></button>
                                <button class="transport-btn ms-1" id="timeline-mute-btn" title="Mute Output"><i class="bi bi-volume-up-fill"></i></button>
                            </div>
                        </div>

                        <div class="timeline-track-workspace position-relative">
                            <!-- Live Playhead Scrubber Line -->
                            <div class="timeline-playhead" id="timelineActivePlayhead">
                                <div class="playhead-needle"></div>
                            </div>

                            <!-- Track V1: VIDEO FEEDS -->
                            <div class="timeline-row d-flex align-items-center mb-1.5">
                                <div class="timeline-header monospace font-8 flex-shrink-0">V1 // VIDEO</div>
                                <div class="timeline-track-blocks position-relative flex-grow-1">
                                    <?php 
                                    $lefts = [0, 25, 50, 75];
                                    $widths = [25, 25, 25, 25];
                                    foreach ($reels as $index => $reel): ?>
                                    <div class="timeline-block video-block <?= $index === 0 ? 'active' : '' ?>" 
                                         data-target-channel="<?= $index ?>" 
                                         style="left: <?= $lefts[$index] ?>%; width: <?= $widths[$index] ?>%; --block-color: <?= $reel['color'] ?>;">
                                        <span class="block-label text-truncate"><?= str_replace(' ', '_', strtolower($reel['title'])) ?>.mp4</span>
                                        <span class="block-fade-handle-left"></span>
                                        <span class="block-fade-handle-right"></span>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <!-- Track V2: VFX & SOFTWARE LAYERS -->
                            <div class="timeline-row d-flex align-items-center mb-1.5">
                                <div class="timeline-header monospace font-8 flex-shrink-0">V2 // VFX</div>
                                <div class="timeline-track-blocks position-relative flex-grow-1">
                                    <?php foreach ($reels as $index => $reel): ?>
                                    <div class="timeline-block vfx-block" 
                                         style="left: <?= $lefts[$index] ?>%; width: <?= $widths[$index] ?>%; --block-color: <?= $reel['color'] ?>;">
                                        <span class="block-label text-truncate"><?= explode(' • ', $reel['software'])[0] ?> VFX</span>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <!-- Track A1: AUDIO STACKS -->
                            <div class="timeline-row d-flex align-items-center">
                                <div class="timeline-header monospace font-8 flex-shrink-0">A1 // AUDIO</div>
                                <div class="timeline-track-blocks position-relative flex-grow-1 bg-audio-grid">
                                    <?php foreach ($reels as $index => $reel): ?>
                                    <div class="timeline-audio-block" style="left: <?= $lefts[$index] ?>%; width: <?= $widths[$index] ?>%;">
                                        <div class="audio-waveform-mini-bars">
                                            <?php for ($i = 0; $i < 12; $i++): ?>
                                            <span class="waveform-mini-bar" style="height: <?= rand(15, 75) ?>%;"></span>
                                            <?php endfor; ?>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="200">
            <a href="<?= BASE_URL ?>video-portfolio" class="btn-gradient">
                <span>EXPLORE MOTION STUDIO</span> <i class="bi bi-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>

<style>
/* --- CYBER STUDIO NLE THEME --- */
.bg-studio-dark {
    background-color: #050506 !important;
    background: radial-gradient(circle at center, #0B0C0F 0%, #030304 100%) !important;
    position: relative;
    border-top: 2px solid #111;
    border-bottom: 2px solid #111;
}

.studio-ambient-network {
    position: absolute;
    inset: 0;
    background-image: linear-gradient(rgba(255, 255, 255, 0.008) 1px, transparent 1px),
                      linear-gradient(90deg, rgba(255, 255, 255, 0.008) 1px, transparent 1px);
    background-size: 30px 30px;
    pointer-events: none;
    z-index: 1;
}

.studio-live-tag {
    font-family: 'Montserrat', sans-serif;
    font-size: 10px;
    font-weight: 900;
    letter-spacing: 1.5px;
    background: #FFF;
    padding: 5px 14px;
    border-radius: 100px;
    color: #111;
    border: 2px solid #111;
    box-shadow: 3px 3px 0px #111;
}

.live-dot {
    width: 6px;
    height: 6px;
    background-color: #ff3b30;
    border-radius: 50%;
}

.live-dot.pulse {
    box-shadow: 0 0 0 rgba(255, 59, 48, 0.4);
    animation: pulseGlow 1.5s infinite;
}

@keyframes pulseGlow {
    0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(255, 59, 48, 0.7); }
    70% { transform: scale(1); box-shadow: 0 0 0 6px rgba(255, 59, 48, 0); }
    100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(255, 59, 48, 0); }
}

/* NLE Console Frame */
.nle-studio-console {
    background: #08080B;
    border: 2px solid #111;
    border-radius: 16px;
    box-shadow: 8px 8px 0px #111;
    position: relative;
    z-index: 5;
    overflow: hidden;
}

.console-top-bar {
    background: #0C0D11;
    border-bottom: 2px solid #111;
    padding: 10px 18px;
}

.window-dots {
    display: flex;
    gap: 8px;
}

.window-dots span {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    border: 1px solid #111;
}

.dot-r { background: #FF5F57; }
.dot-y { background: #FEBC2E; }
.dot-g { background: #28C840; }

.console-meta-tag {
    font-size: 10px;
    font-weight: 800;
    letter-spacing: 1px;
    color: #555866;
}

/* PORTRAIT DISPLAY MONITOR */
.master-display-monitor {
    width: 236px;
    height: 420px;
    background: #000;
    border: 2px solid #111;
    border-radius: 20px;
    position: relative;
    overflow: hidden;
    box-shadow: inset 0px 0px 40px rgba(0,0,0,0.8), 4px 4px 0px #111;
    transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1);
}

.monitor-screen-container {
    width: 100%;
    height: 100%;
    position: relative;
    overflow: hidden;
}

.monitor-video-feed {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 0;
    transition: opacity 0.4s ease-in-out;
    pointer-events: none;
}

.monitor-video-feed.active {
    opacity: 1;
    pointer-events: auto;
}

.monitor-glass-reflection {
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.06) 0%, rgba(255, 255, 255, 0.01) 35%, transparent 35%);
    pointer-events: none;
    z-index: 3;
}

/* Video Sync Flash */
.monitor-glitch-overlay {
    position: absolute;
    inset: 0;
    background: #FFF;
    opacity: 0;
    z-index: 4;
    pointer-events: none;
}

.monitor-glitch-overlay.active-flash {
    animation: renderFlash 0.35s cubic-bezier(0.1, 0.8, 0.3, 1) forwards;
}

@keyframes renderFlash {
    0% { opacity: 0.75; background: #FFF; }
    50% { opacity: 0.35; background: var(--accent-glow, #6A5AE0); }
    100% { opacity: 0; }
}

/* MONITOR HUD OVERLAYS */
.monitor-hud-overlay {
    position: absolute;
    inset: 0;
    z-index: 2;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    pointer-events: none;
}

.safe-area-brackets {
    position: absolute;
    inset: 15px;
    border: 1px solid rgba(255, 255, 255, 0.02);
    pointer-events: none;
}

.safe-area-brackets::before,
.safe-area-brackets::after {
    content: '';
    position: absolute;
    width: 14px;
    height: 14px;
    border-color: rgba(255, 255, 255, 0.22);
    border-style: solid;
}

.safe-area-brackets::before { top: 0; left: 0; border-width: 1.5px 0 0 1.5px; }
.safe-area-brackets::after { bottom: 0; right: 0; border-width: 0 1.5px 1.5px 0; }

.safe-area-crosshair {
    position: absolute;
    left: 50%;
    top: 50%;
    width: 12px;
    height: 12px;
    transform: translate(-50%, -50%);
    pointer-events: none;
}

.safe-area-crosshair::before,
.safe-area-crosshair::after {
    content: '';
    position: absolute;
    background: rgba(255, 255, 255, 0.2);
}

.safe-area-crosshair::before { left: 5px; top: 0; width: 1.5px; height: 12px; }
.safe-area-crosshair::after { left: 0; top: 5px; width: 12px; height: 1.5px; }

/* SIDE CONSOLE AREA */
.border-end-studio {
    border-right: 2px solid #111;
    background: #060608;
}

.bg-console-side {
    background: #090A0D;
}

.border-console-inner {
    border: 2px solid #111;
    background: #060709;
}

/* SWITCHER DECK BUTTONS (2x2 Matrix) */
.cam-channel-btn {
    width: 100%;
    background: #0C0D11;
    border: 2px solid #111;
    border-radius: 8px;
    padding: 10px 14px;
    color: #FFF;
    position: relative;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    outline: none;
    cursor: pointer;
    overflow: hidden;
    box-shadow: 3px 3px 0px #111;
}

.cam-channel-btn:hover {
    background: #12141A;
    border-color: var(--accent-color);
    transform: translateY(-2px);
    box-shadow: 4px 4px 0px #111;
}

.cam-channel-btn.active {
    background: #111218;
    border-color: var(--accent-color);
    box-shadow: 3px 3px 0px var(--accent-color);
}

.channel-status-light {
    position: absolute;
    top: 6px;
    right: 6px;
    width: 5px;
    height: 5px;
    border-radius: 50%;
    background: #333;
    transition: background 0.3s, box-shadow 0.3s;
}

.cam-channel-btn.active .channel-status-light {
    background: var(--accent-color);
    box-shadow: 0 0 6px var(--accent-color);
}

.channel-num {
    font-size: 9px;
    font-weight: 900;
    color: #555866;
    background: #050507;
    border: 1.5px solid #111;
    padding: 1px 4px;
    border-radius: 3px;
    transition: color 0.3s, border-color 0.3s;
}

.cam-channel-btn.active .channel-num {
    color: var(--accent-color);
    border-color: var(--accent-color);
}

.channel-title {
    font-weight: 800;
    display: block;
    letter-spacing: -0.2px;
}

.bg-studio-dark-soft {
    background: #060709;
    border: 2px solid #111;
    box-shadow: inset 0px 3px 10px rgba(0,0,0,0.4);
}

.border-accent-dash {
    border: 1.5px dashed #1C1D24;
}

.border-secondary-dash {
    border-top: 1.5px dashed #1A1B22 !important;
}

.border-box-tech {
    background: #0C0D11;
    border: 1.5px solid #111;
    border-radius: 6px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.text-accent-bold {
    color: var(--accent-glow, #6A5AE0);
    letter-spacing: 1.5px;
}

/* Meta spec sliding animations */
.meta-spec-slide {
    display: none;
}

.meta-spec-slide.active {
    display: block;
    animation: slideFadeIn 0.35s cubic-bezier(0.16, 1, 0.3, 1) forwards;
}

@keyframes slideFadeIn {
    0% { opacity: 0; transform: translateY(4px); }
    100% { opacity: 1; transform: translateY(0); }
}

/* TIMELINE STACKS */
.transport-btn {
    background: #0C0D11;
    border: 1.5px solid #111;
    color: #8E919F;
    width: 28px;
    height: 28px;
    border-radius: 5px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.2s;
    outline: none;
    font-size: 11px;
}

.transport-btn:hover {
    background: #15161D;
    color: #FFF;
    border-color: #555;
}

.transport-btn.primary {
    background: #FFF;
    color: #111;
    border-color: #FFF;
}

.transport-btn.primary:hover {
    background: #EEE;
}

.timeline-track-workspace {
    background: #030304;
    border: 1.5px solid #111;
    border-radius: 8px;
    padding: 10px;
    overflow: hidden;
}

.timeline-playhead {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0%;
    width: 2px;
    background: #FF5F57;
    box-shadow: 0 0 10px #FF5F57;
    z-index: 20;
    pointer-events: none;
    transition: left 0.1s linear;
}

.playhead-needle {
    position: absolute;
    top: -4px;
    left: -5px;
    width: 10px;
    height: 6px;
    background: #FF5F57;
    clip-path: polygon(0% 0%, 100% 0%, 50% 100%);
}

.timeline-row {
    height: 26px;
    position: relative;
}

.timeline-header {
    width: 75px;
    color: #555866;
    font-weight: 800;
    font-size: 8px;
    letter-spacing: 0.5px;
    border-right: 1.5px solid #111;
    height: 100%;
    display: flex;
    align-items: center;
    padding-left: 2px;
}

.timeline-track-blocks {
    position: relative;
    height: 100%;
    flex-grow: 1;
}

.timeline-block {
    position: absolute;
    top: 2px;
    bottom: 2px;
    border: 1.5px solid #111;
    border-radius: 5px;
    font-size: 8px;
    font-weight: 800;
    color: #FFF;
    display: flex;
    align-items: center;
    padding-left: 8px;
    cursor: pointer;
    box-shadow: 2px 2px 0px #111;
    transition: all 0.2s;
}

.block-fade-handle-left,
.block-fade-handle-right {
    position: absolute;
    top: 3px;
    width: 2.5px;
    height: calc(100% - 6px);
    background: rgba(255,255,255,0.2);
    border-radius: 5px;
}

.block-fade-handle-left { left: 3px; }
.block-fade-handle-right { right: 3px; }

.video-block {
    background: linear-gradient(135deg, rgba(255,255,255,0.02) 0%, rgba(255,255,255,0.06) 100%);
    border-color: rgba(255,255,255,0.08);
}

.video-block:hover {
    border-color: var(--block-color);
}

.video-block.active {
    background: var(--block-color);
    color: #111;
    border-color: #111;
    font-weight: 900;
}

.vfx-block {
    background: rgba(17, 18, 24, 0.5);
    border-color: rgba(255,255,255,0.04);
    color: #555866;
}

.timeline-audio-block {
    position: absolute;
    top: 2px;
    bottom: 2px;
    background: rgba(40, 200, 64, 0.03);
    border: 1.2px dashed rgba(40, 200, 64, 0.12);
    border-radius: 5px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0 8px;
}

.audio-waveform-mini-bars {
    display: flex;
    gap: 1.5px;
    width: 100%;
    height: 80%;
    align-items: center;
}

.waveform-mini-bar {
    flex-grow: 1;
    background: rgba(40, 200, 64, 0.25);
    border-radius: 1px;
    transition: height 0.08s ease;
}

/* --- RESPONSIVE ADAPTATIONS --- */
@media (max-width: 991px) {
    .border-end-studio {
        border-right: none;
        border-bottom: 2px solid #111;
        padding-bottom: 25px !important;
    }
    
    .timeline-header {
        width: 55px;
        font-size: 8px;
    }
    
    .timeline-block {
        font-size: 7px;
        padding-left: 4px;
    }
}
</style>

<script>
class CyberPortraitSoundstage {
    constructor() {
        this.activeIdx = 0;
        this.isMuted = true; // Default to muted to prevent any unexpected sound playing
        this.isPlaying = false;
        this.syncInterval = null;
        this.hasInteracted = false;
        this.isSectionVisible = false;
        this.intersectionObserver = null;
        this.revealTimeout = null; // Debounce timeout to prevent quick scroll triggers
        this.videosCount = <?= count($reels) ?>;

        this.init();
    }

    init() {
        this.initDOM();
        this.initEvents();
        this.initClock();
        this.initIntersectionObserver();
    }

    initDOM() {
        this.videos = Array.from(document.querySelectorAll('.monitor-video-feed'));
        this.switcherBtns = Array.from(document.querySelectorAll('.cam-channel-btn'));
        this.timelineBlocks = Array.from(document.querySelectorAll('.video-block'));
        this.specSlides = Array.from(document.querySelectorAll('.meta-spec-slide'));
        this.glitchOverlay = document.getElementById('videoGlitchOverlay');
        this.playhead = document.getElementById('timelineActivePlayhead');
        this.timecodeEl = document.getElementById('monitor-timecode');
        this.activeConsoleChan = document.getElementById('active-console-chan');
        this.activeChannelBadge = document.getElementById('active-channel-badge');

        // Transport Buttons
        this.playBtn = document.getElementById('timeline-play-btn');
        this.muteBtn = document.getElementById('timeline-mute-btn');
        this.prevBtn = document.getElementById('timeline-prev-btn');
        this.nextBtn = document.getElementById('timeline-next-btn');
    }

    initIntersectionObserver() {
        this.intersectionObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                this.isSectionVisible = entry.isIntersecting;
                
                // Clear any existing debounce timer
                if (this.revealTimeout) {
                    clearTimeout(this.revealTimeout);
                    this.revealTimeout = null;
                }

                if (this.isSectionVisible) {
                    // Set a robust debounce timeout of 800ms
                    // If user scrolls past before 800ms, it is cleared
                    this.revealTimeout = setTimeout(() => {
                        this.isPlaying = true;
                        this.playActiveVideo();
                    }, 800);
                } else {
                    this.pauseAllVideos();
                }
            });
        }, { threshold: 0.25 }); // Only trigger when at least 25% of the section is visible

        const section = document.getElementById('video-showcase');
        if (section) this.intersectionObserver.observe(section);
    }

    initEvents() {
        // Broadcaster Cam Switchers
        this.switcherBtns.forEach((btn, idx) => {
            btn.onclick = () => {
                this.hasInteracted = true;
                this.switchChannel(idx);
            };
        });

        // Timeline Video Tracks Cut Clicking
        this.timelineBlocks.forEach((block, idx) => {
            block.onclick = () => {
                this.hasInteracted = true;
                this.switchChannel(idx);
            };
        });

        // Transport Listeners
        if (this.playBtn) {
            this.playBtn.onclick = () => {
                this.hasInteracted = true;
                this.togglePlay();
            };
        }

        if (this.muteBtn) {
            this.muteBtn.onclick = () => {
                this.toggleMute();
            };
        }

        if (this.prevBtn) {
            this.prevBtn.onclick = () => {
                let prevIdx = this.activeIdx - 1;
                if (prevIdx < 0) prevIdx = this.videosCount - 1;
                this.switchChannel(prevIdx);
            };
        }

        if (this.nextBtn) {
            this.nextBtn.onclick = () => {
                let nextIdx = (this.activeIdx + 1) % this.videosCount;
                this.switchChannel(nextIdx);
            };
        }

        // Continuous sequential timeline cutting when active video finishes
        this.videos.forEach((video, idx) => {
            video.onended = () => {
                const nextIdx = (idx + 1) % this.videosCount;
                this.switchChannel(nextIdx);
            };
        });
    }

    switchChannel(targetIdx) {
        if (targetIdx === this.activeIdx) return;
        
        const oldVideo = this.videos[this.activeIdx];
        if (oldVideo) {
            oldVideo.pause();
            oldVideo.classList.remove('active');
        }

        // Glitch synchronization effect
        if (this.glitchOverlay) {
            this.glitchOverlay.style.setProperty('--accent-glow', this.switcherBtns[targetIdx].style.getPropertyValue('--accent-color'));
            this.glitchOverlay.classList.remove('active-flash');
            void this.glitchOverlay.offsetWidth; // Trigger reflow
            this.glitchOverlay.classList.add('active-flash');
        }

        // Apply new classes
        this.switcherBtns[this.activeIdx].classList.remove('active');
        this.timelineBlocks[this.activeIdx].classList.remove('active');
        this.specSlides[this.activeIdx].classList.remove('active');

        this.activeIdx = targetIdx;

        this.switcherBtns[this.activeIdx].classList.add('active');
        this.timelineBlocks[this.activeIdx].classList.add('active');
        this.specSlides[this.activeIdx].classList.add('active');

        // Update Console Info
        const displayNum = targetIdx + 1;
        const displayTitle = this.switcherBtns[targetIdx].querySelector('.channel-title').textContent;
        if (this.activeConsoleChan) this.activeConsoleChan.textContent = `CH_0${displayNum}`;
        if (this.activeChannelBadge) this.activeChannelBadge.textContent = `CH_0${displayNum} // ${displayTitle}`;

        const activeVideo = this.videos[this.activeIdx];
        if (activeVideo) {
            activeVideo.classList.add('active');
            activeVideo.muted = this.isMuted;
            if (this.isSectionVisible) {
                activeVideo.play().catch(e => console.log("Auto play prevented:", e));
                this.isPlaying = true;
                if (this.playBtn) this.playBtn.innerHTML = '<i class="bi bi-pause-fill"></i>';
            }
            this.startTimelineSync();
        }
    }

    togglePlay() {
        const activeVideo = this.videos[this.activeIdx];
        if (!activeVideo) return;

        if (this.isPlaying) {
            activeVideo.pause();
            this.isPlaying = false;
            if (this.playBtn) this.playBtn.innerHTML = '<i class="bi bi-play-fill"></i>';
            clearInterval(this.syncInterval);
        } else {
            activeVideo.muted = this.isMuted;
            activeVideo.play().then(() => {
                this.isPlaying = true;
                if (this.playBtn) this.playBtn.innerHTML = '<i class="bi bi-pause-fill"></i>';
                this.startTimelineSync();
            }).catch(e => console.log("Play failed:", e));
        }
    }

    toggleMute() {
        this.isMuted = !this.isMuted;
        this.videos.forEach(v => {
            v.muted = this.isMuted;
        });

        if (this.muteBtn) {
            this.muteBtn.innerHTML = this.isMuted ? '<i class="bi bi-volume-mute-fill"></i>' : '<i class="bi bi-volume-up-fill"></i>';
        }
    }

    playActiveVideo() {
        const activeVideo = this.videos[this.activeIdx];
        if (activeVideo) {
            activeVideo.muted = this.isMuted;
            activeVideo.play().then(() => {
                this.isPlaying = true;
                if (this.playBtn) this.playBtn.innerHTML = '<i class="bi bi-pause-fill"></i>';
                this.startTimelineSync();
            }).catch(e => {
                console.log("Unmuted autoplay blocked by browser, trying muted fallback:", e);
                // Try playing muted so video visual stream is active instantly
                activeVideo.muted = true;
                activeVideo.play().then(() => {
                    this.isPlaying = true;
                    if (this.playBtn) this.playBtn.innerHTML = '<i class="bi bi-pause-fill"></i>';
                    this.startTimelineSync();
                }).catch(err => console.log("Complete video block:", err));
            });
        }
    }

    pauseAllVideos() {
        clearInterval(this.syncInterval);
        this.videos.forEach(v => v.pause());
    }

    startTimelineSync() {
        clearInterval(this.syncInterval);
        const activeVideo = this.videos[this.activeIdx];
        if (!activeVideo) return;

        this.syncInterval = setInterval(() => {
            if (activeVideo.paused) return;

            // Compute global percentage across the timeline row containing 4 sections of 25% each
            const segmentBasePercent = this.activeIdx * 25;
            const videoPercent = (activeVideo.currentTime / activeVideo.duration) * 25;
            const totalPercent = segmentBasePercent + videoPercent;

            if (this.playhead) {
                this.playhead.style.left = totalPercent + '%';
            }

            // Sync Timecode counter
            if (this.timecodeEl) {
                const totalFrames = Math.floor(activeVideo.currentTime * 30);
                const hrs = Math.floor(totalFrames / (3600 * 30));
                const mins = Math.floor((totalFrames % (3600 * 30)) / (60 * 30));
                const secs = Math.floor((totalFrames % (60 * 30)) / 30);
                const frames = totalFrames % 30;
                this.timecodeEl.textContent = `${String(hrs).padStart(2, '0')}:${String(mins).padStart(2, '0')}:${String(secs).padStart(2, '0')}:${String(frames).padStart(2, '0')}`;
            }

            // High-frequency mini wave audio bouncing equalizers
            const audioBars = document.querySelectorAll('.timeline-audio-block')[this.activeIdx]?.querySelectorAll('.waveform-mini-bar');
            if (audioBars) {
                audioBars.forEach(bar => {
                    const h = Math.random() * 65 + 15;
                    bar.style.height = h + '%';
                });
            }
        }, 60);
    }

    initClock() {
        const update = () => {
            const now = new Date();
            const h = String(now.getHours()).padStart(2, '0');
            const m = String(now.getMinutes()).padStart(2, '0');
            const clockEl = document.getElementById('monitor-clock');
            if (clockEl) clockEl.textContent = `${h}:${m}`;
        };
        update();
        setInterval(update, 60000);
    }
}

document.addEventListener('DOMContentLoaded', () => {
    new CyberPortraitSoundstage();
});
</script>
