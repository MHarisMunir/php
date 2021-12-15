<?php

class employeeSalary{
    public $id;
    public $name;
    public $working_hours = 8;
    public $rate_per_hour = 15;
    public $leavesTaken;
    //public $leaves_taken;

    function salaryCalc($totalDays): int{
        $this->workingDays = $totalDays - $this->leavesTaken;
        $salary = $this->workingDays * $this->rate_per_hour;
        return $salary;
    }

}

$emp1 = new employeeSalary();
$emp1->id = 101;
$emp1->name = "Haris";
$emp1->leavesTaken = 0;
$salary = $emp1->salaryCalc(20);

echo "$emp1->name has worked for $emp1->workingDays and had leaves for $emp1->leavesTaken days
 and his total salary is $salary";

?>