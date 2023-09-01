<?php
    require('dbcon.php');
    session_start();
    if(isset($_POST['submit'])){
        $sql="INSERT INTO `review`  VALUES (NULL, '".$_SESSION['user']."', '".$_POST['comment']."', '".$_POST['rating']."')";
        $result=$conn->query($sql);
            if($result){
                echo "<script>
				alert('review submitted');
				</script>";
            }
            
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
            body{
            
            margin: 0px;
            height: 100vh;
            display: grid;
            justify-content: center;
            position: relative;
            background-image: url('book.jpeg');
            background-size: cover;
            background-position: center;
        }
        body::before{
            content: '';
            height: 100%;
            width: 100%;
            position: absolute;
            background-color: rgba(0, 0, 0, 0.7);
        }

        form{
            display: grid;
            width: 400px;
            justify-content: center;
            background-color: rgba(95, 158, 160, 0.503);
            padding: 10px;
            border-radius: 5px;
            z-index: 1;
        }

        .p1{
            padding: 10px;
            background-color: rgba(62, 137, 140, 0.689);
            border-radius: 5px;
            margin: 10px;
            z-index: 1;
        }
         

    </style>
</head>
<body>

    <div class="p1">
        <h1>contact us</h1>
        <h2>ph.no : 0895454768</h2>
        <h2>email: sharu34@gmail.com</h2>
        <h2>address: banglore</h2>
    </div>
    
    <form action="#" method="post">
        

        <div class="p1">
            <h1>feedback</h1>
            rating :    <input name="rating"  type="number" min="1" max="5"><br><br>
            feedback : <textarea name="comment"  cols="20" rows="4"></textarea>
        </div>
        <div style="padding: 10px;">
            <input type="submit" name="submit" value="submit"><br>
        </div>
    </form>
    
</body>
</html>