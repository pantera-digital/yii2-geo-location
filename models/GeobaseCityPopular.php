<?php

namespace pantera\geolocation\models;

/**
 * This is the model class for table "geobase_city_popular".
 *
 * @property int $id
 * @property int $city_id
 */
class GeobaseCityPopular extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'geobase_city_popular';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['city_id'], 'required'],
            [['city_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'city_id' => 'City ID',
        ];
    }
}
