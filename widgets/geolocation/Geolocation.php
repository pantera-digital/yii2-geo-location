<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 7/16/18
 * Time: 1:11 PM
 */

namespace pantera\geolocation\widgets\geolocation;


use pantera\geolocation\models\GeobaseCity;
use yii\base\Widget;

class Geolocation extends Widget
{
    public function run()
    {
        parent::run();
        $popularCities = GeobaseCity::find()
            ->isPopular()
            ->all();
        return $this->render('index', [
            'popularCities' => $popularCities,
        ]);
    }

    public function init()
    {
        parent::init();
        GeolocationAsset::register($this->view);
    }
}