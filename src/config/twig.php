<?php


$app['twig.options'] = array('cache' => __DIR__.'/../var/cache/twig');
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => APP_PATH.'app/views',
));

$app['twig'] = $app->extend('twig', function ($twig, $app) {
    // add custom globals, filters, tags, ...

    $function = new Twig_SimpleFunction('testFunction', function () {
        return 'test2';
    });

    $twig->addFunction($function);

    return $twig;
});
