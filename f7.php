<HTML>
<HEAD> <TITLE> Ugaday chislo </TITLE> </HEAD>
<BODY>
<FORM method="post" action="<?php print $PHP_SELF ?>">
Vvedite chislo ot 1 do 10:
<INPUT type="text" name="a" size="3">
<INPUT type="hidden" name="h" value="5"> // ugadivaemoe chislo
<P> <INPUT type="submit" name="obr" value="check">
</FORM>
<?php
if (isset($_POST["obr"])) {
if ($_POST["a"]==$_POST["h"]) { echo($_POST["a"]." - UGADALI!");
} else {
if ($_POST["a"]>$_POST["h"]) {
echo($_POST["a"]." - MNOGO...");
} else { echo($_POST["a"]." - MALO..."); }
} }
?>
</BODY> </HTML>