<?php
	include('db.php');
							
							if (!isset($_FILES['image']['tmp_name'])) {
							echo "";
							}else{
							$file=$_FILES['image']['tmp_name'];
							$image = $_FILES["image"] ["name"];
							$image_name= addslashes($_FILES['image']['name']);
							$size = $_FILES["image"] ["size"];
							$error = $_FILES["image"] ["error"];

							if ($error > 0){
										die("Error uploading file! Code $error.");
									}else{
										if($size > 10000000) //conditions for the file
										{
										die("Format is not allowed or file size is too big!");
										}
										
									else
										{

									move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
									$location=$_FILES["image"]["name"];
									$person= $_POST['person'];
									$cname= $_POST['cname'];
									$distri= $_POST['distri'];
									$address= $_POST['address'];
									$mobile= $_POST['mobile'];
									$landline=$_POST['landline'];
									$email=$_POST['email'];


						mysqli_query($con,"insert into student (person,cname,distri,address,mobile,landline,email,location) 
						values('$person','$cname','$distri','$address','$mobile','$landline','$email','$location')")or die(mysqli_error());
									
									}
										header('location:index.php');
									}
							}
?>								