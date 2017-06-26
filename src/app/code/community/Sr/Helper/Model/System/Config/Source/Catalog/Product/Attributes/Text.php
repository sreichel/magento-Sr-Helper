<?php
/**
 * @category    Sr
 * @package     Sr_Helper
 * @author      Sven Reichel <github-sr@hotmail.com>
 */

/**
 * System config: visible product attributes with frontend type text/textarea
 */
class Sr_Helper_Model_System_Config_Source_Catalog_Product_Attributes_Text extends Sr_Helper_Model_System_Config_Source_Catalog_Product_Attributes_Abstract
{
    protected $_frontendInput = array('text', 'textarea');

    /**
     * List all text|textarea product attributes
     *
     * @uses Mage_Catalog_Model_Product_Attribute_Collection
     * @return array Attributes list
     */
    public function toOptionArray()
    {
        return $this->getOptions();
    }
}
