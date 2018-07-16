<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 7/16/18
 * Time: 1:14 PM
 */

namespace pantera\geolocation\widgets\geolocation;


use yii\web\AssetBundle;

class GeolocationAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/assets';

    public $css = [
        'css/style.css',
    ];

    public $js = [
        'js/script.js',
    ];
}