
<?php
  $fname=$_POST['fname'];
  $mname=$_POST['mname'];
  $lname=$_POST['lname'];
  $email=$_POST['mail'];
  $phone=$_POST['phone'];
  $uname=$_POST['uname'];
  $pass=$_POST['pass'];
  $cpass=$_POST['cpass'];
  $address=$_POST['add'];
  $pin=$_POST['pin'];
  $stateslist=$_POST['stateslist'];
  $gender=$_POST['gender'];
  $dob=$_POST['bday'];
  $acount=$_POST['acc'];
  if(!empty($fname) || !empty($mname) || !empty($lname) || !empty($email) || !empty($phone) || !empty($uname) || !empty($pass) ||!empty($cpass) || !empty($address) || !empty($pin) || !empty($statelist) || !empty($gender) || !empty($dob) || !empty($acount) )
  {
     $host="localhost";
     $dbusername="wmp";
     $dbpassword="[Yhau$oN}ysiw\-9";
     $dbname="water";
     $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
    if(mysqli_connect_error())
{
    die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else
{  

   $sql = "INSERT INTO wmp (fname,mname,lname,email,phonenumber,username,password,cpassword,address,pincode,state,sex,dob,accounttype) values ('$fname','$mname','$lname','$email','$phone','$uname','$pass','$cpass','$address','$pin','$stateslist','$gender','$dob','$acount')"; 
   
   if($conn->query($sql)===true){
      echo "data entered sucessfully";
}      
  else
{
   echo "Error: ".$sql."<br>".$conn->error;
}
  
}$conn->close();
  }  
  else
{
  echo "all element should be filled";
  die();
}
?>