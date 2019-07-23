<?php
$smalldata= [];
$mediumData=[];
$bigData=[];
function FillData($array,$size){
    for($i=0;$i<=$size;$i++){
        $array[$i]=mt_rand();
    }
    return $array;
}
$smalldata= FillData($smalldata, 10);
$mediumData= FillData($mediumData, 1000);
$bigData= FillData($bigData, 10000);
//https://www.w3resource.com/php-exercises/searching-and-sorting-algorithm/searching-and-sorting-algorithm-exercise-6.php
function bubble_Sort($my_array )
{
    $time_start=microtime(true);
    do
    {
        $swapped = false;
        for( $i = 0, $c = count( $my_array ) - 1; $i < $c; $i++ )
        {
            if( $my_array[$i] > $my_array[$i + 1] )
            {
                list( $my_array[$i + 1], $my_array[$i] ) =
                array( $my_array[$i], $my_array[$i + 1] );
                $swapped = true;
            }
        }
    }
    while( $swapped );
    $time_end=microtime(TRUE);
    $elaspedTime=$time_end-$time_start;
    echo "Original Bubble sort"."<br>";
    echo $elaspedTime."<br>";
    return $my_array;
}
echo "small data"."<br>";
$smallSorted = bubble_Sort($smalldata);
echo "Medium data"."<br>";
$medSorted = bubble_Sort($mediumData);
echo "Big data"."<br>";
$bigSorted = bubble_Sort($bigData);
//https://www.geeksforgeeks.org/bubble-sort/
function bubbleSort(&$arr)
{
    $time_start=microtime(true);
    $n = sizeof($arr);
    
    // Traverse through all array elements
    for($i = 0; $i < $n; $i++)
    {
        // Last i elements are already in place
        for ($j = 0; $j < $n - $i - 1; $j++)
        {
            // traverse the array from 0 to n-i-1
            // Swap if the element found is greater
            // than the next element
            if ($arr[$j] > $arr[$j+1])
            {
                $t = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $t;
            }
        }
    }
    $time_end=microtime(true);
    $timeElapsed=$time_end-$time_start;
    echo "New bubble sort algorithm"."<br>";
        echo $timeElapsed."<br>";
} 
echo "small data"."<br>";
$smallSorted = bubbleSort($smalldata);
echo "Medium data"."<br>";
$medSorted = bubbleSort($mediumData);
echo "Big data"."<br>";
$bigSorted = bubbleSort($bigData);