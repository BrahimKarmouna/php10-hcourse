
<?php
require('./functions.php');
require('./Database.php');
require('./response.php');



// Associative array of books
// $books = [
//     [
//         'title' => 'The Great Gatsby',
//         'author' => 'F. Scott Fitzgerald',
//         'year' => 1925,
//         'genre' => 'Fiction',
//         'price' => 10.99,
//         'purchaseUrl' => 'https://www.amazon.com/Brave-New-World-Aldous-Huxley/dp/0060850523'
//     ],
//     [
//         'title' => 'To Kill a Mockingbird',
//         'author' => 'Harper Lee',
//         'year' => 1960,
//         'genre' => 'Fiction',
//         'price' => 7.99,
//         'purchaseUrl' => 'https://www.amazon.com/Brave-New-World-Aldous-Huxley/dp/0060850523'
//     ],
//     [
//         'title' => '1984',
//         'author' => 'George Orwell',
//         'year' => 1949,
//         'genre' => 'Dystopian',
//         'price' => 8.99,
//         'purchaseUrl' => 'https://www.amazon.com/Brave-New-World-Aldous-Huxley/dp/0060850523'
//     ],
//     [
//         'title' => 'Brave New World',
//         'author' => 'Aldous Huxley',
//         'year' => 1932,
//         'genre' => 'Dystopian',
//         'price' => 9.99,
//         'purchaseUrl' => 'https://www.amazon.com/Brave-New-World-Aldous-Huxley/dp/0060850523'
//     ]
// ];

include('./views/index.vue.php');


//   $heading =$_REQUEST;

// function filter($items,$fn){
//     $filteredItems=[] ;
//     foreach($items as $item){
//         if( $fn($item)){
//             $filteredItems[]=$item;
//     }
// }
//                     return $filteredItems;

// }
    

//     $filteredBooksByGenre = filter($books,function ($book){
//     return  $book['genre']=='Dystopian';
        
//     });
//     print_r($filteredBooksByGenre);
 
?>
