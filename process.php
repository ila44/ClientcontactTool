<?php
include("connection.php");

$q= $_POST['query'];
$sql="Select TOP 5 CLIENTMNEMONIC,CLIENTID from CLIENT WHERE CLIENTMNEMONIC LIKE '{$q}%' ";
$query1=SQLSRV_QUERY($connect,$sql);

$output ='';
$output .= '<ul class ="list-unstyled">';
while($row = SQLSRV_FETCH_ARRAY($query1,SQLSRV_FETCH_ASSOC)) {
	$output .= '<li>'. $row['CLIENTMNEMONIC'].'</li>';
}
$output .= '</ul>';
echo $output;


?>