<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Details</title>
</head>
<body>
    <form action="" method="post">
        Enter Vehicle ID: <input type="text" name="vid" value="<?php if(isset($_POST['vid'])) echo $_POST['vid']; ?>" required><br><br>
        Enter Vehicle Name: <input type="text" name="vname" value="<?php if(isset($_POST['vname'])) echo $_POST['vname']; ?>" required><br><br>
        Enter Company Name: <input type="text" name="compname" value="<?php if(isset($_POST['compname'])) echo $_POST['compname']; ?>" required><br><br>
        <select id="color" name="color" required>
            <option value="">Select a color</option>
            <option value="Red" <?php if(isset($_POST['color']) && $_POST['color'] == 'Red') echo 'selected'; ?>>Red</option>
            <option value="Black" <?php if(isset($_POST['color']) && $_POST['color'] == 'Black') echo 'selected'; ?>>Black</option>
            <option value="White" <?php if(isset($_POST['color']) && $_POST['color'] == 'White') echo 'selected'; ?>>White</option>
        </select><br><br>
        Enter Owner Name: <input type="text" name="ownername" value="<?php if(isset($_POST['ownername'])) echo $_POST['ownername']; ?>" required><br><br>
        Enter Price: <input type="text" name="price" value="<?php if(isset($_POST['price'])) echo $_POST['price']; ?>" required><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if(isset($_POST['submit'])) {
        $vid = $_POST['vid'];
        $vname = $_POST['vname'];
        $compname = $_POST['compname'];
        $color = $_POST['color'];
        $ownername = $_POST['ownername'];
        $price = $_POST['price'];

        class Vehicle {
            public $vid;
            public $vname;
            public $compname;
            public $color;
            public $ownername;
            public $price;

            function accept($vid, $vname, $compname, $color, $ownername, $price) {
                $this->vid = $vid;
                $this->vname = $vname;
                $this->compname = $compname;
                $this->color = $color;
                $this->ownername = $ownername;
                $this->price = $price;
            }

            function display() {
                echo "Vehicle ID: $this->vid<br>";
                echo "Vehicle Name: $this->vname<br>";
                echo "Company Name: $this->compname<br>";
                echo "Color: $this->color<br>";
                echo "Owner Name: $this->ownername<br>";
                echo "Price: $this->price<br>";
            }
        }

        $v1 = new Vehicle();
        $v1->accept($vid, $vname, $compname, $color, $ownername, $price);
        $v1->display();

        echo "Vehicle Details Saved Successfully<br>";

        echo "<br>";




    }
    ?>
</body>
</html>
