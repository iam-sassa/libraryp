<?php 
namespace Staditek\App\Config;

class Database{
    public static $conn = null;
    protected static $username = 'root';
    protected static $password = '';
    protected static $hostname = 'localhost'; //127.0.0.1
    protected static $dbname = 'libraries';

    public function __construct()
        {
            Database::setConnection();
        }

    public function setConnection(){
        self::$conn = new \PDO(
            "mysql:host=".self::$hostname.";dbname=".
            self::$dbname,
            self::$username,
            self::$password

        );

        self::$conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function getConnection(){
        return self::$conn;
    }

}

try {
    $db = new Database;
    $db->setConnection();
    $conn = $db->getConnection();
    // $statement = $conn->prepare("select * from member");
    // $statement->execute();

    // $dataTable =  $statement->fetchAll(\PDO::FETCH_OBJ);
    // print_r ($dataTable);
}   catch (\Throwable $th){
        echo $th->getMessage();
    }