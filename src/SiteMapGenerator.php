<?php

namespace PavlenkoAndrey\SitemapGenerator;

class SiteMapGenerator
{
    /**
     * @param string $ext
     * @return SitemapGeneratorInterface
     * @throws \Exception
     */
    public static function getSitemapGenerator(string $ext): SitemapGeneratorInterface
    {
        switch ($ext) {
            case 'json':
                return new JsonSitemapGenerator();
            case 'xml':
                return new XmlSitemapGenerator();
            case 'csv':
                return new CsvSitemapGenerator();
            default:
                throw new \Exception('Unknown type');
        }
    }
}
