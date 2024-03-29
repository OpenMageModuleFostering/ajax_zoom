<?php
/**
*  Module: jQuery AJAX-ZOOM for Magento, /app/code/local/Ax/Zoom/sql/axzoom_setup/install-0.0.1.php
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

$install_errors = array();
if (!function_exists('ioncube_loader_iversion')) {
    array_push($install_errors, 'PHP "Ioncube loader" is not installed on this server. Please install this extension before installing AJAX-ZOOM');
}

/*
$compiler = Mage::getModel('compiler/process');
if ($compiler->getCollectedFilesCount() > 0){
if (!empty($install_errors)){
array_push($install_errors, 'also please temporary disable compilation mode before installing AJAX-ZOOM and recompile after if needed');
}else{
array_push($install_errors, 'Please temporary disable compilation mode before installing AJAX-ZOOM and recompile after if needed');
}
}
*/

if (!empty($install_errors)) {
    array_push($install_errors, 'if you encounter any other issues please check troubleshooting section at http://www.ajax-zoom.com/index.php?cid=modules&module=magento and contact AJAX-ZOOM support at http://www.ajax-zoom.com/index.php?cid=contact ');
    $all_errors = implode('; ',$install_errors);
    throw new Exception($all_errors);
    exit;
} else {
    $installer = $this;
    $installer->startSetup();
    $db_prefix = (string)Mage::getConfig()->getTablePrefix();

    $installer->run("
        CREATE TABLE IF NOT EXISTS `".$db_prefix."ajaxzoom360` (`id_360` int(11) NOT NULL AUTO_INCREMENT,  `id_product` int(11) NOT NULL,  `name` varchar(255) NOT NULL,  `num` int(11) NOT NULL DEFAULT '1',  `settings` text NOT NULL,  `status` tinyint(1) NOT NULL DEFAULT '0',  `combinations` text NOT NULL,  `crop` text NOT NULL, `hotspot` text NOT NULL, PRIMARY KEY (`id_360`)) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;
        CREATE TABLE IF NOT EXISTS `".$db_prefix."ajaxzoom360set` (`id_360set` int(11) NOT NULL AUTO_INCREMENT,  `id_360` int(11) NOT NULL,  `sort_order` int(11) NOT NULL, PRIMARY KEY (`id_360set`)) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
        CREATE TABLE IF NOT EXISTS `".$db_prefix."ajaxzoomproducts` (`id_product` int(11) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8;
    ");

    $installer->endSetup();

    $io = new Varien_Io_File();
    foreach (array('360', 'cache', 'zoomgallery', 'zoommap', 'zoomthumb', 'zoomtiles_80', 'tmp') as $folder) {
        $io->checkAndCreateFolder(Mage::getBaseDir() . '/js/axzoom/pic/' . $folder);
    }

    // download axZm if not exists
    if (!file_exists(Mage::getBaseDir() . '/js/axzoom/axZm') && ini_get('allow_url_fopen') ) {
        $remoteFileContents = file_get_contents('http://www.ajax-zoom.com/download.php?ver=latest&module=magento');
        $localFilePath = Mage::getBaseDir() . '/js/axzoom/pic/tmp/jquery.ajaxZoom_ver_latest.zip';
        if ($remoteFileContents !== false){
            file_put_contents($localFilePath, $remoteFileContents);
            $zip = new ZipArchive;
            $res = $zip->open($localFilePath);
            $zip->extractTo(Mage::getBaseDir() . '/js/axzoom/pic/tmp/');
            $zip->close();
            rename(Mage::getBaseDir() . '/js/axzoom/pic/tmp/axZm', Mage::getBaseDir() . '/js/axzoom/axZm');
        }
    }
}
