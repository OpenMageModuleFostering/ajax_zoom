<?php
/**
*  Module: jQuery AJAX-ZOOM for Magento, /app/code/local/Ax/Zoom/Block/Adminhtml/System/Config/Form/Button.php
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

class Ax_Zoom_Block_Adminhtml_System_Config_Form_Resetbutton extends Mage_Adminhtml_Block_System_Config_Form_Field
{
    protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
    {
        //$html = parent::_getElementHtml($element);
        $html = '';
        $html .= '<script src="'.Mage::getModel('axzoom/ax360')->rootFolder().'js/axzoom/check_jquery_admin.js"></script>';
        $html .= '<button type="button" onsubmit="return false;" id="axzoom_reset_options" class="delete" style="width: 100%;"><span></span>Reset options</button>';
        $html .= '<script>
            jQuery("#axzoom_reset_options")
            .bind("click", function() {
                var result = confirm("Are you sure you want to reset all AJAX-ZOOM plugin options to their defaults?");
                if (result) {
                    jQuery.ajax( {
                        url : "'.Mage::helper("adminhtml")->getUrl("adminhtml/axzoom/ResetAzExtension").'",
                        success : function(data) {
                            window.location.reload(true);
                        },
                        error : function(data) {
                            alert("[TECHNICAL ERROR]");
                        }
                    });
                }
            });
        </script>';
        return $html;
    }
}
