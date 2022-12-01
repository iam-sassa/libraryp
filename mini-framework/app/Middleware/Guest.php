<?php
namespace Staditek\App\Middleware;
use Staditek\App\config\Database;

class Guest
{
    public static function before()
    {
        if (@$_SESSION['auth']){
            Router::redirect('home');
        }
    }
}