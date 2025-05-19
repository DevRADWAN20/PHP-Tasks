<?php
// Task 1 : give an array and find the largest and smallest number in the array
$nums=['1','111','44','65','97','63'];

// the max value get by the function max
$largest_number= max($nums);

// the smallest number get by the function min
$smallest_number= min($nums);

// the result
echo "the largest number in the array is :{{$largest_number}}";
// output is: the largest number in the array is :{111}
echo "<br>";
echo "the smallest number in the array is :{{$smallest_number}}";
// the output is: the smallest number in the array is :{1}
echo "<br>";

// Task 2 with for & while loop :
$sum1=0;
for ($i=1;$i<=1000;$i++)
{
    while (($i%3==0||$i%5==0)&&$i%7!==0&&$i>50&&$i<500)
    {
       $sum1+=$i;
       $i++;
    }
}
echo "the result is:{{$sum1}}";

// the output is :{49002}

echo "<br>";
//Task 2 with for loop and if statement:
$sum2=0;
for ($x=1;$x<=1000;$x++)
{
if (($x%3==0||$x%5==0)&&$x%7!==0&&$x>50&&$x<500)
{
    $sum2+=$x;
}
}
echo "the result is:{{$sum2}}";
// the output is :{49002}