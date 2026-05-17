<section id="home" class="hero-section py-5 px-3 position-relative overflow-hidden">
    <div class="hero-bg-overlay position-absolute w-100 h-100 top-0 start-0" style="background: transparent; transition: background 1.2s cubic-bezier(0.16, 1, 0.3, 1); z-index: 0; pointer-events: none; opacity: 0.15;"></div>
    
    <!-- Dynamic Bento Grid -->
    <div class="container mt-5 pt-3" style="max-width:1300px;">
        <div class="row g-4 bento-grid">
            
            <!-- Bento Box 1: Main Headline (Left Half) -->
            <div class="col-lg-6 col-12 pe-lg-5 mb-4 mb-lg-0" data-aos="zoom-in" data-aos-delay="100" style="z-index: 1;">
                <div id="hero-content-dynamic" class="bento-card bento-main h-100 d-flex flex-column justify-content-end position-relative">
                    <div class="hero-badge mb-3 align-self-start">
                        <span class="badge-dot"></span> <span id="dynamic-badge">Helping You Build a Better Brand</span>
                    </div>
                    <h1 class="hero-heading text-dark" id="dynamic-headline">
                        We Turn Businesses <br>Into <span class="gradient-text">Powerful Brands.</span>
                    </h1>
                    <p class="hero-subtext mt-3 text-dark" id="dynamic-subtext" style="opacity: 0.8; max-width: 550px;">
                        Don't get lost in the crowd. We create high-quality websites, 3D videos, and ad campaigns that help your business get more customers and stand out from the rest.
                    </p>
                    <div class="hero-cta-group mt-4 d-flex flex-wrap gap-3">
                        <a href="<?= BASE_URL ?>booking" class="btn btn-gradient btn-lg">Free Consultation <i class="bi bi-arrow-right ms-2"></i></a>
                        <a href="<?= BASE_URL ?>work" class="btn btn-outline-custom btn-lg">See Our Work</a>
                    </div>
                </div>
            </div>

            <!-- Bento Box 2: Service Ladder (Right Half) -->
            <div class="col-lg-6 col-md-6 col-12 ps-lg-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="service-ladder-container h-100 d-flex flex-column justify-content-end">
                    <div class="service-ladder" style="z-index: 1;">
                        <!-- Step 5: Social Media -->
                        <div class="ladder-step step-yellow stair-5 active is-sliding" data-step="5"
                             data-badge="Build Your Presence"
                             data-headline="Social Media <br><span class='gradient-text'>Growth & Management.</span>"
                             data-subtext="We create high-quality posts for your social media every day. We help you build a loyal community and keep your followers engaged."
                             data-color="rgba(254, 188, 46, 0.4)">
                            <div class="step-icon"><i class="bi bi-instagram"></i></div>
                            <div class="step-content">
                                <span class="step-name">Social Media Growth</span>
                            </div>
                        </div>
                        <!-- Step 4: Ads -->
                        <div class="ladder-step step-orange stair-4" data-step="4"
                             data-badge="Scale Your Growth"
                             data-headline="Smart <br><span class='gradient-text'>Paid Ad Campaigns.</span>"
                             data-subtext="Get more customers with targeted ads on Facebook, Instagram, and Google. We manage your budget to give you the best return on investment."
                             data-color="rgba(255, 122, 24, 0.4)">
                            <div class="step-icon"><i class="bi bi-megaphone"></i></div>
                            <div class="step-content">
                                <span class="step-name">Paid Ad Campaigns</span>
                            </div>
                        </div>
                        <!-- Step 3: Websites -->
                        <div class="ladder-step step-teal stair-3" data-step="3"
                             data-badge="Your Online Store"
                             data-headline="Websites Built to <br><span class='gradient-text'>Get More Sales.</span>"
                             data-subtext="We build fast, modern websites that look great on phones and computers. We also help you rank higher on Google to get more traffic."
                             data-color="rgba(32, 201, 151, 0.4)">
                            <div class="step-icon"><i class="bi bi-code-slash"></i></div>
                            <div class="step-content">
                                <span class="step-name">Websites & Google Ranking</span>
                            </div>
                        </div>
                        <!-- Step 2: 3D Visuals -->
                        <div class="ladder-step step-pink stair-2" data-step="2"
                             data-badge="Creative Ideas"
                             data-headline="Stunning <br><span class='gradient-text'>3D & Visual Effects.</span>"
                             data-subtext="Bring your products to life with 3D animation. We create unique visuals that make people remember your brand."
                             data-color="rgba(232, 62, 140, 0.4)">
                            <div class="step-icon"><i class="bi bi-vector-pen"></i></div>
                            <div class="step-content">
                                <span class="step-name">3D & Visual Effects</span>
                            </div>
                        </div>
                        <!-- Step 1: Video Editing -->
                        <div class="ladder-step step-purple stair-1" data-step="1" 
                             data-badge="Visuals That Sell"
                             data-headline="High-Quality <br><span class='gradient-text'>Video Production.</span>"
                             data-subtext="We make professional videos that grab attention and tell your story in a way that people love. Perfect for social media and ads."
                             data-color="rgba(106, 90, 224, 0.4)">
                            <div class="step-icon"><i class="bi bi-play-circle"></i></div>
                            <div class="step-content">
                                <span class="step-name">Pro Video Editing</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bento Box 3: Marquee Text -->
            <div class="col-lg-5 col-md-6 col-12" data-aos="zoom-in" data-aos-delay="300">
                <div class="bento-card bento-marquee bg-dark text-white h-100 overflow-hidden d-flex align-items-center">
                    <div class="marquee-track d-flex gap-4" style="white-space: nowrap; font-family: 'Clash Display'; font-size: 32px; font-weight: 600;">
                        <span>WEB DESIGN • SEO • ADS • 3D VISUALS • SOCIAL MEDIA •</span>
                        <span>WEB DESIGN • SEO • ADS • 3D VISUALS • SOCIAL MEDIA •</span>
                    </div>
                </div>
            </div>

            <!-- Bento Box 4: Trust & Proof (Upgraded Real Avatars & Google Verified) -->
            <div class="col-lg-7 col-12" data-aos="zoom-in" data-aos-delay="400">
                <div class="bento-card bg-white p-4 d-flex align-items-center justify-content-between h-100 flex-wrap gap-4" style="border: 2px solid var(--text-dark); border-radius: 24px; box-shadow: 6px 6px 0px var(--text-dark);">
                    <div class="d-flex align-items-center gap-3">
                        <div class="avatar-group d-flex">
                            <span class="avatar avatar-1" style="width:46px; height:46px; border-radius:50%; background:#1A73E8; color:#ffffff; display:flex; align-items:center; justify-content:center; font-weight:800; font-size:15px; margin-left:0; border:2px solid var(--text-dark); box-shadow: 2px 2px 0px var(--text-dark); font-family: 'Montserrat', sans-serif;">AS</span>
                            <span class="avatar avatar-2" style="width:46px; height:46px; border-radius:50%; background:#EA4335; color:#ffffff; display:flex; align-items:center; justify-content:center; font-weight:800; font-size:15px; margin-left:-12px; border:2px solid var(--text-dark); box-shadow: 2px 2px 0px var(--text-dark); font-family: 'Montserrat', sans-serif;">PM</span>
                            <span class="avatar avatar-3" style="width:46px; height:46px; border-radius:50%; background:#34A853; color:#ffffff; display:flex; align-items:center; justify-content:center; font-weight:800; font-size:15px; margin-left:-12px; border:2px solid var(--text-dark); box-shadow: 2px 2px 0px var(--text-dark); font-family: 'Montserrat', sans-serif;">RK</span>
                        </div>
                        <div>
                            <div class="stars-gold mb-1" style="color: #FFB800; font-size: 13px; display: flex; gap: 2px;">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <span class="proof-label d-block text-dark" style="font-size:14px; font-weight:700;">Trusted by <strong>180+ happy founders</strong></span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-3 border-start border-2 border-dark ps-4">
                        <!-- Official Google Branding Icon -->
                        <div class="google-logo-icon-wrap" style="width: 42px; height: 42px; background: #FFF; border: 2px solid #111; border-radius: 12px; display: flex; align-items: center; justify-content: center; box-shadow: 2px 2px 0px #111;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 48 48">
                                <path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/>
                                <path fill="#4285F4" d="M46.5 24c0-1.61-.15-3.16-.42-4.69H24v8.89h12.63c-.55 2.87-2.17 5.31-4.61 6.94l7.19 5.57c4.21-3.87 6.64-9.56 6.64-16.71z"/>
                                <path fill="#FBBC05" d="M10.54 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24s.92 7.54 2.56 10.78l7.98-6.19z"/>
                                <path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.19-5.57c-1.99 1.34-4.55 2.13-7.7 2.13-6.26 0-11.57-4.22-13.46-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/>
                            </svg>
                        </div>
                        <div class="text-start">
                            <div class="fw-black text-dark h4 m-0" style="font-family: 'Montserrat', sans-serif; font-weight: 900; line-height: 1;">4.9/5</div>
                            <span class="d-block text-uppercase monospace" style="font-size: 8.5px; color: #888; letter-spacing: 1.5px; font-weight: 800; margin-top: 4px;">Google Verified</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
