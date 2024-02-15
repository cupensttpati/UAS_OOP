<?php
class Book {
    public $title;
    public $author;
    public $year;

    function __construct($title, $author, $year) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
    }

    function displayInfo() {
        echo "Judul: " . $this->title . "<br>";
        echo "Penulis: " . $this->author . "<br>";
        echo "Tahun Terbit: " . $this->year . "<br>";
    }

    function isAntique() {
        return $this->year < 2000;
    }
}

// Membuat objek buku
$myBook = new Book("Harry Potter", "J.K. Rowling", 1997);

// Menampilkan informasi lengkap buku dan status "kuno"
$myBook->displayInfo();
echo "Status: " . ($myBook->isAntique() ? "Kuno" : "Tidak Kuno") . "<br>";
?>