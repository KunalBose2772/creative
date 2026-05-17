<!-- GAP Closure: Video Social Proof & Cinematic Showcase -->
<section class="video-proof-section py-5 text-white position-relative bg-05" id="cinematic-showcase">
    <div class="container">
        <div class="row align-items-center g-5">
            
            <!-- Left Side: Dynamic Video Player with Sound Toggle -->
            <div class="col-lg-6" data-aos="fade-right">
                <div class="video-placeholder-wrap position-relative rounded-5 overflow-hidden border border-white border-opacity-25 shadow-lg" style="aspect-ratio: 16/10; background: #000;">
                    
                    <!-- HTML5 Cinematic Video Element -->
                    <video id="showcase-video" class="w-100 h-100 object-fit-cover position-absolute inset-0" loop playsinline muted preload="none" poster="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80">
                        <source src="https://assets.mixkit.co/videos/preview/mixkit-software-developer-working-on-code-close-up-42562-large.mp4" type="video/mp4">
                        <track kind="captions" src="" srclang="en" label="English" default>
                        Your browser does not support the video tag.
                    </video>

                    <!-- Overlay Gradient for Text/Controls Legibility -->
                    <div class="position-absolute inset-0 bg-gradient-overlay pointer-events-none"></div>

                    <!-- Centered Status Indicator / Play State Indicator -->
                    <div class="position-absolute top-50 start-50 translate-middle z-2 pointer-events-none" id="video-pulse-overlay">
                        <div class="btn btn-accent-dynamic rounded-circle d-flex align-items-center justify-content-center pulse-button w-80-h-80 bg-opacity-75" style="width: 72px; height: 72px;">
                            <i class="bi bi-play-fill text-white fs-1"></i>
                        </div>
                    </div>

                    <!-- Bottom Controls: Mute/Unmute Pill & Status -->
                    <div class="position-absolute bottom-0 start-0 end-0 p-4 d-flex align-items-center justify-content-between z-3">
                        <span class="badge bg-black bg-opacity-75 text-white-50 border border-light border-opacity-25 px-3 py-2" style="border-radius: 50px; font-size: 12px; letter-spacing: 1px;">
                            <span class="live-dot me-2"></span> REVEAL ENGINE ACTIVE
                        </span>

                        <!-- Interactive Audio Toggle Button -->
                        <button id="audio-toggle-btn" class="btn btn-dark bg-black bg-opacity-75 text-white border border-light border-opacity-25 px-4 py-2 d-flex align-items-center gap-2 fw-bold" style="border-radius: 50px; font-size: 13px; cursor: pointer; backdrop-filter: blur(8px);">
                            <i class="bi bi-volume-mute-fill text-warning fs-5"></i>
                            <span id="audio-toggle-text">Unmute</span>
                        </button>
                    </div>

                </div>
            </div>

            <!-- Right Side: Engaging Copy & Proof Metrics -->
            <div class="col-lg-6" data-aos="fade-left">
                <div class="d-flex align-items-center gap-2 mb-3">
                    <span class="badge bg-warning bg-opacity-10 text-warning px-3 py-2 rounded-pill border border-warning border-opacity-25 fw-bold" style="font-size: 12px; letter-spacing: 1.5px;">
                        CINEMATIC SHOWCASE
                    </span>
                </div>
                <h2 class="display-4 fw-900 mb-4 text-white" style="letter-spacing: -1px;">See The <span class="gradient-text">Difference.</span></h2>
                <p class="fs-5 opacity-75 mb-4" style="line-height: 1.6;">
                    Don't just take our word for it. Watch how our engineered web solutions transformed a local brand into a national powerhouse within 6 months. Every line of code is optimized for revenue velocity.
                </p>
                <div class="d-flex align-items-center gap-4 mt-4 pt-2">
                    <div class="text-start">
                        <div class="h2 fw-900 text-white mb-0 font-clash" style="font-size: 38px;">300+</div>
                        <div class="small fw-bold opacity-50 text-uppercase" style="letter-spacing: 1px; font-size: 12px;">Projects Delivered</div>
                    </div>
                    <div class="border-start border-white border-opacity-25 h-40px" style="height: 45px;"></div>
                    <div class="text-start">
                        <div class="h2 fw-900 text-white mb-0 font-clash" style="font-size: 38px;">98%</div>
                        <div class="small fw-bold opacity-50 text-uppercase" style="letter-spacing: 1px; font-size: 12px;">Client Retention</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Strict Intersection Observer & Audio Control Engine -->
<script>
document.addEventListener("DOMContentLoaded", () => {
    const video = document.getElementById("showcase-video");
    const audioBtn = document.getElementById("audio-toggle-btn");
    const audioText = document.getElementById("audio-toggle-text");
    const audioIcon = audioBtn?.querySelector("i");
    const pulseOverlay = document.getElementById("video-pulse-overlay");

    if (!video) return;

    // 1. Strict IntersectionObserver for CPU-friendly AutoPlay on Scroll Reveal
    if ("IntersectionObserver" in window) {
        const videoObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    // Start playing muted video when 30% visible
                    video.play().then(() => {
                        if (pulseOverlay) pulseOverlay.style.opacity = "0";
                    }).catch((err) => {
                        console.warn("Reveal Autoplay strictly handled:", err);
                    });
                } else {
                    // Pause video when out of viewport to save user battery/CPU
                    video.pause();
                }
            });
        }, { threshold: 0.3 });

        videoObserver.observe(video);
    }

    // 2. Flawless Interactive Audio Control (Bypassing browser autoplay blocks)
    if (audioBtn) {
        audioBtn.addEventListener("click", () => {
            if (video.muted) {
                video.muted = false;
                audioText.innerText = "Mute";
                audioIcon.className = "bi bi-volume-up-fill text-success fs-5";
                if (video.paused) video.play();
            } else {
                video.muted = true;
                audioText.innerText = "Unmute";
                audioIcon.className = "bi bi-volume-mute-fill text-warning fs-5";
            }
        });
    }

    // Optional click on video container to toggle play/pause
    video.addEventListener("click", () => {
        if (video.paused) {
            video.play();
            if (pulseOverlay) pulseOverlay.style.opacity = "0";
        } else {
            video.pause();
            if (pulseOverlay) pulseOverlay.style.opacity = "1";
        }
    });
});
</script>

<style>
/* Video Proof Styling */
.inset-0 {
    inset: 0;
}
.pointer-events-none {
    pointer-events: none;
}
.bg-gradient-overlay {
    background: linear-gradient(180deg, rgba(0,0,0,0) 50%, rgba(0,0,0,0.85) 100%);
}
.live-dot {
    width: 8px;
    height: 8px;
    background: #28C840;
    border-radius: 50%;
    display: inline-block;
    box-shadow: 0 0 8px #28C840;
    animation: livePulse 1.5s infinite;
}
@keyframes livePulse {
    0% { transform: scale(1); opacity: 1; }
    50% { transform: scale(1.3); opacity: 0.5; }
    100% { transform: scale(1); opacity: 1; }
}
#video-pulse-overlay {
    transition: opacity 0.3s ease;
}
</style>