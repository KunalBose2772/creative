<?php
class HomeController {
    private function getSharedData() {
        $serviceModel = new ServiceModel();
        return [
            'catalog' => $serviceModel->getAll(),
            'process' => [
                ['step' => '01', 'title' => 'Deep Consultation', 'desc' => 'We start with deep conversations to fully understand your business goals, brand identity, and target audience.'],
                ['step' => '02', 'title' => 'Audience Profiling', 'desc' => 'We define and analyze your ideal customers to ensure our designs and campaigns target the right people.'],
                ['step' => '03', 'title' => 'Tailored Strategy', 'desc' => 'We select the best channels—whether website, search, video, or social—for the highest return on your investment.'],
                ['step' => '04', 'title' => 'Goal Agreement', 'desc' => 'We establish clear, realistic milestones and goals together before any design or campaign work begins.'],
                ['step' => '05', 'title' => 'Success Tracking', 'desc' => 'We set up accurate performance metrics to measure progress and ensure we are consistently hitting our targets.'],
                ['step' => '06', 'title' => 'Refinement & Growth', 'desc' => 'We continuously test, analyze, and optimize our work to maximize efficiency and grow your brand.'],
            ],
            'why' => [
                ['icon' => 'bi-lightning', 'title' => 'Always Improving', 'desc' => 'We constantly learn and adapt to the latest design trends and technologies, keeping your brand ahead of the competition.'],
                ['icon' => 'bi-people', 'title' => 'A Dedicated Team', 'desc' => 'A large, passionate team of design, development, and marketing specialists committed to your success.'],
                ['icon' => 'bi-stars', 'title' => 'Brand Experiences', 'desc' => 'We build stunning digital journeys that leave a lasting impression on your customers and drive real business value.'],
                ['icon' => 'bi-rocket-takeoff', 'title' => 'Proven Experience', 'desc' => 'Helping businesses succeed since 2013, we bring deep technical expertise to deliver outstanding results.'],
            ],
            'stats' => [
                ['value' => '50', 'suffix' => '+', 'label' => 'Projects Completed'],
                ['value' => '30', 'suffix' => '+', 'label' => 'Happy Clients'],
                ['value' => '200', 'suffix' => '%', 'label' => 'Avg. Growth'],
                ['value' => '5', 'suffix' => '★', 'label' => 'Average Rating'],
            ],
        ];
    }

    public function index() {
        $workModel = new WorkModel();
        $testimonialModel = new TestimonialModel();
        $serviceModel = new ServiceModel();
        $data = array_merge($this->getSharedData(), [
            'title' => 'Digital Marketing Agency & Web Design Company India | Crea8ve Cool',
            'meta_description' => "Crea8ve Cool is a leading digital marketing agency in India. We provide high-performance web design, 3D animation services, and result-oriented SEO strategies to scale your business.",
            'keywords' => 'digital marketing agency, web design company, 3d animation services, seo agency india, website development company, performance marketing, customized web design, motion graphics studio',
            'hero_color' => '#6A5AE0',
            'services' => [
                [
                    'slug' => 'website',
                    'title' => 'Premium Website Design',
                    'icon' => 'bi-code-square',
                    'description' => 'Beautiful, easy-to-use websites designed from scratch. We build high-performance sites that represent your brand perfectly and convert visitors into customers.'
                ],
                [
                    'slug' => 'seo',
                    'title' => 'Search Engine Optimization',
                    'icon' => 'bi-search',
                    'description' => 'We help your website rank on the first page of Google. Drive consistent, free organic traffic from customers who are actively looking for your services.'
                ],
                [
                    'slug' => 'motion',
                    'title' => '3D Motion & Video Production',
                    'icon' => 'bi-play-circle',
                    'description' => 'Stunning 3D product animations and high-quality video editing. We create eye-catching visual content that stops the scroll and tells your story.'
                ],
                [
                    'slug' => 'performance',
                    'title' => 'Performance Marketing',
                    'icon' => 'bi-graph-up-arrow',
                    'description' => 'Smart paid ad campaigns on Google, Facebook, and Instagram. We optimize your budget to get you more leads, sales, and a clear return on investment.'
                ],
                [
                    'slug' => 'digital-marketing',
                    'title' => 'Digital Marketing Strategy',
                    'icon' => 'bi-megaphone',
                    'description' => 'Comprehensive brand growth through strategic storytelling, social distribution, and data-driven community building.'
                ]
            ],
            'capabilities' => [
                ['title' => 'Strategic Brand Consulting', 'desc' => 'We design clear, actionable digital roadmaps to help your business grow, build trust, and reach its full potential.'],
                ['title' => 'Cinematic 3D Video Production', 'desc' => 'High-quality, realistic 3D product animations and visual narratives that attract attention and increase brand value.'],
                ['title' => 'Google & Local SEO Scaling', 'desc' => 'Proven search optimization to help your business rank locally and nationally, getting you ahead of your competitors.'],
                ['title' => 'Modern Brand Identity Design', 'desc' => 'Complete visual branding, including logos, colors, and design systems that establish trust and professionalism instantly.'],
                ['title' => 'Custom Software & Automation', 'desc' => 'Tailored digital tools and custom web software to simplify your operations, automate repetitive tasks, and save you time.'],
                ['title' => 'Result-Oriented Paid Ads', 'desc' => 'Highly targeted digital advertising campaigns designed to maximize your sales while reducing your acquisition cost.'],
            ],
            'works' => $workModel->getAll(),
            'testimonials' => $testimonialModel->getAll(),
            'clients' => ['techcorp', 'nexaretail', 'brightspace', 'urbanedge', 'swiftpay', 'cloudpeak'],
            'breadcrumbs' => [
                ['name' => 'Home', 'url' => '']
            ]
        ]);

        $view = APP_PATH . '/views/home.php';
        require_once APP_PATH . '/views/layouts/layout.php';
    }

    public function services() {
        $serviceModel = new ServiceModel();

        $data = array_merge($this->getSharedData(), [
            'title' => 'Digital Marketing & Website Development Services | Crea8ve Cool',
            'meta_description' => 'Explore our full range of digital services: Custom website development, SEO services, 3D animation, and performance marketing in India.',
            'hero_color' => '#f8faff',
            'catalog' => $serviceModel->getAll(),
            'breadcrumbs' => [
                ['name' => 'Home', 'url' => ''],
                ['name' => 'Services', 'url' => 'services']
            ]
        ]);
        $view = APP_PATH . '/views/services.php';
        require_once APP_PATH . '/views/layouts/layout.php';
    }

    public function work() {
        $workModel = new WorkModel();
        
        $data = array_merge($this->getSharedData(), [
            'title' => 'Our Portfolio — High-Conversion Web & CGI Case Studies',
            'meta_description' => 'Browse our record of excellence. From e-commerce transformations to viral 3D motion projects, see how we deliver real business results for global brands.',
            'hero_color' => '#E83E8C',
            'breadcrumbs' => [
                ['name' => 'Home', 'url' => ''],
                ['name' => 'Work', 'url' => 'work']
            ],
            'works' => $workModel->getAll(),
        ]);
        $view = APP_PATH . '/views/work.php';
        require_once APP_PATH . '/views/layouts/layout.php';
    }

    public function workDetail($slug) {
        $workModel = new WorkModel();
        $project = $workModel->getBySlug($slug);

        if (!$project) {
            $this->index();
            return;
        }

        $data = array_merge($this->getSharedData(), [
            'title' => $project['title'] . ' | Project Showcase',
            'meta_description' => $project['description'],
            'project' => $project,
            'hero_color' => '#161616',
            'breadcrumbs' => [
                ['name' => 'Home', 'url' => ''],
                ['name' => 'Work', 'url' => 'work'],
                ['name' => $project['title'], 'url' => $slug]
            ]
        ]);
        $view = APP_PATH . '/views/work_detail.php';
        require_once APP_PATH . '/views/layouts/layout.php';
    }

