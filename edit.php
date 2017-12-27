<?php 
include ('db.php'); 
include ('header.php'); 
$ID=$_GET['id'];
?>
<body>


<div class="container">
<div class="hero-unit-header">
 <div class="container-con">
<!-- end banner & menunav -->

<div class="container">
<div class="row-fluid">
<div class="span12">
<div class="row-fluid">
<div class="span3"></div>
<div class="span6">


<div class="hero-unit-3">
<center>

<?php
  $query=mysqli_query($con,"select * from student where student_id='$ID'")or die(mysqli_error());
$row=mysqli_fetch_array($query);
  ?>
 <form class="form-horizontal" method="post"  enctype="multipart/form-data" style="float: right;">
                                <legend><h4>Edit</h4></legend>
                                <h4>Image</h4>
                                <hr>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">
										<?php if($row['location'] != ""): ?>
										<img src="upload/<?php echo $row['location']; ?>" width="100px" height="100px" style="border:1px solid #333333;">
										<?php else: ?>
										<img src="images/default.png" width="100px" height="100px" style="border:1px solid #333333;">
										<?php endif; ?>
									</label>
                                    <div class="controls">
                                        <input type="file" name="image" style="margin-left:27px;">
										<button type="submit" name="image" class="btn btn-success" style="margin-top: 20px; margin-right: 131px;">Update</button>
                                    </div>
                                </div>
                                <hr>
                                <h4>Personal Information</h4>
                                <hr>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Contact Person:</label>
                                    <div class="controls">
                                        <input type="text" name="person" required value=<?php echo $row['person']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Company Name:</label>
                                    <div class="controls">
                                        <input type="text" name="cname" required value=<?php echo $row['cname']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Distribution:</label>
                                    <div class="controls">
                                        <input type="text" name="distri" required value=<?php echo $row['distri']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Address:</label>
                                    <div class="controls">
                                        <input type="text" name="address" required value=<?php echo $row['address']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Mobile:</label>
                                    <div class="controls">
                                        <input type="text" name="mobile" required value=<?php echo $row['mobile']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">LandLine:</label>
                                    <div class="controls">
                                        <input type="text" name="landline" required value=<?php echo $row['landline']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Email:</label>
                                    <div class="controls">
                                        <input type="email" name="email" required value=<?php echo $row['email']; ?>>
                                    </div>
                                </div>

								
								 <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success" style="margin-right: 65px;">Save</button>
										<a href="index.php" class="btn">Back</a>
                                    </div>
                                </div>
                            </form>
							
<?php
$id=$_REQUEST['id'];
if (isset($_POST['image'])) {

//image
							$image = $_FILES["image"] ["name"];
							$image_name= addslashes($_FILES['image']['name']);
							$size = $_FILES["image"] ["size"];

move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
$location=$_FILES["image"]["name"];

mysqli_query($con," UPDATE student SET location='$location' WHERE student_id = '$id' ")or die(mysqli_error());
header('location:index.php');
}
?>
							
							<?php
							
							
							$id=$_REQUEST['id'];

$result = mysqli_query($con,"SELECT * FROM student WHERE student_id = '$id'");
$test = mysqli_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
		        
									$person= $_POST['person'];
									$cname= $_POST['cname'];
									$distri= $_POST['distri'];
									$address= $_POST['address'];
									$mobile= $_POST['mobile'];
									$landline=$_POST['landline'];
									$email=$_POST['email'];
				
                            
if (isset($_POST['update'])) {
                               
									$person_save= $_POST['person'];
									$cname_save= $_POST['cname'];
									$distri_save= $_POST['distri'];
									$address_save= $_POST['address'];
									$mobile_save= $_POST['mobile'];
								    $landline_save= $_POST['landline'];
								    $email_save= $_POST['email'];

mysqli_query($con,"UPDATE student SET person = '$person_save' , cname = '$cname_save' , distri ='$distri_save',address = '$address_save' , mobile='$mobile_save', landline=landline_save', email='$email_save' WHERE student_id = '$id'") or die(mysqli_error()); 	
header("Location:index.php");	

					
								}
								?>
								</center>
								</center>

								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
</body>
</html>
								