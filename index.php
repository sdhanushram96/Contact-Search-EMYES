<?php include('db.php'); ?>
<?php include('header.php'); ?>
<?php
	session_start();
	if($_SESSION['sid']==session_id())
	{   
		echo "<a href='logout.php'>Logout</a>";
	}
	else
	{
		header("location:login.php");
	}
?>
<body>


    <div class="row-fluid">
        <div class="span12">


         

            <div class="container">


<?php include('modal_add.php'); ?>

                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                           
                            <thead>
                                <tr>
                                    <th style="text-align:center;" >Visiting Card</th>
                                    <th style="text-align:center;">Contact Person</th>
                                    <th style="text-align:center;">Company Name</th>
                                    <th style="text-align:center;">Distribution</th>
                                    <th style="text-align:center;">Address</th>
                                    <th style="text-align:center;">Mobile</th>
                                    <th style="text-align:center;">LandLine</th>
                                    <th style="text-align:center;">Email</th>
                                    <th style="text-align:center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
								<?php
								
								$result= mysqli_query($con,"select * from student order by student_id ASC" ) or die (mysqli_error());
								while ($row= mysqli_fetch_array ($result) ){
								$id=$row['student_id'];
								?>
								<tr>
								<td style="text-align:center; margin-top:10px; word-break:break-all; width:450px; line-height:100px;"><a href="#<?php  echo $id;?>" data-toggle="modal">
									<?php if($row['location'] != ""): ?>
									<img src="upload/<?php echo $row['location']; ?>" width="100px" height="100px" style="border:1px solid #333333;">
									<?php else: ?>
									<img src="images/default.png" width="100px" height="100px" style="border:1px solid #333333;">
									<?php endif; ?>
									</a>
								</td>
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['person']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['cname']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['distri']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['address']; ?></td>
								<td style="text-align:center; word-break:break-all; width:450px;"> <?php echo $row ['mobile']; ?></td>
								<td style="text-align:center; word-break:break-all; width:450px;"> <?php echo $row ['landline']; ?></td>
								<td style="text-align:center; word-break:break-all; width:450px;"> <?php echo $row ['email']; ?></td>
								<td style="text-align:center; width:350px;">
									<a href="edit.php<?php echo '?id='.$id; ?>" class="btn btn-info">Edit</a>
									 <a href="#delete<?php echo $id;?>"  data-toggle="modal"  class="btn btn-danger" >Delete </a>
								</td>
									
										<!-- Modal -->
								<div id="delete<?php  echo $id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-header">
								<h3 id="myModalLabel">Delete</h3>
								</div>
								<div class="modal-body">
								<p><div class="alert alert-danger">Are you Sure you want Delete?</p>
								</div>
								<hr>
								<div class="modal-footer">
								<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">No</button>
								<a href="delete.php<?php echo '?student_id='.$id; ?>" class="btn btn-danger">Yes</a>
								</div>
								</div>
								</div>
								</tr>

								<!-- Modal Bigger Image -->
								<div id="<?php  echo $id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-header">

								<h3 id="myModalLabel"><b><?php echo $row['person']." ".$row['cname']; ?></b></h3>
								</div>
								<div class="modal-body">
								<?php if($row['location'] != ""): ?>
								<img src="upload/<?php echo $row['location']; ?>" style="width:390px; border-radius:9px; border:5px solid #d0d0d0; margin-left: 63px; height:387px;">
								<?php else: ?>
								<img src="images/default.png" style="width:390px; border-radius:9px; border:5px solid #d0d0d0; margin-left: 63px; height:387px;">
								<?php endif; ?>
								</div>
								<div class="modal-footer">
								<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
								</div>
								</div>

								<?php } ?>
                            </tbody>
                        </table>


          <footer>
           <h4 align="center"> Designed By Dhanush </h4>
          </footer>
        </div>
        </div>
        </div>
    </div>
    
</body>
</html>


