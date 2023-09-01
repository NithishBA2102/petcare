<!-- 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registration</title>
    </head>
    <style>
.center {
  
  text-align: center;
  background: aqua;
  margin-top:2cm ;
}
body{
    display: grid;
            background-color:rgba(36, 12, 1, 0.811);
        
            border-radius: 10px;
            box-shadow:3px 3px 5px rgba(11, 128, 179, 0.941);
            background-repeat:no-repeat;
            background-position:center top;
            background-attachment:fixed;
            min-height: 100vh;
            justify-content: center;  
            background-attachment:fixed;  
            
        }

.c1{
            margin-top: 1.5cm;
            display: grid;
            background-color:aqua;
            justify-content: center;
            width: 280px;
            height: 370px;
            margin-left: 2cm;
            background-color:aqua;
            border-radius: 10px;
            box-shadow:  15px 10px 10px 0px rgb(1, 84, 77);

}
input{
    margin: 2px;
}
</style>
    
    <body>
       
        <div class="c1">
        <form  action="" method="post" >
            <div class="center">
            <h1 style="color:white">Registration</h1>
            <input type="text"   name="Name" placeholder ="Enter Name"><br/> 
            <input type="email"   name="Emailid" placeholder="Email ID"><br/> 
            <input type="password"   name="Password" placeholder="Enter Password"> <br/>
            <input type="text"   name="Contact" placeholder="Contact Number"><br/>
            <input type="text"   name="Address" placeholder="Enter home address"><br/></br>
            <button type="submit"  name="submit" value="Register" >submit</button>
            <br>
      
            
            </div>
        </form>
        <div> <h3 style ="color:red">If already regisered click on login button <h3>
             <button onclick="window.location='L.php'" > Login</button></div>
             <br/><br/>
        
        
        </div>
        
        
        <?php
    
        $Name = $Eid = $Password = $Contact =$Address= "" ;
        
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $Name = $_POST['Name'];
            $Eid = $_POST['Emailid'];
            $Password = $_POST['Password'];
            $Contact = $_POST['Contact'];
            $Address=$_POST['Address'];

            $con = mysqli_connect("localhost","root","","assignment");                      
       
			        $query = "INSERT INTO `regsiter` (Name, Emailid, Password, Contact, Address) VALUES ( '$Name','$Eid', '$Password', '$Contact', '$Address' )";
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
                    -->