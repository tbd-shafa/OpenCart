<?php
namespace Opencart\Admin\Model\Color;

use Opencart\System\Engine\Model;

class Color extends Model {
    public function addEntry($data) {
        $this->db->query("INSERT INTO " . DB_PREFIX . "color SET name = '" . $this->db->escape($data['name']) . "'");
    }

    public function editEntry($color_id, $data) {
        $this->db->query("UPDATE " . DB_PREFIX . "color SET name = '" . $this->db->escape($data['name']) . "' WHERE color_id = '" . (int)$color_id . "'");
    }

    public function deleteEntry($color_id) {
        $this->db->query("DELETE FROM " . DB_PREFIX . "color WHERE color_id = '" . (int)$color_id . "'");
    }

    public function getEntry($color_id) {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "color WHERE color_id = '" . (int)$color_id . "'");
        return $query->row;
    }

    public function getEntries() {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "color");
        return $query->rows;
    }
}
?>
