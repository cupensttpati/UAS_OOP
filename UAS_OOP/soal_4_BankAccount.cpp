class BankAccount:
    def __init__(self, owner, balance=0):
        self.owner = owner
        self.balance = balance

    def deposit(self, amount):
        # Metode untuk melakukan penyetoran uang
        if amount > 0:
            self.balance += amount
            print(f"{amount} berhasil disetor. Saldo terkini: {self.balance}")
        else:
            print("Jumlah setoran harus lebih dari 0.")

    def withdraw(self, amount):
        # Metode untuk melakukan penarikan uang
        if 0 < amount <= self.balance:
            self.balance -= amount
            print(f"{amount} berhasil ditarik. Saldo terkini: {self.balance}")
        elif amount > self.balance:
            print("Saldo tidak mencukupi untuk melakukan penarikan.")
        else:
            print("Jumlah penarikan harus lebih dari 0.")

    def display_balance(self):
        # Metode untuk menampilkan saldo terkini
        print(f"Saldo terkini untuk pemilik {self.owner}: {self.balance}")

# Membuat objek rekening bank
my_account = BankAccount("John Doe", balance=1000)

# Menampilkan saldo awal
my_account.display_balance()

# Melakukan beberapa penyetoran dan penarikan uang
my_account.deposit(500)
my_account.withdraw(200)
my_account.deposit(1000)

# Menampilkan saldo terkini
my_account.display_balance()
