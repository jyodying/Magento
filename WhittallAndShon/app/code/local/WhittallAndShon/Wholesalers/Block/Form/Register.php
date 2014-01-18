<?php    
class WhittallAndShon_Wholesalers_Block_Form_Register extends Mage_Customer_Block_Form_Register
{
    /**
     * Retrieve form posting url
     *
     * @return string
     */
    public function getPostActionUrl()
    {
        return $this->helper('customer')->getRegisterPostUrl();
    }
	    /**
     * Retrieve form posting url
     *
     * @return string
     */
    public function getWholesalePostActionUrl()
    {
        return $this->helper('customer')->getWholesaleRegisterPostUrl();
    }
    protected function _prepareLayout()
    {
		$this->setShowAddressFields(true);
        $this->getLayout()->getBlock('head')->setTitle(Mage::helper('customer')->__('Create New Customer Account'));
        return parent::_prepareLayout();
    }

}
?>