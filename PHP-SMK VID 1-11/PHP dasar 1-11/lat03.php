    <?php

    function testing()
    {
        echo "testing php";
    }

    function luaspersegi($p = 5, $l = 4)
    {
        $luas = $p * $l;
        echo $luas;
    }

    function luas($p = 5, $l = 4)
    {
        $luas = $p * $l;
        return $luas;
    }

    function output()
    {
        return "function test";
    }

    echo luas(100, 5) * 100;
