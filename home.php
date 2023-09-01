<!-- home screen -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home screen</title>
    <style>
        body{
            display: grid;
            border-radius: 10px;
            background-position:center top;
            background-attachment:fixed;
            min-height: 100vh;
            background-image:url("d.jpg");
            background-blend-mode:darken;
            background-size: cover;
            justify-content:center;
            margin:auto;
 
        }
        #dd{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }


        .dd1{
            width: 200px;
            margin:100px;
            position: relative;
            text-align: center;
        }


        .jj{opacity:0.5;
        margin-left: 0.3cm;;
        }


        .mm{  border-radius: 10px;
            box-shadow: 15px 10px 10px 0px rgb(196, 159, 203);
        }



        .bf{
            position: absolute;
            top: 30px;
            left: 40px;
            margin-right: 25cm;
            text-align: center;
         
        }
        button{
            padding:15px;
            background-color:white;
            margin:10px;
            border-radius: 5px;

        }
        

    </style>
</head>
<body>
    <div class="button">
        <button onclick="window.location='home.php' ">Home</button>
        <button  onclick="window.location='logout.php'">logout</button>
        <button  onclick="window.location='history.php'">booking_history</button>
        <button  onclick="window.location='feedback.php'">feedback</button>
        <h1 style="color:white;" >Pet Care Service</h1>
        
    </div>
    <div id=dd>

        <div class="dd1">
           <class=mm width="300px";>
           <button onclick="window.location='boarding.php'">Pet Boarding</button>
              
        </div>

        <div class="dd1">
            <class=mm width="300px"  >
            <button onclick="window.location='pet_daycare.php'">Pet daycare</button>
          
        </div>

        <div class="dd1">
            <class=mm width="300px">
            <button onclick="window.location='dayout.php'">Pet day out</button>
          
        </div>

        <div class="dd1">
            <class=mm width="300px" >
            <button onclick="window.location='pooling.php'">Pet pooling</button>
            
        </div>

        <div class="dd1" >
            <class=mm width="300px">
            <button onclick="window.location='grooming.php'">Pet grooming</button>
            
        </div>
       
    </div>
</body>
</html>



