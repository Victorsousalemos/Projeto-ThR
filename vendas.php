<?php

                function clean_input($input) {
                    $input = trim($input);
                    $input = stripslashes($input);
                    $input = htmlspecialchars($input);

                    return $input;

                   }

                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $nome = $_POST['vendas'];                  
                             
                            $nome = clean_input($vendas);
                            
                        }
                          
                   
                    $server = 'localhost';
                    $user = 'root';
                    $password = '';
                    $dbname = 'vendas';
                    $port = '3306';

                    $db_connect = new mysqli($server, $user, $password, $dbname, $port);

                    if ($db_connect->connect_error == true) {
                        echo 'Não foi possível conectar à base de dados.';
                    } else {
                        $sql = "INSERT INTO vendas(produto,nome,email,telefone) VALUES ('$produto','$nome', '$email', '$telefone')";
                    
                     $db_connect->query($sql);
                            
                     echo "<script> alert('Sucesso')</script>";
                        
                        echo "<script>setTimeout(function(){
                            window.location.href = 'index.html'}, 2000)</script>"; 


                            
                                                            
                    }

                    ?>
