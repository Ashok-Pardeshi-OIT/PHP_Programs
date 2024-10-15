<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Demo</title>
</head>
<body>
    <form action="" method="post">
        Enter student name :  <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>"> <br>
        Enter student rollno :  <input type="text" name="rollno" value="<?php if(isset($_POST['rollno'])) echo $_POST['rollno']; ?>"> <br>
        Enter student per :  <input type="text" name="per" value="<?php if(isset($_POST['per'])) echo $_POST['per']; ?>"> <br>
        <input type="submit" name="submit">
    </form>
    <?php
    if(isset($_POST['submit']))
    {
        $sn = $_POST['name'];
        $r = $_POST['rollno'];
        $p = $_POST['per'];

        class Student 
        {
            public $name;
            public $rollno;
            public $per;

            function accept($name, $rollno, $per)
            {
               $this->name = $name;
               $this->rollno = $rollno;
               $this->per = $per;
            }

            function display()
            {
                echo "Name : $this->name <br>";
                echo "RollNo : $this->rollno <br>";
                echo "Percentage : $this->per <br>";
            }
        }

        $s1 = new Student();
        $s1->accept($sn, $r, $p);
        $s1->display();

        echo "<br>";

        $s2 = new  Student();
        $s2->accept("Rahul", "12", "85.75");
        $s2->display();

        echo "<br>";

        $s3 = new Student();
        $s3->accept("Rohan", "13", "90.74");
        $s3->display();

        echo "<br>";

    }
    ?>
</body>
</html>
