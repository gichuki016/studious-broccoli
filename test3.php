<!DOCTYPE html>
<html> 
  <head>
  <title>TEST</title> 
</head>
<body bgcolor= "sky blue">

<form action="test3.php" method="get">
    <input type="number" name="num1">
    <br>
    <input type="number" name="num2">
<input type="submit"> 
</form>
Answer: <?php echo $_GET["num1"] + $_GET["num2"] ?>
</body>
</html>