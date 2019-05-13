<?php

namespace Pixney\SwiperBlockExtension;

use Illuminate\Routing\Router;
use Pixney\SwiperBlockExtension\Block\BlockModel;
use Pixney\SwiperBlockExtension\Image\ImageModel;
use Pixney\SwiperBlockExtension\Block\BlockRepository;
use Pixney\SwiperBlockExtension\Image\ImageRepository;
use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Pixney\SwiperBlockExtension\Block\Contract\BlockRepositoryInterface;
use Pixney\SwiperBlockExtension\Image\Contract\ImageRepositoryInterface;
use Anomaly\Streams\Platform\Model\SwiperBlock\SwiperBlockBlockEntryModel;
use Anomaly\Streams\Platform\Model\SwiperBlock\SwiperBlockImagesEntryModel;

class SwiperBlockExtensionServiceProvider extends AddonServiceProvider
{
    /**
     * Additional addon plugins.
     *
     * @type array|null
     */
    protected $plugins = [];

    /**
     * The addon Artisan commands.
     *
     * @type array|null
     */
    protected $commands = [
        \Pixney\SwiperBlockExtension\Command\CopyViews::class
    ];

    /**
     * The addon's scheduled commands.
     *
     * @type array|null
     */
    protected $schedules = [];

    /**
     * The addon API routes.
     *
     * @type array|null
     */
    protected $api = [];

    /**
     * The addon routes.
     *
     * @type array|null
     */
    protected $routes = [];

    /**
     * The addon middleware.
     *
     * @type array|null
     */
    protected $middleware = [
        //Pixney\SwiperBlockExtension\Http\Middleware\ExampleMiddleware::class
    ];

    /**
     * Addon group middleware.
     *
     * @var array
     */
    protected $groupMiddleware = [
        //'web' => [
        //    Pixney\SwiperBlockExtension\Http\Middleware\ExampleMiddleware::class,
        //],
    ];

    /**
     * Addon route middleware.
     *
     * @type array|null
     */
    protected $routeMiddleware = [];

    /**
     * The addon event listeners.
     *
     * @type array|null
     */
    protected $listeners = [
        //Pixney\SwiperBlockExtension\Event\ExampleEvent::class => [
        //    Pixney\SwiperBlockExtension\Listener\ExampleListener::class,
        //],
    ];

    /**
     * The addon alias bindings.
     *
     * @type array|null
     */
    protected $aliases = [
        //'Example' => Pixney\SwiperBlockExtension\Example::class
    ];

    /**
     * The addon class bindings.
     *
     * @type array|null
     */
    protected $bindings = [
        SwiperBlockBlockEntryModel::class  => BlockModel::class,
        SwiperBlockImagesEntryModel::class => ImageModel::class,
        SwiperBlockBlocksEntryModel::class => BlockModel::class,
    ];

    /**
     * The addon singleton bindings.
     *
     * @type array|null
     */
    protected $singletons = [
        BlockRepositoryInterface::class => BlockRepository::class,
        ImageRepositoryInterface::class => ImageRepository::class,
        BlockRepositoryInterface::class => BlockRepository::class,
    ];

    /**
     * Additional service providers.
     *
     * @type array|null
     */
    protected $providers = [
        //\ExamplePackage\Provider\ExampleProvider::class
    ];

    /**
     * The addon view overrides.
     *
     * @type array|null
     */
    protected $overrides = [
        //'streams::errors/404' => 'module::errors/404',
        //'streams::errors/500' => 'module::errors/500',
    ];

    /**
     * The addon mobile-only view overrides.
     *
     * @type array|null
     */
    protected $mobile = [
        //'streams::errors/404' => 'module::mobile/errors/404',
        //'streams::errors/500' => 'module::mobile/errors/500',
    ];

    /**
     * Register the addon.
     */
    public function register()
    {
        // Run extra pre-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Boot the addon.
     */
    public function boot()
    {
        // Run extra post-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Map additional addon routes.
     *
     * @param Router $router
     */
    public function map(Router $router)
    {
        // Register dynamic routes here for example.
        // Use method injection or commands to bring in services.
    }
}
