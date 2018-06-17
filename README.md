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
For the first versions we have a set ratio to 16:10, but this will be possible to configure later on.

### Css
Don't forget some styling like this on .swiper-background
```
    .swiper-background {
        height: 100vh;
        background-size: cover;
    }
```

### Anomaly Field Type Image
This extension won't work without it. Go PRO wih PyroCMS to get it!