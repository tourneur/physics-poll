<html>
<body>

Welcome <?php echo $_POST["fname"]; ?>!<br>
You are <?php echo $_POST["age"]; ?> years old.

<?php 
 $File = "data.txt"; 
 $Handle = fopen($File, 'a');
 $Data = "Jane Doe\n"; 
 fwrite($Handle, $Data); 
 $Data = "Bilbo Jones\n"; 
 fwrite($Handle, $_POST["age"]); 
 print "Data Written"; 
 fclose($Handle); 
 ?>


</body>
</html> 

