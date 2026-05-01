<?php
class HomeController {
    private function getSharedData() {
        $serviceModel = new ServiceModel();
        return [
            'catalog' => $serviceModel->getAll(),
            'process' => [
                ['step' => '01', 'title' => 'Strategy', 'desc' => 'We audit your brand, research competitors, and craft a clear roadmap for growth.'],
                ['step' => '02', 'title' => 'Design & Build', 'desc' => 'Our team designs pixel-perfect interfaces and engineers high-performance backends.'],
                ['step' => '03', 'title' => 'Launch & Scale', 'desc' => 'We launch, monitor performance, and continuously optimize for maximum ROI.'],
            ],
            'why' => [
                ['icon' => 'bi-bullseye', 'title' => 'Conversion-Focused', 'desc' => 'Every design decision is driven by one goal — turning visitors into paying customers.'],
                ['icon' => 'bi-lightning-charge', 'title' => 'Fast Delivery', 'desc' => 'We ship fast without sacrificing quality, keeping your business moving forward.'],
                ['icon' => 'bi-palette', 'title' => 'Modern UI/UX', 'desc' => 'Premium, trend-forward designs that make your brand impossible to ignore.'],
                ['icon' => 'bi-layers', 'title' => 'Full-Stack Solutions', 'desc' => 'From design to DevOps — we handle everything so you can focus on what matters.'],
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
            'title' => 'Crea8ve Cool — We Build Websites That Drive Real Business Growth',
            'meta_description' => 'Crea8ve Cool is a premium digital agency delivering high-performance web design, SEO, paid ads, and automation systems that convert visitors into customers.',
            'services' => $serviceModel->getAll(),
            'capabilities' => [
                ['title' => 'Video Editing', 'desc' => 'High-retention, cinematic video production tailored for YouTube, TikTok, and corporate branding.'],
                ['title' => '3D Animation & Rendering', 'desc' => 'Immersive 3D visuals, product animations, and architectural renderings that push creative boundaries.'],
                ['title' => 'Graphic Design', 'desc' => 'Premium brand identities, marketing collateral, and social media creatives that define your visual authority.'],
                ['title' => 'Performance Marketing', 'desc' => 'Hyper-targeted ad buying and data-backed scale. We turn advertising budgets into guaranteed revenue.'],
                ['title' => 'Social Media Management', 'desc' => 'End-to-end community building, viral content creation, and organic social growth strategies.'],
                ['title' => 'Influencer Marketing', 'desc' => 'Strategic creator partnerships and campaign management to blast your brand into mainstream awareness.'],
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
            'title' => 'Our Excellence — Premium Digital Services by Crea8ve Cool',
            'meta_description' => 'Explore our full range of high-performance digital services, from 3rd-gen web design to SEO scaling and automation.',
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
            'title' => 'Our Work — Proof of Concept & Performance',
            'meta_description' => 'Browse our portfolio of high-conversion digital products and successful brand scales.',
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

    public function about() {
        $data = array_merge($this->getSharedData(), [
            'title' => 'Our Story — The Engineers Behind the Magic',
            'meta_description' => 'Meet the team of digital engineers, designers, and growth hackers dedicated to your success.',
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
            'title' => 'Why Us — The Crea8ve Cool Advantage',
            'meta_description' => 'Discover why leading brands trust Crea8ve Cool for their digital transformation and high-performance engineering.',
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
            'title' => 'Testimonials — Real Results for Real Partners',
            'meta_description' => 'Read how Crea8ve Cool has helped businesses scale their revenue and dominate their niche.',
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
            'title' => 'Our Process — Precision Engineering Workflow',
            'meta_description' => 'Explore the step-by-step blueprint we follow to deliver pixel-perfect designs and high-performance software.',
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
            'title' => 'Careers — Join the Crea8ve Cool Squad',
            'meta_description' => 'Looking to build the future of the web? Explore open positions at Crea8ve Cool and join our elite engineering team.',
            'hero_color' => '#28C840',
            'breadcrumbs' => [
                ['name' => 'Home', 'url' => ''],
                ['name' => 'Careers', 'url' => 'careers']
            ]
        ]);
        $view = APP_PATH . '/views/careers.php';
        require_once APP_PATH . '/views/layouts/layout.php';
    }

    public function contact() {
        $success = false;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $inquiryModel = new InquiryModel();
            $data = [
                'name' => htmlspecialchars($_POST['name'] ?? ''),
                'email' => htmlspecialchars($_POST['email'] ?? ''),
                'service_type' => htmlspecialchars($_POST['service_type'] ?? ''),
                'budget' => htmlspecialchars($_POST['budget'] ?? ''),
                'message' => htmlspecialchars($_POST['message'] ?? '')
            ];
            
            if ($inquiryModel->create($data)) {
                MailEngine::sendInquiryNotification($data);
                $success = true;
            }
        }

        $data = array_merge($this->getSharedData(), [
            'title' => 'Contact Us — Start Your Legendary Journey',
            'meta_description' => 'Ready to scale? Get in touch with Crea8ve Cool today for a strategy audit.',
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
    public function service($slug) {
        $serviceModel = new ServiceModel();
        $current_service = $serviceModel->getBySlug($slug);
        
        if (!$current_service) {
            // Fallback for services not in database
            $vibrantColors = ['#6A5AE0', '#FF007A', '#00D2FF', '#28C840', '#FFB800', '#FF7A18'];
            $colorIndex = abs(crc32($slug)) % count($vibrantColors);
            $current_service = [
                'title' => ucfirst(str_replace('-', ' ', $slug)) . ' Solutions',
                'meta_title' => 'Professional ' . ucfirst($slug) . ' Services | Crea8ve Cool Agency',
                'meta_description' => 'Get expert ' . $slug . ' services designed for business growth and high performance.',
                'color' => $vibrantColors[$colorIndex],
                'desc' => 'Our premium ' . $slug . ' software and strategies help you grow your business.',
                'seo_content' => 'We provide professional ' . $slug . ' services that focus on high performance and measurable results.',
                'features' => [],
                'packages' => []
            ];
        }

        $data = array_merge($this->getSharedData(), [
            'title' => $current_service['meta_title'] ?? $current_service['title'],
            'meta_description' => $current_service['meta_description'],
            'service' => $current_service,
            'hero_color' => $current_service['color'],
            'service_slug' => $slug,
            'breadcrumbs' => [
                ['name' => 'Home', 'url' => ''],
                ['name' => 'Services', 'url' => 'services'],
                ['name' => $current_service['title'], 'url' => $slug]
            ]
        ]);

        $view = APP_PATH . '/views/service_detail.php';
        require_once APP_PATH . '/views/layouts/layout.php';
    }

    public function locationService($slug, $city) {
        $city_name = ucwords(str_replace('-', ' ', $city));
        $serviceModel = new ServiceModel();
        $current_service = $serviceModel->getBySlug($slug);
        
        if (!$current_service) {
            http_response_code(404);
            $this->index();
            return;
        }

        // Localize content
        $current_service['title'] = $current_service['title'] . " in " . $city_name;
        $current_service['meta_title'] = str_replace(['India'], [$city_name], $current_service['meta_title']);
        if (!str_contains($current_service['meta_title'], $city_name)) {
            $current_service['meta_title'] .= " in " . $city_name;
        }
        
        $current_service['meta_description'] = str_replace(['India', 'our'], [$city_name, "the best " . $slug . " in " . $city_name], $current_service['meta_description']);
        $current_service['desc'] = str_replace(['business', 'your'], ["businesses in " . $city_name, "your " . $city_name . " based"], $current_service['description'] ?? $current_service['desc'] ?? '');
        $current_service['seo_content'] = "Looking for " . $current_service['title'] . "? We have helped numerous clients in " . $city_name . " achieve their digital goals with our high-performance solutions.";

        $data = array_merge($this->getSharedData(), [
            'title' => $current_service['meta_title'],
            'meta_description' => $current_service['meta_description'],
            'service' => $current_service,
            'hero_color' => $current_service['color'],
            'service_slug' => $slug,
            'city' => $city_name,
            'breadcrumbs' => [
                ['name' => 'Home', 'url' => ''],
                ['name' => 'Services', 'url' => 'services'],
                ['name' => $current_service['title'], 'url' => $slug . '-in-' . $city]
            ]
        ]);

        $view = APP_PATH . '/views/service_detail.php';
        require_once APP_PATH . '/views/layouts/layout.php';
    }
}
