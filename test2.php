<!DOCTYPE html>
<html> 
  <head>
  <title>TEST</title> 
</head>
<body bgcolor= "jungle green">

<form action="test2.php" method="get">
 NAME: <input type="text" name=" username"><br>
 PASSW: <input type="passwor" name=" " value=" ">
 <br>
 AGE:<input type="num" name="Age" >
 <input type="submit"> 
</form>
<br>
Your name is<?php echo $_GET["username"]?>
<br>
Your Age is<?php echo $_GET["Age"]?>
</body>
</html>
  
