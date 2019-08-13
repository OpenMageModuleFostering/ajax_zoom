<?php
class Ax_Zoom_Model_Resource_Ax360set extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {
        $this->_init('axzoom/table_ax360set', 'id_360set');
    }
}