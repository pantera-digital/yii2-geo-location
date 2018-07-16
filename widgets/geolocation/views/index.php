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
<div id="my-region">
    <div id="your_city">
        <div id="my-region-link">
            <?php if (is_null(Yii::$app->geolocation->get())): ?>
                <span>
                <?php if (Yii::$app->geolocation->identify()): ?>
                    Ваш регион <?= Yii::$app->geolocation->identify()->name ?>?
                <?php else: ?>
                    Мы не смогли определить ваш город
                <?php endif; ?>
                </span>
            <?php else: ?>
                <a href="javascript:void(0)" class="region-arrow">
                    г. <?= Yii::$app->geolocation->get()->name ?>
                </a>
            <?php endif; ?>
        </div>
        <?php if (is_null(Yii::$app->geolocation->get())): ?>
            <?php
            if (Yii::$app->geolocation->identify()) {
                echo Html::a('Да', [
                    '/geolocation/default/set',
                    'id' => Yii::$app->geolocation->identify()->id,
                ], [
                    'class' => 'region-link',
                ]);
            }
            ?>
            <a href="javascript:void(0)" class="region-link-gray">
            <span class="region-arrow">
                Изменить регион
            </span>
            </a>
        <?php endif; ?>
    </div>
    <div id="select_region" style="display: none;">
        <div class="h1">Выбор города</div>
        <div class="notice">Всего 421 город</div>
        <div id="search-city">
            <?= \yii\jui\AutoComplete::widget([
                'options' => [
                    'class' => 'form-control',
                ],
                'clientOptions' => [
                    'source' => \yii\helpers\Url::to(['/geolocation/default/search']),
                    'minLength' => '3',
                    'select' => new \yii\web\JsExpression('
                        function (event, ui) {
                            window.location = "/geolocation/default/set/" + ui.item.value;
                        }
                    '),
                ],
            ]) ?>
        </div>
        <ul>
            <?php foreach ($popularCities as $city): ?>
                <li>
                    <?= Html::a($city->name, ['/geolocation/default/set', 'id' => $city->id]) ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
