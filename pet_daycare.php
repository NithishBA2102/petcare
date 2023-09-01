<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pet_daycare</title>
    
    <style>
            body{
            
            background-size: cover;
            background-repeat:no-repeat;
            background-attachment:fixed;
            justify-content: center;
            margin: auto;
            background-blend-mode:darken;
      }
      form {
        max-width: 300px;
        margin: 0 auto;
        font-family: Arial, sans-serif;
        font-size: 16px;
      
        padding: 30px;
        border-radius: 10px;

       
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

        border: 1px solid #bdc3c7;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        color: #01080f;
      }
      
      select {
       
        color: #fff;
        border: none;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }
      
      select option {

        color: #2c3e50;
      }
      
     button{
      width: 40%;

      border-radius: 5px;
      padding: 2px;
      box-shadow: wheat;
      border-color: #2980b9;
      
     }
    </style>
  </head>
    <body>
     
        <div>
          <h1>Pet Daycare Bookings</h1>
          <form action="" method="POST">
            <label for="name">User Name:</label>
            <input type="text" id="name"  name="usename" placeholder="Enter usename" ><br>
            <label for="name">services:</label>
            <input type="text" id="name"  name="services" placeholder="Enter service" ><br>
            <label for="name">Pet Name:</label>
            <input type="text" id="name"  name="petname" placeholder="Enter pet name" ><br>
            <label for="breed">Pet Breed:</label>
            <input type="text" id="breed" name="petbreed" placeholder="Enter pet breed"><br>
            <label for="age">Pet Age:</label>
            <input type="number" id="age" name="petage" placeholder="Enter pet age"><br>
            <label for="date">start_Date:</label>
            <input type="date" id="date" name="start" ><br><br>
            <label for="date">End_Date:</label>
            <input type="date" id="date" name="end" ><br><br>
            <label for="time">from_time:</label>
            <input id="time" type="time" name="from_time"><br><br>
            <label for="time">to_time:</label>
            <input id="time" type="time" name="to_time"><br><br>
            <button type="submit" name="submit"> Submit</button>
          </form>
        </div>
 
      
        <?php
        session_start();
         $username=$services=$name = $breed = $age = $start = $end  = $from_time =$to_time="" ;
        
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $username= $_POST['usename'];
            $services= $_POST['services'];
            $name = $_POST['petname'];
            $breed = $_POST['petbreed'];
            $age = $_POST['petage'];
            $start = $_POST['start'];
            $end = $_POST['end'];
            $from_time= $_POST['from_time'];
            $to_time= $_POST['to_time'];
            $user_email=$_SESSION['id'];
            
            $con = mysqli_connect("localhost","root","","pet_care");                      
       
			        $query = "INSERT INTO `daycare` (username,services, petname,petbreed, petage, start ,  end,from_time,to_time , user_email) 
              VALUES ('$username','$services', '$name', '$breed', '$age', '$start' ,'$end', '$from_time','$to_time','$user_email')";
                        $result = mysqli_query($con,$query);

                        if($result){
                          
			        echo "<h2 style='color:blue; margin-left :10cm;'> Booking successfull</h2>";
                    header("Location: successful.php");
			            }
                                else
                             {
                                echo ("Fail"); 
                             }
                     } 

              
        ?>


         </body>
</html>