<?php

                function clean_input($input) {
                    $input = trim($input);
                    $input = stripslashes($input);
                    $input = htmlspecialchars($input);

                    return $input;

                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $nome = $_POST['nome'];
                        $email = $_POST['email'];                        
                        $telefone = $_POST['telefone'];
                             
                        
                            $nome = clean_input($nome);
                            $email = clean_input($email);                    
                            $telefone = clean_input($telefone);
                        }
                    }                   
                    
                    

                    echo $nome . '<br>';
                    echo $email . '<br>';                     
                    echo $telefone . '<br>';                 
                    

                    ?>


