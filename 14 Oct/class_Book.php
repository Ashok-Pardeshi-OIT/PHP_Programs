<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details</title>
</head>
<body>
    <form action="" method="post">
        Enter Book ID: <input type="text" name="bid" value="<?php if(isset($_POST['bid'])) echo $_POST['bid']; ?>" required><br>
        Enter Book Name: <input type="text" name="bname" value="<?php if(isset($_POST['bname'])) echo $_POST['bname']; ?>" required><br>
        Enter  Author: <input type="text" name="author" value="<?php if(isset($_POST['author'])) echo $_POST['author']; ?>" required><br>
        Enter  Price: <input type="number" name="price" value="<?php if(isset($_POST['price'])) echo $_POST['price']; ?>" required><br>
        <input type="submit" name="submit" value="submit">
    </form>

    <?php
    if(isset($_POST['submit']))
    {
        $bid = $_POST['bid'];
        $bname = $_POST['bname'];
        $author =  $_POST['author'];
        $price =  $_POST['price'];

        class Book
        {
            public $bid;
            public $bname;
            public $author;
            public $price;


            function accept($bid, $bname, $author, $price) 
            {
                $this->bid = $bid;
                $this->bname = $bname;
                $this->author = $author;
                $this->price = $price;  
            }

            function  display()
            {
                echo "Book ID: $this->bid <br>";
                echo "Book Name: $this->bname <br>";
                echo "Author: $this->author <br>";
                echo "Price: $this->price <br>";

            }

        }
        $b1 = new Book();
        $b1->accept($bid,$bname, $author, $price);
        $b1->display();

        echo "<br>";

        $b2 = new Book();
        $b2->accept(2, "Python Programming", "John Doe", 500);
        $b2->display();

        echo "<br>";

        $b3 = new Book();
        $b3->accept(3, "Data Science", "Jane Doe", 600);
        $b3->display();

        echo "<br>";

    }
       
    ?>

</body>
</html>