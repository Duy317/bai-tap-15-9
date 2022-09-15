<!DOCTYPE html>
<html>
    <body>
        <?php
        $ketqua = "";
        if (isset($_POST["a"]))
        {
            $email = $_POST["a"];
            $result = trim($email);
            if (filter_var($result, FILTER_VALIDATE_EMAIL)) 
            {
                $ketqua = "Đúng";
            } 
            else 
            {
                $ketqua = "Sai";
            }
        }
        ?>
        <h1>Bài 38</h1>
        <form action="" method="POST">
            <label for="a_number">Nhập email:</label><br>
            <input type="text" name="a" value=""><br>
            <input type="submit" value="Submit">
        </form>  
        <div id ="ketqua">
            <?php
                echo $ketqua;
            ?>
        </div>  
    </body>
</html>