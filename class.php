<?php 

class Calculator{
    public $num1;
    public $num2;
    public $cal;

    public function __construct($num1, $num2, $cal)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->cal = $cal;
    }

    public function cal()
    {
        if($this->cal == 'add')
        {
           return $this->num1 + $this->num2;
        }
    
        if($this->cal == 'sub')
        {
           return $this->num1 - $this->num2;
        }
    
        if($this->cal == 'mul')
        {
           return $this->num1 * $this->num2;
        }
    
        if($this->cal == 'div')
        {
           return $this->num1 / $this->num2;
        }
    }
}

?>