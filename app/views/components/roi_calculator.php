<!-- GAP Closure: Interactive ROI Calculator -->
<section id="performance" class="roi-calculator-section section-padding text-white border-bottom border-white border-opacity-10 position-relative overflow-hidden bg-05">
    <div   class="position-absolute w-100 h-100 roi-glow"></div>
    <div class="container position-relative z-1">
        <div class="row align-items-center g-5">
            <div class="col-lg-5" data-aos="fade-right">
                <span class="text-accent-dynamic fw-900 small letter-spacing-2 mb-3 d-block">INTERACTIVE ENGAGEMENT</span>
                <h2 class="display-5 fw-900 mb-4 text-white">Calculate Your <span class="text-accent-dynamic">Digital ROI</span></h2>
                <p class="fs-5 opacity-75 mb-4">Stop guessing. See exactly how an engineered website impacts your bottom line by increasing conversion rates and average order values.</p>
                <div class="d-flex align-items-center gap-3">
                    <i class="bi bi-shield-check text-accent-dynamic fs-3"></i>
                    <span class="fw-bold opacity-50">Data powered by industry averages.</span>
                </div>
            </div>
            <div class="col-lg-7" data-aos="fade-left">
                <div class="p-5 bg-white bg-opacity-10 border border-white border-opacity-25 rounded-5 backdrop-blur">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label class="small fw-bold opacity-75 mb-2">Monthly Traffic</label>
                            <input type="range" class="form-range custom-range" id="trafficInput" min="1000" max="50000" value="5000" step="1000" title="Adjust Monthly Traffic" aria-label="Monthly Traffic Range">
                            <div class="fw-900 fs-4 text-white mt-2" id="trafficVal">5,000 Visitors</div>
                        </div>
                        <div class="col-md-6">
                            <label class="small fw-bold opacity-75 mb-2">Avg. Value Per Client (₹)</label>
                            <input type="range" class="form-range custom-range" id="valueInput" min="1000" max="50000" value="10000" step="1000" title="Adjust Average Client Value" aria-label="Client Value Range">
                            <div class="fw-900 fs-4 text-white mt-2" id="valueVal">₹10,000</div>
                        </div>
                    </div>
                    <div class="mt-5 pt-4 border-top border-white border-opacity-10">
                        <div class="d-flex justify-content-between align-items-end">
                            <div>
                                <span class="d-block small fw-bold opacity-75 text-uppercase letter-spacing-1 mb-2">Projected Monthly Revenue</span>
                                <span class="display-4 fw-900 text-accent-dynamic" id="revenueOutput">₹1,500,000</span>
                            </div>
                            <div class="text-end d-none d-md-block">
                                <span class="d-block small opacity-50">Assuming a 3% Conversion Rate</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>