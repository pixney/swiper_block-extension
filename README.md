# Installation

Run `composer require "pixney/swiper_block-extension":"~0.1.0"` and then `composer dump` and ´php artisan addon:install swiper_block´

## Install swiper
`npm install swiper`

## Init swiper (in app.js for example)
```
import Swiper from 'Swiper';
var mySwiper = new Swiper('.swiper-container', {
    preloadImages: false,
    lazy: true,
    
    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },

});
```

### Make changes
If you would like to make changes to the markup used (for example if you want to
change the class name or remove the scrollbar) simply publish the addon and then edit
the twig file as you like: `php artisan addon:publish swiper_block`

You are now able to find edit files within : `resources/default/addons/pixney/swiper_block-extension/`

## Other stuff
To make any blocks render within pyro cms, either use `{{ page.block.render()|raw }}` or read the documentation to see how to fully customize the output.

Make sure you read the Swiper documentation if you need to know how to use responsive images or set other configurations : [Swiper Documentation](http://idangero.us/swiper/api/)

### Image ratio
Later on you will be able to set other ratios more easily. For now, if you don't want to use our 16:10 pre-set value. Simply run this command:`php artisan make:migration change_swiper_ratio` and then edit your file within database/migrations to look like this :

```
<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class ChangeSwiperRatio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $field = $this->fields()->findBySlugAndNamespace('image', 'swiper_block');
        $field->setAttribute('config', [
            'aspect_ratio'=> '16:9' // Change this to whatever you want
        ])->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $field = $this->fields()->findBySlugAndNamespace('image', 'swiper_block');
        $field->setAttribute('config', [
            'aspect_ratio'=> '16:10'
        ])->save();
    }
}
```

Then run `php artisan migrate`. If you decide you set the wrong ratio. Just run `php artisan migrate:rollback --step=1`, change your file again and then run `php artisan migrate`.



### Css
Make sure to import the swiper css file : `@import '~swiper/dist/css/swiper.css';` and don't forget some styling like this on .swiper-background
```
    .swiper-background {
        height: 100vh;
        background-size: cover;
    }
```

### Anomaly Field Type Image
This extension won't work without it. Go PRO wih PyroCMS to get it!