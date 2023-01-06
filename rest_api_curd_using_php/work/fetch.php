<?php
header("Access-Control-Allow-Origin: *");

//fetch.php

// $api_url = "http://localhost/tutorial/rest-api-crud-using-php/api/test_api.php?action=fetch_all";
$api_url = "http://localhost/rest_api_curd_using_php/api/test_api.php?action=fetch_all";

$client = curl_init($api_url);

curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($client);

$result = json_decode($response);

$output = '';
 echo count($result);
if(count($result) > 0)
{
 foreach($result as $row)
 {
  $output .= '
  <tr>
   <td>'.$row->name.'</td>
   <td>'.$row->email.'</td>
   <td>'.$row->designation.'</td>
   <td>'.$row->created.'</td>
   <td><button type="button" name="edit" class="btn btn-warning btn-xs edit" id="'.$row->id.'">Edit</button></td>
   <td><button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row->id.'">Delete</button></td>
  </tr>
  ';
 }
}
else
{
 $output .= '
 <tr>
  <td colspan="4" align="center">No Data Found</td>
 </tr>
 ';
}

echo $output;

?>