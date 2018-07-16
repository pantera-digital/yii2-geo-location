<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 7/16/18
 * Time: 12:36 PM
 */

namespace pantera\geolocation\controllers;


use pantera\geolocation\models\GeobaseCity;
use Yii;
use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionSearch()
    {
        $search = Yii::$app->request->get('term');
        $cities = GeobaseCity::find()
            ->select([
                GeobaseCity::tableName() . '.id as value',
                GeobaseCity::tableName() . '.name as label',
            ])
            ->where(['LIKE', GeobaseCity::tableName() . '.name', $search])
            ->asArray()
            ->all();
        return $this->asJson($cities);
    }

    public function actionSet(int $id)
    {
        Yii::$app->geolocation->set($id);
        $url = Yii::$app->request->referrer ?: ['/'];
        return $this->redirect($url);
    }
}