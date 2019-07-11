<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Http\Middleware\CsrfProtectionMiddleware;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {
    // Register scoped middleware for in scopes.
    $routes->registerMiddleware('csrf', new CsrfProtectionMiddleware([
        'httpOnly' => true
    ]));

    $routes->applyMiddleware('csrf');

    $routes->connect('/', ['controller' => 'Pages', 'action' => 'index']);

    /* Projetos */
    $routes->connect('/projetos', ['controller' => 'Projects', 'action' => 'index']);
    $routes->connect('/projetos/:slug/:id', ['controller' => 'Projects', 'action' => 'view'], ['pass' => ['slug', 'id']]);

    /* Sobre e contato */
    $routes->connect('/sobre', ['controller' => 'Pages', 'action' => 'about']);
    $routes->connect('/contato', ['controller' => 'Pages', 'action' => 'contact']);
    $routes->connect('/equipe', ['controller' => 'Pages', 'action' => 'contributors']);
    $routes->connect('/sevicos', ['controller' => 'Pages', 'action' => 'services']);
    $routes->connect('/solicitar-orcamento', ['controller' => 'Pages', 'action' => 'budget']);

    $routes->fallbacks(DashedRoute::class);
});

