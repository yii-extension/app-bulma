<?php

declare(strict_types=1);

namespace App\Asset;

use Yii\Extension\Fontawesome\Dev\Js\NpmAllAsset;
use Yiisoft\Assets\AssetBundle;
use Yiisoft\Yii\Bulma\Asset\BulmaAsset;
use Yiisoft\Yii\Bulma\Asset\BulmaHelpersAsset;

final class App extends AssetBundle
{
    public ?string $basePath = '@assets';
    public ?string $baseUrl = '@assetsUrl';
    public ?string $sourcePath = '@resources/asset/css';

    public array $css = [
        'site.css'
    ];

    public array $depends = [
        BulmaAsset::class,
        BulmaHelpersAsset::class,
        BulmaJs::class,
        NpmAllAsset::class,
    ];
}
