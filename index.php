<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test</title>
</head>
<style type="text/css">
    .header{
        color: red;
    }
</style>
<body>
    <?php

    //PHP VARIABLES 
    
        $first_name = 'Marvin';
        $last_name = 'Gerodias';
        echo 'My name is ' . $first_name . ' ' . $last_name;

        $num1 = 5;
        $num2 = 7;
        $result = $num1 + $num2;
        echo $result.'<br>'; 

        echo $_SERVER['DOCUMENT_ROOT'].'<br>'; //SHOW DOCUMENT_ROOT PATH

        echo "1" + "2";
    

    //PHP ARRAYS
        //1)
    
        $students = array();

        $students[] = "Randall";
        $students[] = "Michael";
        $students[] = "David";
        // empty brackets students[] assigns an index to each value.

        echo "This is student 0:" . $students[0] . '<br>';
        echo "This is student 1:" . $students[1] . '<br>';
        echo "This is student 2:" . $students[2] . '<br>';
        
        //2)
        $students = array("Jim", "Pam", "Dwight");

        echo "This is student 0:" . $students[0] . '<br>';
        echo "This is student 1:" . $students[1] . '<br>';
        echo "This is student 2:" . $students[2] . '<br>';
    
        //3) Multidimensional Array
    
        $students = array(
            array("Jim", "Halpert", 27),
            array("Pam", "Beesley", 26),
            array("Dwight", "Schrute", 29)
        );
        
        echo "This is the age of " . $students[0][0] . ": " . $students[0][2] . '<br>';
        echo "This is the age " . $students[1][0] . ": " . $students[1][2] . '<br>';
        echo "This is the age of " . $students[2][0] . ": " . $students[2][2] . '<br>';
    
        //4) Associative Array 
    
        $student = array("first_name" => "Jim", "last_name" => "Halpert", "age" => 27);
            // => hash rocket to replace default 0 index with "first_name"
            echo $student["first_name"] . '<br>';
            echo $student["last_name"] . '<br>';
            echo $student["age"] . '<br>';
            // echo $student[0];
            // index 1 becomes index 0.
    
        //5) Multidimensional Associative Array
    
        $students = array(
            array("first_name" => "Jim", "last_name" => "Halpert", "age" => 27),
            array("first_name" => "Pam", "last_name" => "Beesley", "age" => 26),
            array("first_name" => "Dwight", "last_name" => "Schrute", "age" => 29)
        );

        echo "Dwight's age is " . $students[2]["age"] . '<br>';
        var_dump($students);

        $students = array();
        $students[] = array("first_name" => "Jim", "last_name" => "Halpert", "age" => 27);
    
    ?>

    <?php

    // CONDITIONALS
    // we're having a party and we want to make sure that the poeple on the guest list get in.
    // we also have to make sure that there aren't more than 10 people.
    // we know for sure that we don't want Joey or Sarah to come.
    // there might be alcohol served so you want to make sure the guests are over 21.

    $name = "Sarah";
    $on_guest_list = false;
    $guest_number = 5;
    $age = 21;
    $party_message = '';

    if($on_guest_list)
    {
        $party_message = "Hey ". $name . "! Welcome to the party!";
    }
    else if($name == "Joey" || $name == "Sarah")
    {
        $party_message = "Sorry " . $name . ". You're not invited.";
    }
    else if($guest_number > 10)
    {
        $party_message = "Sorry " . $name . ", but we're at capacity.";
    }
    else if($age <= 20)
    {
        $age_difference = 21 -$age;
        $party_message = "Sorry " . $name . ", you have ".$age_difference." more year(s) before you can attend.";
    }
    else
    {
        $party_message = "Hey " .$name. " we are happy to have you!";
    }
    
    echo $party_message;


    // SWITCH STATEMENTS
    // We want to assign the number 1-6 to the colors of the rainbow
    // ordering them from the outside in and print the color name with the number
    // in the current color.

    // red - 1 
    // orange - 2
    // yellow - 3
    // green - 4
    // blue - 5
    // purple - 6

    $number = 5;

    switch($number)
    {
        case 1:
            echo "Red - ".$number;
        break;

        case 2:
            echo "Orange - ".$number;
        break;

        case 3:
            echo "Yellow - ".$number;
        break;

        case 4:
            echo "Green - ".$number;
        break;

        case 5:
            echo "Blue - ".$number;
        break;

        case 6:
            echo "Purple - ".$number;
        break;
    }


    $students = array(
        array("Jim", "Halpert", 27),
        array("Pam", "Beesley", 26),
        array("Dwight", "Schrute", 29)
    );

    for($i = 0; $i < count($students); $i++)
    {
        for($j = 0; $j < count($students[$i]); $j++)
        {
            echo $students[$i][$j].' ';
        }
        echo '<br>';
    }


    $students = array(
        array("first_name" => "Jim", "last_name" => "Halpert", "age" => 27),
        array("first_name" => "Pam", "last_name" => "Beesley", "age" => 26),
        array("first_name" => "Dwight", "last_name" => "Schrute", "age" => 29)
    );
    foreach($students as $row)
    {
        foreach($row as $info => $value)
        {
            echo $info.' '.$value.' ';
        }
        echo '<br>';
    }

    for($i = 0; $i <= 10; $i++)
        {
            echo $i.'<br>';
            for($j = 0; $j < 5; $j++)
            {
            echo $j;
            }
            echo '<br>';
        }
    ?>
</body>
</html>