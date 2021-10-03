<?php 
include 'connection.php';
$data = json_decode(file_get_contents("php://input"));
 $array = get_object_vars($data);
	
 $first_name = $array['first_name'];
 $last_name = $array['last_name'];
 $fatherName = $array['fatherName'];
 $mobile = $array['Mobile'];
 $country = $array['CountryName'];
 $city = $array['CityName'];

//  echo $first_name;
//  echo $last_name;
//  echo $fatherName;
//  echo $mobile;
//  echo $country;
//  echo $city;

 $insertstd ="INSERT INTO `studentinfo`(`StdFirstName`, `StdLastName`, `StdFatherName`, `StdMobile`, `StdCountry`, `StdCity`) VALUES ('$first_name','$last_name','$fatherName','$mobile','$country','$city')";
 $query = mysqli_query($conn,$insertstd);
 if($query){
     echo 'ok';
 }
 else{
     echo 'error';
 }
 
?>