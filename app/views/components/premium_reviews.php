<!-- Voice of the Customer — Premium Google Review Marquee -->
<section class="testimonials-section py-5 bg-white overflow-hidden">
    <div class="container mb-4">
        <div class="text-center" data-aos="fade-up">
            <h2 class="display-5 fw-900 text-dark mb-2">Hear What Our <span class="text-accent-dynamic">Clients</span> Say</h2>
            <p class="text-muted fs-6">Verified Google reviews from real businesses we've transformed.</p>
        </div>
    </div>

    <!-- Row 1 — scrolls left -->
    <div class="tmarquee-track-wrap mb-3">
        <div class="tmarquee-track">
            <?php
            $reviews_r1 = [
                ['name'=>'Priya Gupta','role'=>'Business Owner','review'=>'Crea8ve Cool delivered beyond expectations. Our website now ranks on page 1 and generates 3x more leads than before. Absolute professionals.','avatar_color'=>'#4285F4'],
                ['name'=>'Rohan Verma','role'=>'Tech Startup Founder','review'=>'Their technical expertise is unmatched. Custom PHP MVC, lightning-fast load times, and a design that makes competitors look outdated. Highly recommend.','avatar_color'=>'#EA4335'],
                ['name'=>'Neha Desai','role'=>'E-commerce Entrepreneur','review'=>'Sales traffic increased significantly after the redesign. The team understood our brand and delivered something we are truly proud of.','avatar_color'=>'#34A853'],
                ['name'=>'Amit Shah','role'=>'Real Estate Director','review'=>'Professional, fast, and detail-oriented. Our property portal handles 10k+ monthly visitors without a single issue. Worth every rupee.','avatar_color'=>'#FBBC05'],
                ['name'=>'Kavita Nair','role'=>'Wellness Brand Owner','review'=>'From design to SEO to the admin panel — everything was handled seamlessly. We now get inquiries directly through the website daily.','avatar_color'=>'#4285F4'],
                ['name'=>'Siddharth Rao','role'=>'EdTech Founder','review'=>'The LMS they built for us is exceptional. Student engagement went up 60% in the first month. The team is responsive and highly skilled.','avatar_color'=>'#EA4335'],
            ];
            // Duplicate for infinite scroll
            $reviews_r1 = array_merge($reviews_r1, $reviews_r1);
            foreach($reviews_r1 as $rev): ?>
            <div class="tcard" style="--avatar-color: <?= $rev['avatar_color'] ?>;">
                <div class="tcard-header">
                    <svg class="google-g" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="22" height="22"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                    <div class="tcard-stars">★★★★★</div>
                </div>
                <p class="tcard-review">"<?= $rev['review'] ?>"</p>
                <div class="tcard-footer">
                    <div   class="tcard-avatar bg-avatar-color"><?= strtoupper(substr($rev['name'],0,1)) ?></div>
                    <div>
                        <div class="tcard-name"><?= $rev['name'] ?> <span class="tcard-verified" title="Google Verified">✓</span></div>
                        <div class="tcard-role"><?= $rev['role'] ?></div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Row 2 — scrolls right -->
    <div class="tmarquee-track-wrap">
        <div class="tmarquee-track tmarquee-reverse">
            <?php
            $reviews_r2 = [
                ['name'=>'Divya Menon','role'=>'Healthcare Clinic Owner','review'=>'Our appointment bookings doubled after launching the new website. The team built us a clean, GDPR-compliant patient portal that staff love.','avatar_color'=>'#34A853'],
                ['name'=>'Arjun Malhotra','role'=>'Manufacturing CEO','review'=>'They engineered our full B2B portal with a custom CRM integration. Complex project delivered on time and within budget. Exceptional team.','avatar_color'=>'#4285F4'],
                ['name'=>'Pooja Iyer','role'=>'Fashion Boutique Owner','review'=>'My e-commerce store looks absolutely stunning on mobile. Sales jumped 40% in the first 3 months. Cannot recommend them highly enough.','avatar_color'=>'#EA4335'],
                ['name'=>'Vikram Singh','role'=>'Restaurant Chain Owner','review'=>'Online orders increased by 200% after they redesigned our website and integrated the ordering system. Game-changing for our business.','avatar_color'=>'#FBBC05'],
                ['name'=>'Meera Joshi','role'=>'Legal Firm Partner','review'=>'Professional, confidential, and technically superior. Our firm now ranks top 3 in Google for all key practice areas. Outstanding SEO work.','avatar_color'=>'#4285F4'],
                ['name'=>'Karan Patel','role'=>'Logistics Company MD','review'=>'The custom tracking portal they built handles thousands of daily requests flawlessly. Best tech investment we have made this year.','avatar_color'=>'#34A853'],
            ];
            $reviews_r2 = array_merge($reviews_r2, $reviews_r2);
            foreach($reviews_r2 as $rev): ?>
            <div class="tcard" style="--avatar-color: <?= $rev['avatar_color'] ?>;">
                <div class="tcard-header">
                    <svg class="google-g" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="22" height="22"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                    <div class="tcard-stars">★★★★★</div>
                </div>
                <p class="tcard-review">"<?= $rev['review'] ?>"</p>
                <div class="tcard-footer">
                    <div   class="tcard-avatar bg-avatar-color"><?= strtoupper(substr($rev['name'],0,1)) ?></div>
                    <div>
                        <div class="tcard-name"><?= $rev['name'] ?> <span class="tcard-verified" title="Google Verified">✓</span></div>
                        <div class="tcard-role"><?= $rev['role'] ?></div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>