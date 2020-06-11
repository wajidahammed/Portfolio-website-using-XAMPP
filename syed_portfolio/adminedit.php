<?php
$conn = mysqli_connect('localhost:3306','wajiduta_wp1','8179667641My');    if(!$conn)
    {
          echo "Server not connected";
    }
?>



<!DOCTYPE html>
<html style="width:100%;height:100%;">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <title>ADMIN EDIT</title>
  <link rel="stylesheet" href="portfolio.css">
</head>
<body>

<form method="POST" action="adminedit2.php">
		<label style="margin-left: 100px">EDUCATION</label>
  		<?php
                  if(!mysqli_select_db($conn,'wajiduta_Portfolio'))
                  {
                    echo "Database not selected";
                  }
                  else
                  {

                        $sql = "SELECT * FROM Education;";
                        $result= mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0)
                        {
                          while($row= mysqli_fetch_assoc($result))
                          {
                              echo '<form method="POST" action="adminedit2.php">';
                              echo '<br>ID <input type="text" name="ID" id="ID" value="'.$row['ID'].'">';
                              echo '<br>Degree <input type="text" name="Degree" id="Degree" value="'.$row['Degree'].'" ><br/>';
                              echo 'Duration <input type="text" name="Duration" id="Duration" value="'.$row['Duration'].'"><br/>';
                              echo 'Course <input type="text" name="Course" id="Course" value="'.$row["Course"].'"><br/>';
                              echo 'College <input type="text" name="College" id="Email" value="'.$row['College'].'"><br/>';
                              echo '<input type="submit" value="Edit" name="Edit" id="submit">';
                              echo'</form>';
                          }
                        }
                  }
  		?>
  


    <label style="margin-left: 100px">WORK EXPERIENCE</label>
      <?php
                  if(!mysqli_select_db($conn,'wajiduta_Portfolio'))
                  {
                    echo "Database not selected";
                  }
                  else
                  {

                        $sql = "SELECT * FROM `Professional Experience`;";
                        $result= mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0)
                        {
                           while($row= mysqli_fetch_assoc($result))
                          {
                              echo '<form method="POST" action="adminedit2.php">';
                              echo '<br>ID <input type="text" name="ID" id="ID" value="'.$row['ID'].'">';
                              echo '<br>CompanyName <input type="text" name="CompanyName" id="CompanyName" value="'.$row['CompanyName'].'" ><br/>';
                              echo 'Role <input type="text" name="Role" id="Role" value="'.$row['Role'].'"><br/>';
                              echo 'Duration <input type="text" name="Duration" id="Duration" value="'.$row["Duration"].'"><br/>';
                              echo 'Description <input type="text" name="Description" id="Description" value="'.$row['Description'].'"><br/>';
                              echo '<input type="submit" value="Edit" name="Update" id="submit">';
                              echo'</form>';
                          }
                        }
                  }
      ?>
  <br>
  
  <label style="margin-left: 100px">HIRE ME</label>
      <?php
                  if(!mysqli_select_db($conn,'wajiduta_Portfolio'))
                  {
                    echo "Database not selected";
                  }
                  else
                  {

                        $sql = "SELECT * FROM `hireme`;";
                        $result= mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0)
                        {
                           while($row= mysqli_fetch_assoc($result))
                          {
                              echo '<form method="POST" action="adminedit2.php">';
                              echo '<br>ID <input type="text" name="ID" id="ID" value="'.$row['ID'].'">';
                              echo '<br>price <input type="text" name="price" id="price" value="'.$row['price'].'" ><br/>';
                              echo 'title <input type="text" name="title" id="title" value="'.$row['title'].'"><br/>';
                              echo 'features <input type="text" name="features" id="features" value="'.$row["features"].'"><br/>';
                              echo '<input type="submit" value="Edit" name="hireme" id="submit">';
                              echo'</form>';
                          }
                        }
                  }
      ?>
    


 </body>
 </html>