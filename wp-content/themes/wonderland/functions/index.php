<?php

use Functions\SvgLoader;
use Functions\ViteAssetsLoader;

ViteAssetsLoader::getInstance();

$GLOBALS['svgLoader'] = SvgLoader::getInstance();