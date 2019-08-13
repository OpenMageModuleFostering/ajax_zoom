<?php
class Ax_Zoom_Model_Yesno
{
    public function toOptionArray()
    {
        return array(
            array('value'=>0, 'label'=>Mage::helper('axzoom')->__('No')),
            array('value'=>1, 'label'=>Mage::helper('axzoom')->__('Yes'))
        );
    }

}