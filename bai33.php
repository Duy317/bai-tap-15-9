<!DOCTYPE html>
<html>
    <body>
        <?php
        $ketqua = "";
        if (isset($_POST["a"]))
        {
            $warr = explode(';',$_POST["a"]);
            foreach($warr as $value){
                switch(trim($value)){
                    case 'zero':
                        $ketqua .= '0';
                        break;
                    case 'one':
                        $ketqua .= '1';
                        break;
                    case 'two':
                        $ketqua .= '2';
                        break;
                    case 'three':
                        $ketqua .= '3';
                        break;
                    case 'four':
                        $ketqua .= '4';
                        break;
                    case 'five':
                        $ketqua .= '5';
                        break;
                    case 'six':
                        $ketqua .= '6';
                        break;
                    case 'seven':
                        $ketqua .= '7';
                        break;
                    case 'eight':
                        $ketqua .= '8';
                        break;
                    case 'nine':
                        $ketqua .= '9';
                        break;    
                }
            }
        }
        ?>
        <form action="" method="POST">
            <label for="a_number">Nhập:</label><br>
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