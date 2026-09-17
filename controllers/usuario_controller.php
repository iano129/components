<?php

function usuarioController(){
    echo '6. Controller Recebeu a requisiçao.<br>';
    $usuarios = usuarioService();
    echo '8. Controller recebeu os dados do Service.<br>';
    echo 'Usuarios encontrados: <br>';
    foreach($usuarios as $usuario){
        echo "- ".$usuario."<br>";
    }
}
