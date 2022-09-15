<!DOCTYPE html>
<html>
    <body>
        <h1>Bài 35</h1>
        <?php
            function XoaPhanTuTrung($list1) {
                $nums_unique = array_values(array_unique($list1));
                return $nums_unique ;
            }
            $nums = array(1,1,2,2,3,4,5,5);
            print_r(XoaPhanTuTrung($nums));
        ?> 
    </body>
</html>