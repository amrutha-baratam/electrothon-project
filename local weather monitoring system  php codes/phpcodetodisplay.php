<?php
$server="localhost";
$username="amrutha";
$password="klu";
$database="weather_monitoring_system";
$con= new mysqli($server,$username,$password,$database) ;
if($con->connect_error){
	die("Connection failed:".$con->connect_error);
}
$selectSQL1 = "select * from data where device='AMARAVATHI' order by timestamp desc limit 2";
$selectRes1=$con->query($selectSQL1);

$selectSQL2 = "select * from data where device='KAKANI' order by timestamp desc limit 2";
$selectRes2=$con->query($selectSQL2);

$selectSQL3 = "select * from data where device='ANU' order by timestamp desc limit 2";
$selectRes3=$con->query($selectSQL3);

$selectSQL4 = "select * from data where device='NAMBURU' order by timestamp desc limit 2";
$selectRes4=$con->query($selectSQL4);

$selectSQL5 = "select * from data where device='TADEPALLI' order by timestamp desc limit 2";
$selectRes5=$con->query($selectSQL5);
?>

<h3 align="center">DECENTRALIZED WEATHER MONITORING SYSTEM</h3> 
<table border="2" align="center">
  <thead>
    <tr>
      
	<th>VILLAGE NAME</th>
	<th>PARAMETER</th>
	<th>VALUE</th>
	<th>TIMESTAMP</th>
	
    </tr>
  </thead>
  <tbody>
    <?php
      if( $selectRes1->num_rows==0 ){
        echo '<tr><td colspan="6">No Rows Returned</td></tr>';
      }else{
        while( $row = $selectRes1->fetch_assoc() ){
          echo "<tr><td>{$row['device']}</td><td>{$row['attribute']}</td><td>{$row['value']}</td><td>{$row['timestamp']}</td></tr>\n";
        }
      }
    ?>
<?php
      if( $selectRes2->num_rows==0 ){
        echo '<tr><td colspan="6">No Rows Returned</td></tr>';
      }else{
        while( $row = $selectRes2->fetch_assoc() ){
          echo "<tr><td>{$row['device']}</td><td>{$row['attribute']}</td><td>{$row['value']}</td><td>{$row['timestamp']}</td></tr>\n";
        }
      }
    ?>
<?php
      if( $selectRes3->num_rows==0 ){
        echo '<tr><td colspan="6">No Rows Returned</td></tr>';
      }else{
        while( $row = $selectRes3->fetch_assoc() ){
          echo "<tr><td>{$row['device']}</td><td>{$row['attribute']}</td><td>{$row['value']}</td><td>{$row['timestamp']}</td></tr>\n";
        }
      }
    ?>
<?php
      if( $selectRes4->num_rows==0 ){
        echo '<tr><td colspan="6">No Rows Returned</td></tr>';
      }else{
        while( $row = $selectRes4->fetch_assoc() ){
          echo "<tr><td>{$row['device']}</td><td>{$row['attribute']}</td><td>{$row['value']}</td><td>{$row['timestamp']}</td></tr>\n";
        }
      }
    ?>
<?php
      if( $selectRes5->num_rows==0 ){
        echo '<tr><td colspan="6">No Rows Returned</td></tr>';
      }else{
        while( $row = $selectRes5->fetch_assoc() ){
          echo "<tr><td>{$row['device']}</td><td>{$row['attribute']}</td><td>{$row['value']}</td><td>{$row['timestamp']}</td></tr>\n";
        }
      }
    ?>
  </tbody>
</table>
    
