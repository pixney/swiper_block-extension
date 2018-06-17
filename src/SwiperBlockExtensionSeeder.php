<?php

namespace Anomaly\PagesModule;

use Pixney\SwiperBlockExtension\Block\BlockSeeder;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;

/**
 * Class SwiperBlockExtensionSeeder
 *
 *  @author Pixney AB <hello@pixney.com>
 *  @author William Åström <william@pixney.com>
 *
 *  @link https://pixney.com
 */
class SwiperBlockExtensionSeeder extends Seeder
{
    /**
     * Run the seeder.
     */
    public function run()
    {
        $this->call(BlockSeeder::class);
    }
}
