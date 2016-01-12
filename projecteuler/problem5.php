/*
2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.

What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?
*/
<?php
$okay = false;

$divisors = [20, 19, 18, 17, 16, 15, 14, 13, 12, 11];

for ($number = 2520; !$okay; $number += 60)
{
    foreach ($divisors as $divisor)
    {
        if ($number % $divisor != 0)
        {
            $okay = false;
            break;
        }
        $okay = true;
    }
}

echo $number;
?>
