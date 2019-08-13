<?php
class Ax_Zoom_Helper_Head extends Mage_Core_Helper_Abstract
{
	public function getFancyboxCSS()
	{
		if (Mage::getStoreConfig('axzoom_options/main/ajaxZoomOpenMode') == 'fancyboxFullscreen' || Mage::getStoreConfig('axzoom_options/main/ajaxZoomOpenMode') == 'fancybox') {
			return 'axzoom/axZm/plugins/demo/jquery.fancybox/jquery.fancybox-1.3.4.css';
		}
	}
	public function getFancyboxJS()
	{
		if (Mage::getStoreConfig('axzoom_options/main/ajaxZoomOpenMode') == 'fancyboxFullscreen' || Mage::getStoreConfig('axzoom_options/main/ajaxZoomOpenMode') == 'fancybox') {
			return 'axzoom/axZm/plugins/demo/jquery.fancybox/jquery.fancybox-1.3.4.pack.js';
		}
	}
	public function getFancyboxJSAX()
	{
		if (Mage::getStoreConfig('axzoom_options/main/ajaxZoomOpenMode') == 'fancyboxFullscreen' || Mage::getStoreConfig('axzoom_options/main/ajaxZoomOpenMode') == 'fancybox') {
			return 'axzoom/axZm/extensions/jquery.axZm.openAjaxZoomInFancyBox.js';
		}
	}
	public function getColorboxCSS()
	{
		if (Mage::getStoreConfig('axzoom_options/main/ajaxZoomOpenMode') == 'colorbox') {
			return 'axzoom/axZm/plugins/demo/colorbox/example2/colorbox.css';
		}
	}
	public function getColorboxJS()
	{
		if (Mage::getStoreConfig('axzoom_options/main/ajaxZoomOpenMode') == 'colorbox') {
			return 'axzoom/axZm/plugins/demo/colorbox/jquery.colorbox-min.js';
		}
	}
}