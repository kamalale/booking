<?php 
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "booking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



if(isset($_POST['vf'])){

if($_POST['pass'] == $_POST['cpass']){
   $pass = $_POST['pass'];
   $email = $_POST['email'];

   $sql = "INSERT INTO  users (email,password,status)
 VALUES ('$email','$pass','1')";
 include 'added_mail.php';
if ($conn->query($sql) === TRUE) {
	header("Location: http://localhost/booking/login.php?res=true");
    die();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


}
else{
header("Location: http://localhost/booking/login.php?res=false");
die();

}

}

if(isset($_POST['cf'])){
   $email = $_POST['email'];
$psw = $_POST['pass'];	
$sql = "SELECT * FROM  users WHERE email ='$email' AND password ='$psw' AND status ='1'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $_SESSION['usrlgn'] = "verified";
  $_SESSION['usrlgn_emil'] = $_POST['email'];
  header("Location: http://localhost/booking");

}
else{
	header("Location: http://localhost/booking/login.php?lg=false");
die();
}

}

if(isset($_GET['logout'])){
unset($_SESSION['usrlgn']);
unset($_SESSION['usrlgn']);
  header("Location: http://localhost/booking/login.php");

}

if(isset($_POST['upf'])){

$target_dir = "uploads/";
$t=time();
$target_file = $target_dir.$t. basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    $all_data = $_POST;
    $all_data['img_path']= $target_file;
    $data = serialize($all_data);
$sql = "INSERT INTO  media_listings (data)
 VALUES ('$data')";
if ($conn->query($sql) === TRUE) {
    header("Location: http://localhost/booking/upload.php?lg=true");
}

  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}





}

if(isset($_POST['ckfs'])){
  $email = $_SESSION['usrlgn_emil'];
$data = serialize($_POST);
$sql = "INSERT INTO  orders  (data,email)
 VALUES ('$data','$email')";
if ($conn->query($sql) === TRUE) {
    header("Location: http://localhost/booking/thankyou.php");
}

}

