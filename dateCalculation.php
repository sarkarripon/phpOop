<?php
class Calculation{
    //date difference
    public function dayDiff($year1,$year2){
        $create1 = date_create($year1);
        $create2 = date_create($year2);
        $difference = date_diff($create1,$create2);
        return $difference->format("%y years %m months %d days");
    }
    //Array sort
    public function arraySort($numbers){
        sort($numbers);
        return $numbers;
    }
}
$ObjCalculation = new Calculation();
echo $ObjCalculation->dayDiff('1981-11-03','2013-09-04');
echo "<br>";
print_r( $ObjCalculation->arraySort(array(11, -2, 4, 35, 0, 8, -9)));

