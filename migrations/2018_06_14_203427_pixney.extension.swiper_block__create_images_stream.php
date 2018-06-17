<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class PixneyExtensionSwiperBlockCreateImagesStream extends Migration
{
    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug'          => 'images',
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'image'
    ];
}
