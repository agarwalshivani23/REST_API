<?php
  $servername = "localhost";
$username = "root";
$password = "shivani23";
$database = "ecommerce";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);
//$create= new create ($conn);
if($conn){
    $data = json_decode(file_get_contents("php://input"),true);
    //var_dump($data);
    $_POST['id'] = $data['id'];
    //$_POST['name'] = $data['name'];
  // Create Category
    $id=$_POST['id'];
    //$name=$_POST['name'];
    //echo $id;
    //echo $name;
    $sql = "DELETE FROM `categories` WHERE `categories`.`id` ='$id'";
   // $sql = "INSERT INTO categories (id,name) values ('$id','$name')";
    //$query =("insert into categori (id,name) VALUES ('$id','$name')");
    $result=mysqli_query($conn, $sql);
    if($result) {
    echo json_encode(
      array('message' => 'Deleted Successfully')
    );
  } else {
    echo json_encode(
      array('message' => 'Deleted Unsuccessfully'));
  }}
else{
    echo 'disconnected';
}
?>