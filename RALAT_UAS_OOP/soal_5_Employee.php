<?php
class Employee {
    public $name;
    public $hourlyRate;
    public $hoursWorked;

    function __construct($name, $hourlyRate, $hoursWorked) {
        $this->name = $name;
        $this->hourlyRate = $hourlyRate;
        $this->hoursWorked = $hoursWorked;
    }

