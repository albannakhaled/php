<?php
    # php can included in html code

    // print fun
    echo("hello world !");// can be included html tag in echo between the double quote or single quote
    // ex :
        # echo("hello<br>Khalid");
        # echo("hello<hr>");
        # echo('hello<hr>');
        # print("hello"); // also can use print
    // print number :
        # echo (123);


        #------------------------------------------------------------------------------------------


    // variable and operator
        # define variable in php , all variable should be begin with $ sign
            # ex :
                # $name = "khalid";
                # echo($name);
        $num1 = 10 ;
        $num2 = 20 ;
        $num3 = $num1 + $num2 ; // operator *,+,-,/,% ....
        echo($num3); // 30



        #------------------------------------------------------------------------------------------
    
    // string
    # concatenation in php using .
        # \' , \" , \\ .... 
        $fname = "khalid";
        $lname = 'khalil';
        echo($fname . ' ' . $lname);
        echo('<br>');
        $str = "welcome to php";

        $txt = 'A';
        $txt .= 'b';
        $txt .= 'c';
        echo('<br>'.$txt); // Abc

        #------------------------------------------------------------------------------------------

        # substr( , ); li 2abel l ' , '  b7et ayya string baddi ba3d l ' , ' b7et mn ayya index

        $str1 = substr($str , 3); // come to php
        echo($str1);    



        # replace string

        // str_replace(" x "," y " , $str); // x li baddi 8ayro , y li baddo yen7at ma7al l x 
        #, $str l variable li baddi 2eshye8el fi

        $str2 = 'qqwe';
        $str3 = 'asdf';

        $str4 = str_replace('qq','ww',$str2);
        echo('<br>');
        echo($str4);

        #--------------------------------------------------------------------

        # var_export(); 

        $q = 10 ; $w = 20 ;
        $r = $q == $w; # >,<,>= ...
        echo('<br>'.var_export($r)); // false

        // logical operator
        # && , || , == , != 


        #--------------------------------------------------------------------

        // date and time

        $dt = date('d/m/y');
        echo($dt); // 30/10/23

        $dt = date('d/m/Y');
        echo('<br>'.$dt); // 30/10/2023

        $dt = date('D/M/Y');
        echo($dt); # Mon/Oct/2023

        $dt = date('d/m/Y' , strtotime('1-01-2020'));
        echo('<br>'.$dt); // 01/01/2020


        // time
        date_default_timezone_set('America/Adak');
        $tm = date('h:i:s');
        echo('<br>'.$tm); // zone time in gmt

        
        #---------------------------------------------

        # Arrays
        echo "normal array";
        echo "<br>";
        $name = array("khalid","omar","ali");
        echo('<br>'.$name[1]);
        echo "array name = " . print_r($name);


        // associative arrays
        # like map in another language

        $a = array( 
            # "key"=>value
            "x"=>10,
            "y"=>20,
            "z"=>30,
        );
        echo('<br>'.$a["x"]);// value in x

        # ---------------------------------------------------------------

        // if statement

        $x = 10 ;
        $y = 20 ;
        if($x > $y){
            echo('<br>'."x > y");
        }elseif($x == $y){
            echo("<br>"."y = x");
        }else{
            echo("<br>"."y>x");
        }


        # switch case
        echo("<br>");
        $p =  3 ;
        switch($p){
            case 0:
                echo("zero");break;
            case 1 :
                echo("one");break;
            # case 2 & 3
            case 2:
            case 3:
                echo("two || three");break;
            default:
                echo("out");break;
        }

        #---------------------------------------------------------
        // loop 
        # for loop :

            for($i = 0 ; $i < 10 ; $i++){
                echo("<br>". '<b>' .$i. '</b>');
            }
            
            $name = array("khalid","omar","ali");

            for($i = 0 ; $i < count($name) ; $i++){
                echo("<br>". '<b>' .$name[$i]. '</b>');
            }


        # for each ,, use with associative array

        $names = array("khalid","omar","ali");

        foreach($names as $name){ // hon l name ka2an $names[i]
            echo("<br>".$name);
        }

        // while loop

        $n = 1 ;
        while($n < 11){
            echo("<br>".$n);
            $n++;
        }
        
        // do while

        $z = 10;
        do{
            echo("<br>".$z);
            $z++;
        }while($z < 10);


        // functions

        function sum($x,$y){
            return $x+$y;
        }

        echo('<br>'.'sum = '.sum(3,4));

        #--------------------------------------------------
        /*
            $GLOBALS
            $_SERVER
            $_REQUEST
            $_POST
            $_GET
            $_FILES
            $_ENV
            $COOKIE
            #_SESSION
        */
        $V1 = 10 ;
        $V2 = 54 ;
        echo$v1;

        function fun(){
            #echo $v1; // error if $v1 not a global variable 
            echo $GLOBALS['v1'];
            // global variable in fun
            $GLOBALS['v3'] = 33 ;
        }
        fun();
        echo $v3;

        // server
        echo "<br>";
        echo $_SERVER['PHP_SELF']; // path current page : /coursePHP/index.php

        echo "<br>";
        echo $_SERVER['SERVER_NAME']; // server name : localhost

        echo "<br>";

        // REGEX
        // in form
?>