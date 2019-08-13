<?php
/**
*  Module: jQuery AJAX-ZOOM for Magento, /app/code/local/Ax/Zoom/AzMouseoverConfig.php
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

$az_mouseover_config_magento = array(
    'vendor' => 'Magento',
    'exclude_opt_vendor' => array(
        'axZmPath',
        'lang',
        'images',
        'images360',
        'videos',
        'enableNativeSlider',
        'enableInTab',
        'enableInTabOpt',
        'enableCssInOtherPages',
        'default360settingsEmbed',
        'defaultVideoYoutubeSettings',
        'defaultVideoVimeoSettings',
        'defaultVideoDailymotionSettings',
        'defaultVideoVideojsSettings',
        'defaultVideoVideojsJS'
    ),
    'exclude_cat_vendor' => array('contents_settings','video_settings'),
    'config_vendor' => array(
        'oneSrcImg' => true,
        'heightRatioOneImg' => 1.0,
        'zoomWidth' => '.product-shop|+1',
        'zoomHeight' => '.product-essential',
        'width' => 800,
        'height' => 800
    ),
    'config_extend' => array(
        'magentoAllImages' => array(
            'prefix' => 'AJAXZOOM',
            'important' => false,
            'type' => 'bool',
            'isJsObject' => false,
            'isJsArray' => false,
            'display' => 'switch',
            'height' => null,
            'default' => false,
            'options' => null,
            'comment' => array(
                'EN' => '
                    Load all images independent on label (color), 
                    also from "Simple Products" which are bind 
                    to Configurable Product on start.
                ',
                'DE' => '
                    Load all images independent on label (color), 
                    also from "Simple Products" which are bind 
                    to Configurable Product on start.
                '
            )
        ),
        'magentoNoImage' => array(
            'prefix' => 'AJAXZOOM',
            'important' => false,
            'type' => 'bool',
            'isJsObject' => false,
            'isJsArray' => false,
            'display' => 'switch',
            'height' => null,
            'default' => false,
            'options' => null,
            'comment' => array(
                'EN' => '
                    Show magento no image available, 
                    if no AJAX-ZOOM no image available will be shown.
                ',
                'DE' => '
                    Show magento no image available, 
                    if no AJAX-ZOOM no image available will be shown.
                '
            )
        ),
        'magentoAdminThumb' => array(
            'prefix' => 'AJAXZOOM',
            'important' => false,
            'type' => 'bool',
            'isJsObject' => false,
            'isJsArray' => false,
            'display' => 'switch',
            'height' => null,
            'default' => false,
            'options' => null,
            'comment' => array(
                'EN' => '
                    Replace normal images in admin area with dynamically generated thumbs of these images
                ',
                'DE' => '
                    Replace normal images in admin area with dynamically generated thumbs of these images
                '
            )
        )
    )
);
