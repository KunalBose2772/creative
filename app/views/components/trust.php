<section class="trust-section" data-aos="fade-up">
    <div class="container" style="max-width:1240px;">
        <p class="trust-label text-center mb-5" style="letter-spacing: 2px; font-weight: 600; color: #888;">ENGINEERED WITH INDUSTRY-LEADING PLATFORMS</p>
        <div class="trust-logos-wrapper">
            <div class="trust-logos-track d-flex align-items-center gap-5">
                <?php
                $real_logos = [
                    ['name' => 'Google', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg', 'height' => '30px'],
                    ['name' => 'Meta', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/7/7b/Meta_Platforms_Inc._logo.svg', 'height' => '24px'],
                    ['name' => 'WordPress', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/0/09/Wordpress-Logo.svg', 'height' => '36px'],
                    ['name' => 'Stripe', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/b/ba/Stripe_Logo%2C_revised_2016.svg', 'height' => '32px'],
                    ['name' => 'Apple', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg', 'height' => '34px'],
                    ['name' => 'Microsoft', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/9/96/Microsoft_logo_%282012%29.svg', 'height' => '28px'],
                    // Duplicate for seamless marquee
                    ['name' => 'Google', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg', 'height' => '30px'],
                    ['name' => 'Meta', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/7/7b/Meta_Platforms_Inc._logo.svg', 'height' => '24px'],
                    ['name' => 'WordPress', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/0/09/Wordpress-Logo.svg', 'height' => '36px'],
                    ['name' => 'Stripe', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/b/ba/Stripe_Logo%2C_revised_2016.svg', 'height' => '32px'],
                    ['name' => 'Apple', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg', 'height' => '34px'],
                    ['name' => 'Microsoft', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/9/96/Microsoft_logo_%282012%29.svg', 'height' => '28px'],
                ];
                foreach($real_logos as $logo): ?>
                <div class="trust-logo-item px-4">
                    <img src="<?= $logo['url'] ?>" alt="<?= $logo['name'] ?> Logo" style="height: <?= $logo['height'] ?>; width: auto; object-fit: contain; filter: grayscale(100%) opacity(60%); transition: all 0.3s ease;" onmouseover="this.style.filter='grayscale(0%) opacity(100%)'" onmouseout="this.style.filter='grayscale(100%) opacity(60%)'">
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
