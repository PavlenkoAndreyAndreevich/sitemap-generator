<?php

namespace Andrey\SitemapGenerator;

interface SitemapGeneratorInterface
{
    public function generate(string $path, $data);
}
