<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class PixneyExtensionSwiperBlockCreateBlockStream extends Migration
{
    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'block',
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'images'
    ];
}
