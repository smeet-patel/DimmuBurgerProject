<?php

require('../vendor/autoload.php');

$app = new Silex\Application();
$app['debug'] = true;

use Silex\Provider\FormServiceProvider;

$app->register(new FormServiceProvider());

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

// $app->get('/testing', function() use($app) {
//   $app['monolog']->addDebug('logging output.');
//   return $app['twig']->render('testing.twig');
// });

$app->get('/', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return str_repeat('Hello', getenv('TIMES'));
});


$app->get('/db/', function() use($app) {
  $st = $app['pdo']->prepare('SELECT ingredient FROM ingredients');
  $st->execute();

  // $sta = $app['pdo']->prepare('INSERT INTO recipes (burgername, burgerbun, chicken, beef, tofu) VALUES (\'testBurger\', 1, 0, 0, 1)');
  // $sta->execute();  

  $ingredient = array();
  while ($row = $st->fetch(PDO::FETCH_ASSOC)) {
    $ingredient[] = $row;
  }

  return $app['twig']->render('database.twig', array(
    'ingredient' => $ingredient
  ));
});

$app->match('/testing', function (Request $request) use ($app) {
  // some default data for when the form is displayed the first time
  $data = array(
      'name' => 'Your name',
      'email' => 'Your email',
  );

  $form = $app['form.factory']->createBuilder('form', $data)
      ->add('name')
      ->add('email')
      ->add('billing_plan', 'choice', array(
          'choices' => array(1 => 'free', 2 => 'small_business', 3 => 'corporate'),
          'expanded' => true,
      ))
      ->getForm();

  $form->handleRequest($request);

  if ($form->isValid()) {
      $data = $form->getData();

      // do something with the data

      // redirect somewhere
      return $app->redirect('/testing');
  }

  // display the form
  return $app['twig']->render('testing.twig', array('form' => $form->createView()));
});



$app->run();
