<?php 

require_once dirname(__FILE__).'/BaseService.php';
require_once dirname(__FILE__).'/../dao/BookDao.class.php';

class BookService extends BaseService {

    public function __construct(){
        $this->bookDao = new BookDao();
    }

    public function add_book($book){
        $book = $this->bookDao->add_book([
            "title" => $book["title"],
            "author" => $book["author"],
            "genre" => $book["genre"]
        ]);
    }

    public function get_book_by_id($book_id){
        return $this->bookDao->get_book_by_id($book_id);
    }

    public function get_all_books(){
        return $this->bookDao->get_all_books();
    }

    public function update_book($book_id, $book){
        return $this->bookDao->update_book($book_id, $book);
    }

    public function delete_book($book_id){
        $this->bookDao->delete_book($book_id);
    }

}
?>
