<!DOCTYPE html>
<html>
<head>
    <title>Isogram</title>
    <meta charset="utf-8">
</head>
<body>

<?php

function isIsogram($text)
{
    $text = str_replace('-', '', $text);
    $text = str_replace(' ', '', $text);
    $text = strtolower($text);

    for ($i=0; $i<mb_strlen($text); $i++) {
        for ($j=$i+1; $j<mb_strlen($text); $j++) {
            if ($text[$i] == $text[$j]) {
                return false;
            }
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

test(true, isIsogram('duplicates'));
test(false, isIsogram('eleven'));
test(true, isIsogram('subdermatoglyphic'));
test(false, isIsogram('Alphabet'));
test(true, isIsogram('thumbscrew-japingly'));
test(true, isIsogram('Hjelmqvist-Gryb-Zock-Pfund-Wax'));
test(true, isIsogram('Heizölrückstoßabdämpfung'));
test(false, isIsogram('the quick brown fox'));
test(true, isIsogram('Emily Jung Schwartzkopf'));
test(false, isIsogram('éléphant'));

?>


</body>
</html>