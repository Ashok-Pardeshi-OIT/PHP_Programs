<?php
class Student
{
  public $rno;
  public $sname;
  public function __construct($rno,$sname) 
  {
    $this->rno = $rno;    
    $this->sname=$sname;
  }
  public function disp() 
  {
     
    echo"<br>RollNo=".$this->rno;
    echo"<br>Name=".$this->sname;

  }
}
class X_Student extends Student
{
  public $cname;public $salary;
  public function __construct($rno,$sname,$cname,$salary) 
  {
    $this->rno = $rno;    
    $this->sname=$sname;
    $this->salary = $salary;    
    $this->cname=$cname;    
  }
  public function show() 
  {
     echo"<br>SAlary=".$this->salary;
    echo"<br>Name=".$this->cname;
  }  
}
$v1 = new X_Student(123,"Ash","Wipro",78965);
$v1->disp();
$v1->show();
?>