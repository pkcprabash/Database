<html>
<head>
  <title> Insert </title>
</head>
<body>

  <?php

  $host = "localhost";
  $dbusername = "root";
  $dbpassword = "";
  $dbname = "DOCTORAL";
  $conn = new PDO('mysql:host='.$host.';dbname='.$dbname, $dbusername, $dbpassword);

  if(!$conn){

    die("Connection failed");
    echo "fail";

  }

  else{

    $InstructorId = filter_input(INPUT_POST,'InstructorId');
    $Fname = filter_input(INPUT_POST,'Fname');
    $Lname = filter_input(INPUT_POST,'Lname');
    $StartDate = filter_input(INPUT_POST,'StartDate');
    $Degree = filter_input(INPUT_POST,'Degree');
    $Rank = filter_input(INPUT_POST,'Rank');
    $Type = filter_input(INPUT_POST,'Type');
    $Course = filter_input(INPUT_POST,'Course');
    $StudentId = filter_input(INPUT_POST,'StudentId');

    $query1= "INSERT INTO INSTRUCTOR (InstructorId, Fname, Lname, StartDate, Degree, Rank, Type) values ('$InstructorId','$Fname', '$Lname', '$StartDate', '$Degree','$Rank','$Type')";
    $query2= "INSERT INTO COURSESTAUGHT(CourseId,InstructorId) values('$Course','$InstructorId')";
    $query3= "INSERT INTO PHDCOMMITTEE(StudentId,InstructorId) values('$StudentId','$InstructorId')";

    if($conn->query($query1)){

      if($conn->query($query2) ){

        if($conn->query($query3)){

          echo "Record successfully added";
        }
        else{

          echo "Error!!!! Student Record doesn't exist     ".$query3."
          ".$conn->error;
        }
      }

       else{

         echo "Error!!!! Course ID Record doesn't exist     ".$query2."
         ".$conn->error;
       }
     }

    else{

      echo "Error!!!! ".$query1."
      ".$conn->error;

    }

  }
  $conn = null;
    ?>
  </br><button class="button"><a href = "home.php">Home </a></button>
  </body>
  </html>
