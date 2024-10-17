<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Constructor</title>
</head>
<body>
    <form action="" method="post">
        Enter Student Roll No: <input type="text" name="rollno" required><br><br>
        Enter Student Name: <input type="text" name="sname" required><br><br>
        Enter Company  Name: <input type="text" name="cname" required><br><br>
        Enter Salary : <input type="text" name="salary" required><br><br>
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
    if(isset($_POST['submit']))
    {
        $rollno = $_POST['rollno'];
        $sname = $_POST['sname'];
        $cname = $_POST['cname'];
        $salary = $_POST['salary'];

        class Student
        {
            public $rollno;
            public $sname;
            public function __construct($rollno,  $sname)
            {
                $this->rollno = $rollno;
                $this->sname = $sname;
            }
            public function display()
            {
                echo "RollNo = ".$this->rollno ."<br>";
                echo "Student Name = ".$this->sname ."<br>";
            }
        }
        class X_Student extends Student
        {
            public $cname;
            public $salary;
            public function __construct($rollno, $sname, $cname, $salary)
            {
                $this->rollno =  $rollno;
                $this->sname = $sname;
                $this->cname = $cname;
                $this->salary = $salary;
            }
            public function show()
            {
                echo "Company Name = ".$this->cname ."<br>";
                echo "Salary = ".$this->salary ."<br>";
            }
        }

        $s1 = new X_Student($rollno, $sname, $cname, $salary);
        $s1->display();
        $s1->show(); 
        
    }
    ?>
</body>
</html>