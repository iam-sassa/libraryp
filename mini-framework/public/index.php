<?php

use Staditek\App\Controller\MainController;
use Staditek\App\Core\Router;
use Staditek\App\Middleware\Auth;
use Staditek\App\Middleware\Guest;


require_once __DIR__ . '/../vendor/autoload.php';
session_start();

Router::addRoute('GET', '/', MainController::class, 'index', []);
Router::addRoute('POST', '/postlogin', MainController::class, 'postlogin', []);
Router::addRoute('GET', '/home', MainController::class, 'home', []);
Router::addRoute('GET', '/books', BookController::class, 'index', []);
Router::addRoute('GET', '/member', MemberController::class, 'index', []);
Router::addRoute('GET', '/memberext', MemberextController::class, 'index', []);
// Router::addRoute('GET', '/create', HomeController::class, 'create', [Auth::class]);
// Router::addRoute('POST', '/save', HomeController::class, 'save', [Auth::class]);
// Router::addRoute('POST', '/delete', HomeController::class, 'delete', [Auth::class]);
// Router::addRoute('GET', '/edit', HomeController::class, 'edit', [Auth::class]);
// Router::addRoute('POST', '/update', HomeController::class, 'update', [Auth::class]);


Router::run();

/* Router::addRoute('GET', '/login', HomeController::class, 'login', [Guest::class]);
Router::addRoute('POST', '/postlogin', HomeController::class, 'postlogin', [Guest::class]);
*/