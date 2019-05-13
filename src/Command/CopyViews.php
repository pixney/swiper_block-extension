<?php

namespace Pixney\SwiperBlockExtension\Command;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Anomaly\Streams\Platform\Application\Application;
use Pixney\SwiperBlockExtension\SwiperBlockExtension;
use Anomaly\SettingsModule\Setting\Contract\SettingRepositoryInterface;

class CopyViews extends Command
{
    use DispatchesJobs;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pb:swipe';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description    = 'Copy Swiper Block Views to your theme';
    protected $application;
    protected $namespace;
    protected $path;
    protected $vendor;
    protected $slug;
    protected $type;
    protected $blockPath;
    protected $themePath;
    protected $filesystem;
    protected $themeNamespace;
    protected $blockSlug;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(Application $application, SwiperBlockExtension $blockExtension, Filesystem $filesystem)
    {
        $this->application = $application;
        $this->blockPath   = $blockExtension->path;
        $this->blockSlug   = $blockExtension->slug;
        $this->filesystem  = $filesystem;

        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->themeNamespace = app(SettingRepositoryInterface::class)->get('streams::standard_theme')->value;
        $this->setVendorTypeSlug($this->themeNamespace);
        $this->themePath = $this->makePath();

        $this->filesystem->copyDirectory(
            "{$this->blockPath}/resources/views/blocks",
            "{$this->themePath}/resources/blocks/{$this->blockSlug}"
        );
    }

    private function makePath()
    {
        $shared = $this->application->getReference();
        return base_path("addons/{$shared}/{$this->vendor}/{$this->slug}-{$this->type}");
    }

    private function setVendorTypeSlug($namespace)
    {
        list($this->vendor, $this->type, $this->slug) = array_map(
            function ($value) {
                return str_slug(strtolower($value), '_');
            },
            explode('.', $namespace)
        );
    }
}
