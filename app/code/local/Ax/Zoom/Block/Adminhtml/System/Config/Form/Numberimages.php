<?php
/**
*  Module: jQuery AJAX-ZOOM for Magento, /app/code/local/Ax/Zoom/Block/Adminhtml/System/Config/Form/Numberimages.php
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

class Ax_Zoom_Block_Adminhtml_System_Config_Form_Numberimages extends Mage_Adminhtml_Block_System_Config_Form_Field
{
    protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
    {
        //$html = parent::_getElementHtml($element);
        $html = '';
        $html .= '<script src="'.Mage::getModel('axzoom/ax360')->rootFolder().'js/axzoom/check_jquery_admin.js"></script>';
        $html .= '<table><tr><td style="padding-right: 20px;">Unique images: </td><td><span id="axzoom_getnumberimages_2d"> ? </span> (from DB)</td></tr>';
        $html .= '<tr><td>Images 360° / 3D: </td><td><span id="axzoom_getnumberimages_360"> ? </span></td></tr>';
        $html .= '<tr><td>Sum: </td><td><span id="axzoom_getnumberimages_sum"> 0 </span></td></tr></table>';
        $html .= '<button type="button" onsubmit="return false;" id="axzoom_getnumberimages" style="width: 100%;"><span></span>Get number images</button>';
        $html .= '<script>
            jQuery("#axzoom_getnumberimages")
            .bind("click", function() {
                jQuery("#axzoom_getnumberimages_2d, #axzoom_getnumberimages_360").html("&#8986;");
                jQuery.ajax( {
                    url: "'.Mage::helper("adminhtml")->getUrl("adminhtml/axzoom/GetNumberImages").'",
                    success: function(data) {
                        if (typeof data == "string") {
                            data = JSON.parse(data);
                        }
                        jQuery("#axzoom_getnumberimages_2d").html(data.images2d);
                        jQuery("#axzoom_getnumberimages_360").html(data.images360);
                        jQuery("#axzoom_getnumberimages_sum").html(parseInt(data.images360) + parseInt(data.images2d));
                    },
                    error: function(data) {
                        alert("[TECHNICAL ERROR]");
                    }
                });
            });
        </script>';
        return $html;
    }
}