    public function founder() {
        $data = array_merge($this->getSharedData(), [
            'title' => 'Shakti Kumar Gupta | Elite 3D Generalist & CGI Artist',
            'meta_description' => 'Shakti Kumar Gupta is a world-class 3D Artist specializing in Maya, Blender, and ZBrush. Delivering photorealistic CGI and cinematic visuals for global brands.',
            'hero_color' => '#FF5E36',
            'breadcrumbs' => [
                ['name' => 'Home', 'url' => ''],
                ['name' => 'The Artist', 'url' => 'founder']
            ]
        ]);
        $view = APP_PATH . '/views/founder.php';
        require_once APP_PATH . '/views/layouts/layout.php';
    }

    public function about() {
        $data = array_merge($this->getSharedData(), [
            'title' => 'About Crea8ve Cool — The Future of Digital Engineering',
            'meta_description' => 'Meet the elite team of designers, engineers, and growth hackers at Crea8ve Cool. We combine technical mastery with creative vision to scale your business.',
            'hero_color' => '#6A5AE0',
            'breadcrumbs' => [
                ['name' => 'Home', 'url' => ''],
                ['name' => 'Our Story', 'url' => 'about']
            ]
        ]);
        $view = APP_PATH . '/views/about.php';
        require_once APP_PATH . '/views/layouts/layout.php';
    }

    public function whyUs() {
        $data = array_merge($this->getSharedData(), [
            'title' => 'Why Us — The Crea8ve Cool Advantage in Digital Growth',
            'meta_description' => 'Discover why leading brands trust Crea8ve Cool for high-performance web engineering, industrial SEO, and cinematic brand storytelling.',
            'hero_color' => '#FF007A',
            'breadcrumbs' => [
                ['name' => 'Home', 'url' => ''],
                ['name' => 'Why Us', 'url' => 'why-us']
            ]
        ]);
        $view = APP_PATH . '/views/why-us.php';
        require_once APP_PATH . '/views/layouts/layout.php';
    }

    public function testimonials() {
        $testimonialModel = new TestimonialModel();

        $data = array_merge($this->getSharedData(), [
            'title' => 'Success Stories — Real Growth Results for Our Partners',
            'meta_description' => 'Read how Crea8ve Cool has helped businesses scale their revenue by 200%+ and dominate their competitive search landscapes.',
            'hero_color' => '#FFB800',
            'testimonials' => $testimonialModel->getAll(),
            'breadcrumbs' => [
                ['name' => 'Home', 'url' => ''],
                ['name' => 'Testimonials', 'url' => 'testimonials']
            ]
        ]);
        $view = APP_PATH . '/views/testimonials.php';
        require_once APP_PATH . '/views/layouts/layout.php';
    }

    public function process() {
        $data = array_merge($this->getSharedData(), [
            'title' => 'Our Process — The Blueprint to Digital Dominance',
            'meta_description' => 'Explore our 6-step engineering workflow: From deep consultation to success tracking and continuous growth refinement.',
            'hero_color' => '#00D2FF',
            'breadcrumbs' => [
                ['name' => 'Home', 'url' => ''],
                ['name' => 'Our Process', 'url' => 'process']
            ]
        ]);
        $view = APP_PATH . '/views/process_page.php';
        require_once APP_PATH . '/views/layouts/layout.php';
    }

    public function careers() {
        $data = array_merge($this->getSharedData(), [
            'title' => 'Careers — Join India\'s Elite Digital Engineering Squad',
            'meta_description' => 'Looking to build the future of the web? Explore open positions at Crea8ve Cool and join our team of world-class designers and engineers.',
            'hero_color' => '#28C840',
            'breadcrumbs' => [
                ['name' => 'Home', 'url' => ''],
                ['name' => 'Careers', 'url' => 'careers']
            ]
        ]);
        $view = APP_PATH . '/views/careers.php';
        require_once APP_PATH . '/views/layouts/layout.php';
    }

    public function privacyPolicy() {
        $data = array_merge($this->getSharedData(), [
            'title' => 'Privacy Policy | Crea8ve Cool Digital Agency',
            'meta_description' => 'Read our privacy policy to understand how we collect, protect, and use your data when using Crea8ve Cool web solutions.',
            'hero_color' => '#6A5AE0',
            'breadcrumbs' => [
                ['name' => 'Home', 'url' => ''],
                ['name' => 'Privacy Policy', 'url' => 'privacy-policy']
            ]
        ]);
        $view = APP_PATH . '/views/privacy_policy.php';
        require_once APP_PATH . '/views/layouts/layout.php';
    }

    public function terms() {
        $data = array_merge($this->getSharedData(), [
            'title' => 'Terms of Service | Crea8ve Cool Digital Agency',
            'meta_description' => 'Read our terms of service to understand your rights, responsibilities, and guidelines when partnering with Crea8ve Cool.',
            'hero_color' => '#FF5E36',
            'breadcrumbs' => [
                ['name' => 'Home', 'url' => ''],
                ['name' => 'Terms of Service', 'url' => 'terms']
            ]
        ]);
        $view = APP_PATH . '/views/terms.php';
        require_once APP_PATH . '/views/layouts/layout.php';
    }

    public function videoPortfolio() {
        $data = array_merge($this->getSharedData(), [
            'title' => 'Video Portfolio — Cinematic 3D & Brand Showreels',
            'meta_description' => 'Explore our premium 3D motion graphics and cinematic video portfolio. High-speed, uncompressed visuals designed to stop the scroll.',
            'hero_color' => '#000000',
            'breadcrumbs' => [
                ['name' => 'Home', 'url' => ''],
                ['name' => 'Work', 'url' => 'work'],
                ['name' => 'Video Portfolio', 'url' => 'video-portfolio']
            ]
        ]);
        $view = APP_PATH . '/views/work/video_portfolio.php';
        require_once APP_PATH . '/views/layouts/layout.php';
    }

    public function contact() {
        $success = false;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $inquiryModel = new InquiryModel();
            $data = [
                'name' => htmlspecialchars($_POST['name'] ?? ''),
                'email' => htmlspecialchars($_POST['email'] ?? ''),
                'service_type' => 'General Inquiry',
                'budget' => 'N/A',
                'message' => htmlspecialchars($_POST['message'] ?? '')
            ];
            
            if ($inquiryModel->create($data)) {
                MailEngine::sendInquiryNotification($data);
                $success = true;
            }
        }

