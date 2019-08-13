<?php

class Ax_Zoom_Block_Adminhtml_Tabs extends Mage_Adminhtml_Block_Catalog_Product_Edit_Tabs
{
    private $parent;
    
    protected function _prepareLayout()
    {

        $productId = Mage::app()->getRequest()->getParam('id');
        
        //get all existing tabs
        $this->parent = parent::_prepareLayout();
        
        if (!empty($productId)) {
            //add new tab
            $this->addTab(
                'tabid', array(
                'label'     => Mage::helper('catalog')->__('AJAX ZOOM'),
                'content'   => $this->getLayout()
                 ->createBlock('zoom/adminhtml_tabs_tabid')->toHtml(),
            ));
        }
        
        return $this->parent;
    }
}