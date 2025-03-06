<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        
        <input type="text" name="name" id="name" placeholder="Enter your name"> <br>
        <input type="password" name="password" id="password" placeholder="Enter your password"> <br>]
        <input type="text" name="nicnum" id="nicnum" placeholder="Enter your NIC Num"> <br>
        <br>
        <input type="submit" value="Submit" name="submit">
    </form>
    <?php
    // to get the value must use $_POST
    if(isset($_POST["submit"])){
        $UNAME=$_POST["name"];
        $Password=$_POST["password"];



        $NICNUM=$_POST["nicnum"];
        $lenthofnic=strlen($NICNUM);
        echo "Your NIC Number is: ".$NICNUM ."<br>";
        echo "Length of NIC Number is: ".$lenthofnic ."<br>";
        if ($lenthofnic==12) {
            echo "NIC Number is new <br>";
            //to read two numbers from the string
            $bod=substr($NICNUM,0,4);
            
            echo "Your Year of Birth is: ".$bod ."<br>";
            
        }else if ($lenthofnic==10) {
            echo "NIC Number is old <br>";
            $Obod=substr($NICNUM,0,2);
            
            echo "Your Year of Birth is: " . ($Obod + 1900) . "<br>";
        }else{
            echo "Invalid NIC Number <br>";
        }










        //concatenation operation  . is used
        echo "Your user name is: ".$UNAME ."<br>". "Your Password is: ". $Password ."<br>";

        if ($UNAME=="admin" && $Password=="admin") {
            echo "Login Success";
            
        }else{
            echo "Login Failed";
        }
        
    }
    ?>
</body>
</html>