<!--Name:Pravash KC ID:1001660064-->
<!--Name:Nabin Panthi ID:1001636713-->

<html>
<head>
  <title>Insert new Instructor</title>
</head>
<body>
  <h1>Please enter the information below: </h1><br>
  <div class ="card">
  <form method="post" action="insert.controller.php">
      <fieldset>
        <legend> Query 1:Insert </legend>
        <label id= "label" for="id"> Instructor Id: </label> </br>
        <input style="width:150px;font-size:12pt;" input type="text" name="InstructorId" placeholder=" Enter instructor id" > </br>

        <label id="label" for="fname"> First name: </label> </br>
        <input style="width:150px;font-size:12pt;" input type="text" name="Fname" placeholder=" First Name" > </br>

        <label id="label" for="lname"> Last name: </label> </br>
        <input style="width:150px;font-size:12pt;" input type="text" name="Lname" placeholder=" Last Name" > </br>

        <label id="label" for="sdate"> Start Date: </label> </br>
        <input style="width:150px;font-size:12pt;" input type="text" name="StartDate" placeholder=" xxxx-xx-xx" > </br>

        <label id="label" for="degree"> Degree: </label> </br>
        <input style="width:150px;font-size:12pt;" input type="text" name="Degree" placeholder=" Degree" > </br>

        <label id="label" for="rank"> Rank: </label> </br>
        <input style="width:150px;font-size:12pt;" input type="text" name="Rank" placeholder=" Rank" > </br>

        <label id="label" for="type"> Type: </label> </br>
        <input style="width:150px;font-size:12pt;" input type="text" name="Type" placeholder=" Type" > </br>

        <label id= "label" for ="Course"> Enter course for this Instructor </label> </br>
        <input style="width:150px;font-size:12pt;" type="text" name="Course" placeholder="Course " required> </br>

        <label id= "label" for ="Student Id"> Enter StudentId for whom this instructor supervises </label> </br>
        <input style="width:150px;font-size:12pt;" type="text" name="StudentId" placeholder="StudentId " required> </br></br>
        <input id="button" type="submit" name="submit">
        <button class="button"><a href = "home.php">Home </a></button>
        </fieldset>
     </form>
   </div>
</body>
</html>
