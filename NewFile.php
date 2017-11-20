<!DOCTYPE html>
<html>
<head></head>
<body>
   <b>
       <?php
       
       $str = $_Get["Comment"];
       $str1 = $str;

       echo "<br />";
       echo $str;
       echo "<br />";

       
       echo '<form id = "form1" name = "form1" method = "POST" actions = "">'.
       '<input type = "text" name = "name0" id = "text" value = " ' . $str . '" /><br><br>'.
       '</form> ';
       ?>
       </b>
</body>
</html>