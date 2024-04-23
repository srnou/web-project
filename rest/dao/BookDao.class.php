<?php

require_once __DIR__.'/BaseDao.class.php';

class BookDao extends BaseDao {

  /**
   * Constructor of dao class
   */
  public function __construct(){
    parent::__construct("Book");
  }

  public function get_book_by_id($book_id){
    return $this->query_unique("SELECT * FROM Book WHERE book_id = :book_id", ['book_id' => $book_id]);
  }

  public function add_book($book){
    return $this->add($book);
  }

  public function get_all_books(){
    return $this->get_all();
  }

  public function update_book($book_id, $book){
    return $this->update($book_id, $book);
  }

  public function delete_book($book_id){
    $this->delete($book_id);
  }

}
?>
