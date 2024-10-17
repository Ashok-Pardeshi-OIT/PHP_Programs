<?php
class Area
{
    public $r; 
    public $a;
    public function __construct($r)
    {
        $this->r = $r;
    }
    public function cal_area()
    {
        $this->a = 3.14*$this->r*$this->r;
        echo "Area = ".$this->a;
    }
}
class Volume extends  Area
{
    public $h;
    public $v;
    public function __construct($r, $h)
    {
        $this->r = $r;
        $this->h = $h;
    }
    public function cal_vol()
    {
        $this->v = $this->a*$this->h;

        echo  "<br>Volume = ".$this->v;

    }
}
$v1 = new Volume(5, 10);
$v1->cal_area();
$v1->cal_vol();
?>