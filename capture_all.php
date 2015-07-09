<?php include('header.php'); ?>
<body>

    <div class="row-fluid">
        <div class="span12">


         

            <div class="container">

<br><br>
					
						<a class="btn btn-info" href="index.php">HOME</a>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
						<br>
						<br>
                        <table  class="table table-striped table-bordered">
                         
                            <thead>
						
                                <tr>
                                
                                    <th>ID</th>
                                    <th>TRACK ID</th>
                                    <th>IP ADDRESS</th>
                                    <th>EXPIRY DATE</th>
                                    <th>TRANSACTION ID</th>
									<th>STATUS</th>
                                    <th>SOURCE</th>
                                    <th>TYPE</th>
                                    <th>DOWNLOAD DATE</th>
                                    </tr>
                            </thead>
                           <tbody>
							<?php 
							include ('dbcon.php');
							$query=mysql_query("SELECT * FROM `table 1`")or die(mysql_error());
							while($row=mysql_fetch_array($query)){
							$id=$row['ID'];
							?>
                              <tr>
									 
                                         <td><?php echo $row['ID'] ?></td>
                                         <td><?php echo $row['TRACK ID'] ?></td>
                                         <td><?php echo $row['IP ADDRESS'] ?></td>
                                         <td><?php echo $row['EXPIRY DATE'] ?></td>
                                         <td><?php echo $row['TRANSACTION ID'] ?></td>
										 <td><?php echo $row['STATUS'] ?></td>
                                         <td><?php echo $row['SOURCE'] ?></td>
                                         <td><?php echo $row['TYPE'] ?></td>
                                         <td><?php echo $row['DOWNLOAD DATE'] ?></td>
                                                                 
						          <?php } ?>
                            </tbody>
                        </table>
						
          
</form>

        </div>
        </div>
        </div>
    </div>



</body>
</html>


