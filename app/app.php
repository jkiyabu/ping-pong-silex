<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/PingPong.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app['debug'] = true;

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/ping_pong", function() use ($app) {
        $my_PingPong = new PingPong;
        $pingPonged = $my_PingPong->makePingPong($_GET['input-number']);
        return $app['twig']->render('ping_pong.html.twig', array('result' => $pingPonged));
    });

    return $app;
?>
