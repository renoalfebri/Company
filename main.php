<?php
    include('company.php');
    include('department.php');
    include('employee.php');

    $company = new company;
    $department = new department;
    $employee = new employee;

    echo "DATA KARYAWAN"."<p>";

    $company->setNama('PT Yamaha Indonesia');
    $department->setdNama('Mesin');
    $employee->seteNama('Harianto');
    $employee->setTitle('Kepala Bengkel');
    $employee->setSalary('Rp. 5,000,000.00');

    echo "Nama Perusahaan : ".$company->getNama()."<br>";
    echo "Departemen : ".$department->getdNama()."<br>";
    echo "Karyawan : ";
    echo "<ul>";
    echo "<li>"."Nama   : ".$employee->geteNama()."</li>"."<br>";
    echo "<li>"."Jabatan   : ".$employee->getTitle()."</li>"."<br>";
    echo "<li>"."Gaji Bulanan   : ".$employee->getSalary()."</li>"."<br>";
    echo "</ul>";
?>