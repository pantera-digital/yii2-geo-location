<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 7/16/18
 * Time: 1:11 PM
 */

namespace pantera\location\widgets\geolocation;


use yii\base\Widget;

class Geolocation extends Widget
{
    public function run()
    {
        parent::run();
        return $this->render('index');
    }

    public function init()
    {
        parent::init();
        GeolocationAsset::register($this->view);
    }
}