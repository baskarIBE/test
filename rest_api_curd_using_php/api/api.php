<?php
header("Access-Control-Allow-Origin: *");

//Api.php

class API
{
 private $connect = '';

 function __construct()
 {
  $this->database_connection();
 }

 function database_connection()
 {
  $this->connect = new PDO("mysql:host=localhost;dbname=apicruddb", "root", "root123users");
 }

 function fetch_all()
 {
  $query = "SELECT * FROM employee ORDER BY id";
  $statement = $this->connect->prepare($query);

  if($statement->execute())
  {
   while($row = $statement->fetch(PDO::FETCH_ASSOC))
   {
    $data[] = $row;
   }
   return $data;
  }
 }
}

?>