<?php
namespace Staditek\App\Model;
use Staditek\App\config\Database;

class Book extends Database{
    public function read(){ //all
        $statement =  self::$conn->prepare("select * from books");
        $statement->execute();
 
        return $statement->fetchAll(\PDO::FETCH_OBJ);
     }

    public function create($data){
        $statement = self::$conn->prepare("INSERT INTO books(isbn, book_title, book_author, published_year, price, created_at)
        VALUES (:isbn, :book_title, :book_author, :published_year, :price, :created_at)");

        return $statement->execute($data);
    }

    public function delete($id){
        $statement = self::$conn->prepare("DELETE FROM books WHERE id='$id'");
        $statement->execute();

        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    public function update($data, $id) {
        $statement = self::$conn->prepare("UPDATE books SET isbn = :isbn, book_title = :book_title, book_author = :book_author, published_year = :published_year, price = :price, updated_at = :updated_at WHERE id='$id'");

        return $statement->execute($data);

    } 
}