<?php
include 'connect.php';
include 'session.php';
if (!isset($_SESSION['login_user'])) {
    header("location: movie.php"); // Redirecting To Home Page
}

header('Content-Type: text/html; charset=utf-8');
 
$File_Type_Allow = array("application/x-zip-compressed" /*.zip*/,"text/plain" /*.txt*/,"application/msword" /*.doc*/,"application/vnd.ms-excel" /*.xls*/,"application/pdf " /*.pdf*/,"image/bmp" /* .bmp, .ico*/, "image/gif" /* .gif*/, "image/pjpeg" /*.jpg, .jpeg*/, "image/jpeg" /* .jpg, .jpeg*/); //กำหนดประเภทของไฟล์ว่าไฟล์ประเภทใดบ้างที่อนุญาตให้ upload มาที่ Server
$Upload_Dir = "images";
$Max_File_Size = 200000000; //กำหนดขนาดไฟล์ที่ ใหญ่ที่สุดที่อนุญาตให้ upload มาที่ Server มีหน่วยเป็น byte
 
function validate_form($file_input,$file_size,$file_type) { //เป็น function ที่เอาไว้ตรวจสอบว่าไฟล์ที่ผู้ใช้ upload ตรงตามเงื่อนไขหรือเปล่า
   global $Max_File_Size,$File_Type_Allow;
   if ($file_input == "none") {
      $error = "ไม่มี file ให้ Upload";
   } elseif ($file_size > $Max_File_Size) {
      $error = "ขนาดไฟล์ใหญ่กว่า $Max_File_Size ไบต์";
   } elseif (!check_type($file_type,$File_Type_Allow)) {
      $error = "ไฟล์ประเภทนี้ ไม่อนุญาตให้ Upload <strong>อัพโหลดได้เฉพาะไฟล์นามสกุล .xlsx,.xls</strong>";
   } else {
      $error = false;
   }
 
   return $error;
}
 
function check_type($type_check) { //เป็น ฟังก์ชัน ที่ตรวจสอบว่า ไฟล์ที่ upload อยู่ในประเภทที่อนุญาตหรือเปล่า
   global $File_Type_Allow;
   for ($i=0;$i<count($File_Type_Allow);$i++) {
      if ($File_Type_Allow[$i] == $type_check) {
         return true;
      }
   }
   return false;
}
 
if ( $_FILES['file']['error'] ) { 
		die($_FILES["file"]["error"]);
} 
 
if($_FILES['file']){
	$error_msg = validate_form($_FILES['file'],$_FILES['file']["size"],$_FILES['file']["type"]); // ตรวจดูว่า ไฟล์ที่ upload ตรงตามเงื่อนไขหรือเปล่า
	if ($error_msg) {
	   die($error_msg);
	} else {
       if (copy($_FILES['file']['tmp_name'],$Upload_Dir."/".$_FILES['file']['name'])) { //ทำการ copy ไฟล์มาที่ Server
        $img_movie = $Upload_Dir."/".$_FILES['file']['name'];
		  echo "ไฟล์ Upload เรียบร้อย";
	   } else {
		  die("ไฟล์ Upload มีปัญหา ".$_FILES["file"]["error"]);
	   }
	}
}
$movie = $_POST['movie'];
$rate = $_POST['rate'];
$type = $_POST['type'];
$time = $_POST['time'];
$language = $_POST['language'];
$system = $_POST['systemmovie'];


$dbs= "INSERT INTO movie(img_movie,movie,rate,type,time,language,systemmovie) VALUES('$img_movie','$movie','$rate','$type','$time','$language','$system')";

$result = mysqli_query($dbcon,$dbs);

if($result){
    header("location: index.php");
}else{
    echo "error".mysqli_error($dbcon);
}

mysqli_close($dbcon);
