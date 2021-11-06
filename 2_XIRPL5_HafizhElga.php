<!DOCTYPE html>
<body>
    <h2>Perulangan</h2>
    
    <?php
    function tglwaktu(){
        echo "<br>". date("d/m/Y H:i:s");
    }
    
    function prlngn(){
        echo "<br>";
        $n = 6;
        for($i=6; $i>=1; $i--)
        {
        for($j=1; $j<=$i; $j++)
        {
        echo "*";
        }
            echo "<br>";
        }
    }

    tglwaktu();
    prlngn();
    ?>
</body>
</html>