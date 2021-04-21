<?php 
session_start();
$con=mysqli_connect('localhost','root','','details');

$q="select * from users ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);


?>

<html>
<head>
	<title>Tabel with data base</title>
	<style >
		table{
			border-collapse: collapse;
			width: 100%;
			color: #588c7e;
			font-family: monospace;
			font-size: 25px;
			text-align: center;
		}
		th{
			background-color: #588c7e;
			color: white;
		}
		tr:nth-child(even) {
			background-color: #f2f2f2
		}
	</style>
</head>
<body>
	<h1 style="color:#ffff00;text-shadow: 2px 2px black;">User Information</h1>
    <table class="flat-table-1">
		<thead>
			<th>NO</th>
			<th>Name</th>
			<th>Email</th>
			<th>Amount</th>
			<th></th>
		</thead>
		<tbody>
		<tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 1</td>
			<td><?php echo  $row["Sl.NO"]; ?></td>
			<td><?php echo  $row["NAME"]; ?></td>
			<td><?php echo  $row["MAIL ID"]; ?></td>
			<td><?php echo  $row["AMOUNT"]; ?></td>
			
		</tr>
		<tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 1</td>
			<td><?php echo  $row["Sl.NO"]; ?></td>
			<td><?php echo  $row["NAME"]; ?></td>
			<td><?php echo  $row["MAIL ID"]; ?></td>
			<td><?php echo  $row["AMOUNT"]; ?></td>
			
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 1</td>
			<td><?php echo  $row["Sl.NO"]; ?></td>
			<td><?php echo  $row["NAME"]; ?></td>
			<td><?php echo  $row["MAIL ID"]; ?></td>
			<td><?php echo  $row["AMOUNT"]; ?></td>
			
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 1</td>
			<td><?php echo  $row["Sl.NO"]; ?></td>
			<td><?php echo  $row["NAME"]; ?></td>
			<td><?php echo  $row["MAIL ID"]; ?></td>
			<td><?php echo  $row["AMOUNT"]; ?></td>
			
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 1</td>
			<td><?php echo  $row["Sl.NO"]; ?></td>
			<td><?php echo  $row["NAME"]; ?></td>
			<td><?php echo  $row["MAIL ID"]; ?></td>
			<td><?php echo  $row["AMOUNT"]; ?></td>
			
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 1</td>
			<td><?php echo  $row["Sl.NO"]; ?></td>
			<td><?php echo  $row["NAME"]; ?></td>
			<td><?php echo  $row["MAIL ID"]; ?></td>
			<td><?php echo  $row["AMOUNT"]; ?></td>
			
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 1</td>
			<td><?php echo  $row["Sl.NO"]; ?></td>
			<td><?php echo  $row["NAME"]; ?></td>
			<td><?php echo  $row["MAIL ID"]; ?></td>
			<td><?php echo  $row["AMOUNT"]; ?></td>
			
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 1</td>
			<td><?php echo  $row["Sl.NO"]; ?></td>
			<td><?php echo  $row["NAME"]; ?></td>
			<td><?php echo  $row["MAIL ID"]; ?></td>
			<td><?php echo  $row["AMOUNT"]; ?></td>
			
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 1</td>
			<td><?php echo  $row["Sl.NO"]; ?></td>
			<td><?php echo  $row["NAME"]; ?></td>
			<td><?php echo  $row["MAIL ID"]; ?></td>
			<td><?php echo  $row["AMOUNT"]; ?></td>
			
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 1</td>
			<td><?php echo  $row["Sl.NO"]; ?></td>
			<td><?php echo  $row["NAME"]; ?></td>
			<td><?php echo  $row["MAIL ID"]; ?></td>
			<td><?php echo  $row["AMOUNT"]; ?></td>
			
		</tr>
		</tbody>
	</table><br><br>
	<table>
	 <tr>
	 	<th>Sl.no</th>
	 	<th>Name</th>
	 	<th>Email</th>
	 	<th>Amount</th>
	 </tr>
	 
	</table>

</body>
</html>