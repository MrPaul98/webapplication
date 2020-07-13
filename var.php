<?php
   session_start();
  $uname=$_POST['uname'];
  $pss=$_POST['psw'];
     $host="localhost";
     $dbusername="root";
     $dbpassword="";
     $dbname="water";
     $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
    if(mysqli_connect_error())
{
    die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else
{  
   $var="select * from wmp where username='$uname' && password='$pss'";
   $re=mysqli_query($conn,$var);
   $sql=mysqli_num_rows($re);
 if($sql==1)
 {
	 $_SESSION['uname']=$uname;
	 setcookie("uname","sayandippa",time()+60*60*7,"localhost/water.php");
     header('location:http://localhost/web.php');  
	  setcookie("uname","sayandippa",time()+60*60*7,"localhost/water.php");
}      
  else
{
   
   header('location:http://localhost/water.php');
}
  
}$conn->close();
?>
