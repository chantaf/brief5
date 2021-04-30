<?php

    require_once "controller/Home.php";
    require_once "db/connect.php";

    
    class LoginModel{



        // select
        function getAll(){
        
            $query= "SELECT * FROM `user`ORDER BY id DESC";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }
  


        //insert
        function insert($Name,$Email,$Password,$role){
            
            $query= "INSERT INTO `user`(`name`, `email`, `password`, `role`) VALUES ('$Name','$Email','$Password','$role')";
            $Nobjet = new connection();
            $con=$Nobjet->connect();
            $result= $con->query($query);
        }

    }
