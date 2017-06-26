<?php
/**
 * @category    Sr
 * @package     Sr_Helper
 * @author      Sven Reichel <github-sr@hotmail.com>
 */

 /**
 * System config
 */
class Sr_Helper_Model_System_Config_Source_Catalog_Product_Attributes_Visible extends Sr_Helper_Model_System_Config_Source_Catalog_Product_Attributes_Abstract
{
    protected $_frontendLabel = array('neq' => '');
    protected $_isVisibleOnFront = true;

    /**
     * Get all product attributes visible attributes with frontend label
     *
     * @return array Attribute (label/value)
     */
    public function toOptionArray()
    {
        return $this->getOptions();
    }
}
