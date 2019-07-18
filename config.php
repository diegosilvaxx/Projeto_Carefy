<?php
require 'environment.php';

$config = array();

if(ENVIRONMENT == 'development'){
    $config['dbname'] = 'globa813_prosel_carefy';
    $config['host'] = '192.185.209.187';
    $config['dbuser'] = 'globa813_desafio';
    $config['dbpass'] = 'carefy123';
}else{
    $config['dbname'] = 'globa813_prosel_carefy';
    $config['host'] = '192.185.209.187';
    $config['dbuser'] = 'globa813_desafio';
    $config['dbpass'] = 'carefy123';
}

global $db;
try{
    $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
}catch(PDOException $e){
    echo "ERRO: ".$e->getMessage();
    exit;
}