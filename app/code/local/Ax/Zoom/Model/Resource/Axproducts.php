<?php
/**
*  Module: jQuery AJAX-ZOOM for Magento, /app/code/local/Ax/Zoom/Model/Resource/Axproducts.php
*  Copyright: Copyright (c) 2010-2017 Vadim Jacobi
*  License Agreement: http://www.ajax-zoom.com/index.php?cid=download
*  Version: 1.3.0
*  Date: 2017-06-25
*  Review: 2017-06-25
*  URL: http://www.ajax-zoom.com
*  Documentation: http://www.ajax-zoom.com/index.php?cid=modules&module=magento
*
*  @author    AJAX-ZOOM <support@ajax-zoom.com>
*  @copyright 2010-2017 AJAX-ZOOM, Vadim Jacobi
*  @license   http://www.ajax-zoom.com/index.php?cid=download
*/

class Ax_Zoom_Model_Resource_Axproducts extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {
        $this->_init('axzoom/table_axproducts', null);
    }
}
