<?php
// add connection variable db file

$query = $database->connection->query("SELECT image,pdf FROM posts where username='$database->logged_user' ");

$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

   //first column
$image_0 = $result[0]['image']; //first row 
   // $image_1 = $result[1]['image']; //second row
   // $image_2 = $result[2]['image']; //third row
 

   //second column
 $pdf1_0 = $result[0]['pdf']; 
   //$pdf1_1 = $result[1]['pdf']; //second row
   //$pdf1_2 = $result[2]['pdf']; //third row

//third column
 //$col2_0 = $result[0]['file3'];
 //$col2_1 = $result[1]['file3']; //second row
 //$col2_2 = $result[2]['file3']; //third row

//files not to be deleted,query values
$leave_files = array($image_0,$pdf1_0); 

foreach( glob("uploads/path/*") as $file ) {
  if( !in_array(basename($file), $leave_files) ){
    unlink($file); //delete the file.
  //echo $file."</br>";
  }
}

?>
