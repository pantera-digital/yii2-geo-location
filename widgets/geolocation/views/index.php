<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 7/16/18
 * Time: 1:12 PM
 */

use yii\web\View;

/* @var $this View */
?>
<div id="my-region">
    <div id="your_city">
        <div id="my-region-link"><span>Ваш регион Хабаровск?</span></div>
        <a href="javascript:void(0)" class="region-link" onclick="setRegion('xabarovsk')">Да</a>
        <a href="javascript:void(0)" class="region-link-gray"><span class="region-arrow">Изменить регион</span></a>
    </div>
    <div id="select_region" style="display: none;">
        <div class="h1">Выбор города</div>
        <div class="notice">Всего 421 город</div>
        <div id="search-city">

            <input type="text" id="search-region" name="search_city" class="ui-autocomplete-input"
                   autocomplete="off"><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
            <button class="serach-button"></button>

        </div>
        <ul>
            <li><a href="" onclick="setRegion('moskva-moskva'); return false">Москва</a></li>
            <li><a href="" onclick="setRegion('sankt-peterbyrg'); return false">Санкт-Петербург</a></li>
            <li><a href="" onclick="setRegion('astraxan'); return false">Астрахань</a></li>
            <li><a href="" onclick="setRegion('barnayl'); return false">Барнаул</a></li>
            <li><a href="" onclick="setRegion('volgograd'); return false">Волгоград</a></li>
            <li><a href="" onclick="setRegion('voronej-voronejskaya-obl'); return false">Воронеж</a></li>
            <li><a href="" onclick="setRegion('ekaterinbyrg'); return false">Екатеринбург</a></li>
            <li><a href="" onclick="setRegion('ijevsk'); return false">Ижевск</a></li>
            <li><a href="" onclick="setRegion('irkytsk'); return false">Иркутск</a></li>
            <li><a href="" onclick="setRegion('kazan'); return false">Казань</a></li>
            <li><a href="" onclick="setRegion('kemerovo'); return false">Кемерово</a></li>
        </ul>
        <ul>
            <li><a href="" onclick="setRegion('krasnodar'); return false">Краснодар</a></li>
            <li><a href="" onclick="setRegion('krasnoyarsk'); return false">Красноярск</a></li>
            <li><a href="" onclick="setRegion('lipeck'); return false">Липецк</a></li>
            <li><a href="" onclick="setRegion('nijniiy-novgorod'); return false">Нижний Новгород</a></li>
            <li><a href="" onclick="setRegion('novokyzneck'); return false">Новокузнецк</a></li>
            <li><a href="" onclick="setRegion('novosibirsk'); return false">Новосибирск</a></li>
            <li><a href="" onclick="setRegion('omsk'); return false">Омск</a></li>
            <li><a href="" onclick="setRegion('penza'); return false">Пенза</a></li>
            <li><a href="" onclick="setRegion('perm'); return false">Пермь</a></li>
            <li><a href="" onclick="setRegion('rostov-na-dony'); return false">Ростов-на-Дону</a></li>
            <li><a href="" onclick="setRegion('ryazan'); return false">Рязань</a></li>
        </ul>
        <ul>
            <li><a href="" onclick="setRegion('samara'); return false">Самара</a></li>
            <li><a href="" onclick="setRegion('saratov'); return false">Саратов</a></li>
            <li><a href="" onclick="setRegion('tver'); return false">Тверь</a></li>
            <li><a href="" onclick="setRegion('tolyatti'); return false">Тольятти</a></li>
            <li><a href="" onclick="setRegion('tomsk'); return false">Томск</a></li>
            <li><a href="" onclick="setRegion('tyla'); return false">Тула</a></li>
            <li><a href="" onclick="setRegion('tumen'); return false">Тюмень</a></li>
            <li><a href="" onclick="setRegion('yfa'); return false">Уфа</a></li>
            <li><a href="" onclick="setRegion('xabarovsk'); return false">Хабаровск</a></li>
            <li><a href="" onclick="setRegion('chelyabinsk'); return false">Челябинск</a></li>
            <li><a href="" onclick="setRegion('yaroslavl'); return false">Ярославль</a></li>
        </ul>
        <ul></ul>
        <div class="clear">&nbsp;</div>
    </div>
</div>
