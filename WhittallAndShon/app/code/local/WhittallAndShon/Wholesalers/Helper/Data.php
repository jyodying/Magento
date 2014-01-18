<?php
class WhittallAndShon_Wholesalers_Helper_Data extends Mage_Customer_Helper_Data
{
    /**
     * Retrieve customer register form url
     *
     * @return string
     */
    public function getRegisterUrl()
    {
        return $this->_getUrl('customer/account/create');
    }

    /**
     * Retrieve customer register form post url
     *
     * @return string
     */
    public function getRegisterPostUrl()
    {
        return $this->_getUrl('customer/account/createpost');
    }
    /**
     * Retrieve customer register form url
     *
     * @return string
     */
    public function getWholesaleRegisterUrl()
    {
        return $this->_getUrl('customer/account/createwholesale');
    }

    /**
     * Retrieve customer register form post url
     *
     * @return string
     */
    public function getWholesaleRegisterPostUrl()
    {
        return $this->_getUrl('customer/account/createwholesalepost');
    }	
}
?>