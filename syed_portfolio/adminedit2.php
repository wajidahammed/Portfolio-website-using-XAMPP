<?php
	if(isset($_POST['Edit']))
	{
$conn = mysqli_connect('localhost:3306','wajiduta_wp1','8179667641My'); 
			if(!$conn)
			{
				echo "Server not connected";
			}
			else
			{
				echo '<script language="javascript">';
				echo 'alert("Database connected")';
				echo '</script>';
				if(!mysqli_select_db($conn,'wajiduta_Portfolio'))
			    {
			      	echo "Database not selected";          
			    }
			    else
			    {
			    	echo '<script language="javascript">';
					echo 'alert("Database selected")';
					echo '</script>';

					$Degree = $_POST['Degree'];
					$Duration = $_POST['Duration'];
					$Course = $_POST['Course'];
					$College = $_POST['College'];
					$ID = $_POST['ID'];
				

					$sql= "UPDATE Education SET Degree='$Degree',Duration='$Duration',Course='$Course',College='$College' WHERE ID='$ID'";
					echo $ID;
					if(mysqli_query($conn, $sql))
					{
						echo '<script language="javascript">';
						echo 'alert("Database edited")';
						echo '</script>';
						header("refresh:2; url=adminedit.php");
					}
					else
					{
						echo '<script language="javascript">';
						echo 'alert("Database not edited")';
						echo '</script>';
						header("refresh:1; url=adminedit.php");
					}

				}
			}
	}

	if(isset($_POST['Update']))
	{
			$conn = mysqli_connect('localhost:3306','wajiduta_wp1','8179667641My'); 

			if(!$conn)
			{
				echo "Server not connected";
			}
			else
			{
				echo '<script language="javascript">';
				echo 'alert("Database connected")';
				echo '</script>';
				if(!mysqli_select_db($conn,'wajiduta_Portfolio'))
			    {
			      	echo "Database not selected";          
			    }
			    else
			    {
			    	echo '<script language="javascript">';
					echo 'alert("Database selected")';
					echo '</script>';

					$CompanyName = $_POST['CompanyName'];
					$Role = $_POST['Role'];
					$Duration = $_POST['Duration'];
					$Description = $_POST['Description'];
					$ID = $_POST['ID'];

					$sql= "UPDATE `Professional Experience` SET CompanyName= '$CompanyName',Role='$Role',Duration='$Duration' WHERE ID='$ID'";
					
					if(mysqli_query($conn, $sql))
					{
						echo '<script language="javascript">';
						echo 'alert("Database edited")';
						echo '</script>';
						header("refresh:2; url=admin.php");
					}
					else
					{
						echo '<script language="javascript">';
						echo 'alert("Database not edited")';
						echo '</script>';
						header("refresh:1; url=adminedit.php");
					}

				}
			}
	}
	
	if(isset($_POST['hireme']))
	{
			$conn = mysqli_connect('localhost:3306','wajiduta_wp1','8179667641My'); 

			if(!$conn)
			{
				echo "Server not connected";
			}
			else
			{
				echo '<script language="javascript">';
				echo 'alert("Database connected")';
				echo '</script>';
				if(!mysqli_select_db($conn,'wajiduta_Portfolio'))
			    {
			      	echo "Database not selected";          
			    }
			    else
			    {
			    	echo '<script language="javascript">';
					echo 'alert("Database selected")';
					echo '</script>';

					$price = $_POST['price'];
					$title = $_POST['title'];
					$description = $_POST['description'];
				
					$ID = $_POST['ID'];

					$sql= "UPDATE `hireme` SET price= '$price',description='$description',title='$title' WHERE ID='$ID'";
					
					if(mysqli_query($conn, $sql))
					{
						echo '<script language="javascript">';
						echo 'alert("Database edited")';
						echo '</script>';
						header("refresh:2; url=admin.php");
					}
					else
					{
						echo '<script language="javascript">';
						echo 'alert("Database not edited")';
						echo '</script>';
						header("refresh:1; url=adminedit.php");
					}

				}
			}
	}


?>