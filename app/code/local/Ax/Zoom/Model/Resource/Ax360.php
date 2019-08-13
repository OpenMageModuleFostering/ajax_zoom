<?php
class Ax_Zoom_Model_Resource_Ax360 extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {
        $this->_init('axzoom/table_ax360', 'id_360');
    }
}