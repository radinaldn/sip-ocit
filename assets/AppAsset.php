<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons',
        'https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css',
        'custom/assets/css/material-dashboard.css?v=2.1.0',
        'custom/assets/demo/demo.css',

    ];
    public $js = [
        'custom/assets/js/core/popper.min.js',
        'custom/assets/js/core/bootstrap-material-design.min.js',
        'custom/assets/js/plugins/perfect-scrollbar.jquery.min.js',
        'custom/assets/js/plugins/moment.min.js',
        'custom/assets/js/plugins/sweetalert2.js',
        'custom/assets/js/plugins/jquery.validate.min.js',
        'custom/assets/js/plugins/jquery.bootstrap-wizard.js',
        'custom/assets/js/plugins/bootstrap-selectpicker.js',
        'custom/assets/js/plugins/bootstrap-datetimepicker.min.js',
        'custom/assets/js/plugins/jquery.dataTables.min.js',
        'custom/assets/js/plugins/bootstrap-tagsinput.js',
        'custom/assets/js/plugins/jasny-bootstrap.min.js',
        'custom/assets/js/plugins/fullcalendar.min.js',
        'custom/assets/js/plugins/jquery-jvectormap.js',
        'custom/assets/js/plugins/nouislider.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js',
        'custom/assets/js/plugins/arrive.min.js',
        'https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE',
        'custom/assets/js/plugins/chartist.min.js',
        'custom/assets/js/plugins/bootstrap-notify.js',
        'custom/assets/js/material-dashboard.js?v=2.1.0',
        'custom/assets/demo/demo.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
