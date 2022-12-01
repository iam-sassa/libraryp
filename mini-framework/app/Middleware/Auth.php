<?php
namespace Staditek\App\Middleware;
use Staditek\App\Core\Router;

class Auth
{
    public static function before()
    {
        if ($_SESSION['auth'] == null){
            Router::redirect('');
        }
    }
}