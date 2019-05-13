<?php

namespace Pixney\SwiperBlockExtension;

use Anomaly\BlocksModule\Block\BlockExtension;
use Pixney\SwiperBlockExtension\Block\BlockModel;
use Anomaly\SettingsModule\Setting\Contract\SettingRepositoryInterface;

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
    protected $category = 'content';

    public function getView()
    {
        //  return $this->block->configuration('theme', 'pixney.extension.swiper_block::content');
        $settings      = app(SettingRepositoryInterface::class);
        $setting       = $settings->get('streams::standard_theme');
        $this->wrapper = $setting->value . '::blocks/global/wrapper';
        return $setting->value . '::blocks/swiper';
    }
}
