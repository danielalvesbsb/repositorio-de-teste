<?php
//as variaveis digitadarecebe os dados digitado na pagina aonterior 



//conexÃ£o mysql
//Configura de acesso ao banco de dados
$conf['host'] = "localhost"; //host do banco de dados
$conf['bd'] = "projeto_nextjob"; //nome do banco
$conf['usuario'] = "nextjob.inforcentersistemas"; //nome de usuÃ¡rio de acesso ao banco
$conf['senha'] = "nextjob"; //senha de acesso ao banco de dados

//conexÃ£o com o banco de dados
$conexao = @mysql_connect($conf['host'], $conf['usuario'], $conf['senha']) or die("ERRO NA CONEXÃƒO COM MYSQL");
$db = @mysql_select_db($conf['bd'], $conexao) or die("ERRO NA SELEÃ‡ÃƒO DO BANCO DE DADOS MYSQL");
?>