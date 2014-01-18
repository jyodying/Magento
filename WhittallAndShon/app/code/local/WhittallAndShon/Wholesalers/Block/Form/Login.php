<?php
class WhittallAndShon_Wholesalers_Block_Form_Login extends Mage_Customer_Block_Form_Login
{
    public function getCreateWholesaleAccountUrl()
    {
        $url = $this->getData('create_account_url');
        if (is_null($url)) {
            $url = $this->helper('customer')->getWholesaleRegisterUrl();
        }
        return $url;
    }
}
?>