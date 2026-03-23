<?php

namespace Functions;

class SvgLoader
{
    protected static ?SvgLoader $instance = null;

    protected string $svgPath;

    public function __construct()
    {
        $this->svgPath = get_stylesheet_directory() . '/assets/src/svg/';
    }

    public function get(string $filename): string
    {
        $file = $this->svgPath . $filename . '.svg';

        if (!file_exists($file)) {
            return '';
        }

        return $this->sanitizeSvg(file_get_contents($file));
    }

    public function render(string $filename): void
    {
        echo $this->get($filename);
    }

    protected function sanitizeSvg(string $svg): string
    {
        // Remove XML declaration
        $svg = preg_replace('/<\?xml.*?\?>/', '', $svg);

        // Remove comments
        $svg = preg_replace('/<!--(.|\s)*?-->/', '', $svg);

        return trim($svg);
    }

    public static function getInstance(): SvgLoader
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}