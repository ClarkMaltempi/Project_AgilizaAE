<?php

$banco = false;

function GetBanco() {
    global $banco;
    $ambiente = substr($_SERVER['HTTP_HOST'],  0, 1); 
    if( $banco )
        return $banco;
        if ( $ambiente =='1' ) {
            // Desenvolvimento
            $banco = new mysqli("localhost", "root", "", "db_agilizae");
        }else{
            // Produção
            $banco = new mysqli("localhost", "root", "", "db_agilizae");  
        }
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    mysqli_set_charset( $banco, 'utf8');
    return $banco;
}

function CloseBanco() {
    global $banco;
    if( $banco != false )
        mysqli_close($banco);
    $banco = false;
}

$conexao=GetBanco();
