<?php
class WorkModel extends Model {
    
    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM works ORDER BY created_at DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCount() {
        $stmt = $this->db->query("SELECT COUNT(*) as total FROM works");
        return $stmt->fetch(PDO::FETCH_ASSOC)['total'];
    }

    public function create($data) {
        $sql = "INSERT INTO works (title, tag, image, result, link) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            $data['title'],
            $data['tag'],
            $data['image'],
            $data['result'],
            $data['link']
        ]);
    }

    public function update($id, $data) {
        $sql = "UPDATE works SET title = ?, tag = ?, image = ?, result = ?, link = ? WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            $data['title'],
            $data['tag'],
            $data['image'],
            $data['result'],
            $data['link'],
            $id
        ]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM works WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
