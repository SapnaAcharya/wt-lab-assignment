<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tutorial</title>
</head>
<body>
    <div class="container">
        This is my first php website.
        <?php
        define('pi',3.14);
        echo "Hello this is printing";

        //single line comment
        /*
        this is a multiple line comment
        */

        $variable1 =34;
        $variable2 =45;
        echo $variable1;
        echo $variable2;
        
        Echo $variable1+$variable2;


        //operators in php
        // Arithmetic operator

        echo "<br>";
        echo "The value of variable1 + variable 2 is: ";
        echo "$variable1 + $variable2";
        echo "<br>";
        echo "The value of variable1 - variable 2 is: ";
        echo "$variable1 - $variable2";
        echo "<br>";
        echo "The value of variable1 * variable 2 is: ";
        echo "$variable1 * $variable2";
        echo "<br>";
        echo "The value of variable1 / variable 2 is: ";
        echo "$variable1 / $variable2";
        echo "<br>";

        // Assignment operator

        $newvar = $variable1;
        // $newvar +=1;
        // $newvar -=1;
        // $newvar *=2;
        // $newvar /=2;
        echo "the value of new variable is ";
        echo $newvar;
        echo "<br>";
        // Comparision operator

        //echo"<h1> comparision operator </h1>

        echo "the value of 1==4 is ";
        echo var_dump(1==4);
        echo "<br>";
        echo "the value of 1!=4 is ";
        echo var_dump(1!=4);
        echo "<br>";
        echo "the value of 1>=4 is ";
        echo var_dump(1>=4);
        echo "<br>";
        echo "the value of 1<=4 is ";
        echo var_dump(1<=4);
        echo "<br>";
        // Increment/Decrement operator
        echo  $variable1++;
        echo $variable1--;
        echo ++$variable1;
        echo --$variable1;
         
        // logical operato
        // and(&&)
        // or(||)
        // xor
        // !
         $myvar =(true and true);
        // $myvar  =(false and true);

        // $myvar=(true or false);
        // $myvar=(false or false);
         echo "<br>";
         echo var_dump($myvar);
        
        ?>

        <?php

        //  datatypes in php
        //   1.string
        //   2.Integer
        //   3.float
        //   4.boolean
        //   5.array
        //   6.object
        echo "<br>Data types are <br>";
        $var= "this is a string";
        echo var_dump($var);
        echo "<br>";

        $var = 67;
        echo  var_dump($var);
        echo "<br>";

        $var=67.1;
        echo var_dump($var);
        echo "<br>";
        echo pi;
        ?>
          
    
    </div>
</body>
</html>