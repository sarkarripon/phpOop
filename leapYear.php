<?php

class Calculation
{

    //  leap year
    public function leapYear($year)
    {
        $result = '';
        if ($year % 400 == 0) {
            $result = $year . " is leap year";
        } elseif ($year % 100 == 0) {
            $result = $year . " not a leap year";
        } elseif ($year % 4 == 0) {
            $result = $year . " is leap year";
        } else {
            $result = $year . " is  not leap year";
        }
        return $result;
    }

    public function primeNumber($num)
    {

        if ($num == 1)
            return 0;
        for ($i = 2; $i <= $num / 2; $i++) {
            if ($num % $i == 0)
                return 0;
        }
        return 1;

    }

    public function sum($num1, $num2, $num3)
    {
        return $num1 + $num2 + $num3;

    }
}

$newObject = new Calculation();

echo $newObject->leapYear(1998);
echo "<br>";
$val = $newObject->primeNumber(2);

if ($val == 1) {
    echo "Ths is a prime number";
} else {
    echo "This is not a prime number";
}
echo "<br>";

$num1 = $newObject->sum(2, 5, 9);
$num2 = $newObject->sum(5, 6, 8);
$num3 = $newObject->sum(8, 4, 9);
echo $num1, $num2, $num3;
?>