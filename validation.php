<?php
$fsname=$_POST['fname'];
$lsname=$_POST['lname'];
$mail=$_POST['mailid'];
$passwd=$_POST['pwd'];
$contactno=$_POST['contact'];
$year=$_POST['yearofStudy'];
$address=$_POST['add'];
$profilepic=$_POST['pic'];


echo "firstname : ".$fsname."<br>";
echo "lastname : ".$lsname."<br>";
echo "email : ".$mail."<br>";
echo "password : ".$passwd."<br>";
echo "mobile : ".$contactno."<br>";
echo "year of study : ".$year."<br>";
echo "address : ".$address."<br>";
echo "profile : ".$profilepic."<br>";
if(!$profilepic)
{
    echo "failed to upload a picture";
}


























?>
