<?php
/**
 * @copyright Copyright (C) 2015-2018 AIZAWA Hina
 * @license https://github.com/fetus-hina/stat.ink/blob/master/LICENSE MIT
 * @author AIZAWA Hina <hina@bouhime.com>
 */

declare(strict_types=1);

namespace statink\yii2\bukiicons;

use Yii;
use yii\helpers\Html;

class Bukiicons
{
    public static function icon(string $key, array $options = []): string
    {
        return Html::img(static::url($key), $options);
    }

    public static function url(string $key): string
    {
        return Yii::$app->getAssetManager()->getAssetUrl(
            BukiiconsAsset::register(Yii::$app->getView()),
            "{$key}.png"
        );
    }
}
