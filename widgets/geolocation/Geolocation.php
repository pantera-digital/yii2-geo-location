<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 7/16/18
 * Time: 1:11 PM
 */

namespace pantera\geolocation\widgets\geolocation;


use Yii;
use yii\base\Widget;

class Geolocation extends Widget
{
    public function run()
    {
        parent::run();
        $sql = 'SELECT geobase_city.* FROM geobase_city LEFT JOIN geobase_city_popular ON geobase_city.id = geobase_city_popular.city_id WHERE geobase_city_popular.id IS NOT NULL';
        $popularCities = Yii::$app->db->createCommand($sql)->queryAll();
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