<?php  
    class Ndsl_Shippingname_Model_Carrier_Ndslovernitenet     
		extends Mage_Shipping_Model_Carrier_Abstract
		implements Mage_Shipping_Model_Carrier_Interface
	{  
        protected $_code = 'ndslovernitenet';  
      
        /** 
        * Collect rates for this shipping method based on information in $request 
        * 
        * @param Mage_Shipping_Model_Rate_Request $data 
        * @return Mage_Shipping_Model_Rate_Result 
        */  
        public function collectRates(Mage_Shipping_Model_Rate_Request $request){  
            $result = Mage::getModel('shipping/rate_result');  
            $method = Mage::getModel('shipping/rate_result_method');  
            $method->setCarrier($this->_code);  
            $method->setCarrierTitle($this->getConfigData('title'));
            $method->setMethod($this->_code);  
            $method->setMethodTitle($this->getConfigData('name'));
		    $method->setPrice('0.00');
			$method->setCost('0.00');
            $result->append($method);  
            return $result;  
        }  

		/**
		 * Get allowed shipping methods
		 *
		 * @return array
		 */
		public function getAllowedMethods()
		{
			return array($this->_code=>$this->getConfigData('name'));
		}
		public function isTrackingAvailable() 
		{ 
			return true; 
		}
		public function getTrackingInfo($tracking)
		{
			$track = Mage::getModel('shipping/tracking_result_status');
			$track->setUrl('' . $tracking)
				->setTracking($tracking)
				->setCarrierTitle($this->getConfigData('title'));
			return $track;
		}
    }  
