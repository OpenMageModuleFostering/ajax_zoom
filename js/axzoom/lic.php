<?php
/**
*  Module: jQuery AJAX-ZOOM for Magento, /js/axzoom/lic.php
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

$obj = SimpleXML_Load_String(implode('', file('../../../app/etc/local.xml')));
$mysqli = mysqli_connect(preg_replace('/:[0-9]{1,}$/', '', (string)$obj->global->resources->default_setup->connection->host), (string)$obj->global->resources->default_setup->connection->username, (string)$obj->global->resources->default_setup->connection->password, (string)$obj->global->resources->default_setup->connection->dbname);

$data_query = mysqli_query($mysqli, "SELECT `value` FROM `" . (string)$obj->global->resources->db->table_prefix . "core_config_data` WHERE `path` = 'axzoom_options/license/lic'");
$data = mysqli_fetch_array($data_query);
$tmp = unserialize($data['value']);

foreach ($tmp as $key => $l) {
	$_SESSION['axZmLicenses'][$l['domain']]	= array(
		'licenceType' => $l['type'],
		'licenceKey' => $l['license'],
		'error200' => $l['error200'],
		'error300' => $l['error300']
		);
}