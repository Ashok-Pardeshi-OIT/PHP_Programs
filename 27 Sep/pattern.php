<?php

$number = $_POST['num'];

$ch = $_POST['rbtn'];

switch($ch)
{
    case 1:
        for($i=1; $i<=$number; $i++)//row
        {
            for($j=1; $j<=$i; $j++) //column
            {
                echo " * ";
            }
            echo "<br>";
        }
        break;


    case 2:
        for($i=1; $i<=$number; $i++)
        {
            for($j=1; $j<=$i; $j++)
            {
                echo " $j ";
            }
            echo "<br>";
        }
        break;

    case 3:
        for($i=1; $i<=$number; $i++)
        {
            for($j=1; $j<=$i; $j++)
            {
                echo " $i ";
            }
            echo "<br>";
        }
        break;

    case 4:
        for($i=1; $i<=$number; $i++)
        {
            for($j=$number; $j>=$i; $j--)
            {
                echo " $j ";
            }
            echo "<br>";
        }
        break;

    case 5:
        for($i=1; $i<=$number; $i++)
        {
            for($j=$number; $j>=$i; $j--)
            {
                echo " $i ";
            }
            echo "<br>";
        }
        break;

    case 6:
        for($i=1; $i<=$number; $i++)
        {
            for($j=$number; $j>=$i; $j--)
            {
                echo " * ";
            }
            echo "<br>";
        }
        break;

    case 7:
        for($i=1; $i<=$number; $i++)
        {
            for($j=1; $j<=$i; $j++)
            {
                echo " $ ";
            }
            echo "<br>";
        }
        break;
}



?>