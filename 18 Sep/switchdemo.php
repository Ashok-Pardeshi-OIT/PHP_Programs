<h1>
<?php
		$a=$_POST['nm1'];
		$b=$_POST['nm2'];
		$ch=$_POST['r1'];
		switch($ch)
		{
		case 1: echo"add=".($a+$b) ;break;
		case 2:
			$a=$a+$b;
			$b=$a-$b;
			$a=$a-$b;
			echo"a = $a<br>  b = $b";

		break;		
		case 3:
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
		case 4:
			if($a<$b)
			{
			echo"$a is min";
			}
			else if($b<$a)
			{
				 echo"$b is min";
			}
			else 
			{
				echo"Equals";
			}			
			break;
			case 5:
			echo"Sub=".($a-$b) ;break;
		
		default:echo"invalid choice";
		}
?>
</h1>
