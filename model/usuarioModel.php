<?php

function inserirUsuario($conn,$nomeusu,$emailusu,$foneusu,$cpfusu,$tipousu,$cepusu,$numusu,$compleusu){
    $query = "INSERT INTO `tbusuario` (`idusu`, `nomeusu`, `emailusu`, `foneusu`, `tipousu`, `cpfusu`, `cepusu`, `numusu`, `compleusu`) VALUES (NULL, '{$nomeusu}', '{$emailusu}', '{$foneusu}', '{$tipousu}', '{$cpfusu}', '{$cepusu}', '{$numusu}', '{$compleusu}')";
    $dados = mysqli_query($conn,$query);
    return $dados; 
}

function visuUsuarioNome($conn,$nomeusu){
    $query = "select * from tbusuario where nomeusu like '%{$nomeusu}%'";
    $resultado = mysqli_query($conn, $query);
    return $resultado;  
}

function visuUsuarioEmail($conn, $emailusu){
    $query = "select * from tbusuario where emailusu like '%{$emailusu}%'";
    $resultado = mysqli_query($conn, $query);
    return $resultado; 
}
function visuUsuarioCodigo($conn, $codigousu){
    $query = "select * from tbusuario where idusu = {$codigousu}";
    $resultado = mysqli_query($conn, $query);
    $resultado = mysqli_fetch_array($resultado);
    return $resultado; 
}

?>