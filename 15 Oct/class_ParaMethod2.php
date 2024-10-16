<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ParaMethod Demo 2</title>
</head>
<body>
    <form action="" method="post">
    Enter a number: <input type="text" name="num" value="<?php if(isset($_POST['num'])) echo $_POST['num']; ?>"> <br> <br>
    Enter a base for power calculation: <input type="text" name="base"value="<?php if(isset($_POST['base'])) echo $_POST['base']; ?>"> <br><br>
    <input type="submit" name="submit" value="submit">
    </form>

    <?php
    if(isset($_POST['submit']))
    {
        $n = $_POST['num'];
        $x = $_POST['base'];

        class ParaMethodDemo2 
        {	
            public $flag = 0, $n1, $n, $x, $sum = 0, $p, $f1 = 1, $i;

            function accept($n)
            {
                $this->n = $n;
            }

            function pattern()
            {
                for ($i = 1; $i <= $this->n; $i++)
                {
                    for ($j = 1; $j <= $i; $j++)
                    {
                        echo "$j ";
                    }
                    echo "<br>";	
                }
            }

            function prime()
            {      
                $this->flag = 0;
                for ($i = 2; $i <= ($this->n / 2); $i++)
                {
                    if ($this->n % $i == 0)
                    {
                        $this->flag = 1;
                        break;
                    }
                }
                
                if ($this->flag == 0)
                    echo "Number is prime<br>";
                else
                    echo "Number is not prime<br>";
            }

            function pal()
            {
                $this->p = $this->n;
                $this->sum = 0;
                while ($this->p > 0)
                {
                    $this->n1 = $this->p % 10;
                    $this->p = (int)($this->p / 10);
                    $this->sum = ($this->sum * 10) + $this->n1;
                }
                
                if($this->sum == $this->n)
                    return "Number is palindrome<br>";
                else
                    return "Number is not palindrome<br>";
            }
        
            function power($x)
            {
                $this->x = $x;
                $this->f1 = 1;
                for ($i = 1; $i <= $this->n; $i++)
                {
                    $this->f1 *= $this->x;
                }
                return $this->f1;
            }
        }

        $a1 = new ParaMethodDemo2();
        $a1->accept($n);
        $a1->pattern();
        $a1->prime();
        echo " " . $a1->pal();
        $f1 = $a1->power($x);
        echo " Power: " . $f1;
    }
    ?>
</body>
</html>
