<?php

namespace Pixney\SwiperBlockExtension\Block;

use Anomaly\Streams\Platform\Support\Decorator;
use Pixney\SwiperBlockExtension\Block\Contract\BlockInterface;
use Anomaly\Streams\Platform\Model\SwiperBlock\SwiperBlockBlockEntryModel;

/**
 * Class BlockModel
 *
 *  @author Pixney AB <hello@pixney.com>
 *  @author William Åström <william@pixney.com>
 *  
 *  @link https://pixney.com
 */
class BlockModel extends SwiperBlockBlockEntryModel implements BlockInterface
{
    /**
     * Get the image gallery.
     *
     * @return Collection
     */
    public function slides($block)
    {
        /* @var \Anomaly\BlocksModule\Block\Contract\BlockInterface $block */
        $block = (new Decorator())->undecorate($block);
        /* @var Builder $query */
        $query = $this->images();
        $images = $query->get();
        return $images;
    }
}
