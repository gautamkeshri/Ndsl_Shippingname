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
    
     public function getSataus()
    {
        $orderstatus = array();
        $status_collection = Mage::getModel('sales/order_status')->getResourceCollection()->getData();
        $orderstatus['default'] = Mage::helper('sales')->__('Current State');
        foreach ($status_collection as $status) {
            $key = $status["status"];
            $orderstatus[$key] = $status["label"];
        }
        return $orderstatus;
    }

}
