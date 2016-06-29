<?php

function isPangram($text)
{
    foreach (range('a', 'z') as $lettre) {
        if (stripos($text, $lettre) === false) {
            return false;
        }
    }
    return true;
}


function test($expected, $result)
{
    if ($expected != $result) {
        echo '<p>error : Expected</p>';
        var_dump($expected);
        echo "<p>got</p>";
        var_dump($result);
    } else
        echo "<p>Ok</p>";
}

test(false, isPangram(' '));
test(true, isPangram('the quick brown fox jumps over the lazy dog'));
test(false, isPangram('a quick movement of the enemy will jeopardize five gunboats'));
test(false, isPangram('the quick brown fish jumps over the lazy dog'));
test(true, isPangram('the_quick_brown_fox_jumps_over_the_lazy_dog'));
test(true, isPangram('the 1 quick brown fox jumps over the 2 lazy dogs'));
test(false, isPangram('7h3 qu1ck brown fox jumps ov3r 7h3 lazy dog'));
test(true, isPangram('\Five quacking Zephyrs jolt my wax bed.\\'));
test(true, isPangram('Victor jagt zwölf Boxkämpfer quer über den großen Sylter Deich.'));