<?php
class Car {
    public $brand;
    public $year;
    public $speed;

    function __construct($brand, $year, $speed) {
        $this->brand = $brand;
        $this->year = $year;
        $this->speed = $speed;
    }

    function calculateTime($distance) {
        if ($this->speed == 0) {
            return "Mobil sedang berhenti, waktu tidak dapat dihitung.";
        } else {
            $time = $distance / $this->speed;
            return "Waktu yang dibutuhkan untuk menempuh $distance km dengan kecepatan $this->speed km/jam adalah $time jam.";
        }
    }
}

// Membuat objek mobil
$myCar = new Car("Toyota", 2022, 60);

// Menghitung waktu yang dibutuhkan untuk menempuh jarak 100 km
echo $myCar->calculateTime(100) . "<br>";
?>