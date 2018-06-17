<?php

namespace Pixney\SwiperBlockExtension;

use Anomaly\BlocksModule\Block\BlockExtension;
use Pixney\SwiperBlockExtension\Block\BlockModel;

class SwiperBlockExtension extends BlockExtension
{
    /**
     * This extension provides...
     *
     * This should contain the dot namespace
     * of the addon this extension is for followed
     * by the purpose.variation of the extension.
     *
     * For example anomaly.module.store::gateway.stripe
     *
     * @var null|string
     */
    protected $provides = 'anomaly.module.blocks::block.swiper';
    protected $model    = BlockModel::class;

    /**
     * Get the view.
     *
     * @return null|string
     */
    public function getView()
    {
        return $this->block->configuration('theme', 'pixney.extension.swiper_block::content');
    }
}
