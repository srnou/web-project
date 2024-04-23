<?php 

Flight::route('POST /books/add', function(){
    $data = Flight::request()->data->getData();
    Flight::bookService()->add_book($data);
    Flight::json(["message"=> "Book added successfully"]);
});

Flight::route('GET /books/@book_id', function($book_id){
    Flight::json(Flight::bookService()->get_book_by_id($book_id));
});

Flight::route('GET /books', function(){
    Flight::json(Flight::bookService()->get_all_books());
});

Flight::route('PUT /books/@book_id', function($book_id){
    $data = Flight::request()->data->getData();
    Flight::bookService()->update_book($book_id, $data);
    Flight::json(["message"=> "Book updated successfully"]);
});

Flight::route('DELETE /books/@book_id', function($book_id){
    Flight::bookService()->delete_book($book_id);
    Flight::json(["message"=> "Book deleted successfully"]);
});

?>
