<?php
	session_start();
	$conn = mysqli_connect('localhost:3306','wajiduta_wp1','8179667641My');
	if(!$conn)
	{
		echo "Server not connected";
	}
	
	if(!mysqli_select_db($conn,'wajiduta_Portfolio'))
	{
		echo "Database not selected";
	}

//	echo "Database connected";

	$User_ID = $_POST['Name'];
	$Password = $_POST['Password'];

$error_message = "";
$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
$string_exp = "/^[A-Za-z .'-]+$/";
        
        if(strlen($User_ID) < 4) 
        {
            $error_message .= 'The User Name you entered does not appear to be valid.<br />';
        } 

        if(strlen($Password) < 4) 
        {
            $error_message .= 'The Password you entered does not appear to be valid.<br />';
        }
          
        if(strlen($error_message) > 0) 
        {
        	echo 'Please return back to the previous screen <br>';
        	die($error_message);
        }


    $sql_q = "SELECT User_ID FROM Signup WHERE User_ID='$User_ID' AND Password='$Password';";
		$res = mysqli_query($conn, $sql_q);
		$rowArray = mysqli_fetch_array($res);
		if($User_ID==$rowArray[0])
		{
//		    	$sql = "INSERT INTO signin (User,Password) VALUES('$User','$Password')";
		        $_SESSION["User"]=$User_ID;
        		//if (isset($_SESSION["User"]) && $_SESSION["User"] =='sudharsan_ak')
        		if (isset($User_ID) && $User_ID =='_wajidsyed')
            	{
            		$sql = "INSERT INTO signin (User,Password) VALUES('$User_ID','$Password');";
               		$url1="admin.php";
               		echo '<script>alert("Welcome Admin");</script><script>window.location = "'.$url1.'";</script>';               
            	} 
        		if (isset($User_ID) && $User !='_wajidsyed')
            	{
            		$sql = "INSERT INTO Signup (User_ID,Password) VALUES('$User_ID','$Password')";
	            	$url2="guest.php";
	                echo '<script>alert("Welcome Guest");</script><script>window.location = "'.$url2.'";</script>';
            	}
		}
		else
		{
			$url="Home.php";
			echo '<script>alert("Invalid username or password");</script><script>window.location = "'.$url.'";</script>';
		}
?>