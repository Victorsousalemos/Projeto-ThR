<?php

                function clean_input($input) {
                    $input = trim($input);
                    $input = stripslashes($input);
                    $input = htmlspecialchars($input);

                    return $input;

                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $nome = $_POST['consulta'];                  
                             
                            $nome = clean_input($consulta);
                            
                        }
                    }                   
                    $server = 'localhost';
                    $user = 'root';
                    $password = 'root';
                    $dbname = 'vendas';
                    $port = '3306';

                    $db_connect = new mysqli($server, $user, $password, $dbname, $port);

                    if ($db_connect->connect_error == true) {
                        echo 'Não foi possível conectar à base de dados.';
                    } else {
                        $sql = "INSERT INTO consulta(nome) VALUES ('$nome',)"; 
                                          
                        }
                    

                        $sql = "SELECT * FROM consulta";

                        $result = $db_connect->query($sql);

                        
                <table>
                    <tr>
                        <th>
                            Produtos
                        </th>
                    </tr> 
                            while ($row = $result->fetch_assoc()) {
                                <tr>
                                <td>
                                echo $row['Produtos'];
                                </td>
                                </tr>
                </table>
                    

                    ?>