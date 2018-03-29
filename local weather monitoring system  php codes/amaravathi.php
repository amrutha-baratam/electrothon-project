<?php
$server="localhost";
$username="amrutha";
$password="klu";
$database="weather_monitoring_system";
$con= new mysqli($server,$username,$password,$database) ;
if($con->connect_error){
	die("Connection failed:".$con->connect_error);
}
$selectSQL1 = "select * from data where device='Amaravathi' and attribute='temperature' order by timestamp desc limit 1;";
$selectRes1=$con->query($selectSQL1);

$selectSQL2 = "select * from data where device='Amaravathi' and attribute='humidity' order by timestamp desc limit 1;";
$selectRes2=$con->query($selectSQL2);

$selectSQL3 = "select * from data where device='Amaravathi' and attribute='Rainfall' order by timestamp desc limit 1;";
$selectRes3=$con->query($selectSQL3);

$selectSQL4 = "select * from data where device='Amaravathi' and attribute='Pressure' order by timestamp desc limit 1;";
$selectRes4=$con->query($selectSQL4);
?>

<style>
 /* Style the video: 100% width and height to cover the entire window */
#myVideo {
    position: fixed;
    right: 0;
    bottom: 0;
    min-width: 100%;
    min-height: 100%;
}

/* Add some content at the bottom of the video/page */
.content {
    position:fixed ;
    background: rgba(0, 0, 0, 0.5);
    width: 100%;
    padding: 2%;
    height:25%;
	
}
.content1{
    position: fixed;
    background-color: rgba(255, 255, 255, 0.2);
    width: 100%;
    height:auto;
    margin-top:18%;
  
}
</style>

</head>
<body>


<video autoplay muted loop id="myVideo">
  <source src="Clouds - 8909.mp4" type="video/mp4">
</video>

<div class="content">

  	<div style="width: 20%; float:left">
   <img src="logo.png" alt="swecha" opacity=1 height=90% width=100%>
	</div>

	<div style="width: 80%; float:right">
	<h1 align="center" style="color:white; padding:2%;font-size:150%">LOCAL WEATHER MONITORING SYSTEM</h1>
	</div>
</div> <!-- Optional: some overlay text to describe the video -->
<div class="content1">
 <center>
<h1>AMARAVATHI weather Report</h1>
  Temperature value(in centigrade):
<?php
      if( $selectRes1->num_rows==0 ){
        echo 'No Rows Returned';
      }else{
        while( $row = $selectRes1->fetch_assoc() ){
          echo "{$row['value']}";
          echo "<br><br>";
        }
      }
    ?>
Humidity value:
<?php
      if( $selectRes2->num_rows==0 ){
        echo 'No Rows Returned';
      }else{
        while( $row = $selectRes2->fetch_assoc() ){
          echo "{$row['value']}";
          echo "<br><br>";
        }
      }
    ?>
status of rainfall:
<?php
      if( $selectRes3->num_rows==0 ){
        echo 'No Rows Returned';
      }else{
        while( $row = $selectRes3->fetch_assoc() ){
          echo "{$row['value']}";
          
        }
      }
echo "<br><br>";
    ?>
Pressure value:
<?php
      if( $selectRes4->num_rows==0 ){
        echo ' No Rows Returned';
      }else{
        while( $row = $selectRes4->fetch_assoc() ){
          echo "{$row['value']}";
          
        }
      }
echo "<br><br>";
    ?>

</center>


</div>


</tbody>
</table>
    
