<!DOCTYPE html>
<html>
<head>
	<title> Showing the enter form data </title>
</head>
<body>

<h1> The stored form data are </h1>

<?php

if(array_key_exists("submit",$_POST)){

	$link=mysqli_connect("localhost","root","","yellow_page");
	if(!$link){
    die("Connection failed:".mysqli_connect_error() );
}else{
echo "Connected successfully";
}

$query="INSERT INTO details(first_name,last_name,email,sex) VALUES('".mysqli_real_escape_string($link,$_POST["fname"])."','".mysqli_real_escape_string($link,$_POST["lname"])."','".mysqli_real_escape_string($link,$_POST["email"])."','".mysqli_real_escape_string($link,$_POST["sex"])."')";

if(mysqli_query($link,$query)){
     echo " Form data inserted successfully";
}
else{
	echo " Form data cannot submit please try again";
}

}

?>

</body>
</html>