<?php 
header('Content-Type: application/json');
$conn=mysqli_connect("localhost","root","","pmb");
$sglquery="SELECT nama_desa,mancanegara,nusantara
FROM wisatawan order by nama_desa DESC";
$result=mysqli_query($conn,$sglquery);
$data=array();
foreach ($result as $row) {
    $data[]=$row;
}

mysqli_close($conn);
echo json_encode($data);
?>