<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>etape2</title>
</head>
<body>
        <div class='container-fluid'>
            <div class='row un'>
            <p class="atelier1">Atelier PHP - Etape 2 <br>
            Afficher les table de multiplication.
               </p>
                <div class='col-lg-6'>
                 <div class='deux'>
                     <br><br>
                     <h3 class="mag">Merci de cocher une table que vous voulais consulter!</h3><br><br>
                     <div class="row">
                        <div class='col-md-3 mag'>
                        <form action="" methode="get">
                        <label for="">Table 1</label>
                        <input type="checkbox" name='check_1'><br>
                        <label for="">Table 2</label>
                        <input type="checkbox" name='check_2'><br>
                        <label for="">Table 3</label>
                        <input type="checkbox" name='check_3'><br>
                        <label for="">Table 4</label>
                        <input type="checkbox" name='check_4'><br>
                        <label for="">Table 5</label>
                        <input type="checkbox" name='check_5'><br>
                        
                        </div>
                        <div class='col-md-3 mag'>
                        <label for="">Table 6</label>
                        <input type="checkbox" name='check_6'><br>
                        <label for="">Table 7</label>
                        <input type="checkbox" name='check_7'><br>
                        <label for="">Table 8</label>
                        <input type="checkbox" name='check_8'><br>
                        <label for="">Table 9</label>
                        <input type="checkbox" name='check_9'><br>
                        <label for="">Table 10</label>
                        <input type="checkbox" name='check_10'><br>
                    </div> 
                   
                    </div>
                    <br><br>
                        <input type="submit" value='voir resultats' class="mag1">
                        <input type="reset" value='Annuler'> <br><br>
                        </form>
                        <a href="etape3.php" class="badge badge-secondary">Etape 3</a>
                    </div>
                   
                <div class='resultat' style="position: relative;top:10%">

                    <?php
                    include 'page2.php'; 
                    ?>
                </div>
        </div>
            </div>
        </div>
</body>
</html>