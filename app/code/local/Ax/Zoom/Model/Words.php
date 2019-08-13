<?php
/**
*  Module: jQuery AJAX-ZOOM for Magento, /app/code/local/Ax/Zoom/Model/Words.php
*  Copyright: Copyright (c) 2010-2015 Vadim Jacobi
*  License Agreement: http://www.ajax-zoom.com/index.php?cid=download
*  Version: 1.0.0
*  Date: 2015-09-08
*  Review: 2015-09-08
*  URL: http://www.ajax-zoom.com
*  Documentation: http://www.ajax-zoom.com/index.php?cid=modules&module=magento
*
*  @author    AJAX-ZOOM <support@ajax-zoom.com>
*  @copyright 2010-2015 AJAX-ZOOM, Vadim Jacobi
*  @license   http://www.ajax-zoom.com/index.php?cid=download
*/

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