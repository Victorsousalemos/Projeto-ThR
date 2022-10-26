<?php

                function clean_input($input) {
                    $input = trim($input);
                    $input = stripslashes($input);
                    $input = htmlspecialchars($input);

                    return $input;

                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $nome = $_POST['produto'];          
                             
                            $nome = clean_input($produto);
                          
                        }
                    }      

                    echo $produto . '<br>';                                 
                    

                    ?>