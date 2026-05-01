<?php
class ServiceModel extends Model {
    
    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM services ORDER BY created_at DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCount() {
        $stmt = $this->db->query("SELECT COUNT(*) as total FROM services");
        return $stmt->fetch(PDO::FETCH_ASSOC)['total'];
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM services WHERE id = ?");
        $stmt->execute([$id]);
        $service = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($service) {
            // Fetch Features
            $stmt_f = $this->db->prepare("SELECT icon, title, description as `description` FROM service_features WHERE service_id = ?");
            $stmt_f->execute([$service['id']]);
            $service['features'] = $stmt_f->fetchAll(PDO::FETCH_ASSOC);

            // Fetch Packages
            $stmt_p = $this->db->prepare("SELECT name, price, period, features FROM service_packages WHERE service_id = ?");
            $stmt_p->execute([$service['id']]);
            $packages = $stmt_p->fetchAll(PDO::FETCH_ASSOC);
            
            // Format packages features (comma separated string to array)
            foreach ($packages as &$pkg) {
                if (is_string($pkg['features'])) {
                    $pkg['features'] = array_map('trim', explode(',', $pkg['features']));
                }
            }
            $service['packages'] = $packages;
        }

        return $service;
    }

    public function create($data) {
        $sql = "INSERT INTO services (slug, title, color, icon, description, seo_content, meta_title, meta_description) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            $data['slug'],
            $data['title'],
            $data['color'],
            $data['icon'],
            $data['description'],
            $data['seo_content'] ?? '',
            $data['meta_title'],
            $data['meta_description']
        ]);
    }

    public function getBySlug($slug) {
        $stmt = $this->db->prepare("SELECT * FROM services WHERE slug = ?");
        $stmt->execute([$slug]);
        $service = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($service) {
            // Fetch Features
            $stmt_f = $this->db->prepare("SELECT icon, title, description as `desc` FROM service_features WHERE service_id = ?");
            $stmt_f->execute([$service['id']]);
            $service['features'] = $stmt_f->fetchAll(PDO::FETCH_ASSOC);

            // Fetch Packages
            $stmt_p = $this->db->prepare("SELECT name, price, period, features FROM service_packages WHERE service_id = ?");
            $stmt_p->execute([$service['id']]);
            $packages = $stmt_p->fetchAll(PDO::FETCH_ASSOC);
            
            // Format packages features (comma separated string to array)
            foreach ($packages as &$pkg) {
                $pkg['features'] = array_map('trim', explode(',', $pkg['features']));
            }
            $service['packages'] = $packages;
        }

        return $service;
    }

    public function update($id, $data) {
        $sql = "UPDATE services SET slug = ?, title = ?, color = ?, icon = ?, description = ?, seo_content = ?, meta_title = ?, meta_description = ? WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            $data['slug'],
            $data['title'],
            $data['color'],
            $data['icon'],
            $data['description'],
            $data['seo_content'] ?? '',
            $data['meta_title'],
            $data['meta_description'],
            $id
        ]);
    }

    public function syncFeatures($service_id, $features) {
        // Simple sync: delete all and re-insert
        $this->db->prepare("DELETE FROM service_features WHERE service_id = ?")->execute([$service_id]);
        foreach ($features as $f) {
            if (empty($f['title'])) continue;
            $stmt = $this->db->prepare("INSERT INTO service_features (service_id, icon, title, description) VALUES (?, ?, ?, ?)");
            $stmt->execute([$service_id, $f['icon'], $f['title'], $f['description']]);
        }
    }

    public function syncPackages($service_id, $packages) {
        $this->db->prepare("DELETE FROM service_packages WHERE service_id = ?")->execute([$service_id]);
        foreach ($packages as $p) {
            if (empty($p['name'])) continue;
            // $p['features'] is expected to be a string or array, convert to comma-separated string for DB
            $features_str = is_array($p['features']) ? implode(', ', $p['features']) : $p['features'];
            $stmt = $this->db->prepare("INSERT INTO service_packages (service_id, name, price, period, features) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([$service_id, $p['name'], $p['price'], $p['period'], $features_str]);
        }
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM services WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
