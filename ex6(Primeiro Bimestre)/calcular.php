
    <?php
        var_dump($_POST);
        $num = $_POST['num'];

        $x = 0;
        $y = 1;

        for($i = 0;$i < $num;$i++){
            echo $x .'';
            $resultado = $x + $y;
            $x = $x;
            $resultado = $y;

        }
    ?>




