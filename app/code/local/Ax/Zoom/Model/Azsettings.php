<?php
/**
*  Module: jQuery AJAX-ZOOM for Magento, /app/code/local/Ax/Zoom/Model/Azsettings.php
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

class Ax_Zoom_Model_Azsettings
{
    public static $mouseover_settings;
    public static $mouseover_cfg;

    public function __call($func, $params) 
    {
        $this->initAzOpt();
        if ($func == 'yesno') {
            return array(
                'false' => Mage::helper('axzoom')->__('No'),
                'true' => Mage::helper('axzoom')->__('Yes')
            );
        } elseif (isset(self::$mouseover_cfg[$func]) && is_array(self::$mouseover_cfg[$func]['options'])) {
            return $this->retOptArr(self::$mouseover_cfg[$func]['options']);
        } else {
            return array();
        }
    }

    public function initAzOpt()
    {
        if (!class_exists('AzMouseoverSettings', false) || !self::$mouseover_settings) {
            require_once dirname(dirname(__FILE__)).'/AzMouseoverSettings.php';
            require dirname(dirname(__FILE__)).'/AzMouseoverConfig.php';
            self::$mouseover_settings = new AzMouseoverSettings($az_mouseover_config_magento);
            self::$mouseover_cfg = self::$mouseover_settings->getConfig();
        }
    }

    public function retOptArr($arr)
    {
        $ret = array();

        foreach ($arr as $v) {
            $ret[$v[0]] = Mage::helper('axzoom')->__($v[1]);
        }

        return $ret;
    }
}
