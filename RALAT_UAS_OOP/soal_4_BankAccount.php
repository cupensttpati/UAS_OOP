<?php
class BankAccount {
    public $owner;
    public $balance;

    function __construct($owner, $balance = 0) {
        $this->owner = $owner;
        $this->balance = $balance;
    }

    function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "$amount berhasil disetor. Saldo terkini: $this->balance<br>";
        } else {
            echo "Jumlah setoran harus lebih dari 0.<br>";
        }
    }

    function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            echo "$amount berhasil ditarik. Saldo terkini: $this->balance<br>";
        } elseif ($amount > $this->balance) {
            echo "Saldo tidak mencukupi untuk melakukan penarikan.<br>";
        } else {
            echo "Jumlah penarikan harus lebih dari 0.<br>";
        }
    }

    function displayBalance() {
        echo "Saldo terkini untuk pemilik $this->owner: $this->balance<br>";
    }
}

// Membuat objek rekening bank
$myAccount = new BankAccount("John Doe", 1000);

// Menampilkan saldo awal
$myAccount->displayBalance();

// Melakukan beberapa penyetoran dan penarikan uang
$myAccount->deposit(500);
$myAccount->withdraw(200);
$myAccount->deposit(1000);

// Menampilkan saldo terkini
$myAccount->displayBalance();
?>
