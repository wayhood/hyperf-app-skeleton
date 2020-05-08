<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

use Hyperf\HttpServer\Router\Router;
use Psr\Container\ContainerInterface;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;

Router::addRoute(['GET', 'POST'], "/",
    'Wayhood\HyperfAction\Controller\MainController@index',
    ['middleware' => [\Wayhood\HyperfAction\Middleware\ActionMiddleware::class]]);

Router::get('/doc',
    'Wayhood\HyperfAction\Controller\MainController@doc');
