<?php
// Environment Detection
if ($_SERVER['HTTP_HOST'] === 'localhost') {
    // Local Configuration
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'crea8ve_db');
    define('DB_USER', 'root');
    define('DB_PASS', '');
} else {
    // Production Configuration (Hostinger)
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'u827121208_cr');
    define('DB_USER', 'u827121208_cr');
    define('DB_PASS', 'KunalGW@1411');
}

// Admin Configuration
define('ADMIN_USER', 'admin');
define('ADMIN_PASS', 'admin123');

// SMTP Configuration (Hostinger)
define('SMTP_HOST', 'smtp.hostinger.com');
define('SMTP_USER', 'info@crea8vecool.com');
define('SMTP_PASS', 'Kunal@crea8ve.com');
define('SMTP_PORT', 465); // Standard for SSL
define('SMTP_FROM_NAME', 'Crea8ve Cool Inbound');
