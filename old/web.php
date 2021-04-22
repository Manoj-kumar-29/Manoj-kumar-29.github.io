<!DOCTYPE html>
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
		tr:nth-child(even){
			background-color: #f2f2f2;
		}
	</style>
</head>
<body>
	<table>
	 <tr>
	 	<th>Sl.no</th>
	 	<th>Name</th>
	 	<th>Email</th>
	 	<th>Amount</th>
	 </tr>
	 <?php
	 $conn = mysql_connect("localhost", "root", "", "details");
	 if($conn-> conncet_error){
	 	dei("Connection failed:". $conn-> connect_error);
	 }

	 $sql = "SELECT SlNO,NAME,MAIL ID,AMOUNT FROM login";
	 $result = $conn-> query($sql);

	 if ($result-> num_rows > 0){
	 	while ($row = $result-> fetch_assoc()){
	 		echo "<tr><td>". $row["Sl.NO"] "<tr><td>". $row["NAME"]"<tr><td>". $row["MAIL ID"]"<tr><td>". $row["AMOUNT"] ."</td></tr>";
	 	}
	 	echo "</table>";

	 }
      else{
      	echo "0 result";
      }

      $conn-> close();

	 ?>
	</table>

</body>
</html>