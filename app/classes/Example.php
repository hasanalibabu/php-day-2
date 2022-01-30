<?php


namespace App\classes;


class Example
{
    public $name;
    public $email;
    public $mobile;
    public $firstName;
    public $lastName;
    public $x;
    public $y;
    public $z;
    public $data= [];


    public function index()
    {
//        $this->firstName = 'Rahim';
//        $this->lastName = 'Khan';
//        echo "Full name is ".$this->firstName." ".$this->lastName;

        $this->data = [10, 20, 30, 'BITM', 100.200, true];
//        echo $this->data[9];
        foreach ($this->data as $item);
        {
            echo $item;
        }

//        $this->x = 100;
//
//        do{
//            echo 'HELLO <br/>';
//            $this->x++ >110;
//        }
//        while($this->x < 110);

//        while ($this->x < 110)
//        {
//            echo 'HELLO WORLD<br/>';
//            $this->x++;
//        }

//        for ($this->y =99; $this->y >= 76; $this->y--)
//        {
//            echo $this->y. ' ';
//        }

//        switch ($this->x)
//        {
//            case 10:
//                echo 'HELLO WORLD';
//                break;
//            case 20:
//            echo 'HELLO BANGLADESH';
//                break;
//            case 30:
//                echo 'HELLO DHAKA';
//                break;
//            default:
//                echo 'HELLO BITM';
//                break;
//        }



//        if ($this->x > 200)
//        {
//            echo  '200';
//        }
//        elseif ($this->x < 200)
//        {
//            echo $this->x;
//        }

//        if($this->x > 20)
//        {
//            echo $this->x;
//        }
//        else
//        {
//            echo 'HELLO WORLD';
//        }




//        echo ($this->x > $this->y) || ($this->y > $this->z);
//        echo '<br/>....<br/>';
//        echo ($this->x > $this->y) || ($this->y < $this->z);
//        echo '<br/>....<br/>';
//        echo ($this->x < $this->y) || ($this->y > $this->z);
//        echo '<br/>....<br/>';
//        echo ($this->x < $this->y) || ($this->y < $this->z);
//        echo '<br/>....<br/>';

//        echo $this->x > $this->y;
//        echo '<br/>';
//        echo $this->x >= $this->y;
//        echo '<br/>';
//        echo $this->x < $this->y;
//        echo '<br/>';
//        echo $this->x <= $this->y;
//        echo '<br/>';
//        echo $this->x == $this->y;
//        echo '<br/>';
//        echo $this->x != $this->y;
//        echo '<br/>';
//        echo $this->x === $this->y;
//        echo '<br/>';
//        echo $this->x !== $this->y;
//        echo '<br/>';


//        echo  $this->x += $this->y;
//        echo '<br/>';
//        echo  $this->x -= $this->y;
//        echo '<br/>';
//        echo  $this->x *= $this->y;
//        echo '<br/>';
//        echo  $this->x /= $this->y;
//        echo '<br/>';
//        echo  $this->x %= $this->y;
//        echo '<br/>';
//        echo  $this->x .= $this->y;
//        echo '<br/>';


//        echo $this->x + $this->y;
//        echo  '<br/>';
//        echo $this->x - $this->y;
//        echo  '<br/>';
//        echo $this->x * $this->y;
//        echo  '<br/>';
//        echo $this->x / $this->y;
//        echo  '<br/>';
//        echo $this->x % $this->y;


    }
}