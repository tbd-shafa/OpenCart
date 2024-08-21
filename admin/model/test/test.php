<?php
namespace Opencart\Admin\Model\Test;

use Opencart\System\Engine\Model;

class Test extends Model {
    public function addEntry($data) {
        $this->db->query("INSERT INTO " . DB_PREFIX . "test SET name = '" . $this->db->escape($data['name']) . "'");
    }

    public function editEntry($test_id, $data) {
        $this->db->query("UPDATE " . DB_PREFIX . "test SET name = '" . $this->db->escape($data['name']) . "' WHERE test_id = '" . (int)$test_id . "'");
    }

    public function deleteEntry($test_id) {
        $this->db->query("DELETE FROM " . DB_PREFIX . "test WHERE test_id = '" . (int)$test_id . "'");
    }

    public function getEntry($test_id) {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "test WHERE test_id = '" . (int)$test_id . "'");
        return $query->row;
    }

    public function getEntries() {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "test");
        return $query->rows;
    }
}
?>
