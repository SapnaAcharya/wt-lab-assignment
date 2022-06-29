<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tutorial</title>
</head>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    .container{
        max-width:80%;
        background color:blue;
        margin:auto;
        padding:23px;
    }
    </style>
<body>
    <div class="container">
        <h1>lets learn about php
        This is a container
    <?php
     $age= 34;
     if($age>18){
        echo "you can go the party";
     }
     else if($age==7){
        echo "you are 7 years old";
     }
     else{
        echo "you cannot go to the party";
     }
    //Arrrays in php

    $languages = array("python","c++","php","Node.js");
    //echo $languages[1]
 
    //loops  in php
    $a=0;
    while($a <=10){
        echo "<br>the value of a is:";
        echo $a;
        $a++;
    }

    //iteratinh arrays in php using while loop
    $a=0;
    while($a < count($languages)) {
        echo "<br>the value of language is:";
        echo $languages[$a];
        $a++;
    }

    //iterating arrays in php using do while loop
    $a=0;
    do{
        echo "<br>the value of a is:";
        echo $a;
        $a++;
    } while ($a < 10);

    //iterating arrays using for loop
    $a=200;
    for($a=0; $a <10; $a++){
        echo "<br> the value of a from the for loop is:";
        echo "$a";
    }

    //iterating arrays in php using foreach loop
    foreach ($languages as $value){
        echo "<br>the value from foreach loop is:";
        echo $value;
    }

    //function
    function print5(){
        echo "FIVE";
    }
    print5();

    function print_number($number){
        echo "<br> your number is:";
        echo $number;
    }
    print_number(4);
    print_number(2345);
    ?>
    </div>
</body>
</html>