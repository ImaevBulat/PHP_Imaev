<html>
<head><title>Imaev Bulat</title></head>
<body>
<p>Вариант 1</p>
<p>  
   <?php
    if (isset($_POST["text1"]) and isset($_POST["word1"])) {
        $text = str_replace($_POST["word1"], "", $_POST["text1"]);
        echo $text;
    }
?>
</p>
</body>
</html>
