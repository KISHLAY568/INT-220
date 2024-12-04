<?php

$inventory = [];


function addBook(&$inventory, $title, $author, $price, $quantity) {
    $inventory[] = [
        'title' => $title,
        'author' => $author,
        'price' => $price,
        'quantity' => $quantity
    ];
}


function updateBookPrice(&$inventory, $title, $newPrice) {
    foreach ($inventory as &$book) {
        if ($book['title'] === $title) {
            $book['price'] = $newPrice;
            return true;
        }
    }
    return false;
}


function calculateDiscount($price, $discountPercentage) {
    return $price - ($price * ($discountPercentage / 100));
}

function generateInventoryReport($inventory) {
    echo "Inventory Report:\n";
    foreach ($inventory as $book) {
        echo "Title: {$book['title']},  Author: {$book['author']}, Price: {$book['price']},     Quantity: {$book['quantity']}\n";
        echo "<br>";
    }
}


addBook($inventory, "Book A", "Author A", 10.99, 100);
addBook($inventory, "Book B", "Author B", 15.99, 50);


updateBookPrice($inventory, "Book A", 12.99);


$discountedPrice = calculateDiscount(12.99, 10);
echo "Discounted Price: $discountedPrice\n";
echo "<br>";


generateInventoryReport($inventory);

?>