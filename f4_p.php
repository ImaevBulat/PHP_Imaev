<html>
<head><title>Imaev Bulat</title></head>
</html>
<?php
if ($_POST["d"]=="plus")  { 
  $c=$_POST["a"]+$_POST["b"]; 
  if ($_POST["f"].checked==checked) { 
    echo ($_POST['a']."+".$_POST['b']."=".$c); 
   } else {  echo ("Res = ".$c);  } 
 } else { 
     $c=$_POST["a"]*$_POST["b"]; 
     if (isset($_POST["f"]))  { 
          echo ("Res = ".$c);        
      } else { 
         echo ($_POST['a']."*".$_POST['b']." = ".$c);  }
 echo ("<BR> <A href='f4.html'> Back </A>"); }
?> 