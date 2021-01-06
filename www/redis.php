<?php
$redis = new Redis();
$redis->connect('redis', 6379); //连接Redis
$redis->auth('123456'); //密码验证

$redis->set('name', '98k');

var_dump($redis->get('name'));