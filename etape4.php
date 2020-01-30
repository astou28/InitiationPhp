<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>etape 4</title>
</head>
<body>
    <div class='container-fluid'>
        <div class='row un'>
        <p class="atelier1">Atelier PHP - Etape 4 <br>
            Afficher les table de multiplication.
               </p>
        <div class='col-md-6'>
            <div class="deux"><br><br>
            <div >
                    
                <form action="page4.php" methode="get">
                <h3 class="mag">Merci de selectionner une table pour faire le test!</h3><br><br>
                <div class='row'name='table4'>
                    <div class='col-md-3 mag'>
                        <label for="">Table 1</label>
                        <input type="checkbox" name='checkbox' value="1"><br>
                        <label for="">Table 2</label>
                        <input type="checkbox" name='checkbox' value="2"><br>
                        <label for="">Table 3</label>
                        <input type="checkbox" name='checkbox' value="3"><br>
                        <label for="">Table 4</label>
                        <input type="checkbox" name='checkbox' value="4"><br>
                        <label for="">Table 5</label>
                        <input type="checkbox" name='checkbox' value="5"><br>
                    </div>
                    <div class='col-md-3 mag'>
                        <label for="">Table 6</label>
                        <input type="checkbox" name='checkbox' value="6"><br>
                        <label for="">Table 7</label>
                        <input type="checkbox" name='checkbox' value="7"><br>
                        <label for="">Table 8</label>
                        <input type="checkbox" name='checkbox' value="8"><br>
                        <label for="">Table 9</label>
                        <input type="checkbox" name='checkbox' value="9"><br>
                        <label for="">Table 10</label>
                        <input type="checkbox" name='checkbox' value="10"><br>
                    </div>
                </div>
                </div><br><br>
                <input type="submit" value='voir resultats' class="mag1" name="envoi4">
                <input type="reset" value='Annuler'></div>
                <a href="indexCorrige.php" class="badge badge-secondary">Etape 1</a> 
                <br><br>
            </form>
            
        </div>
        </div>
        
    </div>

</body>
</html>