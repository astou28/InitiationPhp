
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>etape 2 quizz</title>
</head>
<body>
<?php

session_start();
srand(); 

if (!isset($_GET['envoi'])) {
    $_SESSION['rand1']=$_GET["table"];
    $_SESSION['rand2']=rand(1,10); 
    
}
$resultat=$_SESSION['rand1']*$_SESSION['rand2'];



echo "Calculer la multiplication de ces valeurs " .$_SESSION['rand1'] ." * " .$_SESSION['rand2']." Le resultat est :";

if ( isset($_POST['envoi'])) {

    $verif=$_POST['reponse'];
    if($verif== $resultat){
    echo ('vrai');
}else{
    echo('faux');
} 
}

?>
    <form action="" method="post">
    <br>
        <input type="text" value="" name='reponse' placeholder='reponse' >
        <button type='submit' name='envoi'>envoyer la reponse</button>
    </form>
</body>
</html>

    