<?php
class InquiryModel extends Model {
    
    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM inquiries ORDER BY created_at DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getNewCount() {
        $stmt = $this->db->query("SELECT COUNT(*) as total FROM inquiries WHERE status = 'new'");
        return $stmt->fetch(PDO::FETCH_ASSOC)['total'];
    }

    public function create($data) {
        $sql = "INSERT INTO inquiries (name, email, service_type, budget, message) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            $data['name'],
            $data['email'],
            $data['service_type'],
            $data['budget'],
            $data['message']
        ]);
    }

    public function updateStatus($id, $status) {
        $stmt = $this->db->prepare("UPDATE inquiries SET status = ? WHERE id = ?");
        return $stmt->execute([$status, $id]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM inquiries WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
