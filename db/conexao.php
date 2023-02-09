<?php
    $SGBD_Escolhido = "MySQL";
    //$SGBD_Escolhido = "SQLServer";
    $servidorSQLSrv = 'localhost';
    $servidorMySQL = 'localhost'; //mysqlinhouse.mysql.database.azure.com
    $bancoDeDadosSQLSrv = 'inhouse';
    $bancoDeDadosMySQL = 'inhouse';
    $usuarioSQLSrv = 'sa';
    $usuarioMySQL = 'root';//inhousedbadmin
    $senhaSQLSrv = 'senac111';
    $senhaMySQL = '';//@Senac111
 
    $stringPDOSQLSrv = "sqlsrv:Server=".$servidorSQLSrv."; Database=".$bancoDeDadosSQLSrv;
    $stringPDOMySQL = "mysql:host=".$servidorMySQL."; dbname=".$bancoDeDadosMySQL;
    
    $opcoesPDO = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

    try
    {
        if($SGBD_Escolhido == "SQLServer")
        {
            $conexao = new PDO($stringPDOSQLSrv, $usuarioSQLSrv, $senhaSQLSrv, $opcoesPDO);
        }
        else
        {
            $conexao = new PDO($stringPDOMySQL, $usuarioMySQL, $senhaMySQL, $opcoesPDO);
        }

    }
    catch(PDOException $erro)
    {
        print "<script>alert('Erro ao conectar no banco de dados, entre em contato com o suporte do sistema.')</script>";
    }

?>