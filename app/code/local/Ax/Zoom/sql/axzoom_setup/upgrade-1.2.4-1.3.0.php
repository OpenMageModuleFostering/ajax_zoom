<?php
/**
*  Module: jQuery AJAX-ZOOM for Magento, /app/code/local/Ax/Zoom/sql/axzoom_setup/upgrade-1.2.4-1.3.0.php
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

$installer = $this;
$installer->startSetup();
$db_prefix = (string)Mage::getConfig()->getTablePrefix();

$installer->run("
    DELETE FROM `".$db_prefix."core_config_data` WHERE `path` LIKE 'axzoom_options/%' AND `path` != 'axzoom_options/license/lic'
");

$installer->endSetup();
