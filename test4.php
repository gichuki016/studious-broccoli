<!DOCTYPE html>
<html> 
  <head>
  <title>TEST</title> 
</head>
<body bgcolor= "jungle green">
<form action="test4.php" method="get">
    Color: <input type ="text" name= "color">
   Plural Noun: <input type ="text" name= "Plural Noun">
    Celebrity: <input type ="text" name= "Celebrity">
<input type="submit"> 
</form>
<br><br>
<?php 
 $color=$GE["color"]
 $color=$GE["plural noun"]
 $color=$GE["color"]
echo "Roses are {color}<br>";
echo "{plural noun}" are blue<br>";
echo "I love {celebrity}"<br>;

?>
</body>
</html> 