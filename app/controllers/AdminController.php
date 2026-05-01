<?php
session_start();

class AdminController {
    
    public function dashboard() {
        if (!$this->isLoggedIn()) {
            $this->redirect('admin/login');
        }

        $inquiryModel = new InquiryModel();
        $serviceModel = new ServiceModel();
        $workModel = new WorkModel();

        $data = [
            'title' => 'Admin Dashboard | Crea8ve Cool',
            'stats' => [
                'services' => $serviceModel->getCount(),
                'works' => $workModel->getCount(),
                'inquiries' => $inquiryModel->getNewCount()
            ]
        ];

        require_once APP_PATH . '/views/admin/dashboard.php';
    }

    public function services() {
        if (!$this->isLoggedIn()) {
            $this->redirect('admin/login');
        }

        $serviceModel = new ServiceModel();
        
        if (isset($_GET['action']) && $_GET['action'] === 'delete') {
            $serviceModel->delete($_GET['id']);
            $this->redirect('admin/services');
        }

        $data = [
            'title' => 'Manage Services | Crea8ve Cool',
            'services' => $serviceModel->getAll()
        ];

        require_once APP_PATH . '/views/admin/services/index.php';
    }

    public function editService($id) {
        if (!$this->isLoggedIn()) {
            $this->redirect('admin/login');
        }

        $serviceModel = new ServiceModel();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $serviceData = [
                'slug' => $_POST['slug'],
                'title' => $_POST['title'],
                'color' => $_POST['color'],
                'icon' => $_POST['icon'],
                'description' => $_POST['description'],
                'seo_content' => $_POST['seo_content'],
                'meta_title' => $_POST['meta_title'],
                'meta_description' => $_POST['meta_description']
            ];

            $serviceModel->update($id, $serviceData);

            // Sync Features
            $features = [];
            if (isset($_POST['f_title'])) {
                foreach ($_POST['f_title'] as $i => $title) {
                    $features[] = [
                        'icon' => $_POST['f_icon'][$i],
                        'title' => $title,
                        'description' => $_POST['f_desc'][$i]
                    ];
                }
            }
            $serviceModel->syncFeatures($id, $features);

            // Sync Packages
            $packages = [];
            if (isset($_POST['p_name'])) {
                foreach ($_POST['p_name'] as $i => $name) {
                    $packages[] = [
                        'name' => $name,
                        'price' => $_POST['p_price'][$i],
                        'period' => $_POST['p_period'][$i],
                        'features' => $_POST['p_features'][$i]
                    ];
                }
            }
            $serviceModel->syncPackages($id, $packages);

            $this->redirect('admin/services');
        }

        $service = $serviceModel->getById($id);
        if (!$service) {
            $this->redirect('admin/services');
        }

        $data = [
            'title' => 'Edit Service: ' . $service['title'],
            'service' => $service
        ];

        require_once APP_PATH . '/views/admin/services/edit.php';
    }

    public function addService() {
        if (!$this->isLoggedIn()) {
            $this->redirect('admin/login');
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $serviceModel = new ServiceModel();
            $serviceData = [
                'slug' => $_POST['slug'],
                'title' => $_POST['title'],
                'color' => $_POST['color'],
                'icon' => $_POST['icon'],
                'description' => $_POST['description'],
                'seo_content' => $_POST['seo_content'],
                'meta_title' => $_POST['meta_title'],
                'meta_description' => $_POST['meta_description']
            ];

            $serviceModel->create($serviceData);
            $this->redirect('admin/services');
        }

        $data = [
            'title' => 'Add New Service | Crea8ve Cool'
        ];

        require_once APP_PATH . '/views/admin/services/add.php';
    }

    public function showcase() {
        if (!$this->isLoggedIn()) {
            $this->redirect('admin/login');
        }

        $workModel = new WorkModel();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $workModel->create([
                'title' => $_POST['title'],
                'tag' => $_POST['tag'],
                'image' => $_POST['image'],
                'result' => $_POST['result'],
                'link' => $_POST['link'] ?? '#'
            ]);
            $this->redirect('admin/showcase');
        }

        if (isset($_GET['action']) && $_GET['action'] === 'delete') {
            $workModel->delete($_GET['id']);
            $this->redirect('admin/showcase');
        }

        $data = [
            'title' => 'Manage Showcase | Crea8ve Cool',
            'works' => $workModel->getAll()
        ];

        require_once APP_PATH . '/views/admin/showcase.php';
    }

    public function testimonials() {
        if (!$this->isLoggedIn()) {
            $this->redirect('admin/login');
        }

        $testimonialModel = new TestimonialModel();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $testimonialModel->create([
                'quote' => $_POST['quote'],
                'name' => $_POST['name'],
                'company' => $_POST['company'],
                'image' => $_POST['image'] ?? 'default-user.webp'
            ]);
            $this->redirect('admin/testimonials');
        }

        if (isset($_GET['action']) && $_GET['action'] === 'delete') {
            $testimonialModel->delete($_GET['id']);
            $this->redirect('admin/testimonials');
        }

        $data = [
            'title' => 'Manage Testimonials | Crea8ve Cool',
            'testimonials' => $testimonialModel->getAll()
        ];

        require_once APP_PATH . '/views/admin/testimonials.php';
    }

    public function inquiries() {
        if (!$this->isLoggedIn()) {
            $this->redirect('admin/login');
        }

        $inquiryModel = new InquiryModel();
        
        // Handle Delete or Status Change
        if (isset($_GET['action'])) {
            $id = $_GET['id'] ?? 0;
            if ($_GET['action'] === 'delete') {
                $inquiryModel->delete($id);
            } elseif ($_GET['action'] === 'read') {
                $inquiryModel->updateStatus($id, 'read');
            }
            $this->redirect('admin/inquiries');
        }

        $data = [
            'title' => 'Manage Inquiries | Crea8ve Cool',
            'inquiries' => $inquiryModel->getAll()
        ];

        require_once APP_PATH . '/views/admin/inquiries.php';
    }

    public function login() {
        if ($this->isLoggedIn()) {
            $this->redirect('admin/dashboard');
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';

            if ($username === ADMIN_USER && $password === ADMIN_PASS) {
                $_SESSION['admin_logged_in'] = true;
                $this->redirect('admin/dashboard');
            } else {
                $error = "Invalid credentials";
            }
        }

        require_once APP_PATH . '/views/admin/login.php';
    }

    public function logout() {
        session_destroy();
        $this->redirect('admin/login');
    }

    private function isLoggedIn() {
        return isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true;
    }

    private function redirect($path) {
        header('Location: ' . BASE_URL . $path);
        exit();
    }
}
