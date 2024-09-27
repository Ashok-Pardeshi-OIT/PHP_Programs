<?php
$number = $_POST['num'];

$ch = $_POST['rbtn'];

switch($ch)
{
    case 1:
        for($i=1;$i<=$number;$i++)//row
        {
            for($j=1;$j<=$i;$j++)//column
            {
                echo"$j ";
            }
        echo "<br>";

        } 
    break; 

    case 2:
        for($i=1;$i<=$number;$i++)//row
        {
            for($j=1;$j<=$i;$j++)//column
            {
                echo " $i";
            }
            echo "<br>";
        }
    break;

    case 3:
        for($i=1;$i<=$number;$i++)
        {
            for($j=1;$j<=$i;$j++)
            {
                echo " *";
            }
            echo "<br>";
        }
    break;

    case 4:
        for($i=1;$i<=$number;$i++)
        {
            for($j=1;$j<=$i;$j++)
            {
                echo " $";
            }
            echo "<br>";
        }
    break;

    case 5:
        $k=1;
        for($i=1;$i<=$number;$i++)
        {
            for($j=1;$j<=$i;$j++)
            {
                echo " ".$k++;
            }
            echo "<br>";
        }
    break;

    case 6:
        $k=1;
        for($i=1;$i<=$number;$i++)
        {
            for($j=1;$j<=$i;$j++)
            {
                echo " ".$k;
                $k=$k+2;
            }
            echo "<br>";
        }
    break;
    

    case 7:
        $ch=64;
        for($i=1;$i<=$number;$i++)//row
        {
            for($j=1;$j<=$i;$j++)//column
            {
                echo" ".chr($ch+$j);

            }   
            echo"<br>";
        }
    break;

    case 8:
        $ch=64;
        for($i=1;$i<=$number;$i++)//row
        {
            for($j=1;$j<=$i;$j++)//column
            {
                echo " ".chr($ch+$i);
            }
            echo"<br>";
        }
    break;

    case 9:
        $ch=64;
        for($i=1;$i<=$number;$i++)//row
        {
            for($j=1;$j<=$i;$j++)//column
            {
                echo " ".chr(++$ch);
            }
            echo"<br>";
        }
    break;

    case 10:
        $ch=96;
        for($i=1;$i<=$number;$i++)//row
        {
            for($j=1;$j<=$i;$j++)//column
            {
                echo " ".chr($ch+$j);
            }
            echo"<br>";
        }
    break;

    case 11:
        $ch=96;
        for($i=1;$i<=$number;$i++)//row
        {
            for($j=1;$j<=$i;$j++)//column
            {
                echo " ".chr($ch+$i);
            }
            echo "<br>";
        }
    break;

    case 12:
        $ch=97;
        for($i=1;$i<=$number;$i++)//row
        {
            for($j=1;$j<=$i;$j++)//column
            {
                echo " ".chr($ch++);
            }
            echo "<br>";
        }
    break;

    case 13:
        $small=96;
        $capital=64;
        for($i=1;$i<=$number;$i++)//row
        {
            for($j=1;$j<=$i;$j++)//column
            {
                echo" ".chr($capital+$j).chr($small+$j);
            }
            echo"<br>";
        }
    break;

    case 14:
        $small=96;
        $capital=64;
        for($i=1;$i<=$number;$i++)//row
        {
            for($j=1;$j<=$i;$j++)//column
            {
                echo" ".chr($capital+$i).chr($small+$i);
            }
            echo"<br>";
        }
    break;

    case 15:
        for($i=$number;$i>=1;$i--)//row
        {
            for($j=1;$j<=$i;$j++)//column
            {
                echo"$j ";
            }
            echo"<br>";
        }
    break;

    case 16:
        $ch=96;
        for($i=1;$i<=$number;$i++ )//row
        {
            for($j=1;$j<=$i;$j++)//column
            {
                echo" ".chr($ch+$j);
            }
            echo"<br>";
        }
        for($i=$number-1;$i>=1;$i--)//row
        {
            for($j=1;$j<=$i;$j++)//column
            {
                echo" ".chr($ch+$j);
            }
            echo"<br>";
        }
    break;

    case 17:
        for($i=1;$i<=$number;$i++)
        {
            for($j=1;$j<=$number;$j++)
            {
                echo "$j ";
            }
            echo "<br>";
        }
    break;

    case 18:
        for($i=1;$i<=$number;$i++)
        {
            for($j=1;$j<=$i;$j++)
            {
                if($j%2==1)
                echo"1 ";
                else
                echo"0 ";
            }
            echo"<br>";
        }
    break;

    case 19:
        for($i=1;$i<=$number;$i++)
        {
            for($j=1;$j<=$i;$j++)
            {
                if($i%2==1)
                echo"1 ";
                else
                echo"0 ";
            }
            echo"<br>";
        }
    break;


    case 20:
       
        for ($i = 1; $i <= $number; $i++) 
        {
            for ($j = 1; $j <= $number; $j++) 
            {
                if ($i % 2 == 0) 
                { // Even row
                    if ($j % 2 == 0) 
                    {
                        echo "* ";
                    } 
                    else 
                    {
                        echo "# ";
                    }
                } 
                else 
                { // Odd row
                    if ($j % 2 == 0) 
                    {
                        echo "# ";
                    } else 
                    {
                        echo "* ";
                    }
                }
            }
            echo "<br>";
        }

    case 21:
        for($i=1;$i<=$number;$i++)
        {
            for($k=$number;$k>$i;$k--)//spaces
            {
                echo"&nbsp;&nbsp;";
            }
            for($j=1;$j<=$i;$j++)
            {
                echo "*&nbsp;&nbsp;";
            }
            echo"<br>";
        }
    break;

    case 22:
        for($i=1;$i<=$number;$i++)
        {
            for($k=$number;$k>$i;$k--)//spaces
            {
                echo"&nbsp;&nbsp;";
            }
                for($j=1;$j<=$i;$j++)
                {
                    echo "#&nbsp;&nbsp;";
                }
                echo"<br>";
         }
    break;

    case 23:
        for($i=$number;$i>=1;$i--)
        {
            for($k=$number;$k>$i;$k--)//spaces
            {   
                echo"&nbsp;&nbsp;";
            }
                for($j=1;$j<=$i;$j++)
                {   
                    echo"&nbsp;&nbsp;* ";
                }
                echo"<br>";
        }  
    break;

    case 24:
        for($i=1;$i<=$number;$i++)
        {
            for($k=$number;$k>$i;$k--)//spaces
            {
                echo"&nbsp;&nbsp;";
            }
                for($j=1;$j<=$i;$j++)
                {
                echo"*";
                }
                echo"<br>";
        }
    break;  

    case 25:
        for($i=$number;$i>=1;$i--)
        {
            for($k=$number;$k>$i;$k--)//spaces
            {
                echo"&nbsp;&nbsp;";
            }
                for($j=1;$j<=$i;$j++)
                {
                echo"*";
                }
                echo"<br>";
        }
    break;
    
    case 26:
        for($i=1;$i<=$number;$i++)
        {
            for($k=$number;$k>$i;$k--)//spaces
            {
                echo" ";
            }
            for($j=1;$j<=$i;$j++)
            {
                echo"*";
            }
            echo"<br>";
        }  
        for($i=$number-1;$i>=1;$i--)
        {
            for($k=$number;$k>$i;$k--)//spaces
            {
                echo" ";
            }
            for($j=1;$j<=$i;$j++)
            {
                echo"*";
            }
            echo"<br>";
        } 
    break;  
        
    case 27:
        for($i=1;$i<=$number;$i++)
        {
            for($k=$number;$k>$i;$k--)//spaces
            {
                echo"&nbsp;&nbsp;";
            }
            for($j=1;$j<=$i;$j++)
            {
                echo"*";
            }
            echo"<br>";
        }  
        for($i=$number-1;$i>=1;$i--)
        {
            for($k=$number;$k>$i;$k--)//spaces
            {
                echo"&nbsp;&nbsp;";
            }
            for($j=1;$j<=$i;$j++)
            {
                echo"*";
            }
            echo"<br>";
        } 
    break;  

    case 28:
        for($i=1;$i<=$number-1;$i++)
		{
			for($j=1;$j<=$i;$j++)
			{
				
				echo chr($j+96);
			}	
			for($k=$number;$k>$i;$k--)//spaces
			{
			echo"&nbsp;&nbsp;";
			}
			for($j=$i;$j>=1;$j--)
			{
				
				echo chr($j+96);
			}
			echo"<br>";
		}
			
		for($i=$number;$i>=1;$i--)
		{
			for($j=1;$j<=$i;$j++)
			{
				if($j==$number)
				{
					echo"&nbsp;&nbsp;";
				}
				else
				echo chr($j+96);
			}
			for($k=$number;$k>$i;$k--)//spaces
			{
			echo"&nbsp;&nbsp;";
			}
			for($j=$i;$j>=1;$j--)
			{
				echo chr($j+96);
			}
			
			echo"<br>";
		}



} 
?>