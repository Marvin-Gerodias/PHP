<?php
// ODD NUMBERS
// for($i = 1; $i <= 1000; $i ++)
// {
//     if($i%2==1)
//     {
//     echo $i. '<br>';
//     }
// }


// MULTIPLES OF 5 UP TO 1,000,000
// for($i = 1; $i <=1000000; $i++)
// {
//     echo ($i * 5). '<br>';
// }


// SUM OF ARRAY VALUES
// $array = array(1, 2, 5, 10, 255, 3);
// $sum = 0;

// for($i = 0; $i < count($array); $i++)
// {
//     $sum = $sum + $array[$i];
// }
// echo $sum;


// AVERAGE OF ARRAY VALUES
// $array = array(1, 2, 5, 10, 255, 3);
// $sum = 0;

// for($i = 0; $i < count($array); $i++)
// {
//     $sum = $sum + $array[$i];
// }
// $average = $sum/count($array);
// echo $average;


// ODD NUMBER ARRAY (INCLUSIVE)
// $array = array();

// for($i = 1; $i <= 20000; $i++)
// {
//     if($i%2 == 1)
//     {
//         array_push($array, $i);
//     }
    
// }
// var_dump($array);


// ODD OR EVEN
// for($i = 1; $i <=2000; $i++)
// {
//     if($i%2==1)
//     {
//         echo "Number is " .$i. ". This is an odd number." .'<br>';
//     }
//     else
//     {
//         echo "Number is " .$i. " This is an even number." .'<br>';
//     }
// }

//----------------------------------------------------------------------

// $x = array(1,3,5,7);
// foreach($x as $key => $value)
// {
//     echo $key . " - " . $value ."<br />";
// }
// //answer:
// 0 - 1
// 1 - 3
// 2 - 5
// 3 - 7


// $x = array(1,3,5,7);
// foreach($x as $value)
// {
//     echo $value ."<br />";
// }
//answer:
// 1
// 3
// 5
// 7


// $x = array("hi" => "Dojo", "awesome" => "game");
// foreach($x as $key => $value)
// {
//     echo $key . " - " . $value ."<br />";
// }

//answer:
//hi - Dojo
//awesome - game


// $x = array("hi" => "Dojo", "awesome" => "game");
// foreach($x as $key => $value)
// {
//     echo $value ."<br />";
// }

//answer:
// Dojo
// game


// $x = array("hi" => "Dojo", "awesome" => "game");
// foreach($x as $key => $value)
// {
//     echo $key ."<br />";
// }

//answer:
//hi
//awesome


// $x = array( array(1,3,5), array(2,4,6), array(3,6,9) );
// foreach($x as $key => $value)
// {
//     echo "Key is {$key}<br />";
//     echo "var_dumping value";
//     var_dump($value);
// }

//answer:
//Key is 0
//var_dumping value array(3) {[0] => int(1) [1] => int(3) [2] => int(5)}
//Key is 1
//var_dumping value array(3) {[0] => int(2) [1] => int(4) [2] => int(6)}
//Key is 2
//var_dumping value array(3) {[0] => int(3) [1] => int(6) [2] => int(9)}


// $x = array( array(1,3,5), array(2,4,6), array(3,6,9) );
// foreach($x as $value)
// {
//     echo "var_dumping value";
//     var_dump($value);
// }

//answer:
// var_dumping valuearray(3) { [0]=> int(1) [1]=> int(3) [2]=> int(5) } var_dumping valuearray(3) { [0]=> int(2) [1]=> int(4) [2]=> int(6) } var_dumping valuearray(3) { [0]=> int(3) [1]=> int(6) [2]=> int(9) }


// $x = array
// ( 
//     array("hi"=>"Dojo", "game"=>"awesome"), 
//     array("dude"=>"fun", "play"=>"what?"), 
//     array("no"=>"way", "i am"=>"confused?") 
// );

// foreach($x as $key => $value)
// {
//     echo "key is {$key}<br />";
//     foreach($value as $key2=>$value2)
//     {
//     echo $key2 ." - " . $value2."<br />";
//     }
// }

//answer:
// key is 0
// hi - Dojo
// game - awesome
// key is 1
// dude - fun
// play - what?
// key is 2
// no - way
// i am - confused?


// $x = array
// ( 
//     array("hi"=>"Dojo", "game"=>"awesome"), 
//     array("dude"=>"fun", "play"=>"what?"), 
//     array("no"=>"way", "i am"=>"confused?") 
// );

// foreach($x as $y)
// {
//     foreach($y as $key=>$value)
//     {
//     echo $key ." - " . $value."<br />";
//     }
// }

// answer:
// hi - Dojo
// game - awesome
// dude - fun
// play - what?
// no - way
// i am - confused?
?>