            <?php 
                    for($i = 1; $i <= 10 ; $i++){
                                if (isset( $_GET['check_'.$i]))
                                {
                                echo('la mutiplication de '.$i. ' :<br>');

                                            for($j = 1; $j <= 10 ; $j++)
                                            { 
                                                $res = $i*$j;
                                                echo "$i * $j = $res" ."<br>";
                                            }
                                }
                            }
                            ?>
                            