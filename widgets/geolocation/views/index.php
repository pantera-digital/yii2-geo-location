<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 7/16/18
 * Time: 1:12 PM
 */

use pantera\geolocation\models\GeobaseCity;
use yii\helpers\Html;
use yii\web\View;

/* @var $this View */
/* @var $popularCities GeobaseCity[] */
?>
<div class="geolocation">
    <div class="dropdown geolocation__dropdown">
        <?php if (is_null(Yii::$app->geolocation->get())): ?>
            <div class="geolocation__dropdown-header">
                <?php if (Yii::$app->geolocation->identify()): ?>
                    Ваш регион <?= Yii::$app->geolocation->identify()->name ?>?
                <?php else: ?>
                    Мы не смогли определить ваш город
                <?php endif; ?>
            </div>
        <?php else: ?>
            <a href="javascript:void(0)" data-toggle="dropdown">
                г. <?= Yii::$app->geolocation->get()->name ?>
            </a>
        <?php endif; ?>
        <?php if (is_null(Yii::$app->geolocation->get())): ?>
            <?php
            if (Yii::$app->geolocation->identify()) {
                echo Html::a('Да', [
                    '/geolocation/default/set',
                    'id' => Yii::$app->geolocation->identify()->id,
                ], [
                    'class' => 'btn btn-success',
                ]);
            }
            ?>
            <button data-toggle="dropdown" class="btn btn-default">
                Изменить регион
                <span class="caret"></span>
            </button>
        <?php endif; ?>
        <div class="dropdown-menu geolocation__dropdown-menu" aria-labelledby="dLabel">
            <div class="geolocation__dropdown-menu-header">Выбор города</div>
            <div class="geolocation__dropdown-counter">Всего <?= Yii::$app->geolocation->getCountCity() ?> город</div>
            <?= \yii\jui\AutoComplete::widget([
                'options' => [
                    'class' => 'geolocation__dropdown-search form-control',
                ],
                'clientOptions' => [
                    'source' => \yii\helpers\Url::to(['/geolocation/default/search']),
                    'minLength' => '3',
                    'select' => new \yii\web\JsExpression('
                    function (event, ui) {
                        window.location = "/geolocation/default/set/" + ui.item.value;
                        return false;
                    }
                '),
                    'focus' => new \yii\web\JsExpression('
                    function(event, ui){
                        return false;
                    }
                '),
                ],
            ]) ?>
            <ul class="geolocation__dropdown-list">
                <?php foreach ($popularCities as $city): ?>
                    <li class="geolocation__dropdown-item">
                        <?= Html::a($city->name, ['/geolocation/default/set', 'id' => $city->id]) ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
