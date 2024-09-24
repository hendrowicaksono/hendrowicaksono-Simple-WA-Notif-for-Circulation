<?php
$ccnw = array ();
# Connection to SLiMS DB
$connectionParams = [
    'dbname' => 'YOUR_SLiMS_DB_NAME',
    'user' => 'YOUR_SLiMS_DB_USER',
    'password' => 'YOUR_SLiMS_DB_PASSWORD',
    'host' => 'localhost',
    'driver' => 'pdo_mysql',
];
$ccnw['conn'] = \Doctrine\DBAL\DriverManager::getConnection($connectionParams);
# Change to your library name
$ccnw['library_name'] = 'YOUR_LIBRARY_NAME_HERE';
# Change to footer text you wanted. It can be also used for promotion.
$ccnw['footer_text'] = 'Harap simpan resi ini sebagai bukti transaksi.';
$ccnw['mode'] = 'default'; # Modes: default, gearman, nsq

# Gearman Job Server settings
$ccnw['gearman_host'] = '127.0.0.1';
$ccnw['gearman_port'] = '4730';

# NSQ message broker settings
$nsq_mode = 'prod';
$nsq_host = '127.0.0.1';
$nsq_port = '4151';
$nsq_topic = 'circulation';
$ccnw['nsq_url'] = 'http://'.$nsq_host.':'.$nsq_port.'/pub?topic='.$nsq_topic;

# Provider
$ccnw['provider'] = 'fonnte'; # Options: 'whacenter', 'fonnte'
$ccnw['token'] = 'YOUR_TOKEN_HERE'; # used by fonnte
$ccnw['device_id'] = 'YOUR_DEVICE_ID_HERE'; # used by whacenter
