<?php
session_start();
if (isset($_GET['envoi4'])) {
    $_SESSION['a'] = $_GET['checkbox'];
    $_SESSION['val'] = rand(0, 10);
    $_SESSION['score'] = 0;
}
?>
<?php
echo $_SESSION['a'] . 'x' . $_SESSION['val']; ?>
<!-- combien vaut: 
<?php
$val = rand(0, 10);

?> -->
<form action="">
    <input type="text" name="valeur">
    <input type="submit" name="valide" value="valide">
</form>
<?php

if (isset($_GET['valide'])) {
    $b = $_GET['valeur'];
    $trouve = 0;
    $r = $_SESSION['val'] * $_SESSION['a'];

    $_SESSION['score']++;

    if ($r == $b) {
        echo $b . " = vrai " . $_SESSION['score'];
        $trouve = 1;
        $_SESSION['t'] = $trouve;
    } else echo "faux " . $_SESSION['score'];

    if ($_SESSION['t'] == 2) {
        echo "Score : " . $_SESSION['score'];
    }
    $_SESSION['val'] = rand(0, 10);
}
?>