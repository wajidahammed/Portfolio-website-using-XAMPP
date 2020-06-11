<?php

	$conn = mysqli_connect('localhost:3306','wajiduta_wp1','8179667641My');
	if(!$conn)
	{
		echo "Server not connected";
	}
	
	if(!mysqli_select_db($conn,'wajiduta_Portfolio'))
	{
		echo "Database not selected";
    
}

	echo '<script> alert("Database connected");</script>';
    

    


    $Name = $_POST['Name'];
	$LastName = $_POST['LName'];
	$Email = $_POST['Email'];
	$User_ID = $_POST['User'];
	$Password = $_POST['Password'];
	$Repeat_Password = $_POST['Repeat'];

	$error_message = "";
$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
$string_exp = "/^[A-Za-z .'-]+$/";
        
        if(!preg_match($email_exp,$Email)) 
        {
            $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
        }
         
         
        if(!preg_match($string_exp,$Name)) 
        {
            $error_message .= 'The First Name you entered does not appear to be valid.<br />';
        }

        if(!preg_match($string_exp,$LastName)) 
        {
            $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
        }
        
        if(strlen($User_ID) < 4) 
        {
            $error_message .= 'The User Name you entered does not appear to be valid.<br />';
        } 

        if(strlen($Password) < 4) 
        {
            $error_message .= 'The Password you entered does not appear to be valid.<br />';
        }
         
        if(strlen($Repeat_Password) < 4) 
        {
            $error_message .= 'Repeat Password you entered do not appear to be valid.<br />';
        }
         
        if(strlen($error_message) > 0) 
        {
        	echo 'Please return back to the previous screen <br>';
        	die($error_message);
        }


    $query = "SELECT * FROM  'Signup'  WHERE 'User_ID'='$User_ID'";
	$result = mysqli_query($query);
	if(!mysqli_num_rows($result) )
	{
		echo '<script> alert("Insert value process");</script>';
		
		$sql = "INSERT INTO Signup (Name,Last_Name,Email,User_ID,Password,Repeat_Password) 
			VALUES('$Name','$Last_Name','$Email','$User_ID','$Password','$Repeat_Password')";			
	}
	if(!mysqli_query($conn,$sql))
	{
		echo '<script language="javascript">';
    	echo 'alert("User already exists")';
    	echo '</script>';
	}
	
	else
	{
		echo '<script language="javascript">';
    	echo 'alert("New User")';
    	echo '</script>';
		echo '<script language="javascript">';
    	echo 'alert("Signup Success")';
    	echo '</script>';
	}

header("refresh:2; url=Home.php");

?>



/*$name_error = $email_error ="";
$name = $email = $message ="";



if($_SERVER["REQUEST_METHOD"]=="POST")
{

	if(empty($_POST["name"]))

	{
		$name_error="Name is required";
	}
		else
		{
			$name = test_input($_POST["name"]);

		}


	if(empty($_POST["email"]))
   {
		$email_error="Email is required";
	}
		else
		{
			$email = test_input($_POST["email"]);

		}

	if(!filter_var($email,FILTER_VALIDATE_EMAIL))
		{

			$email_error="Invalid Email Format";
		}

	if(empty($_POST["message"]))
	    {
		$message="";
		}
		else
		{
			$message = test_input($_POST["message"]);

		}


		function test_input($data){
			$data =trim($data);
			$data =stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;

		}
}
*/



	