<!--Name:Pravash KC ID:1001660064-->
<!--Name:Nabin Panthi ID:1001636713-->

<html>
<head>
<title> Update GRA </title>
<link rel="stylesheet" href="Query.css"
</head>
<body>
  <div class="card">
  <form method="post" action ="update.controller.php">
  <fieldset>

  <legend> Update GRA student name </legend>
      <label id= "label" for =""> Enter GRA's Student Id </label> </br>
      <input style="width:200px;font-size:14pt;" type="text" name="StudentId" placeholder="Student Id" required > </br></br>

      <label id= "label" for =""> Enter Updated first name </label> </br>
      <input style="width:200px;font-size:14pt;" type="text" name="UFName" placeholder="First name" required> </br></br>

      <label id= "label" for =""> Enter Updated last name </label> </br>
      <input style="width:200px;font-size:14pt;" type="text" name="ULName" placeholder="Last name" required> </br></br>

   <input id="button" type="submit" name="submit">
   <button class="button"><a href = "home.php">Home </a></button>

 </fieldset>
</form>
</div>
</body>
</html>
