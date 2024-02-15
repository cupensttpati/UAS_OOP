<?php
class Student {
    public $name;
    public $age;
    public $score;

    function __construct($name, $age, $score) {
        $this->name = $name;
        $this->age = $age;
        $this->score = $score;
    }

    function displayInfo() {
        echo "Nama: " . $this->name . "<br>";
        echo "Usia: " . $this->age . " tahun<br>";
        echo "Nilai: " . $this->score . "<br>";
    }
}

// Membuat objek mahasiswa
$myStudent = new Student("John Doe", 20, 85);

// Menampilkan informasi lengkap mahasiswa
$myStudent->displayInfo();
?>
