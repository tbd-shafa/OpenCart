<?php
namespace Opencart\Catalog\Model\Catalog;
/**
 * Class Category
 *
 * @package Opencart\Catalog\Model\Catalog
 */
class ProductExtraFeature extends \Opencart\System\Engine\Model  {
    public function getProductExtraFeature($product_id) {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "product_extra_feature` WHERE product_id = '" . (int)$product_id . "'");
        
        return $query->row;
    }
    public function getColorNameById($color_id) {
        $query = $this->db->query("SELECT name FROM `" . DB_PREFIX . "color` WHERE color_id = '" . (int)$color_id . "'");
        
        if ($query->num_rows) {
            return $query->row['name'];
        } else {
            return null; // Return null if the color ID is not found
        }
    }
}
?>
