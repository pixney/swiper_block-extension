<?php

namespace Pixney\SwiperBlockExtension\Block\Form;

use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

class BlockFormBuilder extends FormBuilder
{
    /**
     * The form fields.
     *
     * @var array|string
     */
    protected $fields = [];

    /**
     * Additional validation rules.
     *
     * @var array|string
     */
    protected $rules = [];

    /**
     * Fields to skip.
     *
     * @var array|string
     */
    protected $skips = [
    ];

    /**
     * The form actions.
     *
     * @var array|string
     */
    protected $actions = [];

    /**
     * The form buttons.
     *
     * @var array|string
     */
    protected $buttons = [
        'cancel',
    ];

    /**
     * The form options.
     *
     * @var array
     */
    protected $options = [];

    /**
     * The form sections.
     *
     * @var array
     */
    protected $sections = [];

    /**
     * The form assets.
     *
     * @var array
     */
    protected $assets = [
        'styles.css' => [
            'pixney.extension.swiper_block::scss/pixney.scss',
        ],
    ];

    // protected $fields = [
    //     '*',
    //     'products' => [
    //         'input_view' => 'dwainnl.extension.pf_productoverviewpage_block::products/input',
    //         'config'     => [
    //             //'controls_view' => 'anomaly.extension.layout_block::columns/controls',
    //             'add_row'       => 'Product blok toevoegen',
    //         ],
    //     ],
    // ];

    // protected $assets = [
    //     'styles.css' => [
    //         'dwainnl.extension.pf_productoverviewpage_block::scss/input.scss',
    //     ],
    // ];
}
