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
  $FName=filter_input(INPUT_POST,'FName');
  $LName=filter_input(INPUT_POST,'LName');
  $UFName=filter_input(INPUT_POST,'UFName');
  $ULName=filter_input(INPUT_POST,'ULName');

  if($query= "SELECT GRA.StudentId
           FROM GRA
           WHERE GRA.Student='$StudentId'"){

  if($query==NULL){
         echo "No record available.";
   }

   else{
     $query1 = "UPDATE PHDSTUDENT, GRA
                SET FName='$UFName', LName='$ULName'
                WHERE (PHDSTUDENT.StudentId='$StudentId' AND (PHDSTUDENT.StudentId= GRA.StudentId))";




                if($conn->query($query1)){
                  echo "Updated successfully";
                }
                else{
                  echo "Error: ". $query1."
                  ".$conn->error;
                }

     }
   }
 }
   $conn = null;


?>

</br><button class="button"><a href = "home.php">Home </a></button>
