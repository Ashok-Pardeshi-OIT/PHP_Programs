<?php
$a=$_GET['nm1'];
$b=$_GET['nm2'];
$ch=$_GET['rdbtn'];
switch($ch)
{
    case 'A':
        if($a>$b)
        echo "Insufficent Balance";
        else if($a<$b)
        echo "Balance amount=".($b-$a);
    break;

    case 2:
        if($a%2==0)
        {
            echo "Even number";
        }
        else
        {
            echo "Odd number";
        }
    break;

    case 3:
      
        $a = $cp=$_GET['nm1'];
        $b = $sp=$_GET['nm2'];

        if($cp>$sp)
        {
            $loss=$cp-$sp;
            echo"Loss=$loss";
        }
        else if($sp>$cp)
        {
            $profit=$sp-$cp;
            echo"Profit=$profit";
        }
        else
        {
            echo"no profit no loss";
        }
    break;

    case 4:
        if($a>$b)
			{
			echo"$a is max";
			}
			else if($b>$a)
			{
				echo"$b is max";
			}
			else 
			{
				echo"Equals";
			}			
	break;

    default:echo"invalid choice";
}

?>