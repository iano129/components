<?php

function servidorHttp(){ 
    echo '1. Servidor HTTP recebeu a requisição. <br>'; 
    router(); 
}

function router(){
    echo '2. Router recebeu a requisição. <br>';
}

servidorHttp();