<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking_history</title>
    
    <style>
      body{
            
            background-size: cover;
            background-repeat:no-repeat;
            background-attachment:fixed;
            justify-content: center;
            margin: auto;
            background-blend-mode:darken;
      }
      
      
      h1 {
        text-align: center;
        font-size: 36px;
        margin-bottom: 30px;
        color: #170230;
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
      


     .bookings{
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
    </style>
  </head>
    <body>

        <h1>Booking History of <?php session_start();echo $_SESSION['id'];?> </h1>
        <center>
        <div>
        <button type="submit" name="submit" onclick="window.location='home.php'"  >Home</button>
    </div>
        </center>
       
    

        <?php
            
            $user_email=$_SESSION["id"];
            $con = mysqli_connect("localhost","root","","pet_care"); 


            if (isset($_POST["delete_boarding"])) {
                $sql='DELETE FROM `boarding` WHERE `book_id` = "'.$_POST["delete_boarding"].'"';
                $result=$con->query($sql);

                if ($result) {
                    echo '<script>alert("deleted")</script>';
                }
            }
            $sql="SELECT * FROM boarding  WHERE user_email= '$user_email'";
            $result=$con->query($sql);
            echo '<center>';
            echo '<br><br>';
            if (mysqli_num_rows($result)>0) {
                while ($boarding=mysqli_fetch_array($result)) {
                echo '<div class="bookings">';
                 echo 'ownername : '.$boarding['username'].'<br>';
                 echo 'services : '.$boarding['services'].'<br>';
                 echo 'Pet_name : '.$boarding['petname'].'<br>';
                 echo 'Pet_breed : '.$boarding['petbreed'].'<br>';
                 echo 'check_in : '.$boarding['checkin'].'<br>';
                 echo 'check_out : '.$boarding['checkout'].'<br>';
                 echo 'book_id : '.$boarding['book_id'].'<br>';
                 echo '<button type="submit" form = "delete_boarding" name ="delete_boarding" value="'.$boarding['book_id'].'">delete</button>';
                 echo '</div>';
                 echo '<br><br>';
                }
            }
            echo '<form id="delete_boarding" action="" method="post">
        
            </form>';
            if (isset($_POST["delete_daycare"])) {
              $sql='DELETE FROM `daycare` WHERE `book_id` = "'.$_POST["delete_daycare"].'"';
              $result=$con->query($sql);

              if ($result) {
                  echo '<script>alert("deleted")</script>';
              }
          }
            $sql="SELECT * FROM daycare  WHERE user_email= '$user_email'";
            $result=$con->query($sql);
            echo '<center>';
            echo '<br><br>';
            if (mysqli_num_rows($result)>0) {
                while ($daycare=mysqli_fetch_array($result)) {
                echo '<div class="bookings">';
                 echo 'ownername : '.$daycare['username'].'<br>';
                 echo 'services : '.$daycare['services'].'<br>';
                 echo 'Pet_name : '.$daycare['petname'].'<br>';
                 echo 'Pet_breed : '.$daycare['petbreed'].'<br>';
                 echo 'start : '.$daycare['start'].'<br>';
                 echo 'end: '.$daycare['end'].'<br>';
                 echo 'book_id : '.$daycare['book_id'].'<br>';
                 echo '<button type="submit" form = "delete_daycare" name ="delete_daycare" value="'.$daycare['book_id'].'">delete</button>';           
                 echo '</div>';
                 echo '<br><br>';
                }
            }
            echo '<form id="delete_daycare" action="" method="post">
        
            </form>';



            if (isset($_POST["delete_dayout"])) {
              $sql='DELETE FROM `dayout` WHERE `book_id` = "'.$_POST["delete_dayout"].'"';
              $result=$con->query($sql);

              if ($result) {
                  echo '<script>alert("deleted")</script>';
              }
          }
            $sql="SELECT * FROM dayout  WHERE user_email= '$user_email'";
            $result=$con->query($sql);
            echo '<center>';
            echo '<br><br>';
            if (mysqli_num_rows($result)>0) {
                while ($dayout=mysqli_fetch_array($result)) {
                echo '<div class="bookings">';
                 echo 'ownername : '.$dayout['username'].'<br>';
                 echo 'services : '.$dayout['services'].'<br>';
                 echo 'Pet_name : '.$dayout['petname'].'<br>';
                 echo 'Pet_breed : '.$dayout['petbreed'].'<br>';
                 echo 'date : '.$dayout['date'].'<br>';
                 echo 'time : '.$dayout['time'].'<br>';
                 echo 'book_id : '.$dayout['book_id'].'<br>';
                 echo '<button type="submit" form = "delete_dayout" name ="delete_dayout" value="'.$dayout['book_id'].'">delete</button>';  
                 echo '</div>';
                 echo '<br><br>';
                }
            }
            echo '<form id="delete_dayout" action="" method="post">
        
            </form>';



             if (isset($_POST["delete_grooming"])) {
              $sql='DELETE FROM `grooming` WHERE `book_id` = "'.$_POST["delete_grooming"].'"';
              $result=$con->query($sql);

              if ($result) {
                  echo '<script>alert("deleted")</script>';
              }
          }
            $sql="SELECT * FROM grooming  WHERE user_email= '$user_email'";
            $result=$con->query($sql);
            echo '<center>';
            echo '<br><br>';
            if (mysqli_num_rows($result)>0) {
                while ($grooming=mysqli_fetch_array($result)) {
                echo '<div class="bookings">';
                 echo 'ownername : '.$grooming['username'].'<br>';
                 echo 'services : '.$grooming['services'].'<br>';
                 echo 'Pet_name : '.$grooming['petname'].'<br>';
                 echo 'Pet_breed : '.$grooming['petbreed'].'<br>';
                 echo 'date: '.$grooming['date'].'<br>';
                 echo 'time : '.$grooming['time'].'<br>';
                 echo 'book_id : '.$grooming['book_id'].'<br>';
                 echo '<button type="submit" form = "delete_grooming" name ="delete_grooming" value="'.$grooming['book_id'].'">delete</button>';  
                 echo '</div>';
                 echo '<br><br>';
                }
            }
            echo '<form id="delete_grooming" action="" method="post">
        
            </form>';

            
            if (isset($_POST["delete_pooling"])) {
              $sql='DELETE FROM `pooling` WHERE `book_id` = "'.$_POST["delete_pooling"].'"';
              $result=$con->query($sql);

              if ($result) {
                  echo '<script>alert("deleted")</script>';
              }
          }
            $sql="SELECT * FROM pooling  WHERE user_email= '$user_email'";
            $result=$con->query($sql);
            echo '<center>';
            echo '<br><br>';
            if (mysqli_num_rows($result)>0) {
                while ($pooling=mysqli_fetch_array($result)) {
                echo '<div class="bookings">';
                 echo 'ownername : '.$pooling['username'].'<br>';
                 echo 'services : '.$pooling['services'].'<br>';
                 echo 'Pet_name : '.$pooling['petname'].'<br>';
                 echo 'Pet_breed : '.$pooling['petbreed'].'<br>';
                 echo 'date: '.$pooling['date'].'<br>';
                 echo 'time : '.$pooling['time'].'<br>';
                 echo 'book_id : '.$pooling['book_id'].'<br>';
                 echo '<button type="submit" form = "delete_pooling" name ="delete_pooling" value="'.$pooling['book_id'].'">delete</button>';  
   
                 echo '</div>';
                 echo '<br><br>';
                }
            }
            echo '<form id="delete_pooling" action="" method="post">
        
            </form>';
            echo '</center>';

        ?>


         </body>
</html>