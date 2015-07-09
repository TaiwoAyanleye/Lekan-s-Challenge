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
						<link href="style.css" media="screen" rel="stylesheet" type="text/css" />
						<link rel="stylesheet" type="text/css" href="tcal.css" />
						<script type="text/javascript" src="tcal.js"></script>
						
						</div>
<form action="date.php" method="get">
<center><strong>From : <input type="text" style="width: 223px; padding:14px;" name="d1" class="tcal" value="" /> To: <input type="text" style="width: 223px; padding:14px;" name="d2" class="tcal" value="" />
 <button class="btn btn-info" style="width: 123px; height:35px; margin-top:-8px;margin-left:8px;" type="submit"><i class="icon icon-search icon-large"></i> Search</button>
</strong></center>
</form>
<div class="content" id="content">
<div style="font-weight:bold; text-align:center;font-size:14px;margin-bottom: 15px;">
download date from&nbsp;<?php echo $_GET['d1'] ?>&nbsp;to&nbsp;<?php echo $_GET['d2'] ?>
</div>

                        <table  class="table table-bordered" id="resultTable" data-responsive="table" style="text-align: left;">
                         
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
							include ('rangecon.php');
							$d1=$_GET['d1'];
				$d2=$_GET['d2'];
				$result = $db->prepare("SELECT * FROM `table 1` WHERE `DOWNLOAD DATE` BETWEEN :a AND :b ORDER BY `table 1`.`ID` DESC ");
				$result->bindParam(':a', $d1);
				$result->bindParam(':b', $d2);
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
			?>
			<tr class="record">
			
                                         <td><?php echo $row['ID'] ?></td>
                                         <td><?php echo $row['TRACK ID'] ?></td>
                                         <td><?php echo $row['IP ADDRESS'] ?></td>
                                         <td><?php echo $row['EXPIRY DATE'] ?></td>
                                         <td><?php echo $row['TRANSACTION ID'] ?></td>
										 <td><?php echo $row['STATUS'] ?></td>
                                         <td><?php echo $row['SOURCE'] ?></td>
                                         <td><?php echo $row['TYPE'] ?></td>
                                         <td><?php echo $row['DOWNLOAD DATE'] ?></td>
			</tr>
			<?php
				}
			?>
							
							
                            </tbody>
                        </table>
						
          
</form>

        </div>
        </div>
        </div>
    </div>



</body>
</html>


