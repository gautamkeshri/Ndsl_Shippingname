<?php
/** 
 * @package     Ndsl_orderstatus
 * @author      Ndsl Team <gautam@ndslindia.com>
 * @copyright   Copyright (c) 2014 - Net Distribution Services Pvt Ltd. (http://ndslindia.com/)  
 */
class Ndsl_Orderstatus_Block_Import_Form extends Mage_Adminhtml_Block_Widget
{

    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('orderstatus/import/form.phtml');
    }
    
     public function getCarriers()
    {
        $carriers = array();
        $carrierInstances = Mage::getSingleton('shipping/config')->getAllCarriers(0);
        $carriers['custom'] = Mage::helper('sales')->__('Custom Value');
        foreach ($carrierInstances as $code => $carrier) {
            if ($carrier->isTrackingAvailable()) {
                $carriers[$code] = $carrier->getConfigData('title');
            }
        }
        return $carriers;
    }

}
