<?php

namespace PavlenkoAndrey\SitemapGenerator;

interface SitemapGeneratorInterface
{
    public function generate(string $path, array $data);
}
