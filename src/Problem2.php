<?php
/*
    Each new term in the Fibonacci sequence is generated by adding the previous two terms. By starting with 1 and 2, the first 10 terms will be:

    1, 2, 3, 5, 8, 13, 21, 34, 55, 89, ...

    By considering the terms in the Fibonacci sequence whose values do not exceed four million, find the sum of the even-valued terms.
*/
namespace ProjectEuler;
class Problem2 
{
    public static function solve(int $limit)
    {
        $firstNumber=1;// 1->2->3->5
        $secondNumber=1;// 1->2->3
        $sumOfEvenValue=0;
        while($sumOfEvenValue<$limit)
        {
            $thirdNumber=$firstNumber+$secondNumber;
            $firstNumber=$secondNumber;
            $secondNumber=$thirdNumber;
            if ($thirdNumber%2==0) 
            {
               $sumOfEvenValue+=$thirdNumber;
            }
        }
        return $sumOfEvenValue;

    }
    

}


?>