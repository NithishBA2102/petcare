<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            min-height: 100vh;
            background: linear-gradient(rgba(0,0,0,0.6),rgba(0, 0, 0, 0.6)),url('book.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: grid;
            justify-content: center;
            align-content: center;
        }
        .ctn{
            min-height: 150px;
            width: 400px;
            background-color: rgba(95, 158, 160, 0.619);
            padding: 10px;
            border-radius: 5px;
            display: grid;
            justify-content: center;
        }
        .p1{
            width: 300px;
            min-height: 100px;
            padding: 10px;
            background-color: rgba(62, 137, 140, 0.689);
            border-radius: 5px;
            margin: 10px;
        }


    </style>
</head>
<body>
    <div class="ctn">
        <h1>booking history</h1>
        <?php
        session_start();
        require('dbcon.php');
        if (isset($_POST['book_id'])) {
            $sql='DELETE FROM `pet_info` WHERE `book_id` = "'.$_POST['book_id'].'"';
            $result=$conn->query($sql);
            $sql='DELETE FROM `bookings` WHERE `booking_id` = "'.$_POST['book_id'].'"';
            $result=$conn->query($sql);
            if ($result) {
                echo '<script>alert("deleted")</script>';
            }
        }
        $sql="SELECT * FROM bookings NATURAL JOIN services NATURAL JOIN user WHERE user.user_name='".$_SESSION['user']."'";
        $result=$conn->query($sql);
        
        if (mysqli_num_rows($result)>0) {
           while ($bookings=mysqli_fetch_array($result)) {
            echo 'booking_id : '.$bookings['booking_id'];
            $sql1="SELECT * FROM `pet_info` WHERE `book_id` = '".$bookings['booking_id']."'";
            $result1=$conn->query($sql1);
            $pets=mysqli_fetch_array($result1);
            echo '
                <div class="p1">
                service : '.$bookings['service_type'].'<br>
                        pet name:'.$pets['name'].'<br>
                        pet type:'.$pets['pet_type'].'<br>
                        pet breed:'.$pets['breed'].'<br>';

                        if ($bookings['service_type']!='grooming' and $bookings['service_type']!='pooling') {
                            echo '
                            start date : '.$bookings['s_date'].' <br>
                            end date : '.$bookings['e_date'].'  <br>'
                            
                             ;
                        }
                        else{
                            echo '
                            date : '.$bookings['s_date'].' <br>
                            time : '.$bookings['s_time'].'  <br>'
                            ;}
                        
                        echo 'Amount: '.$bookings['total_price'].'status: '.$bookings['booking_status'];
                        if ($bookings['booking_status']=='upcoming') {
                            echo '<br><button form="delete" type="submit" name="book_id" value="'.$bookings['booking_id'].'">delete</button>' ;                            
                        } 
                        echo '</div>';
                    
                }
        }
        else {
            echo '        <div class="p1">

            <h1>No bookings yet!</h1>
        </div>';
        }
                
    ?>
    <form id="delete" action="" method="post">
        
    </form>
          </div>  
    </div>
</body>
</html>