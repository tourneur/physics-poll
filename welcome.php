<html>
<body>
//pouet prout by robert biloute (modifié en ligne du coup je crois que je vais pas me faire chier..)
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

