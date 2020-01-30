<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>etape 1</title>
</head>
<body>
    <div class=couleurBleu>
        <div class="container-fluid ensemble">
            <div class="row">
            <p class="atelier">Atelier PHP - Etape 1 <br>
            Afficher les table de multiplication.
               </p>
                <div class="col-md-8">
                <form action="" method='get'>
                    <br><br>
                <h3>Merci de selectionner une table que vous voulais consulter!</h3>
                <select class="custom-select" name='table'>
                   <option value="1">Table 1</option>
                    <option value="2">Table 2</option>
                    <option value="3">Table 3</option>
                    <option value="4">Table 4</option>
                    <option value="5">Table 5</option>
                    <option value="6">Table 6</option>
                    <option value="7">Table 7</option>
                    <option value="8">Table 8</option>
                    <option value="9">Table 9</option>
                    <option value="10">Table 10</option>
                </select>
                <br><br>
                <input type="submit" value='voir resultats' name="envoyer">
                <input type="reset" value='Annuler'>
            </form><br>
            <div class=''>
            <a href="etape2.php" class="badge badge-secondary">Etape 2</a>
            </div>
            <?php 
                            if (isset( $_GET['envoyer']))
                            {
                                    $val=$_GET['table'];
                                    $res=0;
                            
                                        for($i = 1; $i <= 10 ; $i++)
                                        { 
                                            $res=$val*$i;
                                            echo "$val * $i = $res" ."<br>";
                                        }
                            }
            ?>
            </div>
             
        </div>
        </div>
       </div>
</body>
</html>