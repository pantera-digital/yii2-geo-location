<?php

namespace pantera\geolocation\models;

/**
 * This is the model class for table "geobase_city_popular".
 *
 * @property int $id
 * @property int $city_id
 *
 * @property GeobaseCity $city
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
            [['city_id'], 'exist', 'skipOnError' => true, 'targetClass' => GeobaseCity::className(), 'targetAttribute' => ['city_id' => 'id']],
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCity()
    {
        return $this->hasOne(GeobaseCity::className(), ['id' => 'city_id']);
    }
}
