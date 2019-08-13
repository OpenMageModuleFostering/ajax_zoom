<?php
class Ax_Zoom_Model_Resource_Ax360_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('axzoom/ax360');
    }
}