        $data = array_merge($this->getSharedData(), [
            'title' => 'Partner for Growth | Request a Custom Strategy Audit | Crea8ve Cool',
            'meta_description' => 'Ready to dominate your niche? Contact Crea8ve Cool today for a high-level digital strategy audit and start your journey toward absolute industry leadership.',
            'hero_color' => '#28C840',
            'success' => $success,
            'breadcrumbs' => [
                ['name' => 'Home', 'url' => ''],
                ['name' => 'Contact', 'url' => 'contact']
            ]
        ]);
        $view = APP_PATH . '/views/contact.php';
        require_once APP_PATH . '/views/layouts/layout.php';
    }

    public function booking() {
        $success = false;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $inquiryModel = new InquiryModel();
            $data = [
                'name' => htmlspecialchars($_POST['name'] ?? ''),
                'email' => htmlspecialchars($_POST['email'] ?? ''),
                'service_type' => htmlspecialchars($_POST['service_type'] ?? 'Not Specified'),
                'budget' => htmlspecialchars($_POST['budget'] ?? 'Not Specified'),
                'message' => htmlspecialchars($_POST['message'] ?? '')
            ];
            
            if ($inquiryModel->create($data)) {
                MailEngine::sendInquiryNotification($data);
                $success = true;
            }
        }

        $data = array_merge($this->getSharedData(), [
            'title' => 'Project Planner & Expert Consultation Booking | Crea8ve Cool',
            'meta_description' => 'Ready to build something legendary? Complete our project planner to receive a custom design and growth strategy audit within 24 hours.',
            'hero_color' => '#6A5AE0',
            'success' => $success,
            'breadcrumbs' => [
                ['name' => 'Home', 'url' => ''],
                ['name' => 'Book Project', 'url' => 'booking']
            ]
        ]);
        $view = APP_PATH . '/views/booking.php';
        require_once APP_PATH . '/views/layouts/layout.php';
    }

    public function leadsSubmit() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $inquiryModel = new InquiryModel();
            $phone = htmlspecialchars($_POST['phone'] ?? '');
            $source = htmlspecialchars($_POST['source'] ?? 'Landing Page Lead');
            $data = [
                'name' => htmlspecialchars($_POST['name'] ?? ''),
                'email' => htmlspecialchars($_POST['email'] ?? ''),
                'service_type' => $source,
                'budget' => 'Not Specified',
                'message' => 'Lead Form Submission. Contact Phone: ' . $phone
            ];
            
            if ($inquiryModel->create($data)) {
                MailEngine::sendInquiryNotification($data);
            }
        }
        
        // Redirect back to referring page with success query parameter
        $referrer = $_SERVER['HTTP_REFERER'] ?? BASE_URL;
        $separator = (parse_url($referrer, PHP_URL_QUERY) == NULL) ? '?' : '&';
        header('Location: ' . $referrer . $separator . 'success=1#leads-form');
        exit();
    }

    public function service($slug, $location = null) {
        $staticServices = [
            'website' => [
                'title' => 'Website Development Company',
                'meta_title' => 'Website Development Company India | Custom Web Design Services | Crea8ve Cool',
                'meta_description' => 'Looking for a professional website development company in India? We build fast, responsive, and high-conversion websites tailored to your business needs.',
                'keywords' => 'website development company, web design services india, custom website developer, responsive web design, ecommerce website development',
                'color' => '#6A5AE0',
                'desc' => 'We are a top-rated website development company in India. We build stunning, fast, and easy-to-use websites that represent your brand perfectly and are built to turn visitors into loyal customers.',
                'seo_content' => 'We provide professional website development and web design services in India that focus on quality and measurable results.',
                'features' => [],
                'packages' => []
            ],
            'seo' => [
                'title' => 'SEO Services India',
                'meta_title' => 'SEO Services India | Search Engine Optimization Agency Delhi | Crea8ve Cool',
                'meta_description' => 'Grow your organic traffic with our expert SEO services in India. We specialize in keyword research, technical SEO, and link building to rank your business on Page 1.',
                'keywords' => 'seo services india, search engine optimization agency, seo company delhi, organic traffic growth, keyword research services',
                'color' => '#FF007A',
                'desc' => 'Rankings are important, but revenue is gold. We are an SEO agency in India that builds smart search strategies to help your website rank for the exact terms your customers are searching for.',
                'seo_content' => 'We provide professional search engine optimization (SEO) services in India that focus on organic growth and lead generation.',
                'features' => [],
                'packages' => []
            ],
            'motion' => [
                'title' => '3D Animation Services',
                'meta_title' => '3D Animation Services & Motion Graphics Studio India | Crea8ve Cool',
                'meta_description' => 'Premium 3D animation studio in India. We create cinematic 3D product renders, motion graphics, and high-quality video editing for brands.',
                'keywords' => '3d animation services, motion graphics studio india, 3d product rendering, video editing services, cgi studio',
                'color' => '#FF5E36',
                'desc' => 'We are a leading 3D animation studio in India. We create stunning 3D product animations and cinematic videos that help your brand stand out and capture attention.',
                'seo_content' => 'We provide professional 3D animation and motion graphics services in India that focus on visual storytelling and conversions.',
                'features' => [],
                'packages' => []
            ],
            'performance' => [
                'title' => 'Google Ads & Meta Ads',
                'meta_title' => 'Google Ads & Meta Marketing Agency India | Performance Marketing | Crea8ve Cool',
                'meta_description' => 'Increase your sales with our performance marketing services in India. We manage high-ROI Google Ads and Meta (Facebook/Instagram) ad campaigns.',
                'keywords' => 'google ads agency india, facebook ads management, performance marketing agency, roi driven ads, lead generation services',
                'color' => '#FFB800',
                'desc' => 'Stop burning your ad budget. We are a performance marketing agency in India that manages aggressive, data-driven paid campaigns to turn every dollar into revenue.',
                'seo_content' => 'We provide professional Google Ads and Meta marketing services in India that focus on measurable ROI.',
                'features' => [],
                'packages' => []
            ],
            'digital-marketing' => [
                'title' => 'Digital Marketing Strategy',
                'meta_title' => 'Digital Marketing Strategy & Social Media Growth India | Crea8ve Cool',
                'meta_description' => 'Comprehensive digital marketing and brand strategy services in India. We help businesses scale their online presence through social media and content marketing.',
                'keywords' => 'digital marketing strategy, social media marketing india, brand growth services, content marketing agency, online marketing strategy',
                'color' => '#28C840',
                'desc' => 'We are a digital marketing strategy agency in India. We build integrated marketing ecosystems that combine storytelling and data-driven growth to scale your brand.',
                'seo_content' => 'We provide professional digital marketing and brand growth strategies in India that focus on long-term authority.',
                'features' => [],
                'packages' => []
            ],
            'enterprise-erp' => [
                'title' => 'Enterprise ERP Systems',
                'meta_title' => 'Enterprise ERP Systems Development India | Custom ERP Agency | Crea8ve Cool',
                'meta_description' => 'Looking for an enterprise ERP development company in India? We build high-performance, custom ERP software to automate your operations and scale your business.',
                'keywords' => 'enterprise erp systems, custom erp software development, cloud erp india, business automation company, custom workflow solutions',
                'color' => '#6A5AE0',
                'desc' => 'Power your entire business operations with our next-generation Enterprise ERP systems. Custom-designed to automate workflows, unify data streams, and streamline decision-making at scale.',
                'seo_content' => 'We specialize in engineering custom ERP systems that unify inventory, logistics, CRM, and human resource management into a single, high-performance platform.',
                'features' => [
                    ['title' => 'Complete Process Automation', 'desc' => 'Eliminate manual errors and automate repetitive administrative workflows.'],
                    ['title' => 'Real-Time Inventory Engine', 'desc' => 'Predictive stock management with automated purchase orders and tracking.'],
                    ['title' => 'Secure Multi-Tenant Cloud', 'desc' => 'High-performance cloud synchronization with bank-grade encryption frameworks.']
                ],
                'packages' => [
                    [
                        'name' => 'SME Suite',
                        'tagline' => 'ERP SME Package',
                        'desc' => 'Perfect for growing businesses seeking foundational automation.',
                        'price' => '1,49,999',
                        'original_price' => '2,49,999',
                        'savings' => '40',
                        'features' => ['Core ERP Sync Engine', '5 Integrated Modules', 'Local Data Warehouse', 'Standard Analytics Reports', 'Role-Based User Controls', '12 Months Free Updates', 'Next-Business-Day Support'],
                        'color' => '#6A5AE0',
                        'recommended' => false
                    ],
                    [
                        'name' => 'Enterprise Core',
                        'tagline' => 'ERP Enterprise Package',
                        'desc' => 'A comprehensive workflow engine for mature companies.',
                        'price' => '4,99,999',
                        'original_price' => '7,99,999',
                        'savings' => '37',
                        'features' => ['Unlimited Operations Modules', 'Predictive AI Inventory Hub', 'Multi-Warehouse Live Sync', 'Automated GST & Tax Filing', 'Custom Legacy API Bridges', '24/7 Cloud Redundancy', '2-Hour SLA Critical Support'],
                        'color' => '#FF007A',
                        'recommended' => true
                    ]
                ]
            ],
            'customer-crm' => [
                'title' => 'Customer CRM Platforms',
                'meta_title' => 'Custom CRM Software Development India | CRM Agency | Crea8ve Cool',
                'meta_description' => 'Upgrade your sales with our custom CRM software development services in India. We design high-conversion pipelines and lead management engines.',
                'keywords' => 'custom crm software development, customer relationship management, sales pipeline tools, lead tracking system india, customer data platform',
                'color' => '#FF007A',
                'desc' => 'Unify sales pipelines, lead data, and automated marketing flows. Our CRM systems give your sales reps clean interaction timelines to optimize deals and relationships.',
                'seo_content' => 'We specialize in building bespoke CRM solutions that convert cold traffic into long-term loyal clients through automated triggers.',
                'features' => [
                    ['title' => 'Interactive Sales Pipeline', 'desc' => 'Track deals visually and move leads through custom pipeline phases.'],
                    ['title' => 'Automated Funnel Triggers', 'desc' => 'Instantly send follow-ups and assign tasks to sales reps as deals advance.'],
                    ['title' => 'Universal Contact Timelines', 'desc' => 'Every email, meeting, and note consolidated in one centralized timeline.']
                ],
                'packages' => [
                    [
                        'name' => 'Sales Pipeline',
                        'tagline' => 'CRM SME Package',
                        'desc' => 'For active sales teams looking to close deals faster.',
                        'price' => '49,999',
                        'original_price' => '84,999',
                        'savings' => '41',
                        'features' => ['Interactive Kanban Pipeline', 'Upto 10 Sales User Accounts', 'Automatic Lead Routing', 'Basic Email Sync Integration', 'Monthly Performance Audits', 'Standard Data Export', 'Email Ticket Support'],
                        'color' => '#6A5AE0',
                        'recommended' => false
                    ],
                    [
                        'name' => 'Relationship Suite',
                        'tagline' => 'CRM Pro Package',
                        'desc' => 'The ultimate customer intelligence core for industry leaders.',
                        'price' => '1,29,999',
                        'original_price' => '1,99,999',
                        'savings' => '35',
                        'features' => ['Unlimited CRM Sales Accounts', 'Automated Email Drip Campaigns', 'Omnichannel Chat Logs Sync', 'AI Deal-Win Probability Scoring', 'Custom Third-Party API Bridges', 'Military-Grade Field Lockdown', '24/7 Priority Support Hotlines'],
                        'color' => '#FF007A',
                        'recommended' => true
                    ]
                ]
            ],
            'hrms-tech' => [
                'title' => 'HRMS Tech Solutions',
                'meta_title' => 'HRMS Software Development Company India | Custom HR Portals | Crea8ve Cool',
                'meta_description' => 'Build a high-performance workforce with our custom HRMS software solutions in India. Automated payroll, attendance tracking, and recruiting platforms.',
                'keywords' => 'hrms software development, custom hr portals india, automated payroll software, attendance tracking tool, performance review system',
                'color' => '#00D2FF',
                'desc' => 'Modernize your workforce management. Our custom HRMS platforms automate attendance tracking, leave schedules, complex payroll models, and annual performance loops.',
                'seo_content' => 'We engineer custom HRMS portals that empower HR managers and build a productive, highly transparent workplace culture.',
                'features' => [
                    ['title' => 'Dynamic Payroll Modules', 'desc' => 'Automate complex tax computations, PF/ESI deductions, and instant slip distribution.'],
                    ['title' => 'Secure Attendance Logs', 'desc' => 'Geo-fenced mobile check-ins and biometric hardware integrations.'],
                    ['title' => 'Employee Self-Service', 'desc' => 'Direct leaves application, document lockers, and expense claims.']
                ],
                'packages' => [
                    [
                        'name' => 'Workforce Suite',
                        'tagline' => 'HRMS Growth Package',
                        'desc' => 'Essential payroll and directory structures for up to 50 employees.',
                        'price' => '59,999',
                        'original_price' => '99,999',
                        'savings' => '40',
                        'features' => ['Employee Master Directory', 'Automatic Attendance Logs', 'Leave Request Dashboards', 'Basic Automated Payroll engine', 'Secure Employee Slip Locker', 'Standard Reports Module', 'Email Ticket Support'],
                        'color' => '#6A5AE0',
                        'recommended' => false
                    ],
                    [
                        'name' => 'Enterprise HRMS',
                        'tagline' => 'HRMS Enterprise Package',
                        'desc' => 'Full scale organization controls with biometric integration and payroll.',
                        'price' => '1,49,999',
                        'original_price' => '2,39,999',
                        'savings' => '37',
                        'features' => ['Unlimited Employee Accounts', 'Custom Biometric Hardware Bridges', 'Automated Multi-State Tax Engine', 'Performance Appraisal Matrices', 'Recruiting & ATS Funnel System', 'Expense Claims Settlement Flow', 'Priority SLA Phone Support'],
                        'color' => '#00D2FF',
                        'recommended' => true
                    ]
                ]
            ],
            'ecommerce' => [
                'title' => 'E-Commerce Marketplaces',
                'meta_title' => 'E-Commerce Website Development India | Custom Shop Builders | Crea8ve Cool',
                'meta_description' => 'Launch a lightning-fast online store. We build custom e-commerce marketplaces and high-conversion shopping portals tailored to scale your sales.',
                'keywords' => 'ecommerce website development, custom online store builder, multi vendor marketplace, secure checkout integration, shopping portal india',
                'color' => '#FF7A18',
                'desc' => 'Stop losing customers at checkout. We engineer custom, blisteringly fast e-commerce experiences with optimized carts, secure checkouts, and seamless inventory tools.',
                'seo_content' => 'Our custom e-commerce engines are designed for sub-second page rendering and frictionless purchases, resulting in massive sales growth.',
                'features' => [
                    ['title' => 'Frictionless Fast Checkout', 'desc' => 'Single-page, secure checkouts with instant payment integrations.'],
                    ['title' => 'Multi-Vendor Architecture', 'desc' => 'Scale from a single shop to a multi-vendor hub like Amazon.'],
                    ['title' => 'Automated Warehousing API', 'desc' => 'Real-time inventory mapping with automated courier and shipping links.']
                ],
                'packages' => [
                    [
                        'name' => 'Growth Store',
                        'tagline' => 'Ecom Growth Package',
                        'desc' => 'Beautiful, optimized store to launch your brand online.',
                        'price' => '69,999',
                        'original_price' => '1,19,999',
                        'savings' => '41',
                        'features' => ['Custom E-Commerce Frontend', 'Secure Stripe/Razorpay Bridge', 'Inventory Management Panel', 'Dynamic Discounts/Coupons Engine', 'Standard Order Analytics', 'Mobile-Responsive Layouts', '1 Year Hosting & SSL'],
                        'color' => '#6A5AE0',
                        'recommended' => false
                    ],
                    [
                        'name' => 'Infinite Marketplace',
                        'tagline' => 'Ecom Enterprise Package',
                        'desc' => 'Custom multi-vendor e-commerce platform built to dominate.',
                        'price' => '1,89,999',
                        'original_price' => '2,99,999',
                        'savings' => '36',
                        'features' => ['Multi-Vendor Seller Portals', 'Automated Commissions Split', 'Advanced Elastic Search Filters', 'Real-Time Warehousing Sync API', 'Custom POS Data Sync Bridge', 'Automated Abandoned Cart Recovery', '24/7 Priority Emergency Support'],
                        'color' => '#FF7A18',
                        'recommended' => true
                    ]
                ]
            ],
            'retail-pos' => [
                'title' => 'Retail POS Systems',
                'meta_title' => 'Retail POS Software Development India | Custom POS Agency | Crea8ve Cool',
                'meta_description' => 'Unify online and offline retail with our custom Point of Sale (POS) systems. Fast barcode checkout, secure payments, and centralized inventory.',
                'keywords' => 'retail pos software, custom point of sale system, barcode scanner checkout, multi store inventory, offline pos india',
                'color' => '#E83E8C',
                'desc' => 'Unify your retail counters and warehouses. Our custom POS software works offline, registers fast barcode checkouts, and synchronizes central stock levels instantly.',
                'seo_content' => 'We engineer intuitive, high-speed retail checkout software that reduces line waiting times and secures financial data.',
                'features' => [
                    ['title' => 'Ultra-Fast Barcode Checkouts', 'desc' => 'Scan, add, and process payments in under three seconds.'],
                    ['title' => 'Multi-Outlet Inventory Sync', 'desc' => 'Unify inventory across all brick-and-mortar storefronts.'],
                    ['title' => 'Offline Transaction Vault', 'desc' => 'Keep selling even when your internet drops. Auto-syncs later.']
                ],
                'packages' => [
                    [
                        'name' => 'POS Solo',
                        'tagline' => 'POS Startup Package',
                        'desc' => 'Perfect checkout setup for a single brick-and-mortar store.',
                        'price' => '39,999',
                        'original_price' => '69,999',
                        'savings' => '42',
                        'features' => ['Single Store POS Screen', 'Offline Data Storage Engine', 'Barcode & Receipt Printer Sync', 'Core Inventory Tracking', 'Daily Sales Report Generator', 'User-Friendly Touch Screen UI', 'Next-Business-Day Support'],
                        'color' => '#6A5AE0',
                        'recommended' => false
                    ],
                    [
                        'name' => 'Chain POS',
                        'tagline' => 'POS Franchise Package',
                        'desc' => 'Advanced, unified checkout architecture for growing retail chains.',
                        'price' => '1,19,999',
                        'original_price' => '1,89,999',
                        'savings' => '37',
                        'features' => ['Unlimited Store Outlet Connections', 'Centralized Real-Time Inventory Sync', 'Split Commission Sales Modules', 'Automated GST Tax Filing Engine', 'Customer Loyalty Points Ledger', 'Advanced Sales Predictor Graph', '24/7 SLA Priority Phone Support'],
                        'color' => '#E83E8C',
                        'recommended' => true
                    ]
                ]
            ],
            'lms-portals' => [
                'title' => 'LMS Portals',
                'meta_title' => 'LMS Software & EdTech Portal Development India | Crea8ve Cool',
                'meta_description' => 'Build your online academy. We build custom Learning Management Systems (LMS), quiz engines, and student tracking portals.',
                'keywords' => 'lms software development, learning management system india, online academy builder, quiz engine, edtech portal company',
                'color' => '#17A2B8',
                'desc' => 'Own your educational platform. We design premium EdTech portals complete with video course modules, quiz sheets, automated certificate generators, and secure student progress tracking.',
                'seo_content' => 'Our learning platforms are engineered to provide student-first usability, high-definition streaming, and secure subscription payments.',
                'features' => [
                    ['title' => 'HD Lesson Streaming Hub', 'desc' => 'Lag-free video players with custom watermarking and security locks.'],
                    ['title' => 'Automated Quiz Engine', 'desc' => 'Define grades, generate quizzes, and dynamically distribute custom PDF certificates.'],
                    ['title' => 'Student Progress Tracking', 'desc' => 'Gamify student tracking with badges, graphs, and reminders.']
                ],
                'packages' => [
                    [
                        'name' => 'Academy Core',
                        'tagline' => 'LMS Academy Package',
                        'desc' => 'The essential training setup for individual creators and schools.',
                        'price' => '59,999',
                        'original_price' => '99,999',
                        'savings' => '40',
                        'features' => ['Video & PDF Course Builder', 'Upto 1,000 Active Students', 'Standard Payment Gateway Integration', 'Dynamic Student Tracking Graphs', 'Basic Quiz/Grade Matrices', 'Mobile-Friendly Portal View', 'Email Ticket Support'],
                        'color' => '#6A5AE0',
                        'recommended' => false
                    ],
                    [
                        'name' => 'Enterprise EdTech',
                        'tagline' => 'LMS Enterprise Package',
                        'desc' => 'The ultimate custom e-learning platform for large educational brands.',
                        'price' => '1,39,999',
                        'original_price' => '2,19,999',
                        'savings' => '36',
                        'features' => ['Unlimited Students & Courses', 'Dynamic PDF Certificate Generator', 'Advanced Gamified Badges System', 'Live Video Classroom Bridges', 'Multi-Instructor Commission Sync', 'Secure anti-rip video lockouts', '24/7 SLA Priority Phone Support'],
                        'color' => '#17A2B8',
                        'recommended' => true
                    ]
                ]
            ],
            'native-apps' => [
                'title' => 'Native iOS & Android Apps',
                'meta_title' => 'Mobile App Development Company India | iOS & Android Apps | Crea8ve Cool',
                'meta_description' => 'Looking for a mobile app development company in India? We build high-performance, custom iOS and Android applications with offline caching and APIs.',
                'keywords' => 'mobile app development company, custom ios apps india, android app builder, flutter hybrid apps, high performance mobile application',
                'color' => '#FD7E14',
                'desc' => 'We are a leading mobile app development company in India. We engineer beautiful, high-performance applications for iOS and Android with fast offline caching, push notifications, and sleek responsive interfaces.',
                'seo_content' => 'We utilize advanced SDKs like Flutter and Swift to deliver premium, buttery-smooth mobile applications that convert users.',
                'features' => [
                    ['title' => 'Buttery-Smooth UI Animations', 'desc' => 'Unlocking 120Hz native screen rendering for spectacular user response.'],
                    ['title' => 'Offline-First SQL Caching', 'desc' => 'Allow users to browse catalog data smoothly even without active internet.'],
                    ['title' => 'Targeted Push Notifications', 'desc' => 'Engage users instantly with dynamic event-triggered alerts.']
                ],
                'packages' => [
                    [
                        'name' => 'Single Platform',
                        'tagline' => 'Mobile Startup Package',
                        'desc' => 'A robust native application designed for either iOS or Android.',
                        'price' => '1,99,999',
                        'original_price' => '3,29,999',
                        'savings' => '39',
                        'features' => ['Dedicated iOS OR Android Build', 'Sleek Material/Cupertino Interface', 'Full Custom API Synchronization', 'Secure User Login & Profile', 'Upto 10 Custom View Screens', 'Push Alerts Console Bridge', 'Standard Store Submission Support'],
                        'color' => '#6A5AE0',
                        'recommended' => false
                    ],
                    [
                        'name' => 'Hybrid Infinite',
                        'tagline' => 'Mobile Pro Package',
                        'desc' => 'Comprehensive multi-platform app development to capture the full market.',
                        'price' => '3,99,999',
                        'original_price' => '5,99,999',
                        'savings' => '33',
                        'features' => ['Simultaneous iOS & Android Builds', 'Buttery 120Hz UI Performance', 'Advanced Offline Caching Engine', 'Omnichannel Payment Processing', 'Custom Bluetooth/GPS Hardware Bridges', 'Biometric FaceID/Fingerprint Security', '24/7 Priority Emergency Support'],
                        'color' => '#FD7E14',
                        'recommended' => true
                    ]
                ]
            ],
            'saas-platforms' => [
                'title' => 'SaaS Platforms',
                'meta_title' => 'SaaS Product Development Company India | Custom SaaS MVP | Crea8ve Cool',
                'meta_description' => 'Launch your SaaS product with India\'s elite development agency. Custom multi-tenant databases, API architectures, and scalable cloud MVPs.',
                'keywords' => 'saas product development company, custom saas mvp, multi tenant database, scalable cloud platform, subscription billing software',
                'color' => '#00D2FF',
                'desc' => 'Turn your software idea into a recurring-revenue SaaS empire. We engineer secure, multi-tenant SaaS platforms with modular subscription controls, user workspaces, and high-performance databases.',
                'seo_content' => 'Our experienced software architects design highly scalable MVPs and APIs designed to handle millions of queries smoothly.',
                'features' => [
                    ['title' => 'Secure Multi-Tenant DB', 'desc' => 'Total data isolation between client organizations at the query layer.'],
                    ['title' => 'Subscription Billing Hub', 'desc' => 'Integrated automated Stripe billing with monthly and annual plan support.'],
                    ['title' => 'Developer API Outlets', 'desc' => 'Allow your clients to connect their programs directly to your SaaS platform.']
                ],
                'packages' => [
                    [
                        'name' => 'MVP Launch',
                        'tagline' => 'SaaS Startup Package',
                        'desc' => 'Get to market quickly with a secure, beautifully polished product MVP.',
                        'price' => '2,49,999',
                        'original_price' => '3,99,999',
                        'savings' => '37',
                        'features' => ['Core Multi-Tenant Workspace', 'Clean SaaS Admin Dashboard', 'Stripe Billing & Plans Sync', 'Secure Signup & Session Locks', 'Upto 15 Custom Views/Pages', 'Postgres Database Cluster', '3 Months Dedicated Support'],
                        'color' => '#6A5AE0',
                        'recommended' => false
                    ],
                    [
                        'name' => 'SaaS Scale',
                        'tagline' => 'SaaS Enterprise Package',
                        'desc' => 'A scalable, microservice-backed platform to conquer your industry.',
                        'price' => '5,99,999',
                        'original_price' => '8,99,999',
                        'savings' => '33',
                        'features' => ['Microservices Cloud Architecture', 'Automated Scaling & Load Balancer', 'Client Developer API Suite', 'Advanced Enterprise Team Permissions', 'AI Analytics Reporting Engine', 'SSO/SAML Secure Single Sign-On', '24/7 SLA Priority Engineer Support'],
                        'color' => '#00D2FF',
                        'recommended' => true
                    ]
                ]
            ],
            'custom-software' => [
                'title' => 'Specialized Custom Software',
                'meta_title' => 'Custom Software Development Company India | Bespoke Tools | Crea8ve Cool',
                'meta_description' => 'Simplify your business operations. We build custom business software, database systems, and automation tools designed for your exact needs.',
                'keywords' => 'custom software development company, bespoke business tools, database engineering india, systems automation agency, custom enterprise portal',
                'color' => '#20C997',
                'desc' => 'Standard template software doesn\'t fit your workflows. We build custom software tools from scratch to match your exact processes, helping you cut administrative errors by 90% and save hours daily.',
                'seo_content' => 'We write highly optimized, secure code that connects your operations and drives visible growth.',
                'features' => [
                    ['title' => 'Bespoke Functional Tools', 'desc' => 'Engineered from scratch to solve your specific operational challenges.'],
                    ['title' => 'Ultra-Secure Database Core', 'desc' => 'High-performance database structuring with SQL injection locks.'],
                    ['title' => 'Automated Cron Job Engine', 'desc' => 'Let systems run tasks, audits, and generate reports on a schedule in the background.']
                ],
                'packages' => [
                    [
                        'name' => 'Tailored MVP',
                        'tagline' => 'Custom Startup Package',
                        'desc' => 'Bespoke utility tools built to eliminate manual friction.',
                        'price' => '99,999',
                        'original_price' => '1,59,999',
                        'savings' => '37',
                        'features' => ['Custom Functional Specification', 'Secure PHP MVC Architecture', 'Relational MySQL Database Core', 'Clean Responsive Admin View', 'Role-Based Team Permissions', 'Daily Automated Backups', 'Next-Business-Day Email Support'],
                        'color' => '#6A5AE0',
                        'recommended' => false
                    ],
                    [
                        'name' => 'Enterprise Suite',
                        'tagline' => 'Custom Enterprise Package',
                        'desc' => 'The complete bespoke operating system for large organizations.',
                        'price' => '2,99,999',
                        'original_price' => '4,49,999',
                        'savings' => '33',
                        'features' => ['Comprehensive Systems Mapping', 'Unlimited Database Scale', 'High-Speed API Connectors', 'Real-Time Background Job Processing', 'Advanced Biometric Audit Trail', 'Military-Grade Field Lockdowns', '24/7 SLA Priority Phone Support'],
                        'color' => '#20C997',
                        'recommended' => true
                    ]
                ]
            ],
            'system-integration' => [
                'title' => 'API & System Integration',
                'meta_title' => 'API & System Integration Services India | Backend Agency | Crea8ve Cool',
                'meta_description' => 'Connect your digital ecosystems. We build custom API integrations, secure middleware, and background data synchronization networks.',
                'keywords' => 'system integration services, custom api developer india, secure middleware, database synchronization, webhook integration',
                'color' => '#6F42C1',
                'desc' => 'Break down communication barriers between your platforms. We build secure custom APIs and middleware brokers to sync databases, payment gateways, and shipping webhooks.',
                'seo_content' => 'We engineer stable, high-availability system integrations that guarantee real-time data accuracy across all channels.',
                'features' => [
                    ['title' => 'Secure RESTful API Pipelines', 'desc' => 'Build high-speed, well-documented endpoint networks.'],
                    ['title' => 'Dynamic Data Sync Middleware', 'desc' => 'Instantly map and translate field keys between divergent platforms.'],
                    ['title' => 'Webhooks Event Receivers', 'desc' => 'Trigger real-time actions and alerts instantly as events happen.']
                ],
                'packages' => [
                    [
                        'name' => 'API Sync',
                        'tagline' => 'Integration Basic Package',
                        'desc' => 'Connect up to 3 core systems securely via webhooks.',
                        'price' => '49,999',
                        'original_price' => '79,999',
                        'savings' => '37',
                        'features' => ['Connect Up To 3 APIs', 'Custom Webhooks Handlers', 'Secure SSL Payload Encryption', 'Basic Error Logging Console', 'Automatic Retry Pipeline', 'Standard Response Formatter', 'Email Ticket Support'],
                        'color' => '#6A5AE0',
                        'recommended' => false
                    ],
                    [
                        'name' => 'Microservices Hub',
                        'tagline' => 'Integration Enterprise Package',
                        'desc' => 'A centralized database broker and transaction logger for large enterprises.',
                        'price' => '1,49,999',
                        'original_price' => '2,29,999',
                        'savings' => '34',
                        'features' => ['Unlimited API & Service Bridges', 'High-Speed Central Data Hub', 'Dynamic Payload Conversion Filters', 'Automated Daily Health Audits', 'Custom Dashboard Log Monitor', 'Advanced Rate-Limiting Protections', '24/7 Priority Emergency Support'],
                        'color' => '#6F42C1',
                        'recommended' => true
                    ]
                ]
            ],
            'pwa' => [
                'title' => 'Progressive Web Apps',
                'meta_title' => 'PWA Development Company India | Custom Progressive Web Apps | Crea8ve Cool',
                'meta_description' => 'Unleash app-like mobile speed with our custom Progressive Web App (PWA) development services. Offline browsing, fast loads, and push alerts.',
                'keywords' => 'pwa development company, progressive web apps india, custom mobile web application, offline service worker, push notifications pwa',
                'color' => '#E83E8C',
                'desc' => 'Bypass App Store approvals entirely. We develop lightweight, installable Progressive Web Apps that load instantly, browse offline via service workers, and send push alerts.',
                'seo_content' => 'We engineer lightweight PWAs designed to load instantly on 3G speeds and increase mobile engagement by 150%.',
                'features' => [
                    ['title' => 'Service Workers Caching', 'desc' => 'Allows instant offline browsing and ultra-fast page rendering.'],
                    ['title' => 'Installable Home Screen Apps', 'desc' => 'Add the app to user screens with one click without downloading from app stores.'],
                    ['title' => 'Background Sync Engines', 'desc' => 'Form submissions queue up offline and automatically post once the connection restores.']
                ],
                'packages' => [
                    [
                        'name' => 'Fast PWA',
                        'tagline' => 'PWA Startup Package',
                        'desc' => 'Upgrade your current site into an installable, super-fast mobile web app.',
                        'price' => '34,999',
                        'original_price' => '59,999',
                        'savings' => '41',
                        'features' => ['Installable manifest.json Configuration', 'Core Offline Caching Service', 'Standard Offline Fallback View', 'Optimized Mobile UI Theme', 'Lightning-Fast Load Speeds', 'Standard Security Audit', 'Next-Business-Day Support'],
                        'color' => '#6A5AE0',
                        'recommended' => false
                    ],
                    [
                        'name' => 'App-Like Enterprise',
                        'tagline' => 'PWA Enterprise Package',
                        'desc' => 'A complex PWA built with offline databases and background notifications.',
                        'price' => '89,999',
                        'original_price' => '1,39,999',
                        'savings' => '35',
                        'features' => ['Advanced Offline Data Synchronizer', 'Simultaneous Push Alert Integrations', 'Interactive Mobile Gestures Engine', 'Bespoke Custom Brand Onboarding Screen', 'Pre-rendering & Performance Hardening', 'Military-Grade Data Safety Locks', '24/7 SLA Priority Phone Support'],
                        'color' => '#E83E8C',
                        'recommended' => true
                    ]
                ]
            ],
            'ui-ux' => [
                'title' => 'UI/UX Experience Design',
                'meta_title' => 'UI/UX Design Agency India | High-Converting Interfaces | Crea8ve Cool',
                'meta_description' => 'Looking for an elite UI/UX design agency in India? We design high-conversion Figma wireframes, user journeys, and premium interactive prototypes.',
                'keywords' => 'ui ux design agency, web design company india, figma wireframing services, user experience prototype, conversion rate optimization',
                'color' => '#6A5AE0',
                'desc' => 'Stop losing customers to complicated layouts. Our elite UI/UX designers build human-centric Figma prototypes based on user testing to optimize digital conversions.',
                'seo_content' => 'We create visually striking user journeys that keep audiences engaged and guide them naturally toward making a purchase.',
                'features' => [
                    ['title' => 'Strategic User Journey Mapping', 'desc' => 'Understand and streamline the visitor\'s mindset from landing to buying.'],
                    ['title' => 'High-Fidelity Figma Prototyping', 'desc' => 'Vibrant visual mockups featuring interactive click states and responsive grids.'],
                    ['title' => 'Heuristics Performance Audit', 'desc' => 'We eliminate layout confusion using proven cognitive science models.']
                ],
                'packages' => [
                    [
                        'name' => 'Interactive Wireframes',
                        'tagline' => 'UI/UX Startup Package',
                        'desc' => 'Essential research and wireframe blueprints for your custom digital product.',
                        'price' => '24,999',
                        'original_price' => '39,999',
                        'savings' => '37',
                        'features' => ['Deep Target Competitor Audit', 'Information Hierarchy Maps', 'Interactive Clickable Wireframes', 'Core Mobile-First Grids', 'Upto 10 Custom Views Wireframed', 'Standard Figma File Delivery', 'Next-Business-Day Support'],
                        'color' => '#6A5AE0',
                        'recommended' => false
                    ],
                    [
                        'name' => 'Design System Elite',
                        'tagline' => 'UI/UX Enterprise Package',
                        'desc' => 'A complete custom design system and interactive high-fidelity prototype.',
                        'price' => '74,999',
                        'original_price' => '1,19,999',
                        'savings' => '37',
                        'features' => ['360-Degree User Journey Mapping', 'High-Fidelity Visual Prototypes', 'Fully Dynamic Figma Component System', 'Curated Custom Iconography Sheet', 'Typography & Palette Tokens Asset', 'Live Developer Hand-Off Sync', '24/7 Priority SLA Designer Support'],
                        'color' => '#FF007A',
                        'recommended' => true
                    ]
                ]
            ],
            'brand-identity' => [
                'title' => 'Strategic Brand Identity',
                'meta_title' => 'Brand Identity Design Agency India | Corporate Branding | Crea8ve Cool',
                'meta_description' => 'Establish market authority. We design premium custom logos, curated typography scales, visual guidelines, and complete corporate branding systems.',
                'keywords' => 'brand identity design, corporate branding agency, custom logo designer india, visual guidelines sheet, brand strategy company',
                'color' => '#E83E8C',
                'desc' => 'Establish absolute trust immediately. We build cohesive brand identity blueprints—combining logo design, typography rules, color rules, and media templates.',
                'seo_content' => 'We create unique visual stories that differentiate your business from competitors and build loyalty.',
                'features' => [
                    ['title' => 'Curated Visual Assets', 'desc' => 'Artistic and unique vectors that stand out on any medium.'],
                    ['title' => 'Structured Brand Guides', 'desc' => 'Rulebooks dictating exact margins, clear spaces, and responsive sizes.'],
                    ['title' => 'Universal Stationery Assets', 'desc' => 'Professional letterheads, cards, envelopes, and slide decks.']
                ],
                'packages' => [
                    [
                        'name' => 'Identity Blueprint',
                        'tagline' => 'Brand Basic Package',
                        'desc' => 'Essential custom branding blueprint to launch your business correctly.',
                        'price' => '29,999',
                        'original_price' => '49,999',
                        'savings' => '40',
                        'features' => ['3 Unique Creative Logo Concepts', 'Final High-Res Vector Deliverables', 'Brand Colors Selection System', 'Matching Typography Rules Sheet', 'Sleek Corporate Cards Layout', 'Essential Brand Rules Blueprint', 'Next-Business-Day Support'],
                        'color' => '#6A5AE0',
                        'recommended' => false
                    ],
                    [
                        'name' => '360 Brand Dominance',
                        'tagline' => 'Brand Enterprise Package',
                        'desc' => 'Complete visual branding suite designed to establish industry leadership.',
                        'price' => '89,999',
                        'original_price' => '1,39,999',
                        'savings' => '35',
                        'features' => ['5 Custom Creative Logo Concepts', '360 Corporate Visual Guidelines Book', 'Full Unified Social Media Kit', 'Premium Letterhead & Slide Templates', 'Product Packaging Concepts Layer', 'Copyright Ownership Transfer Sheet', '24/7 Priority SLA Designer Support'],
                        'color' => '#E83E8C',
                        'recommended' => true
                    ]
                ]
            ],
            'copywriting' => [
                'title' => 'High-Converting Copywriting Suite',
                'meta_title' => 'SEO Copywriting Services India | High-Converting Copy | Crea8ve Cool',
                'meta_description' => 'Turn visitors into clients. We write high-converting web copy, sales emails, and optimized SEO landing pages designed to sell.',
                'keywords' => 'seo copywriting services, high converting web copy, sales email copywriter, website content agency india, landing page copywriting',
                'color' => '#28C840',
                'desc' => 'Words are the ultimate sales tool. We write copy that answers user doubts, demonstrates value, and motivates visitors to take immediate action.',
                'seo_content' => 'We combine search engine requirements with customer psychology to write content that ranks highly and sells effectively.',
                'features' => [
                    ['title' => 'Persuasive Sales Copywriting', 'desc' => 'We address customer pain points directly to build trust.'],
                    ['title' => 'Semantic SEO Copywriting', 'desc' => 'Keywords naturally integrated into high-quality, readable content.'],
                    ['title' => 'High-Conversion Headlines', 'desc' => 'Catchy, memorable headlines designed to increase engagement.']
                ],
                'packages' => [
                    [
                        'name' => 'Lead Gen Copy',
                        'tagline' => 'Copy Startup Package',
                        'desc' => 'Clear, persuasive copywriting for your launch website.',
                        'price' => '19,999',
                        'original_price' => '29,999',
                        'savings' => '33',
                        'features' => ['Homepage Copywriting', '3 Key Service Page Layouts', 'Meta Titles & Descriptions Optimization', 'Targeted Call-To-Action Copy', 'Grammarly Premium Verified Content', 'Upto 2 Revision Loops Included', 'Next-Business-Day Support'],
                        'color' => '#6A5AE0',
                        'recommended' => false
                    ],
                    [
                        'name' => '360 Copy Mastery',
                        'tagline' => 'Copy Premium Package',
                        'desc' => 'Complete content suite including social copy and search optimized articles.',
                        'price' => '49,999',
                        'original_price' => '79,999',
                        'savings' => '37',
                        'features' => ['10 Pages Custom Web Copywriting', '10 Cold Outreach Email Templates', '5 Highly Researched SEO Articles', 'Brand Voice Stylebook Guide', 'Target Competitor Search Map', 'Unlimited Revision Loops Allowed', '24/7 Priority SLA Writer Support'],
                        'color' => '#28C840',
                        'recommended' => true
                    ]
                ]
            ]
        ];

        if (isset($staticServices[$slug])) {
            $current_service = $staticServices[$slug];
        } else {
            $serviceModel = new ServiceModel();
            $current_service = $serviceModel->getBySlug($slug);
            
            if (!$current_service) {
                // Fallback for services not in database
                $vibrantColors = ['#6A5AE0', '#FF007A', '#00D2FF', '#28C840', '#FFB800', '#FF7A18'];
                $colorIndex = abs(crc32($slug)) % count($vibrantColors);
                $title = ucfirst(str_replace('-', ' ', $slug));
                $current_service = [
                    'title' => $title . ' Solutions',
                    'meta_title' => 'Professional ' . $title . ' Services in India | Crea8ve Cool Agency',
                    'meta_description' => 'Get expert ' . $title . ' services designed for business growth, high performance, and industry-leading results in India.',
                    'color' => $vibrantColors[$colorIndex],
                    'desc' => 'Our premium ' . $slug . ' software and strategies help you grow your business and dominate your competitive landscape.',
                    'seo_content' => 'We provide professional ' . $slug . ' services that focus on high performance and measurable results.',
                    'features' => [],
                    'packages' => []
                ];
            }
        }

        // Dynamic Location Loading for SEO
        $locationData = null;
        $locTitle = null;
        $locMetaDesc = null;
        if ($location) {
            $locations = require APP_PATH . '/config/locations.php';
            $locKey = strtolower($location);
            if (isset($locations[$locKey])) {
                $locationData = $locations[$locKey];
                
                // Formulate Location-Specific titles and descriptions for elite SEO indexing
                $locTitle = $locationData['headline'] . " | " . ($current_service['title'] ?? 'Crea8ve Cool');
                
                // Formulate a perfectly optimized 150-160 character meta description (Ideal Google standard)
                $serviceName = str_replace('Custom ', '', $current_service['title'] ?? 'Web Design');
                $rawDesc = "Looking for " . $locationData['name'] . " " . $serviceName . "? " . $locationData['hook'];
                $locMetaDesc = (strlen($rawDesc) > 152) ? substr($rawDesc, 0, 149) . "..." : $rawDesc;
            }
        }

        $data = array_merge($this->getSharedData(), [
            'title' => $locTitle ?? $current_service['meta_title'] ?? $current_service['title'],
            'meta_description' => $locMetaDesc ?? $current_service['meta_description'],
            'keywords' => $current_service['keywords'] ?? 'web design, seo, digital agency, branding, automation',
            'service' => $current_service,
            'hero_color' => $current_service['color'],
            'service_slug' => $slug,
            'location' => $locationData,
            'page_css' => 'service_detail.css',
            'page_js'  => 'service_detail.js',
            'breadcrumbs' => [
                ['name' => 'Home', 'url' => ''],
                ['name' => 'Services', 'url' => 'services'],
                ['name' => $current_service['title'], 'url' => $slug]
            ]
        ]);

        if ($locationData) {
            $data['breadcrumbs'][] = ['name' => $locationData['name'], 'url' => 'services/' . $slug . '/' . $location];
        }

        // Auto-route to specific view if it exists (e.g. services/website.php)
        $specificView = APP_PATH . '/views/services/' . str_replace('-', '_', $slug) . '.php';
        $view = file_exists($specificView) ? $specificView : APP_PATH . '/views/service_detail.php';
        
        require_once APP_PATH . '/views/layouts/layout.php';
    }

    public function locations() {
        $data = array_merge($this->getSharedData(), [
            'title' => 'Our Dynamic Digital Coverage Hub | Crea8ve Cool',
            'meta_description' => 'Explore the global and domestic coverage hubs of Crea8ve Cool. We deliver web engineering, custom dashboards, and high-growth organic SEO campaigns across India and leading global cities.',
            'hero_color' => '#FF007A',
            'page_css' => 'service_detail.css',
            'breadcrumbs' => [
                ['name' => 'Home', 'url' => ''],
                ['name' => 'Locations', 'url' => 'locations']
            ]
        ]);
        $view = APP_PATH . '/views/locations.php';
        require_once APP_PATH . '/views/layouts/layout.php';
    }

    public function sitemap() {
        // Clear any previous output buffers to guarantee NO white spaces or carriage returns before XML declaration
        if (ob_get_length()) {
            ob_clean();
        }
        
        // Dynamic absolute base URL formulation matching Google's protocol and requested domain
        $protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? 'https://' : 'http://';
        $host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'crea8vecool.com';
        $absolute_base = $protocol . $host . BASE_URL;

        // Current date in Y-m-d format
        $currentDate = date('Y-m-d');

        header("Content-Type: application/xml; charset=utf-8");
        header("Cache-Control: no-cache, no-store, must-revalidate");
        header("Pragma: no-cache");
        header("Expires: 0");

        echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

        // 1. Static Core Pages (Priority 1.0 to 0.7)
        $staticRoutes = [
            '' => ['priority' => '1.0', 'changefreq' => 'weekly'],
            'services' => ['priority' => '0.9', 'changefreq' => 'monthly'],
            'work' => ['priority' => '0.9', 'changefreq' => 'weekly'],
            'video-portfolio' => ['priority' => '0.8', 'changefreq' => 'monthly'],
            'about' => ['priority' => '0.7', 'changefreq' => 'monthly'],
            'founder' => ['priority' => '0.7', 'changefreq' => 'monthly'],
            'why-us' => ['priority' => '0.7', 'changefreq' => 'monthly'],
            'testimonials' => ['priority' => '0.7', 'changefreq' => 'monthly'],
            'process' => ['priority' => '0.7', 'changefreq' => 'monthly'],
            'locations' => ['priority' => '0.7', 'changefreq' => 'monthly'],
            'careers' => ['priority' => '0.6', 'changefreq' => 'monthly'],
            'booking' => ['priority' => '0.8', 'changefreq' => 'monthly'],
            'contact' => ['priority' => '0.8', 'changefreq' => 'monthly'],
        ];

        foreach ($staticRoutes as $route => $config) {
            echo "   <url>\n";
            echo "      <loc>" . htmlspecialchars($absolute_base . $route, ENT_XML1, 'UTF-8') . "</loc>\n";
            echo "      <lastmod>" . $currentDate . "</lastmod>\n";
            echo "      <changefreq>" . $config['changefreq'] . "</changefreq>\n";
            echo "      <priority>" . $config['priority'] . "</priority>\n";
            echo "   </url>\n";
        }

        // 2. Service Pages and Dynamic Location Pages (Priority 0.8 to 0.7)
        $serviceSlugs = [
            'website', 'seo', 'motion', 'performance', 'digital-marketing',
            'enterprise-erp', 'customer-crm', 'hrms-tech', 'ecommerce',
            'retail-pos', 'lms-portals', 'custom-software', 'native-apps',
            'saas-platforms', 'ui-ux', 'brand-identity', 'copywriting'
        ];

        $locations = [];
        $locationsFile = APP_PATH . '/config/locations.php';
        if (file_exists($locationsFile)) {
            $locations = require $locationsFile;
        }

        foreach ($serviceSlugs as $slug) {
            // Add Base Service Page
            echo "   <url>\n";
            echo "      <loc>" . htmlspecialchars($absolute_base . 'services/' . $slug, ENT_XML1, 'UTF-8') . "</loc>\n";
            echo "      <lastmod>" . $currentDate . "</lastmod>\n";
            echo "      <changefreq>monthly</changefreq>\n";
            echo "      <priority>0.8</priority>\n";
            echo "   </url>\n";

            // Add dynamic locations for this service
            foreach ($locations as $locKey => $locData) {
                echo "   <url>\n";
                echo "      <loc>" . htmlspecialchars($absolute_base . 'services/' . $slug . '/' . $locKey, ENT_XML1, 'UTF-8') . "</loc>\n";
                echo "      <lastmod>" . $currentDate . "</lastmod>\n";
                echo "      <changefreq>monthly</changefreq>\n";
                echo "      <priority>0.7</priority>\n";
                echo "   </url>\n";
            }
        }

        echo '</urlset>' . "\n";
        exit;
    }
}

