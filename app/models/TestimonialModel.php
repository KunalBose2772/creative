<?php
class TestimonialModel extends Model {
    
    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM testimonials ORDER BY created_at DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $sql = "INSERT INTO testimonials (quote, name, company, image) VALUES (?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            $data['quote'],
            $data['name'],
            $data['company'],
            $data['image'] ?? 'default-user.webp'
        ]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM testimonials WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
