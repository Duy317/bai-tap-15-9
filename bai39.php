<!DOCTYPE html>
<html>
    <body>
        <?php
            $myfile = fopen("D:bai39.txt", "w") or die("Unable to open file!");
            $txt = "PHP Exercises\n";
            fwrite($myfile, $txt);
            $txt = "from\n";
            fwrite($myfile, $txt);
            $txt = "w3resource\n";
            fwrite($myfile, $txt);
            fclose($myfile);
            echo "Size of the file: ".filesize("D:\Practice\Bai39.txt")."<br/>";
        ?>
    </body>
</html>