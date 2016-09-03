<?php
$connection=new MongoClient();
$db=$connection->php48;
$rs=$db->goods->find();
var_dump($rs);
foreach($rs as $key=>$value){
	echo $value['name'];
	echo '<br />';
}