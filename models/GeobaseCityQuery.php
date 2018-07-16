<?php

namespace pantera\geolocation\models;

use yii\db\ActiveQuery;

/**
 * @see GeobaseCity
 */
class GeobaseCityQuery extends ActiveQuery
{
    /**
     * Только популярные
     * @return GeobaseCityQuery
     */
    public function isPopular()
    {
        return $this->joinWith(['popular'])
            ->andWhere(['IS NOT', GeobaseCityPopular::tableName() . '.id', null]);
    }
}
