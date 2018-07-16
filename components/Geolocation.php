<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 7/16/18
 * Time: 2:02 PM
 */

namespace pantera\geolocation\components;


use InvalidArgumentException;
use pantera\geolocation\models\GeobaseCity;
use Yii;
use yii\base\Component;
use function array_key_exists;
use function is_null;

class Geolocation extends Component
{
    private $_city;

    const SESSION_KEY = 'selected-city-id';

    public function getCountCity(): int
    {
        return GeobaseCity::find()->count();
    }

    public function set($id): void
    {
        $city = GeobaseCity::findOne($id);
        if (is_null($city)) {
            throw new InvalidArgumentException('Нету города с таким идентификатором');
        }
        Yii::$app->session->set(self::SESSION_KEY, $id);
    }

    public function get(): ?GeobaseCity
    {
        $id = Yii::$app->session->get(self::SESSION_KEY);
        return GeobaseCity::findOne($id);
    }

    public function identify(): ?GeobaseCity
    {
        if ($this->_city) {
            return $this->_city;
        }
        $location = Yii::$app->ipgeobase->getLocation(Yii::$app->request->getUserIP());
        if ($location && array_key_exists('city', $location)) {
            $location = GeobaseCity::find()
                ->where(['=', GeobaseCity::tableName() . '.name', $location['city']])
                ->one();
            if ($location) {
                $this->_city = $location;
            }
        }
        return $this->_city;
    }
}