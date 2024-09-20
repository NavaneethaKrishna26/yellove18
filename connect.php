<?php
   $yourname=$_POST['yourname'];
   $yourphoneno=$_POST['yourphoneno'];
   $yourmail=$_POST['yourmail'];

   $conn= new mysqli('localhost','root','','test1');
   if($conn->connect_error){
       die('Connection Failed :'.$conn->connect_error);
   }else{
    $stmt=$conn->prepare("insert into registration2(yourname,yourphoneno,yourmail) values(?,?,?)");
    $stmt->bind_param("sss",$yourname,$yourphoneno,$yourmail);
    $stmt->execute();
    echo "Registration Successfully...";
    $stmt->close();
    $conn->close();
   }

?>