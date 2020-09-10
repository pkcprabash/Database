<?php

$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="DOCTORAL";

$conn=new PDO('mysql:host='.$host.';dbname='.$dbname,$dbusername,$dbpassword);

if(mysqli_connect_error())
{
  die('Connect Error ('. mysqli_connect_errorno().')'
  .mysqli_connect_error());
}

else {
  $StudentId=filter_input(INPUT_POST,'StudentId');

  $query1 = "SELECT COURSE.CName, COURSE.CourseId, SECTION.SectionId
            FROM GTA, COURSE, SECTION
            WHERE ((GTA.StudentId='$StudentId') AND GTA.SectionId=SECTION.SectionId AND SECTION.CourseID=COURSE.CourseID)";
  {

  if($query1==null){
    echo "No Record Available";
    die();
  }
  else{
    $stmt = $conn->prepare($query1);
    $stmt->execute(array(':StudentId'=>$StudentId));
    $rows= $stmt->fetchALL(PDO::FETCH_ASSOC);
  }
}
}

$conn = null;
?>

<!DOCTYPE html>
<html lang = "en">
<head>
</head>
<body>

<?php
  foreach($rows as $row){
    echo "Course Name: "; echo $row["CName"]; echo '</br>';
    echo "Course ID  : "; echo $row["CourseId"]; echo '</br>';
    echo "Section ID : "; echo $row["SectionId"]; echo '</br>';
  }
  ?>
  <button class="button"><a href = "home.php">Home </a></button>
 </body>
 </html>
