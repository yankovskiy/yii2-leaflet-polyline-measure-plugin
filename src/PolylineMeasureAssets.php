<?php

namespace neverdark\leaflet;


use yii\web\AssetBundle;

class PolylineMeasureAssets extends AssetBundle
{
    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets';
        parent::init();
    }

    public $css = [
        'Leaflet.PolylineMeasure.css'
    ];

    public $js = [
        'Leaflet.PolylineMeasure.js'
    ];
}