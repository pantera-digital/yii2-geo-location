<?php

namespace pantera\geolocation\models;

use function get_called_class;

/**
 * This is the model class for table "geobase_city".
 *
 * @property int $id
 * @property string $name
 * @property int $region_id
 * @property double $latitude
 * @property double $longitude
 *
 * @property GeobaseCityPopular $popular
 */
class GeobaseCity extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'geobase_city';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'name', 'region_id', 'latitude', 'longitude'], 'required'],
            [['id', 'region_id'], 'integer'],
            [['latitude', 'longitude'], 'number'],
            [['name'], 'string', 'max' => 50],
            [['id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'region_id' => 'Region ID',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
        ];
    }

    public static function find()
    {
        return new GeobaseCityQuery(get_called_class());
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPopular()
    {
        return $this->hasOne(GeobaseCityPopular::className(), ['city_id' => 'id']);
    }
}
