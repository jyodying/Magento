<?php class WhittallAndShon_ModifyPrice_Model_Observer
{
	public function modifyPrice(Varien_Event_Observer $observer){
		$groupid = Mage::getSingleton('customer/session')->getCustomerGroupId(); 
		//Mage::getSingleton('core/session')->addNotice(Mage::getSingleton('customer/session')->getCustomerGroupId());
		if ($groupid !=2) {
			$item = $observer->getQuoteItem();
			if ($item->getParentItem()) $item = $item->getParentItem();
			if ($item->getProduct()->isConfigurable()){
				$msrpPrice = $item->getProduct()->getMsrp();
				if ($msrpPrice):
					$item->setCustomPrice($msrpPrice);
					$item->setOriginalCustomPrice($msrpPrice);
					$item->getProduct()->setIsSuperMode(true);
				endif;
				//Mage::getSingleton('core/session')->addNotice($msrpPrice);
			}
		}
	}
}
?>