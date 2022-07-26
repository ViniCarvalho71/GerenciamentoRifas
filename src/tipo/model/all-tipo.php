<?php

    include('../../conexao/conn.php');



    $dados = array();
    $sql = "select * from TIPO ";
    $resultado = $pdo->query($sql);

    if($resultado){
        
        while($row = $resultado->fetch(PDO::FETCH_ASSOC)){
            $dados[] = array_map(NULL, $row);
        }
        
    }

    echo json_encode($dados);