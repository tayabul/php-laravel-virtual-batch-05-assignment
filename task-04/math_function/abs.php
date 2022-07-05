<?php
    echo abs(-4.2) . '<br/>'; // 4.2 (double/float)

    echo abs(5) . '<br/>';    // 5 (integer)

    echo abs(-5) . '<br/>';   // 5 (integer)


    echo 'PHP '.PHP_VERSION.'<br>';

    echo "<br/>";
    echo "<br/>";
    echo "<br/>";


    $qty = 1000;
    $arr = array();
    for ($i = 0; $i < $qty; $i++)
    {
        $arr[] = rand(-100, 100);
    }

    $start = microtime(true);
    for ($i = 0; $i < $qty; $i++)
    {
        foreach ($arr as $v)
        {
            $v = abs($v);
        }
    }
    
    echo number_format(microtime(true) - $start, 4).'<br>';

    echo "<br/>";
    echo "<br/>";
    echo "<br/>";

    $start = microtime(true);
    for ($i = 0; $i < $qty; $i++)
    {
        foreach ($arr as $v)
        {
            if ($v < 0) $v *= -1;
        }
    }
echo number_format(microtime(true) - $start, 4).'<br>';


    
echo "<br/>";
echo "<br/>";
echo "<br/>";

   

?>  

