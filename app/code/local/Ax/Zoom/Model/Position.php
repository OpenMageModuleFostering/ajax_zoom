<?php
class Ax_Zoom_Model_Position
{
    public function toOptionArray()
    {
        return array(
            array('value'=>'inside', 'label'=>Mage::helper('axzoom')->__('inside')),
            array('value'=>'top', 'label'=>Mage::helper('axzoom')->__('top')),
            array('value'=>'right', 'label'=>Mage::helper('axzoom')->__('right')),
            array('value'=>'bottom', 'label'=>Mage::helper('axzoom')->__('bottom')),
            array('value'=>'left', 'label'=>Mage::helper('axzoom')->__('left'))
        );
    }
}