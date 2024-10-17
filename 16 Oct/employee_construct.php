<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Constructor</title>
</head>
<body>
    <form action="" method="post">
        Enter  Employee Code: <input type="text" name="emp_code" required><br><br>
        Enter Employee Name: <input type="text" name="emp_name" required><br><br>
        Enter Employee Designation : <input type="text" name="emp_designation" required><br><br>
        Enter Employee Account Number: <input type="text"  name="emp_account_number" required><br><br>
        Enter Employee Joining Date: <input type="date" name="emp_joining_date" required><br><br>
        Enter Employee Basic_Pay : <input type="text" name="emp_basic_pay" required><br><br>
        Enter Employee Earning : <input type="text" name="emp_earning" required><br><br>
        Enter Employee Deduction : <input type="text" name="emp_deduction" required><br><br>
         <input type="submit" name="submit" value="submit">
    </form>

    <?php
    if(isset($_POST['submit']))
    {
        $emp_code = $_POST['emp_code'];
        $emp_name = $_POST['emp_name'];
        $emp_designation = $_POST['emp_designation'];
        $emp_account_number = $_POST['emp_account_number'];
        $emp_joining_date = $_POST['emp_joining_date'];
        $emp_basic_pay = $_POST['emp_basic_pay'];
        $emp_earning = $_POST['emp_earning'];
        $emp_deduction = $_POST['emp_deduction'];

        class  Employee
        {
            public $emp_code;
            public $emp_name;
            public $emp_designation;

            public function __construct($emp_code, $emp_name, $emp_designation)
            {
                $this->emp_code = $emp_code;
                $this->emp_name = $emp_name;
                $this->emp_designation = $emp_designation;
            }

            public function view()
            {
                echo "Employee Code: $this->emp_code <br>";
                echo "Employee Name: $this->emp_name <br>";
                echo "Employee Designation: $this->emp_designation <br>";
            }


        }
        class Employee_Account extends Employee
        {
            public $emp_account_number;
            public $emp_joining_date;

            public function  __construct($emp_code, $emp_name, $emp_designation, $emp_account_number, $emp_joining_date)
            {
                $this->emp_code = $emp_code;
                $this->emp_name = $emp_name;
                $this->emp_designation = $emp_designation;
                $this->emp_account_number = $emp_account_number;
                $this->emp_joining_date = $emp_joining_date;
            }

            public function display()
            {
                echo "Employee Account Number : $this->emp_account_number <br>";
                echo "Employee Joining Date: $this->emp_joining_date <br>";

            }

        }

        class Employee_Salary extends Employee_Account
        {
            public $emp_basic_pay;
            public $emp_earning;
            public  $emp_deduction;

            public function __construct($emp_code, $emp_name, $emp_designation, $emp_account_number , $emp_joining_date, $emp_basic_pay, $emp_earning, $emp_deduction)
            {
                $this->emp_code = $emp_code;
                $this->emp_name = $emp_name;
                $this->emp_designation = $emp_designation;
                $this->emp_account_number = $emp_account_number;
                $this->emp_joining_date = $emp_joining_date;
                $this->emp_basic_pay = $emp_basic_pay;
                $this->emp_earning = $emp_earning;
                $this->emp_deduction = $emp_deduction;
            }

            public function display2()
            {
                echo  "Employee Basic Pay : $this->emp_basic_pay <br>";
                echo  "Employee Earning : $this->emp_earning <br>";
                echo  "Employee Deduction : $this->emp_deduction <br>";

            }

        }
        $e1 = new Employee_Salary(101, "Ashok", "Manager", "1234567890", "2024-11-01", 90000, 70000, 10000);
        $e1->view();
        $e1->display();
        $e1->display2();

        echo  "<br>";

        $e2 = new Employee_Salary($emp_code, $emp_name, $emp_designation, $emp_account_number , $emp_joining_date, $emp_basic_pay, $emp_earning, $emp_deduction);
        $e2->view();
        $e2->display();
        $e2->display2();
       
    }
    ?>
</body>
</html>