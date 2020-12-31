<?php
  $servername = "localhost";
$username = "root";
$password = "shivani23";
$database = "ecommerce";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);
$response = array();
if($conn){
    $sql ="select * from categories";
    $result = mysqli_query($conn, $sql);
    if($result){
        header("Content-type:JSON");
        $i=0;
        //header("content-type: JSON");
        while ($row = mysqli_fetch_array($result)) {
            $response[$i]['id']=$row['id'];
            $response[$i]['name']=$row['name'];
            $i++;
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
        }
    }
else{
    echo 'disconnected';
}
?>