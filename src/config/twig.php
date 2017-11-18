<?php

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => APP_PATH.'app/views',
));

$app['twig'] = $app->extend('twig', function ($twig, $app) {
    // add custom globals, filters, tags, ...

    return $twig;
});