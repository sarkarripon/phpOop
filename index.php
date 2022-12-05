<?php

class Calculation
{
    public $number;

    public function set_number($number)
    {
        $this->number = $number;
    }

    public function get_number()
    {
        return $this->number;
    }

}

$number1 = new Calculation();
$number2 = new Calculation();
$number3 = new Calculation();
$number4 = new Calculation();
$number5 = new Calculation();

$number1->set_number(5);
$number2->set_number(8);
$number3->set_number(10);
$number4->set_number(20);
$number5->set_number(15);

//1. Sum of 5 variables
echo "sum of {$number1->get_number()}+{$number2->get_number()}+{$number3->get_number()} +{$number4->get_number()}+{$number5->get_number()} is = " . ($number1->get_number() + $number2->get_number() + $number3->get_number() + $number4->get_number() + $number5->get_number());
echo "<br>";
//2. Multipliaion of 3 variables
echo "Multipliaion of {$number1->get_number()}x{$number2->get_number()}x{$number3->get_number()} is = " . ($number1->get_number() * $number2->get_number() * $number3->get_number());
echo "<br>";
//3. Division of 2 variables
echo "Division of {$number1->get_number()} by {$number2->get_number()} is = " . ($number1->get_number() / $number2->get_number());
echo "<br>";
//4. Sqrt of 1 variable
echo "Sqrt of {$number1->get_number()} is = " . (sqrt($number1->get_number()));
echo "<br>";
//5. Area of a rectangle
echo "Area of a rectangle where height is {$number1->get_number()}m and width is {$number2->get_number()} = " . ($number1->get_number() * $number2->get_number());


?>