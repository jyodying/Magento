<?php
class WhittallAndShon_SocialNetwork_Block_Digg
    extends Mage_Core_Block_Abstract
    implements Mage_Cms_Block_Widget_Interface
{

    /**
     * Produces digg link html
     *
     * @return string
     */
    protected function _toHtml()
    {
        return '<a class="digg" href="http://www.digg.com/submit?url='
            . $this->getUrl('*/*/*', array('_current' => true, '_use_rewrite' => true))
            . '&amp;phase=2" title="You Digg?">You Digg?</a>';
    }

}
?>