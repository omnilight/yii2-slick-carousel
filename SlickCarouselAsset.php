<?php

namespace omnilight\assets;

use yii\web\AssetBundle;


/**
 * Class SlickCarouselAsset
 */
class SlickCarouselAsset extends AssetBundle
{
    public $sourcePath = '@bower/slick-carousel/slick';

    public $js = [
        'slick.js'
    ];
    public $css = [
        'slick.css',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
} 