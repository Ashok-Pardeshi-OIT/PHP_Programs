<?php

    $d=$_POST['nm1'];
    $m=$_POST['nm2'];
    $y=$_POST['nm3'];

	if($y>=1000 && $y<=9999)
		{
			if($m>=1 && $m<=12)
			{
				if($d>=1 &&$d<=31)
				{
					switch($m)
					{
					case 1:case 3:case 5:case 7:case 8:case 10:case 12:
						echo"$d-$m-$y is Valid date";
						break;
					case 4:case 6:case 9:case 11:
						if($d<=30)						
							echo"$d-$m-$y is Valid date";						
						else
							echo"$d-$m-$y is InValid date";;
						break;
						
					case 2:
						if($y%4==0 && $d<=29)
							echo"$d-$m-$y is Valid date";
						else if($d<=28)
							echo"$d-$m-$y is Valid date";
						else
						echo"$d-$m-$y is InValid date";
						break;												
					}							
				}
				else
				{
					echo"Invalid day";
				}						
			}
			else
			{
				echo"Invalid month";
			}			
		}
		else
		{
			echo"Invalid year";
		}	
?>