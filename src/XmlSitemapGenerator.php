<?php

namespace PavlenkoAndrey\SitemapGenerator;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;

class XmlSitemapGenerator implements SitemapGeneratorInterface
{
    public function generate(string $path, $data)
    {
        File::makeDirectory($path, 0777, true, true);
        $content = View::make('sitemap-xml', [
            'content' => $data
        ]);
        Storage::disk('local')->put("$path/sitemap.xml", $content);
    }
}
