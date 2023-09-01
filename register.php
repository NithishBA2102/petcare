<!--register page    -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registration</title>
    </head>
    <style>
         body{
            display: grid;
            background-blend-mode:darken;
            background-size: cover;
            background-repeat:no-repeat;
            background-attachment:fixed;
            justify-content: center;
            margin: auto;    
        }
        .c1 {
            display: grid;
            color:black;
            justify-content: center;
            width: 500px;
            height: 370px;
            margin-left: 2cm;
            margin-top: 2cm;
            
            background: transparent;
            border: 1px solid #342e2e70;
            backdrop-filter: blur(5px);
            border-radius: 20px; 
        }
        input{
            width:400px;
            font-size: 16px;
            background-color: #ecf0f1;
            border: 1px solid #bdc3c7;
            border-radius: 10px;
            padding: 5px;
            margin-left:auto;
        }
        button{  background-color:white;
            border: 1px solid #bdc3c7;
            border-radius: 5px;
            padding: 7px;
            margin-left: 3cm;
            width:150px;
        }
        #l{ margin-left: 1cm;
}

</style>
    
    <body>
        <div class="c1">
        <form  action="" method="post" >
            <div class="center">
            <h1>Registration</h1>
            <input type="text"   name="Name" placeholder ="Enter your Name"><br/> <br>
            <input type="email"   name="Emailid" placeholder="Enter Email ID"><br/> <br>
            <input type="password"   name="Password" placeholder="Enter Password"> <br/><br>
            <input type="text"   name="Contact" placeholder="Phone Number"><br/><br>
            <br></br>
            <button type="submit"  name="submit" value="Register" >Submit</button>
            <br>
            <br>
            </div>
        </form>
        </div>
        <div> <h2>already registered click login <h2>
            <button onclick="window.location='login1.php'" > Login</button>
            </div>
             <br/><br/>
             
            <?php
    
        $Name = $Eid = $Password = $Contact =$Address= "" ;
        
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $Name = $_POST['Name'];
            $Eid = $_POST['Emailid'];
            $Password = $_POST['Password'];
            $Contact = $_POST['Contact'];


            $con = mysqli_connect("localhost","root","","pet_care");                      
       
			        $query = "INSERT INTO `register` (Name, Emailid, Password, Contact) VALUES ( '$Name','$Eid', '$Password', '$Contact')";
                        $result = mysqli_query($con,$query);

                        if($result){
			        echo "<h2 style='color:blue; margin-left :7cm;'> Registration successful</h2>";
			            }
                                else
                             {
                                echo ("Fail"); 
                             }
                     } 
        ?>
    </body>
</html>
