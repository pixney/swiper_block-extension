<?php

use Pixney\SwiperBlockExtension\Image\ImageModel;
use Anomaly\Streams\Platform\Database\Migration\Migration;

class PixneyExtensionSwiperBlockCreateSwiperBlockFields extends Migration
{
    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'image'      => 'anomaly.field_type.image',
        'images'     => [
            'type'   => 'anomaly.field_type.repeater',
            'config' => [
                'related'        => ImageModel::class,
                'max'            => null,
                'min'            => null,
                'add_row'        => 'Add Image',
            ]
        ]
    ];
}
