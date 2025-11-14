<?php
    $host = 'localhost';
    $usuario = 'aluno';
    $senha = '123';
    $banco = 'boliche';

    try {
        ///conexão com o banco de dados utilizando PDO
        $conexao = new PDO("mysql:host=$host;dbname=$banco;charset=utf8",$usuario, $senha);
        //Habilitar exceções para erros de PDO
        $conexao ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }    catch(PDOException $e) {
            //Tratar erros de conexão
            die("Não foi possível conectar ao banco de dados. Erro detectado: ". $e->getMessage());
    }