<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 7/16/18
 * Time: 12:36 PM
 */

namespace pantera\geolocation\controllers;


use Yii;
use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionSearch()
    {

    }

    public function actionSet(int $id)
    {
        Yii::$app->geolocation->set($id);
        $url = Yii::$app->request->referrer ?: ['/'];
        return $this->redirect($url);
    }
}