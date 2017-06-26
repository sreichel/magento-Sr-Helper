<?php
/**
 * Customer Group Redirect Source Store Model
 *
 * @author      Sven Reichel <s.reichel@maxxcount.de>
 * @category    Mx
 * @package     Mx_CustomerGroupRedirect
 */

/**
 * System config
 */
class Mx_CustomerGroupRedirect_Model_System_Config_Source_Store
{
    /** @var $_options array of options */
    protected $_options;

    /**
     * Get all store views
     *
     * @return array $options
     */
    public function toOptionArray()
    {
        if (!$this->_options) {
            foreach (Mage::app()->getWebsites() as $website) {
                foreach ($website->getGroups() as $group) {
                    foreach ($group->getStores() as $store) {
                        $this->_options[] = array(
                            'value' => $store->getId(),
                            'label' => sprintf('%s - %s - %s', $website->getName(), $group->getName(), $store->getName())
                        );
                    }
                }
            }
        }
        return $this->_options;
    }
}
