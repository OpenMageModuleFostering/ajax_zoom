<?php
/**
*  Module: jQuery AJAX-ZOOM for Magento, /app/code/local/Ax/Zoom/Helper/Head.php
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

class Ax_Zoom_Helper_Head extends Mage_Core_Helper_Abstract
{
    public function getFancyboxCSS()
    {
        return 'axzoom/axZm/plugins/demo/jquery.fancybox/jquery.fancybox-1.3.4.css';
    }

    public function getFancyboxJS()
    {
        return 'axzoom/axZm/plugins/demo/jquery.fancybox/jquery.fancybox-1.3.4.pack.js';
    }

    public function getFancyboxJSAX()
    {
        return 'axzoom/axZm/extensions/jquery.axZm.openAjaxZoomInFancyBox.js';
    }

    public function getColorboxCSS()
    {
        return '';
    }

    public function getColorboxJS()
    {
        return '';
    }

    public function getSpinnerJS()
    {
        if (Mage::getStoreConfig('axzoom_options/mouseover/spinner') == 'true') {
            return 'axzoom/axZm/plugins/spin/spin.min.js';
        }
    }

    public function getPngModeCssFix()
    {
        if (Mage::getStoreConfig('axzoom_options/plugin_settings/pngModeCssFix') == 'true') {
            return 'axzoom/axZm/extensions/axZmMouseOverZoom/jquery.axZm.mouseOverZoomPng.5.css';
        }
    }
}
