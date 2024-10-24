<html>
    <body>
     <form action="" method="post">
        Location<input type="text" name="desg" value="<?php if(isset($_POST['desg'])) echo $_POST['desg'];?>"><br>
        Employee Name:<input type="text" name="dn" value="<?php if(isset($_POST['dn'])) echo $_POST['dn'];?>"><br>
        <input type="submit" name="submit" value="save">
     </form>
    <?php
        if(isset($_POST['submit']))
        {
    
            $fname=$_POST['desg'];
            $lname=$_POST['dn'];
            $serverName="localhost";
            $username="root";
            $password="";
            $db="relationship";
            $conn=mysqli_connect($serverName,$username,$password,$db);
            if(!$conn)
            {
                echo"connection failed:". mysqli_connect_error();
            }
            else
            {
                echo"database connect successfully";
            }
            $sql="SELECT ename,dname FROM dept,emp where emp.dno=dept.dno and loc='$fname' and ename='$lname' ";
            $result=mysqli_query($conn,$sql);
            echo"<table border=1>";
            echo"<tr><td>Employee name</td> <td>Department name</td> </tr>";
            if(mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
                    echo"<tr><td>".$row["ename"]."</td><td>".$row["dname"]. "</td></tr>";
                }
            }
            else
            {
                echo"0 results";
            }

        }

    ?>