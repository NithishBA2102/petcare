<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>logout</title>
    </head>
    <body>
        <?php
        // put your code here
        session_start();
        unset($_SESSION["username"]);
        header("Location:login1.php");
        ?>
    </body>
</html>