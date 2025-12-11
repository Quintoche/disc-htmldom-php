<?php

namespace DisciteHtml\Config\Enums\Links;

enum LinkRel : string
{
    case STYLESHEET = 'stylesheet';
    case ICON = 'icon';
    case APPLE_TOUCH_ICON = 'apple-touch-icon';
    case MANIFEST = 'manifest';
    case PRELOAD = 'preload';
    case PREFETCH = 'prefetch';
    case PRECONNECT = 'preconnect';
    case DNS_PREFETCH = 'dns-prefetch';
    case MODULEPRELOAD = 'modulepreload';
    case ALTERNATE = 'alternate';

    // Feeds
    case AUTHOR = 'author';
    case LICENSE = 'license';
    case TAG = 'tag';
    case HELP = 'help';

    // Navigation / relationships
    case NEXT = 'next';
    case PREV = 'prev';
    case SEARCH = 'search';
    case CANONICAL = 'canonical';

    // Icons (SVG / mask)
    case MASK_ICON = 'mask-icon';
    case SHORTCUT_ICON = 'shortcut icon'; // legacy combined form

    // Meta relationships
    case PINGBACK = 'pingback';
    case PRERENDER = 'prerender';

    // PWA / mobile
    case SERVICEWORKER = 'serviceworker';
}

?>