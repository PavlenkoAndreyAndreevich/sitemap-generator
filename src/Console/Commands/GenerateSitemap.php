<?php

namespace PavlenkoAndrey\SitemapGenerator\Console\Commands;

use Illuminate\Console\Command;
use PavlenkoAndrey\SitemapGenerator\SiteMapGenerator;
use Throwable;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate {extension} {path=public/uploads}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sitemap Generator';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    private const ITEMS_ARRAY = [
        [
            'loc' => 'https://site.ru/news',
            'lastmod' => '2020-12-10',
            'priority' => '0.5',
            'changefreq' => 'daily'
        ],
        [
            'loc' => 'https://site.ru/about',
            'lastmod' => '2020-12-10',
            'priority' => '0.5',
            'changefreq' => 'daily'
        ],
        [
            'loc' => 'https://site.ru/products',
            'lastmod' => '2020-12-10',
            'priority' => '0.5',
            'changefreq' => 'weekly'
        ],
        [
            'loc' => 'https://site.ru/ps5',
            'lastmod' => '2020-12-10',
            'priority' => '0.5',
            'changefreq' => 'weekly'
        ],
        [
            'loc' => 'https://site.ru/xbox',
            'lastmod' => '2020-12-10',
            'priority' => '0.5',
            'changefreq' => 'daily'
        ],
    ];

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $generator = SitemapGenerator::getSitemapGenerator($this->argument('extension'));
        try {
            $generator->generate($this->argument('path'), self::ITEMS_ARRAY);
        } catch (Throwable $exception) {
            echo $exception->getMessage();
        }
    }
}
