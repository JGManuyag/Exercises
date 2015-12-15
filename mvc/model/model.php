<?php

include_once("model/Book.php");  
  
class Model {  
    public function getBookList()  
    {  
        return array(  
            "Fault in our stars" => new Book("Fault in our stars", "J. Green", "Drama"),  
            "This books loves you" => new Book("This books loves you", "F. Kjellberg", "Comedy"),  
            "Harry Potter" => new Book("Harry Potter", "JK. Rowling", "Mystery")  
        );  
    }  
      
    public function getBook($title)  
    {  
        $allBooks = $this->getBookList();  
        return $allBooks[$title];  
    }  
      
      
}  

?>