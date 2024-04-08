<?php
// getBookDetails.php
// This is a placeholder for where you would normally connect to a database and retrieve data
// For this example, we'll return a static JSON response

// Set header to indicate the response is in JSON format
header('Content-Type: application/json');

// Get the book ID from the query string
$bookId = isset($_GET['id']) ? $_GET['id'] : '';

// Static array for demonstration; replace with database query in a real application
$bookDetails = array(
    "book1" => array(
        "title" => "Book Title 1",
        "author" => "Author Name 1",
        "isbn" => "ISBN-1",
        "description" => "Description here",
        "coverImage" => "assets/images/book1.jpg"
    ),
    // ... add more books as needed
);

// Check if the book ID is in our array and return the details
if (array_key_exists($bookId, $bookDetails)) {
    echo json_encode($bookDetails[$bookId]);
} else {
    // Respond with an error message if the book ID wasn't found
    echo json_encode(array("error" => "Book not found."));
}
?>
