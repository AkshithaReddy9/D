<?php
   $User_Name = $_POST['user'];
   $Last_Name = $_POST['last'];
   $Gender = $_POST['Gender'];
   $Phone_Num = $_POST['num'];
   $Email = $_POST['mail'];
   $Password = $_POST['pwd'];
if( !empty($User_Name) || !empty($Last_Name) || !empty($Gender) || !empty($Phone_Num) || !empty($Email) || !empty($Password) )    {
       $host="localhost";
       $user="root";
       $password="";
       $db="registration";
       $conn = new mysqli($host, $user, $password, $db);
 if(mysqli_connect_error())   {
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
  } else {
        $SELECT="SELECT Email from informtaion where Email=? Limit 1"
        $INSERT="INSERT Into information (User_Name, Last_Name, Gender, Phone_Num, Email, Password)  values(?, ?, ?, ?, ?, ?)");        
        $stmt = $conn->prepare($SELECT);
        $stmt->$bind_param("s",$Email);
        $stmt->execute();
        $stmt->$bind_result("s",$Email);
        $stmt->store_result();
        $stmt = $stmt->num_rows;   
        if($rnum==0) {
           $stmt->close();	
        $stmt = $conn->prepare($INSERT);
        $stmt->$bind_param("sssiss", $User_Name, $Last_Name, $Gender, $Phone_Num, $Email, $Password);
        $stmt->execute();
        echo "New record inserted successfully";
        }  else {
              echo "Someone already registered using this email";
                }
    $stmt->close();
    $conn->close();
      }
else {
       echo "All field are required";
       die();
        }
?> 
