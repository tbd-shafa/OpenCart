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
}
?>
