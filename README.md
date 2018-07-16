# yii2-geo-location

geo-location

### Установка

Для начала нужно установить и настроить https://github.com/himiklab/yii2-ipgeobase-component

```
composer require pantera-digital/yii2-geo-location "@dev"
```
### Настройка
Добавил в консольный конфиг путь до миграций
```
'controllerMap' => [
    'migrate' => [
        'class' => 'yii\console\controllers\MigrateController',
        'migrationPath' => [
            '@vendor/pantera-digital/yii2-geo-location/migrations',
        ],
    ],
],
```
Добавить в конфиг
```
'components' => [
    'geolocation' => [
        'class' => pantera\geolocation\components\Geolocation::className(),
    ],
    'ipgeobase' => [
        'class' => 'himiklab\ipgeobase\IpGeoBase',
        'useLocalDB' => true,
    ],
],
'modules' => [
    'geolocation' => [
        'class' => pantera\geolocation\Module::className(),
    ],
],
```
Добавить дефолтные города можно в таблицу geobase_city_popular
### Использование
```
<?= \pantera\geolocation\widgets\geolocation\Geolocation::widget() ?>
```