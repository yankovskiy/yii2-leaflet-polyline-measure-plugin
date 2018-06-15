<?php

namespace neverdark\leaflet;


use dosamigos\leaflet\Plugin;
use yii\web\JsExpression;

class PolylineMeasure extends Plugin
{

    /**
     * Returns the plugin name
     * @return string
     */
    public function getPluginName()
    {
        return 'plugin:polylinemeasure';
    }

    /**
     * Registers plugin asset bundle
     *
     * @param \yii\web\View $view
     *
     * @return mixed
     */
    public function registerAssetBundle($view)
    {
        PolylineMeasureAssets::register($view);
    }

    /**
     * Returns the javascript ready code for the object to render
     * @return \yii\web\JsExpression
     */
    public function encode()
    {
        $options = $this->getOptions();
        $map = $this->map;
        $js = "L.control.polylineMeasure($options).addTo($map);";
        return new JsExpression($js);
    }
}