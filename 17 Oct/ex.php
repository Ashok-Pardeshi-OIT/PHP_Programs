<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <?php for ($i = 1; $i <= 6; $i++): ?>
            <h3>Manager <?php echo $i; ?></h3>
            Enter Employee ID : <input type="text" name="emp_id[]"> <br>
            Enter Employee Name : <input type="text" name="emp_name[]"> <br>
            Enter Department : <input type="text" name="emp_dept[]"> <br>
            Enter Salary : <input type="text" name="emp_sal[]"> <br>
            Enter Bonus : <input type="text" name="emp_bonus[]"> <br>
            <br>
        <?php endfor; ?>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if(isset($_POST['submit'])) {
        $emp_ids = $_POST['emp_id'];
        $emp_names = $_POST['emp_name'];
        $emp_depts = $_POST['emp_dept'];
        $emp_sals = $_POST['emp_sal'];
        $emp_bonuses = $_POST['emp_bonus'];

        class Employee {
            private $emp_id;
            private $emp_name;
            private $emp_dept;
            private $emp_sal;

            public function __construct($emp_id, $emp_name, $emp_dept, $emp_sal) {
                $this->emp_id = $emp_id;
                $this->emp_name = $emp_name;
                $this->emp_dept = $emp_dept;
                $this->emp_sal = $emp_sal;
            }

            public function getSalary() {
                return $this->emp_sal;
            }

            public function display() {
                echo "Employee ID : $this->emp_id <br>";
                echo "Employee Name : $this->emp_name <br>";
                echo "Department : $this->emp_dept <br>";
                echo "Salary : $this->emp_sal <br>";
            }
        }

        class Manager extends Employee {
            private $emp_bonus;

            public function __construct($emp_id, $emp_name, $emp_dept, $emp_sal, $emp_bonus) {
                parent::__construct($emp_id, $emp_name, $emp_dept, $emp_sal);
                $this->emp_bonus = $emp_bonus;
            }

            public function getTotalSalary() {
                return $this->getSalary() + $this->emp_bonus;
            }

            public function display() {
                parent::display();
                echo "Bonus : $this->emp_bonus <br>";
                echo "Total Salary : " . $this->getTotalSalary() . "<br>";
            }
        }

        // Creating an array to store Manager objects
        $managers = [];
        for ($i = 0; $i < 6; $i++) {
            $managers[] = new Manager($emp_ids[$i], $emp_names[$i], $emp_depts[$i], $emp_sals[$i], $emp_bonuses[$i]);
        }

        // Finding the manager with the maximum total salary
        $maxManager = $managers[0];
        foreach ($managers as $manager) {
            if ($manager->getTotalSalary() > $maxManager->getTotalSalary()) {
                $maxManager = $manager;
            }
        }

        // Displaying the details of the manager with the maximum total salary
        echo "Manager with the maximum total salary:<br>";
        $maxManager->display();
    }
    ?>
</body>
</html>
