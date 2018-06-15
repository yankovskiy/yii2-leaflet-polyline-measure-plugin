Plugin for leaflet extension
============================
Plugin for yii2 based on the [Leaflet.PolylineMeasure](https://github.com/ppete2/Leaflet.PolylineMeasure) to measure distances of simple lines as well as of complex polylines

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist yankovskiy/yii2-leaflet-polyline-measure-plugin "*"
```

or add

```
"yankovskiy/yii2-leaflet-polyline-measure-plugin": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
$center = new dosamigos\leaflet\types\LatLng(['lat' => 43.105620, 'lng' => 131.873530]);

$osmLayer = new \dosamigos\leaflet\layers\TileLayer([
    'urlTemplate' => 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
    'clientOptions' => [
        'attribution' => '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
    ],
]);

$cycleLayer = new \dosamigos\leaflet\layers\TileLayer([
    'urlTemplate' => 'https://{s}.tile.thunderforest.com/cycle/{z}/{x}/{y}.png',
    'clientOptions' => [
        'attribution' => '&copy; <a href="https://www.thunderforest.com">Thunderforest</a> ',
    ],
]);

$outdoorLayer = new \dosamigos\leaflet\layers\TileLayer([
    'urlTemplate' => 'https://{s}.tile.thunderforest.com/outdoors/{z}/{x}/{y}.png',
    'clientOptions' => [
        'attribution' => '&copy; <a href="https://www.thunderforest.com">Thunderforest</a> ',
    ],
]);

$layers = new \dosamigos\leaflet\controls\Layers();
$layers->setBaseLayers(
    [
        'OpenStreetMap' => $osmLayer,
        'OpenCycleMap' => $cycleLayer,
        'Outdoor' => $outdoorLayer,
    ]
);

$polylineMeasure = new \neverdark\leaflet\PolylineMeasure();

$leaflet = new \dosamigos\leaflet\LeafLet([
    'center' => $center, // set the center
]);

$leaflet->addLayer($osmLayer);
$leaflet->addControl($layers);
$leaflet->installPlugin($polylineMeasure);


echo \dosamigos\leaflet\widgets\Map::widget(['height' => '700px', 'leafLet' => $leaflet]);
```
