<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
    <!-- Employee(Eid,ename,salary,desg,email) -->
</head>
<body>
    <form action="" method="post">
        Enter Employee ID : <input type="text" name="eid" value="<?php if(isset($_POST['eid'])) echo $_POST['eid']; ?>" required><br>
        Enter Employee Name : <input type="text" name="ename" value="<?php if(isset($_POST['ename'])) echo $_POST['ename']; ?>" required><br>
        Enter Employee salary : <input  type="number" name="salary" value="<?php if(isset($_POST['salary'])) echo $_POST['salary']; ?>" required><br>
        Enter Employee Designation : <input type="text" name="desg" value="<?php if(isset($_POST['desg'])) echo $_POST['desg']; ?>" required><br>
        Enter Employee Email : <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" required><br>
        <input type="submit" name="submit">
    </form>

    <?php
    if(isset($_POST['submit']))
    {
        $eid =  $_POST['eid'];
        $ename = $_POST['ename'];
        $salary = $_POST['salary'];
        $designation = $_POST['desg'];
        $email = $_POST['email'];

        class Employee 
        {
            public $eid;
            public $ename;
            public $salary;
            public $designation;
            public  $email;

            function accept($eid, $ename, $salary, $designation, $email)
            {
                $this->eid = $eid;
                $this->ename = $ename;
                $this->salary = $salary;
                $this->designation =  $designation;
                $this->email = $email;

            }

            function display()
            {
                echo  "Employee ID : $this->eid <br>";
                echo  "Employee Name : $this->ename <br>";
                echo  "Employee Salary : $this->salary <br>";
                echo  "Employee Designation : $this->designation <br>";
                echo  "Employee Email : $this->email <br>";
            }

        }
        $e1 = new Employee();
        $e1->accept($eid, $ename, $salary, $designation, $email);
        $e1->display();

        echo "<br>";

        $e2 = new Employee();
        $e2->accept(201, "Rahul", 50000, "Software Engineer",  "rahul@gmail.com");
        $e2->display();

        echo  "<br>";

        $e3 = new  Employee();
        $e3->accept(301, "Rohan", 60000, "Data Scientist",  "rohan@gmail.com");
        $e3->display();

    }
    ?>

</body>
</html>