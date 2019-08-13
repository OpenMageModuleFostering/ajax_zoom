<?php
 
class Ax_Zoom_Block_Adminhtml_Tabs_Tabid extends Mage_Adminhtml_Block_Widget
{
    public function __construct()
    {
        parent::__construct();

		$productId = Mage::app()->getRequest()->getParam('id');
		
        if (!empty($productId)) {
	        $this->assign(array(
	        	'files' => $this->getArcList()
	        	));
	        $this->setTemplate('axzoom/tab.phtml');
    	}
    }

	public function getArcList() {
		
		$baseDir = Mage::getBaseDir();
		$files = array();
		
		if ($handle = opendir($baseDir . '/js/axzoom/zip/')) {
			while (false !== ($entry = readdir($handle))) {
				if ($entry != '.' && $entry != '..' && strtolower(substr($entry, -3)) == 'zip') {
					array_push($files, $entry);
				}
			}
			closedir($handle);
		}
		  
		return $files;
	}
}