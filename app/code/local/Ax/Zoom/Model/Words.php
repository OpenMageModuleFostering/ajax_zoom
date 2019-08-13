<?php
class Ax_Zoom_Model_Words
{
    public function toOptionArray()
    {
        return array(
            array('value'=>1, 'label'=>Mage::helper('axzoom')->__('Hello')),
            array('value'=>2, 'label'=>Mage::helper('axzoom')->__('Goodbye')),
            array('value'=>3, 'label'=>Mage::helper('axzoom')->__('Yes')),            
            array('value'=>4, 'label'=>Mage::helper('axzoom')->__('No')),                       
        );
    }

}