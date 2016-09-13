<?php
/**
 * Created by PhpStorm.
 * User: Joao
 * Date: 08/09/2016
 * Time: 18:59
 */
//============================================================================================
echo "<h2>Problem One</h2>";
echo "<p>Problem One – Largest Palindrome Product</p>";

    $myArray = array();//CREATE ARRAY
//CALCULATE THE LARGEST PALINDROME
    for ($i = 100; $i <= 999; $i++){
        for ($j = 100; $j <= 999; $j++){
            if (checkPal($i*$j)==true){
                array_push($myArray, $i*$j);
            }
        }
    }
    echo max($myArray);
//FUNCTION TO CHECK POR PALINDROME
    function checkPal($num)
    {
        $check = $num;
        $sum = 0;
        while ((int)$num != 0) {
            $rem = $num % 10;
            $sum = $sum * 10 + $rem;
            $num = $num / 10;
        }
        if ($sum == $check) {
           return true;
        } else {
            return false;
        }
    }

//============================================================================================
echo "<h2>Problem Two</h2>";

    $check = 0;
    $answer = 0;
    $b= false;

    for ($check = 20; $b === false; $check +=20){
        for ($i = 1; $i <= 20; $i++){

            if (($check % $i == 0) && ($i != 20))
                continue;

            elseif ($check % 1 !=0)
                break;

            elseif (($check % $i == 0) && ($i ==20)){
                $answer = $check;
                $b = true;
            }
        }

    }

echo $answer;




//============================================================================================
echo "<h2>Problem Three</h2>";













//============================================================================================
echo "<h2>Problem Four</h2>";
echo "<p>Problem Four – Collatz Problem</p>";

    $num = 1000000;
    $sequenceLen = 0;
    $startNum = 0;
    $sequence = 0;

        for ($i = 2; $i <= 1000000; $i++){

            $len = 1;
            $sequence = $i;
            while ($sequence != 1){

                if (($sequence % 2 )==0)
                    $sequence = $sequence / 2;
                else
                    $sequence = $sequence * 3 + 1;
                $len++;
            }

            #check if sequence
            if ($len > $sequenceLen){

                $sequenceLen = $len;
                $startNum = $i;
            }
        }

echo $startNum." ".$sequenceLen;


//============================================================================================
echo "<h2>Problem Five</h2>";
echo "<p>Problem Five – Counting Sundays</p>";

    $day_month = 0;
    $days_passed = 1;
    $count = 0;

    for ($i = 1901; $i <= 2000;$i++){
        for ($m = 1; $m <= 12; $m++){
            if ($m == 4 || $m == 6 || $m == 9 || $m == 11)
                $day_month = 30;
            elseif ($m == 2){
                if ($i % 400 == 0 || ($i % 4 == 0 && $i % 100 != 0)){
                    $day_month = 28;
                }else
                    $day_month = 29;
            }else
                $day_month = 31;
            if($days_passed % 7 == 0)
                $count++;
        }
        $days_passed += $day_month;
    }
    echo $count;

//============================================================================================
echo "<h2>Problem Six</h2>";
echo '<p>Problem Six – Prime Permutations</p>';

$end = 9999 - (3330 * 2);

function sameDigits($x, $y)
{
    $i = 0;
    $arrX = str_split($x);
    $arrY = str_split($y);

    sort($arrX, SORT_NUMERIC);
    sort($arrY, SORT_NUMERIC);

    return count(array_diff($arrX, $arrY)) === 0;
}

for ($i = 1489; $i <= $end; $i += 2) {
    $num2 = $i + 3330;
    $num3 = $num2 + 3330;

    if 	(sameDigits($i, $num2) && sameDigits($i, $num3)&& isPrime($i) && isPrime($num2) && isPrime($num3)) {
        echo $i . $num2 . $num3;
        break;
    }
}


//function to find the prime number
function isPrime($num) {
    #one is not a prime number
    if($num == 1)
        return false;
    //2 is prime (the only even number that is prime)
    if($num == 2)
        return true;
    //2 is the only even number that is prime
    if($num % 2 == 0)
        return false;

    #find the prime numbers
    for($i = 3; $i <= ceil(sqrt($num)); $i = $i + 2) {
        if($num % $i == 0)
            return false;
    }

    return true;
}

























