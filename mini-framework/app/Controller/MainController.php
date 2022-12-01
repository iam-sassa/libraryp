<?php

namespace Staditek\App\Controller;
use Staditek\App\Core\View;
use Staditek\App\Core\Router;
use Staditek\App\Model\Librarian;

class MainController {

    public function __construct() {    
        $this->header = new Librarian();
    }

    public function index(){
        require __DIR__ . '/../View/login.php';
    }

    public function postLogin()
    {
        $data = $this->header->findUser($_POST['email']);
        if ($data && password_verify($_POST['password'], $data['$password'])){
            $_SESSION['auth'] = $data;
            Router::redirect('index');
            return;
        }
            Router::redirect('home');
    }

    public function home()
    {
        View::render("body", $this->header->home());
    }

};