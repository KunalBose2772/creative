<section class="trust-section" data-aos="fade-up">
    <div class="container" style="max-width:1240px;">
        <p class="trust-label text-center mb-5">Trusted by growing businesses across India</p>
        <div class="trust-logos-wrapper">
            <div class="trust-logos-track">
                <?php
                $logos = [
                    ['name' => 'TechCorp', 'icon' => 'bi-cpu'],
                    ['name' => 'NexaRetail', 'icon' => 'bi-bag'],
                    ['name' => 'BrightSpace', 'icon' => 'bi-brightness-high'],
                    ['name' => 'UrbanEdge', 'icon' => 'bi-buildings'],
                    ['name' => 'SwiftPay', 'icon' => 'bi-credit-card'],
                    ['name' => 'CloudPeak', 'icon' => 'bi-cloud'],
                    ['name' => 'TechCorp', 'icon' => 'bi-cpu'],
                    ['name' => 'NexaRetail', 'icon' => 'bi-bag'],
                    ['name' => 'BrightSpace', 'icon' => 'bi-brightness-high'],
                    ['name' => 'UrbanEdge', 'icon' => 'bi-buildings'],
                    ['name' => 'SwiftPay', 'icon' => 'bi-credit-card'],
                    ['name' => 'CloudPeak', 'icon' => 'bi-cloud'],
                ];
                foreach($logos as $logo): ?>
                <div class="trust-logo-item">
                    <i class="bi <?= $logo['icon'] ?>"></i>
                    <span><?= $logo['name'] ?></span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
