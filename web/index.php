<?php

require('../vendor/autoload.php');

$app = new Silex\Application();
$app['debug'] = true;

$dbopts = parse_url(getenv('DATABASE_URL'));
$app->register(new Csanquer\Silex\PdoServiceProvider\Provider\PDOServiceProvider('pdo'),
               array(
                'pdo.server' => array(
                   'driver'   => 'pgsql',
                   'user' => $dbopts["user"],
                   'password' => $dbopts["pass"],
                   'host' => $dbopts["host"],
                   'port' => $dbopts["port"],
                   'dbname' => ltrim($dbopts["path"],'/')
                   )
               )
);

// Register the monolog logging service
$app->register(new Silex\Provider\MonologServiceProvider(), array(
  'monolog.logfile' => 'php://stderr',
));

// Register view rendering
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));

// Our web handlers
$app->get('/', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('index.twig');
});

$app->get('/makeburger', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('makeburger.twig');
});

$app->get('/testing', function() use($app) {
  return $app->render('testing.php');
});

$app->post('/testing', function (Request $request) {
  $burgername = $request->get('burgername');
  $burgerbun = $request->get('burgerbun');
  $chicken = $request->get('chicken');
  $beef = $request->get('beef');
  $tofu = $request->get('tofu');

  $sta = $app['pdo']->prepare('INSERT INTO recipes (burgername, burgerbun, chicken, beef, tofu) VALUES (:bugername, :burgerbun, :chicken, :beef, :tofu)');
  $sta->execute();
});


$app->get('/', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return str_repeat('Hello', getenv('TIMES'));
});


$app->get('/db/', function() use($app) {
  $st = $app['pdo']->prepare('SELECT ingredient FROM ingredients');
  $st->execute();

  $ingredient = array();
  while ($row = $st->fetch(PDO::FETCH_ASSOC)) {
    $ingredient[] = $row;
  }

  return $app['twig']->render('database.twig', array(
    'ingredient' => $ingredient
  ));
});

$app->run();
