<?php

                function clean_input($input) {
                    $input = trim($input);
                    $input = stripslashes($input);
                    $input = htmlspecialchars($input);

                    return $input;

                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $nome = $_POST['venda'];                  
                             
                            $nome = clean_input($venda);
                            
                        }
                    }                   
                    
                    echo $venda . '<br>';                           
                    

                    ?>