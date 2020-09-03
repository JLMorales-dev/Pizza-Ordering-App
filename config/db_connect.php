<?php 
// connect to database - host, username, password, database name
$conn = mysqli_connect('sql3.freemysqlhosting.net', 'sql3361691', 'VGMXdenlBw', 'sql3361691');

// check connection
if(!$conn) {
  echo 'connection error: ' . mysqli_connect_error();
}

?>