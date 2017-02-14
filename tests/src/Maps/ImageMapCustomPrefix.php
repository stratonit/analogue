<?php

namespace TestApp\Maps;

use TestApp\Image;
use TestApp\ImageSize;

class ImageMapCustomPrefix extends ImageMap
{
    public function size(Image $image)
    {
        return $this->embedsOne(ImageSize::class)
            ->setPrefix('custom_');
    }
}
