<?php
$servername = "localhost";
$username = "root";
$password= "";
$dbname ="inventory_management";

$connection = new mysqli($servername, $username, $password);

 //if($connection->connect_error)
 //{

// echo "fail";
// }
//else {
 //echo "successful" . "<br>";
 //}

 //$sql = "CREATE DATABASE IF NOT EXISTS $dbname";

 //if($connection->query($sql)===TRUE)
 //{
 //    echo "Successfully Created Database or already exist"."<br>";

 //}
// else
// {
  //   echo "fail to create database ". $connection->error . "<br>";
 //}

$connection->select_db($dbname);

 //$table_sql = "CREATE TABLE IF NOT EXISTS products(
 //id_no INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 //id INT(10),
 //product_name VARCHAR(50) NOT NULL,
// description VARCHAR(100) NOT NULL,
// quantity INT(5),
// price INT(10)
//)";

 //if ($connection->query($table_sql) === TRUE)

//{
   // echo " table created or already exist". "<br>";
 //}
 //else
 //{
    // echo "fail to crate table " . $connection->error. "<br>";
 //}

 //$connection->close();
?>
