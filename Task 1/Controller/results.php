<?php
$validatefirstname="";
$validatelastname="";
$validateage="";
$validatecheckbox="";
$validateradio="";
$validateemail="";
$validatepassword="";
$validatefile="";
$L1=$L2=$L3="";
$firstname=$lastname=$age=$email=$pwd=$Programmer="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$firstname=$_REQUEST["firstname"];
$lastname=$_REQUEST["lastname"];
$age=$_REQUEST["age"];
$email=$_REQUEST["email"];
$pwd=$_REQUEST["pwd"];
if(empty($_REQUEST["firstname"]) || (strlen($_REQUEST["firstname"])<5))
{
    $validatefirstname= "You must enter First Name||";

}
else
{
    $firstname=$_REQUEST["firstname"];
    $validatefirstname = "Your First Name is ".$firstname;
}

if(empty($_REQUEST["lastname"]) || (strlen($_REQUEST["lastname"])<5))
{
    $validatelastname= "You must enter Last Name||";

}
else
{
    $lastname=$_REQUEST["lastname"];
    $validatelastname = " || Your Last Name is : ".$lastname;
}

if(empty($_REQUEST["age"]) || (strlen($_REQUEST["age"])<5))
{
    $validateage= "You must enter Age||";

}
else
{
    $age=$_REQUEST["age"];
    $validateage = " || Your Age is : ".$age;
}

if(!isset($_REQUEST["Languague1"])&&!isset($_REQUEST["Languague2"])&&!isset($_REQUEST["Languague3"]))
{
    $validatecheckbox = "please select at least one checkbox ||";
    
}
else{
   if(isset($_REQUEST["Languague1"]))
   {
       $L1= $_REQUEST["Languague1"];
   }
   if(isset($_REQUEST["Languague2"]))
   { 
       $L2= $_REQUEST["Languague2"];
   }
   if(isset($_REQUEST["Languague3"]))
   {
    $L3= $_REQUEST["Languague3"];
   }
}
if(isset($_REQUEST["Programmer"]))
{
    $validateradio= $_REQUEST["Programmer"];
}
else{
    $validateradio= "Please select at least one Radio ||";
}

if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $validateemail="You must enter Email ||";
}
else{
    $validateemail= " || Your Email is\n ".$email;
}

 if(!preg_match("/(?=.*[@#$%^&+=]).*$/", $pwd)) {
                $pwd = "Password at least contain 1 special character||";
            } 
            if(strlen($pwd) < 8) {
                $pwd = "Password must contain at least 8 characters||";
            }
            else {
                $validatepassword= " || Your Password is ".$pwd;
            }


}
?>
