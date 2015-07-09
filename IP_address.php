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
						<link rel="stylesheet" type="text/css" href="tcal.css" />
                       
						<form name= "search_form" action="IP_address.php" method="POST">
<input type="text" style="width: 223px; padding:14px;" name="search_box" class="tcal" value="" /> 
 <button name= "search" class="btn btn-info" style="width: 123px; height:35px; margin-top:-8px;margin-left:8px;" type="submit"><i class="icon icon-search icon-large"></i>Search</button>
</strong></center>
</form>

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
							$sql = "SELECT * FROM `table 1`";
							if(isset($_POST['search'])){
							$search_term = mysql_real_escape_string($_POST['search_box']);
							$sql .= "WHERE `IP ADDRESS` = '$search_term'" ;
							}
							$query=mysql_query($sql)or die(mysql_error());
							?>
				       		
							<?php
							while($row=mysql_fetch_array($query)){?>
					
									
                             
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


