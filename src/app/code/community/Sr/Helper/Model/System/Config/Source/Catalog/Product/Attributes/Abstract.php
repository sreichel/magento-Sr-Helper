<?php
/**
 * @category    Sr
 * @package     Sr_Helper
 * @author      Sven Reichel <github-sr@hotmail.com>
 */

/**
 * System config: visible product attributes with frontend type text/textarea
 */
abstract class Sr_Helper_Model_System_Config_Source_Catalog_Product_Attributes_Abstract
{
    /** @var $_options array of options */
    protected $_options;

    protected $_frontendInput;
    protected $_frontendLabel;
    protected $_visibility;
    protected $_isVisibleOnFront;

    /**
     * List all product attributes
     *
     * @uses Mage_Catalog_Model_Product_Attribute_Collection
     * @return array Attributes list
     */
    public function getOptions()
    {
        if (!$this->_options) {
            $options = Mage::getResourceModel('catalog/product_attribute_collection')
                ->setOrder('frontend_label', 'ASC');

            if (!is_null($this->_frontendInput)) {
                $options->addFieldToFilter('frontend_input', $this->_frontendInput);
            }

            if (!is_null($this->_frontendLabel)) {
                $options->addFieldToFilter('frontend_label', $this->_frontendLabel);
            }

            if (!is_null($this->_isVisibleOnFront)) {
                $options->addFieldToFilter('is_visible_on_front', $this->_isVisibleOnFront);
            }

            if (is_bool($this->_visibility)) {
                $options->addFilter('is_visible', $this->_visibility);
            }

            $this->_options = array();
            foreach ($options as $option) {
                $this->_options[] = array(
                    'label' => $option->getFrontendLabel() ? $option->getFrontendLabel() : $option->getAttributeCode(),
                    'value' => $option->getAttributeCode()
                );
            }
        }
        return $this->_options;
    }
}
