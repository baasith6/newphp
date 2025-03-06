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
        <input type="password" name="password" id="password" placeholder="Enter your password"> <br>
        <br>
        <input type="submit" value="Submit" name="submit">
    </form>
    <?php
    // to get the value must use $_POST
    if(isset($_POST["submit"])){
        $UNAME=$_POST["name"];
        $Password=$_POST["password"];
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