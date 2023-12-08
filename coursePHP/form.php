<!-- 
    <input type="text"> 	    Displays a single-line text input field
    <input type="radio"> 	    Displays a radio button (for selecting one of many choices)
    <input type="checkbox"> 	Displays a checkbox (for selecting zero or more of many choices)
    <input type="submit"> 	    Displays a submit button (for submitting the form)
    <input type="button"> 	    Displays a clickable button
 -->

<html>
    <body>
        <!-- bel php li behemni l name -->
        <form method="POST" action="form.php"> 
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname"><br>
            <label for="lname">Last name:</label><br>
            <input type="text" id="lname" name="lname">
            <br>
            <input type="submit">
        </form>
    </body>
</html>

<?php
    echo $_SERVER['REQUEST_METHOD']; // GET
    echo '<br>';
    if($_SERVER['REQUEST_METHOD']=="GET"){
        echo $_GET['fname']."<br>";
        echo $_GET['lname']."<br>";
    }

    // REQUEST AND POST SAME 
    // if($_SERVER['REQUEST_METHOD']=="POST"){
    //     echo strip_tags($_POST['fname'])."<br>";
    //     echo strip_tags($_POST['lname'])."<br>";
    // }

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $fname = $_POST['fname'];
        if(!preg_match( "/^[A-Z][a-z]+$/" , $fname)){
            $fname = "<span>error first name</span><br>";
        }
        echo $fname,"<br>";
        if(!preg_match( "/^[A-Z][a-z]+$/" , $lname)){
            $lname = "<span>error last name</span>";
        }
        echo $lname;
    }


?>

<?php
    include 'basics.php'; // include all content in basics.php
?>