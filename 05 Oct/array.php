<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Questions</title>
</head>
<body>
    <form method="post">
    Enter array elements (separated by commas) <input type="text" name="rds"><br>
    <input type="submit" name="submit">
</form>

    <?php
    if (isset($_POST['submit'])) 
{
    $r = $_POST['rds'];
    $a = explode(",", $r);
    $sum = 0;
    echo "Array elements are:<br>";
    foreach ($a as $value) 
    {
        $sum = $sum+(int)$value; // Convert to integer
        echo "$value<br>"; // Print the integer value
    }
    echo "Sum = $sum<br>";
    echo "<br>Reverse Array elements are:<br>";
    for ($i = count($a) - 1; $i >= 0; $i--) 
    {
        echo "$a[$i]<br>";
    }

    echo"Max Min from the array: <br>";    
    $max=$min=$a[0];
	for($i=1;$i<count($a);$i++)
	{
		if($a[$i]>$max)
		{
			$max=$a[$i];
			
		}
		if($a[$i]<$min)
		{
			$min=$a[$i];
		}
	}
    echo  "Max element is $max<br>";
    echo "Min element is $min<br>";

    echo"Prime Numbers : <br>";
    for($i=0;$i<count($a);$i++)
    {
        $n = $a[$i];
        $div = 0;
        for($j=2;$j<=intval($n/2);$j++)
        {
            if($n%$j==0)
            {
                $div=1;
                break;
            }
        }
        if($div==0)
        {
            echo"$a[$i] <br>";
        }
    }

    echo "Perfect  Numbers : <br>";

    for($i=0;$i<count($a);$i++)
		{

			$n=$a[$i];
			$sum=0;
			for($j=1;$j<=intval($n/2);$j++)
			{
				if($n%$j==0)
				{
					$sum=$sum+$j;
				}
			}
			if($n==$sum)
				echo "$a[$i] <br>";		
		}

    echo "Pronic Numbers :  <br>";

    for($i=0;$i<count($a);$i++)
		{

			$n=$a[$i];
			$sum=0;
			for($j=1;$j<=($n/2);$j++)
			{
				if($n==($j*($j+1)))
				{
					$sum=1;
					break;
				}
			}
			if($sum==1)
				echo "$a[$i] <br>";		
		}

// -------------------------------------------------------------------
        function factorial($num) {
            if ($num == 0 || $num == 1) {
                return 1;
            } else {
                return $num * factorial($num - 1);
            }
        }
        
        echo "Strong Numbers : <br>";
        
        for ($i = 0; $i < count($a); $i++) {
            $n = $a[$i];
            $sum = 0;
            $temp = $n;
        
            while ($temp != 0) {
                $rem = $temp % 10;
                $sum += factorial($rem);
                $temp = intval($temp / 10);
            }
        
            if ($n == $sum) {
                echo "$n <br>";
            }
        }
        // I am trying to find the numbers in the array that are perfect squares, prime numbers, and
        // strong numbers. I am using a for loop to iterate through the array and check each number
        // against the conditions. However, the code is not working as expected. Can you please help me
        // to identify the issue and provide a solution?


        echo "Palindrome Number  : <br>";
        for($i=0;$i<count($a);$i++)
		{

			$n=$a[$i];
			$sum=0;
			while($n>0)
			{
				$g=$n%10;
				$n=intval($n/10);
				$sum=($sum*10)+$g;
			}
			if($sum==$a[$i])
				echo "$a[$i] <br>";		
		}


}              
?>  
</body>
</html>
