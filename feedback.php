<?php
    
    session_start();
    $con = mysqli_connect("localhost","root","","pet_care");

    if(isset($_POST['submit'])){
        $sql="INSERT INTO `feedback`  VALUES ( '".$_SESSION['id']."', '".$_POST['service']."', '".$_POST['comment']."')";
        $result=$con->query($sql);
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
    <title>feedback</title>

    <style>
      body{
            background-color:white;
            background-size: cover;
            background-repeat:no-repeat;
            background-attachment:fixed;
            justify-content: center;
            background-blend-mode:darken;
      }
      form {
        max-width: 300px;
        margin: 0 auto;
        font-family: Arial, sans-serif;
        font-size: 16px;
      
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        background: transparent;
        border: 2px solid ;
        border-color:wheat;
        border-radius: 20px;
        backdrop-filter: blur(5px);
       
      }
      
      h1 {
        text-align: center;
        font-size: 36px;
        margin-bottom: 30px;
        color: #170230;
      }
      
      label {
        display: block;
       
        font-weight: bold;
        color: #01080f;
      }
      
      input[type="text"],
      select,
      input[type="number"] {
        display: block;
        width: 70%;
        padding: 5px;
        border: none;
        border-radius: 5px;
        margin-bottom: 10px;
        font-size: 16px;
        background-color: #ecf0f1;
        border: 1px solid #bdc3c7;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        color: #01080f;
      }
      
      select {
        background-image: linear-gradient(to bottom, #3498db, #2980b9);
        color: #fff;
        border: none;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }
      
      select option {
        background-color: #fff;
        color: #2c3e50;
      }
      
     button{

      width: 40%;
      background-color: #34a0e2;
      border-radius: 5px;
      padding: 2px;
      box-shadow: wheat;
      border-color: #2980b9;


     }
     .homepage_link{
      background-color:#ecf0f1;
      text-decoration: none;
      padding: 5px;
      color: #01080f;
      font-size: 0.8rem;
      border: 1px solid black;
     }



    </style>
    
</head>
<body>
    <br><br><br>
    <form action="#" method="post">
        <div class="p1">
            <h1>feedback</h1>
            service :<select name="service" >
                <option>options</option>
                <option value="boarding">boarding</option>
                <option value="daycare">daycare</option>
                <option value="dayout">dayout</option>
                <option value="pooling">pooling</option>
                <option value="grooming">grooming</option>
            </select>
            feedback : <textarea name="comment" placeholder="comments" cols="20" rows="4"></textarea>
        </div>
        <div style="padding: 10px;">
            <input type="submit" name="submit" value="submit"><br><br><a class="homepage_link" href="home.php">home_page</a>
        </div>
    </form>
    <h1>Other users reviews</h1>
    
    <?php
    $sql="SELECT * FROM feedback ";
            $result=$con->query($sql);
            echo '<center>';
            echo '<br><br>';
            if (mysqli_num_rows($result)>0) {
                while ($feedback=mysqli_fetch_array($result)) {
                echo '<div class="feedback">';
                 echo 'user : '.$feedback['user'].'<br>';
                 echo 'service : '.$feedback['service'].'<br>';
                 echo 'review : '.$feedback['reviews'].'<br>';
                    
                 echo '</div>';
                 echo '<br><br>';
                }
            }
            ?>
    
</body>

</html>

