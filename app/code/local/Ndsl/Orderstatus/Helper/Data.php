<?php
class Ndsl_Orderstatus_Helper_Data extends Mage_Core_Helper_Abstract
{
	/**
     * Import configuration
     */
    public function getConfigurationSendEmail() {
        //return Mage::getStoreConfig('orderstatus/import/send_email');
        return "send_email";
    }

    public function getConfigurationIncludeComment() {
        //return Mage::getStoreConfig('orderstatus/import/include_comment');
        return "include_comment";
    }

    public function getConfigurationDefaultTrackingTitle() {
        //return Mage::getStoreConfig('orderstatus/import/default_tracking_title');
        return "default_tracking_title";
    }

    public function getConfigurationShippingComment() {
        //return Mage::getStoreConfig('orderstatus/import/shipping_comment');
    	return "shipping_comment";
    }
}
	 