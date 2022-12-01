<?php
namespace Staditek\App\Model;
use Staditek\App\config\Database;

class Member extends Database{
    public function read(){ //all
        $statement =  self::$conn->prepare("select * from member");
        $statement->execute();
 
        return $statement->fetchAll(\PDO::FETCH_OBJ);
     }

    public function create($data){
        $statement = self::$conn->prepare("INSERT INTO member(registration_date, name, phone, city, duration, end_date, created_at)
        VALUES (:registration_date, :name, :phone, :city, :duration, :end_date, :created_at)");

        return $statement->execute($data);
    }

    public function delete($id){
        $statement = self::$conn->prepare("DELETE FROM member WHERE id='$id'");
        $statement->execute();

        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    public function update($data, $id) {
        $statement = self::$conn->prepare("UPDATE member SET registration_date = :registration_date, name = :name, phone = :phone, city = :city, duration = :duration, end_date = :end_date updated_at = :updated_at WHERE id='$id'");

        return $statement->execute($data);

    } 
}