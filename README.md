INSTALLATION
------------
composer require pavlenkoandrey/sitemap-generator

CONFIGURATION
------------
php artisan vendor:publish --provider="PavlenkoAndrey\SitemapGenerator\Providers\SitemapGeneratorServiceProvider"

USE CASE
--------
php artisan sitemap:generate xml
php artisan sitemap:generate json
php artisan sitemap:generate csv
