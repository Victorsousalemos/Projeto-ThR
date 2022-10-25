<?php

                    function clean_input($input) {
                        $input = trim($input);
                        $input = stripslashes($input);
                        $input = htmlspecialchars($input);

                        return $input;
                    }

                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $nome = $_POST['nome'];
                        $email = $_POST['email'];
                        $mensagem = $_POST['mensagem'];
                        $telefone = $_POST['telefone'];
                        $data = $_POST['data'];
                        $num_pessoas = $_POST['num_pessoas'];

                    }

                    $nome = clean_input($nome);
                    $email = clean_input($email);
                    $mensagem = clean_input($mensagem);
                    $telefone = clean_input($telefone);
                    $data = clean_input($data);
                    $num_pessoas = clean_input($num_pessoas);

                    echo $nome . '<br>';
                    echo $email . '<br>'; 
                    echo $mensagem . '<br>';
                    echo $telefone . '<br>'; 
                    echo $data . '<br>'; 
                    echo $num_pessoas . '<br>'; 

                    ?>