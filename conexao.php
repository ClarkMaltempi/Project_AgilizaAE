
<?php

$banco = false;

function GetBanco() {

    global $banco;

    $ambiente = substr($_SERVER['HTTP_HOST'], 0, 1); 
    if($banco)
    return $banco;

    if ( $ambiente == '1' ) {
        $banco = new mysqli("localhost", "root", "", "db_agiliza_ae");
    }else{
        $banco = new mysqli("localhost", "root", "", "db_agiliza_ae");
    }
    
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    mysqli_set_charset( $banco, 'utf8');

    return $banco;
    
   //if ($banco->connect_errno) {
       // echo "falha ao conectar:(" .$banco->connect_errno.")".$banco->connect_errno;
      //  exit();
    //} else {
      //  mysqli_set_charset($banco, 'utf8');
      ///  echo "Conectado ao Banco de Dados";
       // return $banco;
    //}
}


function CloseBanco() {
    global $banco;
    if( $banco != false )
        mysqli_close($banco);
    $banco = false;
}

$conexao=GetBanco(); //option => use var $conexao



?>