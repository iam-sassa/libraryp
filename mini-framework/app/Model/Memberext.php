<?php
namespace Staditek\App\Model;
use Staditek\App\config\Database;

class MemberExt extends Database{
    public function index(){ //all
        $statement =  self::$conn->prepare("select * from member_extended");
        $statement->execute();
 
        return $statement->fetchAll(\PDO::FETCH_OBJ);
     }

    public function insert($data){
        $statement = self::$conn->prepare("INSERT INTO member_extended(extend_date, member_id, duration, price, end_date, created_at)
        VALUES (:extend_date, :member_id, :duration, :price, :end_date, :created_at)");

        return $statement->execute($data);
    }

    public function delete($id){
        $statement = self::$conn->prepare("DELETE FROM member_extended WHERE id='$id'");
        $statement->execute();

        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    public function update($data, $id) {
        $statement = self::$conn->prepare("UPDATE member_extended SET extend_date = :extend_date, member_id = :member_id, duration = :duration, price = :price,
        end_date = :end_date updated_at = :updated_at WHERE id='$id'");

        return $statement->execute($data);

    } 
}