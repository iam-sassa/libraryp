<?php
namespace Staditek\App\Model;
use Staditek\App\config\Database;

class Librarian extends Database{

    public function home(){
        
    }

public function findUser($email){
        $statement = self::$conn->prepare("SELECT * from librarian WHERE email = '$email'");
        $statement->execute();

        return $statement->fetch();
    }

};