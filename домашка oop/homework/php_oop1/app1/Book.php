<?php

namespace app1;

class Book
{
    public string $title;
    public string $author;
    public int $yearPublishing;
    public function __construct($title, $author, $yearPublishing){
        $this->title = $title;
        $this->author = $author;
        $this->yearPublishing = $yearPublishing;
    }

}

$book1 = new Book('Воскресенье ', 'Толстой ', 1899);
$book2 = new Book('Гордость и предубеждение ', 'Остин ', 1813);

echo $book1->title . $book1->author . $book1->yearPublishing . "\n";
echo $book2->title . $book2->author . $book2->yearPublishing;

//Создайте класс "Книга", который будет иметь свойства "название", "автор" и "год издания".
// Создайте объекты этого класса для нескольких различных книг и выведите информацию о каждой книге на экран.
//