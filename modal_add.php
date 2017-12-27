	    <!-- Button to trigger modal -->
	    <div style="text-align: right">
       <a class="btn btn-primary" href="#myModal" data-toggle="modal">Add Company</a> </div>
	<br>
	<br>
	<br>
    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">

    <h3 id="myModalLabel">Add Company</h3>
    </div>
    <div class="modal-body">
	
					<form method="post" action="add.php"  enctype="multipart/form-data">
					<table class="table1">
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Contact Person</label></td>
							<td width="30"></td>
							<td><input type="text" name="person" placeholder="Contact Person" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Company Name</label></td>
							<td width="30"></td>
							<td><input type="text" name="cname" placeholder="Company Name" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Distribution</label></td>
							<td width="30"></td>
							<td><input type="text" name="distri" placeholder="Distribution" required /></td>
						</tr>
						
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Address</label></td>
							<td width="30"></td>
							<td><input type="text" name="address" placeholder="Address" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Mobile</label></td>
							<td width="30"></td>
							<td><input type="text" name="mobile" placeholder="Mobile" required /></td>
						</tr>
						
						<tr>

							<td><label style="color:#3a87ad; font-size:18px;">LandLine No</label></td>
							<td width="30"></td>
							<td><input type="text" name="landline" placeholder="LandLine" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Email</label></td>
							<td width="30"></td>
							<td><input type="email" name="email" placeholder="Email" required /></td>
						</tr>
						
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Image</label></td>
							<td width="30"></td>
							<td><input type="file" name="image" required /></td>
						</tr>
						
					</table>
					
	
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<button type="submit" name="Submit" class="btn btn-primary">Add</button>
    </div>
    </form>
    </div>			