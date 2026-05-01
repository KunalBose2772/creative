-- Crea8ve Cool Database Schema

CREATE DATABASE IF NOT EXISTS crea8ve_db;
USE crea8ve_db;

-- Services Table
CREATE TABLE IF NOT EXISTS services (
    id INT AUTO_INCREMENT PRIMARY KEY,
    slug VARCHAR(100) UNIQUE NOT NULL,
    title VARCHAR(255) NOT NULL,
    color VARCHAR(20) DEFAULT '#6A5AE0',
    icon VARCHAR(50) DEFAULT 'bi-layers',
    description TEXT,
    meta_title VARCHAR(255),
    meta_description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Service Features
CREATE TABLE IF NOT EXISTS service_features (
    id INT AUTO_INCREMENT PRIMARY KEY,
    service_id INT,
    icon VARCHAR(50),
    title VARCHAR(255),
    description TEXT,
    FOREIGN KEY (service_id) REFERENCES services(id) ON DELETE CASCADE
);

-- Service Packages
CREATE TABLE IF NOT EXISTS service_packages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    service_id INT,
    name VARCHAR(100),
    price VARCHAR(50),
    period VARCHAR(50),
    features TEXT, -- JSON or Comma Separated
    FOREIGN KEY (service_id) REFERENCES services(id) ON DELETE CASCADE
);

-- Portfolio Table
CREATE TABLE IF NOT EXISTS works (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    tag VARCHAR(100),
    image VARCHAR(255),
    result VARCHAR(100),
    link VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Testimonials Table
CREATE TABLE IF NOT EXISTS testimonials (
    id INT AUTO_INCREMENT PRIMARY KEY,
    quote TEXT,
    name VARCHAR(100),
    company VARCHAR(100),
    image VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Contact Inquiries Table
CREATE TABLE IF NOT EXISTS inquiries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    service_type VARCHAR(100),
    budget VARCHAR(50),
    message TEXT,
    status ENUM('new', 'read', 'archived') DEFAULT 'new',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
