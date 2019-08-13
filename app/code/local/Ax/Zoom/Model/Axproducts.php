<?php
class Ax_Zoom_Model_Axproducts extends Mage_Core_Model_Abstract
{
    protected function _construct()
    {
        parent::_construct();
        $this->_init('axzoom/axproducts');
    }
}