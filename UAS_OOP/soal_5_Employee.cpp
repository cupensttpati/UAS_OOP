class Employee:
    def __init__(self, name, hourlyRate, hoursWorked):
        self.name = name
        self.hourlyRate = hourlyRate
        self.hoursWorked = hoursWorked

    def calculate_salary(self):
        # Metode untuk menghitung gaji total
        total_salary = self.hourlyRate * self.hoursWorked
        return total_salary

# Membuat objek karyawan
employee1 = Employee("John Doe", hourlyRate=15, hoursWorked=40)

# Menghitung total gaji karyawan
total_salary = employee1.calculate_salary()

# Menampilkan total gaji
print(f"Total gaji untuk {employee1.name}: ${total_salary}")
