<?php

$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="DOCTORAL";


//$conn=new mysqli($host, $dbusername, $dbpassword, $dbname);
$conn=new PDO('mysql:host='.$host.';dbname='.$dbname,$dbusername,$dbpassword);

if(mysqli_connect_error())
{
  die('Connect Error ('. mysqli_connect_errorno().')'
  .mysqli_connect_error());
}

else {
  $StudentId=filter_input(INPUT_POST,'StudentId');

  $query2 = "DELETE P
             FROM PHDSTUDENT AS P
             WHERE P.StudentId='$StudentId' AND NOT EXISTS(SELECT M.StudentId
                                                            FROM  MILESTONESPASSED AS M
                                                            WHERE M.StudentId='$StudentId')";


             if($conn->query($query2)){
                 echo "Deleted from SELFSUPPORT successfully";
             }
             else{
                 echo "Error: ". $query2."
                 ".$conn->error;
               }
     }

$conn = null;

?>

</br><button class="button"><a href = "home.php">Home </a></button>
