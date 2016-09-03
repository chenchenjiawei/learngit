<?php
$connection=new MongoClient();
$db=$connection->php48;
//插入数据
$rs=$db->goods->insert(array('name'=>'dahualang','age'=>21,));
var_dump($rs);
